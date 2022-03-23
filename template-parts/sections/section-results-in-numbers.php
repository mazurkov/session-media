<section class="results-in-numbers">
    <div class="container">
        <div class="result-boxes">
			<?php foreach (get_sub_field('boxes') as $item): ?>
                <div class="result-box">
                    <div class="result-box__percent">
	                    <p><?php echo $item['percent'] ?></p>
                    </div>
                    <div class="result-box__heading">
	                    <?php echo $item['heading'] ?>
                    </div>
                </div>
			<?php endforeach; ?>
        </div>
    </div>
</section>
