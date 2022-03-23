<section class="faq-section">
    <div class="container">

        <h2 class="section-title uppercase title-line center"><?php the_sub_field('heading'); ?></h2>

        <div class="faq-grid">

	        <?php foreach (array_chunk(get_sub_field('questions'), ceil(count(get_sub_field('questions')) / 2)) as $col): ?>
            <div class="column">
	            <?php foreach ($col as $item): ?>
                    <div class="faq-acc">
                        <div class="faq-acc__header">
                            <div class="caption">
					            <?php echo $item['question']; ?>
                            </div>
                            <button class="action-btn">
                                <svg class="open svg-inline--fa fa-chevron-down fa-w-14 fa-3x" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path fill="currentColor"
                                          d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"
                                          class=""></path>
                                </svg>
                                <svg class="close svg-inline--fa fa-times fa-w-10 fa-3x" aria-hidden="true" focusable="false" data-prefix="far" data-icon="times" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                    <path fill="currentColor"
                                          d="M207.6 256l107.72-107.72c6.23-6.23 6.23-16.34 0-22.58l-25.03-25.03c-6.23-6.23-16.34-6.23-22.58 0L160 208.4 52.28 100.68c-6.23-6.23-16.34-6.23-22.58 0L4.68 125.7c-6.23 6.23-6.23 16.34 0 22.58L112.4 256 4.68 363.72c-6.23 6.23-6.23 16.34 0 22.58l25.03 25.03c6.23 6.23 16.34 6.23 22.58 0L160 303.6l107.72 107.72c6.23 6.23 16.34 6.23 22.58 0l25.03-25.03c6.23-6.23 6.23-16.34 0-22.58L207.6 256z"
                                          class=""></path>
                                </svg>
                            </button>
                        </div>
                        <div class="faq-acc__body">
				            <?php echo $item['answer']; ?>
                        </div>
                    </div>
	            <?php endforeach; ?>
            </div>
	        <?php endforeach; ?>

        </div>

    </div>
</section>
