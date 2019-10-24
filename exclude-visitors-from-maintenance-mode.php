<?php

/**
 * Different ways to exclude visitors from maintenance mode
 */

/**
 * Exclude homepage
 * 
 * @param boolean $is_excluded
 * @return boolean
 */
function wpmm_exclude_homepage($is_excluded) {
    if (!is_home() && !is_front_page()) {
        return $is_excluded;
    }

    return true;
}

add_filter('wpmm_is_excluded', 'wpmm_exclude_homepage', 10, 1);

/**
 * Exclude visitors with a custom user agent
 * 
 * What's your user agent? Check http://whatsmyuseragent.org/
 * 
 * @param boolean $is_excluded
 * @return boolean
 */
function wpmm_exclude_user_agent($is_excluded) {
    $user_agent = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : '';

    if (empty($user_agent)) {
        return $is_excluded;
    }

    if ($user_agent !== 'custom user agent') {
        return $is_excluded;
    }

    return true;
}

add_filter('wpmm_is_excluded', 'wpmm_exclude_user_agent', 10, 1);

/**
 * Exclude visitors with a certain cookie
 * 
 * @param boolean $is_excluded
 * @return boolean
 */
function wpmm_exclude_visitor_with_cookie($is_excluded) {
    if (!isset($_COOKIE['super_secret_cookie'])) {
        return $is_excluded;
    }

    return true;
}

add_filter('wpmm_is_excluded', 'wpmm_exclude_visitor_with_cookie', 10, 1);


/**
 * Exclude $_POST requests
 *
 * @param boolean $is_excluded
 * @return boolean
 */
function wpmm_exclude_post_requests($is_excluded) {
    if (empty($_POST)) {
        return $is_excluded;
    }

    return true;
}

add_filter('wpmm_is_excluded', 'wpmm_exclude_post_requests', 10, 1);
