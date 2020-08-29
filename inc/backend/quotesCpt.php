<?php
/**
 *
 * @package invm
 */

function invm_quote_cpt()
{

    // Set UI labels for Custom Post Type
    $labels = array(
        'name' => _x('Quotes', 'Post Type General Name', 'invm'),
        'singular_name' => _x('Quotes', 'Post Type Singular Name', 'invm'),
        'menu_name' => __('Quotes', 'invm'),
        'parent_item_colon' => __('Parent Quotes', 'invm'),
        'all_items' => __('All Quotes', 'invm'),
        'view_item' => __('View Quotes', 'invm'),
        'add_new_item' => __('Add New Quotes', 'invm'),
        'add_new' => __('Add Quotes', 'invm'),
        'edit_item' => __('Edit Quotes', 'invm'),
        'update_item' => __('Update Quotes', 'invm'),
        'search_items' => __('Search Quotes', 'invm'),
        'not_found' => __('Not Found', 'invm'),
        'not_found_in_trash' => __('Not found in Trash', 'invm'),
    );

    // Set other options for Custom Post Type

    $args = array(
        'label' => __('quotes', 'invm'),
        'description' => __('Quotes', 'invm'),
        'labels' => $labels,
        // Features this CPT supports in Post Editor
        'supports' => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions'),
        /* A hierarchical CPT is like Pages and can have
         * Parent and child items. A non-hierarchical CPT
         * is like Posts.
         */
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'menu_icon' => 'dashicons-portfolio',
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
    register_post_type('invm-quotes', $args);

}

function invm_quotes_title_place_holder($title, $post)
{

    if ($post->post_type == 'invm-quotes') {
        $my_title = "Full Name";
        return $my_title;
    }

    return $title;

}

function invm_set_quotes_columns($columns)
{
    $newColumns = array();
    $newColumns['title'] = 'Full Name';
    $newColumns['email'] = 'Email';
    $newColumns['phone'] = 'Phone';
    $newColumns['projectType'] = 'Project Type';
    $newColumns['budget'] = 'Budget';
    $newColumns['date'] = 'Date';
    return $newColumns;
}

/* Quotes META BOXES */

function invm_quotes_add_meta_box()
{
    add_meta_box('personal', 'Personal', 'invm_quotes_personal_callback', 'invm-quotes', 'side');
}
function invm_quotes_personal_callback($post)
{
    // wp_nonce_field('invm_save_quotes_personal_data', 'invm_quotes_personal_meta_box_nonce');

    $email = get_post_meta($post->ID, '_quotes_email_value_key', true);
    $phone = get_post_meta($post->ID, '_quotes_phone_value_key', true);
    $project = get_post_meta($post->ID, '_quotes_project_value_key', true);
    $budget = get_post_meta($post->ID, '_quotes_budget_value_key', true);
    $attachment = get_post_meta($post->ID, '_quotes_attachment_value_key', true);

    echo '<label for="invm_quotes_email_field"><b>Email:</b> </label>';
    // echo '<a href="mailto:' . esc_attr($email) . '" id="invm_quotes_email_field" name="invm_quotes_email_field" value="' . esc_attr($email) . '">' . esc_attr($email) . '</a><br/>';
    echo '<a href="mailto:' . $email . '" id="invm_quotes_email_field" name="invm_quotes_email_field">' . esc_attr($email) . '</a><br/>';

    echo '<label for="invm_quotes_phone_field">Phone: </label>';
    echo '<a href="tel:' . $phone . '" id="invm_quotes_phone_field" name="invm_quotes_phone_field">' . esc_attr($phone) . '</a><br/>';

    echo '<label for="invm_quotes_project_field">Project: </label>';
    echo '<span id="invm_quotes_project_field" name="invm_quotes_project_field">' . esc_attr($project) . '</span><br />';

    echo '<label for="invm_quotes_budget_field">Budget: </label>';
    echo '<strong id="invm_quotes_budget_field" name="invm_quotes_budget_field">' . esc_attr($budget) . '</strong><br />';

    echo '<label for="invm_quotes_attachment_field">Attach: </label>';
    echo '<a href="' . $attachment . '" target="_blank" id="invm_quotes_attachment_field" name="invm_quotes_attachment_field">See Attachment</a><br />';

}
/* function invm_save_quotes_personal_data($post_id)
{
if (!isset($_POST['invm_quotes_personal_meta_box_nonce'])) {
return;
}

if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
return;
}

if (!current_user_can('edit_post', $post_id)) {
return;
}

// if (!isset($_POST['sunset_contact_email_field'])) {
//     return;
// }

if (!wp_verify_nonce($_POST['invm_quotes_personal_meta_box_nonce'], 'invm_save_quotes_personal_data')) {
return;
}

$personalData = [
'_quotes_email_value_key' => sanitize_text_field($_POST['invm_quotes_email_field']),
'_quotes_phone_value_key' => sanitize_text_field($_POST['invm_quotes_phone_field']),
'_quotes_project_value_key' => sanitize_text_field($_POST['invm_quotes_project_field']),
'_quotes_budget_value_key' => sanitize_text_field($_POST['invm_quotes_budget_field']),
'_quotes_attachment_value_key' => sanitize_text_field($_POST['invm_quotes_attachment_field']),
];
foreach ($personalData as $key => $value) {
update_post_meta($post_id, "$key", $value);
}

} */
