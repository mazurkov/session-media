<section class="section-news ">
    <div class="container">
        <h2 class="section-title center uppercase title-line">
			<?php the_sub_field('heading'); ?>
        </h2>
		<?php if (get_sub_field('grid_layout') == 'masonry'): ?>
            <div class="posts-masonry">
				<?php $args = array(
					'post_type'      => 'post',
					'posts_per_page' => 4,
				);
				$query      = new WP_Query($args);
				if ($query->have_posts()) {
					while ($query->have_posts()) {
						$query->the_post(); ?>

                        <article <?php post_class(); ?>>
							<?php if (get_field('post-thumbnail')): ?>
								<?php echo wp_get_attachment_image(get_field('post-thumbnail'), 'full'); ?>
							<?php else: ?>
								<?php the_post_thumbnail(); ?>
							<?php endif; ?>
                            <div class="content">
                                <div class="post-date"><?php echo get_the_date() ?></div>
                                <h3 class="post-title"><?php the_title() ?></h3>
                            </div>
                            <a href="<?php the_permalink(); ?>" class="permalink"></a>
                        </article>

					<?php }
				}
				wp_reset_postdata(); ?>
            </div>
		<?php elseif (get_sub_field('grid_layout') == 'grid'): ?>

            <div class="posts-grid">
				<?php $args = array(
					'post_type'      => 'post',
					'posts_per_page' => wp_is_mobile() ? 3 : 6,
				);
				$query      = new WP_Query($args);
				if ($query->have_posts()) {
					while ($query->have_posts()) {
						$query->the_post(); ?>

                        <article <?php post_class('post-template'); ?>>
                            <a href="<?php the_permalink(); ?>" class="post__thumbnail">
								<?php the_post_thumbnail(); ?>

								<?php if (get_field('main_category')): ?>
                                    <span class="main-category">
                                    <?php the_field('main_category'); ?>
                                </span>
								<?php endif; ?>

                            </a>
                            <div class="post__info">
                                <div class="post__date"><?php echo get_the_date(); ?></div>
                                <a href="<?php the_permalink(); ?>" class="post__permalink">
                                    <h2 class="post__title"><?php the_title() ?></h2>
                                </a>
                            </div>
                        </article>

					<?php }
				}
				wp_reset_postdata(); ?>
            </div>

		<?php endif; ?>
    </div>
</section>
