<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<?php
session_start();
include 'include/connect.php';
$vendor_id=$_SESSION['vendor_id'];
$sql = $link->rawQueryOne('select * from vendor where vendor_id=?',Array($vendor_id));
?>
	<title><?php echo $sql['shop_name']; ?> | About</title>
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
	<!-- element css -->
	<link href="css/element.css" rel="stylesheet">
	<!-- mean menu css -->
	<link href="css/meanmenu.css" rel="stylesheet">
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
		Preloder
==========================================================
-->

	<!--
=========================================================
		Header Area Start
==========================================================
-->
	<?php
	//  session_start();
	  include 'include/header.php';
	?>
	<!--
=========================================================
		Header Area End
==========================================================
-->
	<!--
=========================================================
		Bread cum section
==========================================================
-->
							<?php
								include 'include/connect.php';
								$vendor_id=$_SESSION['vendor_id'];
								$sql = $link->rawQueryOne('select * from about where vendor_id=?',Array($vendor_id));
							?>
	<div class="grnbn-bread-cum white-clr-all white-clr-a" style="background-image: url('../../../../Vendor-Panel/about/<?php echo $sql['baner_image']; ?>')">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h4 class="bred-p">About <span>Us</span></h4>
					
				</div>
			</div>
		</div>
	</div>
	<!--
=========================================================
		Bread cum section
==========================================================
-->
	<!--
=========================================================
		About Chef Section start
==========================================================
-->
	<div class="grbn-about-chef sec-pad home-1">
		<div class="container">
			<div class="big-spacer"></div>
			<!-- end big spacer -->
			<div class="row">
				<div class="col-md-6 col-sm-12 col-xs-12">
					<div class="chef-section-tit">
						<h4>About Us</h4>
						<div class="chef-text">
							<p>
							<?php
								$vendor_id=$_SESSION['vendor_id'];
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
				<!-- end about section text -->
				<div class="col-md-offset-1 col-md-5 col-sm-12 col-xs-12">
					<div class="all-abt-chef">
						<div class="single-abt-shef">
							<img class="img-responsive img-thumbnail" src="../../../../Vendor-Panel/about/<?php echo $sql['about_image']; ?>" alt="">
						</div>
					</div>
				</div>
				<!-- end all about chef -->
			</div>
			
			<!-- end big spacer -->
		</div>
	</div>
	<!--
=========================================================
		About Chef Section End
==========================================================
-->
	
	<!--
=========================================================
		Chef two section start
==========================================================
-->
	<div class="grnbrn-chef2-area sec-pad abt1">
		<div class="container">
		<div class="big-spacer"></div>
			<div class="row">
				<div class="col-md-12">
					<div class="sec-tit text-center">
						<h2>Our Special Team</h2>
						<h4><span>Meet Our </span> Passionate Members</h4>
					</div>
				</div>
				<!-- end section title -->
			</div>
			<div class="big-spacer"></div>
			<!-- end big spoacer -->
			<div class="row">
				<?php
						$vendor_id=$_SESSION['vendor_id'];
						$sql = $link->rawQuery('select * from team where vendor_id=?',Array($vendor_id));
						if($link->count > 0)
						{
							foreach($sql as $s)
							{
								?>
								<div class="col-md-3 col-sm-6 col-xs-12 mtb-30">
									<div class="single-chef-tem home-3">
										<div class="chef-team-img">
											<img class="img-responsive" src="../../../../Vendor-Panel/team/<?php echo $s['team_image']; ?>" alt="">
										</div>
										<!-- end chef img box -->
										<div class="chef-tem-text text-center p-small">
											<h5><?php echo $s['name']; ?></h5>
											<p><span><?php echo $s['designation']; ?></span></p>
											<p><?php echo $s['short_description']; ?></p>
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
	<!--
=========================================================
		Chef two section End
==========================================================
-->
	<!--
=========================================================
		Home page 2 reservation start
==========================================================
-->


	<!--
=========================================================
		Home page 2 reservation End
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
	<!-- jquery mean menu -->
	<script src="js/jquery.meanmenu.min.js"></script>
	<!-- scroll up js -->
	<script src="js/jquery.scrollUp.min.js"></script>
	<!-- custom scripts -->
	<script src="js/main.js"></script>
</body>
</html>
