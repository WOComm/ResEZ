<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.3.1
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################
	
	/**
	 * @package Jomres\Core\Minicomponents
	 *
	 * 
	 */

class j10001control_panel
{	
	/**
	 *
	 * Constructor
	 * 
	 * Main functionality of the Minicomponent 
	 *
	 * 
	 * 
	 */
	 
	public function __construct()
	{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}

		if (AJAXCALL) {
			return;
		}

		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();
		
		// Warnings/error reports generated by plugins
		$MiniComponents->triggerEvent('13100'); 
		
		$plugin_warnings = get_showtime("plugin_warnings");
		if (!empty($plugin_warnings)) {
			$warnings = array();
			foreach ($plugin_warnings as $alert ) {
				$warning = array();
				$warning['PLUGIN_WARNING'] = $alert;
				$warnings[] = $warning;
			}
		}
		
		$output = array();
		$page_output = array();

		//New property button
		$output['NEW_PROPERTY_BUTTON'] = $MiniComponents->specificEvent('16000', 'new_property_button', array('output_now' => false));


	//jomres warnings
		$output['JOMRES_WARNINGS'] = $MiniComponents->specificEvent('16000', 'jomres_warnings', array('output_now' => false));

		//list properties
		$output['PROPERTIES_TABLE'] = $MiniComponents->specificEvent('16000', 'listproperties', array('output_now' => false, 'show_as_panel' => true));

		//jomres news
		$output['JOMRES_NEWS'] = $MiniComponents->specificEvent('16000', 'jomres_news', array('output_now' => false));

		//jomres system info
		$output['JOMRES_SYSTEM_INFO'] = $MiniComponents->specificEvent('16000', 'jomres_system_info', array('output_now' => false));
		
		//jomres income overview
		$output['JOMRES_INCOME_OVERVIEW'] = $MiniComponents->specificEvent('16000', 'jomres_income_overview', array('output_now' => false));
		
		//jomres properties overview
		$output['JOMRES_PROPERTIES_OVERVIEW'] = $MiniComponents->specificEvent('16000', 'jomres_properties_overview', array('output_now' => false));
		
		//jomres reviews overview
		$output['JOMRES_REVIEWS_OVERVIEW'] = $MiniComponents->specificEvent('16000', 'jomres_reviews_overview', array('output_now' => false));

		//bookings chart
		$output['BOOKINGS_CHART'] = $MiniComponents->specificEvent('16000', 'chart_bookings', array('output_now' => false, 'height'=> 300));

		//commissions chart
		$output['COMMISSIONS_CHART'] = '';
		if (isset($MiniComponents->registeredClasses['16000']['chart_commission']) && (int) $jrConfig['use_commission'] == 1) {
			$output['COMMISSIONS_CHART'] = $MiniComponents->specificEvent('16000', 'chart_commission', array('output_now' => false, 'height'=> 300));
		}

		//subscriptions chart
		$output['SUBSCRIPTIONS_CHART'] = '';
		if (isset($MiniComponents->registeredClasses['16000']['chart_subscriptions']) && (int) $jrConfig['useSubscriptions'] == 1) {
			$output['SUBSCRIPTIONS_CHART'] = $MiniComponents->specificEvent('16000', 'chart_subscriptions', array('output_now' => false, 'height'=> 300));
		}

		//bookings chart
		$output['SYNDICATION_NETWORK'] = $MiniComponents->specificEvent('16000', 'jomres_syndication_overview', array('output_now' => false, 'height'=> 300));
		
		
		$pageoutput[ ] = $output;
		$tmpl = new patTemplate();
		$tmpl->setRoot(JOMRES_TEMPLATEPATH_ADMINISTRATOR);
		$tmpl->addRows('pageoutput', $pageoutput);
		if (!empty($warnings)) {
			$tmpl->addRows('plugin_warnings', $warnings);
		}
		
		$tmpl->readTemplatesFromInput('control_panel.html');
		$tmpl->displayParsedTemplate();
	}


	public function getRetVals()
	{
		return null;
	}
}
