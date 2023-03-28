<?php get_header(); ?>
    <div class="body-shadow" style="display: none;"></div>
    <div id="container">
        <div id="content">
            <div class="top-section welcome-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h1><?php the_title(); ?></h1>
                            <p><?php the_excerpt(); ?></p>
                        </div>
                    </div>
                </div>
                <div class="with-flag with-line"></div>
            </div>
            <div class="latest-articles">
                <?php 
                $recent_posts = wp_get_recent_posts(array(
                    'numberposts' => 6, 
                    'post_status' => 'publish'));
                foreach( $recent_posts as $post_item ) : ?>
                <div id="post-155424" class="post-holder clearfix  post-155424 post type-post status-publish format-standard hentry category-marketing odd">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <header class="post-header">
                                    <div class="post-category">
                                        <a href="
                                        <?php
                                            $category=get_the_category($post_item['ID'])[0];
                                            echo get_category_link( $category->term_id );
                                        ?>" rel="tag">
                                            <?php 
                                                echo get_the_category($post_item['ID'])[0]->name;
                                            ?>
                                        </a>
                                    </div>
                                    <h2>
                                        <a href="<?php echo get_permalink( $post_item['ID'] ); ?>" title="<?php echo $post_item['post_title']; ?>">
                                            <?php echo $post_item['post_title']; ?>
                                        </a>
                                    </h2>
                                    <div class="post-meta">
                                        <span> 
                                            <?php echo get_the_excerpt( $post_item['ID'] );  ?>
                                        </span> 
                                        <span class="post-author">
                                             <a href="<?php echo get_author_posts_url( $post_item['post_author']); ?>" title=' Posts by <?php echo get_the_author_meta('display_name', $post_item['post_author'] ); ?>' rel="author">
                                                <span class="post-author-avatar">
                                                    <?php echo get_avatar( get_the_author_meta( $post_item['ID'] )); ?>
                                                </span>
                                                <span class="post-author-link"><?php echo get_the_author_meta('display_name', $post_item['post_author'] ); ?></span>
                                            </a>
                                        </span> 
                                        <span class="post-date">
                                            <?php echo get_the_date('M d',$post_item['ID']); ?>
                                        </span></div>
                                </header>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="section section-show-more ">
                <div class="row">
                    <div> <a class="btn-primary btn-more" href="<?php echo get_post_type_archive_link( 'post' ); ?>">Show more posts</a>
                    </div>
                </div>
            </div>
            

            <?php
                $categories = get_categories();
                $group_categories_post_counts=[];
                $mono_categories_post_counts=[];
                foreach ($categories as $cat) {
                    $args = array(
                        'child_of' => $cat->term_id,
                        'taxonomy' => 'category'
                    );
                    $children = get_categories($args);
                    $parent = $cat->parent;
                    if ($children) {
                        $args = array(
                            'cat' => $cat->term_id,
                            'post_type' => 'post',
                            'post_status' => 'publish',
                            'posts_per_page' => -1
                        );
                        $query_1 = new WP_Query($args);
                        $post_count_1 = $query_1->post_count;
                        if($post_count_1>0){
                            $group_categories_post_counts[$cat->term_id]=$post_count_1;
                        }
                    }
                    if($parent==0 && empty($children)){
                        $args = array(
                            'cat' => $cat->term_id,
                            'post_type' => 'post',
                            'post_status' => 'publish',
                            'posts_per_page' => -1
                        );
                        $query_2 = new WP_Query($args);
                        $post_count_2 = $query_2->post_count;
                        if($post_count_2>0){
                            $mono_categories_post_counts[$cat->term_id]=$post_count_2;
                        }
                    }
                }
                arsort($group_categories_post_counts);
                arsort($mono_categories_post_counts);

                $top_group_categories=array_slice($group_categories_post_counts,0,3,true);
                $top_mono_categories=array_slice($mono_categories_post_counts,0,2,true);


                $top_group_categories_id=array_keys($top_group_categories);
                $top_mono_categories_id=array_keys($top_mono_categories);


            ?>
            
            <?php if(!empty($top_group_categories_id)): ?>
            <?php foreach($top_group_categories_id as $top_group_category_id ): ?>
            <div class="section section-category">
                <div class="row">
                    <div class="form-bg" style="color:black;">
                        <h2><?php echo get_cat_name($top_group_category_id); ?></h2>
                        <p class="h5"><?php esc_html_e(wp_strip_all_tags(category_description($top_group_category_id)));  ?></p>
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                            aria-orientation="horizontal">
                            <div> 
                                <?php 
                                $categories = get_terms(array( 
                                    'parent' => $top_group_category_id, 
                                    'taxonomy'=>'category', 
                                    'hide_empty' => false ));
                                foreach($categories as $index=> $category):?>
                                <button class="nav-link <?php esc_html_e($index == 0 ? 'active in' : ''); ?>" id="v-pills-<?php esc_html_e($category->slug ); ?>-tab" data-toggle="pill"
                                    href="#v-pills-<?php esc_html_e($category->slug ); ?>" role="tab" aria-controls="v-pills-<?php esc_html_e($category->slug ); ?>"
                                    aria-selected="true"><?php esc_html_e( $category->name ); ?></button>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="tab-content" id="v-pills-tabContent">
                            <?php 
                            $categories = get_terms(array( 
                                    'parent' => $top_group_category_id, 
                                    'taxonomy'=>'category', 
                                    'hide_empty' => false ));
                            foreach( $categories as $index=> $category): ?>
                            <div 
                                class="tab-pane fade <?php 
                                    esc_html_e($index == 0 ? 'active in' : '');
                                    esc_html_e($index % 2 != 0 ? 'count-le-3' : ''); ?>"
                                id="v-pills-<?php esc_html_e($category->slug ); ?>" 
                                role="tabpanel"
                                aria-labelledby="v-pills-<?php esc_html_e($category->slug ); ?>-tab">
                                <?php $args = array(
                                        'category__in' => array( $category->term_id ),
                                        'posts_per_page' => 5,
                                        'orderby' => 'date',
                                        'order' => 'DESC'); 
                                        $query = new WP_Query( $args );
                                        $counter=0;
                                        if ( $query->have_posts() ):
                                            while ( $query->have_posts()): 
                                                $query->the_post();
                                                $counter++;
                                ?>
                                <?php if($counter==1): ?>
                                <div>
                                    <header class="post-header"> 
                                        <a href="<?php the_permalink(); ?>"
                                            title="<?php the_title(); ?>">
                                            <div>
                                                <?php the_post_thumbnail(); ?>
                                            </div>
                                            <h3><?php the_title(); ?></h3>
                                        </a>
                                        <div class="post-meta"> <span> <?php the_excerpt(); ?> </span></div>
                                    </header>
                                </div>
                                <?php else: ?>
                                <div>
                                    <header class="post-header">
                                        <h3> <a href="<?php the_permalink(); ?>"
                                                title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
                                        <div class="post-meta"> <span> <?php the_excerpt(); ?></span></div>
                                    </header>
                                </div>
                                <?php endif; endwhile; endif; ?>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
            <?php endif; ?>                      

            
            <div class="section section-subscribe">
                <div class="row">
                    <div><noscript><img
                                src="https://ahrefs.com/blog/wp-content/themes/Ahrefs-4/images/blocks/subscribe.svg"></noscript><img
                            class=" lazy-loaded lazyloaded"
                            src="https://ahrefs.com/blog/wp-content/themes/Ahrefs-4/images/blocks/subscribe.svg"
                            data-src="https://ahrefs.com/blog/wp-content/themes/Ahrefs-4/images/blocks/subscribe.svg">
                    </div>
                    <div>
                        <form class="subscribe-form" onsubmit="return false">
                            <div class="h2">Join the Ahrefs' Digest</div>
                            <div class="text">Get the week's best marketing content in your inbox.</div> <input
                                type="hidden" name="emailFoot" value=""> <label class="sr-only"><span
                                    class="screen-reader-text">Email Subscription</span></label> <input type="email"
                                id="sMailFooter" placeholder="Enter your email" aria-label="Enter your email"
                                required="">
                            <div class="text text-alert" id="subscrResponse" style="display:none;"></div>
                            <div class="button-wrap"> <a id="subscribe_button" name="sSubscrBtn"
                                    class="btn btn-subscribe" href="/">Subscribe</a></div> <label
                                style="display: none !important;">Leave this field empty if you're human: <input
                                    type="text" name="_mc4wp_honeypot" value="" tabindex="-1"
                                    autocomplete="off"></label>
                        </form>
                        <div class="subscribe-thanks" style="display:none;">
                            <div class="h2">Thanks!</div>
                            <div class="text">Please check your email inbox and spam folder. We've sent you a link to
                                verify your email.</div>
                            <div class="email"><noscript><img
                                        src="https://ahrefs.com/blog/wp-content/themes/Ahrefs-4/images/blocks/subscribe-email.svg"></noscript><img
                                    class="lazyload"
                                    src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E"
                                    data-src="https://ahrefs.com/blog/wp-content/themes/Ahrefs-4/images/blocks/subscribe-email.svg">
                            </div>
                            <div class="button-wrap"> <a id="subscribe_gotit" class="btn btn-subscribe" href="#">Got
                                    It</a></div>
                        </div>
                    </div>
                </div>
            </div>
            
            <?php if(!empty($top_mono_categories_id)): ?>
            <?php foreach($top_mono_categories_id as $top_mono_category_id): $category=get_term($top_group_category_id); ?>
            <div class="section section-category">
                <div class="row">
                    <div class="form-bg" style="color:black;">
                        <h2><?php echo get_cat_name($top_mono_category_id); ?></h2>
                        <p class="h5"><?php esc_html_e(wp_strip_all_tags(category_description($top_mono_category_id)));  ?></p>
                        <div class="tab-content" id="v-pills-tabContent">
                            <div 
                                class="tab-pane fade active in"
                                id="v-pills-<?php esc_html_e($category->slug ); ?>" 
                                role="tabpanel"
                                aria-labelledby="v-pills-<?php esc_html_e($category->slug ); ?>-tab">
                                <?php $args = array(
                                        'category__in' => array( $top_mono_category_id ),
                                        'posts_per_page' => 5,
                                        'orderby' => 'date',
                                        'order' => 'DESC'); 
                                        $query = new WP_Query( $args );
                                        $counter=0;
                                        if ( $query->have_posts() ):
                                            while ( $query->have_posts()): 
                                                $query->the_post();
                                                $counter++;
                                ?>
                                <?php if($counter==1): ?>
                                <div>
                                    <header class="post-header"> 
                                        <a href="<?php the_permalink(); ?>"
                                            title="<?php the_title(); ?>">
                                            <div>
                                                <?php the_post_thumbnail(); ?>
                                            </div>
                                            <h3><?php the_title(); ?></h3>
                                        </a>
                                        <div class="post-meta"> <span> <?php the_excerpt(); ?> </span></div>
                                    </header>
                                </div>
                                <?php else: ?>
                                <div>
                                    <header class="post-header">
                                        <h3> <a href="<?php the_permalink(); ?>"
                                                title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
                                        <div class="post-meta"> <span> <?php the_excerpt(); ?></span></div>
                                    </header>
                                </div>
                                <?php endif; endwhile; endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>  
            <?php endif; ?>



            
            <div class="section section-show-more show-more-bottom">
                <div class="row">
                    <div> <a class="btn-primary btn-more" href="<?php echo get_post_type_archive_link( 'post' ); ?>">Show more posts</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php get_footer(); ?>

    <noscript>
        <style>
            .lazyload {
                display: none;
            }
        </style>
    </noscript>




    <script defer="" type="text/javascript"
        src="https://ahrefs.com/blog/wp-content/cache/autoptimize/js/autoptimize_single_764f80ce7b62103bfe17f5fbbc2bbb6a.js"
        id="Ahrefs-plugins-js"></script>
<?php get_footer()?>
