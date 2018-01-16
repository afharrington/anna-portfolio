<?php
/**
 * Template Name: Home Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Anna_Harrington
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php get_template_part( 'template-parts/content', 'about' ); ?>

			<h1>This is h1<h1>
			<h2>This is h2</h2>
			<h3>This is h3</h3>
			<h4>This is h4</h4>
			<p>This is p</p>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
