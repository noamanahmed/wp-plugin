<?php

// Exit if accessed directly.
if (! defined('ABSPATH') ) { exit;
}

add_shortcode('images_search', 'noaman_images_search_shortcode_function');
function noaman_images_search_shortcode_function( $atts )
{
    $images = get_images_from_api($atts);
    $content = '';
    
    foreach($images as $image)
    {
        $content .= '<a class="magnific-popup-image" href="'.$image['url'].'" title="Caption">';
        $content .= '<img src="'.$image['url'].'" width="'.$image['width'].'" height="'.$image['height'].'">';
        $content .= '</a>';
    }
    
    return $content;
} 