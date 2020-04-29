<!DOCTYPE html>
<html>
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<?php
session_start();
include 'include/connect.php';
$vendor_id=$_SESSION['vendor_id'];
$sql = $link->rawQueryOne('select * from vendor where vendor_id=?',Array($vendor_id));
?>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<title><?php echo $sql['shop_name']; ?> | Services</title>
		<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">

		<!-- Google Font -->
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Karla:400,700italic,700,400italic' rel='stylesheet' type='text/css'>
		<!-- Font Awesome -->
		<link rel="stylesheet" href="css/font-awesome.min.css" />

		<!-- Bootstrap -->
		<link rel="stylesheet" href="css/bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="css/dropdown.css" />

		<!-- REVOLUTION BANNER CSS SETTINGS -->
		<link rel="stylesheet" type="text/css" href="css/settings.css" media="screen" />

		<link rel="stylesheet" href="css/owl.carousel.css" />
		<link rel="stylesheet" href="css/global.css" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/responsive.css" />
		<link href="css/skin.less" rel="stylesheet/less">
	</head>
	<body>
		<!-- Loader Starts here -->
		<!-- Loader Ends here -->
		<!--Wrapper Section Start Here -->
		<div id="wrapper" class="homepage common-page service-page">
			<!--header Section Start Here -->
			<header id="header" class="header">
				<!-- primary header Start Here -->
				<?php
				  include 'include/header.php';
				?>
				<!-- primary header Ends Here -->
				<!-- main header Starts Here -->
				<!-- main header Ends Here -->
			</header>
			<!--header Section ends Here -->
			<!--banner Section starts Here -->
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
			<div class="banner service-banner spacetop">
				<div class="banner-image-plane parallax" style="background-image: url(../../../../Vendor-Panel/service/<?php echo $banner_image; ?>)">
					
				</div>
			</div>
			<!--banner Section ends Here -->
			<!--Section area starts Here -->
			<section id="section">
				<!--Section box starts Here -->
				<div class="section">
					<div class="services ">
						<div class="container">
							<div class="row">
								<div class="col-xs-12">
									<div class="heading">
										<h2>OUR SERVICES</h2>
									</div>
								</div>
							</div>
							<div id="services-slides" class="services-slider">
							<?php
								$vendor_id=$_SESSION['vendor_id'];
								$sql = $link->rawQuery('select * from service where vendor_id=? and is_active=?',Array($vendor_id,"1"));
								if($link->count > 0)
								{
									foreach($sql as $s)
									{
										?>
								<div class="slides-tab zoom">
									<figure>
										<img src="../../../../Vendor-Panel/service/<?php echo $s['service_image']; ?>" alt="" />
									</figure>
									<div class="slides-text">
										<h4><?php echo $s['title']; ?></h4>
										<p>
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
	
		<!--Section box ends Here -->
		</section>
		<!--Section area ends Here -->
		<!--Footer area starts Here -->
		<?php
		  include 'include/footer.php';
		?>
		<!--Footer area ends Here -->

		</div>
		<!--Wrapper Section ends Here -->

		<script data-cfasync="false" src="js/email-decode.min.js"></script>
		<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
		<script type="text/javascript" src="js/owl.carousel.js"></script>
		<script type="text/javascript" src="js/parallax.js"></script>
		
		<!-- Switcher Js -->
		<script src="js/style.switcher.js"></script>
		<script src="js/jquery.cookie.js"></script>
		<!-- Switcher Js -->
		<script src="js/script.js" type="text/javascript"></script>
		<script type="text/javascript" src="js/site.js"></script>
	</body>
</html>