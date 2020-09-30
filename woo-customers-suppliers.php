<?php
/**
 * @wordpress-plugin
 * Plugin Name:       WooCommerce Suppliers and Wholesale Clients
 * Plugin URI:        https://github.com/slrondonm/woo-customers-suppliers
 * Description:       WooCommerce Suppliers and Wholesale Clients, is in charge of managing orders to Suppliers and Wholesale Clients in a simpler and more efficient way.
 * Version:           0.5.4
 * Author:            Ing. Sergio Rondón
 * Author URI:        https://www.virtualizate.com.co
 * License:           GPL-2.0
 * License URI:       https://opensource.org/licenses/GPL-2.0
 * Text Domain:       woo-customers-suppliers
 * Domain Path:       languages
 * GitHub Plugin URI: slrondonm/woo-customers-suppliers
 * 
 * WC requires at least: 2.2
 * WC tested up to: 2.3
 * 
 */

/*	Copyright 2018	  Ing. Sergio Rondón (https://www.virtualizate.com.co/) */

if( !defined( 'ABSPATH' ) ) die();

if ( file_exists( __DIR__ . '/vendor/autoload.php' ) ) {
  require( __DIR__ . '/vendor/autoload.php' );
}

/**
 * Currently plugin defines.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
if (!defined('WCSS_VERSION')) {
	define( 'WCSS_VERSION', '1.0.0' );
}
 
if (!defined('WCSS_SLUG')) {
	define( 'WCSS_SLUG', 'wc-suppliers' );
}

if (!defined('WCSS_PREFIX')) {
	define( 'WCSS_PREFIX', 'wcss' );
}

if (!defined('WCSS_CAPABILITY')) {
	define( 'WCSS_CAPABILITY', 'manage_options' );
}

if (!defined('WCSS_URL')) {
	define( 'WCSS_URL', plugin_dir_url(__FILE__) );
}

if (!defined('WCSS_PATH')) {
	define( 'WCSS_PATH', plugin_dir_path(__FILE__) );
}

/**
 * The code that runs during plugin activation.
 * This action is documented in Activator.php
 */
function activate_wcss() {
	WooCustomersSuppliers\Activator::activate();
}

register_activation_hook( __FILE__, 'activate_wcss' );

/**
 * The code that runs during plugin deactivation.
 * This action is documented in app/Deactivator.php
 */
function deactivate_wcss() {
	WooCustomersSuppliers\Deactivator::deactivate();
}

register_deactivation_hook( __FILE__, 'deactivate_wcss' );

// Initialize plugin
WooCustomersSuppliers\App::run();
