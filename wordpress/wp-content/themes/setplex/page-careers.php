<?php
/**
 * Template Name: Careers
 *
 * @package Setplex
 */

get_header();
?>

<div class="bg-<?php the_field('bg_color_class'); ?>"></div>

<section class="quick-block">
  <div class="quick-block-inner grd-inner">
    <h1 class="heading-left head-gradient"><?php the_field('title'); ?></h1>
    <div class="subheading-left w800"><?php the_field('subtitle'); ?></div>
    <a href="<?php the_field('career_button_link'); ?>" target="_blank" class="blue-btn product-btn-brand"><?php the_field('career_button_anchor'); ?></a>
  </div>
</section>

<hr>

<section class="hor-column-section">
  <div class="hor-column-inner grd-inner">
    <h2 class="heading-left head-gradient"><?php the_field('hor_column_title'); ?></h2>
    <div class="subheading-left"><?php the_field('hor_column_text'); ?></div>
    <ul class="hor-column-list on-mobile-slider">
      <?php while( have_rows('hor_column_list') ): the_row(); ?>
        <li class="hor-column-list-item">
          <div class="hor-column-list-item-icon">
            <?php $image = get_sub_field('icon'); ?>
            <img src="<?= $image['url']; ?>" alt="<?= $image['alt']; ?>">
          </div>
          <div class="hor-column-list-item-content">
            <div class="hor-column-list-item-title"><?php the_sub_field('title'); ?></div>
            <div class="hor-column-list-item-text"><?php the_sub_field('text'); ?></div>
          </div>
        </li>
      <?php endwhile; ?>
    </ul>
  </div>
</section>

<section class="two-column-text">
  <div class="two-column-text-inner grd-inner">
    <div class="two-column-text-head">
      <h3 class="two-column-text-heading"><?php the_field('two_column_title'); ?></h3>
      <div class="two-column-text-text"><?php the_field('two_column_text'); ?></div>
    </div>
    <ul class="only-tablet-slider">
      <?php while( have_rows('two_column_list') ): the_row(); ?>
        <li class="only-tablet-slider-item w-33">
          <div class="only-tablet-slider-item-content">
            <div class="only-tablet-slider-item-icon">
              <?php $image = get_sub_field('icon'); ?>
              <img src="<?= $image['url']; ?>" alt="<?= $image['alt']; ?>">
            </div>
            <div class="only-tablet-slider-item-title h50"><?php the_sub_field('title'); ?></div>
            <div class="only-tablet-slider-item-text"><?php the_sub_field('text'); ?></div>
          </div>
        </li>
      <?php endwhile; ?>
    </ul>
  </div>
</section>

<section class="headline-with-buttons">
  <div class="headline-with-buttons-inner grd-inner">
    <p class="heading-h2-center head-gradient"><?php the_field('headline_with_buttons_title'); ?></p>
    <div class="headline-with-buttons-block">
      <a href="<?php the_field('headline_with_buttons_link'); ?>" target="_blank" class="blue-btn product-btn-brand"><?php the_field('headline_with_buttons_anchor'); ?></a>
    </div>
  </div>
</section>

<?php get_footer(); ?>