<?php

namespace WooCustomersSuppliers\Suppliers;
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
use WooCustomersSuppliers\App;

class Register extends App
{
    /**
     * Method __construct
     */
    public function __construct()
    {
        add_action('admin_menu', [$this, 'admin_menu']);

        add_action('init', [$this, 'register_supplier_cpt'], 0);

    }

    /**
     * Register Custom Post Type Supplier
     *
     * @return void
     */
    public function register_supplier_cpt() {

        $labels = array(
            'name'                  => _x( 'Suppliers', 'Post Type General Name', self::$wcss ),
            'singular_name'         => _x( 'Supplier', 'Post Type Singular Name', self::$wcss ),
            'menu_name'             => __( 'Suppliers', self::$wcss ),
            'name_admin_bar'        => __( 'Supplier', self::$wcss ),
            'archives'              => __( 'Item Archives', self::$wcss ),
            'attributes'            => __( 'Item Attributes', self::$wcss ),
            'parent_item_colon'     => __( 'Parent Supplier:', self::$wcss ),
            'all_items'             => __( 'All Suppliers', self::$wcss ),
            'add_new_item'          => __( 'Add New Supplier', self::$wcss ),
            'add_new'               => __( 'New Supplier', self::$wcss ),
            'new_item'              => __( 'New Item', self::$wcss ),
            'edit_item'             => __( 'Edit Supplier', self::$wcss ),
            'update_item'           => __( 'Update Supplier', self::$wcss ),
            'view_item'             => __( 'View Supplier', self::$wcss ),
            'view_items'            => __( 'View Items', self::$wcss ),
            'search_items'          => __( 'Search suppliers', self::$wcss ),
            'not_found'             => __( 'No supplier found', self::$wcss ),
            'not_found_in_trash'    => __( 'No supplier found in Trash', self::$wcss ),
            'featured_image'        => __( 'Featured Image', self::$wcss ),
            'set_featured_image'    => __( 'Set featured image', self::$wcss ),
            'remove_featured_image' => __( 'Remove featured image', self::$wcss ),
            'use_featured_image'    => __( 'Use as featured image', self::$wcss ),
            'insert_into_item'      => __( 'Insert into item', self::$wcss ),
            'uploaded_to_this_item' => __( 'Uploaded to this item', self::$wcss ),
            'items_list'            => __( 'Items list', self::$wcss ),
            'items_list_navigation' => __( 'Items list navigation', self::$wcss ),
            'filter_items_list'     => __( 'Filter items list', self::$wcss ),
        );

        $args = array(
            'label'                 => __( 'Supplier', self::$wcss ),
            'description'           => __( 'Supplier information pages.', self::$wcss ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'thumbnail', 'custom-fields' ),
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => self::$wcss,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'page',
        );
        
        register_post_type( 'supplier', $args );

    }

    /**
     * Admin Menu methods
     *
     * @return void
     */
    public static function admin_menu() {
        add_menu_page(
            __('suppliers and Wholesale Clients', WCSS_SLUG),
            __('Suppliers and Wholesale Clients', WCSS_SLUG),
            WCSS_CAPABILITY,
            WCSS_SLUG,
            '', // Callback, leave empty
            'dashicons-store',
            2// Position
		);

    }

    public function register_form()
    {

    }
}
 