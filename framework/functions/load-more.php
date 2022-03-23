<?php function blog_load_more_ajax_handler() {

	$args                = json_decode(stripslashes($_POST['query']), true);
	$args['paged']       = $_POST['page'] + 1; // we need next page to be loaded
	$args['post_status'] = 'publish';

	query_posts($args);
	if (have_posts()) :
		while (have_posts()): the_post(); ?>

			<?php if (get_post_type() == 'post'): ?>
				<?php get_post_tempalte(get_the_ID()) ?>
			<?php elseif (get_post_type() == 'services'): ?>
				<?php get_service_tempalte(get_the_ID()) ?>
			<?php elseif (get_post_type() == 'locations'): ?>
				<?php get_location_tempalte(get_the_ID()) ?>
			<?php endif; ?>

		<?php endwhile;
	endif;
	die; // here we exit the script and even no wp_reset_query() required!
}


add_action('wp_ajax_blog_load_more', 'blog_load_more_ajax_handler'); // wp_ajax_{action}
add_action('wp_ajax_nopriv_blog_load_more', 'blog_load_more_ajax_handler'); // wp_ajax_nopriv_{action}
