<?php

/**
 * Add CSS,JS file Theme
 */
function add_custom_css() {
    wp_enqueue_style( 'index', get_stylesheet_directory_uri() . '/assets/css/index.css' );
}
add_action( 'wp_enqueue_scripts', 'add_custom_css' );
 

/**
 * Add new field image category
 */
include_once(INCLUDES . '/feature-category/add-field-image.php');