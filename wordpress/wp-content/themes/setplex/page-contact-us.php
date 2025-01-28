<?php
/**
 * Template Name: Contact Us
 *
 * @package Setplex
 */

get_header();
?>

<div class="bg-<?php the_field('bg_color_class'); ?>"></div>

<section class="quick-block">
  <div class="quick-block-inner grd-inner">
    <h1 class="heading-left head-gradient"><?php the_field('title'); ?></h1>
  </div>
</section>

<hr>

<section class="map-section">
  <div class="map-inner grd-inner">
    <h2 class="heading-h2-left head-gradient"><?php the_field('map_title'); ?></h2>
    <div class="map-dots-block">
      <div class="map-block">
        <img src="https://setplex.com/test/wp-content/themes/setplex/img/content/contact-us-map.webp" alt="offices map">
        <ul class="map-dots">
          <?php while( have_rows('map_dots_list') ): the_row(); ?>
            <li class="map-dots-item map-dot-<?php the_sub_field('city'); ?>">
              <div class="map-dots-item-text"><?php the_sub_field('text'); ?></div>
            </li>
          <?php endwhile; ?>
        </ul>
      </div>
    </div>
  </div>
</section>


<?php get_footer(); ?>
