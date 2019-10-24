<?php

/**
 * Enqueue javascript files
 * 
 * @param array $scripts
 * @return array
 */
function wpmm_enqueue_javascript_files($scripts) {
    $scripts['file'] = 'path/to/javascript/file.js';
    $scripts['file2'] = 'path/to/javascript/file2.js';

    return $scripts;
}

add_filter('wpmm_scripts', 'wpmm_enqueue_javascript_files', 10, 1);

/**
 * Add code before scripts if necessary
 * 
 * (this code is outputted before the javascript files so that they can use it)
 */
function wpmm_add_code_before_scripts() {
    ?>
    <script type='text/javascript'>
        console.log('This is a test... :-)')
    </script>    
    <?php

}

add_action('wpmm_before_scripts', 'wpmm_add_code_before_scripts');