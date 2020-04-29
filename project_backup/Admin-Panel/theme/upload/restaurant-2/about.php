<?php
$current="2";
?>
<html lang="en">
<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Specific Meta
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Litmus is a modern presentation HTML5 Portfolio HTML Template.">
    <meta name="keywords" content="HTML5, Template, Design, portfolio, Litmus, Single portfolio" />
    <meta name="author" content="tortoizthemes">

    <!-- Titles
    ================================================== -->
	<?php
session_start();
include 'include/connect.php';
$vendor_id=$_SESSION['vendor_id'];
$sql = $link->rawQueryOne('select * from vendor where vendor_id=?',Array($vendor_id));
?>
    <title><?php echo $sql['shop_name']; ?> | About </title>

    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="images/site-icon-resturant.png">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.html">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.html">

    <!-- Custom Font
    ================================================== -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i%7cPoppins:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"> 

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/plugins.min.css">
    <link rel="stylesheet" href="css/icons.min.css">
    <link rel="stylesheet" href="css/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="css/linea-arrows.css">
    <link rel="stylesheet" href="css/litmus-icon.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- RS5.0 Main Styleshee
    ================================================== -->
    <link rel="stylesheet" type="text/css" href="css/settings.css">
    <!-- RS5.0 Layers and Navigation Styles -->
    <link rel="stylesheet" type="text/css" href="css/layers.css">
    <link rel="stylesheet" type="text/css" href="css/navigation.css">

    <script src="js/modernizr.min.js"></script>

</head>

<body>
    <!-- Header
    ================================================== --> 
    <?php
	  include 'include/header.php';
	?>

    <!-- Hamburger Menu
    ================================================== -->

    <!-- Login Registration Modal
    ================================================== -->

    <!-- Header Modal
    ================================================== -->

    <!-- Restaurant Banner
    ================================================== -->  
	                        <?php
								include 'include/connect.php';
								$vendor_id=$_SESSION['vendor_id'];
								$sql = $link->rawQueryOne('select * from about where vendor_id=?',Array($vendor_id));
							?>
    <section class="restaurant-banner overlay-bg pd-t-175-b-90" style="background-image: url('../../../../Vendor-Panel/about/<?php echo $sql['baner_image']; ?>')">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs text-center color-white citrus-theme">
                        <span class="first-item">
                            <a href="index.php">Home</a>
                        </span>
                        <span class="separator"><i class="fa fa-angle-right"></i></span>
                        <span class="last-item">About Us</span>
                    </div>
                </div><!--  /.col-12 -->
            </div><!--  /.row -->
        </div><!--  /.container -->
    </section><!--  /.restaurant-banner -->  

    <!-- About Us
    ================================================== -->
    <section class="about-mission pd-tb-90">
        <div class="container">
            <div class="row">
                <div class="col-md-7 text-center full-content">
				            <?php
								$vendor_id=$_SESSION['vendor_id'];
								$sql = $link->rawQueryOne('select * from about where vendor_id=?',Array($vendor_id));
								
							?>
                    <h2 class="section-title no-border">Our Mission</h2>
                    <p class="sub-section-title v-2"><?php echo $sql['about_mission']; ?></p>
                    <div class="mrb-45"></div><!--  /.mrb -->
                </div><!--  /.col-md-7 -->
            </div><!--  /.row -->
            <div class="row">
                <div class="col-md-6">
                    <img src="../../../../Vendor-Panel/about/<?php echo $sql['about_image']; ?>" alt="Mission Image" />
                </div><!--  /.col-md-6 -->
                <div class="col-md-6">
                    <p><?php echo $sql['description'];
								echo $sql['about_vision'];
								echo $sql['about_success']; ?></p>
                </div><!--  /.col-md-6 -->
            </div><!--  /.row -->
        </div><!--  /.container -->
    </section><!--  /.about-page -->

    <!-- Our Service
    ================================================== -->

    <!-- Our Team
    ================================================== -->
    <section class="our-team pd-tb-90">
        <div class="container">
            <div class="row">
                <div class="col-md-7 text-center full-content">
                    <h2 class="section-title no-border">Meet Our Team</h2>
                    <div class="mrb-45"></div><!--  /.mrb -->
                </div><!--  /.col-md-7 -->
            </div><!--  /.row -->
            <div class="row">
			<?php
						$vendor_id=$_SESSION['vendor_id'];
						$sql = $link->rawQuery('select * from team where vendor_id=?',Array($vendor_id));
						if($link->count > 0)
						{
							foreach($sql as $s)
							{
								?>
									<div class="col-lg-4">
										<div class="team-item">                    
											<figure class="team-thumb">
												<img src="../../../../Vendor-Panel/team/<?php echo $s['team_image']; ?>" alt="team thumb" />
											</figure>
											<div class="team-content text-center">
												<h2 class="member-name"><?php echo $s['name']; ?></h2>
												<h4><?php echo $s['designation']; ?></h4>
												<p class="member-deseg v-2"><?php echo $s['short_description']; ?></p>
											</div>
										</div><!--  /.team-item -->
									</div><!--  /.col-lg-3 -->
						<?php
							}
						}
						?>
            </div><!--  /.row -->
        </div><!--  /.container -->
    </section><!--  /.our-team -->

    <!-- Footer
    ================================================== -->
    <?php
	  include 'include/footer.php';
	?>

    <!-- All The JS Files
    ================================================== --> 
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/plugin.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/jquery.hoverdir.js"></script>
    <script src="js/ajaxchimp.js"></script>
    <script src="js/litmus.min.js"></script><!-- main-js -->
</body>
</html>