<?php

/**
 * @Declare CONTANST
 *  @ THEME_URL = GET URL FOLDER THEME CURRENT
 *  @ INCLUDES = GET URL FOLDER INCLUDE
 */

define('THEME_URL', get_stylesheet_directory());
define('INCLUDES', THEME_URL . "./includes");

/**
 * @ Embeed FILE /includes/init.php
 */
require_once(INCLUDES . "./init.php");

/**
 * @ Set content width max
 */
if (!isset($content_width)) {
    $content_width = 620;
}

/**
 * Delare Futures theme
 */
if (!function_exists('azonow_theme_setup')) {
    function azonow_theme_setup()
    {
        //Set up textdomain
        $language_folder = THEME_URL . '/languages';
        load_theme_textdomain('azonow', $language_folder);
        //Auto add link RSS in tag <head>
        add_theme_support('automatic-feed-links');
        //Add post thumbnail
        add_theme_support('post-thumbnails');
        //Add post format
        add_theme_support('post-formats', array(
            'image',
            'video',
            'gallery',
            'quote',
            'link'
        )
        );
        //Add Custom Logo
        add_theme_support('custom-logo', array(
            'height' => 75,
            'width' => 20,
            'flex-height' => true,
            'flex-width' => true,
            'header-text' => array('site-title', 'site-description'),
        ));
        //Add title-tag
        add_theme_support('title-tag');
        //Add custom background
        $default_background = array(
            'default-color' => '#e8e8e8'
        );
        add_theme_support('custom-backgound', $default_background);

        //Add sidebar
        $sidebar = array(
            'name' => __('Main sidebar', 'azonow'),
            'id' => 'main-sidebar',
            'description' => __('Default sidebar', 'azonow'),
            'class' => 'main-sidebar',
            'before_title' => '<h3 class="widgettitle">',
            'after_title' => '</h3>'
        );
        register_sidebar($sidebar);
    }
    add_action('init', 'azonow_theme_setup');
}
//Add menu
function register_menu()
{
    register_nav_menu('primary-menu', __('Primary Menu', 'azonow'));
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
}
add_action('after_setup_theme', 'register_menu');


/**
 * @Template Function
 */

if (!function_exists('azonow_class_body')) {
    function azonow_class_body()
    {
        $term = get_queried_object();
        $slug = "";
        $term_id = "";
        if (isset($term->slug)) {
            $slug = $term->slug;
        }
        if (isset($term->term_id)) {
            $term_id = $term->term_id;
        }
        if (is_category()) {
            return "archive category category-$slug category-$term_id";
        } elseif (is_search()) {
            return "search search-results";
        } elseif (is_404()) {
            return "error404 animated";
<<<<<<< HEAD
        } elseif (is_single()) {
            return "post-template-default single single-post postid-155424 single-format-standard";
=======
        } elseif(is_front_page()){
            return 'home page-template page-template-page-home page-template-page-home-php page';
        }elseif(is_author()){
            $name = get_the_author_meta('display_name');
            $id = get_the_author_meta('ID');
            return "archive author author-$name author-$id";
        }elseif(is_home()){
            return 'blog';
>>>>>>> 9c764827bd1afcb96efb3f6b49efc4b1f7e00784
        }
    }
}

if (!function_exists('wp_get_menu_array')) {
    function wp_get_menu_array($current_menu)
    {
        $menu_name = $current_menu;
        $locations = get_nav_menu_locations();
        $menu = "";
        if (isset($locations[$menu_name])) {
            $menu = wp_get_nav_menu_object($locations[$menu_name]);
            $array_menu = wp_get_nav_menu_items($menu->term_id);
            $menu = array();
            foreach ($array_menu as $m) {
                if (empty($m->menu_item_parent)) {
                    $menu[$m->ID] = array();
                    $menu[$m->ID]['ID'] = $m->ID;
                    $menu[$m->ID]['title'] = $m->title;
                    $menu[$m->ID]['url'] = $m->url;
                    $menu[$m->ID]['children'] = array();
                }
            }
            $submenu = array();
            foreach ($array_menu as $m) {
                if ($m->menu_item_parent) {
                    $submenu[$m->ID] = array();
                    $submenu[$m->ID]['ID'] = $m->ID;
                    $submenu[$m->ID]['title'] = $m->title;
                    $submenu[$m->ID]['url'] = $m->url;
                    $menu[$m->menu_item_parent]['children'][$m->ID] = $submenu[$m->ID];
                }
            }
        }

        return $menu;
    }
}

