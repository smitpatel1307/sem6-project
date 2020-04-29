<?php
$current="2";
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
	<title>About || <?php echo $sql['shop_name']; ?></title>

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
	include 'include/connect.php';
	$vendor_id=$_SESSION['vendor_id'];
	$sql = $link->rawQueryOne('select * from about where vendor_id=?',Array($vendor_id));
?>   
<section class="breadcrumb-area" style="background-image: url('../../../../Vendor-Panel/about/<?php echo $sql['baner_image']; ?>');">
	<div class="container-fluid text-center">
		<h1>About Us</h1>
		<div class="breadcrumb-bottom">
            
		</div>
	</div>
</section>
<!--End breadcrumb area--> 

<!--Start about interrio area--> 
<section class="about-interrio-area">
    <div class="container">
        <div class="sec-title">
            <h2>About <span>Us</span></h2>
            <span class="decor"></span>
        </div>
		<?php
			$vendor_id=$_SESSION['vendor_id'];
			$sql = $link->rawQueryOne('select * from about where vendor_id=?',Array($vendor_id));
								
		?>
        <div class="row">
            <div class="col-md-6">
                <div class="text-holder">
                    <p><?php
								echo $sql['description'];
								echo $sql['about_mission'];
								echo $sql['about_vision'];
								echo $sql['about_success'];
						?></p>  
                </div>
            </div>
            <!--Start single item-->
            <!--End single item-->
            <!--Start single item-->
            <div class="col-md-6">
                <div class="single-item pdtop">
                    <div class="img-holder">
                        <img src="../../../../Vendor-Panel/about/<?php echo $sql['about_image']; ?>" alt="Awesome Image">
                        
                    </div>
                </div>
            </div>
            <!--End single item-->
        </div>
    </div>    
</section>           
<!--End about interrio area-->
    
<!--Start choose area--> 
<!--End choose area-->
    
<!--Start our team area--> 
<section class="team-area" style="padding-top: 15px;">
    <div class="container">
        <div class="sec-title">
            <h2>Meet The <span>Team</span></h2>
            <span class="decor"></span>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="team-members">
                    <!--Start single team member-->
					<?php
									$vendor_id=$_SESSION['vendor_id'];
									$sql = $link->rawQuery('select * from team where vendor_id=?',Array($vendor_id));
									if($link->count > 0)
									{
										foreach($sql as $s)
										{
											?>
                    <div class="single-team-member">
                        <div class="img-holder">
                            <img src="../../../../Vendor-Panel/team/<?php echo $s['team_image']; ?>" alt="Awesome Image">
                        </div>
                        <div class="text-holder text-center">
                            <h3><?php echo $s['name']; ?></h3>
                            <p style="color: black;"><?php echo $s['designation']; ?></p>
							<p style="color: black;"><?php echo $s['short_description']; ?></p>
                        </div>
                    </div>  
						<?php
							}
						}
						?>
                </div>
            </div>
        </div>
        <!--Start bottom text-->
        <!--End bottom text-->
    </div>
</section>
<!--End our team area-->    

<!--Start slogan area-->
<!--End slogan area-->

<!--Start fact counter area-->

<!--End fact counter area-->     
  
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
<script src="js/map-helper.js"></script>
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