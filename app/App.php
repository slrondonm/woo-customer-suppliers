<?php

namespace WooCustomersSuppliers;
/**
 * The file that defines the core plugin class
 *
 * A class definition that includes attributes and functions used across both the
 * public-facing side of the site and the admin area.
 *
 * @link       http://virtualizate.com.co
 * @since      1.0.0
 *
 * @package    WooCustomersSuppliers
 * @subpackage WooCustomersSuppliers/App
 */

/**
 * The core plugin class.
 *
 * This is used to define internationalization, admin-specific hooks, and
 * public-facing site hooks.
 *
 * Also maintains the unique identifier of this plugin as well as the current
 * version of the plugin.
 *
 * @since      1.0.0
 * @package    WooCustomersSuppliers
 * @subpackage WooCustomersSuppliers/App
 * @author     Soporte Virtualizate <soporte@virtualizate.com.co>
 */
class App
{
/**
	 * The loader that's responsible for maintaining and registering all hooks that power
	 * the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      WCSS_Loader    $loader    Maintains and registers all hooks for the plugin.
	 */
    protected static $loader;

	/**
	 * The unique identifier of this plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string    $wcs    The string used to uniquely identify this plugin.
	 */
	protected static $wcss;

	/**
	 * The current version of the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string    $version    The current version of the plugin.
	 */
    protected static $version;

    
    public function __construct()
    {
        if (defined('WCSS_VERSION')) {
            self::$version = WCSS_VERSION;
        } else {
            self::$version = '1.0.0';
        }

        self::$wcss = WCSS_SLUG;

        self::set_locale();
    }

    public static function register_user_role()
    {
        $role_supplier = add_role(
            'supplier',
            __('Supplier', self::$wcss),
            [
                'read' => true
            ]
        );

        return $role_supplier;
    }

    /**
	 * Define the locale for this plugin for internationalization.
	 *
	 * Uses the WCSS_i18n class in order to set the domain and to register the hook
	 * with WordPress.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private static function set_locale() {

        $plugin_i18n = new i18n();

		self::$loader->add_action( 'plugins_loaded', $plugin_i18n, 'load_plugin_textdomain' );

	}

    public static function run()
    {
        new TGMPA();
	}
	
	public function prefix($field_name = null, $before = '', $after = '_')
	{
		$prefix = $before . WCSS_PREFIX . $after;

		return $field_name != null ? $prefix . $field_name : $prefix;
	}
}
