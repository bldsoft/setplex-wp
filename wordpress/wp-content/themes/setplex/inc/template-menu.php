<?php
/**
 * Features that improve the menu
 *
 * @package Setplex
 */

// Chevron icon for menu
function add_chevron_to_menu_items($item_output, $item, $depth, $args) {
	if (in_array('menu-item-has-children', $item->classes, true)) {
		$chevron_icon = render_chevron_icon('#0A85CE', 'menu-chevron-icon');
		$item_output = preg_replace('/(<a.*?>.*?<\/a>)/', '$1' . $chevron_icon, $item_output);
	}
	return $item_output;
}
add_filter('walker_nav_menu_start_el', 'add_chevron_to_menu_items', 10, 4);


// Walker
// class Custom_Walker_Nav_Menu extends Walker_Nav_Menu {
// // Replce open ul
// 	public function start_lvl( &$output, $depth = 0, $args = null ) {
// 		$indent = str_repeat("\t", $depth);
// 		$output .= "\n$indent<div class=\"sub-menu-wrapper\">\n";
// 		$output .= "$indent<ul class=\"sub-menu\">\n";
// 	}

// // Replce close ul
// 	public function end_lvl( &$output, $depth = 0, $args = null ) {
// 		$indent = str_repeat("\t", $depth);
// 		$output .= "$indent</ul>\n";
// 		$output .= "$indent</div>\n";
// 	}
// }

class Custom_Walker_Nav_Menu extends Walker_Nav_Menu {
	// Replce open li
	public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
			$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

			// Если это нужный элемент с классом addit-text-menu, добавляем data-text
			$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( (array) $item->classes ), $item, $args ) );
			$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

			// Стандартное создание элемента меню
			$id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
			$id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

			$output .= $indent . '<li' . $id . $class_names .'>';

			// Добавляем ссылку (или другие элементы) внутри <li>
			$attributes = ! empty( $item->attr_title ) ? ' title="' . esc_attr( $item->attr_title ) . '"' : '';
			$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
			$attributes .= ! empty( $item->xfn )        ? ' rel="' . esc_attr( $item->xfn        ) .'"' : '';
			$attributes .= ! empty( $item->url )        ? ' href="' . esc_attr( $item->url        ) .'"' : '';

			$title = apply_filters( 'the_title', $item->title, $item->ID );
			$item_output = $args->before;
			$item_output .= '<a'. $attributes .'>';
			$item_output .= $args->link_before . $title . $args->link_after;
			$item_output .= '</a>';
			$item_output .= $args->after;

			$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}

	// Replce open ul
	public function start_lvl( &$output, $depth = 0, $args = null ) {
			$indent = str_repeat("\t", $depth);
			$output .= "\n$indent<div class=\"sub-menu-wrapper\">\n";
			$output .= "$indent<ul class=\"sub-menu\">\n";
	}

	// Replce close ul
	public function end_lvl( &$output, $depth = 0, $args = null ) {
			$indent = str_repeat("\t", $depth);
			$output .= "$indent</ul>\n";
			$output .= "$indent</div>\n";
	}
}