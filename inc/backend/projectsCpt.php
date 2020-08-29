<?php
/**
 *
 * @package invm
 */

function invm_project_cpt()
{

    // Set UI labels for Custom Post Type
    $labels = array(
        'name' => _x('Projects', 'Post Type General Name', 'invm'),
        'singular_name' => _x('Project', 'Post Type Singular Name', 'invm'),
        'menu_name' => __('Projects', 'invm'),
        'parent_item_colon' => __('Parent Projects', 'invm'),
        'all_items' => __('All Projects', 'invm'),
        'view_item' => __('View Projects', 'invm'),
        'add_new_item' => __('Add New Projects', 'invm'),
        'add_new' => __('Add Projects', 'invm'),
        'edit_item' => __('Edit Projects', 'invm'),
        'update_item' => __('Update Projects', 'invm'),
        'search_items' => __('Search Projects', 'invm'),
        'not_found' => __('Not Found', 'invm'),
        'not_found_in_trash' => __('Not found in Trash', 'invm'),
    );

    // Set other options for Custom Post Type

    $args = array(
        'label' => __('projects', 'invm'),
        'description' => __('Projects', 'invm'),
        'labels' => $labels,
        // Features this CPT supports in Post Editor
        'supports' => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions'),
        /* A hierarchical CPT is like Pages and can have
         * Parent and child items. A non-hierarchical CPT
         * is like Posts.
         */
        'hierarchical' => true,
        'public' => true,
        'show_ui' => true,
        'menu_icon' => 'dashicons-paperclip',
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 5,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'query_var' => true,
        'publicly_queryable' => true,
        'capability_type' => 'post',
        'supports' => array('title','editor','thumbnail','excerpt'),
    );

    // Registering your Custom Post Type
    register_post_type('invm-projects', $args);

}

