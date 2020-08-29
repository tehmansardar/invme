<?php
/**
 *
 * @package invm
 */

function invm_testimonial_cpt()
{

    // Set UI labels for Custom Post Type
    $labels = array(
        'name' => _x('Testimonials', 'Post Type General Name', 'invm'),
        'singular_name' => _x('Testimonials', 'Post Type Singular Name', 'invm'),
        'menu_name' => __('Testimonials', 'invm'),
        'parent_item_colon' => __('Parent Testimonials', 'invm'),
        'all_items' => __('All Testimonials', 'invm'),
        'view_item' => __('View Testimonials', 'invm'),
        'add_new_item' => __('Add New Testimonials', 'invm'),
        'add_new' => __('Add Testimonials', 'invm'),
        'edit_item' => __('Edit Testimonials', 'invm'),
        'update_item' => __('Update Testimonials', 'invm'),
        'search_items' => __('Search Testimonials', 'invm'),
        'not_found' => __('Not Found', 'invm'),
        'not_found_in_trash' => __('Not found in Trash', 'invm'),
    );

    // Set other options for Custom Post Type

    $args = array(
        'label' => __('testimonials', 'invm'),
        'description' => __('Testimonials and reviews', 'invm'),
        'labels' => $labels,
        // Features this CPT supports in Post Editor
        'supports' => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields'),
        // You can associate this CPT with a taxonomy or custom taxonomy.
        'taxonomies' => array('genres'),
        /* A hierarchical CPT is like Pages and can have
         * Parent and child items. A non-hierarchical CPT
         * is like Posts.
         */
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'menu_icon' => 'dashicons-screenoptions',
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 5,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'post',
    );

    // Registering your Custom Post Type
    register_post_type('invm-testimonials', $args);

}

function invm_testimonials_title_place_holder($title, $post)
{

    if ($post->post_type == 'invm-testimonials') {
        $my_title = "Full Name";
        return $my_title;
    }

    return $title;

}

function invm_set_testimonials_columns($columns)
{
    $newColumns = array();
    $newColumns['title'] = 'Full Name';
    $newColumns['review'] = 'Review';
    $newColumns['authority'] = 'Authority';
    $newColumns['date'] = 'Date';
    return $newColumns;
}

function invm_testimonial_custom_column($column, $post_id)
{

    switch ($column) {

        case 'review':
            echo get_the_excerpt();
            break;

        case 'authority':
            //Testimonials column
            $authority = get_post_meta($post_id, '_testimonials_authority_value_key', true);
            echo '<p>' . $authority . '</p>';
            break;
    }

}

/* Authority META BOXES */

function invm_testimonial_add_meta_box()
{
    add_meta_box('authority', 'Authority', 'invm_testimonial_authority_callback', 'invm-testimonials', 'side');
}
function invm_testimonial_authority_callback($post)
{
    wp_nonce_field('invm_save_testimonials_authority_data', 'invm_testimonials_authority_meta_box_nonce');

    $value = get_post_meta($post->ID, '_testimonials_authority_value_key', true);

    echo '<label for="invm_testimonials_authority_field">Authority: </label>';
    echo '<input type="text" id="invm_testimonials_authority_field" name="invm_testimonials_authority_field" value="' . esc_attr($value) . '" size="25" />';
}
function invm_save_testimonials_authority_data($post_id)
{

    if (!isset($_POST['invm_testimonials_authority_meta_box_nonce'])) {
        return;
    }

    if (!wp_verify_nonce($_POST['invm_testimonials_authority_meta_box_nonce'], 'invm_save_testimonials_authority_data')) {
        return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    if (!isset($_POST['invm_testimonials_authority_field'])) {
        return;
    }

    $my_data = sanitize_text_field($_POST['invm_testimonials_authority_field']);

    update_post_meta($post_id, '_testimonials_authority_value_key', $my_data);

}
