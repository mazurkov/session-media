<?php get_header(); ?>

<div class="page-template-services page-template-single-services">

    <!-- Header -->
    <div class="page-header__wrapper">
        <section class="page-header">
            <div class="page-header__bg">
				<?php echo wp_get_attachment_image(dt_get_field('background_image'), 'full'); ?>
            </div>
            <div class="container">
                <div class="page-header__row">

                    <!-- Left -->
                    <div class="col-left">
                        <h1 class="page-header__heading">
							<?php dt_the_field('heading') ?>
                        </h1>

                        <div class="page-header__subheading">
							<?php dt_the_field('subheading') ?>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <div class="page-header__over">
            <div class="container">
                <!-- Right -->
                <div class="col-right">
					<?php get_template_part('template-parts/contact-form', '', ['title' => true, 'footer' => true]) ?>
                </div>
            </div>
        </div>

    </div>

    <!-- Page Content -->
    <div class="page-content-section">
        <div class="container">
            <div class="page-content post-content">
				<?php the_content(); ?>
            </div>
        </div>
    </div>

	<?php get_template_part('template-parts/builder') ?>

</div>

<?php get_footer(); ?>
