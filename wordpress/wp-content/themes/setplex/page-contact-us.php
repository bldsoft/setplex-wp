<?php
/**
 * Template Name: Contact Us
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

<section class="contact-info-section">
  <div class="contact-info-inner grd-inner">
    <div class="contact-info-block">
      <p class="contact-info-block-title"><?php the_field('contact_info_title'); ?></p>
      <ul class="contact-info-list">
        <?php while( have_rows('contact_info_list') ): the_row(); ?>
          <li class="contact-info-list-item">
            <div class="contact-info-list-item-icon">
              <?php $image = get_sub_field('icon'); ?>
              <img src="<?= $image['url']; ?>" alt="<?= $image['alt']; ?>">
            </div>
            <div class="contact-info-list-item-text"><?php the_sub_field('text'); ?></div>
          </li>
        <?php endwhile; ?>
        <?php while( have_rows('contact_info_phone') ): the_row(); ?>
          <li class="contact-info-list-item">
            <div class="contact-info-list-item-icon">
              <?php $image = get_sub_field('icon'); ?>
              <img src="<?= $image['url']; ?>" alt="<?= $image['alt']; ?>">
            </div>
            <div class="contact-info-list-item-text">
              <table>
                <?php while( have_rows('phone_list') ): the_row(); ?>
                  <tr>
                    <th><?php the_sub_field('phone_name'); ?></th>
                    <td><a href="tel:<?php the_sub_field('phone_code'); ?>"><?php the_sub_field('phone_visual'); ?></a></td>
                  </tr>
                <?php endwhile; ?>
              </table>
            </div>
          </li>
        <?php endwhile; ?>
      </ul>

      <div class="contact-info-help-desk">
        <?php the_field('help_desk_text'); ?>
        <a href="<?php the_field('help_desk_link'); ?>" class="contact-info-help-desk-link"><?php the_field('help_desk_anchor'); ?></a>
      </div>

    </div>
    <div class="contact-info-form">
      <?php $form_shortcode = get_field('form_shortcode'); ?>
      <?php echo do_shortcode( $form_shortcode ); ?>
    </div>
  </div>
</section>

<section class="map-section">
  <div class="map-inner grd-inner">
    <h2 class="heading-h2-left head-gradient"><?php the_field('map_title'); ?></h2>
    <div class="map-dots-block">
      <div class="map-block">
        <img src="https://setplex.com/test/wp-content/themes/setplex/img/content/contact-us-map.webp" alt="offices map">
        <ul class="map-dots">
          <?php while( have_rows('map_dots_list') ): the_row(); ?>
            <li class="map-dots-item map-dot-<?php the_sub_field('city'); ?>">
              <div class="map-dots-item-text"><?php the_sub_field('text'); ?></div>
            </li>
          <?php endwhile; ?>
        </ul>
      </div>
    </div>
  </div>
</section>


<?php get_footer(); ?>
