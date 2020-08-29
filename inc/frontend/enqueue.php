<?php

function invm_enqueue()
{
    $uri = get_theme_file_uri();
    $ver = INVM_DEV ? time() : false;

    // Enqueue Style
    wp_register_style(
        'invm_fontAwesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css',
        [],
        $ver
    );

    wp_register_style(
        'invm_latoFont',
        'https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900',
        [],
        $ver
    );

    wp_register_style(
        'invm_robotoFont',
        'https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900',
        [],
        $ver
    );

    wp_register_style(
        'invm_redHatFont',
        'https://fonts.googleapis.com/css?family=Red+Hat+Display:400,500,500i,700,900&display=swap',
        [],
        $ver
    );

    wp_register_style('invm_bootstrap_css', $uri . '/dist/bootstrap/css/bootstrap.min.css', [], $ver);

    wp_register_style('invm_bxSlider_css', $uri . '/dist/bxslider/jquery.bxslider.css', [], $ver);

    wp_register_style('invm_style', $uri . '/css/style.css', [], $ver);

    // Register Styles
    wp_enqueue_style('invm_fontAwesome');
    wp_enqueue_style('invm_latoFont');
    wp_enqueue_style('invm_robotoFont');
    wp_enqueue_style('invm_redHatFont');
    wp_enqueue_style('invm_bootstrap_css');
    wp_enqueue_style('invm_bxSlider_css');
    wp_enqueue_style('invm_style');

    // deregister Jquery
    wp_deregister_script('jquery');

    // Register jQuery
    wp_register_script(
        'invm_jQuery',
        'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js',
        [],
        $ver,
        true
    );

    // Enqueue Scripts

    wp_register_script(
        'invm_popper',
        'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js',
        [],
        $ver,
        true
    );

    wp_register_script('invm_bootstrap_js', $uri . '/dist/bootstrap/js/bootstrap.min.js', [], $ver, true);
    wp_register_script('invm_bxslider_js', $uri . '/dist/bxslider/jquery.bxslider.min.js', [], $ver, true);
    wp_register_script('invm_script_js', $uri . '/js/scripts.js', [], $ver, true);
    wp_register_script('invm_selectInput_js', $uri . '/js/selectinput.js', [], $ver, true);
    wp_register_script('invm_dynamic_js', $uri . '/js/dynamic.js', [], $ver, true);

    // Register Scripts
    wp_enqueue_script('invm_jQuery');
    wp_enqueue_script('invm_popper');
    wp_enqueue_script('invm_bootstrap_js');
    wp_enqueue_script('invm_bxslider_js');
    wp_enqueue_script('invm_script_js');
    wp_enqueue_script('invm_selectInput_js');
    wp_enqueue_script('invm_dynamic_js');

}

/*

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="dist/bootstrap/js/bootstrap.min.js"></script>
<script src="dist/bxslider/jquery.bxslider.min.js"></script>
<script src="js/scripts.js"></script>

// For Conact Page
<script src="js/selectinput.js"></script>
 */

/*

<link
rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
/>
<link
href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900"
rel="stylesheet"
/>
<link
href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900"
rel="stylesheet"
/>
<link
href="https://fonts.googleapis.com/css?family=Red+Hat+Display:400,500,500i,700,900&display=swap"
rel="stylesheet"
/>
<link rel="stylesheet" href="dist/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" href="dist/bxslider/jquery.bxslider.css" />
<link rel="stylesheet" href="css/style.css" />

 */

/*
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="dist/bootstrap/js/bootstrap.min.js"></script>
<script src="dist/bxslider/jquery.bxslider.min.js"></script>
<script src="js/scripts.js"></script>
 */
