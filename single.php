
  <?php
  get_header();
  $category = get_the_category();
  $category_image = get_term_meta($category[0]->term_id, 'category_image', true);
  $src_image_category = "/wp-content/themes/theme_clone/assets/images/default_category.png";
  if (!empty($category_image)) {
    $src_image_category = $category_image;
  }
  ?>

    <div class="body-shadow" style="display: none"></div>
    <div id="container">
      <div id="content">
        <div
          id="post-155424"
          class="post-holder clearfix post-155424 post type-post status-publish format-standard hentry category-marketing odd"
        >

        <?php
        while (have_posts()) {
          the_post();
          ?>
              <div class="top-section with-icon">
                  <div class="container">
                    <div class="row">
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <noscript
                          ><img
                            class="category-icon"
                            src="<?php echo $src_image_category ?>" /></noscript>
                        <img
                          class="category-icon lazyloaded"
                          src="<?php echo $src_image_category ?>"
                          data-src="<?php echo $src_image_category ?>"
                        />
                      </div>
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <header class="post-header">
                          <div class="post-category">
                            <a
                              href="#"
                              rel="tag"
                              ><?php echo get_the_category_list(', '); ?></a
                            >
                          </div>
                          <h1 class="entry-title">
                            <?php the_title() ?>
                          </h1>
                          <div class="post-meta">
                            <span class="post-author vcard author" itemprop="author">
                              <a
                                href="https://ahrefs.com/blog/author/bill-widmer/"
                                title="Posts by <?php the_author() ?>"
                                rel="author"
                              >
                                <span class="fn"><?php the_author() ?></span>
                          
                              </a>
                            </span>
                            <span
                              class="post-date published updated"
                              itemprop="dateModified"
                              >Updated: <?php the_time('F j, Y'); ?></span
                            >
                          </div>
                        </header>
                      </div>
                    </div>
                  </div>
                </div>
        
              <?php
        }
        ?>

          
          <div class="post-container">
            <div class="reading-progress">
              <div style="width: 4.50749%"></div>
            </div>
            <div class="container top-inner">
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="post-content">
                    <div>
                      <div class="author-desktop">
                        <div id="author-block">
                          <div class="author-meta">
                            <div class="author-avatar">
                              <noscript
                                ><img
                                  src="https://ahrefs.com/blog/wp-content/uploads/2022/07/bill-widmer-425x425.jpg"
                                  width="85"
                                  height="85"
                                  alt="<?php the_author() ?>"
                                  class="avatar avatar-85 wp-user-avatar wp-user-avatar-85 alignnone photo" /></noscript
                              ><img
                                src="https://ahrefs.com/blog/wp-content/uploads/2022/07/bill-widmer-425x425.jpg"
                                data-src="https://ahrefs.com/blog/wp-content/uploads/2022/07/bill-widmer-425x425.jpg"
                                width="85"
                                height="85"
                                alt="Bill Widmer"
                                class="avatar avatar-85 wp-user-avatar wp-user-avatar-85 alignnone photo ls-is-cached lazyloaded"
                              />
                            </div>
                            <div class="author-name">
                              <a
                                href="<?php ?>"
                                title="Posts by <?php the_author() ?>"
                                rel="author"
                                ><?php the_author() ?></a
                              >
                            </div>
                            <div class="author-desc">
                            <?php the_author_meta('description') ?>
                            </div>
                            <div class="author-social">
                              <a
                                class="author-link"
                                href="#"
                                rel="noopener"
                                target="_blank"
                                aria-label="Site"
                                ><span
                                  class="glyphicon glyphicon-home"
                                ></span></a
                              ><a
                                href="https://www.linkedin.com/in/billwidmer"
                                target="_blank"
                                rel="noopener"
                                aria-label="LinkedIn"
                                ><i class="fa fa-linkedin"></i
                              ></a>
                            </div>
                          </div>
                        </div>
                        <div id="nav-art-stats"></div>
                        <div
                          class="post-navigation2 stick"
                          style="top: 0px; position: fixed"
                        >
                          <div class="share-post-top-bottom">
                            <h6>Share this article</h6>
                            <div
                              class="twitter sharrre sharrre-twitter-155424"
                              data-url="https://ahrefs.com/blog/best-wordpress-plugins/"
                              data-text="The 29 Best WordPress Plugins (Organized by Category)"
                              data-title="Tweet"
                            >
                              <div class="box">
                                <div class="share">
                                  <i class="fa fa-twitter"></i>
                                </div>
                              </div>
                            </div>
                            <div
                              class="facebook sharrre sharrre-facebook-155424"
                              data-url="https://ahrefs.com/blog/best-wordpress-plugins/"
                              data-text="The 29 Best WordPress Plugins (Organized by Category)"
                              data-title="Like"
                            >
                              <div class="box">
                                <div class="share">
                                  <i class="fa fa-facebook"></i>
                                </div>
                              </div>
                            </div>
                            <div
                              class="linkedin sharrre sharrre-linkedin-155424"
                              data-url="https://ahrefs.com/blog/best-wordpress-plugins/"
                              data-text="The 29 Best WordPress Plugins (Organized by Category)"
                              data-title="Share"
                            >
                              <div class="box">
                                <div class="share">
                                  <i class="fa fa-linkedin"></i>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div
                            id="fright"
                            class="share-post-top-bottom subscr-fright"
                          >
                            <div class="subscr-fright-bg-img"></div>
                            <h6>Get the week's best marketing content</h6>
                            <form class="mc4wp-form" onsubmit="return false">
                              <input type="hidden" name="emailFoot" value="" />
                              <div class=".mc4wp-form-fields">
                                <div class="form-group">
                                  <label class="sr-only"
                                    ><span class="screen-reader-text"
                                      >Email Subscription</span
                                    ></label
                                  >
                                  <input
                                    type="email"
                                    id="sMailFooter"
                                    placeholder="Enter your email"
                                    aria-label="Enter your email"
                                    required=""
                                  />
                                  <div class="bg-submit">
                                    <a
                                      id="sSubscrBtnRigth"
                                      class="btn-primary btn-more"
                                      href="/"
                                      >Subscribe</a
                                    >
                                  </div>
                                  <div
                                    class="mc4wp-response mc4wp-alert mc4wp-error"
                                  >
                                    <p
                                      id="subscrResponse"
                                      style="display: none"
                                    ></p>
                                  </div>
                                </div>
                              </div>
                              <label style="display: none !important"
                                >Leave this field empty if you're human:
                                <input
                                  type="text"
                                  name="_mc4wp_honeypot"
                                  value=""
                                  tabindex="-1"
                                  autocomplete="off"
                              /></label>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div id="nav-anchor"></div>

                    <div class="post-navigation-left" style="display:none !important">
                      <div>
                        <!-- <div class="nav-title" style="display: block">
                          Contents
                        </div> -->
                            
                        <!-- <ul>
                          <li class="active">
                            <a
                              href="#website-design"
                              ></a
                            >
                          </li>
                       
                        </ul> -->
                       
                     
                      </div>
                    </div>

                    <div class="menu-left">
                      <div>
                          <div class="menu-title" style="display: block">
                          Contents
                        </div>
                            <?php
                             my_post_sidebar()
                             ?>  
                      </div>
                    </div>

                  
                    <span
                      ><div class="intro-txt">
                        <?php the_excerpt() ?>
                     
                      </div>
                    
                      <!-- <div class="intro-tok toc-closed" id="intro_tok" style="">
                        <div class="intro-title">Contents</div>
                        <ul>
                          <li>
                            <a
                              title="Best WordPress plugins for website design"
                              href="#website-design"
                              >Best WordPress plugins for website design</a
                            >
                          </li>
                          <li>
                            <a
                              title="Best WordPress plugins for website management &amp; security"
                              href="#management-security"
                              >Best WordPress plugins for website management
                              &amp; security</a
                            >
                          </li>
                          <li>
                            <a
                              title="Best WordPress plugins for site speed optimization"
                              href="#site-speed-optimization"
                              >Best WordPress plugins for site speed
                              optimization</a
                            >
                          </li>
                          <li>
                            <a
                              title="Best WordPress plugins for marketing section: marketing"
                              href="#marketing"
                              >Best WordPress plugins for marketing section:
                              marketing</a
                            >
                          </li>
                          <li>
                            <a
                              title="Best WordPress plugins for SEO section: seo"
                              href="#seo"
                              >Best WordPress plugins for SEO section: seo</a
                            >
                          </li>
                          <li>
                            <a
                              title="Best WordPress plugins for affiliate marketing"
                              href="#affiliate-marketing"
                              >Best WordPress plugins for affiliate marketing</a
                            >
                          </li>
                        </ul>
                        <a href="#" class="expand-dots"
                          ><span></span><span></span><span></span
                        ></a>
                      </div> -->

                      <?php
                      while (have_posts()) {
                        the_post();
                        ?>
                          <div
                            class="post-nav-link clearfix 2>"
                            id="website-design"
                          >
                            <!-- <a
                          class="subhead-anchor"
                          data-tip="tooltip__copielink"
                          rel="#website-design"
                          ><svg
                            width="19"
                            height="19"
                            viewBox="0 0 14 14"
                            style=""
                          >
                            <g fill="none" fill-rule="evenodd">
                              <path d="M0 0h14v14H0z"></path>
                              <path
                                d="M7.45 9.887l-1.62 1.621c-.92.92-2.418.92-3.338 0a2.364 2.364 0 0 1 0-3.339l1.62-1.62-1.273-1.272-1.62 1.62a4.161 4.161 0 1 0 5.885 5.884l1.62-1.62L7.45 9.886zM5.527 5.135L7.17 3.492c.92-.92 2.418-.92 3.339 0 .92.92.92 2.418 0 3.339L8.866 8.473l1.272 1.273 1.644-1.643A4.161 4.161 0 1 0 5.897 2.22L4.254 3.863l1.272 1.272zm-.66 3.998a.749.749 0 0 1 0-1.06l2.208-2.206a.749.749 0 1 1 1.06 1.06L5.928 9.133a.75.75 0 0 1-1.061 0z"
                                style=""
                              ></path>
                            </g></svg
                        ></a> -->

                       
                            <div
                              class="link-text"
                              data-anchor="Best WordPress plugins for website design"
                              data-section="website-design"
                            >
                              <?php the_content() ?>
                            </div>
                          </div>
                    
                          <?php
                      }
                      ?>
                 
                      <!-- <h3>Elementor</h3>
                      <figure class="wp-block-image size-full">
                        <noscript
                          ><img
                            decoding="async"
                            width="1999"
                            height="1076"
                            src="https://ahrefs.com/blog/wp-content/uploads/2023/03/image4-9-1.jpg"
                            alt="Elementor drag-and-drop page builder example"
                            class="wp-image-155434"
                            srcset="
                              https://ahrefs.com/blog/wp-content/uploads/2023/03/image4-9-1.jpg          1999w,
                              https://ahrefs.com/blog/wp-content/uploads/2023/03/image4-9-1-680x366.jpg   680w,
                              https://ahrefs.com/blog/wp-content/uploads/2023/03/image4-9-1-768x413.jpg   768w,
                              https://ahrefs.com/blog/wp-content/uploads/2023/03/image4-9-1-1536x827.jpg 1536w
                            "
                            sizes="(max-width: 1999px) 100vw, 1999px" /></noscript
                        ><img
                          decoding="async"
                          width="1999"
                          height="1076"
                          src="https://ahrefs.com/blog/wp-content/uploads/2023/03/image4-9-1.jpg"
                          data-src="https://ahrefs.com/blog/wp-content/uploads/2023/03/image4-9-1.jpg"
                          alt="Elementor drag-and-drop page builder example"
                          class="wp-image-155434 img-fancybox ls-is-cached lazyloaded"
                          data-srcset="https://ahrefs.com/blog/wp-content/uploads/2023/03/image4-9-1.jpg 1999w, https://ahrefs.com/blog/wp-content/uploads/2023/03/image4-9-1-680x366.jpg 680w, https://ahrefs.com/blog/wp-content/uploads/2023/03/image4-9-1-768x413.jpg 768w, https://ahrefs.com/blog/wp-content/uploads/2023/03/image4-9-1-1536x827.jpg 1536w"
                          data-sizes="(max-width: 1999px) 100vw, 1999px"
                          data-fancybox="image-1"
                          data-caption="Elementor drag-and-drop page builder example"
                          sizes="(max-width: 1999px) 100vw, 1999px"
                          srcset="
                            https://ahrefs.com/blog/wp-content/uploads/2023/03/image4-9-1.jpg          1999w,
                            https://ahrefs.com/blog/wp-content/uploads/2023/03/image4-9-1-680x366.jpg   680w,
                            https://ahrefs.com/blog/wp-content/uploads/2023/03/image4-9-1-768x413.jpg   768w,
                            https://ahrefs.com/blog/wp-content/uploads/2023/03/image4-9-1-1536x827.jpg 1536w
                          "
                        />
                      </figure>
                      <p><strong>Cost: </strong>Free ($59/year for premium)</p>
                      <p><strong>Useful for:</strong></p>
                      <ul>
                        <li>
                          Building a website theme with drag-and-drop
                          editing&nbsp;
                        </li>
                        <li>Easily creating custom landing pages</li>
                      </ul>
                      <p>
                        <a href="https://elementor.com/">Elementor</a> is
                        awesome for anyone who wants a custom-looking website
                        without learning how to code or being limited to a
                        pre-built theme. But it also has pre-built themes you
                        can customize to streamline the process.
                      </p>
                      <p>
                        Be aware that using any kind of drag-and-drop editor
                        like this will slow down your&nbsp;site.
                      </p>
                      <h3>WooCommerce</h3>
                      <figure class="wp-block-image size-full">
                        <noscript
                          ><img
                            decoding="async"
                            width="1999"
                            height="1100"
                            src="https://ahrefs.com/blog/wp-content/uploads/2023/03/image2-11.png"
                            alt="WooCommerce product display blocks"
                            class="wp-image-155437"
                            srcset="
                              https://ahrefs.com/blog/wp-content/uploads/2023/03/image2-11.png          1999w,
                              https://ahrefs.com/blog/wp-content/uploads/2023/03/image2-11-680x374.png   680w,
                              https://ahrefs.com/blog/wp-content/uploads/2023/03/image2-11-768x423.png   768w,
                              https://ahrefs.com/blog/wp-content/uploads/2023/03/image2-11-1536x845.png 1536w
                            "
                            sizes="(max-width: 1999px) 100vw, 1999px" /></noscript
                        ><img
                          decoding="async"
                          width="1999"
                          height="1100"
                          src="https://ahrefs.com/blog/wp-content/uploads/2023/03/image2-11.png"
                          data-src="https://ahrefs.com/blog/wp-content/uploads/2023/03/image2-11.png"
                          alt="WooCommerce product display blocks"
                          class="wp-image-155437 img-fancybox ls-is-cached lazyloaded"
                          data-srcset="https://ahrefs.com/blog/wp-content/uploads/2023/03/image2-11.png 1999w, https://ahrefs.com/blog/wp-content/uploads/2023/03/image2-11-680x374.png 680w, https://ahrefs.com/blog/wp-content/uploads/2023/03/image2-11-768x423.png 768w, https://ahrefs.com/blog/wp-content/uploads/2023/03/image2-11-1536x845.png 1536w"
                          data-sizes="(max-width: 1999px) 100vw, 1999px"
                          data-fancybox="image-2"
                          data-caption="WooCommerce product display blocks"
                          sizes="(max-width: 1999px) 100vw, 1999px"
                          srcset="
                            https://ahrefs.com/blog/wp-content/uploads/2023/03/image2-11.png          1999w,
                            https://ahrefs.com/blog/wp-content/uploads/2023/03/image2-11-680x374.png   680w,
                            https://ahrefs.com/blog/wp-content/uploads/2023/03/image2-11-768x423.png   768w,
                            https://ahrefs.com/blog/wp-content/uploads/2023/03/image2-11-1536x845.png 1536w
                          "
                        />
                      </figure>
                      <p><strong>Cost: </strong>Free</p>
                      <p>
                        <strong>Useful for: </strong>Turning your WordPress
                        website into an e-commerce store
                      </p>
                      <p>
                        <a href="https://woocommerce.com/">WooCommerce</a> is
                        the best plugin to
                        <a
                          href="https://ahrefs.com/blog/how-to-start-ecommerce-business/"
                          >start an e-commerce business</a
                        >
                        on your WordPress website. It allows you to easily
                        create product pages and collections.
                      </p>
                      <p>
                        You can combine it with
                        <a
                          href="https://woocommerce.com/products/woocommerce-payments/"
                          >WooCommerce Payments</a
                        >
                        to easily collect customer payment information.
                      </p>
                      <h3>Advanced Custom Fields Pro</h3>
                      <figure class="wp-block-image size-full">
                        <noscript
                          ><img
                            decoding="async"
                            width="1460"
                            height="1000"
                            src="https://ahrefs.com/blog/wp-content/uploads/2023/03/image14-5.jpg"
                            alt="Advanced Custom Fields Pro WordPress UI"
                            class="wp-image-155439"
                            srcset="
                              https://ahrefs.com/blog/wp-content/uploads/2023/03/image14-5.jpg         1460w,
                              https://ahrefs.com/blog/wp-content/uploads/2023/03/image14-5-621x425.jpg  621w,
                              https://ahrefs.com/blog/wp-content/uploads/2023/03/image14-5-768x526.jpg  768w
                            "
                            sizes="(max-width: 1460px) 100vw, 1460px" /></noscript
                        ><img
                          decoding="async"
                          width="1460"
                          height="1000"
                          src="https://ahrefs.com/blog/wp-content/uploads/2023/03/image14-5.jpg"
                          data-src="https://ahrefs.com/blog/wp-content/uploads/2023/03/image14-5.jpg"
                          alt="Advanced Custom Fields Pro WordPress UI"
                          class="wp-image-155439 img-fancybox ls-is-cached lazyloaded"
                          data-srcset="https://ahrefs.com/blog/wp-content/uploads/2023/03/image14-5.jpg 1460w, https://ahrefs.com/blog/wp-content/uploads/2023/03/image14-5-621x425.jpg 621w, https://ahrefs.com/blog/wp-content/uploads/2023/03/image14-5-768x526.jpg 768w"
                          data-sizes="(max-width: 1460px) 100vw, 1460px"
                          data-fancybox="image-3"
                          data-caption="Advanced Custom Fields Pro WordPress UI"
                          sizes="(max-width: 1460px) 100vw, 1460px"
                          srcset="
                            https://ahrefs.com/blog/wp-content/uploads/2023/03/image14-5.jpg         1460w,
                            https://ahrefs.com/blog/wp-content/uploads/2023/03/image14-5-621x425.jpg  621w,
                            https://ahrefs.com/blog/wp-content/uploads/2023/03/image14-5-768x526.jpg  768w
                          "
                        />
                      </figure>
                      <p><strong>Cost: </strong>$49/year for a single site</p>
                      <p>
                        <strong>Useful for: </strong>Creating custom widgets to
                        use anywhere on your&nbsp;site&nbsp;
                      </p>
                      <p>
                        If you know how to code,
                        <a href="https://www.advancedcustomfields.com/pro/"
                          >Advanced Custom Fields Pro</a
                        >
                        allows you to take full control over your WordPress edit
                        screens and custom field&nbsp;data.
                      </p>
                      <h3>WPCode</h3>
                      <figure class="wp-block-image size-full">
                        <noscript
                          ><img
                            decoding="async"
                            width="1999"
                            height="972"
                            src="https://ahrefs.com/blog/wp-content/uploads/2023/03/image8-11.png"
                            alt="WPCode user interface explanation"
                            class="wp-image-155441"
                            srcset="
                              https://ahrefs.com/blog/wp-content/uploads/2023/03/image8-11.png          1999w,
                              https://ahrefs.com/blog/wp-content/uploads/2023/03/image8-11-680x331.png   680w,
                              https://ahrefs.com/blog/wp-content/uploads/2023/03/image8-11-768x373.png   768w,
                              https://ahrefs.com/blog/wp-content/uploads/2023/03/image8-11-1536x747.png 1536w
                            "
                            sizes="(max-width: 1999px) 100vw, 1999px" /></noscript
                        ><img
                          decoding="async"
                          width="1999"
                          height="972"
                          src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%201999%20972%22%3E%3C/svg%3E"
                          data-src="https://ahrefs.com/blog/wp-content/uploads/2023/03/image8-11.png"
                          alt="WPCode user interface explanation"
                          class="lazyload wp-image-155441 img-fancybox"
                          data-srcset="https://ahrefs.com/blog/wp-content/uploads/2023/03/image8-11.png 1999w, https://ahrefs.com/blog/wp-content/uploads/2023/03/image8-11-680x331.png 680w, https://ahrefs.com/blog/wp-content/uploads/2023/03/image8-11-768x373.png 768w, https://ahrefs.com/blog/wp-content/uploads/2023/03/image8-11-1536x747.png 1536w"
                          data-sizes="(max-width: 1999px) 100vw, 1999px"
                          data-fancybox="image-4"
                          data-caption="WPCode user interface explanation"
                        />
                      </figure>
                      <p>
                        <strong>Cost: </strong>Free ($49–$399/year for premium)
                      </p>
                      <p>
                        <strong>Useful for: </strong>Inserting code into your
                        headers and footers
                      </p>
                      <p>
                        Formerly called Insert Headers and Footers,
                        <a href="https://wpcode.com/">WPCode</a> is the easiest
                        way for non-developers to add code snippets anywhere on
                        their website.&nbsp;
                      </p>
                      <p>
                        For example, you may have to add a code snippet to your
                        website’s header to connect it with
                        <a
                          href="https://ahrefs.com/blog/how-to-use-google-analytics/"
                          >Google Analytics</a
                        >
                        or to add the
                        <a
                          href="https://www.facebook.com/business/tools/meta-pixel"
                          >Facebook Remarketing Pixel</a
                        >.
                      </p>
                      <h3>WPForms</h3>
                      <figure class="wp-block-image size-full">
                        <noscript
                          ><img
                            decoding="async"
                            width="1020"
                            height="652"
                            src="https://ahrefs.com/blog/wp-content/uploads/2023/03/image1-8.png"
                            alt="WPForms form editor UI"
                            class="wp-image-155443"
                            srcset="
                              https://ahrefs.com/blog/wp-content/uploads/2023/03/image1-8.png         1020w,
                              https://ahrefs.com/blog/wp-content/uploads/2023/03/image1-8-665x425.png  665w,
                              https://ahrefs.com/blog/wp-content/uploads/2023/03/image1-8-260x166.png  260w,
                              https://ahrefs.com/blog/wp-content/uploads/2023/03/image1-8-768x491.png  768w
                            "
                            sizes="(max-width: 1020px) 100vw, 1020px" /></noscript
                        ><img
                          decoding="async"
                          width="1020"
                          height="652"
                          src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%201020%20652%22%3E%3C/svg%3E"
                          data-src="https://ahrefs.com/blog/wp-content/uploads/2023/03/image1-8.png"
                          alt="WPForms form editor UI"
                          class="lazyload wp-image-155443 img-fancybox"
                          data-srcset="https://ahrefs.com/blog/wp-content/uploads/2023/03/image1-8.png 1020w, https://ahrefs.com/blog/wp-content/uploads/2023/03/image1-8-665x425.png 665w, https://ahrefs.com/blog/wp-content/uploads/2023/03/image1-8-260x166.png 260w, https://ahrefs.com/blog/wp-content/uploads/2023/03/image1-8-768x491.png 768w"
                          data-sizes="(max-width: 1020px) 100vw, 1020px"
                          data-fancybox="image-5"
                          data-caption="WPForms form editor UI"
                        />
                      </figure>
                      <p><strong>Cost: </strong>$49.50/year</p>
                      <p><strong>Useful for:</strong></p>
                      <ul>
                        <li>
                          Creating forms for contact pages, newsletter sign-ups,
                          and&nbsp;more
                        </li>
                        <li>Building surveys for your site visitors</li>
                      </ul>
                      <p>
                        <a href="https://wpforms.com/">WPForms</a> is a
                        drag-and-drop WordPress form editor. It’s super
                        intuitive and easy to&nbsp;use.
                      </p>
                      <h3>TranslatePress</h3>
                      <figure class="wp-block-image size-full">
                        <noscript
                          ><img
                            decoding="async"
                            width="1200"
                            height="606"
                            src="https://ahrefs.com/blog/wp-content/uploads/2023/03/image9-11.jpg"
                            alt="TranslatePress language translation plugin"
                            class="wp-image-155444"
                            srcset="
                              https://ahrefs.com/blog/wp-content/uploads/2023/03/image9-11.jpg         1200w,
                              https://ahrefs.com/blog/wp-content/uploads/2023/03/image9-11-680x343.jpg  680w,
                              https://ahrefs.com/blog/wp-content/uploads/2023/03/image9-11-768x388.jpg  768w
                            "
                            sizes="(max-width: 1200px) 100vw, 1200px" /></noscript
                        ><img
                          decoding="async"
                          width="1200"
                          height="606"
                          src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%201200%20606%22%3E%3C/svg%3E"
                          data-src="https://ahrefs.com/blog/wp-content/uploads/2023/03/image9-11.jpg"
                          alt="TranslatePress language translation plugin"
                          class="lazyload wp-image-155444 img-fancybox"
                          data-srcset="https://ahrefs.com/blog/wp-content/uploads/2023/03/image9-11.jpg 1200w, https://ahrefs.com/blog/wp-content/uploads/2023/03/image9-11-680x343.jpg 680w, https://ahrefs.com/blog/wp-content/uploads/2023/03/image9-11-768x388.jpg 768w"
                          data-sizes="(max-width: 1200px) 100vw, 1200px"
                          data-fancybox="image-6"
                          data-caption="TranslatePress language translation plugin"
                        />
                      </figure>
                      <p><strong>Cost: </strong>€89/year (~USD&nbsp;95)</p>
                      <p>
                        <strong>Useful for: </strong>Translating your website
                        into other languages
                      </p>
                      <p>
                        <a href="https://translatepress.com/">TranslatePress</a>
                        makes it easy to create translated versions of your
                        website in other languages. It also automatically adds
                        the
                        <a href="https://ahrefs.com/blog/hreflang-tags/"
                          >hreflang tags</a
                        >
                        for each language, so it’s also good for&nbsp;SEO.&nbsp;
                      </p>
                      <h3>Formilla</h3>
                      <figure class="wp-block-image size-full">
                        <noscript
                          ><img
                            decoding="async"
                            width="1178"
                            height="1226"
                            src="https://ahrefs.com/blog/wp-content/uploads/2023/03/image10-7.jpg"
                            alt="Formilla live chat WordPress plugin"
                            class="wp-image-155445"
                            srcset="
                              https://ahrefs.com/blog/wp-content/uploads/2023/03/image10-7.jpg         1178w,
                              https://ahrefs.com/blog/wp-content/uploads/2023/03/image10-7-408x425.jpg  408w,
                              https://ahrefs.com/blog/wp-content/uploads/2023/03/image10-7-768x799.jpg  768w
                            "
                            sizes="(max-width: 1178px) 100vw, 1178px" /></noscript
                        ><img
                          decoding="async"
                          width="1178"
                          height="1226"
                          src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%201178%201226%22%3E%3C/svg%3E"
                          data-src="https://ahrefs.com/blog/wp-content/uploads/2023/03/image10-7.jpg"
                          alt="Formilla live chat WordPress plugin"
                          class="lazyload wp-image-155445 img-fancybox"
                          data-srcset="https://ahrefs.com/blog/wp-content/uploads/2023/03/image10-7.jpg 1178w, https://ahrefs.com/blog/wp-content/uploads/2023/03/image10-7-408x425.jpg 408w, https://ahrefs.com/blog/wp-content/uploads/2023/03/image10-7-768x799.jpg 768w"
                          data-sizes="(max-width: 1178px) 100vw, 1178px"
                          data-fancybox="image-7"
                          data-caption="Formilla live chat WordPress plugin"
                        />
                      </figure>
                      <p>
                        <strong>Cost: </strong>Free (varying premium plans
                        starting at $19.99/month)
                      </p>
                      <p>
                        <strong>Useful for: </strong>Adding a live chat feature
                        to your&nbsp;site
                      </p>
                      <p>
                        <a href="https://www.formilla.com/">Formilla</a> is a
                        live chat plugin for WordPress. You can offer live chat
                        support or use it to answer visitors’ questions
                        automatically using a bot—although that may
                        annoy&nbsp;them.
                      </p> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="tooltip__copielink" class="hide">
            <p class="text-xs-left">Copy link</p>
          </div>
          <footer class="post-footer">
            <div class="container">
              <div class="post-content">
                <div class="article-stats-footer article-stats-footer-grid">
                  <div class="share-post-bottom article-stats-footer-grid-item">
                    <div><h6 style="margin-top: 11px">Share</h6></div>
                    <div>
                      <div
                        class="twitter sharrre sharrre-twitter-155424"
                        data-url="https://ahrefs.com/blog/best-wordpress-plugins/"
                        data-text="The 29 Best WordPress Plugins (Organized by Category)"
                        data-title="Tweet"
                      >
                        <div class="box">
                          <div class="share"><i class="fa fa-twitter"></i></div>
                        </div>
                      </div>
                      <div
                        class="facebook sharrre sharrre-facebook-155424"
                        data-url="https://ahrefs.com/blog/best-wordpress-plugins/"
                        data-text="The 29 Best WordPress Plugins (Organized by Category)"
                        data-title="Like"
                      >
                        <div class="box">
                          <div class="share">
                            <i class="fa fa-facebook"></i>
                          </div>
                        </div>
                      </div>
                      <div
                        class="linkedin sharrre sharrre-linkedin-155424"
                        data-url="https://ahrefs.com/blog/best-wordpress-plugins/"
                        data-text="The 29 Best WordPress Plugins (Organized by Category)"
                        data-title="Share"
                      >
                        <div class="box">
                          <div class="share">
                            <i class="fa fa-linkedin"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div
                    id="bsubscr"
                    class="share-post-top-bottom subscr-fright"
                    style="padding-bottom: 0px"
                  >
                    <div class="subscr-fright-bg-img"></div>
                    <h6>Get the week's best marketing content</h6>
                    <form class="mc4wp-form" onsubmit="return false">
                      <input type="hidden" name="emailFoot" value="" />
                      <div class=".mc4wp-form-fields">
                        <div class="form-group">
                          <label class="sr-only"
                            ><span class="screen-reader-text"
                              >Email Subscription</span
                            ></label
                          >
                          <input
                            type="email"
                            id="sMailBFooter"
                            placeholder="Enter your email"
                            aria-label="Enter your email"
                            required=""
                          />
                          <div class="bg-submit">
                            <a
                              id="sSubscrBtnBottom"
                              class="btn-primary btn-more"
                              href="/"
                              >Subscribe</a
                            >
                          </div>
                          <div class="mc4wp-response mc4wp-alert mc4wp-error">
                            <p id="subscrBResponse" style="display: none"></p>
                          </div>
                        </div>
                      </div>
                      <label style="display: none !important"
                        >Leave this field empty if you're human:
                        <input
                          type="text"
                          name="_mc4wp_honeypot"
                          value=""
                          tabindex="-1"
                          autocomplete="off"
                      /></label>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </footer>
          <div class="container" style="padding-top: 0px">
            <div class="post-content"></div>
          </div>
          <div class="container related-posts">
            <div class="post-content">
              <h3>Keep Learning</h3>
              <div class="tab-content">
                <div class="tab-pane fade active in with-image count-e-5">
                  <div id="post-29670">
                    <header class="post-header">
                      <a
                        href="https://ahrefs.com/blog/best-seo-plugins-for-wordpress/"
                        title="Permanent Link to 15 Best SEO Plugins for WordPress (Tried &amp; Tested)"
                        ><div
                          class="post-thumbnail"
                          style="background-color: #054ada"
                        >
                          <noscript
                            ><img
                              width="400"
                              height="200"
                              src="https://ahrefs.com/blog/wp-content/uploads/2019/08/blog-best-seo-plugins-for-wordpress-400x200.png"
                              class="attachment-header-small-thumbnail size-header-small-thumbnail"
                              alt=""
                              decoding="async"
                              srcset="
                                https://ahrefs.com/blog/wp-content/uploads/2019/08/blog-best-seo-plugins-for-wordpress-400x200.png 400w,
                                https://ahrefs.com/blog/wp-content/uploads/2019/08/blog-best-seo-plugins-for-wordpress-680x340.png 680w,
                                https://ahrefs.com/blog/wp-content/uploads/2019/08/blog-best-seo-plugins-for-wordpress-768x384.png 768w,
                                https://ahrefs.com/blog/wp-content/uploads/2019/08/blog-best-seo-plugins-for-wordpress.png         800w
                              "
                              sizes="(max-width: 400px) 100vw, 400px" /></noscript
                          ><img
                            width="400"
                            height="200"
                            src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20400%20200%22%3E%3C/svg%3E"
                            data-src="https://ahrefs.com/blog/wp-content/uploads/2019/08/blog-best-seo-plugins-for-wordpress-400x200.png"
                            class="lazyload attachment-header-small-thumbnail size-header-small-thumbnail"
                            alt=""
                            decoding="async"
                            data-srcset="https://ahrefs.com/blog/wp-content/uploads/2019/08/blog-best-seo-plugins-for-wordpress-400x200.png 400w, https://ahrefs.com/blog/wp-content/uploads/2019/08/blog-best-seo-plugins-for-wordpress-680x340.png 680w, https://ahrefs.com/blog/wp-content/uploads/2019/08/blog-best-seo-plugins-for-wordpress-768x384.png 768w, https://ahrefs.com/blog/wp-content/uploads/2019/08/blog-best-seo-plugins-for-wordpress.png 800w"
                            data-sizes="(max-width: 400px) 100vw, 400px"
                          />
                        </div>
                        <h3>
                          15 Best SEO Plugins for WordPress (Tried &amp; Tested)
                        </h3>
                      </a>
                      <div class="post-meta">
                        <span>
                          Looking to rank your WordPress website higher in
                          Google? Start with these 15 SEO plugins.
                        </span>
                      </div>
                    </header>
                  </div>
                  <div id="post-19158">
                    <header class="post-header">
                      <h3>
                        <a
                          href="https://ahrefs.com/blog/seo-slack-communities/"
                          title="Permanent Link to 11 Slack Communities for SEOs and Digital Marketers (That You Should Join&nbsp;Today)"
                          >11 Slack Communities for SEOs and Digital Marketers
                          (That You Should Join&nbsp;Today)</a
                        >
                      </h3>
                      <div class="post-meta">
                        <span>
                          Discover the coolest marketing and SEO-related Slack
                          communities to join today.
                        </span>
                      </div>
                    </header>
                  </div>
                  <div id="post-137418">
                    <header class="post-header">
                      <h3>
                        <a
                          href="https://ahrefs.com/blog/wordpress-seo/"
                          title="Permanent Link to WordPress SEO: 20 Tips and Best Practices"
                          >WordPress SEO: 20 Tips and Best Practices</a
                        >
                      </h3>
                      <div class="post-meta">
                        <span>
                          WordPress&nbsp;makes it easy to use&nbsp;SEO&nbsp;best
                          practices. Improve your site's SEO with the tips in
                          this guide.
                        </span>
                      </div>
                    </header>
                  </div>
                  <div id="post-152431">
                    <header class="post-header">
                      <h3>
                        <a
                          href="https://ahrefs.com/blog/how-to-use-wordpress/"
                          title="Permanent Link to How to Use WordPress in 9 Simple Steps (Beginner’s Guide)"
                          >How to Use WordPress in 9 Simple Steps (Beginner’s
                          Guide)</a
                        >
                      </h3>
                      <div class="post-meta">
                        <span>
                          What a beginner needs to know about building a site on
                          WordPress summarized into nine easy-to-follow steps.
                        </span>
                      </div>
                    </header>
                  </div>
                  <div id="post-36831">
                    <header class="post-header">
                      <h3>
                        <a
                          href="https://ahrefs.com/blog/amazon-affiliate-marketing/"
                          title="Permanent Link to How to Build a Successful Amazon Affiliate Site (Step by&nbsp;Step)"
                          >How to Build a Successful Amazon Affiliate Site (Step
                          by&nbsp;Step)</a
                        >
                      </h3>
                      <div class="post-meta">
                        <span>
                          Learn how to build a successful Amazon affiliate site
                          and make some extra money on the side.
                        </span>
                      </div>
                    </header>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="section section-show-more show-more-related">
            <div class="row">
              <div>
                <a
                  class="btn-primary btn-more"
                  href="https://ahrefs.com/blog/category/marketing/"
                  >Show more posts</a
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer id="footer" class="main-footer">
      <div class="footer-wrap">
        <div class="footer-column-1">
          <div>
            <form
              method="get"
              id="searchform-main"
              action="https://ahrefs.com/blog"
            >
              <input
                type="text"
                class="searching"
                value=""
                name="s"
                placeholder="Search the blog..."
                aria-label="Search"
              /><button type="submit" class="btn-submit search-icon">
                Search
              </button>
            </form>
            <div class="languages-picker">
              <div class="dropdown">
                <button
                  class="languages-picker-toggle"
                  id="langaugePicker"
                  type="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  English <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="langaugePicker">
                  <li><a href="https://ahrefs.com/blog/es/">Español</a></li>
                  <li><a href="https://ahrefs.com/blog/de/">Deutsch</a></li>
                  <li><a href="https://ahrefs.com/blog/ru/">Русский</a></li>
                  <li><a href="https://ahrefs.com/blog/zh/">中文</a></li>
                  <li><a href="https://ahrefs.com/blog/it/">Italiano</a></li>
                  <li><a href="https://ahrefs.com/blog/fr/">Français</a></li>
                  <li><a href="https://ahrefs.com/blog/pt/">Português</a></li>
                </ul>
              </div>
            </div>
            <div class="languages-picker-mobile">
              <select class="lang-select">
                <option
                  value="en"
                  data-url="https://ahrefs.com/blog/"
                  selected="selected"
                >
                  English
                </option>
                <option value="es" data-url="https://ahrefs.com/blog/es/">
                  Español
                </option>
                <option value="de" data-url="https://ahrefs.com/blog/de/">
                  Deutsch
                </option>
                <option value="ru" data-url="https://ahrefs.com/blog/ru/">
                  Русский
                </option>
                <option value="zh" data-url="https://ahrefs.com/blog/zh/">
                  中文
                </option>
                <option value="it" data-url="https://ahrefs.com/blog/it/">
                  Italiano
                </option>
                <option value="fr" data-url="https://ahrefs.com/blog/fr/">
                  Français
                </option>
                <option value="pt" data-url="https://ahrefs.com/blog/pt/">
                  Português
                </option>
              </select>
              <span class="select-button"></span>
            </div>
            <div class="footer-copyright copyright">
              © 2023 <a href="/">Ahrefs Pte Ltd.</a>
            </div>
          </div>
        </div>
        <div class="footer-column-2">
          <div>
            <div class="footer-block-header">Pick a topic</div>
            <div class="footer-block-columns">
              <div class="links-block">
                <div class="links-column-header">SEO</div>
                <ul class="no-marker">
                  <li class="">
                    <a href="https://ahrefs.com/blog/category/general-seo/"
                      >General SEO</a
                    >
                  </li>
                  <li class="">
                    <a href="https://ahrefs.com/blog/category/keyword-research/"
                      >Keyword Research</a
                    >
                  </li>
                  <li class="">
                    <a href="https://ahrefs.com/blog/category/on-page-seo/"
                      >On-Page SEO</a
                    >
                  </li>
                  <li class="">
                    <a href="https://ahrefs.com/blog/category/link-building/"
                      >Link Building</a
                    >
                  </li>
                  <li class="">
                    <a href="https://ahrefs.com/blog/category/technical-seo/"
                      >Technical SEO</a
                    >
                  </li>
                  <li class="">
                    <a href="https://ahrefs.com/blog/category/local-seo/"
                      >Local SEO</a
                    >
                  </li>
                </ul>
              </div>
              <div class="links-block">
                <div class="links-column-header">Marketing</div>
                <ul class="no-marker">
                  <li class="">
                    <a href="https://ahrefs.com/blog/category/marketing/"
                      >General Marketing</a
                    >
                  </li>
                  <li class="">
                    <a
                      href="https://ahrefs.com/blog/category/content-marketing/"
                      >Content Marketing</a
                    >
                  </li>
                  <li class="">
                    <a
                      href="https://ahrefs.com/blog/category/affiliate-marketing/"
                      >Affiliate Marketing</a
                    >
                  </li>
                  <li class="">
                    <a href="https://ahrefs.com/blog/category/paid-marketing/"
                      >Paid Marketing</a
                    >
                  </li>
                  <li class="">
                    <a href="https://ahrefs.com/blog/category/video-marketing/"
                      >Video Marketing</a
                    >
                  </li>
                </ul>
              </div>
              <div class="links-block">
                <div class="links-column-header">
                  <a href="https://ahrefs.com/blog/category/data-studies/">
                    Data &amp; Studies
                  </a>
                </div>
              </div>
              <div class="links-block">
                <div class="links-column-header">
                  <a href="https://ahrefs.com/blog/category/product-blog/">
                    Product
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-column-3">
          <div>
            <div class="footer-block-header">Ahrefs Tools</div>
            <div class="footer-block-columns">
              <div class="links-block">
                <div class="links-column-header">Core Tools</div>
                <ul class="no-marker">
                  <li>
                    <a href="https://ahrefs.com/site-explorer" target="_blank"
                      >Site Explorer</a
                    >
                  </li>
                  <li>
                    <a
                      href="https://ahrefs.com/keywords-explorer"
                      target="_blank"
                      >Keywords Explorer</a
                    >
                  </li>
                  <li>
                    <a
                      href="https://ahrefs.com/content-explorer"
                      target="_blank"
                      >Content Explorer</a
                    >
                  </li>
                  <li>
                    <a href="https://ahrefs.com/site-audit" target="_blank"
                      >Site Audit</a
                    >
                  </li>
                  <li>
                    <a href="https://ahrefs.com/rank-tracker" target="_blank"
                      >Rank Tracker</a
                    >
                  </li>
                </ul>
              </div>
              <div class="links-block">
                <div class="links-column-header">Free Tools</div>
                <ul class="no-marker">
                  <li>
                    <a
                      href="https://ahrefs.com/backlink-checker"
                      target="_blank"
                      >Backlink Checker</a
                    >
                  </li>
                  <li>
                    <a
                      href="https://ahrefs.com/website-authority-checker"
                      target="_blank"
                      >Website Authority Checker</a
                    >
                  </li>
                  <li>
                    <a
                      href="https://ahrefs.com/keyword-rank-checker"
                      target="_blank"
                      >Keyword Rank Checker</a
                    >
                  </li>
                  <li>
                    <a
                      href="https://ahrefs.com/broken-link-checker"
                      target="_blank"
                      >Broken Link Checker</a
                    >
                  </li>
                  <li>
                    <a href="https://ahrefs.com/serp-checker" target="_blank"
                      >SERP Checker</a
                    >
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <div class="modal-subscribe" style="display: none">
      <header>
        <div class="clearfix">
          <div>
            <a
              href="#"
              id="close_subscribe_modal"
              class="close-modal-button"
              role="button"
            >
              <span class="screen-reader-text">Close</span>
            </a>
          </div>
          <div class="logo">
            <div class="logo-h2">
              &nbsp;<a
                class="ahrefs"
                href="https://ahrefs.com"
                title="SEO Blog by Ahrefs"
              ></a
              ><a
                class="blog"
                href="https://ahrefs.com/blog/"
                title="SEO Blog by Ahrefs"
              ></a>
            </div>
          </div>
        </div>
      </header>
      <div>
        <div class="section section-subscribe">
          <div class="row">
            <div>
              <noscript
                ><img
                  src="https://ahrefs.com/blog/wp-content/themes/Ahrefs-4/images/blocks/subscribe.svg" /></noscript
              ><img
                class="lazyload"
                src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E"
                data-src="https://ahrefs.com/blog/wp-content/themes/Ahrefs-4/images/blocks/subscribe.svg"
              />
            </div>
            <div>
              <form class="subscribe-form" onsubmit="return false">
                <div class="h2">Join the Ahrefs' Digest</div>
                <div class="text">
                  Get the week's best marketing content in your inbox.
                </div>
                <input type="hidden" name="emailFoot" value="" />
                <label class="sr-only"
                  ><span class="screen-reader-text"
                    >Email Subscription</span
                  ></label
                >
                <input
                  type="email"
                  id="sMailFooter"
                  placeholder="Enter your email"
                  aria-label="Enter your email"
                  required=""
                />
                <div
                  class="text text-alert"
                  id="subscrResponse"
                  style="display: none"
                ></div>
                <div class="button-wrap">
                  <a
                    id="subscribe_button"
                    name="sSubscrBtn"
                    class="btn btn-subscribe"
                    href="/"
                    >Subscribe</a
                  >
                </div>
                <label style="display: none !important"
                  >Leave this field empty if you're human:
                  <input
                    type="text"
                    name="_mc4wp_honeypot"
                    value=""
                    tabindex="-1"
                    autocomplete="off"
                /></label>
              </form>
              <div class="subscribe-thanks" style="display: none">
                <div class="h2">Thanks!</div>
                <div class="text">
                  Please check your email inbox and spam folder. We've sent you
                  a link to verify your email.
                </div>
                <div class="email">
                  <noscript
                    ><img
                      src="https://ahrefs.com/blog/wp-content/themes/Ahrefs-4/images/blocks/subscribe-email.svg" /></noscript
                  ><img
                    class="lazyload"
                    src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E"
                    data-src="https://ahrefs.com/blog/wp-content/themes/Ahrefs-4/images/blocks/subscribe-email.svg"
                  />
                </div>
                <div class="button-wrap">
                  <a id="subscribe_gotit" class="btn btn-subscribe" href="#"
                    >Got It</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <noscript
      ><style>
        .lazyload {
          display: none;
        }
      </style></noscript
    >
    <script type="text/javascript">
      var _paq = window._paq || [];
      /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
      _paq.push(["disableCookies"]);
      _paq.push(["trackPageView"]);
      _paq.push(["enableLinkTracking"]);
      (function () {
        var u = "https://analytics.ahrefs.com/";
        _paq.push(["setTrackerUrl", u + "matomo.php"]);
        _paq.push(["setSiteId", "2"]);
        var d = document,
          g = d.createElement("script"),
          s = d.getElementsByTagName("script")[0];
        g.type = "text/javascript";
        g.async = true;
        g.defer = true;
        g.src = u + "matomo.js";
        s.parentNode.insertBefore(g, s);
      })();
    </script>
    <script type="text/javascript" id="wp-polls-js-extra">
      var pollsL10n = {
        ajax_url: "https:\/\/ahrefs.com\/blog\/wp-admin\/admin-ajax.php",
        text_wait:
          "Your last request is still being processed. Please wait a while ...",
        text_valid: "Please choose a valid poll answer.",
        text_multiple: "Maximum number of choices allowed: ",
        show_loading: "1",
        show_fading: "1",
      };
    </script>
    <script type="text/javascript" id="Ahrefs-plugins-js-extra">
      var ahrefs_plugins_l10n = { view_full_size: "View full size" };
    </script>
    <script>
      /*!
       * IE10 viewport hack for Surface/desktop Windows 8 bug
       * Copyright 2014 Twitter, Inc.
       * Licensed under the Creative Commons Attribution 3.0 Unported License. For
       * details, see http://creativecommons.org/licenses/by/3.0/.
       */
      // See the Getting Started docs for more information:
      // http://getbootstrap.com/getting-started/#support-ie10-width
      (function () {
        "use strict";
        if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
          var msViewportStyle = document.createElement("style");
          msViewportStyle.appendChild(
            document.createTextNode("@-ms-viewport{width:auto!important}")
          );
          document.querySelector("head").appendChild(msViewportStyle);
        }
      })();
    </script>
    <script
      type="text/javascript"
      src="https://ahrefs.com/blog/wp-content/themes/Ahrefs-4/js/jquery.min.js"
      id="jquery-js"
    ></script>
    <script
      type="text/javascript"
      src="https://ahrefs.com/blog/wp-content/cache/autoptimize/js/autoptimize_single_419414a19e745950aa3ca9fec168aab4.js"
      id="modernizr-js"
    ></script>
    <script
      type="text/javascript"
      src="https://ahrefs.com/blog/wp-content/cache/autoptimize/js/autoptimize_single_e649b1a31b5b60b9d46864545f5a57d3.js"
      id="fancybox-js"
    ></script>
    <script>
      $("#sSubscrBtnRigth").click(function () {
        $.post(
          "/blog/mch_subscr.php",
          {
            sMail: $("#sMailFooter").val(),
            sToken:
              "5d3666a5a3ccc50c552dc54a1d51b2ee4edb1a1182fc82be6a0e78bd8efc1319",
            uAct: "3",
            email: $("#emailFoot").val(),
          },
          function (data, textStatus) {
            if (
              typeof data !== "undefined" &&
              typeof data.res !== "undefined"
            ) {
              $("#subscrResponse").html("");
              $("#subscrResponse").hide();
              if (data.res === true) {
                // success
                $("#subscrResponse").show();
                $("#subscrResponse").html(
                  "<div class='subscribe-already'>Thanks! Please verify your email.</div>"
                );
                $("#sMailFooter").css("border", "1px solid rgba(0, 0, 0, 0.2)");
                $("#sMailFooter").css("color", "#333");
              } else {
                if (data.error === "subscribed") {
                  // subscribed
                  $("#subscrResponse").show();
                  $("#subscrResponse").html(
                    "<div class='subscribe-already'>Looks like you're subscribed to our blog already.</div>"
                  );
                  $("#sMailFooter").css(
                    "border",
                    "1px solid rgba(0, 0, 0, 0.2)"
                  );
                  $("#sMailFooter").css("color", "#333");
                } else {
                  // custom error
                  $("#subscrResponse").show();
                  $("#subscrResponse").html(
                    '<div class="subscribe-error">' + data.error + "</div>"
                  );
                  $("#sMailFooter").css("border", "1px solid red");
                  $("#sMailFooter").css("color", "#333");
                  $(".subscr_a").css("color", "red");
                }
              }
            }
          },
          "json"
        );
        return false;
      });
    </script>
    <script>
      $("#sSubscrBtnBottom").click(function () {
        $.post(
          "/blog/mch_subscr.php",
          {
            sMail: $("#sMailBFooter").val(),
            sToken:
              "5d3666a5a3ccc50c552dc54a1d51b2ee4edb1a1182fc82be6a0e78bd8efc1319",
            uAct: "3",
            email: $("#emailFoot").val(),
          },
          function (data, textStatus) {
            if (
              typeof data !== "undefined" &&
              typeof data.res !== "undefined"
            ) {
              $("#subscrBResponse").html("");
              $("#subscrBResponse").hide();
              if (data.res === true) {
                // success
                $("#subscrBResponse").show();
                $("#subscrBResponse").html(
                  "<div class='subscribe-already'>Thanks! Please verify your email.</div>"
                );
                $("#sMailBFooter").css(
                  "border",
                  "1px solid rgba(0, 0, 0, 0.2)"
                );
                $("#sMailBFooter").css("color", "#333");
              } else {
                if (data.error === "subscribed") {
                  // subscribed
                  $("#subscrBResponse").show();
                  $("#subscrBResponse").html(
                    "<div class='subscribe-already'>Looks like you're subscribed to our blog already.</div>"
                  );
                  $("#sMailBFooter").css(
                    "border",
                    "1px solid rgba(0, 0, 0, 0.2)"
                  );
                  $("#sMailBFooter").css("color", "#333");
                } else {
                  // custom error
                  $("#subscrBResponse").show();
                  $("#subscrBResponse").html(
                    '<div class="subscribe-error">' + data.error + "</div>"
                  );
                  $("#sMailBFooter").css("border", "1px solid red");
                  $("#sMailBFooter").css("color", "#333");
                }
              }
            }
          },
          "json"
        );
        return false;
      });
    </script>
    <script type="text/javascript">
      function copyStringToClipboard(string) {
        function handler(event) {
          event.clipboardData.setData("text/plain", string);
          event.preventDefault();
          document.removeEventListener("copy", handler, true);
        }
        document.addEventListener("copy", handler, true);
        document.execCommand("copy");
      }
      function StartTooltip() {
        var option = {
          position: $(this).data("position"),
          size: "medium",
          maxWidth: 247,
          fadeIn: 50,
        };
        if (typeof Tipped != "undefined") {
          Tipped.remove($(".ahrefs-icon-info"));
          $(".ahrefs-icon-info").each(function () {
            Tipped.create($(this), $("#" + $(this).data("tip")).html(), option);
          });
          Tipped.remove($(".metrics_box_title_tooltip"));
          $(".metrics_box_title_tooltip").each(function () {
            Tipped.create($(this), $("#" + $(this).data("tip")).html(), option);
          });
          Tipped.remove($(".subhead-anchor"));
          $(".subhead-anchor").each(function (item, index) {
            var element = Tipped.create(
              $(this),
              $("#" + $(this).data("tip")).html(),
              option
            );
            var _that = this;
            $(this).click(function () {
              copyStringToClipboard(
                window.location.href.split("#")[0] + $(this).attr("rel")
              );
              $(".tpd-content").text("Copied to clipboard");
              Tipped.refresh();
            });
            $(this).on("mouseleave", function () {
              $(".tpd-content").text("Copy link");
              Tipped.refresh();
            });
          });
        }
      }
      var ARTICLE_STATES = $(".author-desktop").find(".article-stats");
      if (typeof ARTICLE_STATES.offset() == "undefined") {
        var ARTICLE_STATES_POSITION = 0;
      } else {
        var ARTICLE_STATES_POSITION =
          ARTICLE_STATES.offset().top + ARTICLE_STATES.height();
      }
      function showHideSharePost(SCROLLTOP) {
        if (SCROLLTOP > ARTICLE_STATES_POSITION) {
          $(".share-post").addClass("show");
        } else {
          $(".share-post").removeClass("show");
        }
      }
      $(function () {
        StartTooltip();
        showHideSharePost($(window).scrollTop());
        $(window).scroll(function () {
          var SCROLLTOP = $(this).scrollTop();
          showHideSharePost(SCROLLTOP);
        });
      });
    </script>
    <script>
      (function ($) {
        $("#subscribe_button").on("click", function () {
          var $form = $(this).closest("form");
          var $thanks = $(this).closest("form").siblings(".subscribe-thanks");
          var $input = $form.find("#sMailFooter");
          $.post(
            "/blog/mch_subscr.php",
            {
              sMail: $input.val(),
              sToken:
                "5d3666a5a3ccc50c552dc54a1d51b2ee4edb1a1182fc82be6a0e78bd8efc1319",
              uAct: "3",
              email: $("#emailFoot").val(),
            },
            function (data, textStatus) {
              if (
                typeof data !== "undefined" &&
                typeof data.res !== "undefined"
              ) {
                var $response = $form.find("#subscrResponse");
                $response.empty().hide();
                if (data.res === true) {
                  // success.
                  $input.removeClass("error");
                  $form.hide();
                  $thanks.show();
                } else {
                  if (data.error === "subscribed") {
                    // subscribed.
                    $response
                      .text("Looks like you're subscribed to our blog already")
                      .show();
                  } else {
                    // custom error.
                    $response.html(data.error).show();
                  }
                  $input.addClass("error").focus();
                }
              }
            },
            "json"
          );
          return false;
        });
        $("#subscribe_gotit").on("click", function () {
          var $form = $(this).closest(".section").find("form");
          var $thanks = $form.siblings(".subscribe-thanks");
          var $response = $form.find("#subscrResponse");
          var $input = $form.find("#sMailFooter");
          $response.empty().hide();
          $input.removeClass("error").val("");
          $thanks.hide();
          $form.show();
          return false;
        });
      })(jQuery);
    </script>
    <script data-noptimize="1">
      window.lazySizesConfig = window.lazySizesConfig || {};
      window.lazySizesConfig.loadMode = 1;
    </script>
    <script
      defer=""
      async=""
      data-noptimize="1"
      src="https://ahrefs.com/blog/wp-content/plugins/autoptimize/classes/external/js/lazysizes.min.js"
    ></script>
    <script
      defer=""
      type="text/javascript"
      src="https://ahrefs.com/blog/wp-content/cache/autoptimize/js/autoptimize_single_92a77854e7be2f0cf4350123adf6e4d2.js"
      id="wp-polls-js"
    ></script>
    <script
      defer=""
      type="text/javascript"
      src="https://ahrefs.com/blog/wp-content/themes/Ahrefs-4/bootstrap/js/bootstrap.min.js"
      id="bootstrap-js"
    ></script>
    <script
      defer=""
      type="text/javascript"
      src="https://ahrefs.com/blog/wp-content/themes/Ahrefs-4/js/jquery.scrollTo.min.js"
      id="scrollTo-js"
    ></script>
    <script
      defer=""
      type="text/javascript"
      src="https://ahrefs.com/blog/wp-content/themes/Ahrefs-4/includes/share/js/jquery.sharrre.min.js"
      id="share-js"
    ></script>
    <script
      defer=""
      type="text/javascript"
      src="https://ahrefs.com/blog/wp-content/cache/autoptimize/js/autoptimize_single_78695e0755da857435baae96799861f1.js"
      id="cookie-js"
    ></script>
    <script
      defer=""
      type="text/javascript"
      src="https://ahrefs.com/blog/wp-content/themes/Ahrefs-4/js/jquery.placeholder.min.js"
      id="placeholder-js"
    ></script>
    <script
      defer=""
      type="text/javascript"
      src="https://ahrefs.com/blog/wp-content/cache/autoptimize/js/autoptimize_single_764f80ce7b62103bfe17f5fbbc2bbb6a.js"
      id="Ahrefs-plugins-js"
    ></script>
    <script
      defer=""
      type="text/javascript"
      src="https://ahrefs.com/blog/wp-content/cache/autoptimize/js/autoptimize_single_06ed32cc3fc6e7cc945f41180e4d2f23.js"
      id="tipped-js"
    ></script>
    <script>
      (function jqIsReady_455() {
        if (typeof jQuery === "undefined") {
          setTimeout(jqIsReady_455, 100);
        } else {
          jQuery(document).ready(function (jQuery) {
            jQuery(".sharrre-facebook-155424").each(function () {
              var self = this;
              jQuery(this).sharrre({
                share: {
                  facebook: true,
                },
                enableCounter: false,
                enableHover: false,
                template: ".",
                click: function (api, options) {
                  api.simulateClick();
                  api.openPopup("facebook");
                },
              });
            });
            jQuery(".sharrre-twitter-155424").each(function () {
              var self = this;
              jQuery(this).sharrre({
                share: {
                  twitter: true,
                },
                enableCounter: false,
                enableHover: false,
                buttons: { twitter: { via: "ahrefs", related: "ahrefs" } },
                template: ".",
                click: function (api, options) {
                  api.simulateClick();
                  api.openPopup("twitter");
                },
              });
            });
            jQuery(".sharrre-linkedin-155424").each(function () {
              var self = this;
              jQuery(this).sharrre({
                share: {
                  linkedin: true,
                },
                enableCounter: false,
                enableHover: false,
                template: ".",
                click: function (api, options) {
                  api.simulateClick();
                  api.openPopup("linkedin");
                },
              });
            });
          });
        }
      })();
    </script>
    <script type="text/javascript">
      (function jqIsReady_181() {
        if (typeof jQuery === "undefined") {
          setTimeout(jqIsReady_181, 100);
        } else {
          jQuery(document).ready(function () {
            var wpfcWpfcAjaxCall = function (polls) {
              if (polls.length > 0) {
                poll_id = polls.last().attr("id").match(/\d+/)[0];
                jQuery.ajax({
                  type: "POST",
                  url: pollsL10n.ajax_url,
                  dataType: "json",
                  data: {
                    action: "wpfc_wppolls_ajax_request",
                    poll_id: poll_id,
                    nonce: "6fe26af8d1",
                  },
                  cache: false,
                  success: function (data) {
                    if (data === true) {
                      poll_result(poll_id);
                    } else if (data === false) {
                      poll_booth(poll_id);
                    }
                    polls.length = polls.length - 1;
                    setTimeout(function () {
                      wpfcWpfcAjaxCall(polls);
                    }, 1000);
                  },
                });
              }
            };
            var polls = jQuery('div[id^="polls-"][id$="-loading"]');
            wpfcWpfcAjaxCall(polls);
          });
        }
      })();
    </script>
  </body>
</html>
 