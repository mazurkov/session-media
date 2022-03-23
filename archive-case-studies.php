<?php get_header(); ?>

<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
<?php global $wp_query; ?>

<div class="page-template">

	<?php $the_query = new WP_Query(['page_id' => 259]);
	while ($the_query->have_posts()) {
		$the_query->the_post(); ?>
		<?php get_template_part('template-parts/builder') ?>
	<?php }
	wp_reset_postdata(); ?>

    <section class="case-studies-section">
        <div class="container">
			<?php $terms = get_terms('services',
				[
					'hide_empty' => false,
				]); ?>

            <div class="service-filter">
                <label>
                    <select name="services" class="select">
                        <option value="all" <?php ! isset($_GET['service']) || $_GET['service'] == 'all' ? print 'selected' : null; ?>>All Services</option>
						<?php foreach ($terms as $term): ?>
                            <option <?php isset($_GET['service']) && $_GET['service'] == $term->slug ? print 'selected' : null; ?> value="<?php echo $term->slug ?>"><?php echo $term->name ?></option>
						<?php endforeach; ?>
                    </select>
                </label>
            </div>

            <div class="cases-grid">
				<?php $args = array(
					'posts_per_page' => 6,
					'post_type' => 'case-studies',
					'paged'     => $paged,
				);

				if (isset($_GET['service']) && $_GET['service'] != 'all') {
					$args['tax_query'] = array(
						array(
							'taxonomy'       => 'services',
							'field'          => 'slug',
							'terms'          => $_GET['service']
						)
					);
				} ?>

				<?php query_posts($args);
				if (have_posts()) :
					while (have_posts()) :
						the_post(); ?>

						<?php // get_case_study(get_the_ID()); ?>
						<?php get_case_study_wide(get_the_ID()); ?>

					<?php endwhile;
				else: ?>

                <h3>Results not found</h3>

                <?php endif; ?>
            </div>

            <div class="pagination-wrap">
				<?php if ($wp_query->max_num_pages > 1): ?>
                    <div data-page="<?php echo $paged ?>" data-max="<?php echo $wp_query->max_num_pages ?>" class="cs-lazy-load btn btn-green">
                        Load More
                    </div>
				<?php endif; ?>
            </div>

        </div>
    </section>

	<?php get_template_part('template-parts/sections/section-cta'); ?>

</div>


<?php get_footer(); ?>
