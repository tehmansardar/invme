<?php
/**
 * The template for displaying Home page
 *
 * Template Name: Our Work
 *
 *
 *
 * @package invm
 */

get_header();

$args = [
    'post_type'             =>   'invm-projects',
    'no_found_rows'         =>   true,
    'posts_per_page'        =>   -1,
    'order'                 =>   'DESC',
];

$query = new WP_Query($args);


?>

<div class="contaienr-fluid servicer-header-container contactus-header">
        <div class="container">
            <div class="row">
                <div class="col-12 banner-info-col">
                        <div class="d-flex flex-column">
                                <h2 class="service-header-heading"><?php the_title(); ?>.</h2>
                                <p class="contactus-subtitle ourwork-subtitle">We design and develop software for venture-backed startups, growing businesses, and established brands.</p>
                           </div>
                </div>
            </div>

         </div>
    </div><!-- ending of container-fluid-->


  <div class="container-fluid projects-container">
      <div class="container">
        <div class="d-flex flex-row flex-wrap  justify-content-center">
<?php
        if($query->have_posts()){
            while($query->have_posts()){
                $query->the_post();
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
