<?php
/**
 * The template for displaying Home page
 *
 * Template Name: Contact Us
 *
 *
 *
 * @package invm
 */

get_header();

?>

<div class="container-fluid form-container">
       <div class="container">
           <div class="row">
               <div class="col-lg-6 col-12">
                <form id = 'invmContactForm' action="#" method="post" enctype="multipart/form-data" data-url="<?php echo admin_url('admin-ajax.php'); ?>" >
                    <p class="section-heading">About you</p>
                    <div class="form-group contact-form-group">

                            <input class="inputfield" id="name" type="text" name="name" required data-parsley-pattern="^[a-zA-Z ]+$" data-parsley-trigger="keyup">
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label class="inputlabel">Name</label>

                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-12">
                                <div class="form-group contact-form-group">

                                        <input class="inputfield" id="email" type="text" name="email" required data-parsley-type="email" data-parsley-trigger="keyup">
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label class="inputlabel">Email Address</label>

                                </div>
                        </div>
                        <div class="col-sm-6 col-126">
                                <div class="form-group contact-form-group">

                                        <input class="inputfield" id="phone" type="text" name="phone" required data-parsley-pattern="^[\d\+\-\.\(\)\/\s]*$"  data-parsley-trigger="keyup">
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label class="inputlabel">Phone Number</label>

                                </div>
                        </div>
                    </div>
                    <div class="form-group contact-form-group">

                            <input class="inputfield" id="about" type="text" name="about" required data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="200" data-parsley-minlength-message="Come on! You need to enter at least a 20 character about you.." data-parsley-validation-threshold="10">
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label class="inputlabel">Tell us about you</label>

                    </div>
                    <p class="section-heading">About your project</p>
                    <div class="form-group contact-form-group">

                            <input class="inputfield" id="project" type="text" name="project" required data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="1000" data-parsley-minlength-message="Come on! You need to enter at least a 20 character about project.." data-parsley-validation-threshold="10">
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label class="inputlabel">Tell us about your project.</label>

                    </div>
                    <div class="form-group contact-form-group">

                            <input class="inputfield" id="deadlines" type="text" name="deadlines"  required data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 character about dealines.." data-parsley-validation-threshold="10">
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label class="inputlabel">What are your deadlines?</label>

                    </div>
                    <!-- <p class="section-heading">What is your project type?</p> -->

                    <!-- <div class="row project-type-row">
                        <div class="col-lg-4 col-6">
                        <div class="form-check contactus-checkbox">
                                <label class="checkbox-label">UI/UX Design
                                        <input type="checkbox" class="checkboxes">
                                        <span class="checkmark"></span>
                                      </label>
                        </div>
                    </div>
                    <div class="col-lg-4 col-6">
                        <div class="form-check contactus-checkbox">
                                <label class="checkbox-label">iOS app
                                        <input type="checkbox" checked="checked">
                                        <span class="checkmark"></span>
                                      </label>
                            </div>
                        </div>
                        <div class="col-lg-4 col-6">
                            <div class="form-check contactus-checkbox">
                                    <label class="checkbox-label">Android app
                                            <input type="checkbox" >
                                            <span class="checkmark"></span>
                                          </label>
                                </div>
                                </div>
                                <div class="col-lg-4 col-6">
                                <div class="form-check contactus-checkbox pl-0">
                                        <label class="checkbox-label">Web
                                                <input type="checkbox" >
                                                <span class="checkmark"></span>
                                              </label>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-6">
                                    <div class="form-check contactus-checkbox">
                                            <label class="checkbox-label">IoT project
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                  </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-6">
                                        <div class="form-check contactus-checkbox">
                                                <label class="checkbox-label">Other
                                                        <input type="checkbox" >
                                                        <span class="checkmark"></span>
                                                      </label>
                                            </div>
                                        </div>
                    </div> -->
                    <p class="section-heading">What is your budget?</p>
                    <div class="d-flex flex-row custom-select" >

                            <select id="amount" name="amount" class="amount" required>
                              <option value="0">Choose amount</option>
                              <option value="$5000-$4000">$5000-$4000</option>
                              <option value="$4000-$3000">$4000-$3000</option>
                              <option value="$2000-$1000">$2000-$1000</option>

                            </select>
                    </div>

                    <div class="d-flex flex-row attachment-section justify-content-center" onclick="document.getElementById('attachment').click()" style="cursor:pointer;">
                                <input type="file" name="attachment[]" id="attachment" multiple style="position:absolute; visibility:hidden;"/>
                            <img src="<?php echo get_template_directory_uri(); ?>/Images/attachment.png" class="align-self-center">
                            <p class="attachment-txt">Attach any files you feel would be useful</p>

                    </div>
                    <div class="form-check contactus-checkbox term-checkbox">
                            <label class="checkbox-label term-label">I understand the information above will be stored only for business purposes. Check our <span><a href="#" class="orange-txt">Privacy Policy</a></span> for more info.
                                    <input type="checkbox" name="checkbox" id="checkbox" required >
                                    <span class="checkmark"></span>
                                  </label>
                        </div>

                            <button type="submit" name="submit" id="submit" class="get-quote ml-0">Get a quote</button>

                  </form>
                <br />
                <div class="notify hide">
                 <p id="notify-message" ></p>
                 </div>
               </div>
               <div class="col-lg-6 col-12 map-col">
                    <div class="map-section d-flex flex-column align-items-center">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3538.0132851769686!2d153.06985701505823!3d-27.53104638286525!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b915b1a5d3c6ee1%3A0x5e581b09b36d5a2e!2s2%2F24%20Lencol%20St%2C%20Mount%20Gravatt%20QLD%204122%2C%20Australia!5e0!3m2!1sen!2sin!4v1585046694525!5m2!1sen!2sin" width="100%" class="contact-form-iframe" height="320" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>


                    </div>
                    <div class="d-flex justify-content-center">
                    <div class="radian-container map-radian">
                        </div><!-- ending of radian-container-->
                    </div>
                    <div class="d-flex flex-column align-items-center ">
                        <div class="map-details">
                <?php if( get_theme_mod( 'invm_email' ) ){ ?>
              
                        <div class="d-flex flex-row contactus-detail-row">
                            <img src="<?php echo get_template_directory_uri(); ?>/Images/email_contactus.png" class="align-self-center">
                            <p class="detail-content  contactus-detail-content "><?php echo get_theme_mod( 'invm_email' ); ?></p>
                        </div>
              
                <?php } if( get_theme_mod( 'invm_phone_number' ) ){ ?>
              
                            <div class="d-flex flex-row">
                                <img src="<?php echo get_template_directory_uri(); ?>/Images/phone_contactus.png" class="align-self-center">
                                <p class="detail-content contactus-detail-content "><?php echo get_theme_mod( 'invm_phone_number' ); ?></p>
                            </div>
              
                <?php } ?>
              
                        </div>
                    </div>
               </div>
           </div>
       </div>
   </div>

<?php
get_footer();
