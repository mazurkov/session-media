<section class="section-about-section">
    <div class="container">
        <div class="section-row">
            <div class="col-left">
				<?php if (get_sub_field('heading')): ?>
                    <h2 class="h3 section-title uppercase title-line "><?php the_sub_field('heading'); ?></h2>
				<?php endif; ?>
				<?php if (get_sub_field('content')): ?>
                    <div class="post-content font-extra-large">
						<?php the_sub_field('content'); ?>
                    </div>
				<?php endif; ?>
            </div>

            <div class="col-right">
                <div class="video-wrap">
					<?php echo wp_get_attachment_image(get_sub_field('image'), 'full'); ?>
					<?php $link = get_sub_field('video_link') ?>
					<?php if ($link): ?>
                        <div class="video-link">
                            <a href="<?php echo $link['url'] ?>" class="icon popup-youtube">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="play" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-play fa-w-14 fa-3x">
                                    <path fill="currentColor"
                                          d="M424.4 214.7L72.4 6.6C43.8-10.3 0 6.1 0 47.9V464c0 37.5 40.7 60.1 72.4 41.3l352-208c31.4-18.5 31.5-64.1 0-82.6z"
                                          class=""></path>
                                </svg>
                            </a>
                        </div>
					<?php endif; ?>
                </div>
            </div>

        </div>
    </div>
</section>
