<section class="section-content-image">
	<div class="container">
		<div class="section-row">
			<div class="col-left">
				<h2 class="h3 section-title uppercase  title-line line-left"><?php the_sub_field('heading'); ?></h2>
                <div class="post-content ">
					<?php the_sub_field('content'); ?>
                </div>
			</div>
			<div class="col-right">
				<?php echo wp_get_attachment_image(get_sub_field('image'), 'full'); ?>
			</div>
		</div>
	</div>
</section>
