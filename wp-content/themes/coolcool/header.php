<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package coolcool
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url'); ?>/slick/slick.css"/>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header" role="banner">
	
		<div class="part2">
		<div>
			<div>
				<p><strong>best</strong>essay4you.co.uk</p>
				<div class="empty"></div>
				<div class="call-us">
					<div><img src="<?php echo bloginfo('template_url'); ?>/images/mobile-icon.png"></div>
					<div class="call-us__phone">
						<p>UK Phone:</p>
						<p></p>
					</div>
				</div>
				<div class="notification-icon"><img src="<?php echo bloginfo('template_url'); ?>/images/notification-icon.png"></div>
				<div>
					<select>
						<option>user</option>
					</select>
				</div>
			</div>
			<div class="links-block">
				<a href="https://bestessay4u.co.uk/assignment-help/">Assignment</a>
				<a href="https://bestessay4u.co.uk/research-papers-help/">Research papers</a>
				<a href="#">Homework</a>
				<a href="#">coursework</a>
				<a href="#">Editing</a>
				<a href="#">case study</a>
				<a href="#">Lab Report</a>
				<a href="#">Thesis Proposal</a>
				<a href="#">Report</a>
				
			</div>
		</div>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
