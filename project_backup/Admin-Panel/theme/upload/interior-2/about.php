<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<?php
session_start();
include 'include/connect.php';
$vendor_id=$_SESSION['vendor_id'];
$sql = $link->rawQueryOne('select * from vendor where vendor_id=?',Array($vendor_id));
?>
<title><?php echo $sql['shop_name']; ?> | About </title>
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

<div class="page-wrapper">
 	
    <!-- Preloader -->
 	
    <!-- Main Header-->
    <?php
	  include 'include/header.php';
	?>
    <!--End Main Header -->

    <!--Page Title-->
	<?php
		include 'include/connect.php';
		$vendor_id=$_SESSION['vendor_id'];
		$sql = $link->rawQueryOne('select * from about where vendor_id=?',Array($vendor_id));
	?>
    <section class="page-title" style="background-image:url(../../../../Vendor-Panel/about/<?php echo $sql['baner_image']; ?>)">
        <div class="auto-container">
            <h1>About Us</h1>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Approach Section -->
    <section class="approach-section sp-two">
        <div class="auto-container">
            <div class="row">
                <!-- Approach-block -->
                <div class="col-lg-6 approach-block">
                    <div class="inner-box">
                        <h2>About Us</h2>
                        <div class="text"><?php echo $sql['description']; ?></div>
                        <h5>Our Mission</h5>
                        <div class="text"><?php echo $sql['about_mission']; ?></div>
						<h5>Our Vision</h5>
                        <div class="text"><?php echo $sql['about_vision']; ?></div>
						<h5>Our Success</h5>
                        <div class="text"><?php echo $sql['about_success']; ?></div>
                    </div>
                </div>
				<div class="col-lg-6 approach-block">
                    <div class="inner-box">
                   
            
                        <div class="image"><img src="../../../../Vendor-Panel/about/<?php echo $sql['about_image']; ?>" alt=""></div>
                    </div>
                </div>
                <!-- Approach-block -->
                
                <!-- Approach-block -->
                
            </div>
        </div>
    </section>

    <!-- Whay Choose Us Section -->

    <!-- Fun facts Section -->

    <!-- Team Section -->
    <section class="team-section style-two sp-two" style="padding-top: 00px;">
        <div class="auto-container">
            <!-- Section Title -->
            <div class="sec-title text-center">
                <div class="sub-title">Meet The Team</div>
                <h1>Experts ready to serve</h1>
            </div>
            <div class="row">
                <!-- Team Block One -->
				<?php
						$vendor_id=$_SESSION['vendor_id'];
						$sql = $link->rawQuery('select * from team where vendor_id=?',Array($vendor_id));
						if($link->count > 0)
						{
							foreach($sql as $s)
							{
								?>
								<div class="col-lg-4 team-block-one wow fadeInUp">
									<div class="inner-box">
										<div class="image-box">
											<figure class="image"><a href=""><img src="../../../../Vendor-Panel/team/<?php echo $s['team_image']; ?>" alt=""></a></figure>
											<div class="left-side">
												<h5><?php echo $s['designation']; ?></h5>
											</div>
										</div>
										<div class="info-box">
											<h5 class="name"><?php echo $s['name']; ?></h5>
											<p><?php echo $s['short_description']; ?></p>
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

    <!-- Testimonial Section -->

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
<script src="js/script.js"></script>

<!--Google Map APi Key-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBk25E4mNfVIEt3tNl3K1HwNZVruVoFBlA"></script>
<script src="js/map-script.js"></script>
<!--End Google Map APi-->

</body>
</html>


