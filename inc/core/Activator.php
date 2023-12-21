<?php

/**
 * Fired during plugin activation
 *
 * @link       https://Webcrawlersites.com
 * @since      1.0.0
 *
 * @package    wcs-plugin-boilerplate
 * @subpackage wcs-plugin-boilerplate/inc
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    wcs-plugin-boilerplate
 * @subpackage wcs-plugin-boilerplate/inc
 * @author     Plugin Author <authorEmail>
 */
namespace Plugin_Namespace;

class Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
		wp_die('activated successfully!');
	}

}
