<?php

/**
 * Template Name: Contact Page
 */
/**
 * 
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package EPRG-PPP
 */

get_header();
?>

	<main id="primary" class="site-main">

	<section class="banner">
		<div class="container">
			<div class="row">
				<div class="col-12 text-center">
					<h3>contact us</h3>
				</div> <!-- column -->
			</div> <!-- row -->
		</div> <!-- container -->
	</section> <!-- banner -->

	<!-- End Banner Section -->

	<section class="contact-form">
		<div class="container">
			<div class="col-12">
				<div class="title text-center">
					<h2>Get in Touch</h2>
				</div> <!-- title -->
			</div> <!--column -->

			<div class="row">
			<div class="col-lg-6 col-md-12 col-sm-12">
				<div class="form">
					<h4>Get in Touch</h4>
					<div class="form-box">
						<?php echo do_shortcode('[contact-form-7 id="10" title="Contact form 1"]'); ?>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-12 col-sm-12">
				<div class="row">
					<div class="col-sm-12">
						<div class="form-info">
							<h4>Contact Info</h4>
							<div class="info-box">
                                <div>
                                    <span><i class="bi bi-pin-map"></i></span>
                                    <p>
										Office of the Secretary, Economic planning, Revenue Generation & PPP Block A Room 001/002 top Floor.
									</p>

                                </div>

                                <div>
                                    <span><i class="bi bi-pin-map"></i></span>
                                    <p>
										Federal Capital Territory Administration Secretariat 1, Kapital Road Area 11 Garki-Abuja.
									</p>  
                                </div>
                            </div>
						</div>
					</div>
					<div class=" col-sm-12">
					<div class="contact-map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3940.194140505844!2d7.50016361427658!3d9.046048391213727!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104e0b95574c2b75%3A0xcc2d627a8b826c3d!2sFederal%20Capital%20Territory%20Administration!5e0!3m2!1sen!2sng!4v1647739650997!5m2!1sen!2sng" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy">
						</iframe>
                        </div>
					</div>
				</div>
			</div>
			</div> <!--contact row -->
		</div> <!-- container -->
	</section> <!-- contact-form -->
		

	</main><!-- #main -->

<?php

get_footer();
