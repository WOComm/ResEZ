<?php
/**
 * Mini-component core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4
* @package Jomres
* @subpackage mini-components
* @copyright	2005-2009 Vince Wooll

Jomres is distributed as a mix of two licenses (excepting other files in the libraries folder, which are independantly licensed). 

The first, proprietary license, refers to Jomres as a package. You cannot share it, period. You can see the full license here http://www.jomres.net/license.html. There are some exceptions, and these files are independantly licensed (see the /jomres/libraries/phptools folder for example)
The files in the /jomres/core-minicomponents,  /jomres/libraries/jomres/cms_specific and the /jomres/templates folders, whilst copyright Vince Wooll, are licensed differently to allow those users who wish, to develop and distribute their own third party plugins for Jomres. Those files are licensed under the MIT license, which allows third party vendors to modify them to suit their own requirements and if so desired, distribute them for free or cost. 

################################################################
This file is subject to The MIT License. For licencing information, please visit 
http://www.jomres.net/index.php?option=com_content&task=view&id=214&Itemid=86 and http://www.jomres.net/license.html
################################################################
*/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
// ################################################################

/**
#
 * Saves a tariff
 #
* @package Jomres
#
 */
class j02214savetariff_advanced {
	/**
	#
	 * Constructor: Saves a tariff
	#
	 */
	function j02214savetariff_advanced()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		global $tariffUid,$mrConfig;
		if ( $mrConfig['tariffmode']=="2")
			$MiniComponents->triggerEvent('02215'); //
		else
			{
			if (!jomresCheckToken()) {trigger_error ("Invalid token", E_USER_ERROR);}
			$defaultProperty=getDefaultProperty();
			jr_import('jomres_cache');
			$cache = new jomres_cache();
			$cache->trashCacheForProperty($defaultProperty);
			$tariffUid         = intval( jomresGetParam( $_POST, 'tariffUid', 0 ) );
			$rate_title        = getEscaped( jomresGetParam( $_POST, 'rate_title', "" ) );
			$rate_description  = getEscaped( jomresGetParam( $_POST, 'rate_description', "" ) );
			$roomrateperday    = floatval(jomresGetParam( $_POST, 'roomrateperday', '' ) );
			$mindays           = intval( jomresGetParam( $_POST, 'mindays', 0 ) );
			$maxdays           = intval( jomresGetParam( $_POST, 'maxdays', 0 ) );
			$minpeople         = intval( jomresGetParam( $_POST, 'minpeople', 0 ) );
			$maxpeople         = intval( jomresGetParam( $_POST, 'maxpeople', 0  ));
			$roomClass         = intval( jomresGetParam( $_POST, 'roomClass', 0 ) );
			$ignore_pppn       = intval( jomresGetParam( $_POST, 'ignore_pppn', 0 ) );
			$allow_we          = intval( jomresGetParam( $_POST, 'allow_we', 0 ) );
			$weekendonly       = intval( jomresGetParam( $_POST, 'weekendonly', 0 ) );
			$dayofweek         = intval( jomresGetParam( $_POST, 'dayofweek', 7 ) );
			$minrooms_alreadyselected       = intval( jomresGetParam( $_POST, 'minrooms_alreadyselected', 0 ) );
			$maxrooms_alreadyselected       = intval( jomresGetParam( $_POST, 'maxrooms_alreadyselected', 100 ) );
			
			if ($mindays==0)
				$mindays=1;
			if ($maxdays==0)
				$maxdays=100;
			if ($minpeople==0)
				$minpeople=1;
			if ($maxpeople==0)
				$maxpeople=100;

			$validfrom=JSCalConvertInputDates($_POST['validfrom']);
			$validto=JSCalConvertInputDates($_POST['validto']);

			$validfrom_ts=str_replace("/","-",$validfrom);
			$validto_ts=str_replace("/","-",$validto);
			
			if ($tariffUid=="")
				{
				$saveMessage=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_SAVE_INSERT',_JOMRES_COM_MR_LISTTARIFF_SAVE_INSERT,FALSE);
				$jomres_messaging =jomres_getSingleton('jomres_messages');
				$jomres_messaging->set_message($saveMessage);
				$query="INSERT INTO #__jomres_rates (
					`rate_title`,`rate_description`,`validfrom`,`validto`,`roomrateperday`,
					`mindays`,`maxdays`,`minpeople`,`maxpeople`,`roomclass_uid`,
					`ignore_pppn`,`allow_ph`,`allow_we`,`weekendonly`,`dayofweek`,`minrooms_alreadyselected`,`maxrooms_alreadyselected`,`validfrom_ts`,
					`validto_ts`,`property_uid`
					)VALUES (
					'$rate_title','$rate_description','$validfrom','$validto','".(float)$roomrateperday."',
					'".(int)$mindays."','".(int)$maxdays."','".(int)$minpeople."','".(int)$maxpeople."','".(int)$roomClass."',
					'".(int)$ignore_pppn."','".(int)$allow_ph."','".(int)$allow_we."','".(int)$weekendonly."',".(int)$dayofweek.",".(int)$minrooms_alreadyselected.",".(int)$maxrooms_alreadyselected.",'$validfrom_ts',
					'$validto_ts','".(int)$defaultProperty."'
					)";
				if (doInsertSql($query,jr_gettext('_JOMRES_MR_AUDIT_INSERT_TARIFF',_JOMRES_MR_AUDIT_INSERT_TARIFF,FALSE))) returnToPropertyConfig($saveMessage);
				}
			else
				{
				$saveMessage=jr_gettext('_JOMRES_COM_MR_LISTTARIFF_SAVE_UPDATE',_JOMRES_COM_MR_LISTTARIFF_SAVE_UPDATE,FALSE);
				$jomres_messaging =jomres_getSingleton('jomres_messages');
				$jomres_messaging->set_message($saveMessage);
				$query="UPDATE #__jomres_rates SET 
					`rate_title`='$rate_title',
					`rate_description`='$rate_description',
					`validfrom`= '$validfrom',
					`validto`='$validto',
					`roomrateperday`='".(float)$roomrateperday."',
					`mindays`='".(int)$mindays."',
					`maxdays`='".(int)$maxdays."',
					`minpeople`='".(int)$minpeople."',
					`maxpeople`='".(int)$maxpeople."',
					`roomclass_uid`='".(int)$roomClass."',
					`ignore_pppn`='".(int)$ignore_pppn."',
					`allow_we`='".(int)$allow_we."',
					`weekendonly`='".(int)$weekendonly."',
					`dayofweek`=".(int)$dayofweek.",
					`minrooms_alreadyselected`=".(int)$minrooms_alreadyselected.",
					`maxrooms_alreadyselected`=".(int)$maxrooms_alreadyselected.",
					`validfrom_ts`='$validfrom_ts',
					`validto_ts`='$validto_ts' 
					WHERE rates_uid='".(int)$tariffUid."' AND property_uid = '".(int)$defaultProperty."'";
					
				if (doInsertSql($query,jr_gettext('_JOMRES_MR_AUDIT_UPDATE_TARIFF',_JOMRES_MR_AUDIT_UPDATE_TARIFF,FALSE))) returnToPropertyConfig($saveMessage);
				}
			trigger_error ("Unable to update tariff details, mysql db failure", E_USER_ERROR);
			}
		}

	/**
	#
	 * Must be included in every mini-component
	#
	 * Returns any settings the the mini-component wants to send back to the calling script. In addition to being returned to the calling script they are put into an array in the mcHandler object as eg. $mcHandler->miniComponentData[$ePoint][$eName]
	#
	 */
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
?>