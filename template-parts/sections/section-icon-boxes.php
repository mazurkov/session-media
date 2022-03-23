<section class="section-icon-boxes">
    <div class="container">
        <h2 class="section-title uppercase title-line center"><?php the_sub_field('heading'); ?></h2>

        <div class="boxes-grid">
			<?php foreach (get_sub_field('boxes') as $item): ?>
                <div class="box-item">

                    <div class="box-item__icon">
						<?php $ext = pathinfo($item['icon'], PATHINFO_EXTENSION); ?>
						<?php if ($ext === 'svg'): ?>
							<?php dt_the_svg($item['icon']); ?>
						<?php else: ?>
                            <img src="<?php echo $item['icon'] ?>" alt="">
						<?php endif; ?>
                    </div>

                    <h3 class="box-item__title"><?php echo $item['title'] ?></h3>
                    <div class="box-item__description">
						<?php echo $item['description'] ?>
                    </div>
                </div>
			<?php endforeach; ?>
        </div>

    </div>
</section>
