<?php
/**
 * Template Name: Careers Inner
 *
 * @package Setplex
 */

get_header();
?>

<div class="bg-<?php the_field('bg_color_class'); ?>"></div>

<section class="quick-block">
  <div class="quick-block-inner grd-inner">
    <h1 class="heading-h2-center head-gradient"><?php echo get_field('positions_title'); ?></h1>

    <?php if( have_rows('positions') ) : ?>
      <ul class="positions-list">
        <?php while( have_rows('positions') ): the_row(); ?>
          <li class="positions-list-item">
            <a href="<?php echo get_sub_field('link'); ?>" class="positions-list-item-link">
              <?php echo get_sub_field('title'); ?>
            </a>
            <a href="<?php echo get_sub_field('link'); ?>" class="small-btn blue-btn arrow-angle-white" target="_blank"></a>
          </li>
        <?php endwhile; ?>
      </ul>
    <?php endif; ?>

    <div class="positions-info">
      <div class="positions-info-text"><?php the_field('text'); ?></div>
      <button id="openModalBtn1" class="product-btn product-btn-brand blue-btn" type="button" aria-label="Send CV File" title="Send CV File"><?php the_field('button_text'); ?></button>
    </div>

  </div>
</section>

<?php get_footer(); ?>
