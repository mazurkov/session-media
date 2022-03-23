<section class="section-steps">
    <div class="container">
        <h2 class="section-title uppercase title-line">
			<?php the_sub_field('heading'); ?>
        </h2>
        <div class="section-subtitle">
			<?php the_sub_field('subheading'); ?>
        </div>

        <div class="steps-grid">
			<?php foreach (get_sub_field('steps') as $item): ?>
                <div class="steps-grid__item">
                    <div class="icon">
						<?php echo wp_get_attachment_image($item['icon'], 'full'); ?>
                    </div>
                    <div class="timeline">
                        <div class="timeline-circle"></div>
                    </div>
                    <h3 class="h5 step-title uppercase"><?php echo $item['title'] ?></h3>
                    <div class="step-description">
						<?php echo $item['description'] ?>
                    </div>
                </div>
			<?php endforeach; ?>
        </div>

    </div>
</section>
