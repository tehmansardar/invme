<?php

function invm_info_customizer_section( $wp_customize ){
    $wp_customize->add_setting( 'invm_facebook_handle', [ 
        'default'   =>  ''
    ]);

    $wp_customize->add_setting( 'invm_twitter_handle', array(
        'default'                   =>  '',
    ));

    $wp_customize->add_setting( 'invm_instagram_handle', array(
        'default'                   =>  '',
    ));

    $wp_customize->add_setting( 'invm_linkedin_handle', array(
        'default'                   =>  '',
    ));

    $wp_customize->add_setting( 'invm_address', array(
        'default'                   =>  '',
    ));

    $wp_customize->add_setting( 'invm_email', array(
        'default'                   =>  '',
    ));

    $wp_customize->add_setting( 'invm_phone_number', array(
        'default'                   =>  '',
    ));

    $wp_customize->add_section( 'invm_info_section', [
        'title'     =>  __( 'Invm Contact Info', 'invm' ),
        'priority'  =>  30,
        'panel'     => 'invm',
    ]);

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'invm_social_facebook_input',
        array(
            'label'          => __( 'Facebook Handle', 'invm' ),
            'section'        => 'invm_info_section',
            'settings'       => 'invm_facebook_handle'
        )
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'invm_social_twitter_input',
        array(
            'label'                 =>  __( 'Twitter Handle', 'invm' ),
            'section'               => 'invm_info_section',
            'settings'              => 'invm_twitter_handle',
            'type'                  =>  'text'
        )
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'invm_social_instagram_input',
        array(
            'label'                 =>  __( 'Instagram Handle', 'invm' ),
            'section'               => 'invm_info_section',
            'settings'              => 'invm_instagram_handle',
            'type'                  =>  'text'
        )
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'invm_social_linkedin_input',
        array(
            'label'                 =>  __( 'LinkedIn Handle', 'invm' ),
            'section'               => 'invm_info_section',
            'settings'              => 'invm_linkedin_handle',
            'type'                  =>  'text'
        )
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'invm_social_address_input',
        array(
            'label'                 =>  __( 'Address', 'invm' ),
            'section'               => 'invm_info_section',
            'settings'              => 'invm_address',
            'type'                  =>  'text'
        )
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'invm_social_email_input',
        array(
            'label'                 =>  __( 'Email', 'invm' ),
            'section'               => 'invm_info_section',
            'settings'              => 'invm_email',
            'type'                  =>  'text'
        )
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'invm_social_phone_number_input',
        array(
            'label'                 =>  __( 'Phone Number', 'udemy' ),
            'section'               => 'invm_info_section',
            'settings'              => 'invm_phone_number',
            'type'                  =>  'text'
        )
    ));
}