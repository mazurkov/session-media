<?php  function case_studies_filter_ajax_handler() {
	check_ajax_referer('case_studies_nonce', 'nonce_code');

	$args = array(
		'post_type'      => 'case-studies',
		'posts_per_page' => 6,
		'paged'          => 1
	);

	if ($_POST['service'] != 'all') {
		$args['tax_query'] = array(
			array(
				'taxonomy' => 'services',
				'field'    => 'slug',
				'terms'    => $_POST['service']
			)
		);
	}

	$query = new WP_Query($args);

	// Posts
	ob_start();
	if ($query->have_posts()) {
		while ($query->have_posts()) {
			$query->the_post(); ?>
			<?php // get_case_study(get_the_ID()); ?>
			<?php get_case_study_wide(get_the_ID()); ?>
		<?php }
	}
	$posts = ob_get_clean();

	// Pagination
	ob_start(); ?>
    <div class="pagination-wrap">
		<?php if ($query->max_num_pages > 1): ?>
            <div data-page="<?php echo $_POST['page'] + 1 ?>" data-max="<?php echo $query->max_num_pages ?>" class="cs-lazy-load btn btn-green">
                Load More
            </div>
		<?php endif; ?>
    </div>
	<?php $pagination = ob_get_clean();

	echo json_encode([
		'posts'      => $posts,
		'pagination' => $pagination
	]);

	wp_die();
}

add_action('wp_ajax_case_studies_filter', 'case_studies_filter_ajax_handler');
add_action('wp_ajax_nopriv_case_studies_filter', 'case_studies_filter_ajax_handler');



function case_studies_lazy_load_ajax_handler() {
	check_ajax_referer('case_studies_nonce', 'nonce_code');

	$args = array(
		'post_type'      => 'case-studies',
		'posts_per_page' => 6,
		'paged'          => $_POST['page'] + 1
	);

	if ($_POST['service'] != 'all') {
		$args['tax_query'] = array(
			array(
				'taxonomy' => 'services',
				'field'    => 'slug',
				'terms'    => $_POST['service']
			)
		);
	}

	$query = new WP_Query($args);

	// Posts
	ob_start();
	if ($query->have_posts()) {
		while ($query->have_posts()) {
			$query->the_post(); ?>
			<?php // get_case_study(get_the_ID()); ?>
			<?php get_case_study_wide(get_the_ID()); ?>
		<?php }
	}
	$posts = ob_get_clean();

	// Pagination
	ob_start(); ?>
    <div class="pagination-wrap">
		<?php if ($query->max_num_pages > 1): ?>
            <div data-page="<?php echo $_POST['page'] + 1 ?>" data-max="<?php echo $query->max_num_pages ?>" class="cs-lazy-load btn btn-green">
                Load More
            </div>
		<?php endif; ?>
    </div>
	<?php $pagination = ob_get_clean();

	echo json_encode([
		'posts'      => $posts,
		'pagination' => $pagination
	]);

	wp_die();
}

add_action('wp_ajax_case_studies_lazy_load', 'case_studies_lazy_load_ajax_handler');
add_action('wp_ajax_nopriv_case_studies_lazy_load', 'case_studies_lazy_load_ajax_handler');
