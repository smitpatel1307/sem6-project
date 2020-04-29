<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
	<!-- ==================Start Css Link===================== -->
	<!-- favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
	<!-- googlefonts -->
	<link href="https://fonts.googleapis.com/css?family=Oswald:400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700" rel="stylesheet">
	<!-- bootstrap css link -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<!-- fontawesome css link -->
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<!-- slick carosel css -->
	<link href="css/slick.css" rel="stylesheet">
	<!-- Slick carosel theme -->
	<link href="css/slick-theme.css" rel="stylesheet">
	<!-- animated css -->
	<link href="css/animate.css" rel="stylesheet">
	<!-- lightbox css -->
	<link href="css/lightbox.min.css" rel="stylesheet">
	<!-- mean menu css -->
	<link href="css/meanmenu.css" rel="stylesheet">
	<!-- element css -->
	<link href="css/element.css" rel="stylesheet">
	<!-- main style link -->
	<link href="css/style.css" rel="stylesheet">
	<!-- responsive css links -->
	<link href="css/responsive.css" rel="stylesheet">
	<!-- ==================End Css Link===================== -->


	<!--[if lt IE 9]>
<script src="http://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="http://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
	<!--
=========================================================
		Header Area Start
==========================================================
-->
	<?php
	 // session_start();
	  include 'include/header.php';
	?>
	<!--
=========================================================
		Header Area End
==========================================================
-->
	<!--
=========================================================
		slider section start
==========================================================
-->
	<div class="main-slider-1 white-clr-all">
		<div id="carosel-mr-1" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner main-sld" role="listbox">
			<?php
				$cnt=0;
				//$vendor_id=$_SESSION['vendor_id1'];
				include 'include/connect.php';
				$sql = $link->rawQuery('select * from slider where vendor_id=?',Array($vendor_id));
				if($link->count > 0)
				{
					foreach($sql as $s)
					{
						if($cnt==0)
						{
			?>			
						<div class="item active main-sld">
							<div class="slider-bg"><img src="../../../../Vendor-Panel/slider/<?php echo $s['slider_image']; ?>"></div>
						</div>
			<?php
						$cnt=$cnt+"1";
						}
						else
						{
							?>
							<div class="item main-sld">
								<div class="slider-bg"><img src="../../../../Vendor-Panel/slider/<?php echo $s['slider_image']; ?>"></div>
							</div>
							<?php
						}
					}
				}
			?>
			</div>
			<a class="left slide-control-mr" href="#carosel-mr-1" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
			<a class="right slide-control-mr" href="#carosel-mr-1" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
		</div>
	</div>
	<!-- end slider bar -->

	<!--
=========================================================
		About Chef Section start
==========================================================
-->
	<div class="grbn-about-chef sec-pad">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-12 col-xs-12">
					<div class="chef-section-tit">
						<h4>About Us</h4>
						<div class="chef-text">
							<p>
							<?php
								//$vendor_id=$_SESSION['vendor_id1'];
								$sql = $link->rawQueryOne('select * from about where vendor_id=?',Array($vendor_id));
								echo $sql['description'];
								echo $sql['about_mission'];
								echo $sql['about_vision'];
								echo $sql['about_success'];
							?>
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 hidden-sm hidden-xs">
					<div class="chef-img-rapper">
						<div class="chef-img">
							<img class="img-responsive" src="../../../../Vendor-Panel/about/<?php echo $sql['about_image']; ?>" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--
=========================================================
		About Chef Section End
==========================================================
-->
	<!--
=========================================================
		Our Specail Dises Area Start
==========================================================
-->
	<div class="grnbn-special-fd sec-pad">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="sec-tit text-center">
						<h4><span>Let's Discover</span> Our Services</h4>
					</div>
				</div>
			</div>
			<!-- end section title -->
			<div class="big-spacer"></div>
			<!-- end spacer -->
			<div class="row">
				<div class="all-spf-food">
					<?php
						//$vendor_id=$_SESSION['vendor_id1'];
						$sql = $link->rawQuery('select * from service where vendor_id=? and is_active=? limit 6',Array($vendor_id,"1"));
						if($link->count > 0)
						{
							foreach($sql as $s)
							{
								?>
								<div class="col-md-4 col-sm-6 col-xs-12 mtb-30 stb-20">
									<div class="single-grnb-services text-center">
										<div class="food-img">
											<img src="../../../../Vendor-Panel/service/<?php echo $s['icon']; ?>" alt="" height="500px" width="400px">
										</div>
										<h5><?php echo $s['title']; ?></h5>
										<p><?php echo $s['description']; ?></p>
									</div>
								</div>
					<?php
							}
						}
					?>
				</div>
			</div>
			<div class="mutu-1"></div>
			<!-- end mutual spacer -->
		</div>
	</div>

	<!--
=========================================================
		Testimonails Area Start Form Hrere
==========================================================
-->
	<div class="grnbn-tesi-area s-white">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="all-testi-list cneter">
					<?php
					//$vendor_id=$_SESSION['vendor_id1'];
					$sql = $link->rawQuery('select * from testimonials where vendor_id=? limit 6',Array($vendor_id));
					if($link->count > 0)
					{
						foreach($sql as $s)
						{
					?>
						<div class="single-testi-list v-center">
							<div class="testi-content text-center">
								<span><i class="fa fa-quote-left"></i></span>
								<p><?php echo $s['review']; ?></p>
								<h5><span class="clinte-re"><?php echo $s['title']; ?></span></h5>
								<span class="clinte-re"><?php echo $s['designation']; ?></span>
							</div>
							<!-- end testi content -->
						</div>
					<?php
						}
					}
					?>
					</div>
					<!-- all testi -->
				</div>
			</div>
		</div>
	</div>
	<!--
=========================================================
		Testimonails Area End Form Hrere
==========================================================
-->
	<!--
=========================================================
		Footer Top Area Start Form Here
==========================================================
-->
	<?php
	   include 'include/footer.php';
	?>
	<!--
=========================================================
		Footer Top Area Start Form Here
==========================================================
-->
	<!-- main jquery  -->
	<script src="js/jquery.min.js"></script>
	<!-- bootstrap jquery  -->
	<script src="js/bootstrap.min.js"></script>
	<!-- jquery paralax -->
	<script src="js/jquery.parallax-1.1.3.js"></script>
	<!-- slick carosel js -->
	<script src="js/slick.min.js"></script>
	<!-- jquery sticky js -->
	<script src="js/sticky-header.js"></script>
	<!-- jquery couner up -->
	<script src="js/jquery.counterup.min.js"></script>
	<!-- jquery counter up animation -->
	<script src="js/waypoints.min.js"></script>
	<!-- lightbox js -->
	<script src="js/lightbox.min.js"></script>
	<!-- mean menu js -->
	<script src="js/jquery.meanmenu.min.js"></script>
	<!-- scroll up js -->
	<script src="js/jquery.scrollUp.min.js"></script>
	<!-- custom scripts -->
	<script src="js/main.js"></script>
</body>
</html>
