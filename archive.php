<?php
/**
 *
 *
 *
 *
 * @package invm
 */

get_header();

?>

<div class="contaienr-fluid servicer-header-container contactus-header">
        <div class="container">
            <div class="row">
                <div class="col-12 banner-info-col">
                        <div class="d-flex flex-column">
                                <h2 class="service-header-heading"><?php the_archive_title(); ?>.</h2>                           </div>
                </div>
            </div>

         </div>
    </div><!-- ending of container-fluid-->


  <div class="container-fluid projects-container">
      <div class="container">
        <div class="d-flex flex-row flex-wrap  justify-content-center">
<?php
        if(have_posts()){
            while(have_posts()){
                the_post();
?>  
        
            <div class="d-flex flex-column project-box">
                 <h2 class="project-heading"><a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
                 <p class="project-detail"><?php echo get_the_excerpt(); ?></p>
                 <img class=" align-self-center project-img " src="<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())); ?>">
             </div>

<?php } } ?>           
        </div>
      </div>
  </div>


<?php
get_footer();
