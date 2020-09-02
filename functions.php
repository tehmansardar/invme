<?php
/**
 *
 * @package invm
 */

// Setup
define('INVM_DEV', true);

// Includes
include get_theme_file_path('/inc/frontend/enqueue.php');
include get_theme_file_path('/inc/walkerNav.php');
include get_theme_file_path('/inc/backend/menus.php');
include( get_theme_file_path( '/inc/theme-customizer.php' ) );
include( get_theme_file_path( '/inc/customizer/info.php' ) );
include( get_theme_file_path( '/inc/customizer/general.php' ) );

include get_theme_file_path('/inc/backend/testimonialsCpt.php');
include get_theme_file_path('/inc/backend/quotesCpt.php');
include get_theme_file_path('/inc/backend/projectsCpt.php');
include get_theme_file_path('/inc/backend/invm-taxonomy.php');

// php Mailer
require get_theme_file_path('/inc/backend/phpmailer/includes/PHPMailer.php');
require get_theme_file_path('/inc/backend/phpmailer/includes/SMTP.php');
require get_theme_file_path('/inc/backend/phpmailer/includes/Exception.php');

include get_theme_file_path('/inc/backend/ajax.php');

// Hooks
add_action('wp_enqueue_scripts', 'invm_enqueue');

add_action( 'customize_register', 'invm_customize_register' );

//  1. Testimonials CPT
add_action('init', 'invm_testimonial_cpt', 0);
add_action('manage_invm-testimonials_posts_custom_column', 'invm_testimonial_custom_column', 10, 2);

add_filter('enter_title_here', 'invm_testimonials_title_place_holder', 20, 2);
add_filter('manage_invm-testimonials_posts_columns', 'invm_set_testimonials_columns');

// ---- Create Custom Meta Box
add_action('add_meta_boxes', 'invm_testimonial_add_meta_box');
add_action('save_post', 'invm_save_testimonials_authority_data');

// 2. Quote Page
add_action('init', 'invm_quote_cpt', 0);

add_filter('enter_title_here', 'invm_quotes_title_place_holder', 20, 2);
add_filter('manage_invm-quotes_posts_columns', 'invm_set_quotes_columns');

// ---- Create Custom Meta Box
add_action('add_meta_boxes', 'invm_quotes_add_meta_box');
// add_action('save_post', 'invm_save_quotes_personal_data');

// Quote Form Ajax
add_action('wp_ajax_nopriv_invm_save_quote_form', 'invm_save_quote');
add_action('wp_ajax_invm_save_quote_form', 'invm_save_quote');


// 3. Projects CPT
add_action('init', 'invm_project_cpt', 0);

// Services Taxonomy
add_action( 'init', 'invm_services_taxonomy', 0 );



// Theme Features
add_theme_support('post-thumbnails');
add_action('after_setup_theme', 'invm_register_nav_menu');

// allow html in category and taxonomy descriptions
remove_filter( 'pre_term_description', 'wp_filter_kses' );
remove_filter( 'pre_link_description', 'wp_filter_kses' );
remove_filter( 'pre_link_notes', 'wp_filter_kses' );
remove_filter( 'term_description', 'wp_kses_data' );

// Shortcodes
