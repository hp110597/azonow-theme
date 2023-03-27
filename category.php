<?php get_header()?>
<?php 
    $category = get_queried_object();
    $count_post_category = $category->category_count;
    $category_image = get_term_meta( $category->term_id, 'category_image', true ); 
    $src_image_category = "/wp-content/themes/azonow-theme/assets/images/default_category.png";
    if ( ! empty( $category_image ) ) {
        $src_image_category = esc_url( $category_image ) ;
    }
    $post_hight_rate =  azonow_post_high_vote(5,$posts);
    $image_post_vote_highest = $post_hight_rate[0]['thumbnail'] ? $post_hight_rate[0]['thumbnail'] : "/wp-content/themes/azonow-theme/assets/images/default_beauty.jpg" ;
?>
<div id="container" class="archive-category">
    <div class="content">
        <div class="top-section welcome-section with-flag with-icon">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <noscript>
                            <img class="category-icon" src="<?php echo $src_image_category ?>" />
                        </noscript>
                        <img class="category-icon lazy-loaded lazyloaded" src="<?php echo $src_image_category ?>"
                            data-src="<?php echo $src_image_category ?>">
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <p></p>
                        <h1><?php printf(__('%1$s','azonow'),single_cat_title('',false))?></h1>
                        <p><?php printf(__('%1$s','azonow'),term_description())?></p>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
        
        <?php if(max( 1, get_query_var('paged')) == 1):?>
            <div class="latest-articles">
                <h2><?php printf(__('Our Best Articles on %1$s'),single_cat_title('',false))?></h2>
                <?php printf(__('We handpicked these from the %1$s+ posts on the blog.','azonow'),$count_post_category) ?>
                
                <div class="section section-category">
                    <div class="row">
                        <div class="form-bg">
                            <div class="tab-content">
                                <div class="tab-pane active in">
                                    <div data-pos="<?php echo $post_hight_rate[0]['point'] ?>">
                                        <header class="post-header">
                                            <a href="<?php echo $post_hight_rate[0]['permalink'] ?>"
                                                title="Permalink to <?php echo $post_hight_rate[0]['title'] ?>">
                                                <div class="post-thumbnail" style="background-color:#054ADA">
                                                    <noscript><img width="800" height="400"
                                                            src="<?php echo $image_post_vote_highest ?>"
                                                            class="attachment-header-thumbnail size-header-thumbnail" alt=""
                                                            decoding="async"
                                                            srcset="<?php echo $image_post_vote_highest ?> 800w, <?php echo $image_post_vote_highest ?> 680w, <?php echo $image_post_vote_highest ?> 768w, <?php echo $image_post_vote_highest ?> 400w"
                                                            sizes="(max-width: 800px) 100vw, 800px" />
                                                    </noscript>
                                                    <img width="800" height="400"
                                                        src="<?php echo $image_post_vote_highest ?>"
                                                        data-src="<?php echo $image_post_vote_highest ?>"
                                                        class="attachment-header-thumbnail size-header-thumbnail lazy-loaded lazyloaded"
                                                        alt="" decoding="async" data-srcset=""
                                                        data-sizes="(max-width: 800px) 100vw, 800px"
                                                        sizes="(max-width: 800px) 100vw, 800px"
                                                        srcset="<?php echo $image_post_vote_highest ?> 800w, <?php echo $image_post_vote_highest ?> 680w, <?php echo $image_post_vote_highest ?> 768w, <?php echo $image_post_vote_highest ?> 400w"
                                                        style="">
                                                </div>
                                                <h3> <?php printf(__('%1$s','azonow'),$post_hight_rate[0]['title'])  ?></h3>
                                            </a>
                                            <div class="post-meta"> <span> <?php printf(__('%1$s','azonow'),$post_hight_rate[0]['excerpt']) ?>
                                                </span>
                                            </div>
                                        </header>
                                    </div>
                                    <?php for($i=1;$i<count($post_hight_rate);$i++) :?>
                                    <div data-pos="<?php echo $post_hight_rate[$i]['point'] ?>">
                                        <header class="post-header">
                                            <h3>
                                                <a href="<?php echo $post_hight_rate[$i]['permalink'] ?>"
                                                    title="Permanent Link to <?php echo $post_hight_rate[$i]['title'] ?>">
                                                    <?php printf(__('%1$s','azonow'),$post_hight_rate[$i]['title']) ?>
                                                </a>
                                            </h3>
                                            <div class="post-meta"> <span>
                                                    <?php printf(__('%1$s','azonow'),$post_hight_rate[$i]['excerpt']) ?></span></div>
                                        </header>
                                    </div>
                                    <?php endfor;?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h2 class="most-recent"><?php _e('Most Recent Articles','azonow')?></h2>
        <?php endif;?>
        <?php azonow_category_list($posts)?>
        <?php azonow_pagination(8)?>
    </div>
</div>
