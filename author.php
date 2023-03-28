<?php get_header()?>
<?php 
    $author_name = get_the_author_meta('display_name');
    $author_id = get_the_author_meta('ID');
    $get_author_gravatar = get_avatar_url($author_id, array('size' => 450));
    $role_name_user = get_user_role_name($author_id);
    $user_description = get_the_author_meta('description');
?>
<div id="container">
    <div id="content">
        <div class="top-section welcome-section">
            <div class="container">
                <div class="row">
                    <div class="authors-top-wrap">
                        <div class="author-top-column-2">
                            <div class="author-top-image-wrap">
                                <div class="author-avatar">
                                    <noscript>
                                        <img src="<?php echo $get_author_gravatar ?>" width="256" height="256" alt="<?php echo $author_name ?>" class="avatar avatar-256 wp-user-avatar wp-user-avatar-256 alignnone photo" />
                                    </noscript>
                                    <img src="<?php echo $get_author_gravatar ?>" data-src="<?php echo $get_author_gravatar ?>" width="256" height="256" alt="<?php echo $author_name ?>" class="avatar avatar-256 wp-user-avatar wp-user-avatar-256 alignnone photo ls-is-cached lazyloaded">
                                </div>
                            </div>
                            <div class="accounts-icons">
                                <div class="author-social">
                                    <a href="#" target="_blank" aria-label="LinkedIn">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                    <a class="author-link" href="#" target="_blank" aria-label="Site">
                                        <span class="icon-site"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="star-icon"></div>
                        </div>
                        <div class="author-top-column-1">
                            <div class="authors-top-authors">Authors</div>
                            <h1><?php echo $author_name ?></h1>
                            <div class="authors-top-subtitle"><?php echo $role_name_user ?></div>
                            <div class="authors-top-desc">
                                <p><?php echo $user_description?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="most-recent-articles with-post-nav">
    <a id="most-recent"></a>
    <h2><?php _e('Most Recent Articles','azonow')?></h2>
    <?php get_template_part('content')?>
</div>
<div class="section section-team">
    <?php
    $authors = get_users();
    $authors_detail = [];
    foreach ($authors as $author) 
    {
        $authors_detail[] = ['id'=>$author->ID,'name'=>$author->display_name,'url_user'=>get_author_posts_url($author->ID),'subtitle'=>get_user_role_name($author->ID),'count_posts'=>count_user_posts($author->ID),'user_image'=>get_avatar_url($author->ID)];
    }
    ?>
    <div class="row">
        <div class="form-bg">
            <h2><?php _e('The Blog Squad','azonow') ?></h2>
            <div class="text"> <?php _e('Like our content?','azonow')?>
                <a href="#"><?php _e('Come write for us','azonow')?></a>
            </div>
            <div class="authors-wrap">
                <?php foreach($authors_detail as $key=>$author_detail):?>
                <div class="author-block">
                    
                    <a href="<?php echo $author_detail['url_user'] ?>">
                        <noscript>
                            <img class="author-photo" src="<?php echo $author_detail['user_image'] ?>" srcset="<?php echo $author_detail['user_image'] ?> 1x, https://ahrefs.com/blog/wp-content/themes/Ahrefs-4/images/authors/team/AndreiMarcelTit_2x.jpg 2x" alt="<?php echo $author_detail['name'] ?>">
                        </noscript>
                        <img class="author-photo ls-is-cached lazyloaded" src="<?php echo $author_detail['user_image'] ?>" data-src="<?php echo $author_detail['user_image'] ?>" data-srcset="<?php echo $author_detail['user_image'] ?> 1x, https://ahrefs.com/blog/wp-content/themes/Ahrefs-4/images/authors/team/AndreiMarcelTit_2x.jpg 2x" alt="<?php echo $author_detail['name'] ?>" srcset="<?php echo $author_detail['user_image'] ?> 1x, https://ahrefs.com/blog/wp-content/themes/Ahrefs-4/images/authors/team/AndreiMarcelTit_2x.jpg 2x">
                    </a>
                    <div class="author-name">
                        <a href="<?php echo $author_detail['url_user'] ?>"> <?php echo $author_detail['name'] ?> </a>
                    </div>
                    <div class="author-subtitle"><?php echo $author_detail['subtitle'] ?></div>
                    <div class="author-stat"><?php echo $author_detail['count_posts']?> articles</div>
                </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>
</div>

<?php get_footer()?>