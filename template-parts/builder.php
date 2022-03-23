<?php if (get_field('sections')): ?>
    <div class="sections-wrap">

		<?php if (have_rows('sections')):
			while (have_rows('sections')) : the_row();
				$section = trim(get_row_layout()); ?>

				<?php if ($section == 'hero_header') { ?>
					<?php get_template_part('template-parts/sections/section-hero-header'); ?>
				<?php } ?>

				<?php if ($section == 'page_header') { ?>
					<?php get_template_part('template-parts/sections/section-page-header'); ?>
				<?php } ?>

				<?php if ($section == 'call_to_action') { ?>
					<?php get_template_part('template-parts/sections/section-cta'); ?>
				<?php } ?>

				<?php if ($section == 'call_to_action_image') { ?>
					<?php get_template_part('template-parts/sections/section-cta-image'); ?>
				<?php } ?>

				<?php if ($section == 'promo_video') { ?>
					<?php get_template_part('template-parts/sections/section-promo-video'); ?>
				<?php } ?>

				<?php if ($section == 'cases_grid') { ?>
					<?php get_template_part('template-parts/sections/section-cases-grid'); ?>
				<?php } ?>

				<?php if ($section == 'clients') { ?>
					<?php get_template_part('template-parts/sections/section-clients'); ?>
				<?php } ?>

				<?php if ($section == 'offers') { ?>
					<?php get_template_part('template-parts/sections/section-offers'); ?>
				<?php } ?>

				<?php if ($section == 'testimonials') { ?>
					<?php get_template_part('template-parts/sections/section-testimonials'); ?>
				<?php } ?>

				<?php if ($section == 'testimonial') { ?>
					<?php get_template_part('template-parts/sections/section-testimonial'); ?>
				<?php } ?>

				<?php if ($section == 'steps') { ?>
					<?php get_template_part('template-parts/sections/section-steps'); ?>
				<?php } ?>

				<?php if ($section == 'latest_posts') { ?>
					<?php get_template_part('template-parts/sections/section-latest-posts'); ?>
				<?php } ?>

				<?php if ($section == 'content_section') { ?>
					<?php get_template_part('template-parts/sections/section-content-section'); ?>
				<?php } ?>

				<?php if ($section == 'book_description') { ?>
					<?php get_template_part('template-parts/sections/section-book-description'); ?>
				<?php } ?>

				<?php if ($section == 'icon_boxes') { ?>
					<?php get_template_part('template-parts/sections/section-icon-boxes'); ?>
				<?php } ?>

				<?php if ($section == 'faq') { ?>
					<?php get_template_part('template-parts/sections/section-faq'); ?>
				<?php } ?>

				<?php if ($section == 'socials_grid') { ?>
					<?php get_template_part('template-parts/sections/section-socials-grid'); ?>
				<?php } ?>

				<?php if ($section == 'about_section') { ?>
					<?php get_template_part('template-parts/sections/section-about-section'); ?>
				<?php } ?>

				<?php if ($section == 'content_image') { ?>
					<?php get_template_part('template-parts/sections/section-content-image'); ?>
				<?php } ?>

				<?php if ($section == 'team') { ?>
					<?php get_template_part('template-parts/sections/section-team'); ?>
				<?php } ?>

                <?php if ($section == 'more_about_us') { ?>
					<?php get_template_part('template-parts/sections/section-more-about-us'); ?>
				<?php } ?>

				<?php if ($section == 'webinars') { ?>
					<?php get_template_part('template-parts/sections/section-webinars'); ?>
				<?php } ?>

				<?php if ($section == 'form_section') { ?>
					<?php get_template_part('template-parts/sections/section-form'); ?>
				<?php } ?>

                <?php if ($section == 'results_in_number') { ?>
					<?php get_template_part('template-parts/sections/section-results-in-numbers'); ?>
				<?php } ?>

                <?php if ($section == 'result_lists') { ?>
					<?php get_template_part('template-parts/sections/section-result_lists'); ?>
				<?php } ?>

                <?php if ($section == 'campaigns') { ?>
					<?php get_template_part('template-parts/sections/section-campaigns'); ?>
				<?php } ?>

                <?php if ($section == 'case_study_content') { ?>
					<?php get_template_part('template-parts/sections/section-case-study-content'); ?>
				<?php } ?>

                <?php if ($section == 'section-cases-pricing') { ?>
                    <?php get_template_part('template-parts/sections/section-cases-pricing'); ?>
                <?php } ?>

			<?php endwhile;
		endif; ?>
    </div>
<?php endif; ?>
