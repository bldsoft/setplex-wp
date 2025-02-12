<?php
/**
 * Template Name: Careers Vacancy
 *
 * @package Setplex
 */

get_header();
?>

<div class="bg-<?php the_field('bg_color_class'); ?>"></div>

<section class="vacancy-head">
  <div class="vacancy-head-inner grd-inner">
    <div class="vacancy-title">
      <?php the_field('vacancy_title'); ?>
    </div>
    <div class="vacancy-cta">
      <button id="openModalBtn1" class="vacancy-btn product-btn product-btn-brand blue-btn" type="button" aria-label="Send CV File" title="Send CV File"><?php the_field('vacancy_button_text_1'); ?></button>

      <ul class="footer-fss-media-list vacancy-cta-ss-list">
        <?php while (have_rows('vacancy_ss_list', 'option')) : the_row(); ?>
          <li class="footer-fss-media-list-item">
            <a href="<?php the_sub_field('link'); ?>" target="_blank" class="footer-fss-media-list-item-link" aria-label="<?php the_sub_field('label'); ?>"><?php the_sub_field('icon'); ?></a>
          </li>
        <?php endwhile; ?>
      </ul>
    </div>
  </div>
</section>

<section class="vacancy-body content-style-wbg">
  <div class="vacancy-body-inner grd-inner">

    <div class="vacancy-text">
      <?php the_field('vacancy_text'); ?>
    </div>

    <button id="openModalBtn2" class="vacancy-btn product-btn product-btn-brand blue-btn" type="button" aria-label="Send CV File" title="Send CV File"><?php the_field('vacancy_button_text_2'); ?></button>

    <div class="vacancy-afterwords"><?php the_field('text_below_button'); ?></div>
  </div>
</section>

<?php get_footer(); ?>
