<section class="section-clients">
    <div class="section-row">
        <div class="col-left">
            <div class="content">
				<?php if (get_sub_field('override_global_data')): ?>
                    <h2 class="h3 section-title uppercase white"><?php the_sub_field('heading') ?></h2>
                    <p class="section-subtitle white"><?php the_sub_field('subheading') ?></p>
				<?php else: ?>
                    <h2 class="h3 section-title uppercase white"><?php dt_the_option('sc_heading') ?></h2>
                    <p class="section-subtitle white"><?php dt_the_option('sc_subheading') ?></p>
				<?php endif; ?>
            </div>
        </div>
        <div class="col-right">
            <div class="swiper-container clients-slider">
                <div class="swiper-wrapper">

					<?php $clients = false;
					if (get_sub_field('override_global_data')): ?>
						<?php
						$clients = get_sub_field('clients') ? get_sub_field('clients') : dt_get_option('sc_clients');
						?>
					<?php else: ?>
						<?php $clients = dt_get_option('sc_clients'); ?>
					<?php endif; ?>

					<?php if ($clients):
						foreach ($clients as $item): ?>
                            <div class="swiper-slide">
								<?php echo $item['link']['title'] ?>
								<?php echo wp_get_attachment_image($item['logo'], 'full'); ?>
                            </div>
						<?php endforeach;
					endif; ?>

                </div>
            </div>
        </div>
    </div>
</section>
