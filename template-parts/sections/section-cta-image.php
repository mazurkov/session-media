<?php
$bg      = wp_get_attachment_image(get_sub_field('bg'), 'full');
$logo    = wp_get_attachment_image(get_sub_field('logo'), 'full');
$heading = get_sub_field('heading');
$content = get_sub_field('content');
$btn     = get_sub_field('button');
$image   = get_sub_field('image');
?>

<section class="cta-image-section">
    <div class="bg">
		<?php echo $bg; ?>
    </div>
    <div class="container">

        <div class="section-row">
            <div class="col-left">
                <div class="logo-wrap">
					<?php echo $logo; ?>
                </div>
                <h2 class="h3 section-title uppercase white "><?php echo $heading; ?></h2>
                <div class="section-content white  font-large">
					<?php echo $content; ?>
                </div>

				<?php if ($btn): ?>
                    <div class="btn-wrap ">
                        <a href="<?php echo $btn['url'] ?>" target="<?php echo $btn['target'] ?>" class="btn btn-green">
							<?php echo $btn['title'] ?>
                        </a>
                    </div>
				<?php endif; ?>
            </div>
            <div class="col-right">
				<?php echo wp_get_attachment_image($image, 'full'); ?>
            </div>
        </div>

    </div>
</section>
