<section class="section-team">
    <div class="container">
        <h2 class="h3 section-title uppercase center title-line "><?php the_sub_field('heading'); ?></h2>
    </div>

    <div class="container container-slider">
        <div class="swiper-container team-slider">
            <div class="swiper-wrapper  team-grid">
				<?php $i = 0;
				foreach (get_sub_field('team') as $item): $i ++; ?>
                    <div class="swiper-slide team-member__wrap">
                        <div data-index="<?php echo $i; ?>" data-name="<?php echo $item['name'] ?>" class="team-member <?php $i == 1 ? print 'active' : null; ?>">
							<?php echo wp_get_attachment_image($item['photo'], 'full'); ?>
                        </div>

                        <h3 data-index="<?php echo $i; ?>" data-name="<?php echo $item['name'] ?>" class="h6 name"><?php echo $item['name']; ?></h3>
                        <div class="position"><?php echo $item['position']; ?></div>

                    </div>
				<?php endforeach; ?>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="team-preview">
			<?php $i = 0;
			foreach (get_sub_field('team') as $item): $i ++; ?>
                <div data-index="<?php echo $i; ?>" data-name="<?php echo $item['name'] ?>" class="team-member-view <?php $i == 1 ? print 'active' : null; ?>">
                    <div class="photo">
						<?php echo wp_get_attachment_image($item['photo'], 'full'); ?>
                    </div>
                    <div class="info">
                        <h3 class="h4 name"><?php echo $item['name']; ?></h3>
                        <div class="position h6"><?php echo $item['position']; ?></div>
                        <div class="info__inner">
                            <div class="description post-content">
								<?php echo $item['short_description'] ?>
                            </div>

                            <div class="info-footer">
                                <div class="info-nav">
                                    <button class="prev nav-btn">
                                        <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="chevron-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" class="svg-inline--fa fa-chevron-left fa-w-8 fa-3x">
                                            <path fill="currentColor"
                                                  d="M231.293 473.899l19.799-19.799c4.686-4.686 4.686-12.284 0-16.971L70.393 256 251.092 74.87c4.686-4.686 4.686-12.284 0-16.971L231.293 38.1c-4.686-4.686-12.284-4.686-16.971 0L4.908 247.515c-4.686 4.686-4.686 12.284 0 16.971L214.322 473.9c4.687 4.686 12.285 4.686 16.971-.001z"
                                                  class=""></path>
                                        </svg>
                                    </button>
                                    <button class="next nav-btn">
                                        <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" class="svg-inline--fa fa-chevron-right fa-w-8 fa-3x">
                                            <path fill="currentColor"
                                                  d="M24.707 38.101L4.908 57.899c-4.686 4.686-4.686 12.284 0 16.971L185.607 256 4.908 437.13c-4.686 4.686-4.686 12.284 0 16.971L24.707 473.9c4.686 4.686 12.284 4.686 16.971 0l209.414-209.414c4.686-4.686 4.686-12.284 0-16.971L41.678 38.101c-4.687-4.687-12.285-4.687-16.971 0z"
                                                  class=""></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
			<?php endforeach; ?>
        </div>
    </div>

</section>
