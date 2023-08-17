<?php

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_script('vue-script', get_stylesheet_directory_uri() . '/dist/app.js');
    wp_enqueue_style('tailwind', get_stylesheet_directory_uri() . '/dist/style.css');
    wp_enqueue_script('jQuery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js');
    wp_enqueue_style('creode-components', get_stylesheet_directory_uri() . '/dist/app.css');
});

add_filter('acf/settings/save_json', function( $path ) {
    $path = get_stylesheet_directory() . '/acf-json';
    return $path;
});