if (!function_exists('azonow_object_active_url')) {
    function azonow_object_active_url()
    {
        $object_active = get_queried_object();
        $object_active_url = "";
        if (isset($object_active->term_id)) {
            $object_active_id = $object_active->term_id;
            $object_active_url = get_term_link($object_active_id);
        }
        return $object_active_url;
    }
}



//Get highly rated post,quantity post depends on parameter
<<<<<<< HEAD
if (!function_exists('azonow_post_high_vote')) {
    function azonow_post_high_vote($number, $posts)
    {
        $posts_high_vote = [];
        foreach ($posts as $key => $post) {
=======
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
>>>>>>> 9c764827bd1afcb96efb3f6b49efc4b1f7e00784
            $point_rate = 0;
            if (get_post_meta($post->ID, '_azonow_point_data', true)) {
                $point_rate = (int) get_post_meta($post->ID, '_azonow_point_data', true);
            }
            if (count($posts_high_vote) <= $number) {
                $posts_high_vote[] = ['title' => $post->post_title, 'excerpt' => $post->post_excerpt != "" ? $post->post_excerpt : "Not the excerpt", 'thumbnail' => get_the_post_thumbnail_url($post->ID, 'thumbnail'), 'point' => $point_rate, 'permalink' => get_permalink($post->ID)];
            } else {
                break;
            }
        }
        for ($i = 0; $i < count($posts_high_vote) - 1; $i++) {
            for ($j = $i + 1; $j < count($posts_high_vote); $j++) {
                $t = 0;
                if ($posts_high_vote[$i]['point'] < $posts_high_vote[$j]['point']) {
                    $t = $posts_high_vote[$i]['point'];
                    $posts_high_vote[$i]['point'] = $posts_high_vote[$j]['point'];
                    $posts_high_vote[$j]['point'] = $t;
                }
            }
        }

<<<<<<< HEAD

        if (count($posts_high_vote) < $number) {
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => $number - count($posts_high_vote),
                'category__not_in' => get_queried_object_id(),
                'orderby' => 'date',
                'order' => 'DESC'
            );
            $query = new WP_Query($args);
            foreach ($query->posts as $key => $post) {
                $point_rate = 0;
                if (get_post_meta($post->ID, '_azonow_point_data', true)) {
                    $point_rate = (int) get_post_meta($post->ID, '_azonow_point_data', true);
                }
                $posts_high_vote[] = ['title' => $post->post_title, 'excerpt' => $post->post_excerpt != "" ? $post->post_excerpt : "Not the excerpt", 'thumbnail' => get_the_post_thumbnail_url($post->ID, 'thumbnail'), 'point' => $point_rate, 'permalink' => get_permalink($post->ID)];
            }
        }
=======
>>>>>>> 9c764827bd1afcb96efb3f6b49efc4b1f7e00784
        wp_reset_postdata();
        return $posts_high_vote;
    }
}

<<<<<<< HEAD


