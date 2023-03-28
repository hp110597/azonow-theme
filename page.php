<?php get_header(); ?>
<?php 
if (is_home()){
    get_template_part('home','post');
}elseif(is_front_page()){
    get_template_part('front','page');
}
else{
    echo "Đây là trang page bình thường";
}
?>
<?php get_footer()?>