<?php 
/**
 * @Add fields images when to create new category
 */
// Add field image when create category
function azonow_add_category_image_field() {
    ?>
<div class="form-field">
    <label for="category_image"><?php _e( 'Category Image' ); ?></label>
    <input type="hidden" name="category_image" id="category_image" class="category-image" value="">
    <input type="button" class="button category-image-upload" value="Upload Image">
    <br><br>
    <img src="" class="category-image-preview" style="display:none;width:100px;height:auto;">
</div>
<?php
}
add_action( 'category_add_form_fields', 'azonow_add_category_image_field' );

// Save image when create category
function azonow_save_category_image_field( $term_id, $tt_id ) {
    if ( isset( $_POST['category_image'] ) && '' !== $_POST['category_image'] ) {
        $image_url = $_POST['category_image'];
        add_term_meta( $term_id, 'category_image', $image_url, true );
    }
}
add_action( 'created_category', 'azonow_save_category_image_field', 10, 2 );

// Thêm trường hình ảnh vào form chỉnh sửa danh mục
function azonow_edit_category_image_field( $term ) {
    $image_url = get_term_meta( $term->term_id, 'category_image', true );
    ?>
<tr class="form-field">
    <th scope="row" valign="top"><label for="category_image"><?php _e( 'Category Image' ); ?></label></th>
    <td>
        <input type="hidden" name="category_image" id="category_image" class="category-image"
            value="<?php echo esc_attr( $image_url ); ?>">
        <input type="button" class="button category-image-upload" value="Upload Image">
        <br><br>
        <?php if ( !is_null($image_url) ) : ?>
        <img src="<?php echo esc_attr( $image_url ); ?>" class="category-image-preview"
            style="width:100px;height:auto;">
        <?php else: ?>
        <img src="" class="category-image-preview" style="display:none;width:100px;height:auto;">
        <?php endif; ?>
    </td>
</tr>
<?php
}
add_action( 'category_edit_form_fields', 'azonow_edit_category_image_field' );

// Lưu ảnh khi chỉnh sửa danh mục
function azonow_update_category_image_field( $term_id ) {
    if ( isset( $_POST['category_image'] ) && '' !== $_POST['category_image'] ) {
        $image_url = $_POST['category_image'];
        update_term_meta( $term_id, 'category_image', $image_url );
    }
}
add_action( 'edited_category', 'azonow_update_category_image_field' );



// register scripts for field image
function azonow_add_category_image_scripts( $hook ) {
    wp_enqueue_media();
    wp_enqueue_script( 'category-image-script', get_stylesheet_directory_uri() . '/assets/js/category-image-script.js', array( 'jquery' ), '1.0', true );
    wp_enqueue_style( 'category-image-style', get_stylesheet_directory_uri() . '/assets/css/category-image-style.css' );
}
add_action( 'admin_enqueue_scripts', 'azonow_add_category_image_scripts' );