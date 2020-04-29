<?php
$current="1";
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php
session_start();
if(isset($_GET['vendor_id']))
{
$vendor_id=$_GET['vendor_id'];
$_SESSION['vendor_id']=$vendor_id;
}
include 'include/connect.php';
$vendor_id=$_SESSION['vendor_id'];
$sql = $link->rawQueryOne('select * from vendor where vendor_id=?',Array($vendor_id));
?>
	<title>Home || <?php echo $sql['shop_name']; ?></title>

	<!-- responsive meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- master stylesheet -->
	<link rel="stylesheet" href="css/style.css">
	<!-- Responsive stylesheet -->
	<link rel="stylesheet" href="css/responsive.css">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="images/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="images/favicon-16x16.png" sizes="16x16">

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

<!--Start rev slider wrapper-->     
<section class="rev_slider_wrapper">
    <div id="slider1" class="rev_slider"  data-version="5.0">
        <ul>
							<?php
			
							$vendor_id=$_SESSION['vendor_id'];
							include 'include/connect.php';
							$sql = $link->rawQuery('select * from slider where vendor_id=?',Array($vendor_id));
							if($link->count > 0)
							{
								foreach($sql as $s)
								{
									?>
           <li data-transition="slidingoverlayleft">
                <img src="../../../../Vendor-Panel/slider/<?php echo $s['slider_image']; ?>"  alt="" width="1920" height="800" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1" >
            </li> 
				<?php
								}
							}
							?>
        </ul>
    </div>
</section>
<!--End rev slider wrapper--> 
    
<!--Start welcome area-->
<section class="welcome-area" style="padding-top: 40px;">
    <div class="container clearfix">
        <div class="sec-title">
            <h2>About <span>Us</span></h2>
        </div>
							<?php
								$vendor_id=$_SESSION['vendor_id'];
								$sql = $link->rawQueryOne('select * from about where vendor_id=?',Array($vendor_id));
								
							?>
        <div class="row" >
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="text-holder">
                    <p><?php
								echo $sql['description'];
								echo $sql['about_mission'];
								echo $sql['about_vision'];
								echo $sql['about_success'];
						?></p>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="single-item pdtop">
                    <div class="img-holder">
                        <img src="../../../../Vendor-Panel/about/<?php echo $sql['about_image']; ?>" alt="Awesome Image">
                        
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>
<!--End welcome area-->

<!--Start service area-->
<section class="service-area" style="background-image:url(images/services/bg.jpg);">
    <div class="container">
        <div class="sec-title">
            <h2>Services</h2>
            <span class="decor"></span>
        </div>
        <div class="row">
            <!--Start single service item-->
			<?php
						$vendor_id=$_SESSION['vendor_id'];
						$sql = $link->rawQuery('select * from service where vendor_id=? and is_active=? limit 6',Array($vendor_id,"1"));
						if($link->count > 0)
						{
							foreach($sql as $s)
							{
					?>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="single-service-item">
                    <div class="img-holder">
                        <img src="../../../../Vendor-Panel/service/<?php echo $s['icon']; ?>" alt="Awesome Image" style="height: 300px;width: 700px;">
                    </div>
                    <div class="text-holder">
                       <h3><?php echo $s['title']; ?></h3>
                        <p><?php echo $s['description']; ?></p>
                    </div>    
                </div>
            </div>
			<?php
							}
						}
			?>
            <!--End single service item-->
            <!--Start single service item-->
           
            <!--End single service item-->
            <!--Start single service item-->
        </div>
    </div>
</section>
<!--End service area-->

<!--Start testimonial area-->
<section class="testimonial-area">
    <div class="container">
        <div class="sec-title text-center">
            <h2>Customers Feedback</h2>
            <span class="border"></span>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="testimonials-carousel">
                    <!--Start single slide item-->
					<?php
									$vendor_id=$_SESSION['vendor_id'];
									$sql = $link->rawQuery('select * from testimonials where vendor_id=? limit 6',Array($vendor_id));
									if($link->count > 0)
									{
										foreach($sql as $s)
										{
								?>
                    <div class="single-slide-item">
                        <div class="text-box">
                            <div class="text">
                                <p>"<?php echo $s['review']; ?>"</p>
                                <h3><?php echo $s['title']; ?></h3>
                                <h4><?php echo $s['designation']; ?></h4>
                            </div>
                        </div>
                    </div>
									<?php
										}
									}
									?>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End testimonial area-->

<!--Start latest blog area-->
<!--End latest blog area-->
 
<!--Start Brand area-->  
<!--End Brand area-->       
  
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
<script src="js/validate.js"></script>
<!-- mixit up -->
<script src="js/jquery.mixitup.min.js"></script>
<!-- easing -->
<script src="js/jquery.easing.min.js"></script>
<!-- gmap helper -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHzPSV2jshbjI8fqnC_C4L08ffnj5EN3A"></script>
<!--gmap script-->
<script src="js/gmaps.js"></script>
<script src="js/map-helper.js"></script>
<!-- video responsive script -->
<script src="js/jquery.fitvids.js"></script>
<!-- jQuery ui js -->
<script src="js/jquery-ui.js"></script>
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
</html>