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


/**
 * @Template Function
 */
function wp_get_menu_array($current_menu) {
    $menu_name = $current_menu;
    $locations = get_nav_menu_locations();
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
    return $menu;
}

//Render Menu to web
if(!function_exists('azonow_menu')){
    function azonow_menu($menu){
        $id_object_active = get_queried_object();
        $id_object_active_url="";
        if(isset($id_object_active->term_id)){
            $id_object_active_id=$id_object_active->term_id;
            $id_object_active_url = get_term_link($id_object_active_id);
        }
        $menu_items = wp_get_menu_array($menu);

        foreach ($menu_items as $item) : ?>


<?php if( !empty($item['children']) ):?>
<div class="top-menu-item top-menu-item-hide-on-search">
    <ul class="dropdown-menu dropdown-cat-item" aria-labelledby="top-menu-<?= $item['ID'] ?>" role="menu">
        <?php $result=""?>
        <?php foreach($item['children'] as $child): ?>
        <?php
            if ($id_object_active_url == $child['url']) {
                $result="active";
            }
        ?>
        <li>
            <a href="<?= $child['url'] ?>">
                <?= $child['title'] ?>
            </a>
        </li>
        <?php endforeach; ?>
    </ul>
    <a href="#" class="top-menu-el <?php echo $result ?>" id="top-menu-<?= $item['ID'] ?> " type="button"
        data-toggle="dropdown" aria-expanded="false">
        <?= $item['title'] ?>
        <span class="caret"></span>
    </a>

</div>
<?php else: ?>
<div class="top-menu-item top-menu-item-hide-on-search">
    <a href="<?= $item['url'] ?>" class="top-menu-el <?php  $result = $id_object_active_url == $item['url'] ? "active" :"";
        echo $result ?>" type="button">
        <?= $item['title'] ?>
    </a>
</div>
<?php endif; ?>
<?php endforeach; ?> <?php }
    
}
 ?>


<?php

//Get highly rated post,quantity post depends on parameter
if(!function_exists('azonow_post_high_vote')){
    function azonow_post_high_vote($number,$posts){
        $posts_high_vote = [];
        foreach ($posts as $key=>$post){
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

        
        if (count($posts_high_vote) < $number){
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => $number - count($posts_high_vote),
                'category__not_in' => get_queried_object_id(),
                'orderby' => 'date',
                'order' => 'DESC'
            );
            $query = new WP_Query( $args );
            foreach($query->posts as $key =>$post){
                $point_rate = 0;
                if (get_post_meta($post->ID,'_azonow_point_data',true)){
                    $point_rate = (int)get_post_meta($post->ID,'_azonow_point_data',true);
                }
                $posts_high_vote[]=['title'=>$post->post_title,'excerpt'=>$post->post_excerpt !="" ? $post->post_excerpt : "Not the excerpt" ,'thumbnail'=>get_the_post_thumbnail_url($post->ID,'thumbnail'),'point'=>$point_rate,'permalink'=>get_permalink( $post->ID)];
            }
        }
        wp_reset_postdata();
        return  $posts_high_vote;
    }
}



