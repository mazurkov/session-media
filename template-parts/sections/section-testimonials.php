<section class="section-testimonials">
    <div class="bg"><?php echo wp_get_attachment_image(get_sub_field('background'), 'full'); ?></div>
    <div class="container">
        <div class="section-row">

            <div class="col-left">
				<?php foreach (get_sub_field('clients_photos') as $item): ?>
                    <div class="client-item__wrap">
                        <div class="client-item">
							<?php echo wp_get_attachment_image($item['photo'], 'full'); ?>
                        </div>
                    </div>
				<?php endforeach; ?>

                <div class="testimonial">
					<?php $testimonial = get_sub_field('testimonial'); ?>
                    <div class="testimonial__quote">
                        “
                    </div>
                    <div class="testimonial__content">
						<?php echo $testimonial['text']; ?>
                    </div>
                    <h5 class="testimonial__author uppercase">
						<?php echo $testimonial['author_name'] ?>
                    </h5>
                    <p class="testimonial__position uppercase">
						<?php echo $testimonial['author_position'] ?>
                    </p>
                    <div class="testimonial__author-photo">
						<?php echo wp_get_attachment_image($testimonial['author_photo'], 'full'); ?>
                    </div>
                </div>
            </div>

            <div class="col-right">
                <h2 class="section-title uppercase"><?php the_sub_field('heading'); ?></h2>
                <div class="section-description">
					<?php the_sub_field('description'); ?>
                </div>
				<?php $link = get_sub_field('link'); ?>
				<?php if ($link): ?>
                    <a href="<?php echo $link['url'] ?>" target="<?php echo $link['target'] ?>" class="permalink">
                        <span class="caption"><?php echo $link['title']; ?></span>
                        <span class="icon">
                        <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" class="svg-inline--fa fa-chevron-right fa-w-8 fa-3x"><path
                                    fill="currentColor"
                                    d="M24.707 38.101L4.908 57.899c-4.686 4.686-4.686 12.284 0 16.971L185.607 256 4.908 437.13c-4.686 4.686-4.686 12.284 0 16.971L24.707 473.9c4.686 4.686 12.284 4.686 16.971 0l209.414-209.414c4.686-4.686 4.686-12.284 0-16.971L41.678 38.101c-4.687-4.687-12.285-4.687-16.971 0z"
                                    class=""></path></svg>
                        </span>
                    </a>
				<?php endif; ?>
                <div class="clients">
					<?php foreach (get_sub_field('clients') as $item): ?>
                        <div class="photo">
							<?php echo wp_get_attachment_image($item['photo'], 'full'); ?>
                        </div>
					<?php endforeach; ?>
                    <div class="become-client">
                        +
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
