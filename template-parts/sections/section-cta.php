<?php if (get_sub_field('override_global_content')): ?>

	<?php // Local
	$bg      = wp_get_attachment_image(get_sub_field('bg'), 'full');
	$logo    = wp_get_attachment_image(get_sub_field('logo'), 'full');
	$heading = get_sub_field('heading');
	$content = get_sub_field('content');
	$btn     = get_sub_field('button');
	?>

<?php else: ?>

	<?php // Global
	$bg      = wp_get_attachment_image(dt_get_option('cta_bg'), 'full');
	$logo    = wp_get_attachment_image(dt_get_option('cta_logo'), 'full');
	$heading = dt_get_option('cta_heading');
	$content = dt_get_option('cta_content');
	$btn     = dt_get_option('cta_button');
	?>

<?php endif; ?>

<section class="cta-section">
    <div class="bg">
		<?php echo $bg; ?>
    </div>
    <div class="container">
        <div class="logo-wrap">
			<?php echo $logo; ?>
        </div>
        <h2 class="h1 section-title uppercase white center"><?php echo $heading; ?></h2>
        <div class="section-content white center font-extra-large">
			<?php echo $content; ?>
        </div>

		<?php if ($btn): ?>
            <div class="btn-wrap center">
                <a href="<?php echo $btn['url'] ?>" target="<?php echo $btn['target'] ?>" class="btn btn-orange">
					<?php echo $btn['title'] ?>
                </a>
            </div>
		<?php endif; ?>

    </div>
</section>
