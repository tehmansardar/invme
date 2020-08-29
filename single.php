<?php
/**
 * The template for displaying Home page
 *
 *
 * @package invm
 */

get_header();

?>

<div class="contaienr-fluid servicer-header-container">
        <div class="container">
                <div class="row">
                        <div class="col-12 banner-info-col">
                                <div class="d-flex flex-row">
                                        <h2 class="service-header-heading">Web Design</h2>
                                   </div>
                        </div>
                </div>
         </div>
    </div><!-- ending of container-fluid-->

    <div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-end">
                <img class="align-self-center service-img" src="<?php echo get_template_directory_uri(); ?>/Images/web-design-service.png">
            </div>
        </div>
    </div>
    </div>

    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-12">
                    <p class="service-content">A website with a clear, compelling web design and engaging content goes a long way in adding credibility and awareness for your brand or company. Web design matters. It achieves far wider results for your business and brand than it is given credit for. While aesthetics are an important factor, good web design encompasses far more. It is a significant marketing tool which defines your brand or business and should weigh heavily during your marketing forays.</p>
                    <h2 class="service-content-heading">
                            The importance of Web Design.
                    </h2>
                    <p class="service-content">Quite simply, having an online presence for your business or even revamping your weathered, outdated website will have a profound impact on your brand presence and conversion rates that equates to sales. There are countless studies which attest to the fact that the key to aggressive expansion for a start-up besides a business plan and a viable product or service, is a strong web presence. A well designed website can be the making of a successful business. The importance of good web design, cannot be understated and this is precisely where our team of experts shine tailoring a comprehensive web-design solution. One that your company or brand is deserving of.</p>
                    <h2 class="service-content-heading">What we offer.</h2>
                    <p class="service-content">Our industry-leading services will ensure that your customers will want to foray through your website. We’ll help ensure that they pick up quick cues about your products and services. With the advent of technology telling in today’s connected world, your company’s presence across various devices and platforms is entirely essential. Our specialized team has skillsets to help replicate the content and design from your website in seamlessly bringing it to tablets and smartphones, which are quickly outnumbering desktops and laptops with how people (your potential customers) connect to the internet.
                       <br> <br>Our expert team includes web designers and developers, content strategists who liaison with our copywriters and an SEO expert to help your website stand out among your competitors.</p>

                    </div>
            </div>
        </div>
    </div>
   <div class="container-fluid">
       <div class="container">
           <div class="row">
               <div class="col-12">
                    <h2 class="service-content-heading">Recent projects</h2>
               </div>
           </div>
           <div class="d-flex flex-row flex-wrap justify-content-lg-start justify-content-center">
               <div class="d-flex flex-column project-box">
                    <h2 class="project-heading">Socially Smitten</h2>
                    <p class="project-detail">We grow businesses through custom web design and digital marketing plans.</p>
                    <img class="project-img align-self-center" src="<?php echo get_template_directory_uri(); ?>/Images/project-1.png">
                </div>
                <div class="d-flex flex-column project-box project-box2">
                    <h2 class="project-heading">Socially Smitten</h2>
                    <p class="project-detail">We grow businesses through custom web design and digital marketing plans.</p>
                    <img class="project-img align-self-center" src="<?php echo get_template_directory_uri(); ?>/Images/project-1.png">
                </div>
           </div>
       </div>
   </div>

<?php
get_footer();