//Pagination
if(!function_exists('azonow_pagination')){
    function azonow_pagination($number_display){
        $id_object_active = get_queried_object();
        $id_object_active_url="";
        if(isset($id_object_active->term_id)){
            $id_object_active_id=$id_object_active->term_id;
            $id_object_active_url = get_term_link($id_object_active_id);
        }
        $total_page = $GLOBALS['wp_query']->max_num_pages;
        $current_page = max( 1, get_query_var('paged') );
        if($total_page  <2){
            return '';
        }?>
        <div class="wp-pagenavi">
            <?php if($current_page <= 4):?>
                <?php for($i=1;$i<=$number_display;$i++):?>
                    <?php if($i <= $total_page):?>
                        <?php if($i<=6):?>
                            <?php if($current_page == $i):?>
                                <span class="current"><?php echo $i?></span>
                            <?php else:?>
                                <?php if($current_page < $i):?>
                                    <a class="page larger" href="<?php echo $id_object_active_url ?>page/<?php echo $i ?>"><?php echo $i?></a>
                                <?php else:?>
                                    <a class="page smaller" href="<?php echo $id_object_active_url ?>page/<?php echo $i ?>"><?php echo $i?></a>
                                <?php endif;?>
                            <?php endif;?>
                        <?php elseif($total_page-$i > 2):?>
                            <?php if($i==$number_display-1):?>
                                <span class="extend">...</span>
                            <?php elseif($i==$number_display):?>
                                <a class="last" href="<?php echo $id_object_active_url ?>page/<?php echo $i ?>">&gt;</a>
                            <?php endif?>
                        <?php else:?>
                            <?php if($i==$number_display):?>
                                <a class="last" href="<?php echo $id_object_active_url ?>page/<?php echo $i ?>">&gt;</a>
                            <?php endif?>
                        <?php endif;?>
                    <?php endif;?>
                <?php endfor;?>
            <?php elseif($total_page - $current_page > 3):?>
            <?php for($i=1;$i<=$number_display;$i++):?>
                <?php if($i<=2):?>
                    <?php if($i==1):?>
                        <a class="first" href="<?php echo $id_object_active_url ?>page/<?php echo $i ?>">&lt;</a>
                    <?php else:?>
                        <span class="extend">...</span>
                    <?php endif?>
                <?php endif;?>
                <?php if($i== $current_page - 1):?>
                    <a class="page smaller" href="<?php echo $id_object_active_url ?>page/<?php echo $i ?>"><?php echo $i?></a>
                <?php endif;?>
                <?php if($i==$current_page):?>
                    <span class="current"><?php echo $i?></span>
                <?php endif;?>
                <?php if($i== $current_page + 1):?>
                    <a class="page larger" href="<?php echo $id_object_active_url ?>page/<?php echo $i ?>"><?php echo $i?></a>
                <?php endif;?>
                <?php if($i== $current_page + 2):?>
                    <a class="page larger" href="<?php echo $id_object_active_url ?>page/<?php echo $i ?>"><?php echo $i?></a>
                <?php endif;?>
                <?php if($i==$number_display-1):?>
                    <span class="extend">...</span>
                <?php elseif($i==$number_display):?>
                    <a class="last" href="<?php echo $id_object_active_url ?>page/<?php echo $i ?>">&gt;</a>
                <?php endif?>
            <?php endfor;?>
            <?php else:?>
                <?php for($i=1;$i<=$number_display;$i++):?>
                    <?php if($i<=2):?>
                        <?php if($i==1):?>
                            <a class="first" href="<?php echo $id_object_active_url ?>page/<?php echo $i ?>">&lt;</a>
                        <?php else:?>
                            <span class="extend">...</span>
                        <?php endif?>
                    <?php endif;?>
                    <?php if($total_page - $i < 6):?>
                        <?php if($current_page == $i):?>
                                <span class="current"><?php echo $i?></span>
                        <?php else:?>
                                <?php if($current_page < $i):?>
                                    <a class="page larger" href="<?php echo $id_object_active_url ?>page/<?php echo $i ?>"><?php echo $i?></a>
                                <?php else:?>
                                    <a class="page smaller" href="<?php echo $id_object_active_url ?>page/<?php echo $i ?>"><?php echo $i?></a>
                                <?php endif;?>
                    <?php endif;?>
                    <?php endif;?>
                <?php endfor;?>
            <?php endif;?>
        </div>
<?php
 }
}
 ?>


<?php 
if(!function_exists('azonow_category_list')){
    function azonow_category_list($posts){ 
        $id_object_active = get_queried_object();
        $id_object_active_name = "";
        $id_object_active_url="";
        if(isset($id_object_active->term_id)){
            $id_object_active_id=$id_object_active->term_id;
            $id_object_active_name = get_cat_name($id_object_active_id);
            $id_object_active_url = get_term_link($id_object_active_id);
        }
        ?>
        <?php
            $get_author_id = get_the_author_meta('ID');
            $get_author_gravatar = get_avatar_url($get_author_id, array('size' => 450));
        ?>
        <?php if(have_posts()):?>
            <?php foreach($posts as $key =>$post):?>
                <div id="post-<?php echo $post->ID ?>" class="post-holder clearfix post-<?php echo $post->ID ?> post type-post status-publish format-standard has-post-thumbnail hentry category-marketing <?php echo (int)$key%2 != 0 ? "odd" : "even"  ?>"><div class="container"><div class="row"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><header class="post-header"><div class="post-category"><a href="<?php echo $id_object_active_url ?>" rel="tag"><?php echo $id_object_active_name?></a></div><h3> <a href="<?php echo get_permalink( $post->ID ); ?>" rel="bookmark" title="Permanent Link to <?php echo $post->post_title ?>"><?php echo $post->post_title ?></a></h3><div class="post-meta"> <span class="post-author vcard author" itemprop="author"> <span class="post-author-avatar"><img src="<?php echo $get_author_gravatar ?>" data-lazy-type="image" data-src="<?php echo $get_author_gravatar ?>" width="30" height="30" alt="<?php echo get_the_author() ?>" class="avatar avatar-30 wp-user-avatar wp-user-avatar-30 alignnone photo lazy-loaded" style=""><noscript><img src="<?php echo $get_author_gravatar ?>" width="30" height="30" alt="<?php echo get_the_author() ?>" class="avatar avatar-30 wp-user-avatar wp-user-avatar-30 alignnone photo" /></noscript></span> <a href="<?php get_the_author_link() ?>" title="Posts by <?php echo get_the_author() ?>" rel="author"> <span class="fn"><?php echo get_the_author() ?></span> </a> </span> <span class="post-date published updated" itemprop="datePublished"><?php echo get_the_date() ?></span></div></header></div></div></div></div>
                
            <?php endforeach;?>
     
        <?php endif;?>

<?php
    }
}    
?>
