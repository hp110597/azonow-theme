<?php get_header()?>
<div class="height404-wrap" style="min-height: calc(100vh - 86px);">
    <div class="section404-wrap">
        <div class="section404">
            <div class="images-wrap">
                <div class="div-img img-absolute image-doggo">

                </div>
                <div class="div-img img-absolute image-earth">

                </div>
                <div class="div-img img-absolute image-greg">

                </div>
                <div class="div-img img-absolute image-planet-1">

                </div>
                <div class="div-img img-absolute image-star-1">

                </div>
                <div class="div-img img-absolute image-star-2">

                </div>
                <div class="div-img img-absolute image-star-3">

                </div>
            </div>
            <div class="section404-text">
                <div class="div-img image-404">

                </div>
                <h2><?php _e("Oops, this page doesn't exist",'azonow')?></h2>
                <p><?php _e('Explore hundreds of detailed tutorials, case studies and opinion pieces from our archives.','azonow')?></p>
                <div class="link404">
                    <a href="<?php echo get_post_type_archive_link( 'post' ); ?>" class="link404-a"><?php _e('Blog Archive →','azonow')?></a>
                </div>
                <div class="div-img img-absolute image-planet-2">

                </div>
            </div>
        </div>
        <div class="clearfix">

        </div>
    </div>
</div>


<?php get_footer()?>