<?php

// Enqueue Bootstrap CSS and JS
function enqueue_bootstrap() {
    // Enqueue Bootstrap CSS
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '5.x.x');

    // Enqueue Popper.js (Optional, required for some Bootstrap components)
    wp_enqueue_script('popper', get_template_directory_uri() . '/js/popper.min.js', array('jquery'), '2.x.x', true);

    // Enqueue Bootstrap JavaScript
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery', 'popper'), '5.x.x', true);
}
add_action('wp_enqueue_scripts', 'enqueue_bootstrap');


// Enqueue Theme Styles
function enqueue_theme_styles() {
    // Enqueue the main style.css file
    wp_enqueue_style('theme-style', get_stylesheet_uri(), array(), '1.0.0');
}
add_action('wp_enqueue_scripts', 'enqueue_theme_styles');