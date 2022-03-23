<section class="case-study-content clearfix">
    <div class="container clearfix post-content">

		<?php if (get_sub_field('photo')): ?>
            <div class="video-wrap">
				<?php echo wp_get_attachment_image(get_sub_field('photo'), 'full'); ?>

				<?php if (get_sub_field('video_link')): ?>
                    <div class="video-link">
                        <a href="<?php the_sub_field('video_link'); ?>" class="icon popup-youtube">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="play" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-play fa-w-14 fa-3x">
                                <path fill="currentColor" d="M424.4 214.7L72.4 6.6C43.8-10.3 0 6.1 0 47.9V464c0 37.5 40.7 60.1 72.4 41.3l352-208c31.4-18.5 31.5-64.1 0-82.6z" class=""></path>
                            </svg>
                        </a>
                    </div>
				<?php endif; ?>

				<?php if (get_sub_field('logo')): ?>
                    <div class="logo">
						<?php echo wp_get_attachment_image(get_sub_field('logo'), 'full'); ?>
                    </div>
				<?php endif; ?>
            </div>
		<?php endif; ?>

		<?php the_sub_field('content'); ?>

    </div>
</section>
