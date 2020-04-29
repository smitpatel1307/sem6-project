<!DOCTYPE html>
<html>
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<?php
session_start();
include 'include/connect.php';
if(isset($_GET['vendor_id']))
{
$vendor_id=$_GET['vendor_id'];
$_SESSION['vendor_id']=$vendor_id;
}
$vendor_id=$_SESSION['vendor_id'];
$sql = $link->rawQueryOne('select * from vendor where vendor_id=?',Array($vendor_id));
?>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<title><?php echo $sql['shop_name']; ?></title>
		<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">

		<!-- Google Font -->
		<link href='https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Karla:400,700italic,700,400italic' rel='stylesheet' type='text/css'>
		<!-- Font Awesome -->
		<link rel="stylesheet" href="css/font-awesome.min.css" />

		<!-- Bootstrap -->
		<link rel="stylesheet" href="css/bootstrap.css" />

		<!-- REVOLUTION BANNER CSS SETTINGS -->
		<link rel="stylesheet" type="text/css" href="css/settings.css" media="screen" />
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
		<div id="wrapper" class="homepage homepage-1">
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
			<div class="bannercontainer spacetop">
				<div class="banner">
					<ul>
						<!-- THE BOXSLIDE EFFECT EXAMPLES  WITH LINK ON THE MAIN SLIDE EXAMPLE -->
                       <?php
			
				$vendor_id=$_SESSION['vendor_id'];
				include 'include/connect.php';
				$sql = $link->rawQuery('select * from slider where vendor_id=?',Array($vendor_id));
				if($link->count > 0)
				{
					foreach($sql as $s)
					{
			?>
						<li data-transition="random" data-slotamount="1">
							<img src="../../../../Vendor-Panel/slider/<?php echo $s['slider_image']; ?>" alt="" />
						</li>
						<?php
					}
				}
				?>
			</ul>
				</div>
			</div>
			<!--banner Section ends Here -->
		<?php
								$vendor_id=$_SESSION['vendor_id'];
								$sql = $link->rawQueryOne('select * from about where vendor_id=?',Array($vendor_id));
								
							?>	
			<div class="about" style="margin-top: 70px;">
						<div class="figure parallax" style="background-image:url(../../../../Vendor-Panel/about/<?php echo $sql['about_image']; ?>);">
							
						</div>
						<div class="transport-king">
							<div class="about-us">
								<div class="description">
									<div class="heading">
										<h3>ABOUT US</h3>
									</div>
								
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
			
			<!--Section area starts Here -->
			<section id="section">
				<!--Section box starts Here -->
				<div class="section">
					<div class="services">
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
						$sql = $link->rawQuery('select * from service where vendor_id=? and is_active=? limit 6',Array($vendor_id,"1"));
						if($link->count > 0)
						{
							foreach($sql as $s)
							{
					?>
								<div class="slides-tab zoom">
									<figure>
										<img src="../../../../Vendor-Panel/service/<?php echo $s['icon']; ?>" alt="" />
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
					<div class="testimonial" style="padding-top: 00px;">
						<div class="container">
							<div class="row">
								<div class="col-xs-12 center">
									<div class="heading">
										<h2>testimonials</h2>
									</div>

									<div class="design-line">
										<span class="design"></span>
									</div>
								</div>
							</div>
							<div class="testimonial-text" id="testimonial-text">
							<?php
						$vendor_id=$_SESSION['vendor_id'];
						$sql = $link->rawQuery('select * from testimonials where vendor_id=? limit 6',Array($vendor_id));
						if($link->count > 0)
						{
							foreach($sql as $s)
							{
								?>
								<div class="feedback">
									<blockquote class="custom-quote">
										<span class="fa fa-quote-left custom-fa"></span>
										<p>
											"<?php echo $s['review']; ?>"
										</p>
										<footer>
											<h6><?php echo $s['title']; ?><span><?php echo $s['designation']; ?></span></h6>
										</footer>
									</blockquote>
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
		<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
		<script data-cfasync="false" src="js/email-decode.min.js"></script>
		<script type="text/javascript" src="js/owl.carousel.js"></script>
		<script type="text/javascript" src="js/jquery.selectbox-0.2.min.js"></script>

		<!--Parrallax -->
		<script type="text/javascript" src="js/parallax.js"></script>

		<!-- jQuery REVOLUTION Slider  -->
		<script type="text/javascript" src="js/jquery.themepunch.tools.min.js"></script>
		<script type="text/javascript" src="js/jquery.themepunch.revolution.min.js"></script>
		<script type="text/javascript" src="js/revolution.js"></script>

		<!-- Switcher Js -->
		<script src="js/style.switcher.js"></script>
		<script src="js/jquery.cookie.js"></script>
		<!-- Switcher Js -->

		<script src="js/less.js"></script>
		<script src="js/script.js" type="text/javascript"></script>
		<script type="text/javascript" src="js/site.js"></script>

	</body>
</html>