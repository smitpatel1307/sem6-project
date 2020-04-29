<!DOCTYPE html>
<html lang="en">
<head>
<?php
session_start();
if(isset($_GET['vendor_id']))
{
$vendor_id=$_GET['vendor_id'];
$_SESSION['vendor_id']=$vendor_id;
}
include 'include/connect.php';
$vendor_id=$_SESSION['vendor_id'];
$sql = $link->rawQueryOne('select * from vendor where vendor_id=?',Array($vendor_id));
?>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title><?php echo $sql['shop_name']; ?></title>
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
	<!-- main_big_carousel -->
	<div class="main_big_slider" id="main_slider1">
		<div class="owl-carousel main_b_slider">
			<!--Item big slider-->
			<?php
			
				$vendor_id=$_SESSION['vendor_id'];
				include 'include/connect.php';
				$sql = $link->rawQuery('select * from slider where vendor_id=?',Array($vendor_id));
				if($link->count > 0)
				{
					foreach($sql as $s)
					{
			?>
			<div class="d-flex bg_img justify_content_center align_items_center item item_mainslide_1 bg_overlay1">
					
				 <img src="../../../../Vendor-Panel/slider/<?php echo $s['slider_image']; ?>" alt="">	

			</div><!--END Item big slider-->
			<?php
					}
				}
			?>
			<!--Item big slider-->
			
			<!--Item big slider-->
		</div>
	</div><!--END main_big_carousel -->
	<!-- advatnages_list -->
    <!--END advatnages_list -->
	<!-- about_main -->
	<section class="about_main" id="about">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6 about_text_main no_padding">
				 <?php
								$vendor_id=$_SESSION['vendor_id'];
								$sql = $link->rawQueryOne('select * from about where vendor_id=?',Array($vendor_id));
								
							?>
					<h2>
						About Us
					</h2>
					
					<p>
							<?php
								echo $sql['description'];
								echo $sql['about_mission'];
								echo $sql['about_vision'];
								echo $sql['about_success'];
							?>
					</p>
					
				</div>
				<div class="col-lg-6 no_padding vide_block d-flex bg_img justify_content_center align_items_center bg_overlay1">
					
					<div class="image_service">
						<img src="../../../../Vendor-Panel/about/<?php echo $sql['about_image']; ?>" alt="">
					</div>
				</div>
			</div>
		</div>
	</section><!--END about_main -->

	<!-- our_service -->
	<section class="our_service light_area section_padding_100_100" id="services">
		<div class="container">
			<div class="section_heading text-center">
				<h2 class="section_heading_title">Services List</h2>
				<div class="describe_section_title">
				</div>
			</div>
			<div class="owl-carousel service_carousel sv_arrow_nav">
			<?php
						$vendor_id=$_SESSION['vendor_id'];
						$sql = $link->rawQuery('select * from service where vendor_id=? and is_active=? limit 6',Array($vendor_id,"1"));
						if($link->count > 0)
						{
							foreach($sql as $s)
							{
					?>
				<div class="item_service_card">
					<div class="image_service">
						<img src="../../../../Vendor-Panel/service/<?php echo $s['icon']; ?>" alt="">
					</div>
					<div class="describe_service">
						<h4 class="name_service">
							<?php echo $s['title']; ?>
						</h4>
						<p align="center"><?php echo $s['description']; ?></p>
					</div>
				</div>
				<?php
							}
						}
				?>
			</div>
		</div>
	</section><!--END our_service -->
	<!-- our_photos -->
	<!-- review_form -->
	<section class="review_form_line bg_overlay1 section_padding_100_100" id="review_form">
		<div class="container">
			<!-- reviews carousel -->
			<div class="owl-carousel reviews_carousel sv_dots_nav">
			<?php
									$vendor_id=$_SESSION['vendor_id'];
									$sql = $link->rawQuery('select * from testimonials where vendor_id=? limit 6',Array($vendor_id));
									if($link->count > 0)
									{
										foreach($sql as $s)
										{
								?>
				<!-- review item -->
				<div class="item">
					<h4 class="name_review">
						"<?php echo $s['review']; ?>" 
					</h4>
					<h6><?php echo $s['title']; ?></h6>
					<p><?php echo $s['designation']; ?></p>
					
				</div><!--END review item -->
									<?php
										}
									}
									?>
			</div><!--END reviews slider -->

		</div>
	</section><!-- END review_form -->
	<!-- our_team -->
	<!-- news_list -->
	<!-- subscribe_line -->
	<!-- main_footer -->
	<?php
		include 'include/footer.php';
	?>
	
	<!-- JS -->
	<!--jQuery 1.12.4 google link-->
	<script src="js/jquery.min.js"></script>
	<!--Bootstrap 4.1.0-->
	<script src="js/bootstrap.min.js"></script>
	<!--shuffle-->
	<script src="js/shuffle.min.js"></script>
	<!--jquery.magnific-popup-->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<!--OwlCarousel2-2.3.4-->
	<script src="js/owl.carousel.min.js"></script>
	<!--Custom js-->
	<script src="js/custom.js"></script>

</body>

</html>