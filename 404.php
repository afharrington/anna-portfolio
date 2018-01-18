<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Anna_Harrington
 */

get_header('404');
 ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404 not-found">

				<h2 class="notfound-text" >Sorry! This page doesn't exist.</h2>
				<a href="<?php echo get_home_url(); ?>">Go Back</a>

			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer(); ?>
