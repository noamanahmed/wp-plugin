<?php

/**
 * Exit if accessed directly.
 */ 

if (! defined('ABSPATH') ) { exit;
}

function noaman_enqueue_scripts($hook)
{

    wp_enqueue_script(
        'magnific-popup.min.js',
        'https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js',
        ['jquery']
    );
    wp_enqueue_script(
        'magnific-popup-init.js',
        str_replace(ABSPATH, '/', __DIR__).'/../assets/init.js',
        ['magnific-popup.min.js']
    );
    wp_enqueue_style(
        'magnific-popup.min.css',
        'https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css'
    );

}
add_action('wp_enqueue_scripts', 'noaman_enqueue_scripts');


