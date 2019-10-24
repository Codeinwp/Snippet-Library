<?php

/**
 * Change HTTP status code
 * 
 * list of status codes: https://httpstatuses.com/
 * 
 * @param int $status_code
 * @return int
 */
function wpmm_change_http_status_code($status_code) {    
    return 200; 
}

add_filter('wpmm_status_code', 'wpmm_change_http_status_code', 10, 1);

