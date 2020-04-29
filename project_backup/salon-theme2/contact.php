<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->


<!-- Mirrored from webdesign-finder.com/html/petsalon/contact2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 May 2019 05:13:01 GMT -->
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
	<!-- eof .modal -->

	<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas">
		<div id="box_wrapper">

			<!-- template sections -->

			<?php
			  include 'include/header.php';
			?>

			<section class="page_breadcrumbs ds background_cover background_overlay section_padding_top_65 section_padding_bottom_65">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h2 class="highlight">Contact</h2>
							<ol class="breadcrumb darklinks">
							</ol>
						</div>
					</div>
				</div>
			</section>

			<section class="ls section_padding_top_100 section_padding_bottom_75">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<section id="map" class="ls ms" data-address="Terracina, LT, Italia">
								<!-- marker description and marker icon goes here -->
								<div class="map_marker_description">
									<h3>Map Title</h3>
									<p>Map description text</p>
									<!-- <img class="map_marker_icon" src="images/map_marker_icon.png" alt=""> -->
								</div>
							</section>
						</div>
					</div>

					<div class="row topmargin_40">
						<div class="col-sm-4 to_animate" data-animation="pullDown">
							<div class="teaser text-center">
								<div class="teaser_icon highlight size_normal">
									<i class="rt-icon2-phone5"></i>
								</div>

								<p>
                        <span class="grey">Phone:</span> +12 345 678 9123<br>
                        <span class="grey">Fax:</span> +12 345 678 9123
                    </p>

							</div>
						</div>
						<div class="col-sm-4 to_animate" data-animation="pullDown">
							<div class="teaser text-center">
								<div class="teaser_icon highlight size_normal">
									<i class="rt-icon2-location2"></i>
								</div>

								<p> 
                        PO Box 54378<br>
                        4321 Your Address,<br>
                        Your City, Your Country
                    </p>

							</div>
						</div>
						<div class="col-sm-4 to_animate" data-animation="pullDown">
							<div class="teaser text-center">
								<div class="teaser_icon highlight size_normal">
									<i class="rt-icon2-mail"></i>
								</div>

								<p>pet_salon@support.com</p>

							</div>
						</div>

					</div>

					<div class="row topmargin_40">
						<div class="col-sm-12 to_animate">
							<form class="contact-form columns_padding_5" method="post" action="http://webdesign-finder.com/html/petsalon/">
								<div class="row">

									<div class="col-sm-6">
										<p class="form-group">
                                <label for="name">Full Name <span class="required">*</span></label>
                                <i class="fa fa-user highlight3" aria-hidden="true"></i>
                                <input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control" placeholder="Full Name">
                            </p>
										<p class="form-group">
                                <label for="email">Email address<span class="required">*</span></label>
                                <i class="fa fa-envelope highlight3" aria-hidden="true"></i>
                                <input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control" placeholder="Email Address">
                            </p>
										<p class="form-group">
                                <label for="subject">Subject<span class="required">*</span></label>
                                <i class="fa fa-flag highlight3" aria-hidden="true"></i>
                                <input type="text" aria-required="true" size="30" value="" name="subject" id="subject" class="form-control" placeholder="Subject">
                            </p>
									</div>
									<div class="col-sm-6">

										<p class="contact-form-message form-group">
                                <label for="message">Message</label>
                                <i class="fa fa-comment highlight3" aria-hidden="true"></i>
                                <textarea aria-required="true" rows="5" cols="45" name="message" id="message" class="form-control" placeholder="Message"></textarea>
                            </p>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">

										<p class="contact-form-submit text-center topmargin_10">
                                <button type="submit" id="contact_form_submit" name="contact_submit" class="theme_button color3">Send Message</button>
                            </p>
									</div>

								</div>
							</form>
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

	<!-- Google Map Script -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTwYSMRGuTsmfl2z_zZDStYqMlKtrybxo"></script>
</body>


<!-- Mirrored from webdesign-finder.com/html/petsalon/contact2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 May 2019 05:13:01 GMT -->
</html>