<?php
/**
 * Template Name: Partners
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

<section class="logo-pyramid-section">
  <div class="logo-pyramid-inner grd-inner">
    <h2 class="heading-left head-gradient"><?php the_field('logo_pyramid_title'); ?></h2>
    <div class="subheading-left"><?php the_field('logo_pyramid_text'); ?></div>
    <ul class="logo-pyramid-list">
      <?php while( have_rows('logo_pyramid_list') ): the_row(); ?>
        <li class="logo-pyramid-list-item">
          <div class="logo-pyramid-list-item-content">
            <?php if (get_sub_field('link')) : ?>
              <a href="<?php the_sub_field('link'); ?>" class="logo-pyramid-list-item-figure" target="_blank">
                <?php $image = get_sub_field('icon'); ?>
                <img src="<?= $image['url']; ?>" alt="<?= $image['alt']; ?>">
              </a>
            <?php else : ?>
              <div class="logo-pyramid-list-item-figure">
                <?php $image = get_sub_field('icon'); ?>
                <img src="<?= $image['url']; ?>" alt="<?= $image['alt']; ?>">
              </div>
            <?php endif; ?>
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

<section class="dragonfly-section">
  <div class="dragonfly-inner grd-inner">
    <h2 class="heading-left head-gradient"><?php the_field('dragonfly_title'); ?></h2>
    <div class="subheading-left"><?php the_field('dragonfly_text'); ?></div>
    <ul class="dragonfly-list on-mobile-slider">
      <?php while( have_rows('dragonfly_slider_list') ): the_row(); ?>
        <li class="dragonfly-list-item w-25">
          <div class="dragonfly-list-item-content">
            <div class="dragonfly-list-item-figure">
              <?php $image = get_sub_field('icon'); ?>
              <img src="<?= $image['url']; ?>" alt="<?= $image['alt']; ?>">
            </div>
            <div class="dragonfly-list-item-title"><?php the_sub_field('title'); ?></div>
            <div class="dragonfly-list-item-text"><?php the_sub_field('text'); ?></div>
          </div>
        </li>
      <?php endwhile; ?>
    </ul>
  </div>
</section>

<div class="quote-section">
  <div class="quote-inner grd-inner">
    <div class="quote-block"><?php the_field('quote_text_2'); ?></div>
    <div class="quote-content">
      <?php $image = get_field('quote_logo_2'); ?>
      <img class="quote-logo" src="<?= $image['url']; ?>" alt="<?= $image['alt']; ?>">
      <div>
        <p class="quote-person"><?php the_field('quote_name_2'); ?></p>
        <p class="quote-job-title"><?php the_field('quote_job_title_2'); ?></p>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>