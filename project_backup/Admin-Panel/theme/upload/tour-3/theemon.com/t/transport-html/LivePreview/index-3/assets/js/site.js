(function($) {
"use strict";
var isMobile;
$(document).ready(function() {
	$(".nav-icon").on('click', function() {
			if ($(window).width() < 768) {
			$('.navigation').slideToggle();
			}
		})
		
		$(".navigation li").on('click',function(){
			if ($(window).width() < 768) {
			$(this).children('.sub-menu').slideToggle();
			}
		})
//=======================audio player function===================
	
	if ($('audio').length) {
 $( 'audio' ).audioPlayer(); 
	}

	//===========owl carousel========
	$("#services-slides").owlCarousel({
		autoPlay : false, //Set AutoPlay to 3 seconds

		items : 3,
		itemsDesktop : [1199, 3],
		itemsDesktopSmall : [979, 3],
		itemsMobile : [480, 1]

	});

	$("#about-slides").owlCarousel({
		items : 1,
		itemsDesktop : [1199, 1],
		itemsDesktopSmall : [979, 1],
		itemsTablet : [768, 1],
		navigation : true
	});

	$("#news-slides").owlCarousel({
		autoPlay : false, //Set AutoPlay to 3 seconds

		items : 3,
		itemsDesktop : [1199, 3],
		itemsDesktopSmall : [979, 3],
		itemsMobile : [480, 1]
	});

	$("#testimonial-text").owlCarousel({
		autoPlay : false, //Set AutoPlay to 3 seconds

		items : 2,
		itemsDesktop : [1199, 2],
		itemsDesktopSmall : [979, 2],
		itemsMobile : [480, 1]

	});

	$("#more-slides").owlCarousel({
		autoPlay : false, //Set AutoPlay to 3 seconds

		items : 3,
		itemsDesktop : [1199, 3],
		itemsDesktopSmall : [979, 2],
		itemsMobile : [480, 1]

	});

	$("#location-slides").owlCarousel({
		autoPlay : false, //Set AutoPlay to 3 seconds

		items : 3,
		itemsDesktop : [1199, 3],
		itemsDesktopSmall : [979, 2],
		itemsMobile : [480, 1]
	});

	$("#best-seller-items").owlCarousel({
		autoPlay : false, //Set AutoPlay to 3 seconds
		navigation : true,
		pagination : false,
		navigationText : ["", ""],

		items : 4,
		itemsDesktop : [1199, 4],
		itemsDesktopSmall : [979, 3],
		itemsMobile : [480, 1]
	});

	$("#countries").owlCarousel({
		autoPlay : false, //Set AutoPlay to 3 seconds
		singleItem : true,

		items : 1,

	});

	if ($('.select').length > 0) {
		$(".select").selectbox();
	}
	
//==========================	Map function ===============

if ($('#map-box').length) {
				var map = new GMaps({
					div : '#map-box',
					lat : 33.656651,
					lng : -83.710679,

					disableDefaultUI : true,
					zoom : 10,
					scrollwheel : false
				});
				map.drawOverlay({
					lat : map.getCenter().lat(),
					lng : map.getCenter().lng(),
					content : '<a href="#" class="mapmarker"></a>',
					verticalAlign : 'top',
					horizontalAlign : 'center'
				});

				if ($(window).width() >= 1200) {
					map.setOptions({

						center : new google.maps.LatLng(33.656651, -83.710679),
					});
				} else if ($(window).width() >= 992) {
					map.setOptions({

						center : new google.maps.LatLng(33.656651, -83.710679),
					});
				} else if ($(window).width() >= 768) {
					map.setOptions({

						center : new google.maps.LatLng(33.656651, -83.710679),
					});
				} else {
					map.setOptions({

						center : new google.maps.LatLng(33.656651, -83.710679),
					});
				}
			}
			

	//this function only for Desktop view
	isMobile = navigator.userAgent.match(/(iPhone|iPod|Android|BlackBerry|iPad|IEMobile|Opera Mini)/);
	if ((!isMobile)) {

		var animSection = function() {
			jQuery('.anim-section').each(function() {
				if (jQuery(window).scrollTop() > (jQuery(this).offset().top - jQuery(window).height() / 1.15)) {
					jQuery(this).addClass('animate')
				}
			})
		};
		if (jQuery('.anim-section').length) {
			animSection()
			jQuery(window).scroll(function() {
				animSection()
			})
		};

		jQuery(window).load(function() {
			if (jQuery('.parallax').length) {
				jQuery('.parallax').each(function() {
					parallax(jQuery(this), 0.1);
				})
			}
		});
		jQuery(window).scroll(function() {
			if (jQuery('.parallax').length) {
				jQuery('.parallax').each(function() {
					parallax(jQuery(this), 0.1);
				})
			}
		});

		jQuery(window).scroll(function() {
			if (jQuery('.help-info.parallax').length) {
				jQuery('.help-info.parallax').each(function() {
					parallax(jQuery(this), 0);
				})
			}
		})
	}
	if ($('#slider-range').length) {
		$("#slider-range").slider({
			range : true,
			min : 0,
			max : 500,
			values : [75, 300],
			slide : function(event, ui) {
				$("#amount").val("$" + ui.values[0]);
				$("#amount1").val("$" + ui.values[1]);
			}
		});

		$("#amount").val("$" + $("#slider-range").slider("values", 0));
		$("#amount1").val("$" + $("#slider-range").slider("values", 1));

		$('#slider-range .ui-slider-handle:first').append(amount);
		$('#slider-range .ui-slider-handle:last').append(amount1);
	}
	
	// Shop Details
	$(".custom-thumbnail li img").on('click',function() {
		var thumbnail = $(this).attr("src");
		$(".product-1 img").attr("src", thumbnail)
	});
	
	//=========== Shopping cart value increase and decrease function ================
	$('.increase').on('click', function () {
     var value = $(this).parents('.quantity-value').find('input').val();
     value++;
     $(this).parents('.quantity-value').find('input').val(value);
 });

 $('.decrease').on('click', function () {
     var value = $(this).parents('.quantity-value').find('input').val();
     if(value>0){
      value--;
     $(this).parents('.quantity-value').find('input').val(value);
     }
     
 });


});
//===========window scroll function========
$(window).scroll(function() {
	if (!isMobile) {
		if ($('.parallax').length) {
			$('.parallax').each(function() {
				parallax($(this), 0.1);
			})
		}
	}
	
	 //Header Fix On Scroll
     var posScroll =$(window).scrollTop();
     var primaryH =$('.primary-header').outerHeight();
     if(posScroll>primaryH){
      $('#header').addClass('fix');
     }
     else{
      $('#header').removeClass('fix');
     }
})
//===========window Load function========
$(window).load(function() {
	if ($('.flexslider1').length > 0) {
		$('.flexslider1').flexslider({
			animation : "slide",
			controlNav : false
		});
	}

	$('.loader-block').delay(50).fadeOut();

	if ($('#content-1').length) {
		$("#content-1").mCustomScrollbar({
			theme : "minimal"
		});
	}
	if ($('#content-2').length) {
		$("#content-2").mCustomScrollbar({
			theme : "minimal"
		});
	}
	if (!isMobile) {
		if ($('.parallax').length) {
			$('.parallax').each(function() {
				parallax($(this), 0.1);
			})
		}
	}
})
var parallax = function(id, val) {
	if ($(window).scrollTop() > id.offset().top - $(window).height() && $(window).scrollTop() < id.offset().top + id.outerHeight()) {
		var px = parseInt($(window).scrollTop() - (id.offset().top - $(window).height()))
		px *= -val;
		id.css({
			'background-position' : 'left ' + px + 'px'
		})
	}
}

})(jQuery);