<?php
/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://wasistseo.de
 * @since             1.0.0
 * @package           Badtin
 *
 * @wordpress-plugin
 * Plugin Name:       BadTin Toolbox for Wordpress
 * Plugin URI:        https://wasistseo.de
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            BadTin
 * Author URI:        https://wasistseo.de
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       badtin-
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'PLUGIN_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-badtin--activator.php
 */
function activate_badtin_() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-badtin--activator.php';
	Badtin_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-badtin--deactivator.php
 */
function deactivate_badtin_() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-badtin--deactivator.php';
	Badtin_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_badtin_' );
register_deactivation_hook( __FILE__, 'deactivate_badtin_' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-badtin-.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_badtin_() {

	$plugin = new Badtin();
	$plugin->run();

}
run_badtin_();
