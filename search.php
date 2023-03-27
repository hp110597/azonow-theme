<?php get_header()?>
<?php 
    $search_query = new WP_Query('s=' . $s .'&showpost=-1');
    $search_keyword = esc_html($s);
    $search_count = $search_query->post_count;
?>

<?php 
    $val = reset($_GET);
    $key = key($_GET);
    parse_str($_SERVER['QUERY_STRING'], $array);
    $val = reset($array);
    $key = key($array);
?>
<div class="search-header with-flag">
    <div class="container">
        <h2><?php _e('Search result for')?></h2>
        <form method="get" id="searchform_head" action="<?php echo home_url() ?>">
            <input type="text" class="searching" value="<?php echo $val ?>" name="s" placeholder="Search the blog..." aria-label="Search">
            <button type="submit" class="btn-submit search-icon"><?php ?></button>
        </form>
    </div>
</div>
<div id="container">
    <?php get_template_part('content')?>
</div>
<?php
    get_footer();
?>