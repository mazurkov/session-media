<div class="section-socials">
    <div class="container">
        <div class="grid">
			<?php foreach (get_sub_field('grid') as $item): ?>
                <a href="<?php echo $item['link']['url'] ?>" target="<?php echo $item['link']['target'] ?>" class="grid__item">
					<?php echo $item['link']['title'] ?>
					<?php echo wp_get_attachment_image($item['icon'], 'full'); ?>
                </a>
			<?php endforeach; ?>
        </div>
    </div>
</div>
