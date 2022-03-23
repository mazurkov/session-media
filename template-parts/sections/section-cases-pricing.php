<?php
if( get_sub_field('prices') ):
$logo    = wp_get_attachment_image(dt_get_option('cta_logo'), 'minlogo');
?>
<section class="section-cases section-case-pricing">
    <div class="container">
        <div class="cases-grid">
            <?php foreach (get_sub_field('prices') as $item): ?>
                <article class="case-item case-item-pricing">
                    <h3 class="case-item__title"><?php echo $item['title'] ?></h3>
                    <div class="case-item__minlogo">
                        <?php echo $logo; ?>
                    </div>
                    <div class="case-item__price">
                        <?php _e('from', 'session-media'); ?> <span class="<?php echo $item['button-color']; ?>"><?php echo $item['price']; ?>
                        <b class="case-item__currency">&pound;</b> </span><?php _e('/monthly', 'session-media'); ?>
                    </div>
                    <div class="case-item__description">
                        <?php echo $item['description']; ?>
                    </div>
                    <div class="case-item__advantages">
                        <?php echo $item['advantages']; ?>
                    </div>
                    <?php $permalink = $item['button']; ?>
                    <?php if ($permalink): ?>
                        <div class="btn-wrap">
                            <a href="<?php echo $permalink['url'] ?>" target="<?php echo $permalink['target'] ?>" class="btn <?php echo $item['button-color']; ?>">
                                    <?php echo $permalink['title'] ?>
                            </a>
                        </div>
                    <?php endif; ?>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>