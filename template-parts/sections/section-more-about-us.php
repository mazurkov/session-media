<section class="more-about-us">
    <div class="container">
        <h2 class="section-title uppercase center title-line "><?php the_sub_field('heading'); ?></h2>

        <div class="map-block">
            <div class="col-left">
                <div class="map-wrap">
					<?php the_sub_field('map'); ?>
                </div>
            </div>
            <div class="col-right">
                <h3 class="section-title  uppercase  title-line line-left"><?php the_sub_field('s1_heading'); ?></h3>
                <div class="content  font-extra-large">
					<?php the_sub_field('s1_content'); ?>
                </div>
            </div>
        </div>

        <div class="testimonial-block">
            <div class="col-left">
                <h3 class="section-title  uppercase  title-line line-left"><?php the_sub_field('s2_heading'); ?></h3>
                <div class="content font-extra-large">
					<?php the_sub_field('s2_content'); ?>
                </div>
            </div>

            <div class="col-right">

                <div class="testimonial">
					<?php $testimonial = get_sub_field('s1_testimonial'); ?>
                    <div class="testimonial__quote">
                        “
                    </div>
                    <div class="testimonial__content">
						<?php echo $testimonial['feedback']; ?>
                    </div>
                    <h5 class="testimonial__author uppercase">
						<?php echo $testimonial['name'] ?>
                    </h5>
                    <p class="testimonial__position ">
						<?php echo $testimonial['position'] ?>
                    </p>
                    <div class="testimonial__author-photo">
						<?php echo wp_get_attachment_image($testimonial['photo'], 'full'); ?>
                    </div>
                </div>

            </div>
        </div>

        <div class="education-block">
            <div class="col-left">
                <div class="photo-wrap">
					<?php echo wp_get_attachment_image(get_sub_field('photo'), 'full'); ?>

                    <div class="video-link">
                        <a href="<?php the_sub_field('video_link'); ?>" class="icon">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="play" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-play fa-w-14 fa-3x">
                                <path fill="currentColor"
                                      d="M424.4 214.7L72.4 6.6C43.8-10.3 0 6.1 0 47.9V464c0 37.5 40.7 60.1 72.4 41.3l352-208c31.4-18.5 31.5-64.1 0-82.6z"
                                      class=""></path>
                            </svg>
                        </a>
                    </div>

                </div>
            </div>
            <div class="col-right">
                <h3 class="section-title  uppercase  title-line line-left"><?php the_sub_field('s3_heading'); ?></h3>
                <div class="content  font-extra-large">
					<?php the_sub_field('s3_content'); ?>
                </div>
                <ul class="list">
					<?php foreach (get_sub_field('list') as $item): ?>
                        <li class="list__item">
                            <div class="icon">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-check-circle fa-w-16 fa-3x">
                                    <path fill="#EF7216"
                                          d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"
                                          class=""></path>
                                </svg>
                            </div>
                            <div class="label">
								<?php echo $item['item']; ?>
                            </div>
                        </li>
					<?php endforeach; ?>
                </ul>

            </div>
        </div>

        <div class="testimonial-block">
            <div class="col-left">
                <h3 class="section-title  uppercase  title-line line-left"><?php the_sub_field('s4_heading'); ?></h3>
                <div class="content font-extra-large">
				    <?php the_sub_field('s4_content'); ?>
                </div>
            </div>

            <div class="col-right">
                <div class="testimonial">
				    <?php $testimonial = get_sub_field('s4_testimonial'); ?>
                    <div class="testimonial__quote">
                        “
                    </div>
                    <div class="testimonial__content post-content">
					    <?php echo $testimonial['feedback']; ?>
                    </div>
                    <h5 class="testimonial__author uppercase">
					    <?php echo $testimonial['name'] ?>
                    </h5>
                    <p class="testimonial__position ">
					    <?php echo $testimonial['position'] ?>
                    </p>
                    <div class="testimonial__author-photo">
					    <?php echo wp_get_attachment_image($testimonial['photo'], 'full'); ?>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>
