<?php
$current="3";
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
    <title><?php echo $sql['shop_name']; ?> | Services</title>

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
    <section class="restaurant-banner overlay-bg pd-t-175-b-90" style="background-image: url(../../../../Vendor-Panel/service/<?php echo $banner_image; ?>)">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs text-center color-white citrus-theme">
                        <span class="first-item">
                            <a href="index.php">Home</a>
                        </span>
                        <span class="separator"><i class="fa fa-angle-right"></i></span>
                        <span class="last-item">Service</span>
                    </div>
                </div><!--  /.col-12 -->
            </div><!--  /.row -->
        </div><!--  /.container -->
    </section><!--  /.restaurant-banner -->  

    <!-- About Us
    ================================================== -->

     <section class="about-mission pd-b-90 border-bottom" style="padding-top: 60px;">
        <div class="container">
            <div class="row">
                <div class="col-md-7 text-center full-content">
                    <h2 class="section-title no-border">Our Service</h2>
                  
                    <div class="mrb-45"></div><!--  /.mrb -->
                </div><!--  /.col-md-7 -->
            </div><!--  /.row -->
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
                    <div class="service-grid">
                        <figure class="service-thumb">
                            <img src="../../../../Vendor-Panel/service/<?php echo $s['service_image']; ?>" alt="Service" />
                        </figure>
                        <h3 class="service-grid-title text-center">
                            <?php echo $s['title']; ?>
                        </h3><!--  /.service-grid-title -->
                        <p class="service-content text-center"><?php echo $s['description']; ?></p>
                    </div><!--  /.service-grid -->
					</div>
					<?php
					}
				}
				?>
            </div><!--  /.row -->
	
        </div><!--  /.container -->
		
    </section>
    <!-- Our Service
    ================================================== -->

    <!-- Our Team
    ================================================== -->
    

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