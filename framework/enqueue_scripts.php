<?php function prontomas_enqueue_scripts() {

	// Register Scritps
	wp_register_script('modernizr', DT_ASSETS_URL . '/vendors/modernizr/modernizr.js', array('jquery'), null, true);
	wp_register_script('scroll-lock', DT_ASSETS_URL . '/vendors/scroll-lock/scroll-lock.min.js', array('jquery'), null, true);
	wp_register_script('aos', DT_ASSETS_URL . '/vendors/aos/aos.js', array('jquery'), null, true);
	wp_register_script('swiper', DT_ASSETS_URL . '/vendors/swiper/swiper.min.js', array('jquery'), null, true);
	wp_register_script('selectric', DT_ASSETS_URL . '/vendors/selectric/selectric.js', array('jquery'), null, true);
	wp_register_script('sweetalert2', DT_ASSETS_URL . '/vendors/sweetalert2/sweetalert2.js', array('jquery'), null, true);
	wp_register_script('magnific-popup', DT_ASSETS_URL . '/vendors/magnific-popup/jquery.magnific-popup.min.js', array('jquery'), null, true);
	wp_register_script('choises', DT_ASSETS_URL . '/vendors/choises/choices.min.js', array('jquery'), null, true);
	wp_register_script('sticky-sidebar', DT_ASSETS_URL . '/vendors/sticky-sidebar/theia-sticky-sidebar.js', array('jquery'), null, true);
	wp_register_script('main', DT_ASSETS_URL . '/js/main.min.js', array('jquery'), null, true);

	// Include Libs & Plugins
	wp_enqueue_script('modernizr');
	wp_enqueue_script('jquery');
	wp_enqueue_script('scroll-lock');
	wp_enqueue_script('swiper');
	wp_enqueue_script('selectric');
	wp_enqueue_script('sweetalert2');
	wp_enqueue_script('magnific-popup');
	wp_enqueue_script('choises');
	wp_enqueue_script('sticky-sidebar');
	wp_enqueue_script('aos');


	// Main JS
	wp_enqueue_script('main');

	global $wp_query;
	$scripts_object = array(
		'case_studies_nonce' => wp_create_nonce('case_studies_nonce'),
		'ajaxurl'            => admin_url('admin-ajax.php'),
		'home_url'           => home_url('/'),

		'posts'        => json_encode($wp_query->query_vars),
		'current_page' => get_query_var('paged') ? get_query_var('paged') : 1,
		'max_page'     => $wp_query->max_num_pages,

		'cf_success_notification' => dt_get_option('cf_success_notification'),
		'cf_error_notification'   => dt_get_option('cf_error_notification'),
	);
	wp_localize_script('main', 'PHP', $scripts_object);
}

add_action('wp_enqueue_scripts', 'prontomas_enqueue_scripts');







