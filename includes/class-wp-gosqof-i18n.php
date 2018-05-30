<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://www.globalofficesoftware.com/
 * @since      1.0.0
 *
 * @package    Wp_Gosqof
 * @subpackage Wp_Gosqof/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Wp_Gosqof
 * @subpackage Wp_Gosqof/includes
 * @author     Wainny Ta <wainny@globalofficesoftware.com>
 */
class Wp_Gosqof_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'wp-gosqof',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
