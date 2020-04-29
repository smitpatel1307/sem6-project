<!DOCTYPE html>
<html lang="en">
<head>
<?php
session_start();
include 'include/connect.php';
$vendor_id=$_SESSION['vendor_id'];
$sql = $link->rawQueryOne('select * from vendor where vendor_id=?',Array($vendor_id));
?>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title><?php echo $sql['shop_name']; ?> | About</title>
	<link rel="icon" type="image/png" href="images/favicon.png">
	<!--Main style css-->
	<link rel="stylesheet" href="css/style.css"> 
	<!--Responsive style css-->
	<link rel="stylesheet" href="css/responsive.css"> 
</head>
<body>
	<!-- main navigation mobile -->
	<!-- END main navigation mobile -->

	<!-- main header -->
	<?php
	  include 'include/header.php';
	?><!--END main header -->
	
	<!--Page headet title-->
								<?php
									include 'include/connect.php';
									$vendor_id=$_SESSION['vendor_id'];
									$sql = $link->rawQueryOne('select * from about where vendor_id=?',Array($vendor_id));
								?>
	<div class="header_title pade_bg5 d-flex justify_content_center align_items_center bg_overlay1">
		
			<img src="../../../../Vendor-Panel/about/<?php echo $sql['baner_image']; ?>" alt="" / style="height: 500px;width: 100%;">
		
	</div><!--END Page headet title-->
	
	
	<!--type page wrapper-->
	<div class="type_page_wrapper section_padding_60_60">

		<!--Start container-->
		<div class="container">

			<div class="about_section">
			
			
				
				<div class="row">
				<?php
								$vendor_id=$_SESSION['vendor_id'];
								$sql = $link->rawQueryOne('select * from about where vendor_id=?',Array($vendor_id));
								
							?>
					<div class="content-column col-xl-6 col-lg-6 col-md-12 col-sm-12">
						<div class="sec-title">
							<h3>About US</h3>
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
					<div class="image-column col-xl-6 col-lg-6 col-md-12 col-sm-12">
							<img src="../../../../Vendor-Panel/about/<?php echo $sql['about_image']; ?>" alt="">
						</a>
					
					</div>
				
				</div>
				
			
			</div>
			
		</div><!--END Start container-->

	</div><!--END type page wrapper-->
	
	
	<!--Social List-->

	<section class="our_team section_padding_100_100">
		<div class="container">
			<div class="section_heading text-center">
				<h2 class="section_heading_title">Our Team</h2>
			</div>
			<div class="owl-carousel team_carousel sv_arrow_nav">
								<?php
									$vendor_id=$_SESSION['vendor_id'];
									$sql = $link->rawQuery('select * from team where vendor_id=?',Array($vendor_id));
									if($link->count > 0)
									{
										foreach($sql as $s)
										{
											?>
				<!-- team_card_item -->
				<div class="team_card_item">
					<div class="team_card_item_img">
						<img src="../../../../Vendor-Panel/team/<?php echo $s['team_image']; ?>" alt="">
					</div>
					<div class="name_card_wrapper">
						<h4 class="team_card_item_name">
							<?php echo $s['name']; ?>
						</h4>
					</div>
					<div class="overlay">
						<h4 class="team_card_item_name">
						   <?php echo $s['designation']; ?>
						</h4>
						<div class="short_text_team">
						
							<p><?php echo $s['short_description']; ?></p>
						</div>
					</div>
				</div><!-- END team_card_item -->
									<?php
										}
									}
									?>
			</div>
		</div>
	</section>
     
	<!--Services Slider-->
    <!--END related card slider-->

	<!-- subscribe_line -->
	<!-- main_footer -->
	<?php
	  include 'include/footer.php';
	?><!-- END main_footer -->
	
	<!-- JS -->
	<!--jQuery 1.12.4 google link-->
	<script src="js/jquery.min.js"></script>
	<!--Bootstrap 4.1.0-->
	<script src="js/bootstrap.min.js"></script>
	<!--jquery.magnific-popup-->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<!--OwlCarousel2-2.3.4-->
	<script src="js/owl.carousel.min.js"></script>
	<!--Custom js-->
	<script src="js/custom.js"></script>

</body>
</html>