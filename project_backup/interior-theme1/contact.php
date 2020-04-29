<html>
<head>
<meta charset="utf-8">
<title>Bruges - Interior and Architecture HTML Template | Contact Us</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">

<!--Color Switcher Mockup-->
<link href="css/color-switcher-design.css" rel="stylesheet">

<!--Color Themes-->
<link id="theme-color-file" href="css/default-theme.css" rel="stylesheet">

<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
    <!-- Main Header-->
    <?php
		include 'include/header.php';
	?>
    <!--End Main Header -->
    
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/3.jpg)">
    	<div class="auto-container">
        	<h1>Contact Us</h1>
            <ul class="page-breadcrumb">
            	<li><a href="index.php">Home</a></li>
                <li>Contact Us</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
    
    <!--Contact Section-->
    <section class="contact-page-section">
    	<div class="auto-container">
        	<div class="inner-container">
            	<div class="clearfix">
                	<!--Content Column-->
                    <div class="content-column col-md-7 col-sm-12 col-xs-12">
                    	<div class="inner-column">
                        	<h2>Contact Our Office</h2>
                            <div class="title-text">If you have any querry for related Interior & architecture… We are available...</div>
                            <div class="row clearfix">
                            
                            	<!--Column-->
                                <div class="column col-md-6 col-sm-12 col-xs-12">
                                	<h3>Main Branch</h3>
                                    <div class="location">Newyork</div>
                                    <ul class="contact-list">
                                    	<li>DE 198 Tech Road <br> Bridge Str, Newyork 10026 <br> United States.</li>
                                        <li><span>p:</span>+8 (321) 666-12-34</li>
                                        <li><span>E:</span>Support@Brugesny.com</li>
                                    </ul>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    
                    <!--Form Column-->
                    <div class="form-column col-md-5 col-sm-12 col-xs-12">
                    	<div class="inner-column">
                        	
                            <!--Contact Form-->
                            <div class="contact-form">
                                <form method="post" action="http://steelthemes.com/demo/html/Bruges/sendemail.php" id="contact-form">
                                    
                                    <div class="form-group">
                                        <input type="text" name="username" placeholder="Name" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" placeholder="Email Address" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="subject" placeholder="Subject " required>
                                    </div>
                                    <div class="form-group">
                                        <textarea name="message" placeholder="Message..."></textarea>
                                    </div>
                                    <div class="form-group btn-box">
                                        <button class="theme-btn btn-style-two" type="submit" name="submit-form">Send Message</button>
                                    </div>
                                        
								</form>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!--End Contact Section-->
    
    <!--Map Info Section-->
    <section class="map-section">
    	
        <!--Map Canvas-->
        <div class="map-canvas"
            data-zoom="12"
            data-lat="-37.817085"
            data-lng="144.955631"
            data-type="roadmap"
            data-hue="#ffc400"
            data-title="Envato"
            data-icon-path="images/icons/map-marker.png"
            data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
        </div>
        
	</section>
    
    <!--Main Footer-->
    <?php
		include 'include/footer.php';
	?>
    <!--End Main Footer-->
    
</div>
<!--End pagewrapper-->

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/owl.js"></script>
<script src="js/validate.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/wow.js"></script>
<script src="js/appear.js"></script>
<script src="js/script.js"></script>
<!--Google Map APi Key-->
<script src="http://maps.google.com/maps/api/js?key=AIzaSyBKS14AnP3HCIVlUpPKtGp7CbYuMtcXE2o"></script>
<script src="js/map-script.js"></script>
<!--End Google Map APi-->

<!--Color Switcher-->
<script src="js/color-settings.js"></script>
</body>

</html>