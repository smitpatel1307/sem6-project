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
		<title><?php echo $sql['shop_name']; ?> | About</title>
		<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">

		<!-- Google Font -->
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Karla:400,700italic,700,400italic' rel='stylesheet' type='text/css'>
		<!-- Font Awesome -->
		<link rel="stylesheet" href="css/font-awesome.min.css" />
		<!-- Bootstrap -->
		<link rel="stylesheet" href="css/bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="css/dropdown.css" />
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
		<div id="wrapper" class="homepage common-page about-us-page about">
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
			<!--header Section Ends Here -->
			<!--banner Section starts Here -->
			<?php
				include 'include/connect.php';
				$vendor_id=$_SESSION['vendor_id'];
				$sql = $link->rawQueryOne('select * from about where vendor_id=?',Array($vendor_id));
			?>
			<div class="banner spacetop">
				<div class="banner-image parallax" style="background-image: url('../../../../Vendor-Panel/about/<?php echo $sql['baner_image']; ?>')">

				</div>

				
			</div>
			<!--banner Section ends Here -->
			<!--Section area starts Here -->
			<section id="section">
				<!--Section box starts Here -->
				<div class="section">
					<div class="amazing-features ">
						<div class="container">
							<div class="row">
								<div class="col-xs-12 col-sm-4">
									<img src="../../../../Vendor-Panel/about/<?php echo $sql['about_image']; ?>" alt="" />
								</div>
								<?php
									$vendor_id=$_SESSION['vendor_id'];
									$sql = $link->rawQueryOne('select * from about where vendor_id=?',Array($vendor_id));				
								?>
								<div class="col-xs-12 col-sm-8">
									<div class="amazing-text">
										<div class="heading">
											<h3>About Us</h3>
										</div>
											<p><?php echo $sql['description'];
													echo $sql['about_vision'];
													echo $sql['about_success']; 
												?>
											</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="team ">
						<div class="container">
							<div class="row">
								<div class="col-xs-12">
									<div class="heading">
										<h3>our team</h3>
									</div>
								</div>
								<?php
									$vendor_id=$_SESSION['vendor_id'];
									$sql = $link->rawQuery('select * from team where vendor_id=?',Array($vendor_id));
									if($link->count > 0)
									{
										foreach($sql as $s)
										{
											?>
								<div class="col-xs-12 col-sm-6 col-md-4 custom-margin-bottom">
									<div class="members zoom clearfix">
										<div class="figure-wrap">
											<figure>
												<img src="../../../../Vendor-Panel/team/<?php echo $s['team_image']; ?>" alt="" />
											</figure>
										</div>
										<div>
											<h6>&nbsp;&nbsp;<?php echo $s['name']; ?></h6>
											<h6>&nbsp;&nbsp;<?php echo $s['designation']; ?></h6>
											<p style="color: black;">
												&nbsp;&nbsp;<?php echo $s['short_description']; ?>
											</p>
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
				<!--Section box ends Here -->
			</section>
			<!--Section area ends Here -->
			<!--Footer area starts Here -->
			<?php
			  include 'include/footer.php';
			?>
			<!--Footer area ends Here -->
		</div>
		<!--Wrapper Section Ends Here -->

		<script data-cfasync="false" src="js/email-decode.min.js"></script>
		<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
		<script type="text/javascript" src="js/owl.carousel.js"></script>
		<script type="text/javascript" src="js/jquery.selectbox-0.2.min.js"></script>
		<!--Parrallax -->
		<script type="text/javascript" src="js/parallax.js"></script>
		<!-- Switcher Js -->
		<script src="js/style.switcher.js"></script>
		<script src="js/jquery.cookie.js"></script>
		<!-- Switcher Js -->

		<!-- REVOLUTION BANNER CSS SETTINGS -->
	
		<script src="js/script.js" type="text/javascript"></script>
		<script type="text/javascript" src="js/site.js"></script>
	</body>
</html>