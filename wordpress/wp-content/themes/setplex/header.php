<?php
/**
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Setplex
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<!-- Font Poppins -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">

	<!-- Favicon -->
	<?php require get_template_directory() . '/inc/favicons.php'; ?>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="container">
	<div class="top-alert-bar">
		<div class="top-alert-bar-inner grd-inner">
			<ul class="top-alert-bar-list">
				<?php
					$current_lang = get_current_language();
					$top_alert_list_field = "top_alert_bar_{$current_lang}";
				?>
				<?php while (have_rows($top_alert_list_field, 'option')) : the_row(); ?>
					<li>
						<a class="top-alert-bar-list__item" href="<?php the_sub_field('link_slide'); ?>">
							<?php the_sub_field('text_slide'); ?>
						</a>
					</li>
				<?php endwhile; ?>
			</ul>
			<button class="top-alert-bar-close">
				<span class="visually-hidden">Close</span>
			</button>
		</div>
	</div>
	<header class="header">
		<div class="header-inner grd-inner">

			<?php $logo_url = get_current_language() === 'es' ? get_site_url() . '/es/' : get_site_url(); ?>
			<a class="header-logo" href="<?php echo esc_url( $logo_url ); ?>">
				<?php $image = get_field('logo_image', 'option'); ?>
				<img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" width="175" height="30">
			</a>

			<nav class="header-nav show-desktop">
				<?php wp_nav_menu(array(
					'theme_location' => 'header_nav',
					'container' => false,
					'menu_class' => 'header-nav-list',
					'walker' => new Custom_Walker_Nav_Menu(),
				)); ?>
			</nav>

			<div class="header-right">
				<?php 
				$languages = pll_the_languages( array( 'raw' => 1 ) ); 
				$current_lang = array_filter( $languages, fn($lang) => $lang['current_lang'] ); 
				$current_lang = reset( $current_lang );
				?>
				<div class="lang-switcher show-desktop">
						<button class="lang-switcher-toggle">
								<img src="<?php echo esc_url( $current_lang['flag'] ); ?>" alt="<?php echo esc_attr( $current_lang['name'] ); ?>">
								<span><?php echo esc_html( $current_lang['slug'] ); ?></span>
								<?php echo render_chevron_icon( '#F2F2F2', 'chevron-toggle' ); ?>
						</button>
						<ul class="lang-switcher-list">
							<?php foreach ( $languages as $lang ) : ?>
								<?php if ( !$lang['current_lang'] ) : ?>
									<li>
											<a href="<?php echo esc_url( $lang['url'] ); ?>">
													<img src="<?php echo esc_url( $lang['flag'] ); ?>" alt="<?php echo esc_attr( $lang['name'] ); ?>">
													<?php echo esc_html( $lang['slug'] ); ?>
											</a>
									</li>
									<?php endif; ?>
								<?php endforeach; ?>
						</ul>
				</div>

				<?php // contact us
				$current_lang = get_current_language();
				$contacts_field = "contacts-{$current_lang}";
				$contacts = get_field($contacts_field, 'option');
				if ($contacts) {
						$contacts_link = esc_url($contacts['contact_link']);
						$contacts_text = esc_html($contacts['contact_text']);
				} else {
						$contacts_link = '#';
						$contacts_text = 'Contact Us';
				}
				?>
				<a href="<?php echo $contacts_link; ?>" class="header-btn blue-btn"><?php echo $contacts_text; ?></a>

				<button class="burger">
					<span></span>
				</button>
			</div>

			<div class="menu-mobile show-mobile">

				<?php wp_nav_menu(array(
					'theme_location' => 'header_nav',
					'container' => false,
					'menu_class' => 'header-nav-list header-nav-list-mobile',
					'walker' => new Custom_Walker_Nav_Menu(),
				)); ?>

				<?php 
				$languages = pll_the_languages( array( 'raw' => 1 ) ); 
				$current_lang = array_filter( $languages, fn($lang) => $lang['current_lang'] ); 
				$current_lang = reset( $current_lang );
				?>
				<div class="lang-switcher show-mobile">
					<button class="lang-switcher-toggle">
							<img src="<?php echo esc_url( $current_lang['flag'] ); ?>" alt="<?php echo esc_attr( $current_lang['name'] ); ?>">
							<span><?php echo esc_html( $current_lang['slug'] ); ?></span>
							<?php echo render_chevron_icon( '#F2F2F2', 'chevron-toggle' ); ?>
					</button>
					<ul class="lang-switcher-list">
						<?php foreach ( $languages as $lang ) : ?>
							<?php if ( !$lang['current_lang'] ) : ?>
								<li>
										<a href="<?php echo esc_url( $lang['url'] ); ?>">
												<img src="<?php echo esc_url( $lang['flag'] ); ?>" alt="<?php echo esc_attr( $lang['name'] ); ?>">
												<?php echo esc_html( $lang['slug'] ); ?>
										</a>
								</li>
								<?php endif; ?>
							<?php endforeach; ?>
					</ul>
				</div>
			</div>

		</div>
	</header>
