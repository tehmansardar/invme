<?php
/**
 * The template for displaying Home page
 *
 *
 * @package invm
 */

get_header();

         $service = get_queried_object();

         $id             =     $service->term_id;
         $image_id       =     get_term_meta ( $id, 'category-image-id', true );
         $name           =     $service->name;
         $description    =     $service->description;
         $image          =     wp_get_attachment_url($image_id);



/**
 * ===========================
 *    RECENT POSTS
 * ===========================
 */

$category = $service->slug;        
$args=array( 'post_type'        =>'invm-projects',
               'posts_per_page'   =>'2',
               'post_status'      =>'publish',
               'order'            => 'DESC',
               'tax_query'        => array(
                                       array(
                                       'taxonomy' => 'services',
                                       'field'    => 'slug',
                                       'terms'    => explode(",",$category),
                                       ),
                                       )
            );

      $query  = new WP_Query($args);
      // var_dump($query);

?>

<div class="contaienr-fluid servicer-header-container">
        <div class="container">
                <div class="row">
                        <div class="col-12 banner-info-col">
                                <div class="d-flex flex-row">
                                        <h2 class="service-header-heading"><?php echo $name; ?></h2>
                                   </div>
                        </div>
                </div>
         </div>
    </div><!-- ending of container-fluid-->

    <div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-end">
                <img class="align-self-center service-img" src="<?php echo $image; ?>">
            </div>
        </div>
    </div>
    </div>

    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-12">
                    <?php echo $description; ?>
                    </div>
            </div>
        </div>
    </div>
<?php 
if($query->have_posts()){
?>
   <div class="container-fluid">
       <div class="container">
           <div class="row">
               <div class="col-12">
                    <h2 class="service-content-heading">Recent projects</h2>
               </div>
           </div>
           <div class="d-flex flex-row flex-wrap justify-content-lg-start justify-content-center">
<?php
   
      while($query->have_posts()){
         $query->the_post();        
?>
               <div class="d-flex flex-column project-box">
                    <h2 class="project-heading"><?php echo get_the_title(); ?></h2>
                    <p class="project-detail"><?php echo get_the_excerpt(); ?></p>
                    <img class="project-img align-self-center" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())); ?>">
                </div>
<?php  }?>         
           </div>
       </div>
   </div>
<?php
}
get_footer();
