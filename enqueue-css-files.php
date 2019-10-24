<?php

/**
 * Enqueue CSS files
 * 
 * @param array $styles
 * @return array
 */
function wpmm_enqueue_css_files($styles) {
    $styles['file'] = 'path/to/css/file.css';
    $styles['file2'] = 'path/to/css/file2.css';

    return $styles;
}

add_filter('wpmm_styles', 'wpmm_enqueue_css_files', 10, 1);
