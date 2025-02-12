<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Setplex
 */

?>

		<hr class="blue b4-footer">

		<footer class="footer" style="background:#000;">
			<div class="footer-inner grd-inner">
				<div class="footer-top">

					<div class="footer-logo-text">
						<?php $logo_url = get_current_language() === 'es' ? get_site_url() . '/es/' : get_site_url(); ?>
						<a class="footer-logo" href="<?php echo esc_url( $logo_url ); ?>">
							<?php $image = get_field('logo_image', 'option'); ?>
							<img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" width="175" height="30">
						</a>

						<?php
							$current_lang = get_current_language();
							$logo_text_field = "logo_text_{$current_lang}";
						?>
						<p><?php echo the_field( $logo_text_field, 'option' ); ?></p>
					</div>

					<div class="footer-nav">
						<?php wp_nav_menu(array(
							'container' => false,
							'menu_class' => 'footer-nav-list',
							'theme_location' => 'footer_nav_1',
							// 'walker' => new Footer_Menu_Walker(),
						)); ?>
						<?php wp_nav_menu(array(
							'container' => false,
							'menu_class' => 'footer-nav-list',
							'theme_location' => 'footer_nav_2',
							// 'walker' => new Footer_Menu_Walker(),
						)); ?>
						<?php wp_nav_menu(array(
							'container' => false,
							'menu_class' => 'footer-nav-list',
							'theme_location' => 'footer_nav_3',
							// 'walker' => new Footer_Menu_Walker(),
						)); ?>
						<?php wp_nav_menu(array(
							'container' => false,
							'menu_class' => 'footer-nav-list',
							'theme_location' => 'footer_nav_4',
							// 'walker' => new Footer_Menu_Walker(),
						)); ?>
					</div>

					<div class="footer-fss">
						<div class="footer-fss-form">
						<?php
							$current_lang = get_current_language();
							$footer_form_head_field = "footer_form_head_{$current_lang}";
							$footer_form_text_field = "footer_form_text_{$current_lang}";
						?>
						<p class="footer-fss-form-heading"><?php echo the_field( $footer_form_head_field, 'option' ); ?></p>
						<p class="footer-fss-form-text"><?php echo the_field( $footer_form_text_field, 'option' ); ?></p>
						</div>
						<div class="footer-fss-media">
							<?php
								$current_lang = get_current_language();
								$footer_ss_text_field = "footer_ss_text_{$current_lang}";
							?>
							<p><?php echo the_field( $footer_ss_text_field, 'option' ); ?></p>

							<ul class="footer-fss-media-list">
								<?php while (have_rows('footer_ss_list', 'option')) : the_row(); ?>
									<li class="footer-fss-media-list-item">
										<a href="<?php the_sub_field('link'); ?>" target="_blank" class="footer-fss-media-list-item-link" aria-label="<?php the_sub_field('label'); ?>"><?php the_sub_field('icon'); ?></a>
									</li>
								<?php endwhile; ?>
							</ul>
						</div>
					</div>

				</div>
				<div class="footer-copyright">
					<?php
						$current_lang = get_current_language();
						$copyright_field = "copyright_{$current_lang}";
					?>
					<?php echo get_field( $copyright_field, 'option' ); ?>
				</div>
			</div>
		</footer>

		<?php wp_footer(); ?>

		<?php if (get_field('custom_script') ) : ?>
			<script type="text/javascript">
				<?php the_field('custom_script'); ?>
			</script>
		<?php endif; ?>

	</div>

</body>
</html>
