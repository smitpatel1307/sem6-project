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
	<title><?php echo $sql['shop_name']; ?> | Services</title>
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
		Header Area Start
==========================================================
-->
	<?php
	 // session_start();
	  include 'include/header.php';
	?>
	<!--
=========================================================
		Header Area End
==========================================================
-->
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
	<div class="grnbn-bread-cum white-clr-all white-clr-a" style="background-image: url(../../../../Vendor-Panel/service/<?php echo $banner_image; ?>);">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h4 class="bred-p">Services </h4>					
				</div>
			</div>
		</div>
	</div>
	<!--
=========================================================
		Services Section  Start Form Here
==========================================================
-->
	<div class="grnbn-services sec-pad">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="sec-tit text-center">
						<h2>Our Special Services</h2>
						<h4><span>We Create</span> Delicous Memory</h4>
					</div>
				</div>
				<!-- end section title -->
			</div>
			<div class="big-spacer"></div>
			<!-- end big spacer -->
			<div class="row">
			<?php
				$vendor_id=$_SESSION['vendor_id'];
				$sql = $link->rawQuery('select * from service where vendor_id=? and is_active=?',Array($vendor_id,"1"));
				if($link->count > 0)
				{
					foreach($sql as $s)
					{
						?>
						<div class="col-md-4 col-sm-6 col-xs-12 mtb-30 stb-20">
							<div class="single-grnb-services text-center">
								<div class="food-img">
									<img src="../../../../Vendor-Panel/service/<?php echo $s['service_image']; ?>" alt="" height="500px" width="400px">
								</div>
								<h5><?php echo $s['title']; ?></h5>
								<p><?php echo $s['description']; ?></p>
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
		Services Section  End Form Here
==========================================================
-->
	<!--
=========================================================
		Testimonails Area Start Form Hrere
==========================================================
-->
	
	<!--
=========================================================
		Testimonails Area End Form Hrere
==========================================================
-->
	<!--
=========================================================
		Chef two section start
==========================================================
-->
	
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
