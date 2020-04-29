<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->


<!-- Mirrored from webdesign-finder.com/html/petsalon/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 May 2019 05:05:23 GMT -->
<head>
	<title>Pet Salon</title>
	<meta charset="utf-8">
	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<![endif]-->
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animations.css">
	<link rel="stylesheet" href="css/fonts.css">
	<link rel="stylesheet" href="css/main.css" class="color-switcher-link">
	<script src="js/modernizr-2.6.2.min.js"></script>

	<!--[if lt IE 9]>
		<script src="js/vendor/html5shiv.min.js"></script>
		<script src="js/vendor/respond.min.js"></script>
		<script src="js/vendor/jquery-1.12.4.min.js"></script>
	<![endif]-->

</head>

<body>
	<!--[if lt IE 9]>
		<div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="highlight">upgrade your browser</a> to improve your experience.</div>
	<![endif]-->

	<div class="preloader">
		<div class="preloader_image"></div>
	</div>

	<!-- search modal -->
	
	<!-- Unyson messages modal -->
	<div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
		<div class="fw-messages-wrap ls with_padding">
			<!-- Uncomment this UL with LI to show messages in modal popup to your user: -->
			<!--
		<ul class="list-unstyled">
			<li>Message To User</li>
		</ul>
		-->

		</div>
	</div>
	<!-- eof .modal -->

	<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas">
		<div id="box_wrapper">

			<!-- template sections -->

			<?php
			  include 'include/header.php';
			?>

			<section class="intro_section page_mainslider ls ms">
				<div class="flexslider">
					<ul class="slides">

						<li>
							<img src="images/slide01.jpg" alt="">
							
							<!-- eof .container -->
						</li>

						<li>
							<img src="images/slide02.jpg" alt="">
							<!-- eof .container -->
						</li>

						<li>
							<img src="images/slide03.jpg" alt="">
							<!-- eof .container -->
						</li>

					</ul>
				</div>
				<!-- eof flexslider -->


			</section>

			<section id="about" class="ls section_padding_top_100 section_padding_bottom_100">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h2 class="section_header with_icon icon_color">
								Welcome to Our Salon
							</h2>
							<p class="small-text">best Pet salon in iowa</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<img src="images/about.jpg" alt="" />
						</div>
						<div class="col-md-6">
							<p>
					Drumstick flank pork chop pastrami tenderloin. Turkey bacon cow beef ribs salami pork loin kevin fatback alcatra shankle turducken landjaeger ground round. Jerky beef turkey.
				</p>
							<ul class="list2 grey medium bottommargin_40">
								<li>Pam sausage cow fatback ball</li>
								<li>Hamburger prosciutto boudin</li>
								<li>Doner leberkas pig baconudin</li>
							</ul>
							<a href="about.html" class="theme_button color1 wide_button">Read More</a>
						</div>
					</div>
				</div>
			</section>

			<section id="services" class="ls ms section_padding_top_100 section_padding_bottom_100">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h2 class="section_header with_icon icon_color4">
								What We Do
							</h2>
							<p class="small-text">All kinds of services</p>
						</div>
					</div>
					<div class="row columns_margin_bottom_40">
						<div class="col-md-4 col-sm-6">
							<div class="teaser text-center">
								<img src="images/01.png" alt="" />
								<h4>
									<a href="#">Nail Trim &amp; Ear Cleaning</a>
								</h4>
								<p>
						Bresaola tail short loin kevin corned beef turducken pork chop short ribs
					</p>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="teaser text-center">
								<img src="images/02.png" alt="" />
								<h4>
									<a href="#">Combing &amp; Brushing</a>
								</h4>
								<p>
						Bresaola tail short loin kevin corned beef turducken pork chop short ribs
					</p>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-sm-offset-3 col-md-offset-0">
							<div class="teaser text-center">
								<img src="images/03.png" alt="" />
								<h4>
									<a href="#">Clipping Fur &amp; Haircut</a>
								</h4>
								<p>
						Bresaola tail short loin kevin corned beef turducken pork chop short ribs
					</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12 text-center">
							<a href="services.html" class="theme_button color4 wide_button">All Services</a>
						</div>
					</div>
				</div>
			</section>

			<section id="reviews" class="cs main_color3 parallax page_testimonials section_padding_top_100 section_padding_bottom_100">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h2 class="section_header with_icon icon_color">
								What Clients Say
							</h2>
							<p class="small-text">Because pets can not tell you their impressions</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-10 col-md-offset-1 text-center">

							<div class="owl-carousel testimonials-owl-carousel" data-responsive-lg="1" data-responsive-md="1" data-responsive-sm="1" data-dots="true" data-nav="false">

								<blockquote class="with_quotes text-center">
									<img src="images/faces/01.jpg" alt="" /> With the notion of just how much pet do hate sitting in the groomer's chair, Estelle Marsh undid it all for Enny!
									<div class="item-meta">
										<h3 class="bottommargin_10">Ray Cunningham</h3>
										<p class="small-text">Client</p>
									</div>
								</blockquote>

								<blockquote class="with_quotes text-center">
									<img src="images/faces/01.jpg" alt="" /> With the notion of just how much pet do hate sitting in the groomer's chair, Estelle Marsh undid it all for Enny!
									<div class="item-meta">
										<h3 class="bottommargin_10">Ray Cunningham</h3>
										<p class="small-text">Client</p>
									</div>
								</blockquote>

								<blockquote class="with_quotes text-center">
									<img src="images/faces/01.jpg" alt="" /> With the notion of just how much pet do hate sitting in the groomer's chair, Estelle Marsh undid it all for Enny!
									<div class="item-meta">
										<h3 class="bottommargin_10">Ray Cunningham</h3>
										<p class="small-text">Client</p>
									</div>
								</blockquote>


							</div>

						</div>
					</div>
				</div>
			</section>
          <?php
		    include 'include/footer.php';
		  ?>
		</div>
		<!-- eof #box_wrapper -->
	</div>
	<!-- eof #canvas -->

	<script src="js/compressed.js"></script>
	<script src="js/main.js"></script>
	<script src="js/switcher.js"></script>

</body>


<!-- Mirrored from webdesign-finder.com/html/petsalon/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 May 2019 05:06:34 GMT -->
</html>