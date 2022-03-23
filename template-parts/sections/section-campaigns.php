<section class="section-campaigns">
    <div class="container">

		<?php if (get_sub_field('heading')): ?>
            <h2 class="h3 section-title uppercase title-line line-left"><?php the_sub_field('heading'); ?></h2>
		<?php endif; ?>

		<?php if (get_sub_field('campaigns')): ?>
            <div class="campaigns-grid">
				<?php foreach (get_sub_field('campaigns') as $item): ?>
                    <div class="campaign-row">
                        <div class="col-photo">
							<?php echo wp_get_attachment_image($item['photo'], 'full'); ?>
                            <div class="type">
								<?php echo $item['type'] ?>
                            </div>
                        </div>
                        <div class="col-content">
                            <h3 class="h5 content-title uppercase title-line line-left"><?php echo $item['heading'] ?></h3>
                            <div class="post-content">
								<?php echo $item['content'] ?>
                            </div>
                        </div>
                    </div>
				<?php endforeach; ?>
            </div>
		<?php endif; ?>


    </div>
</section>
