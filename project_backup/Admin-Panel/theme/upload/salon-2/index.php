<?php
$current="1";
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
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
	<title><?php echo $sql['shop_name']; ?></title>
	<meta charset="utf-8">
	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<![endif]-->
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animations.css">
	<link rel="stylesheet" href="css/fonts.css">
	<link rel="stylesheet" href="css/main.css" class="color-switcher-link">
	<script src="js/modernizr-2.6.2.min.js"></script>

	<!--[if lt IE 9]>
		<script src="js/vendor/html5shiv.min.js"></script>
		<script src="js/vendor/respond.min.js"></script>
		<script src="js/vendor/jquery-1.12.4.min.js"></script>
	<![endif]-->

</head>

<body>
	<!--[if lt IE 9]>
		<div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="highlight">upgrade your browser</a> to improve your experience.</div>
	<![endif]-->

	<div class="preloader">
		<div class="preloader_image"></div>
	</div>

	<!-- search modal -->
	
	<!-- Unyson messages modal -->
	<div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
		<div class="fw-messages-wrap ls with_padding">
			<!-- Uncomment this UL with LI to show messages in modal popup to your user: -->
			<!--
		<ul class="list-unstyled">
			<li>Message To User</li>
		</ul>
		-->

		</div>
	</div>
	<!-- eof .modal -->

	<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas">
		<div id="box_wrapper">

			<!-- template sections -->

			<?php
			  include 'include/header.php';
			?>

			<section class="intro_section page_mainslider ls ms">
				<div class="flexslider">
					<ul class="slides">
						<?php
			
							$vendor_id=$_SESSION['vendor_id'];
							include 'include/connect.php';
							$sql = $link->rawQuery('select * from slider where vendor_id=?',Array($vendor_id));
							if($link->count > 0)
							{
								foreach($sql as $s)
								{
									?>
						<li>
							<img src="../../../../Vendor-Panel/slider/<?php echo $s['slider_image']; ?>" alt="">
							
							<!-- eof .container -->
						</li>
						<?php
								}
							}
					    ?>
					</ul>
				</div>
				<!-- eof flexslider -->


			</section>

			<section id="about" class="ls section_padding_top_100 section_padding_bottom_100">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h2 class="section_header with_icon icon_color">
								About US
							</h2>
							
						</div>
					</div>
					<?php
								$vendor_id=$_SESSION['vendor_id'];
								$sql = $link->rawQueryOne('select * from about where vendor_id=?',Array($vendor_id));
								
							?>
					<div class="row">
						<div class="col-md-6">
							<img src="../../../../Vendor-Panel/about/<?php echo $sql['about_image']; ?>" alt="" />
						</div>
						<div class="col-md-6">
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
			</section>

			<section id="services" class="ls ms section_padding_top_100 section_padding_bottom_100">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h2 class="section_header with_icon icon_color4">
								Our Services
							</h2>
						</div>
					</div>
					<div class="row columns_margin_bottom_40">
					<?php
						$vendor_id=$_SESSION['vendor_id'];
						$sql = $link->rawQuery('select * from service where vendor_id=? and is_active=? limit 6',Array($vendor_id,"1"));
						if($link->count > 0)
						{
							foreach($sql as $s)
							{
					?>
						<div class="col-md-4 col-sm-6">
							<div class="teaser text-center">
								<img src="../../../../Vendor-Panel/service/<?php echo $s['icon']; ?>" alt="" />
								<h4>
									<?php echo $s['title']; ?>
								</h4>
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
			</section>

			<section id="reviews" class="cs main_color3 parallax page_testimonials section_padding_top_100 section_padding_bottom_100">
				<div class="container">
					<div class="row">
						<div class="col-md-10 col-md-offset-1 text-center">

							<div class="owl-carousel testimonials-owl-carousel" data-responsive-lg="1" data-responsive-md="1" data-responsive-sm="1" data-dots="true" data-nav="false">
								<?php
									$vendor_id=$_SESSION['vendor_id'];
									$sql = $link->rawQuery('select * from testimonials where vendor_id=? limit 6',Array($vendor_id));
									if($link->count > 0)
									{
										foreach($sql as $s)
										{
								?>
								<blockquote class="with_quotes text-center">
									"<?php echo $s['review']; ?>"
									<div class="item-meta">
										<h3 class="bottommargin_10"><?php echo $s['title']; ?></h3>
										<p class="small-text"><?php echo $s['designation']; ?></p>
									</div>
								</blockquote>
									<?php
										}
									}
									?>
							</div>

						</div>
					</div>
				</div>
			</section>
          <?php
		    include 'include/footer.php';
		  ?>
		</div>
		<!-- eof #box_wrapper -->
	</div>
	<!-- eof #canvas -->

	<script src="js/compressed.js"></script>
	<script src="js/main.js"></script>
	<script src="js/switcher.js"></script>

</body>
</html>