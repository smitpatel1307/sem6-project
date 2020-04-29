<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Contact Us</title>
	<link rel="icon" type="image/png" href="images/favicon.png">
	<!--Main style css-->
	<link rel="stylesheet" href="css/style.css"> 
	<!--Responsive style css-->
	<link rel="stylesheet" href="css/responsive.css"> 
</head>
<body>
	<!-- main header -->
	<?php
		include 'include/header.php';
	?>
	
	<!--Page headet title-->
	<div class="header_title pade_bg2 d-flex justify_content_center align_items_center bg_overlay1">
		<div class="container">
			<h1 class="page_title">Contact Us</h1>
			<ul class="page-list">
				<li><a href="index.php">Home</a></li>
				<li>-</li>
				<li>Contact</li>
			</ul>
		</div>
	</div><!--END Page headet title-->
	
	
	<!--type page wrapper-->
	<div class="type_page_wrapper section_padding_60_60">

		<!--Start container-->
		<div class="container">
			
			<div class="row">
				<div class="image-column col-md-4 col-sm-12 col-xs-12">
					<ul class="card_detail_info">
						<li><strong>Phone:</strong> 
							<span class="datelink">
								<i class="fas fa-mobile-alt"></i> 1-800-123-4567
							</span>
						</li>
						<li><strong>E-mail:</strong> 
							<span class="datelink">
								example@example.com
							</span>
						</li>
						<li><strong>Address:</strong> 
							<span class="datelink">
								1600 Amphitheatre Parkway,Mountain View, CA 94043
							</span>
						</li>
					</ul>
				</div>
				<div class="info-column col-md-8 col-sm-12 col-xs-12">
					<form class="contact-form" method="post" action="#">
						<div class="row columns_padding_5">

							<div class="col-xs-12 col-md-6 ">
								<div class="filed_form">
									<input type="text" value="" name="name" class="form-control" required placeholder="Name">
								</div>
							</div>
							<div class="col-xs-12 col-md-6">
								<div class="filed_form">
									<input type="tel" value="" name="phone" class="form-control" required placeholder="Phone">
								</div>
							</div>
							<div class="col-xs-12 col-md-6">
								<div class="filed_form">
									<input type="email" value="" name="email" class="form-control" required placeholder="Email">
								</div>
							</div>
							<div class="col-xs-12 col-md-6">
								<div class="filed_form"> 
									<input type="text" value="" name="subject" class="form-control" placeholder="Topic">
								</div>
							</div>
							<div class="col-xs-12 col-md-12">
								<div class="filed_form">
									<textarea rows="4" cols="45" name="message" placeholder="Message"></textarea>
								</div>
							</div>

						</div>
						<div class="contact_form_submit">
							<button type="submit" name="contact_submit" class="sv_btn sv_btn_default">Submit</button>
						</div>
					</form>
					
				</div>
			</div>
		</div><!--END Start container-->
		
	</div><!--END type page wrapper-->
	
	
	<!--related card slider-->
	

	
	<!-- main_footer -->
	<?php
		include 'include/footer.php';
	?>
	<!-- END main_footer -->
	
	<!-- JS -->
	<!--jQuery 1.12.4 google link-->
	<script src="../../ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!--Bootstrap 4.1.0-->
	<script src="assets/libs/bootstrap-4.1.0/bootstrap.min.js"></script>
	<!--jquery.magnific-popup-->
	<script src="assets/libs/jquery.magnific-popup/jquery.magnific-popup.min.js"></script>
	<!--OwlCarousel2-2.3.4-->
	<script src="assets/libs/owlcarousel2-2.3.4/owl.carousel.min.js"></script>
	<!--Custom js-->
	<script src="assets/js/custom.js"></script>

</body>

<!-- Mirrored from demo.maximumtheme.net/svargo/single-team.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 May 2019 05:01:48 GMT -->
</html>