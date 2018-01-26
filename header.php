<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Anna_Harrington
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="google-site-verification" content="CJkbI4OaTY8jcE7MGTUGa1GNtJTNqezTtzaem3-nK9s" />
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >

<div class="spinner-wrapper">

	<div spinner class="spinner">
		<div class="dot1"></div>
	  <div class="dot2"></div>
	</div>

</div>

<div id="page" class="site">

	<header id="masthead" class="site-header">

		<!-- <div class="hero-image" style="background-image: url(<?php the_field('hero_image'); ?>);" > -->
		<div class="hero" style="background: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.8)), url(<?php the_field('hero_image')?>) no-repeat center; background-size: cover;">

			<!--
			<nav id="site-navigation" class="main-navigation">
				<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					) );
				?>
			</nav>
			-->

			<div class="hero-content">
				<div class="hero-title">
					<h1 class="animated pulse">Anna Harrington</h1>
				</div>
				<h3 class="hero-intro">I'm a freelance web developer based in New York. I create fresh, modern sites designed with the user in mind.</h3>
				<div class="hero-contact">
					<h3>Interested in working together?<br/>
					<span class="hero-email">hi@afharrington.com</span><a href="mailto:hi@afharrington.com"><img class="arrow" src="<?php the_field('mail_icon')?>"/></a></h3>
				</div>
			</div>
		</div>
	</header>
	<div id="content" class="site-content">
