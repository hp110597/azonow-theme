<!DOCTYPE html>
<html <?php language_attributes()?> style="margin: 0 !important">

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <link rel="profile" href="http://gmgp.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url') ?>">
    <?php wp_head() ?>
    <!--Used to add code to header-->
</head>

<body>
    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="clearfix">
                        <div class="logo">
                            <div class="top-promo top-promo-desktop">
                                <span class="full-width">
                                    <?php _e('New to SEO? Read our','azonow')?> <a href="<?php $_SERVER['HTTP_HOST'] ?>"><?php _e('SEO guide','azonow')?></a>.
                                </span>
                                <span class="short-width"><a href="<?php $_SERVER['HTTP_HOST'] ?>"><?php _e('SEO guide','azonow')?></a></span>
                            </div>
                            <div class="logo-h2">&nbsp;
                                <a class="ahrefs" href="<?php $_SERVER['HTTP_HOST'] ?>" title="<?php _e('SEO blog by azonow','azonow') ?>"
                                    style="--logo-web: url('<?php echo get_custom_logo()?>')"></a>
                            </div>
                        </div>
                        <div class="top-menu">
                            <div class="top-menu-items">
                                <?php 
                                    $menu_items = wp_get_menu_array('primary-menu');
                                    if(is_array($menu_items) or is_object($menu_items)):
                                    foreach ($menu_items as $item) :
                                    if( !empty($item['children']) ):
                                ?>
                                <div class="top-menu-item top-menu-item-hide-on-search">
                                    <?php if(isset($item['ID'])):?>
                                        <ul class="dropdown-menu dropdown-cat-item" aria-labelledby="top-menu-<?= $item['ID'] ?>" role="menu">
                                            <?php $result=""?>
                                            <?php foreach($item['children'] as $child): ?>
                                                <?php
                                                    if (azonow_object_active_url() == $child['url']) {
                                                        $result="active";
                                                    }
                                                ?>
                                                <li>
                                                    <a href="<?= $child['url'] ?>">
                                                        <?php  printf(__('%1$s','azonow'),$child['title']) ?>
                                                    </a>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                        <a href="#" class="top-menu-el <?php echo $result ?>" id="top-menu-<?= $item['ID'] ?> " type="button"
                                            data-toggle="dropdown" aria-expanded="false">
                                            <?php  printf(__('%1$s','azonow'),$item['title']) ?>
                                            <span class="caret"></span>
                                        </a>
                                    <?php endif;?>
                                </div>
                                <?php else: ?>
                                <div class="top-menu-item top-menu-item-hide-on-search">
                                    <a href="<?= $item['url'] ?>" class="top-menu-el <?php  $result = azonow_object_active_url() == $item['url'] ? "active" :"";
                                        echo $result ?>" type="button">
                                        <?php  printf(__('%1$s','azonow'),$item['title']) ?>
                                    </a>
                                </div>
                                <?php endif; ?>
                                <?php endforeach; ?>
                                <?php endif;?>
                                <?php if (!is_search()): ?>
                                <div class="top-menu-item search-menu-form-list-item">
                                    <form method="get" class="top-menu-item-search-form" id="top-menu-searchform-main"
                                        action="<?php $_SERVER['HTTP_HOST'] ?>">
                                        <div class="top-menu-item-search-container"> <input type="text"
                                                class="searching" value="" name="search"
                                                placeholder="Search the blog..." aria-label="Search">
                                            <button type="submit" class="btn-submit search-icon">Search</button>
                                            <button type="reset" class="btn-reset cross-icon"></button>
                                        </div>
                                    </form>
                                    <span class="search-toggle-icon" id="searchToggle" tabindex="0"><?php _e('Search','azonow')?>
                                    </span>
                                </div>
                                <?php endif;?>

                                <div class="top-menu-item goto-subscribe-list-item"> <a class="btn btn-goto-subscribe"
                                        href="#"><?php _e('Subscribe','azonow')?></a>
                                </div>
                            </div>
                        </div>
                        <div class="mobile-button-wrap">
                            <a href="#" id="sMobileMenuButton" class="mobile-button"
                                role="button">
                                <div class="menu-icons">
                                    <div class="icon-hamburger"></div>
                                    <div class="icon-cross"></div>
                                </div> <span class="screen-reader-text"><?php _e('Menu','azonow')?></span>
                            </a></div>
                        <div class="top-menu-mobile with-social-widget with-promo">
                            <div class="mobile-menu-header">
                                <div class="logo">
                                    <div class="logo-h2">&nbsp;
                                        <a class="ahrefs" href="<?php $_SERVER['HTTP_HOST'] ?>" title="<?php _e('SEO blog by azonow','azonow') ?>" style="--logo-web: url('<?php echo get_custom_logo()?>')">
                                         </a>
                                    </div>
                                </div>
                            </div>
                            <div class="top-promo top-promo-mobile"> <?php _e('New to SEO? Read our','azonow')?> <a
                                    href="<?php $_SERVER['HTTP_HOST'] ?>"><?php _e('SEO guide','azonow')?></a>.</div>
                            <div class="mobile-menu-wrap">
                                <div>
                                    <div class="mobile-search">
                                        <form method="get" id="searchform-mobile-menu" action="<?php $_SERVER['HTTP_HOST'] ?>">
                                            <input type="text" class="searching" value="" name="s"
                                                placeholder="Search the blog..." aria-label="Search"><button
                                                type="submit" class="btn-submit search-icon"><?php _e('Search','aznonow')?></button>
                                        </form>
                                    </div>
                                    <div class="mobile-menu-content">
                                    <?php 
                                    if(is_array($menu_items) or is_object($menu_items)):
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
                                    <?php 
                                        endif; 
                                        endforeach; 
                                        endif;
                                    ?>
                                    </div>
                                </div>
                            </div>
                            <div class="mobile-menu-footer">
                                <div class="mobile-menu-footer-wrap">
                                    <div class="languages-picker-mobile"> <select class="lang-select">
                                            <option value="en" data-url="https://ahrefs.com/blog/" selected="selected">
                                                English</option>
                                            <option value="es" data-url="https://ahrefs.com/blog/es/">Español</option>
                                            <option value="de" data-url="https://ahrefs.com/blog/de/">Deutsch</option>
                                            <option value="ru" data-url="https://ahrefs.com/blog/ru/">Русский</option>
                                            <option value="zh" data-url="https://ahrefs.com/blog/zh/">中文</option>
                                            <option value="it" data-url="https://ahrefs.com/blog/it/">Italiano</option>
                                            <option value="fr" data-url="https://ahrefs.com/blog/fr/">Français</option>
                                            <option value="pt" data-url="https://ahrefs.com/blog/pt/">Português</option>
                                        </select> <span class="select-button"></span></div> <a
                                        class="btn btn-goto-subscribe" href="#">Subscribe</a>
                                </div>
                                <div class="widget-social">
                                    <div class="h3"> <a href="#" target="_blank"
                                            rel="nofollow"><i class="fa fa-facebook"></i></a> <a
                                            href="#" target="_blank" rel="nofollow"><i
                                                class="fa fa-twitter"></i></a> <a
                                            href="#" target="_blank" rel="nofollow"><i
                                                class="fa fa-youtube-play"></i></a> <a type="application/rss+xml"
                                            href="#" target="_blank"><i
                                                class="fa fa-rss"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <?php 
    ?>
    <!-- Single button -->