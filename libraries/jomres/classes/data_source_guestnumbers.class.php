<?php
	/**
	 * Core file.
	 *
	 * @author Vince Wooll <sales@jomres.net>
	 *
	  *  @version Jomres 10.5.2
	 *
	 * @copyright	2005-2022 Vince Wooll
	 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
	 **/

// ################################################################
	defined('_JOMRES_INITCHECK') or die('');
// ################################################################

	class data_source_guestnumbers extends jomres_data_source_base
	{
		public function build_data_cache_file()
		{

			$data = array();
			foreach ($this->cms_languages as $lang) {
				$data[$lang] = [];
			}

			$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
			$jrConfig = $siteConfig->get();

			if ($jrConfig[ 'guestnumbersearch' ] == 'equal') {
				$query = 'SELECT DISTINCT maxpeople FROM #__jomres_rates ORDER by maxpeople ASC';
				$rateList = doSelectSql($query);
				foreach ($rateList as $rate) {
					$result[ ] = $rate->maxpeople;
				}
			} else {
				$query = 'SELECT MAX(maxpeople) FROM #__jomres_rates LIMIT 1';
				$maxpeople = (int)doSelectSql($query, 1);

				if ($maxpeople > 100) {
					$maxpeople = 100;
				}

				for ($i = 1; $i <= $maxpeople; ++$i) {
					$result[] = $i;
				}
			}

			if (!empty($result)) {
				foreach ($this->cms_languages as $lang) {
					$data[$lang] = $result;
				}
			}
			$this->data = $data;
			$this->save_data_source();
		}
	}
