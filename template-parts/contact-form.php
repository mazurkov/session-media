<?php $args = ! empty($args) ? $args : ['title' => false, 'footer' => false] ?>

<div class="contact-form__wrap">
    <form class="contact-form form">

		<?php if ($args['title']): ?>
            <h2 class="h4 contact-form__title">Get a Free quote</h2>
		<?php endif; ?>

        <div class="form-group">
            <label class="input-label">
                <span class="input-placeholder">
                 Full Name
                </span>
                <input type="text" name="name" class="input" required>
            </label>
        </div>

        <div class="form-group">
            <label class="input-label">
                                <span class="input-placeholder">
                                   Contact number
                                </span>
                <input type="tel" name="phone" class="input" required>
            </label>
        </div>

        <div class="form-group">
            <label class="input-label">
            <span class="input-placeholder">
               Email address
            </span>
                <input type="email" name="email" class="input" required>
            </label>
        </div>

        <div class="form-group">
            <label class="input-label">
                    <span class="input-placeholder">
                     Postcode
                    </span>
                <input type="text" name="postcode" class="input" required>
            </label>
        </div>

		<?php $uuid = wp_generate_uuid4(); ?>
        <div class="form-group">
            <div class="select-wrap">
                <label for="subject-<?php echo $uuid; ?>" class="input-placeholder">
                    Select subject
                </label>
                <select name="subject" id="subject-<?php echo $uuid; ?>" class="select" required>
                    <option value="" disabled selected></option>
					<?php foreach (dt_get_option('cf_select_subject_field') as $item): ?>
                        <option value="<?php echo $item['option']; ?>"><?php echo $item['option']; ?></option>
					<?php endforeach; ?>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="textarea-label">
                                <span class="textarea-placeholder">
                                  Your message (optional)
                                </span>
                <textarea type="text" name="message" class="textarea" required></textarea>
            </label>
        </div>

        <div class="form-notice">
            <strong>We only provide services for commercial and business premises</strong>, not houses, flats or other domestic properties. We respect your privacy and we would like to keep in touch with you to let you know
            about
            products and services we offer. To confirm your consent to allow us to do this please check the opt-in box below
        </div>

        <div class="form-group form-group__agreement">
			<?php $uuid = wp_generate_uuid4(); ?>
            <label for="agreement-<?php echo $uuid ?>" class="checkbox">
                                    <span class="checkbox__input-wrap">
                                        <input type="checkbox" name="agreement" id="agreement-<?php echo $uuid ?>" class="checkbox__input">
                                        <span class="checkbox__input-state">
                                            <svg version="1.1" x="0px" y="0px" viewBox="0 0 16 16" style="enable-background:new 0 0 16 16;" xml:space="preserve">
                                             <path fill="#FF4200" class="st0" d="M6.21085,14.0054l-6.2108-6.49545l1.6866-1.76309l4.5242,4.73106l8.1024-8.47253l1.6867,1.76369 	L6.21085,14.0054z"/>
                                            </svg>
                                        </span>
                                    </span>
                <span class="checkbox__label">
                                        I consent to being contacted by GCCFM
                                    </span>
            </label>
        </div>


        <button type="submit" class="btn btn-primary">SEND</button>

		<?php if ($args['footer']): ?>
            <div class="contact-form__footer">
                <p class="h5 contact-form__title">National and Multisite Groups</p>
                <div class="contact-form__subtitle">
                    We currently work with a number of national and multi-site groups in this sector.
                </div>
                <a href="<?php echo get_permalink(get_page_by_path('/how-we-work')) ?>" class="contact-form__permalink">Get more information on how we can work with you</a>
            </div>

		<?php endif; ?>

    </form>
</div>
