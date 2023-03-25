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
                                    New to SEO? Read our <a href="https://ahrefs.com/seo">SEO guide</a>.
                                </span>
                                <span class="short-width"><a href="https://ahrefs.com/seo">SEO Guide</a></span>
                            </div>
                            <div class="logo-h2">&nbsp;
                                <a class="ahrefs" href="<?php $_SERVER['HTTP_HOST'] ?>" title="SEO Blog by Ahrefs"
                                    style="--logo-web: url('<?php echo get_custom_logo()?>')"></a>
                            </div>
                        </div>
                        <div class="top-menu">
                            <div class="top-menu-items">
                                <?php azonow_menu('primary-menu')?>
                                <?php if (!is_search()): ?>
                                <div class="top-menu-item search-menu-form-list-item">
                                    <form method="get" class="top-menu-item-search-form" id="top-menu-searchform-main"
                                        action="">
                                        <div class="top-menu-item-search-container"> <input type="text"
                                                class="searching" value="" name="search"
                                                placeholder="Search the blog..." aria-label="Search">
                                            <button type="submit" class="btn-submit search-icon">Search</button>
                                            <button type="reset" class="btn-reset cross-icon"></button>
                                        </div>
                                    </form>
                                    <span class="search-toggle-icon" id="searchToggle" tabindex="0">Search
                                    </span>
                                </div>
                                <?php endif;?>

                                <div class="top-menu-item goto-subscribe-list-item"> <a class="btn btn-goto-subscribe"
                                        href="#">Subscribe</a>
                                </div>
                            </div>
                        </div>
                        <div class="mobile-button-wrap"> <a href="#" id="sMobileMenuButton" class="mobile-button"
                                role="button">
                                <div class="menu-icons">
                                    <div class="icon-hamburger"></div>
                                    <div class="icon-cross"></div>
                                </div> <span class="screen-reader-text">Menu</span>
                            </a></div>
                        <div class="top-menu-mobile with-social-widget with-promo">
                            <div class="mobile-menu-header">
                                <div class="logo">
                                    <div class="logo-h2">&nbsp;<a class="ahrefs" href="https://ahrefs.com"
                                            title="SEO Blog by Ahrefs"></a><a class="blog"
                                            href="https://ahrefs.com/blog/" title="SEO Blog by Ahrefs"></a></div>
                                </div>
                            </div>
                            <div class="top-promo top-promo-mobile"> New to SEO? Read our <a
                                    href="https://ahrefs.com/seo">SEO guide</a>.</div>
                            <div class="mobile-menu-wrap">
                                <div>
                                    <div class="mobile-search">
                                        <form method="get" id="searchform-mobile-menu" action="https://ahrefs.com/blog">
                                            <input type="text" class="searching" value="" name="s"
                                                placeholder="Search the blog..." aria-label="Search"><button
                                                type="submit" class="btn-submit search-icon">Search</button>
                                        </form>
                                    </div>
                                    <div class="mobile-menu-content">
                                        <div class="mobile-menu-block"> <span
                                                class="mobile-menu-item mobile-menu-parent mobile-menu-el"> SEO </span>
                                            <a href="https://ahrefs.com/blog/category/general-seo/"
                                                class="mobile-menu-item mobile-menu-child mobile-menu-el">General
                                                SEO</a> <a href="https://ahrefs.com/blog/category/keyword-research/"
                                                class="mobile-menu-item mobile-menu-child mobile-menu-el">Keyword
                                                Research</a> <a href="https://ahrefs.com/blog/category/on-page-seo/"
                                                class="mobile-menu-item mobile-menu-child mobile-menu-el">On-Page
                                                SEO</a> <a href="https://ahrefs.com/blog/category/link-building/"
                                                class="mobile-menu-item mobile-menu-child mobile-menu-el">Link
                                                Building</a> <a href="https://ahrefs.com/blog/category/technical-seo/"
                                                class="mobile-menu-item mobile-menu-child mobile-menu-el">Technical
                                                SEO</a> <a href="https://ahrefs.com/blog/category/local-seo/"
                                                class="mobile-menu-item mobile-menu-child mobile-menu-el">Local SEO</a>
                                        </div>
                                        <div class="mobile-menu-block"> <span
                                                class="mobile-menu-item mobile-menu-parent mobile-menu-el active">
                                                Marketing </span> <a href="https://ahrefs.com/blog/category/marketing/"
                                                class="mobile-menu-item mobile-menu-child mobile-menu-el active">General
                                                Marketing</a> <a
                                                href="https://ahrefs.com/blog/category/content-marketing/"
                                                class="mobile-menu-item mobile-menu-child mobile-menu-el active">Content
                                                Marketing</a> <a
                                                href="https://ahrefs.com/blog/category/affiliate-marketing/"
                                                class="mobile-menu-item mobile-menu-child mobile-menu-el active">Affiliate
                                                Marketing</a> <a href="https://ahrefs.com/blog/category/paid-marketing/"
                                                class="mobile-menu-item mobile-menu-child mobile-menu-el active">Paid
                                                Marketing</a> <a
                                                href="https://ahrefs.com/blog/category/video-marketing/"
                                                class="mobile-menu-item mobile-menu-child mobile-menu-el active">Video
                                                Marketing</a></div>
                                        <div class="mobile-menu-block"> <a
                                                href="https://ahrefs.com/blog/category/data-studies/"
                                                class="mobile-menu-item mobile-menu-parent top-menu-el" type="button">
                                                Data &amp; Studies </a></div>
                                        <div class="mobile-menu-block"> <a
                                                href="https://ahrefs.com/blog/category/product-blog/"
                                                class="mobile-menu-item mobile-menu-parent top-menu-el" type="button">
                                                Product </a></div>
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
                                    <div class="h3"> <a href="https://www.facebook.com/Ahrefs" target="_blank"
                                            rel="nofollow"><i class="fa fa-facebook"></i></a> <a
                                            href="https://twitter.com/ahrefs" target="_blank" rel="nofollow"><i
                                                class="fa fa-twitter"></i></a> <a
                                            href="https://www.youtube.com/c/ahrefscom" target="_blank" rel="nofollow"><i
                                                class="fa fa-youtube-play"></i></a> <a type="application/rss+xml"
                                            href="https://ahrefs.com/blog/feed/" target="_blank"><i
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