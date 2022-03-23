<section class="home-header">
    <div class="home-header__bg">
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
        <div class="home-header__row">

            <h3 class="home-header__subheading sub-heading uppercase">
				<?php echo get_sub_field('subheading') ?>
            </h3>

            <h1 class="home-header__heading uppercase">
				<?php echo get_sub_field('heading') ?>
            </h1>

            <div class="home-header__caption font-large">
				<?php echo get_sub_field('caption') ?>
            </div>

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

        </div>
    </div>
    <img class="logo-transparent" src="<?php echo DT_ASSETS_URL . '/img/logo-transparent.png' ?>" alt="">
</section>
