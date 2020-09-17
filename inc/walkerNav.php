<?php 
/*
    * walker nav menu
*/
    class Walker_Nav_Primary extends Walker_Nav_menu{

        function start_lvl( &$output, $depth =0, $args = NULL ){ //ul

            $indent = str_repeat("\t",$depth);
 
           if($depth == 0) {
                $output .= $indent .'<div class="container-fluid megamenu-container">';       
                $output .= $indent .'<div class="container">';
                // $output .= $indent .'<div class="row">';
                // $output .= $indent .'<div class="col-md-3 col-sm-6 col-12">';
                $output .= "\n$indent<ul class=\"row depth_$depth\">\n";
            }
            if($depth == 1){
                $output .= "\n$indent<ul class=\"footer-list depth_$depth\">\n";
            }
        }
        function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ){ //li a span

            $indent = ( $depth ) ? str_repeat("\t",$depth) : '';

            $li_attributes = '';
            $class_names = $value = '';
            
            $classes = empty( $item->classes ) ? array() : (array) $item->classes;

            $classes[] = ($args->walker->has_children) ? '' : '';
            $classes[] = ($item->current || $item->current_item_ancestor) ? 'active' : '';
            $classes[] = 'menu-item-' . $item->ID;

            if( $depth && $args->walker->has_children ){
                $classes[] = 'dropdown-submenu';
            }

            $path1Class = $depth == 1 ? 'col-md-3 col-sm-6 col-12' : '';

            $class_names =  join(' ', apply_filters('nav_menu_css_class', array_filter( $classes ), $item, $args ) );
		    $class_names = ' class="' . $path1Class .  esc_attr($class_names) . ' depth-'.$depth . '"';
		
		    $id = apply_filters('nav_menu_item_id', 'menu-item-'.$item->ID, $item, $args);
            $id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';
            
            if($depth == 1){
                $output .= $indent . '<li' . $id . $value . $class_names . $li_attributes . ' style="flex-direction: column; align-items: inherit; margin-right: 0px;" >';
                // $output .= $indent .'<div class="col-md-3 col-sm-6 col-12 depth-'.$depth.' ">';
            }elseif($depth == 2){
                $output .= $indent . '<li class="depth-'.$depth.'"' . $id . $value . $li_attributes . '>';
            }else{
                $output .= $indent . '<li' . $id . $value . $class_names . $li_attributes . '>';
            }

            $attributes = ! empty( $item->attr_title ) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
		    $attributes .= ! empty( $item->target ) ? ' target="' . esc_attr($item->target) . '"' : '';
		    $attributes .= ! empty( $item->xfn ) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
	    	$attributes .= ! empty( $item->url ) ? ' href="' . esc_attr($item->url) . '"' : '';
		
            $item_output = $args->before;
            
            if($depth == 1){
	    	$item_output .= '<p class="footer-heading megamenu-heading"' . $attributes . '>';
            }elseif($depth == 2){
                $item_output .= '<a class="footer-content megamenu-content"' . $attributes . '>';
            }else{
                $item_output .= '<a' . $attributes . '>';
            }

            $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . ($depth == 2 ? '' : $args->link_after);
		    $item_output .= ( $depth == 0 && $args->walker->has_children ) ? ' <b class="caret"></b></a>' : '</a>';
		    $item_output .= $args->after;
		
		    $output .= apply_filters ( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );

         }
    //     function end_el(){

    //     }
        // function end_lvl(&$output, $depth = 0, $args = NULL){
        //     // $output .= '</div></div>';    
        // }
    }