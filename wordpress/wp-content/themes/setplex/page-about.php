<?php
/**
 * Template Name: About
 *
 * @package Setplex
 */

get_header();
?>

<div class="bg-<?php the_field('bg_color_class'); ?>"></div>

<section class="shevron-text-section">
  <div class="shevron-text-inner grd-inner">
    <div class="shevron-text-block">
      <h1 class="heading-left head-gradient"><?php the_field('shevron_title'); ?></h1>
      <p class="subheading-left"><?php the_field('shevron_subtitle'); ?></p>
    </div>
  </div>
</section>

<hr>

<!-- ID Main page 107 -->
<section class="dragonfly-section">
  <div class="beauty-el beauty-el-1 grd-inner"></div>
  <div class="dragonfly-inner grd-inner">
    <div class="plain-text head-gradient"><?php the_field('about_text_1'); ?></div>
    <ul class="dragonfly-list on-mobile-slider">
      <?php while( have_rows('dragonfly_slider_list', 107) ): the_row(); ?>
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

<section class="quick-block">
  <div class="plain-text head-gradient grd-inner"><?php the_field('about_text_2'); ?></div>
</section>
<div class="beauty-el beauty-el-2 grd-inner"></div>

<section class="photo-carousel-section">
  <div class="photo-carousel-inner grd-inner">
    <ul class="photo-carousel">
      <?php while( have_rows('photo_carousel') ): the_row(); ?>
        <li class="photo-carousel-item">
          <?php $image = get_sub_field('photo_carousel_item'); ?>
          <a href="<?= $image['url']; ?>" data-fancybox="gallery"><img src="<?= $image['url']; ?>" alt="<?= $image['alt']; ?>"></a>
        </li>
      <?php endwhile; ?>
    </ul>
  </div>
</section>

<section class="numbering-tile-section">
  <div class="beauty-el beauty-el-3 grd-inner"></div>
  <div class="numbering-tile-inner grd-inner">
    <div class="plain-text head-gradient"><?php the_field('about_text_3'); ?></div>
    <ul class="numbering-tile-list">
      <?php while( have_rows('numbering_tile_list') ): the_row(); ?>
        <li class="numbering-tile-list-item w-25">
          <div class="numbering-tile-list-item-content">
            <div class="numbering-tile-list-item-title"><?php the_sub_field('title'); ?></div>
            <div class="numbering-tile-list-item-text"><?php the_sub_field('text'); ?></div>
          </div>
        </li>
      <?php endwhile; ?>
    </ul>
    <div class="beauty-el beauty-el-4 grd-inner"></div>
    <div class="plain-text head-gradient"><?php the_field('about_text_4'); ?></div>
  </div>
</section>

<!-- ID Main page 107 -->
<section class="news-section">
  <div class="news-inner grd-inner">
    <h2 class="heading-left head-gradient"><?php the_field('news_title', 107); ?></h2>
    <ul class="news-list on-mobile-slider-no-arrow">
      <?php while( have_rows('news_list', 107) ): the_row(); ?>
        <li class="news-list-item w-33">
          <div class="news-list-item-content">
            <div class="news-list-item-figure">
              <?php $image = get_sub_field('image'); ?>
              <img src="<?= $image['url']; ?>" alt="<?= $image['alt']; ?>">
            </div>
            <div class="news-list-item-title"><?php the_sub_field('title'); ?></div>
            <div class="news-list-item-text"><?php the_sub_field('text'); ?></div>
            <div class="news-list-item-add">
              <div class="news-list-item-category"><?php the_sub_field('category'); ?></div>
              <a href="<?php the_sub_field('link'); ?>" class="news-list-item-link blue-btn arrow-angle-white"></a>
            </div>
          </div>
        </li>
      <?php endwhile; ?>
    </ul>
  </div>
</section>

<?php get_footer(); ?>