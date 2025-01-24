<?php
/**
 * Template Name: Book a Demo
 *
 * @package Setplex
 */

get_header();
?>

<div class="bg-<?php the_field('bg_color_class'); ?>"></div>

<section class="bad-section">
  <div class="bad-inner grd-inner">
    <div class="bad-content-block">
      <?php $image = get_field('bad_logo'); ?>
      <img class="bad-logo" src="<?= $image['url']; ?>" alt="<?= $image['alt']; ?>">

      <h1 class="heading-left bad-heading"><span class="head-gradient">Book a</span> <span class="bad-head-colored">Demo</span></h1>

      <div class="bad-text list-<?php the_field('bg_color_class'); ?>-style"><?php the_field('bad_text'); ?></div>

      <div class="headline-with-buttons-block">
        <a class="grey-btn product-btn-brand" href="<?php the_field('bad_button_link'); ?>" target="_blank">Download Spec Sheet</a>
      </div>

      <?php $image2 = get_field('bad_image'); ?>
      <img class="bad-image" src="<?= $image2['url']; ?>" alt="<?= $image2['alt']; ?>">
    </div>
    <div class="bad-form-block">
      <?php $form_shortcode = get_field('form_shortcode'); ?>
      <?php echo do_shortcode( $form_shortcode ); ?>
    </div>
  </div>
</section>


<?php get_footer(); ?>
