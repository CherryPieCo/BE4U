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
				<p class="regular-text regular-text2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
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
