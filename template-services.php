<?php
/**
 * The template for displaying Home page
 *
 * Template Name: Services
 *
 *
 *
 * @package invm
 */

get_header();

$i = 0;
$taxonomy = 'services';
$services = get_terms($taxonomy, array( 'parent' => 0, 'orderby' => 'term_id', 'hide_empty' => false ));

?>

<div class="contaienr-fluid servicer-header-container contactus-header">
        <div class="container">
            <div class="row">
                <div class="col-12 banner-info-col">
                        <div class="d-flex flex-column">
                                <h2 class="service-header-heading"><?php the_title(); ?>.</h2>
                                <p class="contactus-subtitle ourwork-subtitle">Services to put you in perspective with success.
                                    Find your right approach & partners here.</p>
                           </div>
                </div>
            </div>

         </div>
    </div><!-- ending of container-fluid-->


  <div class="container-fluid services-container-fluid">
    <div class="container ">
<?php 
    foreach($services as $service){
        $id =              $service->term_id;
        $image_id =        get_term_meta ( $id, 'category-image-id', true );
        $name =            $service->name;
        $description =     $service->description;
        $image =           wp_get_attachment_url($image_id);
    
        if($i%2 == 0){
?>
            <div class="row  d-flex justify-content-center">
                <div class="col-lg-4 col-12 services-col-1">
                    <img src="<?php echo $image; ?>" alt="logo"  class="align-self-center img-fluid services-img">
                </div>
                <div class="col-lg-6 col-12 services-row-1 d-flex justify-content-center flex-column">
                    <h2 class="services-title"><?php echo $name; ?></h2>
                    <p class="services-content"><?php echo substr($description, 0, 400); ?>…</p>
                    <a  class="learn-more" href="<?php echo get_category_link($id); ?>">Learn more</a>
                </div>
            </div>
<?php }else{ ?>
            <div class="row  d-flex justify-content-center">
                <div class="col-lg-6 services-row-2 order-lg-1 order-2 col-12 d-flex justify-content-center flex-column">
                    <h2 class="services-title"><?php echo $name; ?></h2>
                    <p class="services-content"><?php echo substr($description, 0, 400); ?>…</p>
                    <a  class="learn-more" href="<?php echo get_category_link($id); ?>">Learn more</a>
                </div>
                <div class="col-lg-4 services-col-2 order-lg-2 order-1 col-12">
                        <img src="<?php echo $image; ?>" alt="logo"  class="img-fluid  align-self-center services-img">
                </div>
            </div>
<?php }
 $i++; 
 } 
 ?>
    </div>
  </div><!-- services-container-fluid -->


<?php
get_footer();
