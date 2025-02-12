<?php
/**
 * Template Name: Legal Documents
 *
 * @package Setplex
 */

get_header();
?>

<div class="bg-<?php the_field('bg_color_class'); ?>"></div>

<section class="legal-docs">
  <div class="legal-docs-inner grd-inner">
    <h1 class="heading-h2-center head-gradient"><?php the_title(); ?></h1>

    <div class="legal-docs-content"><?php the_content(); ?></div>
  </div>
</section>

<?php get_footer(); ?>
