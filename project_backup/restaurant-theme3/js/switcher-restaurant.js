//Switcher
jQuery(document).ready(function($) {

jQuery("#default-color" ).click(function(){
jQuery("#color" ).attr("href", "css/default-color.css");
//jQuery(".link img" ).attr("src", "images/timetable-menu-brown.png");
return false;
});

jQuery("#brown" ).click(function(){
jQuery("#color" ).attr("href", "css/theme-colors/brown.css");
jQuery(".link img.time-tab" ).attr("src", "images/timetable-menu-brown.png");
return false;
});

jQuery("#pink" ).click(function(){
jQuery("#color" ).attr("href", "css/theme-colors/pink.css");
jQuery(".link img.time-tab" ).attr("src", "images/timetable-menu-pink.png");
return false;
});

jQuery("#dark-blue" ).click(function(){
jQuery("#color" ).attr("href", "css/theme-colors/dark-blue.css");
jQuery(".link img.time-tab" ).attr("src", "images/timetable-menu-dark-blue.png");
return false;
});


jQuery("#green" ).click(function(){
jQuery("#color" ).attr("href", "css/theme-colors/green.css");
jQuery(".link img.time-tab" ).attr("src", "images/timetable-menu-green.png");
return false;
});

jQuery("#light-green" ).click(function(){
jQuery("#color" ).attr("href", "css/theme-colors/light-green.css");
jQuery(".link img.time-tab" ).attr("src", "images/timetable-menu-light-green.png");
return false;
});


jQuery("#orange" ).click(function(){
jQuery("#color" ).attr("href", "css/theme-colors/orange.css");
jQuery(".link img.time-tab" ).attr("src", "images/timetable-menu-orange.png");
return false;
});

jQuery("#light-blue" ).click(function(){
jQuery("#color" ).attr("href", "css/theme-colors/light-blue.css");
jQuery(".link img.time-tab" ).attr("src", "images/timetable-menu-light-blue.png");
return false;
});

jQuery("#purple" ).click(function(){
jQuery("#color" ).attr("href", "css/theme-colors/purple.css");
jQuery(".link img.time-tab" ).attr("src", "images/timetable-menu-purple.png");
return false;
});

jQuery("#red" ).click(function(){
jQuery("#color" ).attr("href", "css/theme-colors/red.css");
jQuery(".link img.time-tab" ).attr("src", "images/timetable-menu-red.png");
return false;
});

jQuery("#yellow" ).click(function(){
jQuery("#color" ).attr("href", "css/theme-colors/yellow.css");
jQuery(".link img.time-tab" ).attr("src", "images/timetable-menu-yellow.png");
return false;
});




jQuery("#dark").click(function(){
jQuery("#footer").addClass("footer-dark");
jQuery("#footer").removeClass("footer");
//jQuery("#footer img" ).attr("src", "imgs/footer-logos.png");
});

jQuery("#light").click(function(){
jQuery("#footer").addClass("footer");
jQuery("#footer").removeClass("footer-dark");
//jQuery("#footer img" ).attr("src", "imgs/footer-logos-dark.png");
});





jQuery("#header-two").click(function(){
jQuery("#header-1").show();
jQuery("#header-2").hide();
});
jQuery("#header-one").click(function(){
jQuery("#header-2").show();
jQuery("#header-1").hide();
});



// picker buttton
jQuery(".picker_close").click(function(){

jQuery("#choose_color").toggleClass("position");

});



})(jQuery);