<?php


add_shortcode( 'images_search', 'noaman_images_search_shortcode_function' );
function noaman_images_search_shortcode_function( $atts ) {
    $atts = shortcode_atts( array(
        'limit' => 2,
        'expiry' => 120,		
    ), $atts);
    
    $cache_key = NOAMAN_CACHE_KEY_PREFIX.implode($atts);
    
    $limit = (int) $atts['limit'];
    $expiry = (int) $atts['expiry'];
    $cache_expiry = 0;

    if($expiry > 0)
    {
        $cache_expiry = time()/$expiry;
    }
    $cached_response = get_transient($cache_key);

    if($cached_response) return $cached_response;
    
    $api_url = 'https://api.thecatapi.com/v1/images/search';
    $api_url = add_query_arg([
        'limit' => $limit
    ],$api_url);

    $response = wp_remote_get($api_url);
    
    if ( ( !is_wp_error($response)) && (200 === wp_remote_retrieve_response_code( $response ) ) )     
    {
        set_transient($cache_key,$response['body'],$cache_expiry);
    }
    
    return $response['body'];
}