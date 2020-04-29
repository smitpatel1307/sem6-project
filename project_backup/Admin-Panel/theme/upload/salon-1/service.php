<?php
$current="3";
?>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
        <meta name="author" content="AlexaTheme">
       <?php
session_start();
include 'include/connect.php';
$vendor_id=$_SESSION['vendor_id'];
$sql = $link->rawQueryOne('select * from vendor where vendor_id=?',Array($vendor_id));
?>
        <title><?php echo $sql['shop_name']; ?> || Services</title>
        
		<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">

        <!-- Elegant Font Icons CSS -->
        <link rel="stylesheet" href="css/elegant-font-icons.css">
        <!-- Elegant Line Icons CSS -->
        <link rel="stylesheet" href="css/elegant-line-icons.css">
        <!-- Themify Icon CSS -->
        <link rel="stylesheet" href="css/themify-icons.css">
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- animate CSS -->
        <link rel="stylesheet" href="css/animate.min.css">
		<!-- Venobox CSS -->
        <link rel="stylesheet" href="css/venobox.css">
		<!-- OWL-Carousel CSS -->
        <link rel="stylesheet" href="css/owl.carousel.css">
        <!-- Slick Nav CSS -->
        <link rel="stylesheet" href="css/slicknav.min.css">
		<!-- Main CSS -->
        <link rel="stylesheet" href="css/main.css">
		<!-- Responsive CSS -->
        <link rel="stylesheet" href="css/responsive.css">

        <script src="js/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <div id='preloader' >
            <div class='loader' >
                <img src="img/loading.gif" width="80" alt="">
            </div>
        </div><!-- Preloader -->
        
        <?php
		   include 'include/header.php';
		?>
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
		<section class="page_header" style="background-image: url(../../../../Vendor-Panel/service/<?php echo $banner_image; ?>);">
            <div class="container">
                <div class="display-table">
                    <div class="table-cell">
                        <div class="page_content align-center">
                           
                            <div class="page_border"></div>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /.page_header -->
        
        <section class="service_section bg-grey bd-bottom padding">
            <div class="container">
               <div class="section_heading align-center mb-40">
                   <h2>Our Services</h2>
               </div>
                <div class="service_items">
				<?php
				$vendor_id=$_SESSION['vendor_id'];
				$sql = $link->rawQuery('select * from service where vendor_id=? and is_active=?',Array($vendor_id,"1"));
				if($link->count > 0)
				{
					foreach($sql as $s)
					{
						?>
                    <div class="col-sm-4 col-xs-6">
                       <div class="service_content align-center">
                            <img src="../../../../Vendor-Panel/service/<?php echo $s['service_image']; ?>" alt="Services">
                            <h3><?php echo $s['title']; ?></h3>
                            <P><?php echo $s['description']; ?></P>
                       </div>
                    </div>
					<?php
					}
				}
				?>
                </div>
            </div>
        </section><!--/.service_section -->

       <?php
	     include 'include/footer.php';
	   ?>
        
		<a data-scroll href="#header" id="scroll-to-top"><i class="arrow_up"></i></a>
	
		<!-- jQuery Lib -->
		<script src="js/jquery-1.12.4.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="js/bootstrap.min.js"></script>
        <!-- Imagesloaded JS -->
        <script src="js/imagesloaded.pkgd.min.js"></script>
		<!-- OWL-Carousel JS -->
		<script src="js/owl.carousel.min.js"></script>
		<!-- isotope JS -->
		<script src="js/jquery.isotope.v3.0.2.js"></script>
		<!-- Smooth Scroll JS -->
		<script src="js/smooth-scroll.min.js"></script>
		<!-- venobox JS -->
		<script src="js/venobox.min.js"></script>
        <!-- ajaxchimp JS -->
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <!-- Slick Nav JS -->
        <script src="js/jquery.slicknav.min.js"></script>
        <!-- YTPlayer JS -->
	    <script src="js/jquery.mb.YTPlayer.min.js"></script>
		<!-- Contact JS -->
		<script src="js/contact.js"></script>
		<!-- Main JS -->
		<script src="js/main.js"></script>

    </body>
</html>