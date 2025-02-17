<?php
/**
 * Template part for displaying modal window.
 */

?>

<div id="my-modal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <div class="modal-form">
      <?php if ( get_field('contact_form_title') ) : ?>
        <div class="heading-form"><?php the_field('contact_form_title'); ?></div>
      <?php endif; ?>
      <?php the_field('contact_form'); ?>
    </div>
  </div>
</div>