//Pagination
if (!function_exists('azonow_pagination')) {
    function azonow_pagination($number_display)
    {
        $id_object_active = get_queried_object();
        $id_object_active_url = "";
        if (isset($id_object_active->term_id) && is_category()) {
            $id_object_active_id = $id_object_active->term_id;
            $id_object_active_url = get_term_link($id_object_active_id);
        } else {
            $id_object_active_url = home_url() . '/';
        }
        $total_page = $GLOBALS['wp_query']->max_num_pages;
        $current_page = max(1, get_query_var('paged'));
        if ($total_page < 2) {
            return '';
        }
        $val = reset($_GET);
        $key = key($_GET);
        parse_str($_SERVER['QUERY_STRING'], $array);
        $val = reset($array);
        $key = key($array);
        $result = "$key=$val";
        ?>
        <div class="wp-pagenavi">
            <?php if ($current_page <= 4): ?>

                <?php for ($i = 1; $i <= $total_page; $i++): ?>
                    <?php if ($i <= $number_display): ?>
                        <?php if ($i <= 6): ?>
                            <?php if ($current_page == $i): ?>
                                <span class="current">
                                    <?php echo $i ?>
                                </span>
                            <?php else: ?>
                                <?php if ($current_page < $i): ?>
                                    <a class="page larger" href="<?php echo $id_object_active_url ?>page/<?php echo $i ?>/?<?php echo $result ?>"><?php echo $i ?></a>
                                <?php else: ?>
                                    <a class="page smaller" href="<?php echo $id_object_active_url ?>page/<?php echo $i ?>/?<?php echo $result ?>"><?php echo $i ?></a>
                                <?php endif; ?>
                            <?php endif; ?>
                        <?php elseif ($total_page - $i > 2): ?>
                            <?php if ($i == $number_display - 1): ?>
                                <span class="extend">...</span>
                            <?php elseif ($i == $number_display): ?>
                                <a class="last"
                                    href="<?php echo $id_object_active_url ?>page/<?php echo ($total_page) ?>/?<?php echo $result ?>">&gt;</a>
                            <?php endif ?>
                        <?php else: ?>
                            <?php if ($i == $number_display): ?>
                                <a class="last"
                                    href="<?php echo $id_object_active_url ?>page/<?php echo ($total_page) ?>/?<?php echo $result ?>">&gt;</a>
                            <?php endif ?>
                        <?php endif; ?>
                    <?php endif; ?>
                <?php endfor; ?>
            <?php elseif ($total_page - $current_page > 3): ?>

                <?php for ($i = 1; $i <= $total_page; $i++): ?>
                    <?php if ($i <= 2): ?>
                        <?php if ($i == 1): ?>
                            <a class="first" href="<?php echo $id_object_active_url ?>page/<?php echo $i ?>/?<?php echo $result ?>">&lt;</a>
                        <?php else: ?>
                            <span class="extend">...</span>
                        <?php endif ?>
                    <?php elseif ($i == 3): ?>
                        <a class="page smaller"
                            href="<?php echo $id_object_active_url ?>page/<?php echo $current_page - 1 ?>/?<?php echo $result ?>"><?php echo $current_page - 1 ?></a>

                    <?php elseif ($i == 4): ?>
                        <span class="current">
                            <?php echo $current_page ?>
                        </span>

                    <?php elseif ($i == 5): ?>
                        <a class="page larger"
                            href="<?php echo $id_object_active_url ?>page/<?php echo $current_page + 1 ?>/?<?php echo $result ?>"><?php echo $current_page + 1 ?></a>

                    <?php elseif ($i == 6): ?>
                        <a class="page larger"
                            href="<?php echo $id_object_active_url ?>page/<?php echo $current_page + 2 ?>/?<?php echo $result ?>"><?php echo $current_page + 2 ?></a>

                    <?php elseif ($i == 7): ?>
                        <span class="extend">...</span>
                    <?php elseif ($i == 8): ?>
                        <a class="last"
                            href="<?php echo $id_object_active_url ?>page/<?php echo $total_page ?>/?<?php echo $result ?>">&gt;</a>
                    <?php endif ?>
                <?php endfor; ?>
            <?php else: ?>

                <?php for ($i = 1; $i <= $total_page; $i++): ?>
                    <?php if ($i <= 2): ?>
                        <?php if ($i == 1): ?>
                            <a class="first" href="<?php echo $id_object_active_url ?>page/<?php echo $i ?>/?<?php echo $result ?>">&lt;</a>
                        <?php else: ?>
                            <span class="extend">...</span>
                        <?php endif ?>
                    <?php elseif ($number_display - $i >= 0): ?>
                        <?php if (($total_page - ($number_display - $i)) == $current_page): ?>
                            <span class="current">
                                <?php echo $current_page ?>
                            </span>
                        <?php elseif (($total_page - ($number_display - $i)) > $current_page): ?>
                            <a class="page larger"
                                href="<?php echo $id_object_active_url ?>page/<?php echo ($total_page - ($number_display - $i)) ?>/?<?php echo $result ?>"><?php echo ($total_page - ($number_display - $i)) ?></a>
                        <?php else: ?>
                            <a class="page smaller"
                                href="<?php echo $id_object_active_url ?>page/<?php echo ($total_page - ($number_display - $i)) ?>/?<?php echo $result ?>"><?php echo ($total_page - ($number_display - $i)) ?></a>
                        <?php endif ?>
                    <?php endif; ?>
                <?php endfor; ?>
            <?php endif; ?>
        </div>
        <?php
    }
}
?>


