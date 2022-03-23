<section class="promo-video">
    <div class="col-left">
        <div class="bg">
			<?php echo wp_get_attachment_image(get_sub_field('bg'), 'full'); ?>
        </div>
        <div class="content">
            <h2 class="h4 section-title white uppercase"><?php the_sub_field('heading'); ?></h2>
            <div class="section-subtitle"><?php the_sub_field('content'); ?></div>
        </div>
    </div>
    <div class="col-right">
        <div class="video-link">

			<?php $link = get_sub_field('video_link'); ?>
            <a href="<?php echo $link['url'] ?>" target="<?php echo $link['target'] ?>" class="icon popup-youtube">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="play" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-play fa-w-14 fa-3x">
                    <path fill="currentColor"
                          d="M424.4 214.7L72.4 6.6C43.8-10.3 0 6.1 0 47.9V464c0 37.5 40.7 60.1 72.4 41.3l352-208c31.4-18.5 31.5-64.1 0-82.6z"
                          class=""></path>
                </svg>
            </a>
            <a href="<?php echo $link['url'] ?>" target="<?php echo $link['target'] ?>" class="label popup-youtube">WATCH OUR VIDEO</a>

        </div>
    </div>
</section>
