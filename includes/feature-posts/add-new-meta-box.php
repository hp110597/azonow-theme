<?php 

function add_new_meta_box() {
    add_meta_box('infor','Rate the quality of the article','infor_output','post');
}

add_action('add_meta_boxes','add_new_meta_box');

function infor_output($post){
    $data = get_post_meta($post->ID,'_azonow_point_data',true);
    if (!empty($data)){
        echo
        '
        <input type="number" name="point-for-post" value="'. $data .'">
        <div><span>(*)Enter a rating to display the article in the high rating area of ​​the website, not required</span></div>
        ';
    }else{
        echo
        '
        <input type="number" name="point-for-post">
        <div><span>(*)Enter a rating to display the article in the high rating area of ​​the website, not required</span></div>
        ';       
    }

}

function infor_save($post_id){
    $post_status= get_post_status($post_id);
    if ( $post_status == 'publish' ) {
        $data = $_POST['point-for-post'];
        update_post_meta($post_id,'_azonow_point_data',$data);
    }
}
add_action("save_post",'infor_save');


?>