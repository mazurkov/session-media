<?php function prontomas_enqueue_styles() {

	// Register Styles
	wp_register_style('aos', DT_ASSETS_URL . '/vendors/aos/aos.css', array(), null);
	wp_register_style('selectric', DT_ASSETS_URL . '/vendors/selectric/selectric.css', array(), null);
	wp_register_style('swiper', DT_ASSETS_URL . '/vendors/swiper/swiper.min.css', array(), null);
	wp_register_style('sweetalert2', DT_ASSETS_URL . '/vendors/sweetalert2/sweetalert.min.css', array(), null);
	wp_register_style('magnific-popup', DT_ASSETS_URL . '/vendors/magnific-popup/magnific-popup.css', array(), null);
	wp_register_style('choises', DT_ASSETS_URL . '/vendors/choises/choices.min.css', array(), null);
	wp_register_style('main', DT_ASSETS_URL . '/css/main.css', array(), null);

	// Include Libs & Plugins
	wp_enqueue_style('aos');
	wp_enqueue_style('selectric');
	wp_enqueue_style('sweetalert2');
	wp_enqueue_style('swiper');
	wp_enqueue_style('choises');
	wp_enqueue_style('magnific-popup');

	// Main CSS
	wp_enqueue_style('main');
}

add_action('wp_enqueue_scripts', 'prontomas_enqueue_styles');






// include admin script
function gcc_admin_styles() {
	wp_enqueue_style( 'admin-css', get_template_directory_uri() . '/assets/css/admin.css' );
}

add_action( 'admin_enqueue_scripts', 'gcc_admin_styles' );
