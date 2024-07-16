<?php
/**
 * Plugin Name:     MRK WP Rankmath
 * Plugin URI:      https://www.mrkwp.com
 * Description:     MRK WP Website Rankmath Helper
 * Author:          MRK WP
 * Author URI:      https://www.mrkwp.com
 * Text Domain:     mrkwp-rankmath
 * Domain Path:     /languages
 * Version:         1.0.0
 *
 * @package mrkwp-rankmath
 */

// If this file is called firectly, abort!!!
defined( 'ABSPATH' ) || die( 'No Access!' );

if ( ! defined( 'MRKWP_RANKMATH_VERSION' ) ) {
	define( 'MRKWP_RANKMATH_VERSION', '1.0.0' );
}

// Require once the Composer Autoload.
if ( file_exists( __DIR__ . '/lib/autoload.php' ) ) {
	require_once __DIR__ . '/lib/autoload.php';
}

/**
 * The code that runs during plugin activation.
 *
 * @return void
 */
function activate_mrkwp_rankmath_plugin() {
	MRKWP_Rankmath\Base\Activate::activate();
}
register_activation_hook( __FILE__, 'activate_mrkwp_rankmath_plugin' );

/**
 * The code that runs during plugin deactivation.
 *
 * @return void
 */
function deactivate_mrkwp_rankmath_plugin() {
	MRKWP_Rankmath\Base\Deactivate::deactivate();
}
register_deactivation_hook( __FILE__, 'deactivate_mrkwp_rankmath_plugin' );

/**
 * Initialize all the core classes of the plugin.
 */
if ( class_exists( 'MRKWP_Rankmath\\Init' ) ) {
	MRKWP_Rankmath\Init::register_services();
}
