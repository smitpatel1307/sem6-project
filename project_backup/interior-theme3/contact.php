<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from steelthemes.com/demo/html/interrio-html/contact-v2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 May 2019 03:28:44 GMT -->
<head>
	<meta charset="UTF-8">
	<title>Contact V2 || Interrio || Responsive HTML 5 Template</title>

	<!-- responsive meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- master stylesheet -->
	<link rel="stylesheet" href="css/style.css">
	<!-- Responsive stylesheet -->
	<link rel="stylesheet" href="css/responsive.css">

    <!-- Fixing Internet Explorer-->
    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="js/html5shiv.js"></script>
    <![endif]-->
</head>
<body>

<!--Start header-search  area-->
<!--End header-search  area-->  

<!--Start header area-->
<?php
  include 'include/header.php';
?>
<!--End header area-->

<!--Start breadcrumb area-->     
<section class="breadcrumb-area" style="background-image: url(images/breadcrumb-bg.jpg);">
	<div class="container-fluid text-center">
		<h1>Contact Us</h1>
		<div class="breadcrumb-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="left pull-left">
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                                <li>Contact Us </li>
                            </ul>    
                        </div>
                        <div class="right pull-right">
                            <a href="#"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>Get a Quote</a>
                        </div>    
                    </div>
                </div>
            </div>
		</div>
	</div>
</section>
<!--End breadcrumb area-->

<!--Start contact v1 area-->
<section class="contact-v2-area">
    <div class="container">
        <div class="row">
           
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="contact-info pd-bottom">
                    <div class="title">
                        <h3>Franchisee Operation</h3>
                    </div>
                    <ul class="contact-address">
                        <li>
                            <div class="icon-holder">
                                <span class="flaticon-building"></span>
                            </div>
                            <div class="text-holder">
                                <p>11/8 Designer Street, Northvale</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon-holder">
                                <span class="flaticon-technology"></span>
                            </div>
                            <div class="text-holder">
                                <p>(+321) 890 12 3456</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon-holder">
                                <span class="flaticon-new-email-outline"></span>
                            </div>
                            <div class="text-holder">
                                <p>Getintouch@Interiors.com</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon-holder">
                                <span class="flaticon-clock"></span>
                            </div>
                            <div class="text-holder">
                                <p>Mon - Sat Day: 09.00 to 18.00<br>Sunday Closed</p>
                            </div>
                        </li>
                    </ul>
                    <div class="view-on-map">
                        <a href="#">View On Map<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-6 col-sm-12 col-xs-12">
                <div class="google-map-area">
                    <div 
                        class="google-map"
                        id="contact-v2-google-map"
                        data-map-lat="23.810332"
                        data-map-lng="90.412518"
                        data-icon-path="images/resources/map-marker-2.png"
                        data-map-title="Brooklyn, New York, United Kingdom"
                        data-map-zoom="12"
                        data-markers='{
                            "marker-1": [23.810332, 90.412518, "<h4>Head Office</h4><p>44/108 Dhaka, Bangladesh</p>"]
                            
                        }'>

                    </div>
                </div>
            </div> 
        </div>
    </div>
</section>                                                                     
<!--End contact v1 area-->
 
<!--Start contact v2 form area-->
<section class="contact-v2-form-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="contact-v2-form">
                    <div class="sec-title text-center">
                        <h2>Send Your Message</h2>
                        <p> We've distilled our interior design process into 4 Steps – the same steps we have been using for more than 41 years, In this steps, the designer visits your home to gather more.</p>
                    </div>
                    <form id="contact-form" name="contact_form" action="http://steelthemes.com/demo/html/interrio-html/inc/sendmail.php" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="form_name" value="" placeholder="Your Name*" required="">
                                <input type="email" name="form_email" value="" placeholder="Your Mail*" required="">
                                <input type="text" name="form_phone" value="" placeholder="Phone">
                            </div>
                            <div class="col-md-6">
                                <textarea name="form_message" placeholder="Your Message.." required=""></textarea>
                                <input id="form_botcheck" name="form_botcheck" type="hidden" value="">
                                <button class="thm-btn bg-cl-1" type="submit" data-loading-text="Please wait...">send message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>                                                                                           
<!--End contact v2 form area--> 
                                               
<!--Start footer area-->  
<?php
  include 'include/footer.php';
?> 
<!--End footer area--> 

<!--Start footer bottom area-->       
<!--End footer bottom area-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

<!-- main jQuery -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- bx slider -->
<script src="js/jquery.bxslider.min.js"></script>
<!-- count to -->
<script src="js/jquery.countTo.js"></script>
<!-- owl carousel -->
<script src="js/owl.carousel.min.js"></script>
<!-- validate -->
<script src="js/validation.js"></script>
<!-- mixit up -->
<script src="js/jquery.mixitup.min.js"></script>
<!-- easing -->
<script src="js/jquery.easing.min.js"></script>
<!-- gmap helper -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHzPSV2jshbjI8fqnC_C4L08ffnj5EN3A"></script>
<!--gmap script-->
<script src="js/gmaps.js"></script>
<script src="js/map-helper-2.js"></script>
<!-- video responsive script -->
<script src="js/jquery.fitvids.js"></script>
<!-- jQuery ui js -->
<script src="js/jquery-ui-1.11.4/jquery-ui.js"></script>
<!-- Language Switche  -->
<script src="js/jquery.polyglot.language.switcher.js"></script>
<!-- fancy box -->
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.appear.js"></script>
<!-- isotope script-->
<script src="js/isotope.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>            
		
<!-- revolution slider js -->
<script src="js/jquery.themepunch.tools.min.js"></script>
<script src="js/jquery.themepunch.revolution.min.js"></script>
<script src="js/revolution.extension.actions.min.js"></script>
<script src="js/revolution.extension.carousel.min.js"></script>
<script src="js/revolution.extension.kenburn.min.js"></script>
<script src="js/revolution.extension.layeranimation.min.js"></script>
<script src="js/revolution.extension.migration.min.js"></script>
<script src="js/revolution.extension.navigation.min.js"></script>
<script src="js/revolution.extension.parallax.min.js"></script>
<script src="js/revolution.extension.slideanims.min.js"></script>
<script src="js/revolution.extension.video.min.js"></script>



<!-- thm custom script -->
<script src="js/custom.js"></script>






</body>

<!-- Mirrored from steelthemes.com/demo/html/interrio-html/contact-v2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 May 2019 03:28:45 GMT -->
</html>