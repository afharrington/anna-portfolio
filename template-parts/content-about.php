<?php
/**
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Anna_Harrington
 */

?>

<section class="about">
  <div class="section-header" data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-duration="500">
    <h4>ABOUT</h4>
  </div>
  <div class="section-content">
    <div class="subsection-left">
      <div class="subsection-header">
        <h3><?php the_field('subsection_one_heading'); ?></h3>
        <div class="subsection-underline" data-aos="fade-left"></div>
      </div>

      <div class="subsection-text">
        <p><?php the_field('subsection_one_text'); ?></p>
      </div>
      <div class="subsection-icon">
        <img src="<?php the_field('subsection_one_icon'); ?>"/>
      </div>
    </div>

    <div class="subsection-right">
      <div class="subsection-header">
        <h3><?php the_field('subsection_two_heading'); ?></h3>
        <div class="subsection-underline" data-aos="fade-right"></div>
      </div>

      <div class="subsection-text">
        <p><?php the_field('subsection_two_text'); ?></p>
      </div>
      <div class="subsection-icon">
        <img src="<?php the_field('subsection_two_icon'); ?>"/>
      </div>
    </div>

    <div class="subsection-left">
      <div class="subsection-header">
        <h3><?php the_field('subsection_three_heading'); ?></h3>
        <div class="subsection-underline" data-aos="fade-left"></div>
      </div>

      <div class="subsection-text">
        <p><?php the_field('subsection_three_text'); ?></p>
      </div>
      <div class="subsection-icon">
        <img src="<?php the_field('subsection_three_icon'); ?>"/>
      </div>
    </div>
  </div>
</section>
