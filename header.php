<?php

/*
This is the template for the hedaer

@package invm
 */

?>
<!DOCTYPE html>
<html <?php language_attributes();?>>
	<head>
		<title><?php bloginfo('name');
wp_title();?></title>
		<meta name="description" content="<?php bloginfo('description');?>">
		<meta charset="<?php bloginfo('charset');?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php if (is_singular() && pings_open(get_queried_object())): ?>
			<link rel="pingback" href="<?php bloginfo('pingback_url');?>">
		<?php endif;?>
		<?php wp_head();?>

	</head>

<body <?php body_class();?>>

<div class="container-fluid">
                <div class="container header-navigation">
                    <div class="row">
                        <div class="col-lg-3 col-6  order-1 d-flex align-items-center justify-content-start ">
                            <a href="<?php bloginfo('url');?>"><img src="<?php echo get_template_directory_uri(); ?>/Images/inventive_media_logo.png" alt="logo" height="64" width="153" class="logoImg align-self-center"></a>
                        </div>
                        <div class="col-lg-5 col-12 navbar-wrapper order-2 d-flex justify-content-end">

                          <nav class="navbar navbar-expand-lg navbar-light">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                  <span class="navbar-toggler-icon"></span>
                                </button>

                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                  
                                <?php
                                    wp_nav_menu( [
                                        'theme_location' => 'header',
                                        'container' => false,
                                        'menu_class' => 'subfooter-list align-self-center',
                                        'list_item_class'  => 'nav-item',
                                        // 'link_class'   => 'nav-link',
                                        'link_after'           => '<span class="bordergradiant "></span>',
                                        // 'walker' => new Sunset_Walker_Nav_Primary
                                    ] );
                                ?>

                                  <!-- <ul class="navbar-nav mr-auto">
                                    <li class="nav-item ">
                                      <a class="nav-link " href="index.html">
                                        Home
                                        <span class="bordergradiant "></span>
                                      </a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link " href="#">Services
                                          <span class="bordergradiant "></span>
                                      </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link " href="ourWork.html">Our Work
                                            <span class="bordergradiant "></span>
                                        </a>
                                      </li>
                                      <li class="nav-item">
                                        <a class="nav-link " href="contactUs.html">Contact US
                                            <span class="bordergradiant "></span>
                                        </a>
                                      </li>
                                  </ul> -->

                                </div>
                              </nav>
                        </div>
                        <div class="col-lg-4 get-a-quote-section col-12 order-lg-2 order-3 d-flex flex-row justify-content-lg-end">
                          
                        <?php if( get_theme_mod( 'invm_phone_number' ) ){ ?>

                              <div class="d-flex flex-row flex-wrap flex-fill  justify-content-lg-end justify-content-start">
                                <img src="<?php echo get_template_directory_uri(); ?>/Images/call.png" alt="call" class="align-self-center">
                                <p class="call-txt"><?php echo get_theme_mod( 'invm_phone_number' ); ?></p>
                              </div>
                        <?php } ?>
                              <div class="d-flex flex-row flex-fill justify-content-lg-start justify-content-end ">
                                <a class="get-quote" href="#">Get a Quote</a>
                              </div>


                        </div>
                    </div>
                </div><!-- ending of header-navigation-->
            </div><!-- ending of container-fluid-->