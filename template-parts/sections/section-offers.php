<section class="section-offers">
    <div class="container">

        <h2 class="section-title uppercase title-line">
			<?php the_sub_field('heading'); ?>
        </h2>

        <div class="offers-grid">
			<?php foreach (get_sub_field('offers') as $item): ?>
                <div class="offer-row">

                    <div class="col-image">
						<?php echo wp_get_attachment_image($item['image'], 'full'); ?>
                    </div>

                    <div class="col-content">
                        <h3 class="uppercase offer-title"><?php echo $item['title'] ?></h3>
                        <div class="offer-description font-extra-large">
							<?php echo $item['description'] ?>
                        </div>
						<?php if ($item['link']): ?>
                          <div class="btn-wrap">
                              <a href="<?php echo $item['link']['url'] ?>" target="<?php echo $item['link']['target'] ?>" class="btn btn-small  <?php echo $item['button_color'] ?>">

		                         <span class="hide"><?php echo $item['title'] ?></span>
		                          <?php echo $item['link']['title']; ?>
                              </a>
                          </div>
						<?php endif; ?>
                    </div>

                </div>
			<?php endforeach; ?>
        </div>

    </div>
</section>
