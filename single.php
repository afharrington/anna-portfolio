<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Anna_Harrington
 */

get_header(); ?>

<?php


function redirect_post() {
  $queried_post_type = get_query_var('post_type');
  if ( is_single() && 'sample_post_type' ==  $queried_post_type ) {
    wp_redirect( home_url(), 301 );
    exit;
  }
}

add_action( 'template_redirect', 'redirect_post' );
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_type() );


		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
