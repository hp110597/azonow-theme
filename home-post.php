<div id="container">
    <div id="content">
        <div class="top-section welcome-section with-flag">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h2>Blog Archive</h2>
                            <p> Here you can explore hundreds of detailed tutorials, case studies and opinion pieces from our archives. Just pick the category you're interested in below.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="top-section section-archive-categories-list">
            <div class="container"><div class="row"><div class="items-flex"><div class="search-wrap"><form method="get" id="searchform-archive" action="<?php echo home_url() ?>"> <input type="text" class="searching" value="" name="s" placeholder="Search the blog..." aria-label="Search"><button type="submit" class="btn-submit search-icon">Search</button></form></div><div class="categories-list-wrap">
            <?php 
                $menu_items = wp_get_menu_array('primary-menu');
                if((is_array($menu_items) or is_object($menu_items)) && !is_404()):
                foreach ($menu_items as $item) :
                if( !empty($item['children']) ):
            ?>
                    <div class="mobile-menu-block">
                        <?php if(isset($item['ID'])):?>
                            <span
                                class="mobile-menu-item mobile-menu-parent mobile-menu-el">
                                <?php printf(__('%1$s','azonow'),$item['title']) ?>
                            </span>

                            <?php foreach($item['children'] as $child): ?>
                                <a href="<?= $child['url'] ?>" class="mobile-menu-item mobile-menu-child mobile-menu-el">
                                    <?php  printf(__('%1$s','azonow'),$child['title']) ?>
                                </a>
                            <?php endforeach; ?>
                        <?php endif;?>
                    </div>
                <?php else:?>
                    <div class="mobile-menu-block">
                        <a
                            href="<?= $item['url'] ?>"
                            class="mobile-menu-item mobile-menu-parent top-menu-el" type="button">
                            <?php  printf(__('%1$s','azonow'),$item['title']) ?>
                        </a>
                    </div>
                <?php endif; ?>
                <?php endforeach; ?>
                <?php endif;?>
            </div>
        </div>
        <div class="archive-img-greg"> <noscript><img src="https://ahrefs.com/blog/wp-content/themes/Ahrefs-4/images/archive/greg.svg" /></noscript><img class=" ls-is-cached lazyloaded" src="https://ahrefs.com/blog/wp-content/themes/Ahrefs-4/images/archive/greg.svg" data-src="https://ahrefs.com/blog/wp-content/themes/Ahrefs-4/images/archive/greg.svg"></div><div class="archive-img-hand"> <noscript><img src="https://ahrefs.com/blog/wp-content/themes/Ahrefs-4/images/archive/hand.svg" /></noscript><img class=" ls-is-cached lazyloaded" src="https://ahrefs.com/blog/wp-content/themes/Ahrefs-4/images/archive/hand.svg" data-src="https://ahrefs.com/blog/wp-content/themes/Ahrefs-4/images/archive/hand.svg"></div><div class="archive-img-heart"> <noscript><img src="https://ahrefs.com/blog/wp-content/themes/Ahrefs-4/images/archive/heart.svg" /></noscript><img class=" ls-is-cached lazyloaded" src="https://ahrefs.com/blog/wp-content/themes/Ahrefs-4/images/archive/heart.svg" data-src="https://ahrefs.com/blog/wp-content/themes/Ahrefs-4/images/archive/heart.svg"></div></div></div>
        </div>
    </div>
</div>
<?php get_template_part('content')?>