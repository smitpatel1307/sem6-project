<?php
$current="3";
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php
session_start();
include 'include/connect.php';
$vendor_id=$_SESSION['vendor_id'];
$sql = $link->rawQueryOne('select * from vendor where vendor_id=?',Array($vendor_id));
?>
	<title>Services || <?php echo $sql['shop_name']; ?></title>

	<!-- responsive meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- master stylesheet -->
	<link rel="stylesheet" href="css/style.css">
	<!-- Responsive stylesheet -->
	<link rel="stylesheet" href="css/responsive.css">
	<link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="images/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="images/favicon-16x16.png" sizes="16x16">
    <!-- Fixing Internet Explorer-->
    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="js/html5shiv.js"></script>
    <![endif]-->
</head>
<body>
<!--Start header-search  area-->
<!--End header-search  area-->  

<!--Start header area-->
<?php
  include 'include/header.php';
?>
<!--End header area-->

<!--Start breadcrumb area-->
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
<section class="breadcrumb-area" style="background-image: url(../../../../Vendor-Panel/service/<?php echo $banner_image; ?>);">
	<div class="container-fluid text-center">
		<h1>Services</h1>
		<div class="breadcrumb-bottom">
            
		</div>
	</div>
</section>
<!--End breadcrumb area-->
 
<!--Start service page area-->                                                                                           
<section class="service-page-area">
    <div class="container">
        <div class="row">
            <!--Start single service item-->
			<?php
				$vendor_id=$_SESSION['vendor_id'];
				$sql = $link->rawQuery('select * from service where vendor_id=? and is_active=?',Array($vendor_id,"1"));
				if($link->count > 0)
				{
					foreach($sql as $s)
					{
						?>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="single-service-item">
                    <div class="img-holder">
                        <img src="../../../../Vendor-Panel/service/<?php echo $s['service_image']; ?>" alt="Awesome Image" style="height: 300px;width: 700px;">
                        <div class="overlay">
                            <div class="box">
                                <div class="content">
                                    <a href=""><i class="fa fa-link" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-holder">
                        <h3><?php echo $s['title']; ?></h3>
                        <p><?php echo $s['description']; ?></p>
                       
                    </div>    
                </div>
            </div>
			<?php
					}
				}
				?>
        </div>
    </div>
</section>
<!--Start service page area-->

<!--Start slogan v2 area-->                
<!--End slogan v2 area--> 
                  
<!--Start footer area-->  
<?php
  include 'include/footer.php';
?>  
<!--End footer area--> 

<!--Start footer bottom area-->     
<!--End footer bottom area-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

<!-- main jQuery -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- bx slider -->
<script src="js/jquery.bxslider.min.js"></script>
<!-- count to -->
<script src="js/jquery.countTo.js"></script>
<!-- owl carousel -->
<script src="js/owl.carousel.min.js"></script>
<!-- validate -->
<script src="js/validate.js"></script>
<!-- mixit up -->
<script src="js/jquery.mixitup.min.js"></script>
<!-- easing -->
<script src="js/jquery.easing.min.js"></script>
<!-- gmap helper -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHzPSV2jshbjI8fqnC_C4L08ffnj5EN3A"></script>
<!--gmap script-->
<script src="js/gmaps.js"></script>
<script src="js/map-helper-2.js"></script>
<!-- video responsive script -->
<script src="js/jquery.fitvids.js"></script>
<!-- jQuery ui js -->
<script src="js/jquery-ui-1.11.4/jquery-ui.js"></script>
<!-- Language Switche  -->
<script src="js/jquery.polyglot.language.switcher.js"></script>
<!-- fancy box -->
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.appear.js"></script>
<!-- isotope script-->
<script src="js/isotope.js"></script>
<!-- Pretty photo script-->
<script src="js/jquery.prettyPhoto.js"></script>            
		
<!-- revolution slider js -->
<script src="js/jquery.themepunch.tools.min.js"></script>
<script src="js/jquery.themepunch.revolution.min.js"></script>
<script src="js/revolution.extension.actions.min.js"></script>
<script src="js/revolution.extension.carousel.min.js"></script>
<script src="js/revolution.extension.kenburn.min.js"></script>
<script src="js/revolution.extension.layeranimation.min.js"></script>
<script src="js/revolution.extension.migration.min.js"></script>
<script src="js/revolution.extension.navigation.min.js"></script>
<script src="js/revolution.extension.parallax.min.js"></script>
<script src="js/revolution.extension.slideanims.min.js"></script>
<script src="js/revolution.extension.video.min.js"></script>



<!-- thm custom script -->
<script src="js/custom.js"></script>






</body>
</html>