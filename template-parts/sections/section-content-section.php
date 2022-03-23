<section class="content-section">
    <div class="container">
		<?php if(get_sub_field('heading')): ?>
        <h2 class="h3 section-title uppercase title-line"><?php the_sub_field('heading'); ?></h2>
		<?php endif; ?>
        <div class="content post-content">
			<?php the_sub_field('content'); ?>
        </div>
    </div>
</section>
