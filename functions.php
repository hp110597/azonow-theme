<?php

/**
 * @Declare CONTANST
 *  @ THEME_URL = GET URL FOLDER THEME CURRENT
 *  @ INCLUDES = GET URL FOLDER INCLUDE
*/

define('THEME_URL', get_stylesheet_directory());
define('INCLUDES',THEME_URL ."./includes");

/**
 * @ Embeed FILE /includes/init.php
 */
require_once(INCLUDES ."./init.php");

/**
 * @ Set content width max
 */
if (!isset($content_width)){
    $content_width = 620;
}

/**
 * Delare Futures theme
 */
if (!function_exists('azonow_theme_setup')){
    function azonow_theme_setup(){
        //Set up textdomain
        $language_folder = THEME_URL . '/languages';
        load_theme_textdomain('azonow',$language_folder);
        //Auto add link RSS in tag <head>
        add_theme_support('automatic-feed-links');
        //Add post thumbnail
        add_theme_support('post-thumbnails');
        //Add post format
        add_theme_support('post-formats',array(
            'image',
            'video',
            'gallery',
            'quote',
            'link'
        ));
        //Add Custom Logo
        add_theme_support( 'custom-logo', array(
            'height'      => 75,
            'width'       => 20,
            'flex-height' => true,
            'flex-width'  => true,
            'header-text' => array( 'site-title', 'site-description' ),
        ) );
        //Add title-tag
        add_theme_support('title-tag');
        //Add custom background
        $default_background = array(
            'default-color' => '#e8e8e8'
        );
        add_theme_support('custom-backgound',$default_background);
        //Add menu
        register_nav_menu('primary-menu',__('Primary Menu','azonow'));
        //Add sidebar
        $sidebar = array(
            'name' => __('Main sidebar','azonow'),
            'id' => 'main-sidebar',
            'description' => __('Default sidebar','azonow'),
            'class' =>'main-sidebar',
            'before_title' => '<h3 class="widgettitle">',
            'after_title' => '</h3>'
        );
        register_sidebar($sidebar);
    }
    add_action('init','azonow_theme_setup');
}