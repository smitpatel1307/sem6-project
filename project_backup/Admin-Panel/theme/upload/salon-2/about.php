<?php
$current="2";
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
$vendor_id=$_SESSION['vendor_id'];
$sql = $link->rawQueryOne('select * from vendor where vendor_id=?',Array($vendor_id));
?>
	<title><?php echo $sql['shop_name']; ?> | About</title>
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
	<!-- eof .modal -->

	<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas">
		<div id="box_wrapper">

			<!-- template sections -->

			<?php
			 include 'include/header.php';
			?>
                            <?php
								include 'include/connect.php';
								$vendor_id=$_SESSION['vendor_id'];
								$sql = $link->rawQueryOne('select * from about where vendor_id=?',Array($vendor_id));
							?>
			<section class="page_breadcrumbs ds background_cover background_overlay section_padding_top_65 section_padding_bottom_65" style="background-image: url('../../../../Vendor-Panel/about/<?php echo $sql['baner_image']; ?>')">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h2 class="highlight">About</h2>
							<ol class="breadcrumb darklinks">
							</ol>
						</div>
					</div>
				</div>
			</section>

			<section id="about" class="ls section_padding_top_100 section_padding_bottom_50">
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
            <section id="team" class="ls page_portfolio section_padding_top_130 section_padding_bottom_100">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h3 class="section_header with_icon icon_color2">
								 Our Team
							</h3>
						</div>
					</div>
					<!-- .row -->
					<div class="row">
						<div class="col-sm-12">
							<div class="owl-carousel with_shadow_items" data-nav="true" data-dots="false" data-items="3" data-responsive-lg="3" data-margin="30" data-loop="true">
								<?php
									$vendor_id=$_SESSION['vendor_id'];
									$sql = $link->rawQuery('select * from team where vendor_id=?',Array($vendor_id));
									if($link->count > 0)
									{
										foreach($sql as $s)
										{
											?>
								<div class="vertical-item content-padding text-center with_shadow rounded overflow-hidden">
									<div class="item-media">
										<img src="../../../../Vendor-Panel/team/<?php echo $s['team_image']; ?>" alt="">
									</div>
									<div class="item-content">
										<p class="small-text highlight3 margin_0"><?php echo $s['name']; ?></p>

										<h4 class="hover-color3 topmargin_0">
										  <?php echo $s['designation']; ?>
										</h4>

										<p>
								<?php echo $s['short_description']; ?>
							</p>
									</div>
								</div>
								<?php
							}
						}
						?>
							</div>
							<!-- .owl-carousel -->
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