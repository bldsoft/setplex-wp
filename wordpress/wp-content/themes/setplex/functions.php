<?php
/**
 * Setplex functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Setplex
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function setplex_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Setplex, use a find and replace
		* to change 'setplex' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'setplex', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'setplex' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'setplex_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'setplex_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function setplex_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'setplex_content_width', 640 );
}
add_action( 'after_setup_theme', 'setplex_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function setplex_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'setplex' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'setplex' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'setplex_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function setplex_scripts(){
	wp_enqueue_style( 'base', get_template_directory_uri().'/assets/css/basecss.min.css', array(), _S_VERSION, 'all' );
}
add_action( 'wp_enqueue_scripts', 'setplex_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Website Security and Protection
 */
remove_action( 'wp_head', 'wp_generator' ); // hides the site version
remove_action( 'wp_head', 'rsd_link' ); // Убирает ссылку на XML-RPC из <head> вашего сайта (но не отключает сам XML-RPC).
add_filter( 'xmlrpc_enabled', '__return_false' ); // Отключает сам XML-RPC, блокируя все попытки доступа к xmlrpc.php.
// Disable jQuery Migrate Loading
add_action( 'wp_default_scripts', function( $scripts ) {
	if ( ! is_admin() && isset( $scripts->registered['jquery'] ) ) {
			$scripts->registered['jquery']->deps = array_diff(
					$scripts->registered['jquery']->deps,
					[ 'jquery-migrate' ]
			);
	}
});
// Disabling the author's link can be used to collect information about users (for example, for brute-force attacks).
add_filter( 'author_link', '__return_false' );
add_filter( 'redirect_canonical', function( $redirect_url ) {
    if ( is_author() ) {
        return false;
    }
    return $redirect_url;
});
// Adding headers to protect against XSS, clickjacking and other attacks.
add_action( 'send_headers', function() {
	header( 'X-Content-Type-Options: nosniff' );
	header( 'X-Frame-Options: SAMEORIGIN' );
	header( 'X-XSS-Protection: 1; mode=block' );
	header( 'Strict-Transport-Security: max-age=31536000; includeSubDomains; preload' );
});
// Disabling comments
add_action( 'admin_init', function() {
	remove_menu_page( 'edit-comments.php' );
	remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' );
});
add_filter( 'comments_open', '__return_false', 20, 2 );
add_filter( 'pings_open', '__return_false', 20, 2 );
add_filter( 'comments_array', '__return_empty_array', 10, 2 );
