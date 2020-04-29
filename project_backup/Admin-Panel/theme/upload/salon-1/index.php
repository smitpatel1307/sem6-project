<?php
$current="1";
?>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
   
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
        <meta name="author" content="WowThemez">
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
        <title><?php echo $sql['shop_name']; ?> || Home</title>
        
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
                <img src="images/loading.gif" width="80" alt="">
            </div>
        </div><!-- Preloader -->
        
       <?php
	     include 'include/header.php';
	   ?>
		
		<section class="slider_section">
            <ul id="main-slider" class="owl-carousel main_slider">
			<?php
			
				$vendor_id=$_SESSION['vendor_id'];
				include 'include/connect.php';
				$sql = $link->rawQuery('select * from slider where vendor_id=?',Array($vendor_id));
				if($link->count > 0)
				{
					foreach($sql as $s)
					{
						?>
                <li class="main_slide">
                    <img src="../../../../Vendor-Panel/slider/<?php echo $s['slider_image']; ?>">
                </li>
                <?php
					}
				}
				
				?>
                
            </ul>
        </section><!-- /.slider_section -->
        
        <section id="about" class="about_section bd-bottom padding">
            <div class="container">
                <div class="col-sm-6">
                    <div class="about_content align-center">
                      <?php
								$vendor_id=$_SESSION['vendor_id'];
								$sql = $link->rawQueryOne('select * from about where vendor_id=?',Array($vendor_id));
								
							?>
                        <h2 class="mb-15">About US</h2>
                        <p><?php
						echo $sql['description'];
								echo $sql['about_mission'];
								echo $sql['about_vision'];
								echo $sql['about_success'];
						?></p>
                       
                    </div>        
                </div>
                <div class="col-sm-6 hidden-xs">
                    <div class="about_img">
                        
                        <img src="../../../../Vendor-Panel/about/<?php echo $sql['about_image']; ?>" alt="idea-images" class="about_img_1">
                      
                    </div>
                </div>
            </div>
        </section> <!--/.about_section -->
        
        
        <section id="team" class="team_section bd-bottom padding">
			<div class="container">
				<div class="section_heading align-center mb-40">
					<h2>Our Services</h2>
				</div><!-- /.section_heading -->
				<ul class="team_members">
				<?php
						$vendor_id=$_SESSION['vendor_id'];
						$sql = $link->rawQuery('select * from service where vendor_id=? and is_active=? limit 6',Array($vendor_id,"1"));
						if($link->count > 0)
						{
							foreach($sql as $s)
							{
					?>
					<li class="col-md-4 col-xs-6">
						<div class="team_member">
							<img src="../../../../Vendor-Panel/service/<?php echo $s['icon']; ?>" alt="Team Member">
							<div class="overlay">
								<h3><?php echo $s['title']; ?></h3>
								<p><?php echo $s['description']; ?></p>
							</div>
						</div>
					</li>
					<?php
							}
						}
						?>
				</ul><!-- /.team_members -->
			</div>
        </section><!-- /.team_section -->
        <?php
			$sql=$link->rawQueryOne('select baner_image from about where vendor_id=?',Array($vendor_id));
		?>
        <section id="reviews" class="testimonial_section padding" style="background-image: url(../../../../Vendor-Panel/about/<?php echo $sql['baner_image']; ?>)">
			<div class="container">
				<ul id="testimonial_carousel" class="testimonial_items owl-carousel">
				<?php
					$vendor_id=$_SESSION['vendor_id'];
					$sql = $link->rawQuery('select * from testimonials where vendor_id=? limit 6',Array($vendor_id));
					if($link->count > 0)
					{
						foreach($sql as $s)
						{
					?>
                    <li class="testimonial_item">
					<p>"<?php echo $s['review']; ?></p>
                        <p>"<?php echo $s['title']; ?></p>
                        <h4 class="text-white"><?php echo $s['designation']; ?></h4>
                    </li>
					<?php
						}
					}
					?>
                </ul>
			</div>
		</section><!-- /.testimonial_section -->
		
		

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
		<!-- Appointment JS -->
		<script src="js/appointment.js"></script>
		<!-- Main JS -->
		<script src="js/main.js"></script>

    </body>
</html>