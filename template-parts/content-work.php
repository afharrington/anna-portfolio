<?php
/**
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Anna_Harrington
 */

?>

<section id="work">

  <div class="section-header">
    <h2>WORK</h2>
  </div>

  <div class="section-content">

    <!-- the query -->
      <?php
      $args = array(
        'post_type' => 'portfolio-item',
        'orderby'=> 'title',
        'order' => 'ASC'
      );

      $the_query = new WP_Query( $args ); ?>

      <?php if ( $the_query->have_posts()) : ?>


        <!-- the loop -->
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

          <article class="portfolio-item">

            <div class="portfolio-item-title">
              <h3><?php the_title(); ?></h3>
              <p><?php the_field('item_role'); ?></p>
            </div>

            <div class="portfolio-item-description">
              <p><?php the_field('item_description'); ?></p>
            </div>

            <div class="portfolio-item-video">
              <a href="<?php the_field('item_url'); ?>" target="_blank" rel="noopener noreferrer">

                <video autoplay loop>
                   <source src="<?php the_field('item_video'); ?>" type="video/mp4" >
                </video>

                <img src="<?php the_field('item_image'); ?>" />

              </a>
            </div>

          </article>

        <?php endwhile;?>

        <?php wp_reset_postdata();?>
        </div>

      <?php else : ?>
        <p><?php _e('Sorry, nothing here yet.'); ?></p>
      <?php endif;?>

  </div>
</section>
