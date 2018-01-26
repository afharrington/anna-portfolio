<?php
/**
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Anna_Harrington
 */

?>

<section id="about">
  <div class="section-header">
    <h2>ABOUT</h2>
  </div>
  <div class="section-content">

    <div class="subsection subsection-left" data-aos="fade-right" data-aos-duration="600" data-aos-offset="225" >
      <div class="subsection-header">
        <h3><?php the_field('subsection_one_heading'); ?></h3>
      </div>
      <div class="subsection-text" >
        <p><?php the_field('subsection_one_text'); ?></p>
      </div>
      <div class="subsection-icon">
        <img src="<?php the_field('subsection_one_icon'); ?>"/>
      </div>
    </div>

    <div class="subsection subsection-right" data-aos="fade-left" data-aos-duration="600" data-aos-offset="225">
      <div class="subsection-header">
        <h3><?php the_field('subsection_two_heading'); ?></h3>
      </div>
      <div class="subsection-text" >
        <p><?php the_field('subsection_two_text'); ?></p>
      </div>
      <div class="subsection-icon">
        <img src="<?php the_field('subsection_two_icon'); ?>"/>
      </div>
    </div>

    <div class="subsection subsection-left" data-aos="fade-right" data-aos-duration="600" data-aos-offset="225" >
      <div class="subsection-header">
        <h3><?php the_field('subsection_three_heading'); ?></h3>
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
