<?php
/**
* Jomres CMS Agnostic Plugin
* @author Woollyinwales IT <sales@jomres.net>
 * @version Jomres 9.23.0
* @package Jomres
* @copyright	2005-2015 Woollyinwales IT
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project.
**/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################

class j06002save_tariff_micromanage 
	{
	function __construct()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		
		date_default_timezone_set('UTC'); // Must be left in place, without it the date range selectors will not work properly on servers with different timezones.
		
		$defaultProperty = getDefaultProperty();
		
		$mrConfig = getPropertySpecificSettings();
		
		if ($mrConfig['tariffmode'] != '2' || $mrConfig[ 'is_real_estate_listing' ] == '1' || get_showtime('is_jintour_property'))
			return;
		
		jr_import('jrportal_rates');
		$jrportal_rates = new jrportal_rates();
		$jrportal_rates->property_uid = $defaultProperty;
		
		$jrportal_rates->tarifftype_id  			= (int)jomresGetParam( $_POST, 'tarifftypeid', 0 );
		$jrportal_rates->rate_title 				= jomresGetParam( $_POST, 'tarifftypename', $jrportal_rates->rates_defaults['rate_title'] );
		$jrportal_rates->rate_description 			= jomresGetParam( $_POST, 'tarifftypedesc', $jrportal_rates->rates_defaults['rate_description'] );
		$jrportal_rates->maxdays 					= (int)jomresGetParam( $_POST, 'maxdays', $jrportal_rates->rates_defaults['maxdays'] );
		$jrportal_rates->minpeople 					= (int)jomresGetParam( $_POST, 'minpeople', $jrportal_rates->rates_defaults['minpeople'] );
		$jrportal_rates->maxpeople 					= (int)jomresGetParam( $_POST, 'maxpeople', $jrportal_rates->rates_defaults['maxpeople'] );
		$jrportal_rates->roomclass_uid 				= (int)jomresGetParam( $_POST, 'roomClass', $jrportal_rates->rates_defaults['roomclass_uid'] );
		$jrportal_rates->dayofweek 					= (int)jomresGetParam( $_POST, 'fixed_dayofweek', $jrportal_rates->rates_defaults['dayofweek'] );
		$jrportal_rates->ignore_pppn 				= (int)jomresGetParam( $_POST, 'ignore_pppn', $jrportal_rates->rates_defaults['ignore_pppn'] );
		$jrportal_rates->allow_we 					= (int)jomresGetParam( $_POST, 'allow_we', $jrportal_rates->rates_defaults['allow_we'] );
		$jrportal_rates->weekendonly 				= (int)jomresGetParam( $_POST, 'weekendonly', $jrportal_rates->rates_defaults['weekendonly'] );
		$jrportal_rates->minrooms_alreadyselected 	= (int)jomresGetParam( $_POST, 'minrooms_alreadyselected', $jrportal_rates->rates_defaults['minrooms_alreadyselected'] );
		$jrportal_rates->maxrooms_alreadyselected 	= (int)jomresGetParam( $_POST, 'maxrooms_alreadyselected', $jrportal_rates->rates_defaults['maxrooms_alreadyselected'] );

		//tariffs and min days, not sanitized yet. The rates class will do this
		//TODO find a better way
		$jrportal_rates->dates_rates				= $_POST['tariffinput'];
		$jrportal_rates->dates_mindays				= $_POST['mindaysinput'];
		
		//save tariff
		$jrportal_rates->save_rate();
		
		$saveMessage = jr_gettext('_JOMRES_MR_AUDIT_INSERT_TARIFF','_JOMRES_MR_AUDIT_INSERT_TARIFF',false);
		
		$jomres_messaging =jomres_singleton_abstract::getInstance('jomres_messages');
		$jomres_messaging->set_message($saveMessage);
		
		jomresRedirect( jomresURL( JOMRES_SITEPAGE_URL . "&task=list_tariffs_micromanage" ), $saveMessage );
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
