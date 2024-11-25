<?php

// Add Options to the Side Menu
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title' 	=> 'Options',
		'menu_title'	=> 'Options',
		'menu_slug' 	=> 'theme-options',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
		'icon_url'		=> 'dashicons-analytics',
	));
}

// Current Language
function get_current_language() {
	if (function_exists('pll_current_language')) {
			return pll_current_language();
	}
	return 'en'; // Default, if Polylang is disabled
}

// Chevron icon
function render_chevron_icon( $color = '#0A85CE', $class = '' ) {
	return sprintf(
			'<svg xmlns="http://www.w3.org/2000/svg" class="%s" width="1em" height=".7em" viewBox="0 0 10 7" fill="none"><path fill="%s" d="M6.987 5.841c.579-.746 1.478-2 3.043-4.093.261-.349.51-.954.01-1.428-.352-.335-.959-.362-1.295.138-1.214 1.63-1.917 2.581-2.336 3.137-.387.511-.525.691-.695.691-.154 0-.336-.13-.7-.569C4.156 2.692 2.8.791 2.545.455c-.424-.542-1-.289-1.267-.07-.466.385-.322.892-.115 1.16 1.747 2.37 2.672 3.699 3.25 4.44.602.774.831.93 1.217.941.409.013.62-.136 1.356-1.085Z"/></svg>',
			esc_attr( $class ),
			esc_attr( $color )
	);
}
// Example
/** <?php echo render_chevron_icon( 'your-color', 'your-class' ); ?>  */
