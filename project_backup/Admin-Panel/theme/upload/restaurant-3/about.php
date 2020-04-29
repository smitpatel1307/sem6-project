<!DOCTYPE html>
<html>
<head>
<?php
session_start();
include 'include/connect.php';
$vendor_id=$_SESSION['vendor_id'];
$sql = $link->rawQueryOne('select * from vendor where vendor_id=?',Array($vendor_id));
?>
    <title><?php echo $sql['shop_name']; ?> | About</title>
	 
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
    
	
	
  <div id="wrap">
   
   <!--Start PreLoader-->
	<!--End PreLoader--> 

  
   <!--Start Header-->
    
   <!--End Header-->
	
	
	
	
	
	<!--Start Header-->
	<div id="header-1">
       <?php
	     include 'include/header.php';
	   ?>
	</div>
    
	
	
	<!--Start Sub Banner-->
	 <?php
		include 'include/connect.php';
		$vendor_id=$_SESSION['vendor_id'];
		$sql = $link->rawQueryOne('select * from about where vendor_id=?',Array($vendor_id));
	?>
   <div class="sub-banner" style="background-image: url('../../../../Vendor-Panel/about/<?php echo $sql['baner_image']; ?>');">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="detail">
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a class="select">about</a></li>
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

	
		<!--Start Traditional Atmosphere-->
			<div class="our-story">
				<div class="container">
					<div class="row">
						<?php
								$vendor_id=$_SESSION['vendor_id'];
								$sql = $link->rawQueryOne('select * from about where vendor_id=?',Array($vendor_id));
								
							?>
						<div class="col-md-6">
							<div class="atmosphere">
							<div class="main-title">
								<h2>About US </h2>
								
							</div>
							<br>
							<p><?php echo $sql['description'];
								echo $sql['about_vision'];
								echo $sql['about_success']; ?></p>
							</div>
						</div>
						
						<div class="col-md-6">
							<img src="../../../../Vendor-Panel/about/<?php echo $sql['about_image']; ?>" alt="">
						</div>
						
					</div>
				</div>
			</div>
		<!--End Traditional Atmosphere-->
		
		
		
		<!--Start Master Chef-->
		<div class="team-members dark-bg">
			<div class="container">
				
				<div class="row">
				<div class="col-md-12">
					<div class="main-title">
					<h2>Our Team</h2>
					</div>
				</div>
				</div>
				
				
        <div class="container">
          <div class="row">
            <div class="span12">

              <div id="owl-demo" class="owl-carousel">
			  <?php
						$vendor_id=$_SESSION['vendor_id'];
						$sql = $link->rawQuery('select * from team where vendor_id=?',Array($vendor_id));
						if($link->count > 0)
						{
							foreach($sql as $s)
							{
								?>

                <div class="chef-sec item">
                    	<img class="lazyOwl" src="../../../../Vendor-Panel/team/<?php echo $s['team_image']; ?>" alt="">
                        <div class="detail">
							<h6><?php echo $s['name']; ?></h6>
                        	<p><b><?php echo $s['designation']; ?></b></p>
                            <p><?php echo $s['short_description']; ?></p>
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

    
				
				
			</div>
		</div>
		<!--End Master Chef-->
		
		
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

<!-- Paralllax background -->
<script type="text/javascript" src="js/parallax.html"></script>

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