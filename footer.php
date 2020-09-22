<?php

/*
This is the template for the footer

@package invm

 */

$taxonomy = 'services';
$services = get_terms($taxonomy, array( 'parent' => 0, 'orderby' => 'term_id', 'hide_empty' => false ));

?>

<div class="container-fluid contact-us-container">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-12">
                    <h2 class="common-heading contactus-heading text-lg-left text-center">Let's craft
                            brilliance together!</h2>
                </div>
                <div class="col-lg-5 col-12 d-flex  flex-row justify-content-lg-end justify-content-center align-self-center">
                        <a class="get-quote" href="<?php echo home_url( '/contact/' ); ?> ">Contact us</a>
                </div>

            </div>
            <div class="radian-container contactus-gradian">
                </div><!-- ending of radian-container-->
        </div>
    </div>
    <div class="container-fluid footer-contaienr">
        <div class="container">
            <div class="row">
<?php
    foreach($services as $service){
        $id = $service->term_id;
        $name = $service->name;
    
    // Chile Services
    $childServices = get_terms($taxonomy, array( 'parent' => $id, 'orderby' => 'term_id', 'hide_empty' => false ));
        
        // $link = get_category_link($id); 
?>
                <div class="col-md-3 col-sm-6 col-12">
                    <p class="footer-heading"><?php echo $name; ?></p>
                    <ul class="footer-list">
<?php
    foreach($childServices as $childService){
        $childId = $childService->term_id;
        $childName = $childService->name;
        $childLink = get_category_link($childId);
?>
                        <li><a href="<?php echo $childLink; ?>" class="footer-content"><?php echo $childName; ?></a></li>
<?php
}
?>
                        <!-- <li><a href="#" class="footer-content">Logo Design</a></li>
                        <li><a href="#" class="footer-content">Graphic Design</a></li>
                        <li><a href="#" class="footer-content">Mobile Apps Design</a></li>
                        <li><a href="#" class="footer-content">Landing Page Design</a></li> -->
                    </ul> 
                </div>
<?php } ?>
                <!-- <div class="col-md-3 col-sm-6 col-12">
                        <p class="footer-heading">Web development</p>
                        <ul class="footer-list">
                            <li><a href="#" class="footer-content">NET Development</a></li>
                            <li><a href="#" class="footer-content">PHP Development</a></li>
                            <li><a href="#" class="footer-content">E-commerce Integration</a></li>
                            <li><a href="#" class="footer-content">API & Web Services</a></li>
                            <li><a href="#" class="footer-content">Dedicated Resource</a></li>
                        </ul>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                        <p class="footer-heading">App development</p>
                        <ul class="footer-list">
                            <li><a href="#" class="footer-content">Iphone Ipad Development</a></li>
                            <li><a href="#" class="footer-content">Android Development</a></li>
                            <li><a href="#" class="footer-content">Blackberry Development</a></li>
                            <li><a href="#" class="footer-content"> Windows App Development</a></li>
                        </ul>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                        <p class="footer-heading">Digital Marketing</p>
                        <ul class="footer-list">
                            <li><a href="#" class="footer-content">SEO</a></li>
                            <li><a href="#" class="footer-content">PPC</a></li>
                            <li><a href="#" class="footer-content"> Social Media Marketing</a></li>

                        </ul>
                </div> -->
            </div><!-- ending of row -->
            <div class="d-flex flex-row flex-wrap detail-row">

            <?php if( get_theme_mod( 'invm_address' ) ){ ?>

                <div class="d-flex flex-row">
                    <img src="<?php echo get_template_directory_uri(); ?>/Images/location.png" class="align-self-center">
                    <p class="detail-content align-self-center"><?php echo get_theme_mod( 'invm_address' ); ?></p>
                </div>

            <?php } if( get_theme_mod( 'invm_email' ) ){ ?>

                <div class="d-flex flex-row detail-inner-row">
                        <img src="<?php echo get_template_directory_uri(); ?>/Images/email.png" class="align-self-center">
                        <p class="detail-content align-self-center"><?php echo get_theme_mod( 'invm_email' ); ?></p>
                </div>

            <?php } if( get_theme_mod( 'invm_phone_number' ) ){ ?>

                <div class="d-flex flex-row detail-inner-row">
                        <img src="<?php echo get_template_directory_uri(); ?>/Images/phone.png" class="align-self-center">
                        <p class="detail-content align-self-center"><?php echo get_theme_mod( 'invm_phone_number' ); ?></p>
                </div>
            
            <?php }?>
            
            </div>

        </div>
    </div><!--ending of container-fluid -->
    <div class="container-fluid subfooter-container">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-12 order-lg-1 order-2">
                    <div class="d-flex flex-row flex-wrap justify-content-lg-start justify-content-center">
                        <div class="submenu d-flex flex-row flex-wrap justify-content-lg-start">
                        <img src="<?php echo get_template_directory_uri(); ?>/Images/inventive-footer-logo.png" class="align-self-center">
                        <!-- <ul class="subfooter-list align-self-center">
                            <li><a href="service.html">Service</a></li>
                            <li>::</li>
                            <li><a href="ourWork.html">Our Work</a></li>
                            <li>::</li>
                            <li><a href="contactUs.html">Contact Us</a></li>
                        </ul> -->

<?php
    wp_nav_menu( [
        'theme_location' => 'footer',
        'container' => false,
        'menu_class' => 'subfooter-list align-self-center',
        // 'walker' => new Sunset_Walker_Nav_Primary
    ] );
?>

                        </div>
                    <?php if( get_theme_mod( 'invm_copyright' ) ){ ?>
                        <p class="subfooter-content align-self-center">
                                <?php echo get_theme_mod( 'invm_copyright' ); ?>
                        </p>
                    <?php } ?>
                    </div>
                </div>
                <div class="col-lg-5 col-12 order-lg-2 order-1">
                    <div class="d-flex flex-row flex-wrap justify-content-lg-end justify-content-center">
                    <?php if( get_theme_mod( 'invm_facebook_handle' ) ){ ?>
                        <a href="https://facebook.com/<?php echo get_theme_mod( 'invm_facebook_handle' ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/Images/facebook.png" class="align-self-center socialmedia-icon"></a>
                    <?php } if( get_theme_mod( 'invm_instagram_handle' ) ){ ?>
                        <a href="https://instagram.com/<?php echo get_theme_mod( 'invm_instagram_handle' ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/Images/instagram.png" class="align-self-center socialmedia-icon"></a>
                    <?php } if( get_theme_mod( 'invm_twitter_handle' ) ){ ?>
                        <a href="https://twitter.com/<?php echo get_theme_mod( 'invm_twitter_handle' ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/Images/twitter.png" class="align-self-center socialmedia-icon"></a>
                    <?php } if( get_theme_mod( 'invm_linkedin_handle' ) ){ ?>
                        <a href="https://linkedin.com/<?php echo get_theme_mod( 'invm_linkedin_handle' ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/Images/linked-in.png" class="align-self-center socialmedia-icon"></a>
                    <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php wp_footer();?>
</body>
</html>