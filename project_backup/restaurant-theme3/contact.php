<!DOCTYPE html>
<html>
<!-- Mirrored from wahabali.com/work/pearl-demo/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 May 2019 06:26:51 GMT -->
<head>
    <title>Welcome to Pearl</title>
	 
    <meta name="keywords" content="">
	<meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	
	<link rel="icon" type="image/png" href="images/favicon-pearl.png">
	
    <!--main file-->
	<link href="css/pearl-restaurant.css" rel="stylesheet" type="text/css">
    
    <!--Medical Guide Icons-->
	<link href="css/pearl-icons.css" rel="stylesheet" type="text/css">
	
	<!-- Default Color-->
	<link href="css/default-color.css" rel="stylesheet" id="color"  type="text/css">
    
    <!--bootstrap-->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    
    <!--Dropmenu-->
	<link href="css/dropmenu.css" rel="stylesheet" type="text/css">
    
	<!--Sticky Header-->
	<link href="css/sticky-header.css" rel="stylesheet" type="text/css">
	
	<!--Sticky Countdown-->
	<link href="css/countdown.css" rel="stylesheet" type="text/css">
	
	<!--revolution-->
	<link href="css/settings.css" rel="stylesheet" type="text/css">    
    <link href="css/extralayers.css" rel="stylesheet" type="text/css">    
   
    <!--Owl Carousel-->
	<link href="css/owl.carousel.css" rel="stylesheet" type="text/css">    
	
    <!-- Mobile Menu -->
	<link rel="stylesheet" type="text/css" href="css/jquery.mmenu.all.css" />
	
	
	<!--PreLoader-->
	<link href="css/loader.css" rel="stylesheet" type="text/css">    
   
    <!--switcher-->
	<link href="css/switcher.css" rel="stylesheet" type="text/css">	
	
</head>
  <body>
    
	<!--Switcher-->
	
	
  <div id="wrap">
   
   <!--Start PreLoader-->
	<!--End PreLoader--> 

  
   <!--Start Header-->
	<?php
	  include 'include/header.php';
	?>
    
   <!--End Header-->
	
	
	<!--Start Sub Banner-->
   <div class="sub-banner">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="detail">
						<h1>contact us</h1>
						<span>Ridiculus sociosqu cursus neque cursus curae ante scelerisque vehicula.</span>
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a class="select">Contact Us</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="banner-img"></div>
   </div>
   <div class="wave"></div>
   
   <!--End Sub Banner-->
   
   
   
   <!--Start Content-->
	<div class="content">
	
		<div class="contact-page">
		
		<!--Start Get in Touch-->
				<div class="get-in-touch">
					<div class="container">
					<div class="row">
						
						<div class="col-md-12">
							<div class="get-touch-form">
                            <p class="success_msg" id="success_msg" style="display:none">Thank You! We will contact you shortly.</p>
								<form name="contact_form" id="contact_form" method="post" onSubmit="return false">
                                <input name="name" id="name" type="text" onKeyPress="remove_contact_errors();" onblur="if(this.value == '') { this.value='Your Name'}" onfocus="if (this.value == 'Your Name') {this.value=''}" value="Your Name">
								<input class="last" name="email_address" id="email_address" onKeyPress="remove_contact_errors();" type="text" onblur="if(this.value == '') { this.value='E-mail Address'}" onfocus="if (this.value == 'E-mail Address') {this.value=''}" value="E-mail Address">
								<textarea name="msg" id="msg" cols="1" onKeyPress="remove_contact_errors();" rows="1" onblur="if(this.value == '') { this.value='Message'}" onfocus="if (this.value == 'Message') {this.value=''}" value="Message">Message</textarea>
								<input type="submit" name=" " value="send message" onClick="validateContact();">
                                </form>
							</div>
						</div>
						
					</div>
					</div>
					
					
				</div>
		<!--End Get in Touch-->
		
		
		<!--Start Map-->
			<div id='map'>
				<div id='find-us'></div>
			</div>
		<!--End Map-->
					
		
		</div>
		
	</div>	
   <!--End Content-->
	
	
	
	
	
	
	
	<!--Start Footer-->
		<?php
		  include 'include/footer.php';
		?>
	<!--End Footer-->
	
	
	
	
	



<a href="#0" class="cd-top"></a>
  </div>