<?php
if (!function_exists('azonow_category_list')) {
    function azonow_category_list($posts)
    {

        ?>
        <?php if (have_posts()): ?>
            <?php foreach ($posts as $key => $post): ?>
                <?php
                $category_details = get_the_category();
                $category_name = "Uncategorized";
                $category_url = "";
                if (isset($category_details[0])) {
                    $category_url = get_category_link($category_details[0]->term_id);
                    $category_name = $category_details[0]->name;
                }
                $author_id = $post->post_author;
                $author_name = get_the_author_meta('display_name', $author_id);
                $get_author_gravatar = get_avatar_url($author_id, array('size' => 450));
                $get_author_url = get_author_posts_url($author_id);
                ?>
                <div id="post-<?php echo $post->ID ?>"
                    class="post-holder clearfix post-<?php echo $post->ID ?> post type-post status-publish format-standard has-post-thumbnail hentry category-marketing <?php echo (int) $key % 2 != 0 ? "odd" : "even" ?>">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <header class="post-header">
                                    <div class="post-category"><a href="<?php echo $category_url ?>" rel="tag"><?php echo $category_name ?></a></div>
                                    <h3> <a href="<?php echo get_permalink($post->ID); ?>" rel="bookmark"
                                            title="Permanent Link to <?php echo $post->post_title ?>"><?php printf(__('%1$s', 'azonow'), $post->post_title) ?></a></h3>
                                    <div class="post-meta"> <span class="post-author vcard author" itemprop="author"> <span
                                                class="post-author-avatar"><img src="<?php echo $get_author_gravatar ?>"
                                                    data-lazy-type="image" data-src="<?php echo $get_author_gravatar ?>" width="30"
                                                    height="30" alt="<?php echo $author_name ?>"
                                                    class="avatar avatar-30 wp-user-avatar wp-user-avatar-30 alignnone photo lazy-loaded"
                                                    style=""><noscript><img src="<?php echo $get_author_gravatar ?>" width="30"
                                                        height="30" alt="<?php echo $author_name ?>"
                                                        class="avatar avatar-30 wp-user-avatar wp-user-avatar-30 alignnone photo" /></noscript></span>
                                            <a href="<?php echo $get_author_url ?>" title="Posts by <?php echo $author_name ?>"
                                                rel="author"> <span class="fn">
                                                    <?php echo $author_name ?>
                                                </span> </a> </span> <span class="post-date published updated" itemprop="datePublished">
                                            <?php echo get_the_date() ?>
                                        </span></div>
                                </header>
                            </div>
                        </div>
                    </div>
                </div>

            <?php endforeach; ?>

        <?php endif; ?>

        <?php
    }
}


//add id to h2 in post
add_filter( 'the_content', 'add_id_to_h2' );
function add_id_to_h2( $content ) {
    $pattern = '/<h2>(.*?)<\/h2>/s';
    $new_content = preg_replace_callback( $pattern, function( $matches ) {
        $id = sanitize_title( $matches[1] );
        return sprintf( '<h2 id="%s">%s</h2>', $id, $matches[1] );
    }, $content );
    return $new_content;
}

add_action( 'widgets_init', 'my_register_sidebars' );
function my_register_sidebars() {
    register_sidebar( array(
        'name'          => __( 'Post Sidebar', 'text-domain' ),
        'id'            => 'post-sidebar',
        'description'   => __( 'This sidebar is displayed on single post pages.', 'text-domain' ),
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}


//post_sidebar
function my_post_sidebar() {
    if ( is_singular( 'post' ) ) {
        // echo '<aside id="post-sidebar" class="sidebar">';
        echo '<ul>';
        $content = apply_filters( 'the_content', get_the_content() );
        $pattern = '/<h2.*>(.*?)<\/h2>/';
        preg_match_all( $pattern, $content, $matches );
        if ( ! empty( $matches[0] ) ) {
            foreach ( $matches[0] as $index => $match ) {
                $title = $matches[1][ $index ];
                $slug = sanitize_title( $title );
                echo '<li id="menu-'.$slug.'"><a href="#' . $slug . '">' . $title . '</a></li>';
            }
        }
        echo '</ul>';
        // echo '</aside>';
    }
}


?>
=======
//Get role name by user ID
if( !function_exists('get_user_role_name') ){
    function get_user_role_name($user_ID){
        global $wp_roles;
        $user_data = get_userdata($user_ID);
        $user_role_slug = $user_data->roles[0];
        return translate_user_role($wp_roles->roles[$user_role_slug]['name']);
    }
}
?>


>>>>>>> 9c764827bd1afcb96efb3f6b49efc4b1f7e00784
