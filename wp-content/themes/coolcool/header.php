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
		<div class="part1">
			<nav>
				<ul>
					<li><img src="<?php echo bloginfo('template_url'); ?>/images/domik.png"></li>
					<li>Services</li>
					<li>Prices</li>
					<li>Order</li>
					<li>Discounts</li>
					<li>Samples</li>
					<li>About Us</li>
					<li>Contacts</li>
				</ul>
			</nav>
		</div>
		<div class="part2">
		<div>
			<div>
				<p><strong>best</strong>essay4you.co.uk</p>
				<div class="empty"></div>
				<div class="call-us">
					<div><img src="<?php echo bloginfo('template_url'); ?>/images/mobile-icon.png"></div>
					<div class="call-us__phone">
						<p>AU Phone:</p>
						<p>+7 777 777 7777</p>
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
				<a href="#">essay</a>
				<a href="#">research paper</a>
				<a href="#">coursework</a>
				<a href="#">term paper</a>
				<a href="#">case study</a>
				<a href="#">dissertation services</a>
				<a href="#">admission services</a>
				<a href="#">resume</a>
				<a href="#">extras</a>
			</div>
		</div>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
