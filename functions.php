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
//Add menu
function register_menu(){        
    register_nav_menu('primary-menu',__('Primary Menu','azonow'));
}
add_action('after_setup_theme','register_menu');


/**
 * @Template Function
 */

if(!function_exists('azonow_class_body')){
    function azonow_class_body(){
        $term = get_queried_object();
        $slug="";
        $term_id="";
        if(isset($term->slug)){
            $slug=$term->slug;
        }
        if(isset($term->term_id)){
            $term_id = $term->term_id;
        }
        if(is_category()){
            return "archive category category-$slug category-$term_id";
        }elseif(is_search())
        {
            return "search search-results";
        }elseif(is_404()){
            return "error404 animated";
        }
    }
}

if(!function_exists('wp_get_menu_array')){
    function wp_get_menu_array($current_menu) {
        $menu_name = $current_menu;
        $locations = get_nav_menu_locations();
        $menu="";
        if(isset($locations[ $menu_name ])){
            $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );        
            $array_menu = wp_get_nav_menu_items( $menu->term_id);
            $menu = array();
            foreach ($array_menu as $m) {
                if (empty($m->menu_item_parent)) {
                    $menu[$m->ID] = array();
                    $menu[$m->ID]['ID']      =   $m->ID;
                    $menu[$m->ID]['title']       =   $m->title;
                    $menu[$m->ID]['url']         =   $m->url;
                    $menu[$m->ID]['children']    =   array();
                }
            }
            $submenu = array();
            foreach ($array_menu as $m) {
                if ($m->menu_item_parent) {
                    $submenu[$m->ID] = array();
                    $submenu[$m->ID]['ID']       =   $m->ID;
                    $submenu[$m->ID]['title']    =   $m->title;
                    $submenu[$m->ID]['url']  =   $m->url;
                    $menu[$m->menu_item_parent]['children'][$m->ID] = $submenu[$m->ID];
                }
            }
        }
    
        return $menu;
    }
}

if(!function_exists('azonow_object_active_url')){
    function azonow_object_active_url(){
        $object_active = get_queried_object();
        $object_active_url="";
        if(isset($object_active->term_id)){
            $object_active_id=$object_active->term_id;
            $object_active_url = get_term_link($object_active_id);
        }
        return $object_active_url;
    }
}



//Get highly rated post,quantity post depends on parameter
if(!function_exists('azonow_post_high_vote')){
    function azonow_post_high_vote($number){
        $posts_high_vote = [];
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => -1,
            'category__in'=>get_queried_object_id(),
            'orderby' => 'date',
            'order' => 'DESC'
        );
        $query = new WP_Query( $args );
        foreach($query->posts as $key =>$post){
            $point_rate = 0;
            if (get_post_meta($post->ID,'_azonow_point_data',true)){
                $point_rate = (int)get_post_meta($post->ID,'_azonow_point_data',true);
            }
            if (count($posts_high_vote) <= $number){
                $posts_high_vote[]=['title'=>$post->post_title,'excerpt'=>$post->post_excerpt !="" ? $post->post_excerpt : "Not the excerpt" ,'thumbnail'=>get_the_post_thumbnail_url($post->ID,'thumbnail'),'point'=>$point_rate,'permalink'=>get_permalink( $post->ID)];
            }else{
                break;
            }
        }
        for ($i=0;$i<count($posts_high_vote)-1;$i++){
            for($j=$i+1;$j<count($posts_high_vote);$j++){
                $t=0;
                if($posts_high_vote[$i]['point'] < $posts_high_vote[$j]['point']){
                    $t = $posts_high_vote[$i]['point'];
                    $posts_high_vote[$i]['point'] = $posts_high_vote[$j]['point'];
                    $posts_high_vote[$j]['point'] = $t;
                }
            }
        }

        wp_reset_postdata();
        return  $posts_high_vote;
    }
}


