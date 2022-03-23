<?php

function prontomas_init_navigation() {
	register_nav_menus(
		array(
			'desktop-menu' => 'Desktop Menu',
			'mobile-menu'  => 'Mobile Menu',
		)
	);
}

add_action('after_setup_theme', 'prontomas_init_navigation');

function clean_arr( &$array, $value ) {
	foreach ( $array as $key => $val ) {
		if ( is_array( $val ) ) {
			clean_arr( $array[ $key ], $value );
		} elseif ( $val === $value ) {
			unset( $array[ $key ] );
		}
	}
}


// Menu foreach setup (link icons | mega-menu | disabled link)
function prontomas_menu_foreach($items, $args) {

	$i = 0;
	foreach ($items as & $item) {

		// Mega Menu Wrapper
		$mega_menu = dt_get_field('mega_menu_wrapper', $item);
		if ($mega_menu) {
			clean_arr($item->classes, 'menu-item-has-children');
			$item->classes[] = 'mega-menu-wrapper';
		}

		if (
			in_array('mega-menu-wrap', $item->classes) ||
			in_array('menu-item-has-children', $item->classes)
		) {
			// Menu Link Icon
			$item->title = "<span>" . esc_html($item->title) . "</span>";
		} else {
			$item->title = "<span>" . esc_html($item->title) . "</span>";
		}

		$i ++;
	}

	return $items;
}

add_filter('wp_nav_menu_objects', 'prontomas_menu_foreach', 10, 2);





