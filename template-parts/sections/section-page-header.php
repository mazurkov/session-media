<section class="page-header <?php get_sub_field('cta_button_left') ? print 'page-header__large' : null; ?>">
    <div class="page-header__bg">
		<?php echo wp_get_attachment_image(get_sub_field('bg'), 'full'); ?>
    </div>

	<?php if (get_sub_field('video_background')):
		$video = get_sub_field('video_background'); ?>
        <video playsinline autoplay loop muted class="video">
            <source id="video-src" src="<?php echo $video['url'] ?>" type="<?php echo $video['mime_type'] ?>">
        </video>
        <div class="overlay"></div>
	<?php endif; ?>

    <div class="container">
        <div class="page-header__row">

			<?php if (is_page('173') || is_page('175')): ?>
                <h1 class="h3 page-header__subheading sub-heading uppercase">
					<?php echo get_sub_field('subheading') ?>
                </h1>

                <h2 class="h1 page-header__heading uppercase">
					<?php if (get_sub_field('heading')): ?>
						<?php the_sub_field('heading') ?>
					<?php else: ?>
						<?php the_title() ?>
					<?php endif; ?>
                </h2>

			<?php else: ?>
                <h3 class="page-header__subheading sub-heading uppercase">
					<?php echo get_sub_field('subheading') ?>
                </h3>

                <h1 class="page-header__heading uppercase">
	                <?php if (get_sub_field('heading')): ?>
		                <?php the_sub_field('heading') ?>
	                <?php else: ?>
		                <?php the_title() ?>
	                <?php endif; ?>
                </h1>
			<?php endif; ?>


            <div class="page-header__caption font-large">
				<?php echo get_sub_field('caption') ?>
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
