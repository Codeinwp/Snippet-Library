<?php

/**
 * Change maintenance.php template path
 * (the default file can be found in `/wp-maintenance-mode/views/`)
 * 
 * @param string $path
 * @return string
 */
function wpmm_change_maintenance_template_path($path) {
    return '/full/path/to/your/custom/maintenance/file.php';
}

add_filter('wpmm_maintenance_template', 'wpmm_change_maintenance_template_path', 10, 1);

/**
 * Change contact.php template path
 * (the default file can be found in `/wp-maintenance-mode/views/`)
 * 
 * @param string $path
 * @return string
 */
function wpmm_change_contact_template($path) {
    return '/full/path/to/your/custom/contact/file.php';
}

add_filter('wpmm_contact_template', 'wpmm_change_contact_template', 10, 1);
