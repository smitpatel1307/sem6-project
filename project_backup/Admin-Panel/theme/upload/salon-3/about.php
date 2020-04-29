<?php
$current="2";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php
session_start();
include 'include/connect.php';
$vendor_id=$_SESSION['vendor_id'];
$sql = $link->rawQueryOne('select * from vendor where vendor_id=?',Array($vendor_id));
?>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $sql['shop_name']; ?> | About</title>
	<!-- favicon -->
	<link rel="shortcut icon" href="images/icon.png" type="image/x-icon">
	<!-- bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- fontawesome -->
	<link rel="stylesheet" href="css/fontawesome-all.min.css">
	<!-- flat icon -->
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

<!-- Breadcrumb Area Start -->
 <?php
								include 'include/connect.php';
								$vendor_id=$_SESSION['vendor_id'];
								$sql = $link->rawQueryOne('select * from about where vendor_id=?',Array($vendor_id));
							?>
<div class="breadcrumb-area">
		<div class="overlay" style="background-image: url('../../../../Vendor-Panel/about/<?php echo $sql['baner_image']; ?>')"></div>
		<div class="container">
			<div class="row">
				<div class="col-12 text-center">
						<h2 class="title">
							About
						</h2>
				</div>
			</div>
		</div>
	</div>
<!-- Breadcrumb Area End -->

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

	<!-- Price Area Start -->
	<!-- Price Area End -->

	<!-- Opening Time Area Start -->
	<!-- Opening Time Area End -->

<!-- Appoinment Form Area Start -->
<!-- Contact Form Area End -->

<!-- Our-barbers Area Start -->
	<section class="our-barbers" style=" padding-top: 00px;">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-7 col-md-10">
					<div class="section-title">
						<h2 class="title">
							Our Team
						</h2>
						<div class="separator"></div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="barbers-slide">
					<?php
						$vendor_id=$_SESSION['vendor_id'];
						$sql = $link->rawQuery('select * from team where vendor_id=?',Array($vendor_id));
						if($link->count > 0)
						{
							foreach($sql as $s)
							{
								?>
								<div class="item">
									<div class="barbers">
										<div class="top-image">
											<div class="img">
												<img class="img-fluid" src="../../../../Vendor-Panel/team/<?php echo $s['team_image']; ?>" alt="">
											</div>
											<div class="overlay-content">
												<div class="info">
													<h4 class="title">
														<?php echo $s['name']; ?>
													</h4>
													<p class="text">
														<?php echo $s['designation']; ?>
													</p>
												</div>
											</div>
										</div>
									</div>
									<p class="text"><?php echo $s['short_description']; ?></p>
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
<!-- Our-barbers Area End -->

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