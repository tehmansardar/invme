<?php

function invm_genral_customizer_section( $wp_customize ){
    $wp_customize->add_setting( 'invm_copyright', [ 
        'default'   =>  ''
    ]);


    $wp_customize->add_section( 'invm_general_section', [
        'title'     =>  __( 'Invm General Settings', 'invm' ),
        'priority'  =>  1,
        'panel'     => 'invm',
    ]);

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'invm_general_copyright_input',
        array(
            'label'          => __( 'Copyright', 'invm' ),
            'section'        => 'invm_general_section',
            'settings'       => 'invm_copyright',
            'type'         => 'textarea'
        )
    ));

}