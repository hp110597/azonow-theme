<?php

function azonow_add_blog_scripts( $hook ) {
    wp_enqueue_media();
    wp_enqueue_style( 'blog-style', get_stylesheet_directory_uri() . '/assets/css/blog-style.css' );
}
add_action( 'admin_enqueue_scripts', 'azonow_add_blog_scripts');

?>