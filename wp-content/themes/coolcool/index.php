<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package coolcool
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<aside class="main-block-with-photo">
			<div class="main-info">
				<p class="title-text">uk's best essay for you online</p>
				<p class="description-text one">Your ultimate source of affordable UK essays, professional academic writers, and 100% customer satisfaction.</p>
				<p class="description-text two">We know exactly how to write a perfect paper!</p>
				<button class="green-button">try service with 15% discount<span class="star">*</span></button>
				<p class="small-detail">*Discount is valid for 1st order only</p>
			</div>

			<div class="four-icons-block">
				<div class="four-icons-block_aligning">
					<div class="one-block-icon">
						<img src="<?php echo bloginfo('template_url'); ?>/images/2.png">
						<p class="icon-title">fast <br> and reliable</p>
						<p>We have short deadlines available, thus you can get your paper as fast as in couple hours. We never make promises we cannot keep.</p>
					</div>
					<div class="one-block-icon">
						<img src="<?php echo bloginfo('template_url'); ?>/images/3.png">
						<p class="icon-title">premium <br> essay quality</p>
						<p>Our writers are the best among the rest of essay writers in this industry. Our years of writing experience and expertise have helped clients attain academic excellence.</p>
					</div>
					<div class="one-block-icon">
						<img src="<?php echo bloginfo('template_url'); ?>/images/4.png">
						<p class="icon-title">exceptional <br> customer support</p>
						<p>We have support team available 24/7 to give you updates on your paper or to respond to your inquiries. Contact us to experience our exceptional dedication to your satisfaction.</p>
					</div>
					<div class="one-block-icon">
						<img src="<?php echo bloginfo('template_url'); ?>/images/5.png">
						<p class="icon-title">client <br> protection</p>
						<p>Privacy and confidentiality are our top priority. Your transaction with us is safe and secure. Money-back is guaranteed, as we are confident that every work we do will exceed your expectationss.</p>
					</div>
				</div>
			</div>
		</aside>
		<aside>
			<div class="standart-description_align">
				<p class="main-title">your title text here</p>
				<p class="regular-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				<div class="block-with-image">
					<img src="<?php echo bloginfo('template_url'); ?>/images/college-students.png">
					<div class="block-with-buttons">
						<p class="regular-text regular-text2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
						<div class="two-buttons">
							<button class="green-button">order now</button>
							<button class="transparent-button">learn more</button>
						</div>
					</div>
				</div>
				<p class="smaller-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
			</div>
		</div>
	</aside>

	<aside class="block-with-ul">
		<div class="block-with-ul_align">
			<div class="align-ul">
				<div class="one-ul">
					<ul>
						<li>100% Unique and Customized</li>
						<li>Any Subject Within Any Deadline</li>
						<li>Professional Writers and Editors</li>
						<li>Top Quality for the Lowest Prices</li>
					</ul>
				</div>
				<div class="one-ul">
					<ul>
						<li>Flexible Discount Policy</li>
						<li>Complete Confidentiality and Privacy</li>
						<li>100% Money Back Guarantee</li>
						<li>24/7 Attentive Customer Support</li>
					</ul>
				</div>
			</div>
			<button class="green-button">order essay now</button>
		</div>
	</aside>

	<aside class="blue-block">
		<div>
			<div class="free-title">
				<p>free special features</p>
			</div>
			<div class="ul-parent">
				<div class="custom-ul">
					<div><p class="free">free</p><p>enquiry</p></div>
					<div><p class="free">free</p><p>abstract</p></div>
					<div><p class="free">free</p><p>outline</p></div>
					<div><p class="free">free</p><p>cover &amp; reference page</p></div>
				</div>
				<div class="custom-ul">
					<div><p class="free">free</p><p>formatting</p></div>
					<div><p class="free">free</p><p>plagiarism report</p></div>
					<div><p class="free">free</p><p>email delivery</p></div>
					<div><p class="free">free</p><p>unlimited amendments</p></div>
				</div>
			</div>
		</div>
	</aside>

	<aside class="testimonials-block">
		<div>
			<p class="testimonials-title">testimonials</p>
			<div class="main-testimonials-block">
				<div id="prevArrow"></div>
				<div class="testimonials">
					<div class="one-testimonial">
						<div><img src="<?php echo bloginfo('template_url'); ?>/images/9.png"></div>
						<div class="info">
							<p>Finding a reliable and expert academic writing company is not that easy, as my previous experience shows. Thank God my brother referred me to bestessays4u and though 7 months have passed since our cooperation started, they have never let me down. Would recommend with no doubts!</p>
							<p>Grace, Edinburgh</p>
						</div>
					</div>
					
					
					
				</div>
				<div id="nextArrow"></div>
			</div>
		</div>
	</aside>

	<aside class="pre-footer">
		<div>
			<p>don't lag behind</p>
			<button class="green-button">order now</button>
		</div>
	</aside>

</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
