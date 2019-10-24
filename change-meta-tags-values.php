<?php

/**
 * Change <title> value
 * 
 * @param string $title
 * @return string
 */
function wpmm_change_meta_title($title) {
    return 'You are going to change the world.';
}

add_filter('wpmm_meta_title', 'wpmm_change_meta_title', 10, 1);

/**
 * Change <meta name="author"> value
 * 
 * @param string $author
 * @return string
 */
function wpmm_change_meta_author($author) {
    return 'Clark Kent';
}

add_filter('wpmm_meta_author', 'wpmm_change_meta_author', 10, 1);

/**
 * Change <meta name="description"> value
 * 
 * @param string $description
 * @return string
 */
function wpmm_change_meta_description($description) {
    return 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin suscipit neque at sapien scelerisque, a consectetur metus luctus. Aliquam quis sem eget nisi elementum viverra quis id ex.';
}

add_filter('wpmm_meta_description', 'wpmm_change_meta_description', 10, 1);

/**
 * Change <meta name="keywords"> value
 * 
 * @param string $keywords
 * @return string
 */
function wpmm_change_meta_keywords($keywords) {
    return 'keyword 1, keyword 2, keyword 3';
}

add_filter('wpmm_meta_keywords', 'wpmm_change_meta_keywords', 10, 1);

/**
 * Change <<meta name="robots"> value
 * 
 * read about possible values: https://moz.com/learn/seo/robots-meta-directives
 * 
 * @param string $author
 * @return string
 */
function wpmm_change_meta_robots($value) {
    return 'None';
}

add_filter('wpmm_meta_robots', 'wpmm_change_meta_robots', 10, 1);
