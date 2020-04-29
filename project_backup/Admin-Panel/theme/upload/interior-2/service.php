<html>
<head>
<meta charset="utf-8">
<?php
session_start();
include 'include/connect.php';
$vendor_id=$_SESSION['vendor_id'];
$sql = $link->rawQueryOne('select * from vendor where vendor_id=?',Array($vendor_id));
?>
<title><?php echo $sql['shop_name']; ?> | Service </title>
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
	<?php
		$vendor_id=$_SESSION['vendor_id'];
		include 'include/connect.php';
		$sql = $link->rawQuery('select is_active,banner_image from service where vendor_id=? and is_active=?',Array($vendor_id,"1"));
		if($link->count > 0)
		{
			foreach($sql as $s)
			{
				$banner_image=$s['banner_image'];
			}
		}
	?>
    <!--Page Title-->
    <section class="page-title" style="background-image:url(../../../../Vendor-Panel/service/<?php echo $banner_image; ?>)">
        <div class="auto-container">
            <h1>Our Services</h1>
        </div>
    </section>
    <!--End Page Title-->


    <!-- Services Section -->
    <section class="services-section-two sp-two">
        <div class="auto-container">
            <div class="wrapper-box">
                <div class="row">
                    <!-- Service Block One -->
					<?php
				$vendor_id=$_SESSION['vendor_id'];
				$sql = $link->rawQuery('select * from service where vendor_id=? and is_active=?',Array($vendor_id,"1"));
				if($link->count > 0)
				{
					foreach($sql as $s)
					{
						?>
						<div class="col-lg-4 service-block-one">
							<div class="inner-box imghvr-blocks-rotate-in-left mb-30">
								<div class="hover-anim"></div>
								<div class="content-box">
									<div class="icon-box">
										<img src="../../../../Vendor-Panel/service/<?php echo $s['service_image']; ?>" alt="" />
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

    <!-- Faq Section -->
    

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


