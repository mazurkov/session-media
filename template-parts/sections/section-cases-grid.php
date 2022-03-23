<section class="section-cases">
    <div class="container">
        <h2 class="section-title uppercase title-line">
			<?php the_sub_field('heading'); ?>
        </h2>

        <div class="cases-grid">
			<?php foreach (get_sub_field('cases') as $item): ?>
                <article class="case-item">
                    <div class="case-item__logo">
						<?php echo wp_get_attachment_image($item['logo'], 'full') ?>
                    </div>
                    <strong class="case-item__heading"><?php echo $item['heading'] ?></strong>
                    <p class="case-item__subheading uppercase h6"><?php echo $item['subheading'] ?></p>
                    <div class="case-item__description ">
						<?php echo $item['description']; ?>
                    </div>

					<?php $permalink = $item['permalink'] ?>
					<?php if ($permalink): ?>
                        <div class="btn-wrap center">
                            <a href="<?php echo $permalink['url'] ?>" target="<?php echo $permalink['target'] ?>" class="case-item__permalink">
								<span class="caption">
                                    <?php echo $permalink['title'] ?>
                                </span>
                                <span class="icon">
                                <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" class="svg-inline--fa fa-chevron-right fa-w-8 fa-3x"><path
                                            fill="currentColor"
                                            d="M24.707 38.101L4.908 57.899c-4.686 4.686-4.686 12.284 0 16.971L185.607 256 4.908 437.13c-4.686 4.686-4.686 12.284 0 16.971L24.707 473.9c4.686 4.686 12.284 4.686 16.971 0l209.414-209.414c4.686-4.686 4.686-12.284 0-16.971L41.678 38.101c-4.687-4.687-12.285-4.687-16.971 0z"
                                            class=""></path></svg>
                                </span>
                            </a>
                        </div>
					<?php endif; ?>
                </article>
			<?php endforeach; ?>
        </div>

		<?php $btn = get_sub_field('button'); ?>
		<?php if ($btn): ?>
            <div class="btn-wrap center">
                <a href="<?php echo $btn['url'] ?>" target="<?php echo $btn['target'] ?>" class="btn <?php the_sub_field('button_color'); ?>  btn-medium">
					<?php echo $btn['title'] ?>
                </a>
            </div>
		<?php endif; ?>
    </div>
</section>
