<section class="section-webinars">
    <div class="container">
        <h2 class="section-title uppercase center title-line "><?php the_sub_field('heading'); ?></h2>

        <div class="webinars">
			<?php foreach (get_sub_field('webinars') as $item): ?>

                <article class="webinar">
                    <div class="webinar__thumbnail">
						<?php echo wp_get_attachment_image($item['thumbnail'], 'full'); ?>
                        <div class="type">
                            <div class="type__inner">
	                            <?php echo $item['type'] ?>
                            </div>
                        </div>
                    </div>
                    <div class="webinar__info">
                        <h3 class="h5 webinar__title"><?php echo $item['title'] ?></h3>
						<?php $link = $item['link']; ?>
                        <a href="<?php echo $link['url'] ?>" target="<?php echo $link['target'] ?>" class="btn btn-small btn-orange"><?php echo $link['title'] ?></a>
                    </div>
                </article>

			<?php endforeach; ?>
        </div>

    </div>
</section>


