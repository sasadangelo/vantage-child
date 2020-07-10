<?php

/**
 * Enqueue the parent theme stylesheet.
 */

function vantage_child_enqueue_parent_style() {
    wp_enqueue_style( 'vantage-parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'vantage_child_enqueue_parent_style', 8 );

function vantage_child_enqueue_style_css() {
    wp_enqueue_style( 'vantage-style', get_stylesheet_directory_uri() . '/style.css', array(), time() );
}
add_action( 'wp_enqueue_scripts', 'vantage_child_enqueue_style_css', 8 );
?>
