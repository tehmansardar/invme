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

?>

<div class="contaienr-fluid servicer-header-container contactus-header">
        <div class="container">
            <div class="row">
                <div class="col-12 banner-info-col">
                        <div class="d-flex flex-column">
                                <h2 class="service-header-heading">Our Work.</h2>
                                <p class="contactus-subtitle ourwork-subtitle">We design and develop software for venture-backed startups, growing businesses, and established brands.</p>
                           </div>
                </div>
            </div>

         </div>
    </div><!-- ending of container-fluid-->


  <div class="container-fluid projects-container">
      <div class="container">
        <div class="d-flex flex-row flex-wrap  justify-content-center">
            <div class="d-flex flex-column project-box negricase-proj">
                 <h2 class="project-heading">Negricases</h2>
                 <p class="project-detail">Expand to become a trustworthy and highly recognised name in the music industry.</p>
                 <img class=" align-self-center project-img " src="<?php echo get_template_directory_uri(); ?>/Images/negricases-thumb.png">
             </div>
             <div class="d-flex flex-column project-box stylewithcandy-proj">
                <h2 class="project-heading">Style With Cindy</h2>
                <p class="project-detail">Australia’s foremost personal stylists and makeover expert</p>
                <img class=" align-self-center project-img " src="<?php echo get_template_directory_uri(); ?>/Images/style-with-cindy-thumb.png">
            </div>
             <div class="d-flex flex-column project-box styling-proj">
                 <h2 class="project-heading">Professional Styling Academy</h2>
                 <p class="project-detail">Professional styling academy provides professional style courses to people.</p>
                 <img class=" align-self-center project-img " src="<?php echo get_template_directory_uri(); ?>/Images/professional-styling-academy-thumb.png">
             </div>
             <div class="d-flex flex-column project-box hourstyle-proj">
                <h2 class="project-heading">HourStyle</h2>
                <p class="project-detail">A Singapore registered innovative wall
                    clock company</p>
                <img class=" align-self-center project-img " src="<?php echo get_template_directory_uri(); ?>/Images/professional-styling-academy-thumb.png">
            </div>
            <div class="d-flex flex-column project-box socially-proj">
                <h2 class="project-heading">Socially Smitten</h2>
                <p class="project-detail">We grow businesses through custom web design and digital marketing plans.</p>
                <img class=" align-self-center project-img " src="<?php echo get_template_directory_uri(); ?>/Images/socially-smitten-thumb.png">
            </div>

            <div class="d-flex flex-column project-box project-box2 canvastco-proj">
                <h2 class="project-heading">Canvastco</h2>
                <p class="project-detail">We make Kick-Ass Dateless Planners for
                    Boss-Women</p>
                <img class="align-self-center project-img " src="<?php echo get_template_directory_uri(); ?>/Images/canvastco-thumb.png">
            </div>
            <div class="d-flex flex-column project-box helihobby-proj ">
                <h2 class="project-heading">Helihobby</h2>
                <p class="project-detail">We grow businesses through custom web design and digital marketing plans.</p>
                <img class="align-self-center project-img " src="<?php echo get_template_directory_uri(); ?>/Images/helihobby-thumb.png">
            </div>
            <div class="d-flex flex-column project-box sunwatersolar-proj">
                <h2 class="project-heading">SunWater Solar</h2>
                <p class="project-detail">A simple, clean, easy to use solution delivering high performance for low variable occupancy.</p>
                <img class="align-self-center project-img " src="<?php echo get_template_directory_uri(); ?>/Images/sun-water-solar-thumb.png">
            </div>
            <div class="d-flex flex-column project-box rimacinstallations-proj">
                <h2 class="project-heading">Rimacinstallations</h2>
                <p class="project-detail">Rimac Storage Systems is a Queensland based, privately owned company</p>
                <img class="align-self-center project-img " src="<?php echo get_template_directory_uri(); ?>/Images/rimacinstallations-thumb.png">
            </div>
        </div>
      </div>
  </div>


<?php
get_footer();
