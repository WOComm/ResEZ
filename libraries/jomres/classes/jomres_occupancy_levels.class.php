<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.23.0
 *
 * @copyright	2005-2020 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################
	
	/**
	 *
	 * @package Jomres\Core\Classes
	 *
	 */

class jomres_occupancy_levels
{	
	/**
	 * 
	 *
	 *
	 */

	public function __construct( $property_uid = 0 )
	{
		$this->property_uid = $property_uid;

		if ($this->property_uid > 0) {
			$this->mrConfig = getPropertySpecificSettings( $this->property_uid );

			if ( isset($this->mrConfig['occupancy_levels']) ) {
				$this->occupancy_levels = unserialize(base64_decode($this->mrConfig['occupancy_levels']));
			} else {
				$current_property_details = jomres_singleton_abstract::getInstance('basic_property_details');
				$current_property_details->gather_data ( $this->property_uid );

				$occupancy_levels = array();
				if (!empty($current_property_details->room_types)) {
					foreach ($current_property_details->room_types as $room_type_id => $room_type ) {
						$occupancy_levels [$room_type_id] = array (
							"room_type_name"	=> $room_type['abbv'] ,
							"room_type_id"		=> $room_type_id ,
							"max_adults"		=> 2 ,
							"max_children"		=> 0 ,
							"max_occupancy"		=> 0
						);
					}
				}
				$this->occupancy_levels = $occupancy_levels;
			}
		}

	}

	public function set_occupancy_level ( $id = 0 , $max_adults = 0 , $max_children = 0 , $max_occupancy = 0 )
	{
		if ( $this->property_uid == 0 ) {
			throw new Exception('Error: Property uid not set ');
		}

		if ( $id == 0 ) {
			throw new Exception('Room type id not set ');
		}

		if ( !isset($this->occupancy_levels[$id]) ) {
			throw new Exception('Invalid room type id set');
		}

		$room_type_name = $this->occupancy_levels[$id] ["room_type_name"];

		$this->occupancy_levels[$id] = array ( "room_type_name"	=> $room_type_name  , "room_type_id" => $id, "max_adults" => (int)$max_adults , "max_children" => (int)$max_children , "max_occupancy" => (int)$max_occupancy );

	}

	public function save_occupancy_levels($room_type_id = 0 )
	{
		if ( $this->property_uid == 0 ) {
			throw new Exception('Error: Property uid not set ');
		}

		if ( !isset($this->occupancy_levels[$room_type_id]) ) {
			throw new Exception('Room type id not set');
		}

		$policies = base64_encode(serialize($this->occupancy_levels));

		$query = "SELECT uid FROM #__jomres_settings WHERE property_uid = '".(int) $this->property_uid."' and akey = 'occupancy_levels' ";
		$result = doSelectSql($query);
		if (empty($result)) {
			$query = "INSERT INTO #__jomres_settings (`property_uid`,`akey`,`value`) VALUES (".(int) $this->property_uid." , 'occupancy_levels' , '".$policies."')";
		} else {
			$query = "UPDATE #__jomres_settings SET `value`='".$policies."' WHERE `property_uid` = ".(int)  $this->property_uid." and `akey` = 'occupancy_levels' ";
		}
		doInsertSql($query);

		// Now to update rooms of this type with the updated occupancy levels

		$query = "UPDATE #__jomres_rooms SET 
			max_people = ".$this->occupancy_levels[$room_type_id]['max_occupancy']." ,  
			max_adults = ".$this->occupancy_levels[$room_type_id]['max_adults']." , 
			max_children = ".$this->occupancy_levels[$room_type_id]['max_children']." 
			WHERE propertys_uid = ".(int) $this->property_uid." AND room_classes_uid = ".$room_type_id." ";

		doInsertSql($query);

		jr_import('jomres_calculate_accommodates_value');
		$jomres_calculate_accommodates_value = new jomres_calculate_accommodates_value( $this->property_uid );
		$jomres_calculate_accommodates_value->calculate_accommodates_value();

	}

	/*
	 *
	 * Published properties, if set, are used as a filter to only return those levels for published properties
	 *
	 */
	public function get_all_occupancy_levels( $published_properties = array() )
	{
		$query = "SELECT property_uid ,value FROM #__jomres_settings WHERE akey = 'occupancy_levels'";
		$all_levels_query_result = doSelectSql($query);

		$occupancy_levels = array();
		if (!empty($all_levels_query_result)) {
			foreach ( $all_levels_query_result as $result ) {
				$room_types = unserialize(base64_decode($result->value));

				if (!empty($published_properties)) {
					if ( in_array($result->property_uid,$published_properties) ) {
						foreach ($room_types as $room ) {
							$occupancy_levels[] = array ("property_uid" => $result->property_uid , "max_adults" => $room['max_adults'] , "max_children" => $room['max_children']) ;
						}
					}
				} else {
					foreach ($room_types as $room ) {
						$occupancy_levels[] = array("property_uid" => $result->property_uid, "max_adults" => $room['max_adults'], "max_children" => $room['max_children']);
					}
				}
			}

			uasort($occupancy_levels, function($a, $b) {
				return $a['max_adults'] <=> $b['max_adults'];
			});

		}
		return $occupancy_levels;
	}

	public function find_highest_levels($all_occupancy_levels = array() )
	{
		if (empty($all_occupancy_levels)) {
			return [];
		}

		$highest_adults = 0;
		$highest_children = 0;
		foreach ($all_occupancy_levels as $level) {
			 if ($level['max_adults'] > $highest_adults) {
				 $highest_adults = $level['max_adults'];
			 }
			if ($level['max_children'] > $highest_children) {
				$highest_children = $level['max_children'];
			}
		}

		return [ "highest_adults" => $highest_adults , "highest_children" => $highest_children ] ;

	}
}