<?php

function invm_customize_register( $wp_customize ){
    
    $wp_customize->add_panel('invm', [
        'title'             =>      __('Invm Settings', 'invm'),
        'description'       =>      '<p>Invm Theme Settings</p>',
        'priority'          =>      160
    ]);


    invm_genral_customizer_section( $wp_customize );
    invm_info_customizer_section( $wp_customize );
    
}