<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://Webcrawlersites.com
 * @since             1.0.0
 * @package           wcs-plugin-boilerplate
 *
 * @wordpress-plugin
 * Plugin Name:       WCS Plugin Boilerplate
 * Plugin URI:        https://https://github.com/webcrawlersites/wcs-plugin-boilerplate.git
 * Description:       This is a description of the plugin.
 * Version:           1.0.0
 * Author:            aPlugin Author
 * Author URI:        https://Webcrawlersites.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wcs-plugin-boilerplate
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'WCSPB_VERSION', '1.0.0' );

/**
 * Plugin constants.
 */
define('WCSPB_PATH', plugin_dir_path( __FILE__ ));

/**
 * Includer class autoloader.
 * 
 * @since 1.0.0
 */
require_once WCSPB_PATH . 'vendor/autoload.php';

// Hook into the activation and deactivation events
register_activation_hook( __FILE__, array( 'Plugin_Namespace\Activator', 'activate' ) );
register_deactivation_hook( __FILE__, array( 'Plugin_Namespace\Deactivator', 'deactivate' ) );

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_Plugin_Namespace() {

	$plugin = new Plugin_Namespace\Core();
	$plugin->run();

}
run_Plugin_Namespace();
