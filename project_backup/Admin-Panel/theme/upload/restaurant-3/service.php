<!DOCTYPE html>
<html>
<head>
<?php
session_start();
include 'include/connect.php';
$vendor_id=$_SESSION['vendor_id'];
$sql = $link->rawQueryOne('select * from vendor where vendor_id=?',Array($vendor_id));
?>
    <title><?php echo $sql['shop_name']; ?> | Services</title>
	 
    <meta name="keywords" content="">
	<meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	
	<link rel="icon" type="image/png" href="images/favicon-pearl.png">
	
    <!--main file-->
	<link href="css/pearl-restaurant.css" rel="stylesheet" type="text/css">
    
    <!--Medical Guide Icons-->
	<link href="css/pearl-icons.css" rel="stylesheet" type="text/css">
	
	<!-- Default Color-->
	<link href="css/default-color.css" rel="stylesheet" id="color"  type="text/css">
    
    <!--bootstrap-->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    
    <!--Dropmenu-->
	<link href="css/dropmenu.css" rel="stylesheet" type="text/css">
    
	<!--Sticky Header-->
	<link href="css/sticky-header.css" rel="stylesheet" type="text/css">
	
	<!--Sticky Countdown-->
	<link href="css/countdown.css" rel="stylesheet" type="text/css">
	
	<!--revolution-->
	<link href="css/settings.css" rel="stylesheet" type="text/css">    
    <link href="css/extralayers.css" rel="stylesheet" type="text/css">    
   
    <!--Owl Carousel-->
	<link href="css/owl.carousel.css" rel="stylesheet" type="text/css">    
	
    <!-- Mobile Menu -->
	<link rel="stylesheet" type="text/css" href="css/jquery.mmenu.all.css" />
	
	<!--PreLoader-->
	<link href="css/loader.css" rel="stylesheet" type="text/css">    
    
	<!--switcher-->
	<link href="css/switcher.css" rel="stylesheet" type="text/css">	
    
</head>
  <body>
    
	<!--Switcher-->
	
  <div id="wrap">
   
   <!--Start PreLoader-->
	<!--End PreLoader--> 

  
   <!--Start Header-->
    
   <!--End Header-->
	
	
	
	
	
	<!--Start Header-->
	<?php
	  include 'include/header.php';
	?>
    
   <!--End Header-->
   
	
	<!-- Mobile Menu Start -->
    <!-- Mobile Menu End -->
	
	
	
	<!--Start Sub Banner-->
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
   <div class="sub-banner" style="background-image: url(../../../../Vendor-Panel/service/<?php echo $banner_image; ?>)">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="detail">
					<h1>Services</h1>
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a class="select">service</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="banner-img"></div>
   </div>
   <div class="wave"></div>
   
   <!--End Sub Banner-->
   
   
   
   <!--Start Content-->
	<div class="content">
		
		<!--Start The Menu-->
		<div class="our-menu">
			<div class="container">
				<div class="row">
					<?php
				$vendor_id=$_SESSION['vendor_id'];
				$sql = $link->rawQuery('select * from service where vendor_id=? and is_active=?',Array($vendor_id,"1"));
				if($link->count > 0)
				{
					foreach($sql as $s)
					{
						?>
					<div class="col-md-4">
						<div class="food-sec">
							<img src="../../../../Vendor-Panel/service/<?php echo $s['service_image']; ?>" alt="">
							<div class="detail">
								<h6><?php echo $s['title']; ?></h6>
								<p><?php echo $s['description']; ?></p>
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
		<!--End The Menu-->
		
	</div>	
   <!--End Content-->
	
	
	
	
	
	
	
	<!--Start Footer-->
		<?php
		  include 'include/footer.php';
		?>
	<!--End Footer-->
	
	
	
	
	



<a href="#0" class="cd-top"></a>
  </div>




<script type="text/javascript" src="js/jquery.js"></script>

<!-- SMOOTH SCROLL -->	
<script type="text/javascript" src="js/scroll-desktop.js"></script>
<script type="text/javascript" src="js/scroll-desktop-smooth.js"></script>

<!-- START REVOLUTION SLIDER -->	
<script type="text/javascript" src="js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="js/jquery.themepunch.tools.min.js"></script>


<!-- Countdown -->
<script type="text/javascript" src="js/countdown.js"></script>

<!-- Owl Carousel -->
<script type="text/javascript" src="js/owl.carousel.js"></script>
<script type="text/javascript" src="js/cart-detail.js"></script>

<!-- Mobile Menu -->
<script type="text/javascript" src="js/jquery.mmenu.min.all.js"></script>

<!-- All Scripts -->
<script type="text/javascript" src="js/custom.js"></script> 

<!-- Switcher -->
<script type="text/javascript" src="js/switcher-restaurant.js"></script>

</body>
</html>