<?php 

function azonow_add_new_meta_box() {
    add_meta_box('infor',__('Rate the quality','azonow'),'infor_output','post','side','default');
}

add_action('add_meta_boxes','azonow_add_new_meta_box');

function infor_output($post){
    $data = get_post_meta($post->ID,'_azonow_point_data',true);
    if (!empty($data)){
        echo
        '
        <input type="number" name="point-for-post" value="'. $data .'"><br>
        ';
        _e('(*) Enter a rating to display the article in the high rating area of ​​the website, not required','azonow')
        ;
    }else{
        '
        <input type="number" name="point-for-post"><br>
        ';
        _e('(*) Enter a rating to display the article in the high rating area of ​​the website, not required','azonow')
        ;      
    }

}

function infor_save($post_id){
    $post_status= get_post_status($post_id);
    if ( $post_status == 'publish' && isset($_POST['point-for-post']) ) {
        $data = $_POST['point-for-post'];
        update_post_meta($post_id,'_azonow_point_data',$data);
    }
}
add_action("save_post",'infor_save');


?>