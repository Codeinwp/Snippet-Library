<?php

/**
 * Give access to the plugin admin area to a WooCommerce Shop Manager
 * 
 * REQUIRED: you have to add the "Shop Manager" role to the "Backend Role" & "Frontend Role" settings.
 * 
 * @param string $capability
 * @return string
 */
function wpmm_change_capability($capability) {
    return 'manage_woocommerce';
}

add_filter('wpmm_all_actions_capability', 'wpmm_change_capability', 10, 1);
