<?php /* Template Name: Download Webinar */ ?>
<?php get_header(); ?>

<div class="page-template page-download-webinar">

    <section class="download-webinar-header">
        <div class="download-webinar-header__bg">
			<?php echo wp_get_attachment_image(get_field('background'), 'full'); ?>
        </div>
        <div class="container">
            <div class="download-webinar-header__row">

                <div class="col-left">
                    <div class="content">
						<?php if (get_field('subheading')): ?>
                            <h3 class="download-webinar-header__subheading sub-heading uppercase">
								<?php echo get_field('subheading') ?>
                            </h3>
						<?php endif; ?>
						<?php if (get_field('heading')): ?>
                            <h1 class="h2 download-webinar-header__heading uppercase">
								<?php echo get_field('heading') ?>
                            </h1>
						<?php endif; ?>
						<?php if (get_field('caption')): ?>
                            <div class="download-webinar-header__caption font-large">
								<?php echo get_field('caption') ?>
                            </div>
						<?php endif; ?>
                    </div>
                </div>

				<?php if (dt_get_field('form_shortcode')): ?>
                    <div class="col-right">
                        <div class="header-form-wrap">
                            <div class="form">
								<?php echo do_shortcode(dt_get_field('form_shortcode')); ?>
                            </div>
                        </div>
                    </div>
				<?php endif; ?>

            </div>
        </div>
    </section>


	<?php get_template_part('template-parts/builder') ?>
</div>

<?php get_footer(); ?>
