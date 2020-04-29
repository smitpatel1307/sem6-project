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
		<title><?php echo $sql['shop_name']; ?> | Products</title>
		<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">

		<!-- Google Font -->
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Karla:400,700italic,700,400italic' rel='stylesheet' type='text/css'>
		<!-- Font Awesome -->
		<link rel="stylesheet" href="css/font-awesome.min.css" />

		<!-- Bootstrap -->
		<link rel="stylesheet" href="css/bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="css/dropdown.css" />

		<link rel="stylesheet" href="css/jquery-ui.css">

		<link rel="stylesheet" href="css/owl.carousel.css" />
		<link rel="stylesheet" href="css/jquery.mCustomScrollbar.css" />
		<link rel="stylesheet" href="css/global.css" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/responsive.css" />
		<link href="css/skin.less" rel="stylesheet/less">
	</head>
	<body>
		<!-- Loader Starts here -->
		<!-- Loader Ends here -->
		<!--Wrapper Section Start Here -->
		<div id="wrapper" class="homepage common-page shop-details-page about">
			<!--header Section Start Here -->
			<header id="header" class="header">
				<!-- primary header Start Here -->

				<!-- primary header Ends Here -->
				<!-- main header Starts Here -->
				<?php
				  include 'include/header.php';
				?>
				<!-- main header Ends Here -->
			</header>
			<!--header Section Ends Here -->
			<!--banner Section starts Here -->
			<?php
				include 'include/connect.php';
				$vendor_id=$_SESSION['vendor_id'];
				$sql = $link->rawQueryOne('select * from product where vendor_id=? and is_active=?',Array($vendor_id,"1"));
			?>
			<div class="banner spacetop">
				<div class="banner-image parallax" style="background-image: url('../../../../Vendor-Panel/product/<?php echo $sql['banner_image']; ?>')">
					
				</div>
				
			</div>
			<!--banner Section ends Here -->
			<!--Section area starts Here -->
			<section id="section">
				<!--Section box starts Here -->
				<div class="section shop-section">
					<div class="shop">
						<div class="container" style="padding-left: 00px;padding-right: 00px;margin-right: -64px;">
							<div class="row">
								<div class="col-xs-12 col-sm-9">
									<div class="similar-products result-display ">
										<h5 align="center"> products</h5>
										<ul>
										<?php
											$vendor_id=$_SESSION['vendor_id'];
											$sql = $link->rawQuery('select * from product where vendor_id=? and is_active=?',Array($vendor_id,"1"));
											if($link->count > 0)
											{
												foreach($sql as $s)
												{
											?>	
											<li>
												<figure class="zoom">
													<img src="../../../../Vendor-Panel/product/<?php echo $s['product_image'] ?>" alt="" / style="height:260px;width:260px;">
												</figure>
												<span class="pricing"><?php echo $s['title'] ?></span>
												<h6><?php echo $s['description'] ?></h6>
												 <h6><?php echo $s['product_price'] ?></h6>
											</li>
												<?php
												}
											}
											?>
										</ul>
									</div>
								</div>
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
		<script type="text/javascript" src="js/jquery.selectbox-0.2.min.js"></script>
		<script src="js/jquery-ui.js"></script>
		<script src="js/jquery.mCustomScrollbar.concat.min.js" type="text/javascript"></script>
		<!-- Switcher Js -->
		<script src="js/style.switcher.js"></script>
		<script src="js/jquery.cookie.js"></script>
		<!-- Switcher Js -->

		<!-- REVOLUTION BANNER CSS SETTINGS -->
		<script src="js/script.js" type="text/javascript"></script>
		<script type="text/javascript" src="js/site.js"></script>
	</body>
</html>