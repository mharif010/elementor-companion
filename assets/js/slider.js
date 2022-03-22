(function($) {
    $(window).on('elementor/frontend/init', function() {
        elementorFrontend.hooks.addAction('frontend/element_ready/slider.default', function(scope, $) {

            var $HeroSlider = $(scope).find('expert-active');
            if ($HeroSlider.length > 0) {
                $HeroSlider.owlCarousel({
                    loop: true,
                    autoplay: true, //true if you want enable autoplay
                    autoplayTimeout:3000,
                    autoplayHoverPause:true,
                    margin: 30,
                    dots: false,
                    nav: true,
                    mouseover: true,
                    navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
                    animateOut: 'fadeOut',
                    animateIn: 'fadeIn',
                    responsive: {
                        0: {
                            items: 1
                        },
                        460: {
                            items: 1
                        },
                        599: {
                            items: 1
                        },
                        768: {
                            items: 1
                        },
                        960: {
                            items: 1
                        },
                        1200: {
                            items: 4
                        },
                        1920: {
                            items: 4
                        }
                    }
                });
            }


        });
    });
})(jQuery);