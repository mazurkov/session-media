<?php

// Constants
define('DT_THEME_PATH', get_template_directory());
define('DT_THEME_URL', get_template_directory_uri());
define('DT_ASSETS_URL', get_template_directory_uri() . '/assets');
define('DT_ASSETS_PATH', get_template_directory() . '/assets');
define('DT_PATH', get_template_directory() . '/framework');
define('DT_URL', get_template_directory_uri() . '/framework');

// ACF Config
if (class_exists('acf')) {
	get_template_part('framework/acf/acf-config');
}

// Frontend Assets
get_template_part('framework/enqueue_scripts');
get_template_part('framework/enqueue_styles');

// General Theme Setup
get_template_part('framework/general');

// Validation
get_template_part('framework/additional/validation');

// Navigation
get_template_part('framework/functions/nav');

// Contact Form
get_template_part('framework/functions/case-studies-filter');

// Pagination
get_template_part('framework/functions/pagination');

// Disable Gutenberg
if (dt_get_option('disable_gutenberg')):
	add_filter('use_block_editor_for_post', '__return_false', 10);
	add_filter('use_block_editor_for_post', '__return_false', 10);
endif;

function get_case_study($id = null) {
	$id ?? get_the_ID();
	ob_start(); ?>

    <article <?php post_class('case-study', $id); ?>>
        <div class="case-study__thumbnail">
			<?php echo get_the_post_thumbnail($id, 'full'); ?>
            <div class="type">
                <div class="type__inner">
                    Campaign: <?php the_field('campaign', $id); ?>
                </div>
            </div>
            <div class="case-study__logo">
				<?php echo wp_get_attachment_image(dt_get_field('logo', $id), 'full'); ?>
            </div>
        </div>
        <div class="case-study__info">
            <h3 class="h5 case-study__title title-line"><?php echo get_the_title($id) ?></h3>
            <div class="case-study__excerpt post-content">
				<?php dt_the_field('excerpt', $id) ?>
            </div>
            <div class="btn-wrap center">
                <a href="<?php echo get_the_permalink($id); ?>" class="btn btn-orange-2 btn-medium">Go to Case Study</a>
            </div>
        </div>
    </article>

	<?php echo ob_get_clean();
}

function get_case_study_wide($id = null) {
	$id ?? get_the_ID();
	ob_start(); ?>

    <article <?php post_class('case-study-wide', $id); ?>>
        <div class="case-study-wide__thumbnail">
            <div class="type">
                <div class="type__inner">
                    Campaign: <?php the_field('campaign', $id); ?>
                </div>
            </div>
            <div class="case-study-wide__logo">
				<?php echo wp_get_attachment_image(dt_get_field('logo', $id), 'full'); ?>
            </div>
        </div>
        <div class="case-study-wide__info">
            <h2 class="h2 case-study-wide__title title-line"><?php echo get_the_title($id) ?></h2>
            <div class="case-study-wide__excerpt post-content">
				<?php dt_the_field('excerpt', $id) ?>
            </div>
            <div class="btn-wrap center">
                <a href="<?php echo get_the_permalink($id); ?>" class="btn btn-orange-2 btn-medium">Go to Case Study</a>
            </div>
        </div>
    </article>

	<?php echo ob_get_clean();
}
