<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://enamulhaq.me
 * @since      1.0.0
 *
 * @package    Vue_Admin_Boilarplate
 * @subpackage Vue_Admin_Boilarplate/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Vue_Admin_Boilarplate
 * @subpackage Vue_Admin_Boilarplate/includes
 * @author     Enamul <mdenamulhaq6263@gmail.com>
 */
class Vue_Admin_Boilarplate_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'vue-admin-boilarplate',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
