<?php
/**
 * Template Name: Customer Support
 *
 * @package Setplex
 */

get_header();
?>

<div class="bg-<?php the_field('bg_color_class'); ?>"></div>

<section class="quick-block">
  <div class="quick-block-inner grd-inner">
    <h1 class="heading-left head-gradient"><?php the_field('title'); ?></h1>
    <div class="subheading-left"><?php the_field('subtitle'); ?></div>
  </div>
</section>

<hr>

<section class="dragonfly-section">
  <div class="dragonfly-inner grd-inner">
    <h2 class="heading-left head-gradient"><?php the_field('dragonfly_title'); ?></h2>
    <div class="subheading-left"><?php the_field('dragonfly_text'); ?></div>
    <ul class="dragonfly-list no-mobile-slider">
      <?php while( have_rows('dragonfly_slider_list') ): the_row(); ?>
        <li class="dragonfly-list-item w-25">
          <div class="dragonfly-list-item-content">
            <div class="dragonfly-list-item-figure">
              <?php $image = get_sub_field('icon'); ?>
              <img src="<?= $image['url']; ?>" alt="<?= $image['alt']; ?>">
            </div>
            <div class="dragonfly-list-item-title h50"><?php the_sub_field('title'); ?></div>
            <div class="dragonfly-list-item-text"><?php the_sub_field('text'); ?></div>
          </div>
        </li>
      <?php endwhile; ?>
    </ul>
  </div>
</section>

<section class="fifty-percent-section">
  <div class="fifty-percent-inner grd-inner">
    <h2 class="heading-left head-gradient"><?php the_field('fifty_percent_title'); ?></h2>
    <div class="subheading-left"><?php the_field('fifty_percent_text'); ?></div>
    <ul class="fifty-percent-list without-links">
      <?php while( have_rows('fifty_percent_list') ): the_row(); ?>
        <li class="fifty-percent-list-item">
          <div class="fifty-percent-list-item-content">
            <div class="fifty-percent-list-item-title"><?php the_sub_field('title'); ?></div>
            <div class="fifty-percent-list-item-text"><?php the_sub_field('text'); ?></div>
          </div>
        </li>
      <?php endwhile; ?>
    </ul>
  </div>
</section>

<div class="quote-section">
  <div class="quote-inner grd-inner">
    <div class="quote-block"><?php the_field('quote_text'); ?></div>
    <div class="quote-content">
      <?php $image = get_field('quote_logo'); ?>
      <img class="quote-logo" src="<?= $image['url']; ?>" alt="<?= $image['alt']; ?>">
      <div>
        <p class="quote-person"><?php the_field('quote_name'); ?></p>
        <p class="quote-job-title"><?php the_field('quote_job_title'); ?></p>
      </div>
    </div>
  </div>
</div>

<div class="fifty-percent-section">
  <div class="fifty-percent-inner grd-inner">
    <ul class="fifty-percent-list with-links">
      <?php while( have_rows('fifty_percent_list_2') ): the_row(); ?>
        <li class="fifty-percent-list-item">
          <div class="fifty-percent-list-item-content">
            <div class="fifty-percent-list-item-title"><?php the_sub_field('title'); ?></div>
            <div class="fifty-percent-list-item-text"><?php the_sub_field('text'); ?></div>
          </div>
          <a href="<?php the_sub_field('link'); ?>" class="fifty-percent-list-item-link <?php the_sub_field('class_for_icon'); ?>"><?php the_sub_field('anchor_link'); ?></a>
        </li>
      <?php endwhile; ?>
    </ul>
  </div>
</div>

<?php get_footer(); ?>