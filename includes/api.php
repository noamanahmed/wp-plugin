<?php


function get_images_from_api($atts)
{
    $atts = shortcode_atts(
        array(
        'limit' => 3,
        'expiry' => 120,        
        ), $atts
    );
    
    $cache_key = NOAMAN_CACHE_KEY_PREFIX.implode($atts);
    
    $limit = (int) $atts['limit'];
    $expiry = (int) $atts['expiry'];   

    $cached_response = get_transient($cache_key);

    if($cached_response) { return $cached_response;
    }
    
    $cache_expiry = 0;

    if($expiry > 0) {
        $cache_expiry = $expiry;
    }

    $api_url = 'https://api.thecatapi.com/v1/images/search';
    $api_url = add_query_arg(
        [
        'limit' => $limit
        ], $api_url
    );

    $response = wp_remote_get($api_url);
    
    if (( !is_wp_error($response)) && (200 === wp_remote_retrieve_response_code($response) ) ) {
        $data = json_decode($response['body'], true);
        set_transient($cache_key, $data, $cache_expiry);
        return $data;
    }

    return [];
    
}