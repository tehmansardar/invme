<?php
/**
 * The template for displaying Home page
 *
 *
 * @package invm
 */

get_header();

                if( have_posts() ){
                    while( have_posts() ){
                        the_post();

?>

<div class="contaienr-fluid servicer-header-container">
        <div class="container">
                <div class="row">
                        <div class="col-12 banner-info-col">
                                <div class="d-flex flex-row">
                                        <h2 class="service-header-heading"><?php the_title(); ?></h2>
                                </div>
                        </div>
                </div>
         </div>
    </div><!-- ending of container-fluid-->

    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex justify-content-end">
                    <img class="align-self-center service-img" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())); ?>">
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-12">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>

<?php
    } }
get_footer();
