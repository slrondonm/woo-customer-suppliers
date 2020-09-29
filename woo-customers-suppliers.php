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

// Initialize plugin
\WooCustomersSuppliers\App::instance();
