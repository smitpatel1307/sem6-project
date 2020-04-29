<?php
$current="1";
?>
<!DOCTYPE html>
<html lang="en">
<head>
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
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $sql['shop_name']; ?></title>
	<!-- favicon -->
	<link rel="shortcut icon" href="images/icon.png" type="image/x-icon">
	<!-- bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- fontawesome -->
	<link rel="stylesheet" href="css/fontawesome-all.min.css">
	<!-- flaticon -->
	<link rel="stylesheet" href="css/flaticon.css">
	<!-- animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- magnific popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<!-- stylesheet -->
	<link rel="stylesheet" href="css/style.css">
	<!-- responsive -->
	<link rel="stylesheet" href="css/responsive.css">
</head>

<body>

	<!-- Start Navigation -->
	<?php
	  include 'include/header.php';
	?>
	<!-- End Navigation -->

	<!-- Hero Area Start  -->
							<?php
			
							$vendor_id=$_SESSION['vendor_id'];
							include 'include/connect.php';
							$sql = $link->rawQueryOne('select * from slider where vendor_id=?',Array($vendor_id));
							?>
	<header class="heroArea" style="background-image: url('../../../../Vendor-Panel/slider/<?php echo $sql['slider_image']; ?>')">
		<div class="overlay" >
		</div>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-10">
					
				</div>
			</div>
		</div>
	</header>
	<!-- Hero Area End -->

	<!-- About Section Start -->
	<section class="about">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-7 col-md-10">
					<div class="section-title">
						<h2 class="title">
							About US
						</h2>
						<div class="separator"></div>
					</div>
				</div>
			</div>
							<?php
								$vendor_id=$_SESSION['vendor_id'];
								$sql = $link->rawQueryOne('select * from about where vendor_id=?',Array($vendor_id));
								
							?>
			<div class="row">
				<div class="col-lg-6">
					<div class="about-img">
						<img src="../../../../Vendor-Panel/about/<?php echo $sql['about_image']; ?>" alt="">
					</div>
				</div>
				<div class="col-lg-6 d-flex align-self-center">
					<div class="right-content">
						<p>
							<?php
								echo $sql['description'];
								echo $sql['about_mission'];
								echo $sql['about_vision'];
								echo $sql['about_success'];
						?>
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- About Section End -->

	<!-- Service Area Start -->
	<section class="service">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-7 col-md-10">
					<div class="section-title">
						<h2 class="title">
								Our Services
						</h2>
						<div class="separator"></div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="service-carousel">
					<?php
						$vendor_id=$_SESSION['vendor_id'];
						$sql = $link->rawQuery('select * from service where vendor_id=? and is_active=? limit 6',Array($vendor_id,"1"));
						if($link->count > 0)
						{
							foreach($sql as $s)
							{
					?>
						<div class="s-box">
							<div class="top-image cat1">
								<img src="../../../../Vendor-Panel/service/<?php echo $s['icon']; ?>" alt="">
								<div class="magic-box">
								</div>
							</div>
							<div class="content">
									<h4 class="title"><?php echo $s['title']; ?></h4>
								<p class="text">
									<?php echo $s['description']; ?>
								</p>
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
	<section class="review" style="padding-top: 00px;">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-7 col-md-10">
					<div class="section-title extra-padding">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="review-slider">
					<?php
									$vendor_id=$_SESSION['vendor_id'];
									$sql = $link->rawQuery('select * from testimonials where vendor_id=? limit 6',Array($vendor_id));
									if($link->count > 0)
									{
										foreach($sql as $s)
										{
								?>
						<div class="item">
							<div class="review-box">
								<div class="content">
									<div class="content-header">
											<h4 class="title">
											"<?php echo $s['review']; ?>"
											</h4>
										<p class="sub-title">
												<?php echo $s['title']; ?>
										</p>
									</div>
									<div class="body-text">
										<p>
											<?php echo $s['designation']; ?>
										</p>
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
		</div>
	</section>


	<!-- footer area start -->
	<?php
	  include 'include/footer.php';
	?>
	<!-- footer area End -->

	<!-- back to top start -->
	<div class="back-to-top">
		<!-- back to top start -->
		<i class="fas fa-rocket"></i>
	</div>
	<!-- back to top end -->

	<!-- preloader area start -->
	<div class="preloader" id="preloader">
		<div class="loader loader-1">
			<div class="loader-outter"></div>
			<div class="loader-inner"></div>
		</div>
	</div>
	<!-- preloader area end -->


	<!-- jquery -->
	<script src="js/jquery.js"></script>
	<!-- popper -->
	<script src="js/popper.min.js"></script>
	<!-- bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- magnific popup -->
	<script src="js/jquery.magnific-popup.js"></script>
	<!-- wow js-->
	<script src="js/wow.min.js"></script>
	<!-- way point -->
	<script src="js/waypoints.min.js"></script>
	<!-- counterup js-->
	<script src="js/jquery.counterup.min.js"></script>
	<!-- main -->
	<script src="js/main.js"></script>
</body>
</html>