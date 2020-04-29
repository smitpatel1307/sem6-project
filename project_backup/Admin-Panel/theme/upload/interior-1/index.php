<html>
<head>
<meta charset="utf-8">
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
<title><?php echo $sql['shop_name']; ?></title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/settings.css" rel="stylesheet" type="text/css"><!-- REVOLUTION SETTINGS STYLES -->
<link href="css/layers.css" rel="stylesheet" type="text/css"><!-- REVOLUTION LAYERS STYLES -->
<link href="css/navigation.css" rel="stylesheet" type="text/css"><!-- REVOLUTION NAVIGATION STYLES -->
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
    
    <!--Main Slider-->
    <section class="main-slider">
    	
        <div class="rev_slider_wrapper fullwidthbanner-container"  id="rev_slider_one_wrapper" data-source="gallery">
            <div class="rev_slider fullwidthabanner" id="rev_slider_one" data-version="5.4.1">
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
								<li >
								<img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="../../../../Vendor-Panel/slider/<?php echo $s['slider_image']; ?>"> 
								</li>
								<?php
							}
						}
					?>
                </ul>
            </div>
        </div>
    </section>
    <!--End Main Slider-->
    <section class="about-section" style="margin-top: 100px;">
    	<div class="auto-container">
        	<div class="row clearfix">
            	<div class="content-column col-md-6 col-sm-12 col-xs-12">
                	<div class="inner-column">
                    	<h2><span>About Us</span></h2>
                        <div class="text">
                        	<p>
							<?php
								$vendor_id=$_SESSION['vendor_id'];
								$sql = $link->rawQueryOne('select * from about where vendor_id=?',Array($vendor_id));
								echo $sql['description'];
							?>
							</p>
							<h4 style="color: black;">About Mission</h4>
                            <p><?php echo $sql['about_mission']; ?></p>
							<h4 style="color: black;">About Vision</h4>
                            <p><?php echo $sql['about_vision']; ?></p>
							<h4 style="color: black;">About Success</h4>
                            <p><?php echo $sql['about_success']; ?></p>
                        </div>
                    </div>
                </div>
                <div class="column col-md-6 col-sm-12 col-xs-12">
                	<div class="image">
                    	<img src="../../../../Vendor-Panel/about/<?php echo $sql['about_image']; ?>" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Services Section-->
    <div class="services-section">
    	<div class="auto-container">
        	<!--Sec Title-->
            <div class="sec-title centered">
                <h2>Services We Do</h2>
                <div class="separator"></div>
            </div>
            <div class="row clearfix">
            	
                <!--Services Block-->
				<?php
						$vendor_id=$_SESSION['vendor_id'];
						$sql = $link->rawQuery('select * from service where vendor_id=? and is_active=? limit 6',Array($vendor_id,"1"));
						if($link->count > 0)
						{
							foreach($sql as $s)
							{
								?>
								<div class="services-block col-md-4 col-sm-6 col-xs-12">
									<div class="inner-box">
										<div class="image">
											<img src="../../../../Vendor-Panel/service/<?php echo $s['icon']; ?>" alt="" />
										</div>
										<div class="lower-content">
											<div class="upper-box">
												<div class="text"><h4 style="color: black;"><?php echo $s['title']; ?></h4><?php echo $s['description']; ?></div>
											</div>
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
    <!--End Services Section-->
    
    <!--Testimonial Section-->
    <section class="testimonial-section" style="background-image:url(images/pattern-2.png)">
    	<div class="auto-container">
        	<!--Title Box-->
            <div class="title-box">
                <div class="row clearfix">
                    <div class="column col-md-4 col-sm-12 col-xs-12">
                        <div class="sec-title">
                            <h2>Customer Feedback</h2>
                            <div class="separator"></div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="two-item-carousel owl-carousel owl-theme">
            	
                <!--Testimonial Block-->
				<?php
					$vendor_id=$_SESSION['vendor_id'];
					$sql = $link->rawQuery('select * from testimonials where vendor_id=? limit 6',Array($vendor_id));
					if($link->count > 0)
					{
						foreach($sql as $s)
						{
					?>
						<div class="testimonial-block">
							<div class="inner-box">
								<div class="clearfix">
									<!--Content Column-->
									<div class="content-column col-md-6 col-sm-6 col-xs-12">
										<div class="inner-column">
											<div class="content">
												<div class="text"><?php echo $s['review']; ?></div>
												<div class="curve"></div>
											</div>
											<div class="lower-box">
												<h3><?php echo $s['title']; ?></h3>
												<div class="locations"><?php echo $s['designation']; ?></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					<?php
						}
					}
					?>
            </div>
            
        </div>
    </section>
    <!--End Testimonial Section-->
     
    <!--Main Footer-->
    <?php
		include 'include/footer.php';
	?>
    <!--End Main Footer-->
    
</div>
<!--End pagewrapper-->

<script src="js/jquery.js"></script> 
<!--Revolution Slider-->
<script src="js/jquery.themepunch.revolution.min.js"></script>
<script src="js/jquery.themepunch.tools.min.js"></script>
<script src="js/revolution.extension.actions.min.js"></script>
<script src="js/revolution.extension.carousel.min.js"></script>
<script src="js/revolution.extension.kenburn.min.js"></script>
<script src="js/revolution.extension.layeranimation.min.js"></script>
<script src="js/revolution.extension.migration.min.js"></script>
<script src="js/revolution.extension.navigation.min.js"></script>
<script src="js/revolution.extension.parallax.min.js"></script>
<script src="js/revolution.extension.slideanims.min.js"></script>
<script src="js/revolution.extension.video.min.js"></script>
<script src="js/main-slider-script.js"></script>

<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/owl.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/wow.js"></script>
<script src="js/knob.js"></script>
<script src="js/appear.js"></script>
<script src="js/script.js"></script>

<!--Color Switcher-->
<script src="js/color-settings.js"></script>
</body>
</html>