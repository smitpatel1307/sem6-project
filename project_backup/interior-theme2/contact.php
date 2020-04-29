<html>
<head>
<meta charset="utf-8">
<title>Nextin HTML Template </title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">

<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

<!-- Preloader -->

<div class="page-wrapper">
 	
 	
    <!-- Main Header-->
    <?php
	  include 'include/header.php';
	?>
    <!--End Main Header -->

    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/bg-4.jpg)">
        <div class="auto-container">
            <h1>Contact</h1>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Contact Form Section -->
    <section class="contact-form-section sp-one">
        <div class="auto-container">
            <div class="wrapper-box">
                <div class="contact-form-area">
                    <div class="sec-title mb-50 text-center">
                        <div class="sub-title">Contact with us</div>
                        <h1>Do you have any question? <br>write us a message</h1>
                    </div>
                    <!-- Contact Form -->
                    <div class="contact-form">
                        <div id="form-messages"></div>
                        <form method="post" action="http://html.tonatheme.com/2019/Nextin/inc/sendmail.php" id="ajax-contact">
                            <div class="row clearfix">
                                
                                <div class="col-lg-12 form-group field">
                                    <input type="text" id="name" name="username" placeholder="Your Name" required>
                                </div>
                                
                                <div class="col-lg-12 form-group field">
                                    <input type="email" id="email" name="email" placeholder="Email Address" required>
                                </div>
                                
                                <div class="col-lg-12 form-group field">
                                    <textarea id="message" name="message" placeholder="Write Message" required></textarea>
                                </div>
                            
                                <div class="col-lg-12 form-group text-center field">
                                    <button type="submit" name="submit-form" class="theme-btn btn-style-four border-anim-left"><span class="border-anim-right"></span>SEND MESSAGE</button>
                                </div>
                                
                            </div>
                        </form>
                            
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Info Section -->
    <section class="contact-info-section sp-two">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-3 col-md-6 contact-info-block">
                    <div class="inner-box">
                        <div class="wrapper-box">
                            <h3>Social Media</h3>
                            <!--<ul>
                                <li>22 Texas West Hills</li>
                                <li><a href="mailto:needhelp@nextin.com">needhelp@nextin.com</a></li>
                                <li><a href="tel:+8806668880000">666 888 0000</a></li>
                            </ul>-->
                        </div>                            
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 contact-info-block">
                    <div class="inner-box">
                        <div class="wrapper-box">
                            <h3>Phone</h3>
                            <ul>
                                <li><a href="">666 888 0000</a></li>
                            </ul>
                        </div>
                            
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 contact-info-block">
                    <div class="inner-box">
                        <div class="wrapper-box">
                            <h3>Email</h3>
                            <ul>
                                <li><a href="">needhelp@nextin.com</a></li>
                            </ul>
                        </div>                            
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 contact-info-block">
                    <div class="inner-box">
                        <div class="wrapper-box">
                            <h3>Address</h3>
                            <ul>
                                <li>7 Lombabr 60 Baltimore</li>
                            </ul>
                        </div>                            
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Map Section -->
    <section class="contact-map-section">
        <div class="outer-container">
            <div class="map-outer">
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
            </div>
        </div>
    </section>
    <!-- End Map Section -->
    


    <!-- Main Footer -->
    <?php
	 include 'include/footer.php';
	?>
    <!-- End Main Footer -->

</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fas fa-angle-up"></span></div>
<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/pagenav.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.paroller.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/appear.js"></script>
<script src="js/swiper.min.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/element-in-view.js"></script>
<script src="js/timeline.min.js"></script>
<script src="js/TweenMax.min.js"></script>
<script src="js/jqBootstrapValidation.js"></script>
<script src="js/script.js"></script>

<!--Google Map APi Key-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBk25E4mNfVIEt3tNl3K1HwNZVruVoFBlA"></script>
<script src="js/map-script.js"></script>
<!--End Google Map APi-->

</body>
</html>


