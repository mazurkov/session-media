<section data-scheme="<?php the_sub_field('color_scheme'); ?>" class="section-testimonial">
    <div class="bg"><?php echo wp_get_attachment_image(get_sub_field('background'), 'full'); ?></div>
    <div class="container">
        <div class="author">
			<?php echo wp_get_attachment_image(get_sub_field('photo'), 'full'); ?>
        </div>
        <div class="feedback">
			<?php the_sub_field('feedback'); ?>
        </div>
        <div class="author__name">
			<?php the_sub_field('author_name'); ?>
        </div>
        <div class="author__position">
			<?php the_sub_field('author_position'); ?>
        </div>
    </div>
</section>
