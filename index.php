<?php get_header(); ?>
<?php 
if (is_home()){
    get_template_part('home','post');
}
?>
<?php get_footer()?>