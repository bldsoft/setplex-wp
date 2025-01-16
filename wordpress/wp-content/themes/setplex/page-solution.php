<?php
/**
 * Template Name: Solution
 *
 * @package Setplex
 */

get_header();
?>

<div class="bg-<?php the_field('bg_color_class'); ?>"></div>

<section class="main-video-section">
  <video 
    class="main-video-bg" 
    autoplay 
    muted 
    loop 
    playsinline>
    <source 
        src="<?php the_field('main_video_desktop'); ?>" 
        type="video/mp4" 
        media="(min-width: 769px)">
    <source 
        src="<?php the_field('main_video_mobile'); ?>" 
        type="video/mp4" 
        media="(max-width: 768px)">
    <!-- Фолбэк-контент для старых браузеров -->
    Your browser does not support video playback.
  </video>
  <ul class="logo-link-line-list logo-link-line-slider">
    <?php while( have_rows('logo_link_line_list', 'option') ): the_row(); ?>
      <li class="logo-link-line-list-item">
        <a href="<?php the_sub_field('logo_link_line_link'); ?>" class="logo-link-line-list-item-link img-<?php the_sub_field('logo_link_line_class'); ?>"></a>
      </li>
    <?php endwhile; ?>
  </ul>
</section>

<hr>

<section class="icon-logo-with-buttons">
  <div class="icon-logo-with-buttons-inner grd-inner">
    <?php $image = get_field('icon_logo_btn_image_bg'); ?>
    <img class="icon-logo-with-buttons-image" src="<?= $image['url']; ?>" alt="<?= $image['alt']; ?>">

    <div class="icon-logo-with-buttons-content">
      <?php $image2 = get_field('icon_logo_btn_logo'); ?>
      <img src="<?= $image2['url']; ?>" alt="<?= $image2['alt']; ?>">

      <h1 class="heading-h2-left head-gradient"><?php the_field('icon_logo_btn_title'); ?></h1>
      <div class="icon-logo-with-buttons-text"><?php the_field('icon_logo_btn_text'); ?></div>

      <div class="headline-with-buttons-block">
        <a class="grey-btn product-btn-brand" href="<?php the_field('headline_with_buttons_pdf'); ?>" target="_blank">Download Spec Sheet</a>
        <a class="page-color-btn product-btn-brand" href="<?php the_field('headline_with_buttons_link'); ?>" target="_blank"><span>Book a Demo</span></a>
      </div>
    </div>
  </div>
</section>

<section class="feature-section">
  <div class="feature-inner grd-inner">
    <h2 class="heading-left"><span class="head-gradient"><?php the_field('feature_title'); ?></span> <span class="feature-head-colored"><?php the_field('feature_title_project'); ?></span></h2>
    <div class="feature-subheading-left"><?php the_field('feature_text'); ?></div>
    <ul class="feature-list on-mobile-slider">
      <?php while( have_rows('feature_list') ): the_row(); ?>
        <li class="feature-list-item w-25">
          <div class="feature-list-item-content">
            <div class="feature-list-item-figure">
              <?php $image = get_sub_field('icon'); ?>
              <img src="<?= $image['url']; ?>" alt="<?= $image['alt']; ?>">
            </div>
            <p class="feature-list-item-title"><?php the_sub_field('title'); ?></p>
            <div class="feature-list-item-text"><?php the_sub_field('text'); ?></div>
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
      <a class="grey-btn product-btn-brand" href="<?php the_field('headline_with_buttons_pdf'); ?>" target="_blank">Download Spec Sheet</a>
      <a class="page-color-btn product-btn-brand" href="<?php the_field('headline_with_buttons_link'); ?>" target="_blank"><span>Book a Demo</span></a>
    </div>
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
