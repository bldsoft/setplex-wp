<?php
/**
 * Template Name: Leadership
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

<div class="round-gallery-section">
  <div class="round-gallery-inner grd-inner">
    <ul class="round-gallery-list">
      <?php while( have_rows('leadership_list') ): the_row(); ?>
        <li class="round-gallery-list-item">
          <?php $image = get_sub_field('image'); ?>
          <img class="round-gallery-list-item-image" src="<?= $image['url']; ?>" alt="<?= $image['alt']; ?>">
          <div class="round-gallery-list-item-text">
            <?php if (get_sub_field('linkedin_link')) : ?>
              <a href="<?php the_sub_field('linkedin_link'); ?>" class="round-gallery-list-item-link"></a>
            <?php endif; ?>
            <div class="round-gallery-list-item-person">
              <p class="round-gallery-list-item-person-name"><?php the_sub_field('name'); ?></p>
              <p class="round-gallery-list-item-person-job-title"><?php the_sub_field('job_title'); ?></p>
            </div>
          </div>
        </li>
      <?php endwhile; ?>
    </ul>
  </div>
</div>

<?php get_footer(); ?>