<?php

/**
 * Add CSS,JS file Theme
 */
function azonow_add_scripts_theme() {
    wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css' );
    wp_enqueue_style( 'index-css', get_stylesheet_directory_uri() . '/assets/css/index.css' );
    wp_enqueue_style( '404-css', get_stylesheet_directory_uri() . '/assets/css/404.css' );
    wp_enqueue_script( 'jquery.min-js', get_stylesheet_directory_uri() . '/assets/js/jquery.min.js');
    wp_enqueue_script( 'index-js', get_stylesheet_directory_uri() . '/assets/js/index.js');
    wp_enqueue_script( 'lazyloadxt-js', get_stylesheet_directory_uri() . '/assets/js/jquery.lazyloadxt.extra.min.js');
    wp_enqueue_script( 'sharrre-js', get_stylesheet_directory_uri() . '/assets/js/jquery.sharrre.min.js');
    wp_enqueue_script( 'lazysizes-js', get_stylesheet_directory_uri() . '/assets/js/lazysizes.min.js');
    wp_enqueue_script('bootstrap-js',get_stylesheet_directory_uri() . '/assets/js/bootstrap.min.js' );
}
add_action( 'wp_enqueue_scripts', 'azonow_add_scripts_theme' );


/**
 * @Add feature categorys
 */
include_once(INCLUDES . '/feature-category/index.php');


/**
 * @Add feature post
 */
include_once(INCLUDES . '/feature-posts/index.php');

// add blog style 
include_once(INCLUDES . '/feature-blog/index.php');
