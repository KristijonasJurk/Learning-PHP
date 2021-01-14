<?php


add_action('wp_enqueue_scripts', function () {
    //     $theme_version = wp_get_theme()->get('Version');
    wp_enqueue_style('css-style', get_stylesheet_uri(), [], time()); // $theme_version vietoj time(), kad develop procese nesicashintu
});
