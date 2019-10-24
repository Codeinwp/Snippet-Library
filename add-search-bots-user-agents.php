<?php

/**
 * Add search bots user agents (if "Bypass for Search Bots" is set to "Yes")
 * 
 * @param array $bots
 * @return array
 */
function wpmm_add_search_bots_user_agents($bots) {
    $bots[] = 'first user agent';
    $bots[] = 'another user agent';

    return $bots;
}

add_filter('wpmm_search_bots', 'wpmm_add_search_bots_user_agents', 10, 1);
