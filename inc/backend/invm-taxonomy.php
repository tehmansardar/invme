<?php
/**
 *
 * @package invm
 */

// Register Custom Taxonomy
function invm_services_taxonomy() {

    $labels = array(
        'name'                       => _x( 'Services', 'Services General Name', 'text_domain' ),
        'singular_name'              => _x( 'Service', 'Services Singular Name', 'text_domain' ),
        'menu_name'                  => __( 'Services', 'text_domain' ),
        'all_items'                  => __( 'All Items', 'text_domain' ),
        'parent_item'                => __( 'Parent Item', 'text_domain' ),
        'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
        'new_item_name'              => __( 'New Item Name', 'text_domain' ),
        'add_new_item'               => __( 'Add New Item', 'text_domain' ),
        'edit_item'                  => __( 'Edit Item', 'text_domain' ),
        'update_item'                => __( 'Update Item', 'text_domain' ),
        'view_item'                  => __( 'View Item', 'text_domain' ),
        'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
        'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
        'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
        'popular_items'              => __( 'Popular Items', 'text_domain' ),
        'search_items'               => __( 'Search Items', 'text_domain' ),
        'not_found'                  => __( 'Not Found', 'text_domain' ),
        'no_terms'                   => __( 'No items', 'text_domain' ),
        'items_list'                 => __( 'Items list', 'text_domain' ),
        'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        'query_var'                  => true,
        'has_archive'                => true,
        'rewrite'                    => array( 'slug' => 'services' ),

    );
    register_taxonomy( 'services', array( 'invm-projects' ), $args );

}

/*======== Adding Image to the Taxonomy===============*/


function add_category_image ( $taxonomy ) { ?>
    <div class="form-field term-group">
      <label for="category-image-id"><?php _e('Image', 'hero-theme'); ?></label>
      <input type="hidden" id="category-image-id" name="category-image-id" class="custom_media_url" value="">
      <div id="category-image-wrapper"></div>
      <p>
        <input type="button" class="button button-secondary ct_tax_media_button" id="ct_tax_media_button" name="ct_tax_media_button" value="<?php _e( 'Add Image', 'hero-theme' ); ?>" />
        <input type="button" class="button button-secondary ct_tax_media_remove" id="ct_tax_media_remove" name="ct_tax_media_remove" value="<?php _e( 'Remove Image', 'hero-theme' ); ?>" />
     </p>
    </div>
  <?php
  }
  add_action( 'services_add_form_fields', 'add_category_image', 10, 2 );

  add_action( 'admin_enqueue_scripts', 'add_script' );

  function add_script( $hook) {
    
    if('edit-tags.php' == $hook || 'term.php' == $hook){
      wp_enqueue_media();     
      wp_enqueue_script( 'test-script', get_template_directory_uri() . '/js/admin.dynamic.js', array('jquery'), '1.0.0', true );
   
    }
    
  }

add_action( 'created_services', 'save_category_image', 10, 2 );

function save_category_image ( $term_id, $tt_id ) {
   if( isset( $_POST['category-image-id'] ) && '' !== $_POST['category-image-id'] ){
     $image = $_POST['category-image-id'];
     add_term_meta( $term_id, 'category-image-id', $image, true );
   }
 }

 add_action( 'services_edit_form_fields', 'update_category_image', 10, 2 );

 /*
   * Edit the form field
   * @since 1.0.0
  */
  function update_category_image ( $term, $taxonomy ) { ?>
    <tr class="form-field term-group-wrap">
      <th scope="row">
        <label for="category-image-id"><?php _e( 'Image', 'hero-theme' ); ?></label>
      </th>
      <td>
        <?php $image_id = get_term_meta ( $term -> term_id, 'category-image-id', true ); ?>
        <input type="hidden" id="category-image-id" name="category-image-id" value="<?php echo $image_id; ?>">
        <div id="category-image-wrapper">
          <?php if ( $image_id ) { ?>
            <?php echo wp_get_attachment_image ( $image_id, 'thumbnail' ); ?>
          <?php } ?>
        </div>
        <p>
          <input type="button" class="button button-secondary ct_tax_media_button" id="ct_tax_media_button" name="ct_tax_media_button" value="<?php _e( 'Add Image', 'hero-theme' ); ?>" />
          <input type="button" class="button button-secondary ct_tax_media_remove" id="ct_tax_media_remove" name="ct_tax_media_remove" value="<?php _e( 'Remove Image', 'hero-theme' ); ?>" />
        </p>
      </td>
    </tr>
  <?php
  }
 
  /*
  * Update the form field value
  * @since 1.0.0
  */
  function updated_category_image ( $term_id, $tt_id ) {
    if( isset( $_POST['category-image-id'] ) && '' !== $_POST['category-image-id'] ){
      $image = $_POST['category-image-id'];
      update_term_meta ( $term_id, 'category-image-id', $image );
    } else {
      update_term_meta ( $term_id, 'category-image-id', '' );
    }
  }