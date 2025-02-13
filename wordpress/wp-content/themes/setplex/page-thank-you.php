<?php
/**
 * Template Name: Thank You Page
 *
 * @package Setplex
 */

get_header();
?>

<div class="bg-blue"></div>

<section class="thnx-block">
  <div class="thnx-block-inner grd-inner">
    <h1 class="heading-h2-center head-gradient thnx-block-head icon-blue-check"><?php the_title(); ?></h1>
    <div class="thnx-block-text"><?php the_content(); ?></div>
    <div class="thnx-block-subtext">You will redirect to Home page in <span id="countdown">10</span> seconds.</div>
  </div>
</section>

<?php get_footer(); ?>
