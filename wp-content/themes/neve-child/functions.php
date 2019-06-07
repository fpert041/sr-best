<?php
// register and enqueue the stylesheet.

add_action( 'wp_enqueue_scripts', 'register_child_theme_styles' );

function register_child_theme_styles() {
    wp_register_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'style' );
}
