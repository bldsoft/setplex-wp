<?php
/**
 * Template Name: Our Solutions
 *
 * @package Setplex
 */

get_header();
?>

<div class="bg-blue"></div>

<!-- ID Main page 107 -->
<section class="pentagon-section no-top-indent">
  <div class="pentagon-inner grd-inner">
    <h2 class="heading-left head-gradient"><?php the_field('pentagon_title', 107); ?></h2>
    <ul class="pentagon-list on-solutions-slider">
      <?php while( have_rows('pentagon_list', 107) ): the_row(); ?>
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

<?php get_footer(); ?>
