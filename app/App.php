<?php

namespace WooCustomersSuppliers;

class App
{
    public static function instance()
    {
        if (!defined('WCS_SLUG')) {
            define('WCS_SLUG', 'woo-customers-and-suppliers');
        }

        self::register_user_role();
    }

    public static function register_user_role()
    {
        $role_supplier = add_role(
            'supplier',
            __('Supplier', WCS_SLUG),
            [
                'read' => true
            ]
        );

        return $role_supplier;
    }
}
