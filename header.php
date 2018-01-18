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
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="google-site-verification" content="CJkbI4OaTY8jcE7MGTUGa1GNtJTNqezTtzaem3-nK9s" />
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header">

		<div class="hero-image" style="background-image: url(<?php the_field('hero_image'); ?>);" >

				<nav id="site-navigation" class="main-navigation">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						) );
					?>
				</nav>

				<div class="hero-overlay">
					<div class="hero-title">
						<h1 class="animated pulse">Anna Harrington</h1>
					</div>
					<div class="hero-text">
						<h3>I'm a freelance web developer based in New York. I create fresh, modern sites designed with the user in mind.</h3>
						<p>I’m available for hire and am open to new partnerships with agencies, designers, and content experts.</p>
						<div>
							<p>Interested in working together?<br/>
							<span class="hero-email">hi@afharrington.com</span><a href="mailto:hi@afharrington.com"><i class="fa fa-external-link-square" aria-hidden="true"></i></a></p>
						</div>
					</div>
				</div>

			</div>

		</div>

	</header>

	<div id="content" class="site-content">
