<?php

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_script('vue-script', get_stylesheet_directory_uri() . '/dist/app.js');
});
