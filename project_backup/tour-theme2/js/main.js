(function ($) {
	"use strict";
    jQuery(document).ready(function($){

        /*--------------------
            wow js init
        ---------------------*/
        new WOW().init();
        /*---------------------------
            Date Time Picker
        ---------------------------*/
        if($('.datepicker').length){
            $('.datepicker').datepicker();
        }
        
        /*-------------------------
            magnific popup activation
        -------------------------*/
        $('.video-play-btn,.video-popup,.small-vide-play-btn').magnificPopup({
            type: 'video'
        });
        
        /*------------------
            back to top
        ------------------*/
        $(document).on('click', '.back-to-top', function () {
            $("html,body").animate({
                scrollTop: 0
            }, 2000);
        });
        
        /*-------------------------
            counter section activation
        ---------------------------*/
        var counternumber = $('.count-num');
        counternumber.counterUp({
            delay: 20,
            time: 5000 
        });
        
      
        /*-------------------------------------
            Header carousel
        --------------------------------------*/
        var $headerCarouselProgress = $(".slider-progressbar");
        var $headerCarousel = $('.header-carousel');
        if ($headerCarousel.length > 0) {
            $headerCarousel.owlCarousel({
                loop: true,
                autoplay: true, //true if you want enable autoplay
                autoPlayTimeout: 1000,
                dots: true,
                nav: false,
                animateIn: 'fadeIn',
                animateOut:'fadeOut',
                onInitialized: startProgressBar,
                onTranslate: resetProgressBar,
                onTranslated: startProgressBar,
                responsive: {
                    0: {
                        items: 1,
                        nav:false,
                        center:false,
                    },
                    768: {
                        items: 1,
                        center:false,
                    },
                    960: {
                        items: 1,
                        center:false,
                    },
                    1200: {
                        items: 1
                    },
                    1920: {
                        items: 1
                    }
                }
            });
        } 

        function startProgressBar() {
        $headerCarouselProgress.css({
            width: "100%",
            transition: "width 5000ms"
        });
        }

        function resetProgressBar() {
        $headerCarouselProgress.css({
            width: 0,
            transition: "width 0s"
        });
        }

        /*-------------------------------------
            destination carousel
        --------------------------------------*/
        var $testimoinalCarousel = $('.popular-destination-carousel');
        if ($testimoinalCarousel.length > 0) {
            $testimoinalCarousel.owlCarousel({
                loop: true,
                autoplay: true, //true if you want enable autoplay
                autoPlayTimeout: 1000,
                margin: 30,
                dots: true,
                nav: false,
                center:true,
                responsive: {
                    0: {
                        items: 1,
                        nav:false,
                        center:false,
                    },
                    768: {
                        items: 2,
                        center:false,
                    },
                    960: {
                        items: 3,
                        center:false,
                    },
                    1200: {
                        items: 5
                    },
                    1920: {
                        items: 5
                    }
                }
            });
        }
        /*-------------------------------------
            testimonial two carousel
        --------------------------------------*/
        var $testimoinalCarousel = $('.testimonial-carousel');
        if ($testimoinalCarousel.length > 0) {
            $testimoinalCarousel.owlCarousel({
                loop: true,
                autoplay: true, //true if you want enable autoplay
                autoPlayTimeout: 1000,
                margin: 30,
                dots: true,
                nav: false,
                center:true,
                responsive: {
                    0: {
                        items: 1,
                        nav:false,
                        center:false,
                    },
                    768: {
                        items: 2,
                        center:false,
                    },
                    960: {
                        items: 2,
                        center:false,
                    },
                    1200: {
                        items: 3
                    },
                    1920: {
                        items: 3
                    }
                }
            });
        }
        /*---------------------------
            Logo carousel
        ---------------------------*/
        var $logoCarousel = $('.brand-carousel');
        if ($logoCarousel.length > 0) {
            $logoCarousel.owlCarousel({
                loop: true,
                autoplay: true, //true if you want enable autoplay
                autoPlayTimeout: 1000,
                margin: 30,
                dots: false,
                nav: false,
                animateOut: 'fadeOut',
                animateIn: 'fadeIn',
                responsive: {
                    0: {
                        items: 1
                    },
                    460: {
                        items: 2
                    },
                    599: {
                        items: 2
                    },
                    768: {
                        items: 3
                    },
                    960: {
                        items: 3
                    },
                    1200: {
                        items: 5
                    },
                    1920: {
                        items: 5
                    }
                }
            });
        }

    });
    //define variable for store last scrolltop
    var lastScrollTop = '';
    $(window).on('scroll', function () {
        
        //back to top show/hide
       var ScrollTop = $('.back-to-top');
       if ($(window).scrollTop() > 1000) {
           ScrollTop.fadeIn(1000);
       } else {
           ScrollTop.fadeOut(1000);
       }
       /*--------------------------
        sticky menu activation
       -------------------------*/
        var st = $(this).scrollTop();
        var mainMenuTop = $('.navbar-area');
        if ($(window).scrollTop() > 1000) {
            if (st > lastScrollTop) {
                // hide sticky menu on scrolldown 
                mainMenuTop.removeClass('nav-fixed');
                
            } else {
                // active sticky menu on scrollup 
                mainMenuTop.addClass('nav-fixed');
            }

        } else {
            mainMenuTop.removeClass('nav-fixed ');
        }
        lastScrollTop = st;
       
    });
           
    $(window).on('load',function(){

        /*-----------------
            preloader
        ------------------*/
        var preLoder = $("#preloader");
        preLoder.fadeOut(1000);
        /*-----------------
            back to top
        ------------------*/
        var backtoTop = $('.back-to-top')
        backtoTop.fadeOut();
        /*---------------------
            Cancel Preloader
        ----------------------*/
        $(document).on('click','.cancel-preloader a',function(e){
            e.preventDefault();
            $("#preloader").fadeOut(2000);
        });

    });

}(jQuery));	
