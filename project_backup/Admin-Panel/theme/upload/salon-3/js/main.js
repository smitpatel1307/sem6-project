(function ($) {
    "use strict";
    jQuery(document).ready(function($){
       
        /**-------------------------------
         * - wow js init
         * ---------------------------**/
        new WOW().init();
        /**-------------------------------
         * - magnific popup activation 
         * -----------------------------**/
        $('.popup-youtube').magnificPopup({
            type: 'video'
        });
        $('.imagepopup').magnificPopup({
            type: 'image'
        });
        
        /**-----------------------
         *  counter activation
         * ---------------------**/
        $('.counter').counterUp({
            delay: 10,
            time: 2000
        });

        /**------------------------
         *  Service Carousel
         * ---------------------**/
        var $servicecarousel = $('.service-carousel');
        $servicecarousel.owlCarousel({
                loop: true,
                autoplay: false,
                autoPlayTimeout: 1000,
                margin:80,
                dots:true,
                nav:false,
                responsive: {
                    0: {
                        items: 1
                    },
                    450: {
                        items: 2
                    },
                    768: {
                        items: 2,
                        margin:30
                    },
                    992: {
                        items: 3
                    },
                    1200: {
                        items: 3
                    },
                    1920: {
                        items: 3
                    }
                }
            });

        /**------------------------
         *  Barbers Slide
         * ------------------------**/
        var $barbers_slide = $('.barbers-slide');
        $barbers_slide.owlCarousel({
            loop: true,
            autoplay: false,
            autoPlayTimeout: 1000,
            margin:30,
            dots:true,
            nav:false,
            responsive: {
                0: {
                    items: 1
                },
                450: {
                    items: 2
                },
                768: {
                    items: 2
                },
                992: {
                    items: 3
                },
                1200: {
                    items: 3
                },
                1920: {
                    items: 3
                }
            }
        });

        /**------------------------
         *  review-slider
         * ---------------------**/
        var $review_slider = $('.review-slider');
        $review_slider.owlCarousel({
            loop: true,
            autoplay: false,
            autoPlayTimeout: 1000,
            margin:30,
            dots:true,
            nav:false,
            responsive: {
                0: {
                    items: 1
                },
                450: {
                    items: 1
                },
                768: {
                    items: 2
                },
                992: {
                    items: 3
                },
                1200: {
                    items: 3
                },
                1920: {
                    items: 3
                }
            }
        });
            
        /**------------------------
         *  partner-slider
         * ---------------------**/
        var $partner_slider = $('.partner-slider');
        $partner_slider.owlCarousel({
            loop: true,
            autoplay: false,
            autoPlayTimeout: 1000,
            margin:30,
            dots:true,
            nav:false,
            responsive: {
                0: {
                    items: 1
                },
                400: {
                    items: 2
                },
                475: {
                    items: 3
                },
                768: {
                    items: 4
                },
                992: {
                    items: 4
                },
                1200: {
                    items: 5
                },
                1920: {
                    items: 5
                }
            }
        });
            
                    /*---------------------------------
    Portfolio Masonry activation
----------------------------------*/
        var PortflioContainer = $('#project-masonry');
        if (PortflioContainer.length > 0) {
            PortflioContainer.imagesLoaded(function () {
                var latestWorkMasonry = $('#project-masonry').isotope({
                    itemSelector: '.grid-size'
                });
                $(document).on('click', '.our-project-menu ul li', function () {
                    var filterValue = $(this).attr('data-filter');
                    latestWorkMasonry.isotope({
                        filter: filterValue
                    });
                });
            });
        }
        /*---------------------------------
        Portfolio Filter Menu Active class
        ----------------------------------*/
        var portfoliofilterMenu = '.our-project-menu ul li';
        $(document).on('click', portfoliofilterMenu, function () {
            $(this).siblings().removeClass('active');
            $(this).addClass('active');
        });

            


            /**------------------------------
             * Product Details  carousel
             * ---------------------------**/        
            var $productdetails = $('#product-details');
            $productdetails.owlCarousel({
                autoplay: false,
                autoplayTimeout: 4000,
                loop: true,
                items: 1,
                center: true,
                nav: false,
                thumbs: true,
                thumbImage: false,
                thumbsPrerendered: true,
                thumbContainerClass: 'owl-thumbs',
                thumbItemClass: 'owl-thumb-item',
            });
        });
        /*-----------------------------
            Cart Page Quantity 
        -----------------------------*/
        $(document).on('click','.qtminus',function(){
            var el = $(this);
            var $tselector = el.parent().find('.qttotal').selector;
            var total = $($tselector).text();
            if( total >= 1 ){
                total--;
            }
            $($tselector).text(total);
        });
        $(document).on('click','.qtplus',function(){
            var el = $(this);
            var $tselector = el.parent().find('.qttotal').selector;
            var total = $($tselector).text();
            total++;
            $($tselector).text(total);
        });
            /*-------------------
                back to top
            --------------------*/
            $(document).on('click', '.back-to-top', function () {
                $("html,body").animate({
                    scrollTop: 0
                }, 2000);
            });

    $(window).on('scroll', function () {

        var $window = $(window);

        var ScrollTop = $('.back-to-top');
        if ($(window).scrollTop() > 1000) {
            ScrollTop.fadeIn(1000);
        } else {
            ScrollTop.fadeOut(1000);
        }
        if ($window.scrollTop()) {
            $(".prymery-menu").addClass('nav-fixed');
        } else {
            $(".prymery-menu").removeClass('nav-fixed');
        }


    });

    $(window).on('load',function(){

        /*---------------------
            Preloader
        -----------------------*/
        var preLoder = $("#preloader");
        preLoder.addClass('hide');
        var backtoTop = $('.back-to-top')
        backtoTop.fadeOut(100);

    });

  
           

}(jQuery));	
