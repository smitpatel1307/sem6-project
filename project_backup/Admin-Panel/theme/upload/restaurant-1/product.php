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
	<title><?php echo $sql['shop_name']; ?> | Products</title>
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
	<!-- lightbox css -->
	<link href="css/lightbox.min.css" rel="stylesheet">
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
	$sql = $link->rawQueryOne('select * from product where vendor_id=? and is_active=?',Array($vendor_id,"1"));
?>
	<div class="grnbn-bread-cum white-clr-all white-clr-a" style="background-image: url('../../../../Vendor-Panel/product/<?php echo $sql['banner_image']; ?>')">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h4 class="bred-p">Product <span>Menu</span></h4>
					
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
		menu section
==========================================================
-->
	<div class="grnbn-menu sec-pad">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="sec-tit text-center">
						<h4>Our Product</h4>
					</div>
				</div>
			</div>
			<div class="big-spacer"></div>
			<!-- end big spacer -->
			<div class="row">
			<?php
				$vendor_id=$_SESSION['vendor_id'];
				$sql = $link->rawQuery('select * from product where vendor_id=? and is_active=?',Array($vendor_id,"1"));
				if($link->count > 0)
				{
					foreach($sql as $s)
					{
						?>
						<div class="col-md-4 col-sm-6 col-xs-12 mb-30">
							<div class="single-spf p-small">
								<div class="single-spf-img">
										<img src="../../../../Vendor-Panel/product/<?php echo $s['product_image'] ?>" alt="">
								</div>
								<div class="spf-price">
									<h5 class="clearfix">
										<?php echo $s['title'] ?> <span class="pull-right"><?php echo $s['product_price'] ?></span>
									</h5>
								</div>
								<div class="spf-text">
									<p><?php echo $s['description'] ?></p>
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
	menu section
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
	<!-- lightbox js -->
	<script src="js/lightbox.min.js"></script>
	<!-- jquery mean menu -->
	<script src="js/jquery.meanmenu.min.js"></script>
	<!-- scroll up js -->
	<script src="js/jquery.scrollUp.min.js"></script>
	<!-- custom scripts -->
	<script src="js/main.js"></script>
</body>
</html>
