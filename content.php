<?php
    $id_object_active = get_queried_object();
    $id_object_active_url="";
    if(isset($id_object_active->term_id) && is_category()){
        $id_object_active_id=$id_object_active->term_id;
        $id_object_active_url = get_term_link($id_object_active_id);
    }else{
        $id_object_active_url = home_url() . '/';
    }
    $total_page = $GLOBALS['wp_query']->max_num_pages;
    $current_page = max( 1, get_query_var('paged') );
    $number_display = 8;
    $val = reset($_GET);
    $key = key($_GET);
    parse_str($_SERVER['QUERY_STRING'], $array);
    $val = reset($array);
    $key = key($array);
    $result="$key=$val";
    ?>

    <!-- LIST POSTS -->
    <?php if(have_posts()):?>
        <?php foreach($posts as $key =>$post):?>
            <?php 
                $category_details = get_the_category();
                $category_name="Uncategorized";
                $category_slug = "uncategorized";
                $category_url = "";
                if(isset($category_details[0])){
                    $category_url = get_category_link($category_details[0]->term_id);
                    $category_name = $category_details[0]->name;
                    $category_slug = $category_details[0]->slug;
                }
                $author_id = $post->post_author;
                $author_name = get_the_author_meta('display_name', $author_id);
                $get_author_gravatar = get_avatar_url($author_id, array('size' => 450));
                $get_author_url = get_author_posts_url($author_id);
            ?>
            <div id="post-<?php echo $post->ID ?>" class="post-holder clearfix post-<?php echo $post->ID ?> post type-post status-publish format-standard has-post-thumbnail hentry category-<?php echo $category_slug ?> <?php echo (int)$key%2 != 0 ? "odd" : "even"  ?>">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <header class="post-header">
                                <div class="post-category">
                                    <a href="<?php echo $category_url ?>" rel="tag"><?php echo $category_name?></a>
                                </div>
                                <h3>
                                    <a href="<?php echo get_permalink( $post->ID ); ?>" rel="bookmark" title="Permanent Link to <?php echo $post->post_title ?>"><?php printf(__('%1$s','azonow'),$post->post_title) ?>
                                    </a>
                                </h3>
                                <div class="post-meta">
                                    <span class="post-author vcard author" itemprop="author">
                                        <span class="post-author-avatar">
                                            <img src="<?php echo $get_author_gravatar ?>" data-lazy-type="image" data-src="<?php echo $get_author_gravatar ?>" width="30" height="30" alt="<?php echo $author_name ?>" class="avatar avatar-30 wp-user-avatar wp-user-avatar-30 alignnone photo lazy-loaded" style="">
                                            <noscript>
                                                <img src="<?php echo $get_author_gravatar ?>" width="30" height="30" alt="<?php echo $author_name ?>" class="avatar avatar-30 wp-user-avatar wp-user-avatar-30 alignnone photo" />
                                            </noscript>
                                        </span>
                                        <a href="<?php echo $get_author_url ?>" title="Posts by <?php echo $author_name ?>" rel="author">
                                            <span class="fn"><?php echo $author_name ?></span>
                                        </a>
                                    </span>
                                    <span class="post-date published updated" itemprop="datePublished"><?php echo get_the_date() ?>
                                    </span>
                                </div>
                            </header>
                        </div>
                    </div>
                </div>
            </div>
                
        <?php endforeach;?>
     
    <?php endif;?>

    <!-- PAGINATION -->
    <?php  if($total_page  <2){
        return '';
    }?>
    <div class="wp-pagenavi">
        <?php if($current_page <= 4):?>
        
            <?php for($i=1;$i<=$total_page;$i++):?>
                <?php if($i <= $number_display):?>
                    <?php if($i<=6):?>
                        <?php if($current_page == $i):?>
                            <span class="current"><?php echo $i?></span>
                        <?php else:?>
                            <?php if($current_page < $i):?>
                                <a class="page larger" href="<?php echo $id_object_active_url ?>page/<?php echo $i ?>/?<?php echo $result ?>"><?php echo $i?></a>
                            <?php else:?>
                                <a class="page smaller" href="<?php echo $id_object_active_url ?>page/<?php echo $i ?>/?<?php echo $result ?>"><?php echo $i?></a>
                            <?php endif;?>
                        <?php endif;?>
                    <?php elseif($total_page-$i > 2):?>
                        <?php if($i==$number_display-1):?>
                            <span class="extend">...</span>
                        <?php elseif($i==$number_display):?>
                            <a class="last" href="<?php echo $id_object_active_url ?>page/<?php echo ($total_page ) ?>/?<?php echo $result ?>">&gt;</a>
                        <?php endif?>
                    <?php else:?>
                        <?php if($i==$number_display):?>
                            <a class="last" href="<?php echo $id_object_active_url ?>page/<?php echo ($total_page ) ?>/?<?php echo $result ?>">&gt;</a>
                        <?php endif?>
                    <?php endif;?>
                <?php endif;?>
            <?php endfor;?>
        <?php elseif($total_page - $current_page > 3):?>
            
        <?php for($i=1;$i<=$total_page;$i++):?>
            <?php if($i<=2):?>
                <?php if($i==1):?>
                    <a class="first" href="<?php echo $id_object_active_url ?>page/<?php echo $i ?>/?<?php echo $result ?>">&lt;</a>
                <?php else:?>
                    <span class="extend">...</span>
                <?php endif?>
            <?php elseif($i==3):?>
                <a class="page smaller" href="<?php echo $id_object_active_url ?>page/<?php echo $current_page-1 ?>/?<?php echo $result ?>"><?php echo $current_page-1?></a>
            
            <?php elseif($i==4):?>
                <span class="current"><?php echo $current_page?></span>
            
            <?php elseif($i== 5):?>
                <a class="page larger" href="<?php echo $id_object_active_url ?>page/<?php echo $current_page+1 ?>/?<?php echo $result ?>"><?php echo $current_page+1?></a>
            
            <?php elseif($i== 6):?>
                <a class="page larger" href="<?php echo $id_object_active_url ?>page/<?php echo $current_page+2 ?>/?<?php echo $result ?>"><?php echo $current_page+2?></a>
            
            <?php elseif($i==7):?>
                <span class="extend">...</span>
            <?php elseif($i==8):?>
                <a class="last" href="<?php echo $id_object_active_url ?>page/<?php echo $total_page ?>/?<?php echo $result ?>">&gt;</a>
            <?php endif?>
        <?php endfor;?>
        <?php else:?>
            
            <?php for($i=1;$i<=$total_page;$i++):?>
                <?php if($i<=2):?>
                    <?php if($i==1):?>
                        <a class="first" href="<?php echo $id_object_active_url ?>page/<?php echo $i ?>/?<?php echo $result ?>">&lt;</a>
                    <?php else:?>
                        <span class="extend">...</span>
                    <?php endif?>
                <?php elseif($number_display- $i >=0):?>
                    <?php if(($total_page - ($number_display - $i)) == $current_page):?>
                        <span class="current"><?php echo $current_page?></span>
                    <?php elseif(($total_page - ($number_display - $i))>$current_page):?>
                        <a class="page larger" href="<?php echo $id_object_active_url ?>page/<?php echo ($total_page - ($number_display - $i)) ?>/?<?php echo $result ?>"><?php echo ($total_page - ($number_display - $i))?></a>
                    <?php else:?>
                        <a class="page smaller" href="<?php echo $id_object_active_url ?>page/<?php echo ($total_page - ($number_display - $i)) ?>/?<?php echo $result ?>"><?php echo ($total_page - ($number_display - $i))?></a>
                    <?php endif?>
                <?php endif;?>
            <?php endfor;?>
        <?php endif;?>
    </div>

