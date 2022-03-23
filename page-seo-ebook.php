<?php /* Template Name: Seo Ebook */ ?>
<?php get_header(); ?>

<div class="page-template page-seo-ebook">

    <section class="seo-book-header">
        <div class="seo-book-header__bg">
			<?php echo wp_get_attachment_image(get_field('background'), 'full'); ?>
        </div>
        <div class="container">
            <div class="seo-book-header__row">

                <div class="col-left">
                    <div class="content">
                        <h3 class="seo-book-header__subheading sub-heading uppercase">
		                    <?php echo get_field('subheading') ?>
                        </h3>
                        <h1 class="h2 seo-book-header__heading uppercase">
		                    <?php echo get_field('heading') ?>
                        </h1>
                        <div class="seo-book-header__caption font-large">
		                    <?php echo get_field('caption') ?>
                        </div>
                    </div>
                    <div class="book">
		                <?php echo wp_get_attachment_image(get_field('book_image'), 'full'); ?>
                    </div>
                </div>

                <div class="col-right">
                    <div class="book">
						<?php echo wp_get_attachment_image(get_field('book_image'), 'full'); ?>
                    </div>

                    <div class="header-form-wrap">
                        <div class="form seo-ebook-form">
                           <?php echo do_shortcode('[contact-form-7 id="596" title="Download SEO Ebook (FREE)"]') ?>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

	<?php get_template_part('template-parts/builder') ?>
</div>

<?php get_footer(); ?>
