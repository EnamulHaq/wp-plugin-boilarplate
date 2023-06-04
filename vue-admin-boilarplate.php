<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://enamulhaq.me
 * @since             1.0.0
 * @package           Vue_Admin_Boilarplate
 *
 * @wordpress-plugin
 * Plugin Name:       Vue Admin Boilarplate
 * Plugin URI:        https://enamulhaq.me
 * Description:       This is a description of the plugin.
 * Version:           1.0.0
 * Author:            Enamul
 * Author URI:        https://enamulhaq.me
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       vue-admin-boilerplate
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
define( 'VUE_ADMIN_BOILARPLATE_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-vue-admin-boilarplate-activator.php
 */
function activate_vue_admin_boilarplate() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-vue-admin-boilarplate-activator.php';
	Vue_Admin_Boilarplate_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-vue-admin-boilarplate-deactivator.php
 */
function deactivate_vue_admin_boilarplate() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-vue-admin-boilarplate-deactivator.php';
	Vue_Admin_Boilarplate_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_vue_admin_boilarplate' );
register_deactivation_hook( __FILE__, 'deactivate_vue_admin_boilarplate' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-vue-admin-boilarplate.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_vue_admin_boilarplate() {

	$plugin = new Vue_Admin_Boilarplate();
	$plugin->run();

}
run_vue_admin_boilarplate();
