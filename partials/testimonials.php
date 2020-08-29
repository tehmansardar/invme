<?php

$review = $author = '';

$args = array(
    'post_type' => 'invm-testimonials',
    'no_found_rows' => true,
    'posts_per_page' => -1,
);
$testiMonialQuery = new WP_Query($args);

if ($testiMonialQuery->have_posts()) {
    while ($testiMonialQuery->have_posts()) {

        $testiMonialQuery->the_post();

        $review .= '<div><p>' . get_the_content() . '</p></div>';
        // $picture .= wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
        // $authority .= get_post_meta(get_the_ID(), '_testimonials_authority_value_key', true);
        $about .= '

        <a href="#" class="">
            <div class="d-flex flex-column person-box">
                <div class="d-flex flex-row">
                    <img class="align-self-center" src=' . wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())) . ' />
                    <div
                        class="d-flex flex-column client-detail justify-content-center"
                    >
                        <p class="client-name">' . get_the_title() . '</p>
                        <p class="client-designation">' . get_post_meta(get_the_ID(), '_testimonials_authority_value_key', true) . '</p>
                    </div>
                </div>

                <span class="bordergradiant"></span>
            </div>
        </a>

        ';

    }
    wp_reset_postdata();

}

?>
<div class="container-fluid testimonial-container">
			<div class="container testimonial-innercontainer">
				<div class="row">
					<div class="offset-lg-2 col-lg-7 col-12">
						<div class="testimonials">
                            <?php echo $review; ?>
						</div>
					</div>
				</div>
				<div class="row client-name-row">
					<div
						class="offset-lg-2 col-lg-10 testimonial-persons col-12 d-flex flex-row"
					>
						<!-- <a href="#" class="active">
							<div class="d-flex flex-column person-box">
								<div class="d-flex flex-row">
									<img class="align-self-center" src="./Images//avtar.png" />
									<div
										class="d-flex flex-column client-detail justify-content-center"
									>
										<p class="client-name">Sarah Wallace</p>
										<p class="client-designation">Google CEO</p>
									</div>
								</div>

								<span class="bordergradiant"></span>
							</div>
						</a> -->
                        <?php echo $about; ?>
						<!-- <a href="#" class="">
							<div class="d-flex flex-column person-box">
								<div class="d-flex flex-row">
									<img class="align-self-center" src="./Images//avtar.png" />
									<div
										class="d-flex flex-column client-detail justify-content-center"
									>
										<p class="client-name">Dominic Underwood</p>
										<p class="client-designation">Head of Wordpress</p>
									</div>
								</div>

								<span class="bordergradiant"></span>
							</div>
						</a> -->
					</div>
				</div>
			</div>
		</div>
		<!-- ending of testimonial-container-->