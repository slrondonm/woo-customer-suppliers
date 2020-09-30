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
class TGMPA extends App
{


    /**
     * Uses the TGMPA library to check for required/recommended plugins.
     * @since 0.2.1
     * @link http://tgmpluginactivation.com/configuration/ Configuring TGMPA
     */
    function __construct() {

        // Check for required/recommended plugins
        add_action( 'tgmpa_register', array( $this, 'register_required_plugins' ) );
    
    }
    
    /**
	 * Register the required plugin
	 * @since    1.0.0
	 * @return void
	 */
	public function register_required_plugins(){
		$plugins = array(
			array(
				'name'      => 'Github Updater',
				'slug'      => 'github-updater',
				'source'    => 'https://github.com/afragen/github-updater/archive/master.zip',
				'required'  => false,
			),
			array(
				'name'      => 'WooCommerce',
				'slug'      => 'woocommerce',
				'required'  => true,
			),
		);
		$config  = array(
			'id' => self::$wcss,
		);

		tgmpa( $plugins, $config );
	}
}
