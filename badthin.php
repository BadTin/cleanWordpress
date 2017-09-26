<?php
/**
* Plugin Name: SSUP
* Plugin URI: 
* Description: 
* Version: 1.0 
* Author: BadTin
* Author URI: 
* License: GPL 3
*/
// ////////////////////////////////////////////////////////////////////////////////////////////
// Anytime activate & deactivate your plugin!
// ////////////////////////////////////////////////////////////////////////////////////////////
function wis_core_activation() {
} 
register_activation_hook(__FILE__, 'wis_core_activation');
function wis_core_deactivation() {
}
register_deactivation_hook(__FILE__, 'wis_core_deactivation'); 
// ////////////////////////////////////////////////////////////////////////////////////////////
// Load all classes (Hooks) in the folder /classes with the extension _.php
// ////////////////////////////////////////////////////////////////////////////////////////////
foreach ( glob( plugin_dir_path( __FILE__ ) . "classes/*.php" ) as $hooks ) {
    include_once $hooks;
	}
// ////////////////////////////////////////////////////////////////////////////////////////////
// Start creating the plugin. We need a Menu and some other klickable stuff.
// ////////////////////////////////////////////////////////////////////////////////////////////
// Create in the Pluginfolder a link to Settingspage //
function wis_plugin_action_links($links, $file) {
static $this_plugin;
if (!$this_plugin) {
$this_plugin = plugin_basename(__FILE__);
	}
if ($file == $this_plugin) {
$settings_link = '<a href="' . get_bloginfo('wpurl') . '/wp-admin/admin.php?page=wis-settings">CheckUP!</a>';
array_unshift($links, $settings_link);
	}
return $links;
	}
add_filter('plugin_action_links', 'wis_plugin_action_links', 10, 2);



