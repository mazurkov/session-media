<?php

// ACF Theme Options Panel
if ( function_exists( 'acf_add_options_page' ) ) {
	acf_add_options_page( array(
		'page_title' => esc_attr__( 'Site Settings', 'gustav' ),
		'menu_slug'  => 'theme-general-settings',
		'capability' => 'read',
		'redirect'   => false,
		'position'   => 60
	) );
}

// Save Fields in JSON
function DT_acf_json_save_point( $path ) {
	$path = DT_PATH . '/acf/acf-json';

	return $path;
}

add_filter( 'acf/settings/save_json', 'DT_acf_json_save_point' );


// Load Fields from JSON
function DT_acf_json_load_point( $paths ) {
	unset( $paths[0] );
	$paths[] = DT_PATH . '/acf/acf-json';

	return $paths;
}

add_filter( 'acf/settings/load_json', 'DT_acf_json_load_point' );


// Google API Key form Fields
function DT_acf_admin_google_api_key() {
	if ( function_exists( 'acf_update_setting' ) ) {
		acf_update_setting( 'google_api_key', DT_get_option( 'google_api_key' ) );
	}
}

add_action( 'acf/init', 'DT_acf_admin_google_api_key' );









