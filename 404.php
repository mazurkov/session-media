<?php get_header(); ?>

<section class="page-header page-header__large">
    <div class="page-header__bg">
		<?php echo wp_get_attachment_image(dt_get_option('404_background'), 'full'); ?>
    </div>

    <div class="container">
        <div class="page-header__row">
			<?php if (dt_get_option('404_heading')): ?>
                <h1 class="h3 page-header__subheading sub-heading uppercase">
					<?php dt_the_option('404_heading') ?>
                </h1>
			<?php endif; ?>

			<?php if (dt_get_option('404_subheading')): ?>
                <h2 class="h1 page-header__heading uppercase">
					<?php dt_the_option('404_subheading') ?>
                </h2>
			<?php endif; ?>

			<?php if (dt_get_option('404_description')): ?>
                <div class="page-header__caption font-large">
					<?php dt_the_option('404_description') ?>
                </div>
			<?php endif; ?>

            <div class="btn-wrap">
                <a href="<?php echo home_url('/') ?>" class="btn btn-green">
                    <?php dt_the_option('404_back_to_homepage_button_label') ?>
                   </a>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>


