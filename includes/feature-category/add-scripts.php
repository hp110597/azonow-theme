<?php 
function azonow_add_category_scripts( $hook ) {
    wp_enqueue_media();
    wp_enqueue_script( 'category-script', get_stylesheet_directory_uri() . '/assets/js/category-script.js', array( 'jquery' ), '1.0', true );
    wp_enqueue_style( 'category-style', get_stylesheet_directory_uri() . '/assets/css/category-style.css' );
}
add_action( 'admin_enqueue_scripts', 'azonow_add_category_scripts' );