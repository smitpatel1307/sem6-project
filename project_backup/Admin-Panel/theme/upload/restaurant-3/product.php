<!DOCTYPE html>
<html>
<head>
<?php
session_start();
include 'include/connect.php';
$vendor_id=$_SESSION['vendor_id'];
$sql = $link->rawQueryOne('select * from vendor where vendor_id=?',Array($vendor_id));
?>
    <title><?php echo $sql['shop_name']; ?> | Products </title>
	 
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
	
	<!--Shop Nimble-->
	<link href="css/cubeportfolio.css" rel="stylesheet" type="text/css">    
    
    
	<!--PreLoader-->
	<link href="css/loader.css" rel="stylesheet" type="text/css">    
    
	<!--switcher-->
	<link href="css/switcher.css" rel="stylesheet" type="text/css">	
    
</head>
  <body>

	
	
  <div id="wrap">
   
	<!--Start Header-->
	<?php
	  include 'include/header.php';
	?>
    
   <!--End Header-->
	
	<!--Start Sub Banner-->
	<?php
	include 'include/connect.php';
	$vendor_id=$_SESSION['vendor_id'];
	$sql = $link->rawQueryOne('select * from product where vendor_id=? and is_active=?',Array($vendor_id,"1"));
?>
   <div class="sub-banner" style="background-image: url('../../../../Vendor-Panel/product/<?php echo $sql['banner_image']; ?>')">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="detail">
						<h1>Product</h1>
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a class="select">Product</a></li>
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
		
		<!--Start Shop-->
			<div class="shop">
			
   <!--Start Team Detail-->
		<div class="cbp-panel" style="max-width:1170px;">

        <div id="grid-container" class="cbp shop-gallery">
           
			<?php
				$vendor_id=$_SESSION['vendor_id'];
				$sql = $link->rawQuery('select * from product where vendor_id=? and is_active=?',Array($vendor_id,"1"));
				if($link->count > 0)
				{
					foreach($sql as $s)
					{
				?>	
			
			<div class="cbp-item starters">
					
					
						<img src="../../../../Vendor-Panel/product/<?php echo $s['product_image'] ?>" alt="">
						<div class="detail">
							<h6><?php echo $s['title'] ?></h6>
							<span><?php echo $s['description'] ?></span>
							<h6><?php echo $s['product_price'] ?></h6>	
						</div>
					
				
			</div>
			<?php
					}
				}
				?>
        </div>

    </div>
   <!--End Team Detail-->
   
   </div>
		<!--End Shop-->
   
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


<!-- Gallery Portfolio -->	
<script type="text/javascript" src="js/jquery.cubeportfolio.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>


<!-- All Scripts -->
<script type="text/javascript" src="js/custom.js"></script> 

<!-- Switcher -->
<script type="text/javascript" src="js/switcher-restaurant.js"></script>

<!-- Notification Bar -->
<script>
$('.notify--dismissible').append('<button type="button" class="notify-close">&times;</button>');

$('.notify-close').on('click',function(){
  $(this).closest('.notify').hide();
});
</script>


</body>
</html>