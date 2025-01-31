<?php
/**
 * Template Name: Front page
 *
 * @package Setplex
 */

get_header();
?>

<div class="bg-blue"></div>

<section class="main-video-section">
  <div class="main-video-block">
    <div class="main-video-inner grd-inner">
      <h1 class="heading-left head-gradient"><?php the_field('main_video_title'); ?></h1>
    </div>
  </div>

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
    Ваш браузер не поддерживает воспроизведение видео.
  </video>
</section>

<hr>

<section class="arc-heading-section">
	<div class="arc-heading-inner grd-inner">
		<div class="arc-heading-block">
			<h2 class="arc-heading-head head-gradient"><?php the_field('arc_title'); ?></h2>
			<p class="arc-heading-text"><?php the_field('arc_text'); ?></p>
		</div>
	</div>
</section>

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
            <div class="dragonfly-list-item-title h50"><?php the_sub_field('title'); ?></div>
            <div class="dragonfly-list-item-text"><?php the_sub_field('text'); ?></div>
          </div>
        </li>
      <?php endwhile; ?>
    </ul>
  </div>
</section>

<section class="pentagon-section">
  <div class="pentagon-inner grd-inner">
    <h2 class="heading-left head-gradient"><?php the_field('pentagon_title'); ?></h2>
    <ul class="pentagon-list on-solutions-slider">
      <?php while( have_rows('pentagon_list') ): the_row(); ?>
        <li class="pentagon-list-item w-33 color-<?php the_sub_field('class'); ?>">
          <div class="pentagon-list-item-content">
            <div class="pentagon-list-item-logo">
              <?php $image = get_sub_field('logo'); ?>
              <img src="<?= $image['url']; ?>" alt="<?= $image['alt']; ?>">
              <div class="pentagon-list-item-logo-text"><?php the_sub_field('text_logo'); ?></div>
            </div>
            <div class="pentagon-list-item-figure">
              <?php $image = get_sub_field('image'); ?>
              <img src="<?= $image['url']; ?>" alt="<?= $image['alt']; ?>">
            </div>
            <div class="pentagon-list-item-title <?php the_sub_field('icon_class'); ?>"><?php the_sub_field('title'); ?></div>
            <div class="pentagon-list-item-text"><?php the_sub_field('text'); ?></div>
            <a href="<?php the_sub_field('link'); ?>" class="pentagon-list-item-link pentagon-btn arrow-angle-white"></a>
          </div>
        </li>
      <?php endwhile; ?>
    </ul>
  </div>
</section>

<section class="dragonfly-section">
  <div class="dragonfly-inner grd-inner">
    <h2 class="heading-left head-gradient"><?php the_field('dragonfly_title_2'); ?></h2>
    <ul class="dragonfly-list on-mobile-slider">
      <?php while( have_rows('dragonfly_slider_list_2') ): the_row(); ?>
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


<section class="news-section">
  <div class="news-inner grd-inner">
    <h2 class="heading-left head-gradient"><?php the_field('news_title'); ?></h2>
    <ul class="news-list on-mobile-slider-no-arrow">
      <?php while( have_rows('news_list') ): the_row(); ?>
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
