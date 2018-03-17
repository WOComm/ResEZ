<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.10.1
 *
 * @copyright	2005-2018 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
defined('_JOMRES_INITCHECK') or die('');

$jrConfig = array(
  'version' => '9.10.1',
  'defaultCrate' => '1',
  'property_list_limit' => '9',
  'useGlobalCurrency' => '1',
  'globalCurrencyCode' => 'EUR',
  'google_maps_api_key' => '',
  'editingModeAffectsAllProperties' => '0',
  'allowHTMLeditor' => '1',
  'selfRegistrationAllowed' => '1',
  'cal_input' => '%d/%m/%Y',
  'errorChecking' => '0',
  'dumpTemplate' => '0',
  'maxwidth' => '900',
  'fileSize' => '5000',
  'propertyListDescriptionLimit' => '120',
  'randomsearchlimit' => '5000',
  'useGlobalPFeatures' => '1',
  'useGlobalRoomTypes' => '1',
  'dynamicMinIntervalRecalculation' => '0',
  'disableAudit' => '1',
  'allowedTags' => '|||||||||;pre&#38;#38;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;#62;||||;p&#38;#38;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;#62;',
  'emailErrors' => '0',
  'composite_property_details' => '1',
  'integratedSearch_enable' => '1',
  'integratedSearch_useCols' => '0',
  'integratedSearch_featurecols' => '3',
  'integratedSearch_selectcombo' => '1',
  'integratedSearch_propertyname' => '0',
  'integratedSearch_propertyname_dropdown' => '1',
  'integratedSearch_geosearchtype' => '',
  'integratedSearch_geosearchtype_dropdown' => '1',
  'integratedSearch_ptype' => '1',
  'integratedSearch_category' => '0',
  'integratedSearch_ptype_dropdown' => '1',
  'integratedSearch_room_type' => '0',
  'integratedSearch_room_type_dropdown' => '1',
  'integratedSearch_features' => '0',
  'integratedSearch_features_dropdown' => '1',
  'integratedSearch_description' => '0',
  'integratedSearch_availability' => '1',
  'integratedSearch_priceranges' => '0',
  'integratedSearch_pricerange_increments' => '20',
  'integratedSearch_guestnumber' => '1',
  'integratedSearch_stars' => '0',
  'showLangDropdown' => '0',
  'useJomresMessaging' => '1',
  'useSubscriptions' => '0',
  'useNewusers' => '0',
  'business_name' => 'BLANK',
  'business_vat_number' => 'BLANK',
  'business_address' => 'BLANK',
  'business_street' => 'BLANK',
  'business_town' => 'BLANK',
  'business_region' => '1061',
  'business_country' => 'GB',
  'business_postcode' => 'BLANK',
  'business_telephone' => 'BLANK',
  'business_email' => 'BLANK',
  'contact_owner_emails_to_alternative' => '0',
  'contact_owner_emails_to_alternative_email' => '',
  'is_single_property_installation' => '0',
  'use_html_purifier' => '0',
  'limit_property_country' => '0',
  'limit_property_country_country' => 'GB',
  'jquery_ui_theme' => 'base',
  'use_reviews' => '1',
  'autopublish_reviews' => '1',
  'reviews_test_mode' => '0',
  'show_booking_form_in_property_details' => '0',
  'search_order_default' => '1',
  'show_search_order' => '1',
  'calendarstartofweekday' => '1',
  'only_guests_can_review' => '1',
  'use_timezone_switcher' => '1',
  'load_jquery' => '1',
  'thumbnail_property_list_max_width' => '250',
  'thumbnail_property_list_max_height' => '140',
  'thumbnail_property_header_max_width' => '400',
  'thumbnail_property_header_max_height' => '225',
  'use_commission' => '0',
  'manager_bookings_trigger_commission' => '1',
  'commission_autosuspend_on_overdue' => '1',
  'commission_autosuspend_on_overdue_threashold' => '60',
  'language_context' => '0',
  'load_jquery_ui' => '1',
  'guestnumbersearch' => 'greaterthan',
  'load_jquery_ui_css' => '1',
  'use_conversion_feature' => '1',
  'geolocation_api_key' => '',
  'booking_form_modal_popup' => '0',
  'booking_form_totalspanel_position' => '455',
  'booking_form_width' => '450',
  'useNewusers_sendemail' => '1',
  'show_tax_in_totals_summary' => '1',
  'alternate_smtp_use_settings' => '0',
  'alternate_smtp_authentication' => '1',
  'alternate_smtp_host' => '',
  'alternate_smtp_port' => '',
  'alternate_smtp_protocol' => '',
  'alternate_smtp_username' => '',
  'alternate_smtp_password' => '',
  'alternate_mainmenu' => '1',
  'license_server_username' => '',
  'license_server_password' => '',
  'useshoppingcart' => '1',
  'default_lat' => '51.50068',
  'default_long' => '-0.14317',
  'default_from_address' => '',
  'safe_mode' => '0',
  'use_jomres_own_editor' => '0',
  'room_lock_timeout' => '3600',
  'input_filtering' => 'strong',
  'html_purifier_allowed_tags' => 'p[class],b,strong,a[href],i,em,img[src],ul,li,h1[class],table[width],table[border],tr,td,th,br',
  'inputs_allowing_html' => 'property_description property_checkin_times property_area_activities property_driving_directions property_airports property_othertransport property_policies_disclaimers email_text description room_description',
  'property_details_in_tabs' => '0',
  'property_list_layout_default' => 'tile',
  'automatically_approve_new_properties' => '1',
  'region_names_are_translatable' => '0',
  'use_bootstrap_in_frontend' => '1',
  'recaptcha_public_key' => '',
  'recaptcha_private_key' => '',
  'use_bootstrap_in_admin' => '0',
  'gmap_pois' => '0',
  'gmap_layer_weather' => '1',
  'gmap_layer_panoramio' => '0',
  'gmap_layer_transit' => '0',
  'gmap_layer_traffic' => '0',
  'gmap_layer_bicycling' => '0',
  'gmap_layer_temperature_grad' => 'CELCIUS',
  'development_production' => 'production',
  'navbar_location' => 'component_area',
  'navbar_inverse' => '0',
  'bootstrap_version' => '',
  'show_powered_by' => '1',
  'use_budget_feature' => '1',
  'update_time' => '',
  'live_scrolling_enabled' => '0',
  'load_font_awesome' => '0',
  'licensekey' => '',
  'openexchangerates_api_key' => '',
  'subscriptionPackagePriceIncludesTax' => '1',
  'subscriptionSendReminderEmail' => '1',
  'subscriptionSendReminderEmailDays' => '10',
  'subscriptionSendExpirationEmail' => '1',
  'featured_listings_emphasis' => '',
  'override_property_contact_details' => '0',
  'override_property_contact_email' => '',
  'override_property_contact_tel' => '',
  'override_property_contact_fax' => '',
  'currency_symbol_swap' => '0',
  'log_path' => '',
  'map_style' => 'ultralight',
  'syslog_host' => '',
  'syslog_port' => '',
  'sendErrorEmails' => '0',
  'minimum_deposit_percentage' => '',
  'plist_images_as_slideshow' => '1',
  'cron_method' => 'Minicomponent',
  'session_handler' => 'database',
  'map_type' => 'ROADMAP',
  'map_zoom' => '10',
  'map_height' => '300',
  'selected_languages' => '',
  'front_cpanel_home_grid' => '2/3 1/3',
  'reviews_limit' => '2',
  'images_imported_to_db' => '0',
  'images_imported_to_s3' => '0',
  'amazon_s3_active' => '0',
  'amazon_s3_key' => '',
  'amazon_s3_secret' => '',
  'amazon_s3_region' => 'us-east-1',
  'amazon_s3_bucket' => '',
  'amazon_cloudfront_domain' => '',
  'amazon_s3_remove_local_copies' => '0',
  'amazon_s3_use_tls' => '0',
  'delete_all_data_on_uninstall' => '0',
  'jomres_review_left' => '0',
  'review_nag' => '1',
  'send_email_copies_to_site_admins' => '0',
  'optimize_images' => '0',
  'jomres_db_version' => '0',
  'api_token_lifetime' => '31536000'
);
