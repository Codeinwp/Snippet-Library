<?php

/**
 * Add code inside <head></head>
 */
function wpmm_add_code_to_head() {
    ?>
    <style>
        /* CSS */
    </style>

    <script type='text/javascript'>
        // Tracking pixels, Google Analytics, etc.
    </script>  
    <?php

}

add_action('wpmm_head', 'wpmm_add_code_to_head', 10, 1);

/**
 * Add code right before </body>
 */
function wpmm_add_code_to_footer() {
    ?>
    <script type='text/javascript'>
        // Javascript code
    </script>    
    <?php

}

add_action('wpmm_footer', 'wpmm_add_code_to_footer', 10, 1);

/**
 * Add code right after <body> and before <div class="wrap">
 */
function wpmm_add_code_after_body() {
    ?>
    <script type='text/javascript'>
        // Javascript code
    </script>    
    <?php

}

add_action('wpmm_after_body', 'wpmm_add_code_after_body');
