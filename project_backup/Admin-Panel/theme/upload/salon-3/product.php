<?php
$current="4";
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
	<title><?php echo $sql['shop_name']; ?> | Products</title>
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
	$sql = $link->rawQueryOne('select * from product where vendor_id=? and is_active=?',Array($vendor_id,"1"));
?>
<div class="breadcrumb-area extra-padding">
		<div class="overlay" style="background-image: url('../../../../Vendor-Panel/product/<?php echo $sql['banner_image']; ?>')"></div>
		<div class="container">
			<div class="row">
				<div class="col-12 text-center">
						<h2 class="title">
							Products
						</h2>
				</div>
			</div>
		</div>
	</div>
<!-- Breadcrumb Area End -->

	<!-- Blog Area Start -->
	<div class="blog blog-page">
		<div class="container">
		<h2 align="center">Our Products</h2>
			<div class="row">
			<?php
				$vendor_id=$_SESSION['vendor_id'];
				$sql = $link->rawQuery('select * from product where vendor_id=? and is_active=?',Array($vendor_id,"1"));
				if($link->count > 0)
				{
					foreach($sql as $s)
					{
						?>
				<div class="col-lg-4 col-md-6">
				
					<div class="blog-card">
						<div class="top-image">
							<img src="../../../../Vendor-Panel/product/<?php echo $s['product_image'] ?>" alt="">
						</div>
						<div class="content">
							<div class="content-body">
									<h4 class="title">
										<?php echo $s['title'] ?>
									</h4>
									<p class="">
										<?php echo $s['description'] ?>
									</p>
								<h6>
									<?php echo $s['product_price'] ?>
								</h6>
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
	<!-- Blog Area End -->


	
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