<script type="text/javascript" src="js/jquery.js"></script>

<!-- SMOOTH SCROLL -->	
<script type="text/javascript" src="js/scroll-desktop.js"></script>
<script type="text/javascript" src="js/scroll-desktop-smooth.js"></script>

<!-- START REVOLUTION SLIDER -->	
<script type="text/javascript" src="js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="js/jquery.themepunch.tools.min.js"></script>

<!-- Countdown -->
<script type="text/javascript" src="js/countdown.js"></script>

<!-- Owl Carousel -->
<script type="text/javascript" src="js/owl.carousel.js"></script>
<script type="text/javascript" src="js/cart-detail.js"></script>

<!-- Mobile Menu -->
<script type="text/javascript" src="js/jquery.mmenu.min.all.js"></script>


<!-- All Scripts -->
<script type="text/javascript" src="js/custom.js"></script> 

<!-- Switcher -->
<script type="text/javascript" src="js/switcher-restaurant.js"></script>

<script src='../../../maps.googleapis.com/maps/api/js555e?key=&amp;sensor=false&amp;extension=.js'></script> 
 
<script> 
    google.maps.event.addDomListener(window, 'load', init);
    var map;
    function init() {
        var mapOptions = {
            center: new google.maps.LatLng(-37.812433,144.954019),
            zoom: 19,
            zoomControl: true,
            zoomControlOptions: {
                style: google.maps.ZoomControlStyle.DEFAULT,
            },
            disableDoubleClickZoom: true,
            mapTypeControl: true,
            mapTypeControlOptions: {
                style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
            },
            scaleControl: true,
            scrollwheel: false,
            panControl: true,
            streetViewControl: true,
            draggable : true,
            overviewMapControl: true,
            overviewMapControlOptions: {
                opened: false,
            },
            mapTypeId: google.maps.MapTypeId.ROADMAP,
        }
        var mapElement = document.getElementById('find-us');
        var map = new google.maps.Map(mapElement, mapOptions);
        var locations = [
['Your Company', 'Envato, King Street, Melbourne, Victoria, Australia', '+123 55 33 444 888', 'help@pearl.com', 'www.pearl.com', -37.8124755, 144.953892, 'http://wahabali.com/themeforest_images/pearl-map.png']
        ];
        for (i = 0; i < locations.length; i++) {
			if (locations[i][1] =='undefined'){ description ='';} else { description = locations[i][1];}
			if (locations[i][2] =='undefined'){ telephone ='';} else { telephone = locations[i][2];}
			if (locations[i][3] =='undefined'){ email ='';} else { email = locations[i][3];}
           if (locations[i][4] =='undefined'){ web ='';} else { web = locations[i][4];}
           if (locations[i][7] =='undefined'){ markericon ='';} else { markericon = locations[i][7];}
            marker = new google.maps.Marker({
                icon: markericon,
                position: new google.maps.LatLng(locations[i][5], locations[i][6]),
                map: map,
                title: locations[i][0],
                desc: description,
                tel: telephone,
                email: email,
                web: web
            });
link = '';            bindInfoWindow(marker, map, locations[i][0], description, telephone, email, web, link);
     }
 function bindInfoWindow(marker, map, title, desc, telephone, email, web, link) {
      var infoWindowVisible = (function () {
              var currentlyVisible = false;
              return function (visible) {
                  if (visible !== undefined) {
                      currentlyVisible = visible;
                  }
                  return currentlyVisible;
               };
           }());
           iw = new google.maps.InfoWindow();
           google.maps.event.addListener(marker, 'click', function() {
               if (infoWindowVisible()) {
                   iw.close();
                   infoWindowVisible(false);
               } else {
                   var html= "<div style='color:#000;background-color:#fff;padding:5px;width:150px;'><h4>"+title+"</h4><p>"+desc+"<p><p>"+telephone+"<p><a href='mailto:"+email+"' >"+email+"<a></div>";
                   iw = new google.maps.InfoWindow({content:html});
                   iw.open(map,marker);
                   infoWindowVisible(true);
               }
        });
        google.maps.event.addListener(iw, 'closeclick', function () {
            infoWindowVisible(false);
        });
 }
}
</script>



</body>

<!-- Mirrored from wahabali.com/work/pearl-demo/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 May 2019 06:27:12 GMT -->
</html>