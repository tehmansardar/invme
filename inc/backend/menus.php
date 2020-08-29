<?php
/**
 *
 * @package invm
 */

function invm_register_nav_menu(){
    register_nav_menus([
        'footer'=> esc_html(__('Footer Navigation Menu')),
        'header'=> esc_html(__('Header Navigation Menu'))
    ]);
}

function add_menu_link_class( $atts, $item, $args ) {
    if(property_exists($args, 'link_class')) {
      $atts['class'] = $args->link_class;
    }
    return $atts;
  }
  add_filter( 'nav_menu_link_attributes', 'add_menu_link_class', 1, 3 );

  function add_menu_list_item_class($classes, $item, $args) {
    if (property_exists($args, 'list_item_class')) {
        $classes[] = $args->list_item_class;
    }
    return $classes;
  }
  add_filter('nav_menu_css_class', 'add_menu_list_item_class', 1, 3);