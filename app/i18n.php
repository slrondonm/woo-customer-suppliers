<?php
namespace WooCustomersSuppliers;
/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://virtualizate.com.co
 * @since      1.0.0
 *
 * @package    WooCustomersSuppliers
 * @subpackage WooCustomersSuppliers/i18n
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    WooCustomersSuppliers
 * @subpackage WooCustomersSuppliers/i18n
 * @author     Sergio Rondón <soporte@virtualizate.com.co>
 */
class i18n extends App {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'wcss',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
