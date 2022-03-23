;jQuery(document).ready(function ($) {
    "use strict"

    // Platform Detection
    const IOS = /iPad|iPhone|iPod/.test(navigator.userAgent) && !window.MSStream,
        Android = navigator.userAgent.toLowerCase().indexOf("android") > -1,
        Firefox = navigator.userAgent.toLowerCase().indexOf('firefox') > -1,
        Edge = navigator.userAgent.toLowerCase().indexOf('edge') > -1,
        IE = navigator.userAgent.toLowerCase().indexOf('msie ') > -1;

    // Browser Windows Sizes
    const browser = {
        w: document.documentElement.clientWidth,
        h: document.documentElement.clientHeight,
    }

    let vh = window.innerHeight * 0.01
    document.documentElement.style.setProperty('--vh', `${vh}px`)

    $(window).on('resize orientationchange', () => {
        browser.w = document.documentElement.clientWidth
        browser.h = document.documentElement.clientHeight

        let vh = window.innerHeight * 0.01
        document.documentElement.style.setProperty('--vh', `${vh}px`)
    });

    function setCookie(name, value, days) {
        var expires = "";
        if (days) {
            var date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            expires = "; expires=" + date.toUTCString();
        }
        document.cookie = name + "=" + (value || "") + expires + "; path=/";
    }

    function getCookie(name) {
        var nameEQ = name + "=";
        var ca = document.cookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') c = c.substring(1, c.length);
            if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
        }
        return null;
    }

    // Return GET parameter
    function getGETParam(param) {
        return new URLSearchParams(window.location.search).get(param);
    }

    // Set GET parameter
    function setGETParam(param, value) {
        let url = new URLSearchParams(window.location.search);
        url.set(param, value);
        let newurl = window.location.protocol + "//" + window.location.host + window.location.pathname + '?' + url;
        window.history.replaceState({}, document.title, newurl);
    }

    function removeGetParam(param) {
        let url = new URLSearchParams(window.location.search);
        url.delete(param);
        url = url.toString().length > 0 ? '?' + url : url;
        let newurl = window.location.protocol + "//" + window.location.host + window.location.pathname + url;
        window.history.replaceState({}, document.title, newurl);
    }

    /* Home Background Video Section */
    {
        let HomeVideo = document.querySelector('.video');
        if (HomeVideo) {
            if (typeof webView !== "undefined") {
                webView.mediaPlaybackRequiresUserAction = NO;
            }
            HomeVideo.addEventListener('load', function () {
                HomeVideo.play();
            });
        }
    }

    /* ----------------------------------- Scrollbar CSS Variable ------------------------------------ */
    {
        const getScrollbarWidth = () => {
            let outer = document.createElement("div");
            outer.style.visibility = "hidden";
            outer.style.width = "100px";
            outer.style.msOverflowStyle = "scrollbar"; // needed for WinJS apps

            document.body.appendChild(outer);

            let widthNoScroll = outer.offsetWidth;
            // force scrollbars
            outer.style.overflow = "scroll";

            // add innerdiv
            let inner = document.createElement("div");
            inner.style.width = "100%";
            outer.appendChild(inner);

            let widthWithScroll = inner.offsetWidth;

            // remove divs
            outer.parentNode.removeChild(outer);

            return widthNoScroll - widthWithScroll;
        }
        if ($('body').outerHeight() <= document.documentElement.clientHeight) {
            document.documentElement.style.setProperty('--scroll-width', 0);
        } else {
            document.documentElement.style.setProperty('--scroll-width', getScrollbarWidth() + 'px');
        }
    }

    /* ----------------------------------- Mega Menu ------------------------------------ */
    {
        if (document.documentElement.clientWidth > 991) {
            // Mega Menu
            $('.mega-menu-wrapper, .menu-item-has-children ').each(function () {
                const link = $(this);
                const megaMenu = link.find('.sub-menu').eq(0);
                let mouseOnMegaMenu = false;

                // Link Hover
                link.on('mouseover touchstart', () => {
                    $('.mega-menu-wrapper, .menu-item-has-children ').removeClass('active');
                    $('.sub-menu').removeClass('active');

                    link.addClass('active');
                    megaMenu.addClass('active');
                });

                // Mega Menu Hover
                megaMenu.on('mouseover touchstart', (e) => {
                    $('.mega-menu-wrapper, .menu-item-has-children ').removeClass('active');
                    $('.sub-menu').removeClass('active');

                    mouseOnMegaMenu = true;
                    megaMenu.addClass('active');
                });


                // Link Leave
                link.on('mouseleave', (e) => {
                    setTimeout(() => {
                        if (!mouseOnMegaMenu) {
                            link.removeClass('active');
                            megaMenu.removeClass('active');
                        }
                    }, 290);
                });

                // Mega Menu Leave
                megaMenu.on('mouseleave', (e) => {
                    mouseOnMegaMenu = false;
                    setTimeout(() => {
                        megaMenu.removeClass('active');
                        link.removeClass('active');
                    }, 200);
                });

            });

            // Click Outside
            $(document).on('click', function (e) {
                let el = $(e.target);
                if ($('.sub-menu.active').length) {
                    if (
                        !el.is('.mega-menu.active') &&
                        !el.is('.mega-menu-wrap.active') &&
                        !el.parents('.mega-menu-wrap.active').length &&
                        !el.parents('.mega-menu.active').length
                    ) {
                        $('.sub-menu.active').removeClass('active');
                        $('.mega-menu-wrapper.active, .menu-item-has-children.active').removeClass('active');
                    }
                }
            });
        }
    }

    /* ----------------------------------- Mobile Navigation ------------------------------------ */
    {
        if (document.documentElement.clientWidth <= 991) {
            $(document).on('click', '.nav-main__toggle', function (e) {
                e.preventDefault()
                $('.nav-side').addClass('active')
                scrollLock.disablePageScroll()
            })

            // Close
            $(document).on('click', '.nav-side__close', function (e) {
                e.preventDefault()
                $('.nav-side').removeClass('active')
                scrollLock.enablePageScroll()
            })

            // Add Arrows
            $('.nav-side .menu li.menu-item-has-children > a , .nav-side .menu li.mega-menu-wrapper > a').append(`
            <span class="sub-menu-toggle">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 256 256" style="enable-background:new 0 0 256 256;" xml:space="preserve">
                          <polygon points="225.813,48.907 128,146.72 30.187,48.907 0,79.093 128,207.093 256,79.093 \t\t"/> 
                </svg>
            </span>
        `)

            $('.nav-side .menu li.menu-item-has-children>a .sub-menu-toggle, .nav-side .menu li.mega-menu-wrapper > a .sub-menu-toggle').on('click', function (e) {
                e.preventDefault();
                $(this).parents('li').eq(0).toggleClass('active');
                $(this).parents('li').eq(0).find('.sub-menu').eq(0).slideToggle('fast');
            });
        }
    }

    /* ----------------------------------- Fixed Navigation ------------------------------------ */
    {
        const navFixed = $('.nav-main.fixed')
        let lastScroll = 0;
        $(window).on('scroll', function () {
            const scroll = $(this).scrollTop();
            if (scroll >= 450) {
                navFixed.addClass('active');
            } else {
                navFixed.removeClass('active');
            }
            lastScroll = scroll;
        });
    }

    /* ----------------------------------- AOS ------------------------------------ */
    {
        AOS.init({
            once: true,
            duration: 1000,
            easing: 'slow-easing',
            offset: browser.w >= 991 ? 120 : -100
        });
    }

    /* ----------------------------------- Anchors ------------------------------------ */
    {
        $('a[href^="#"]').on('click', function (e) {
            e.preventDefault();

            const href = $(this).attr('href');

            if (!(href === '#')) {

                const section = $(href);

                if (section.length) {
                    const offset = $(section).offset().top;
                    $('html,body').animate({
                        scrollTop: offset
                    }, 600);
                }

            } else {
                return false
            }

        });
    }

    /* ----------------------------------- Clients Slider ------------------------------------ */
    {
        if ($('.clients-slider').length) {
            const clientsSwpierswiper = new Swiper('.clients-slider', {
                direction: 'horizontal',
                loop: true,
                slidesPerView: 'auto',
                slidesOffsetBefore: browser.w >= 660 ? 125 : 0,
                speed: 2750,
                grabCursor: true,
                /*mousewheelControl: false,
                keyboardControl: false,
                followFinger:false,
                simulateTouch:false,
                freeMode: true,*/
                autoplay: {
                    delay: 1,
                    disableOnInteraction: false
                },
            });
        }
    }

    /* ----------------------------------- Accordion ------------------------------------ */
    {
        $('.faq-acc').each(function () {
            const item = $(this),
                btn = item.find('.action-btn'),
                body = item.find('.faq-acc__body');

            btn.on('click', function (e) {
                e.preventDefault();
                item.toggleClass('active');
                body.slideToggle('fast');
            });

        });
    }

    /* ----------------------------------- Team Section ------------------------------------ */
    {
        if (browser.w > 991) {
            $('.team-grid .team-member').on('click', function (e) {
                e.preventDefault();
                const index = $(this).attr('data-index');
                $(this).addClass('active').parent().siblings('.team-member__wrap').find('.team-member').removeClass('active');

                $('.team-preview .team-member-view').each(function () {
                    if ($(this).attr('data-index') == index) {
                        $(this).addClass('active');
                    } else {
                        $(this).removeClass('active');
                    }
                })
            });
            $('.team-grid .team-member__wrap .name').on('click', function (e) {
                e.preventDefault();
                const index = $(this).attr('data-index');
                $(this).siblings('.team-member').addClass('active').parent().siblings('.team-member__wrap').find('.team-member').removeClass('active');

                $('.team-preview .team-member-view').each(function () {
                    if ($(this).attr('data-index') == index) {
                        $(this).addClass('active');
                    } else {
                        $(this).removeClass('active');
                    }
                })
            });
            $('.team-member-view  .prev').on('click', function (e) {
                e.preventDefault();

                if ($('.team-preview .team-member-view.active').prev('.team-member-view').length) {

                    // Prev
                    $('.team-preview .team-member-view.active').removeClass('active').prev('.team-member-view').addClass('active');
                    $('.team-grid .team-member').each(function () {
                        if ($(this).attr('data-index') == $('.team-preview .team-member-view.active').attr('data-index')) {
                            $(this).addClass('active');
                        } else {
                            $(this).removeClass('active');
                        }
                    })

                } else {

                    // Last
                    $('.team-preview .team-member-view.active').removeClass('active')
                    $('.team-preview .team-member-view').last().addClass('active');
                    $('.team-grid .team-member').each(function () {
                        if ($(this).attr('data-index') == $('.team-preview .team-member-view.active').attr('data-index')) {
                            $(this).addClass('active');
                        } else {
                            $(this).removeClass('active');
                        }
                    })

                }

            });
            $('.team-member-view  .next').on('click', function (e) {
                e.preventDefault();

                if ($('.team-preview .team-member-view.active').next('.team-member-view').length) {

                    // Prev
                    $('.team-preview .team-member-view.active').removeClass('active').next('.team-member-view').addClass('active');
                    $('.team-grid .team-member').each(function () {
                        if ($(this).attr('data-index') == $('.team-preview .team-member-view.active').attr('data-index')) {
                            $(this).addClass('active');
                        } else {
                            $(this).removeClass('active');
                        }
                    })

                } else {

                    // Last
                    $('.team-preview .team-member-view.active').removeClass('active')
                    $('.team-preview .team-member-view').first().addClass('active');
                    $('.team-grid .team-member').each(function () {
                        if ($(this).attr('data-index') == $('.team-preview .team-member-view.active').attr('data-index')) {
                            $(this).addClass('active');
                        } else {
                            $(this).removeClass('active');
                        }
                    })

                }

            });
        }

        if (browser.w <= 991) {
            const TeamSliderswiper = new Swiper('.team-slider', {
                direction: 'horizontal',
                loop: true,
                centeredSlides: true,
                slidesPerView: 'auto',
                slideToClickedSlide: true
            });

            TeamSliderswiper.on('slideChange', function () {
                const index = Number($('.team-grid .team-member__wrap.swiper-slide-active .team-member').attr('data-index')) + 1;
                $('.team-preview .team-member-view').each(function () {
                    if (Number($(this).attr('data-index')) == index) {
                        $(this).addClass('active')
                    } else {
                        $(this).removeClass('active')
                    }
                })
            });
        }
    }

    /* ----------------------------------- YouTube Video ------------------------------------ */
    {
        if ($('.popup-youtube, .popup-vimeo, .popup-gmaps').length) {
            $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
                disableOn: 100,
                type: 'iframe',
                mainClass: 'mfp-fade',
                removalDelay: 160,
                preloader: false,
                fixedContentPos: false
            });
        }
    }

    /* ----------------------------------- Select ------------------------------------ */
    {
        if ($('.select').length) {
            $('.select').each(function () {
                const choices = new Choices($(this)[0], {
                    searchEnabled: false,
                });
            });
        }
    }

    /* ----------------------------------- Case Studies Filter ------------------------------------ */
    {
        $('select[name="services"]').on('change', function () {
            const service = $(this).val();

            setGETParam('service', service);

            let data = new FormData();

            // Ajax Settings
            data.append('nonce_code', PHP.case_studies_nonce);
            data.append('action', 'case_studies_filter');
            data.append('service', service);
            data.append('pagenum_link', window.location.protocol + "//" + window.location.host + window.location.pathname + location.search);

            $.ajax({
                url: PHP.ajaxurl,
                data: data,
                type: 'POST',
                cache: false,
                dataType: 'json',
                processData: false,
                contentType: false,
                beforeSend: function (xhr) {
                    $('html,body').addClass('wait');
                },
                complete: function (response) {
                    let $posts = $(response.responseJSON.posts),
                        $pagination = $(response.responseJSON.pagination);

                    // Replace Posts
                    $('.case-studies-section .cases-grid').empty().append($posts);

                    // Replace Pagination
                    $('.case-studies-section .pagination-wrap').empty().append($pagination);

                    // Remove /page from url
                    let url = window.location.pathname;
                    let newUrl;
                    let regex = /\/{1,3}page\/(\d{1,100000})/;
                    let page = url.match(regex);
                    let pageTitle = $('title').text();

                    if (page) {
                        newUrl = url.replace(regex, '');
                        if (location.search) {
                            newUrl += location.search;
                        }
                        window.history.replaceState(null, pageTitle, newUrl);
                    }

                    setTimeout(() => {
                        $('html,body').removeClass('wait');
                    }, 150);

                }
            });

        })
    }

    /* ----------------------------------- Case Studies Load More ------------------------------------ */
    {
        if ($('.cs-lazy-load').length) {

            $(document).on('click', '.cs-lazy-load', function (e) {
                e.preventDefault();

                let data = new FormData();
                // Ajax Settings
                data.append('nonce_code', PHP.case_studies_nonce);
                data.append('action', 'case_studies_lazy_load');
                data.append('query', PHP.posts);
                data.append('page', $('.cs-lazy-load').attr('data-page'));
                data.append('service', getGETParam('service') ? getGETParam('service') : 'all');
                data.append('pagenum_link', window.location.protocol + "//" + window.location.host + window.location.pathname + location.search);

                $.ajax({
                    url: PHP.ajaxurl,
                    data: data,
                    type: 'POST',
                    cache: false,
                    dataType: 'json',
                    processData: false,
                    contentType: false,
                    beforeSend: function (xhr) {
                        $('html,body').addClass('wait');
                    },
                    success: function (response) {
                        let $posts = $(response.posts),
                            $pagination = $(response.pagination);

                        // Replace Posts
                        $('.case-studies-section .cases-grid').append($posts);

                        // Replace Pagination
                        $('.case-studies-section .pagination-wrap').empty().append($pagination);

                        PHP.current_page++;

                        if ($('.cs-lazy-load').attr('data-page') >= $('.cs-lazy-load').attr('data-max')) {
                            $('.cs-lazy-load').remove();
                        }

                        setTimeout(() => {
                            $('html,body').removeClass('wait');
                        }, 150);
                    }
                });

            });
        }
    }

    /* ----------------------------------- Sidebar ------------------------------------ */
    {
        // Fixed Sidebar
        if (browser.w > 1200) {
            $('.post-content-section .content, .post-content-section .sidebar').theiaStickySidebar({
                additionalMarginTop: 140,
                additionalMarginBottom: 30
            });
        }
    }

    /* ----------------------------------- Contact Form ------------------------------------ */
    {
        const wpcf7Elm = document.querySelectorAll('.wpcf7');
        if (wpcf7Elm) {

            if (
                $('.wpcf7, .wpcf7-form').parents('.insight-form-wrap').length ||
                $('.wpcf7, .wpcf7-form').parents('.seo-ebook-form').length ||
                $('.wpcf7, .wpcf7-form').parents('.form-newsletter').length ||
                $('.wpcf7, .wpcf7-form').parents('.page-download-webinar').length
            ) {
                $('.wpcf7, .wpcf7-form').find(".wpcf7-form-control[aria-required='true']").prop('required', true);
                $('.wpcf7, .wpcf7-form').find(".wpcf7-form").removeAttr('novalidate');
            }

            wpcf7Elm.forEach(form => {
                form.addEventListener('wpcf7beforesubmit', function (event) {
                    $('body').addClass('wait');
                }, false);

                form.addEventListener('wpcf7submit', function (event) {
                    $('body').removeClass('wait');
                }, false)

                form.addEventListener('wpcf7mailsent', function (event) {
                    Swal.fire({
                        icon: 'success',
                        title: PHP.cf_success_notification.title,
                        text: PHP.cf_success_notification.text,
                        confirmButtonText: PHP.cf_success_notification.btn_text
                    });

                    $('body').removeClass('wait');
                }, false);


                form.addEventListener('wpcf7mailfailed', function (event) {

                    Swal.fire({
                        icon: 'error',
                        title: PHP.cf_error_notification.title,
                        text: PHP.cf_error_notification.text,
                        confirmButtonText: PHP.cf_error_notification.btn_text
                    });

                    $('body').removeClass('wait');

                }, false);
            });

        }
    }

    /* ----------------------------------- 404 Page ------------------------------------ */
    {
        $('.error404 .page-header').css({
            'min-height': `${document.documentElement.clientHeight - $('.footer').outerHeight()}px`
        })
    }


});
