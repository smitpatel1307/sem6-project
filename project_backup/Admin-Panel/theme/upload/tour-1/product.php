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
	<title><?php echo $sql['shop_name']; ?> | Produtcs</title>
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
				$sql = $link->rawQueryOne('select * from product where vendor_id=? and is_active=?',Array($vendor_id,"1"));
	        ?>
	<div class="header_title pade_bg6 d-flex justify_content_center align_items_center bg_overlay1" style="background-image:url(../../../../Vendor-Panel/product/<?php echo $sql['banner_image']; ?>);">
		 
	</div><!--END Page headet title-->
	
	
	<!--type page wrapper-->
	<div class="type_page_wrapper section_padding_60_60">

		<!--Start container-->
		<div class="container">
			
			<div class="sec-title text-center">
				<h2 style="padding-bottom:30px;">Our Produtcs</h2>
			</div>

			<!-- News Page Category -->
			<div class="news_page_category">			
				<div class="row">
				   <?php
						$vendor_id=$_SESSION['vendor_id'];
						$sql = $link->rawQuery('select * from product where vendor_id=? and is_active=?',Array($vendor_id,"1"));
						if($link->count > 0)
						{
							foreach($sql as $s)
							{
								?>
					<!-- News card -->
					<div class="col-md-6 col-lg-4 filter_point">
						<div class="item_service_card margin_bottom_30">
							<div class="image_service">	
									<img src="../../../../Vendor-Panel/product/<?php echo $s['product_image'] ?>" alt="">
							</div>
							<div class="describe_service">
								<h4 class="name_new">
									<?php echo $s['title'] ?>
								</h4>
							<p align="center">	<?php echo $s['description'] ?> </p>
								<h6 align="center"><?php echo $s['product_price'] ?></h6>
							</div>
						</div>
					</div><!-- END News card -->
					<?php
							}
						}
					?>
				</div>
			</div><!-- END News Page Category -->
			
			<!-- Page Pagination -->
			<!-- END Page Pagination -->

		</div><!--END Start container-->
		
	</div><!--END type page wrapper-->
	

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
	<!--Custom js-->
	<script src="js/custom.js"></script>

</body>
</html>