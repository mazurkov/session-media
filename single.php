<?php get_header(); ?>
<?php if (have_posts()) :
	while (have_posts()) :
		the_post(); ?>

        <div class="page-template-post-single">
            <section class="page-header">
                <div class="page-header__bg">
					<?php echo wp_get_attachment_image(get_field('background_image'), 'full'); ?>
                </div>
                <div class="container">
                    <div class="page-header__row">

                        <h1 class="page-header__heading uppercase">
							<?php if (get_field('heading')): ?>
								<?php the_field('heading'); ?>
							<?php else: ?>
								<?php the_title() ?>
							<?php endif; ?>
                        </h1>

                        <div class="page-header__caption font-large">
                            <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')) ?>"><?php echo get_the_author_meta('display_name') ?></a> <span class="divider">|</span> <?php echo get_the_date() ?> <span
                                    class="divider">|</span> <?php the_field('main_category'); ?>
                        </div>


						<?php if (get_sub_field('cta_button_left')): ?>
                            <div class="btn-wrap">
								<?php $btn = get_sub_field('cta_button_left'); ?>
								<?php if ($btn): ?>
                                    <a href="<?php echo $btn['url']; ?>" target="<?php echo $btn['target']; ?>" class="btn btn-green"><?php echo $btn['title']; ?></a>
								<?php endif; ?>

								<?php $btn = get_sub_field('cta_button_right'); ?>
								<?php if ($btn): ?>
                                    <a href="<?php echo $btn['url']; ?>" target="<?php echo $btn['target']; ?>" class="btn btn-orange"><?php echo $btn['title']; ?></a>
								<?php endif; ?>
                            </div>
						<?php endif; ?>

                    </div>
                </div>
            </section>
            <main class="post-content-section">
                <div class="container">
                    <div class="post-content-section__row">

                        <div class="content">
                            <div class="post-content">
								<?php the_content(); ?>
                            </div>
                        </div>

                        <aside class="sidebar">
                            <div class="author-widget">

                                <div class="author-photo">
                                    <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')) ?>">
										<?php echo get_avatar(get_the_author_meta('ID')); ?>
                                    </a>
									<?php if (get_field('twitter', 'user_' . get_the_author_meta('ID'))): ?>
                                        <a class="twitter-link" href="<?php echo get_field('twitter', 'user_' . get_the_author_meta('ID')) ?>" target="_blank">
                                            <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="twitter" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-twitter fa-w-16 fa-3x">
                                                <path fill="currentColor"
                                                      d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"
                                                      class=""></path>
                                            </svg>
                                        </a>
									<?php endif; ?>
                                </div>

                                <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')) ?>" class="author-name h5">
									<?php echo get_the_author_meta('display_name'); ?>
                                </a>

                                <div class="author-bio">
									<?php echo get_the_author_meta('description'); ?>
                                </div>
                            </div>

                            <div class="share-widget">
                                <h6 class="widget-title">Share this article</h6>

                                <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
                                    <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
                                    <a class="a2a_button_facebook"></a>
                                    <a class="a2a_button_twitter"></a>
                                    <a class="a2a_button_email"></a>
                                    <a class="a2a_button_linkedin"></a>
                                </div>
                                <script async src="https://static.addtoany.com/menu/page.js"></script>
                            </div>

                            <div class="newsletter-widget">
                                <h6 class="widget-title">
                                    Subscribe for weekly
                                    updates
                                </h6>

                                <div class="form form-newsletter">
									<?php echo do_shortcode('[contact-form-7 id="595" title="Newsletter"]') ?>
                                </div>

                            </div>

                        </aside>

                    </div>
                </div>
            </main>
            <section class="cta-section">
				<?php // Global
				$bg      = wp_get_attachment_image(dt_get_option('cta_bg'), 'full');
				$heading = 'Get SEO & PPC Knowledge Right To Your Inbox';
				$content = 'Covering Topics To Help In-House Marketers Grow Businesses';
				?>

                <div class="bg">
					<?php echo $bg; ?>
                </div>
                <div class="container">
                    <h2 class="h1 section-title uppercase white center"><?php echo $heading; ?></h2>
                    <div class="section-content white center font-extra-large">
						<?php echo $content; ?>
                    </div>
                    <div class="insight-form-wrap">
                        <div class="form">
							<?php echo do_shortcode('[contact-form-7 id="594" title="Get A Insights"]') ?>
                        </div>
                    </div>
                </div>
            </section>

			<?php if (get_field('related_posts')): ?>
                <section class="related-posts">
                    <div class="container">
                        <h2 class="section-title center uppercase title-line">
                            Other Content You May Like
                        </h2>
                        <div class="posts-grid">
							<?php
							$args = array(
								'post_type'      => 'post',
								'posts_per_page' => - 1,
								'post__in'       => get_field('related_posts'),
							);

							$query = new WP_Query($args);
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
							} ?>
                        </div>
                    </div>
                </section>
			<?php endif; ?>

        </div>

	<?php endwhile;
endif; ?>
<?php get_footer(); ?>
