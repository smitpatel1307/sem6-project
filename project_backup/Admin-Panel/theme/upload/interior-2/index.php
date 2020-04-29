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
<title><?php echo $sql['shop_name']; ?> </title>
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
    <!-- Main Header-->
    <?php
		include 'include/header.php';
	?>
    <!--End Main Header -->

    <!--Main Slider-->
    <section class="main-slider">
        
        <div class="main-slider-carousel owl-carousel owl-theme">
            <?php
				$vendor_id=$_SESSION['vendor_id'];
				include 'include/connect.php';
				$sql = $link->rawQuery('select * from slider where vendor_id=?',Array($vendor_id));
				if($link->count > 0)
				{
					foreach($sql as $s)
					{
			?>
						<div class="slide" style="background-image:url(../../../../Vendor-Panel/slider/<?php echo $s['slider_image']; ?>)">
						</div>
			<?php
					}
				}
			?>
        </div>
    </section>
    <!--End Main Slider-->

    <!-- About Section -->
    <section class="about-section sp-two">
        <div class="anim-icons">
            <span class="icon big-shape-1"></span>
        </div>
        <div class="auto-container">
            <div class="row">
			<?php
								$vendor_id=$_SESSION['vendor_id'];
								$sql = $link->rawQueryOne('select * from about where vendor_id=?',Array($vendor_id));
							?>
                <div class="col-lg-6">
                    <div class="image-box">
                        <div class="image-1 wow fadeInLeft"><img src="../../../../Vendor-Panel/about/<?php echo $sql['about_image']; ?>" alt="" style="width: 500px;"></div>
                    </div>
                </div>
                <div class="col-lg-6 pl-lg-5">
                    <!-- Section Title -->
                    <div class="sec-title" style="margin-bottom: 40px;">
                        <div class="sub-title">About Us</div>
                    </div>
                    <div class="about-block mb-30">
                        <div class="text wow fadeInUp" data-wow-delay="300ms">
						<?php echo $sql['description']; ?>
						<h6 style="color: black;">About Mission</h6>
                            <p><?php echo $sql['about_mission']; ?></p>
						<h6 style="color: black;">About Vision</h6>
                            <p><?php echo $sql['about_vision']; ?></p>
						<h6 style="color: black;">About Success</h6>
                            <p><?php echo $sql['about_success']; ?></p>
						</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services-section sp-four" style="background-image:url(images/bg-1.jpg)">
        <div class="auto-container">
            <!-- Section Title -->
            <div class="sec-title text-center light">
                <div class="sub-title">Our Services</div>
                <h1>What We Do</h1>
            </div>
            <div class="wrapper-box">
                <div class="row">
                    <!-- Service Block One -->
					<?php
						$vendor_id=$_SESSION['vendor_id'];
						$sql = $link->rawQuery('select * from service where vendor_id=? and is_active=? limit 6',Array($vendor_id,"1"));
						if($link->count > 0)
						{
							foreach($sql as $s)
							{
					?>
								<div class="col-lg-4 service-block-one">
									<div class="inner-box imghvr-blocks-rotate-in-left">
										<div class="hover-anim"></div>
										<div class="content-box">
										<div class="icon-box">
											<img src="../../../../Vendor-Panel/service/<?php echo $s['icon']; ?>" alt="" />
										</div>
											<h3><?php echo $s['title']; ?></h3>
											<div class="text"><?php echo $s['description']; ?></div>
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
    </section>

    <!-- Testimonial Section -->
    <section class="testimonial-section" style="margin-top: 200px;margin-bottom: -750px;">
        <div class="auto-container">
            <!-- Section Title -->
            <div class="sec-title text-center">
                <div class="sub-title">Our Testimonials</div>
                <h1>What our clients say</h1>
            </div>
            <!-- Swiper -->
            <div class="swiper-container testimonial-top">
                <div class="swiper-wrapper">
				<?php
					$vendor_id=$_SESSION['vendor_id'];
					$sql = $link->rawQuery('select * from testimonials where vendor_id=? limit 6',Array($vendor_id));
					if($link->count > 0)
					{
						foreach($sql as $s)
						{
				?>
						<div class="swiper-slide">
                        <!-- Testimonial Block -->
							<div class="testimonial-block">
								<div class="inner-box">
									
									<div class="text"><?php echo $s['review']; ?></div>
									<div class="author-title"><?php echo $s['title']; ?></div>
								</div>
							</div>
						</div>
				<?php
						}
					}
				?>
                </div>
                <div class="swiper-nav-button">
                    <!-- Add Arrows -->
                    <div class="swiper-button-next"><i class="fas fa-angle-right"></i></div>
                    <div class="swiper-button-prev"><i class="fas fa-angle-left"></i></div>
                </div>                    

            </div>
            <div class="swiper-container testimonial-thumbs">
                <div class="swiper-wrapper">
				<?php
					$vendor_id=$_SESSION['vendor_id'];
					$sql = $link->rawQuery('select * from testimonials where vendor_id=? limit 6',Array($vendor_id));
					if($link->count > 0)
					{
						foreach($sql as $s)
						{
							?>
							<div class="swiper-slide">
								<div class="author-thumb border-anim-left" style="height:00px; width:00px;"><span class="border-anim-right"></span><img src="" alt=""></div>
							</div>
							<?php
						}
					}
				?>
                </div>
            </div>           
        </div>
    </section>

    <!-- Main Footer -->
    <?php
		include 'include/footer.php';
	?>
    <!-- End Main Footer -->

</div>
<!--End pagewrapper-->

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
<script src="js/TweenMax.min.js"></script>
<script src="js/script.js"></script>

<!--Google Map APi Key-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBk25E4mNfVIEt3tNl3K1HwNZVruVoFBlA"></script>
<script src="js/map-script.js"></script>
<!--End Google Map APi-->

</body>
</html>


