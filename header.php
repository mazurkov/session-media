<!doctype html>
<html <?php language_attributes(); ?> class="no-css">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-transcluent">
    <meta name="format-detection" content="telephone=no">

    <!-- Preload -->
    <link rel="preload" as="script" href="<?php echo DT_ASSETS_URL ?>/js/main.min.js">
    <link rel="preload" as="style" href="<?php echo DT_ASSETS_URL ?>/css/main.css">
	<?php wp_head(); ?>

    <script>
        (function (H) {
            H.className = H.className.replace(/\bno-css\b/, 'css')
        })(document.documentElement)
    </script>
    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-K9HPVFK');</script>
    <!-- End Google Tag Manager -->
	<!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1435042073281489');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1435042073281489&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->
	<meta name="facebook-domain-verification" content="qi1dxranflvt3bxl1ek0cgnqirbyc2" />
	
</head>

<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K9HPVFK"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="template-wrapper">

    <header class="template-header">

        <!-- Main Navigation -->
        <nav class="nav-main">
            <div class="nav-main__inner">
                <div class="container">
                    <div class="nav-main__row">

                        <!-- Left -->
                        <div class="nav-main__left">
                            <a href="<?php echo home_url('/') ?>" class="nav-main__logo" title="<?php bloginfo('name') ?>">
								<?php echo wp_get_attachment_image(dt_get_option('logo'), 'full'); ?>
                            </a>
                        </div>

                        <!-- Right -->
                        <div class="nav-main__right">
							<?php $args = array(
								'theme_location' => 'desktop-menu',
								'container'      => 'ul',
							);
							wp_nav_menu($args); ?>

                            <button class="nav-main__toggle" aria-label="Open Side Navigation">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>

                            <a href="<?php echo get_permalink(get_page_by_path('/proposal')) ?>" class="btn-proposal btn btn-green btn-tiny btn-size-medium" title="Get Proposal">Get Proposal</a>
                        </div>

                    </div>
                </div>
            </div>
        </nav>

        <!-- Fixed Main Navigation -->
        <nav class="nav-main fixed">
            <div class="nav-main__inner">
                <div class="container">
                    <div class="nav-main__row">

                        <!-- Left -->
                        <div class="nav-main__left">
                            <a href="<?php echo home_url('/') ?>" class="nav-main__logo">
								<?php echo wp_get_attachment_image(dt_get_option('logo_dark'), 'full'); ?>
                            </a>
                        </div>

                        <!-- Right -->
                        <div class="nav-main__right">
							<?php $args = array(
								'theme_location' => 'desktop-menu',
								'container'      => 'ul',
							);
							wp_nav_menu($args); ?>

                            <button class="nav-main__toggle" aria-label="Open Side Navigation">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>

                            <a href="<?php echo get_permalink(get_page_by_path('/proposal')) ?>" class="btn-proposal btn btn-green btn-tiny btn-size-medium">Get Proposal</a>
                        </div>

                    </div>
                </div>
            </div>
        </nav>

        <!-- Side Navigation -->
        <nav class="nav-side">
            <div class="nav-side__header">
                <div class="container">
                    <a href="<?php echo home_url('/') ?>" class="nav-side__logo">
						<?php echo wp_get_attachment_image(dt_get_option('logo'), 'full'); ?>
                    </a>
                    <button class="nav-side__close" aria-label="Close Side Navigation">
                        <span></span>
                        <span></span>
                    </button>
                </div>
            </div>
            <div data-scroll-lock-scrollable class="nav-side__scroller">
                <div class="container">
					<?php $args = array(
						'theme_location' => 'mobile-menu',
						'container'      => 'ul',
					);
					wp_nav_menu($args); ?>

                    <div class="btn-wrap center">
                        <a href="<?php echo get_permalink(get_page_by_path('/proposal')) ?>" class="btn-proposal btn btn-green  btn-size-medium">Get Proposal</a>
                    </div>
                </div>
            </div>
        </nav>

    </header>

    <main class="template-body">

