<?php
$current="1";
?>
<!DOCTYPE html>
<html lang="en">
<head>
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
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $sql['shop_name']; ?> </title>
    <!-- favicon --> 
    <link rel="shortcut icon" href="images/x-icon.jpg" type="image/x-icon">
    <!-- bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- fontawesome -->
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <!-- animate -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- flaticon -->
    <link rel="stylesheet" href="css/flaticon.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- magnific popup -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- date time picker -->
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <!-- stylesheet -->
    <link rel="stylesheet" href="css/style.css">
    <!-- responsive -->
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body> 
    
    <!-- preloader area start -->
    
    <!-- preloader area end -->
  
    <!-- navbar area start -->
    <?php
	  include 'include/header.php';
	?>
    <!-- navbar area end -->

<!-- header area start -->
<div class="header-area">
   <div class="header-carousel">
    <?php
			
				$vendor_id=$_SESSION['vendor_id'];
				include 'include/connect.php';
				$sql = $link->rawQuery('select * from slider where vendor_id=?',Array($vendor_id));
				if($link->count > 0)
				{
					foreach($sql as $s)
					{
			?>
       <div class="single-carousel-item">
        <div class="slider-bg"  style="background-image: url(../../../../Vendor-Panel/slider/<?php echo $s['slider_image']; ?>);"></div>
           
       </div>
	   <?php
					}
				}
		?>
   </div>
   <div class="slider-progressbar"></div>
</div>
<!-- header area end -->

<!-- search area start -->
<!-- search area end -->

<!-- header bottom area start -->
<!-- header bottom area end -->

<!-- why chose us area start -->
<section class="why-us-area ">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title"><!-- section title -->
                    <h2 class="title"><span class="base-color">About </span>US</h2>
                </div><!-- //. section title -->
            </div>
        </div>
		<?php
								$vendor_id=$_SESSION['vendor_id'];
								$sql = $link->rawQueryOne('select * from about where vendor_id=?',Array($vendor_id));
								
							?>
        <div class="row reorder-xs">
            <div class="col-lg-6">
                <div class="left-content-area"><!-- left content area -->
                    <h4 >
					<?php
					        echo $sql['description'];
							echo $sql['about_mission'];
							echo $sql['about_vision'];
							echo $sql['about_success'];
					?></h4>
                </div><!-- //. left content area -->
            </div>
            <div class="col-lg-6">
                <div class="right-content-area">
                    <div class="img-wrapper">
                        <img src="../../../../Vendor-Panel/about/<?php echo $sql['about_image']; ?>" alt="why us image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- why chose us area end -->

<!-- top country to visit area start -->

<!-- top country to visit area end -->

<!-- awesome pakages area start -->
<section class="awesome-pakages-area" style="padding-top: 10px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title"><!-- section title -->
                    <h2 class="title"><span class="base-color">Our </span>Services</h2>
                </div><!-- //. section title -->
            </div>
        </div>
        <div class="row">
		<?php
						$vendor_id=$_SESSION['vendor_id'];
						$sql = $link->rawQuery('select * from service where vendor_id=? and is_active=? limit 6',Array($vendor_id,"1"));
						if($link->count > 0)
						{
							foreach($sql as $s)
							{
					?>
            <div class="col-lg-4 col-md-6">
                <div class="single-pakages-item"><!-- single pakages item -->
                    <div class="thumb">
                        <img src="../../../../Vendor-Panel/service/<?php echo $s['icon']; ?>" alt="awesome pakages">
                    </div>
                    <div class="content">
                        <h4 class="title"><?php echo $s['title']; ?></h4>
                        <p><?php echo $s['description']; ?></p>
                    </div>
                </div><!-- //. single pakages item -->
            </div>
						<?php
							}
						}
						?>
        </div>
    </div>
</section>
<!-- awesome pakages area end -->

<!-- counterup area start -->

    <!-- counterup area end -->

<!-- photo gallery area start -->
<!-- photo gallery area end -->

<!-- testimonial area start -->
<section class="testimonial-area gray-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title"><!-- section title -->
                    <h2 class="title"><span class="base-color">Clients</span> Says</h2>
                </div><!-- //. section title -->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="testimonial-carousel"><!-- testimonial carousel -->
                    <?php
						$vendor_id=$_SESSION['vendor_id'];
						$sql = $link->rawQuery('select * from testimonials where vendor_id=? limit 6',Array($vendor_id));
						if($link->count > 0)
						{
							foreach($sql as $s)
							{
								?>
                    <div class="single-testimonial-item"><!-- single testimonial item -->
                        <div class="description">
                            <p><?php echo $s['review']; ?></p>
                        </div>
                        <div class="author-meta">
                            <div class="content">
                                <h5 class="name"><?php echo $s['title']; ?></h5>
                                <span class="post"><?php echo $s['designation']; ?></span>
                            </div>
                        </div>
                    </div><!-- //. single testimonial item -->
					<?php
							}
						}
						?>
                </div><!-- //. testimonial carousel -->
            </div>
        </div>
    </div>
</section>
<!-- testimonial area end -->

<!-- contact area start -->
<!-- contact area end -->


<!-- footer area start -->
<?php
 include 'include/footer.php';
?>
<!-- footer area end -->


<div class="back-to-top base-color-2">
        <i class="fas fa-rocket"></i>
</div>

    <!-- jquery -->
    <script src="js/jquery.js"></script>
    <!-- popper -->
    <script src="js/popper.min.js"></script>    
	<!-- bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- way poin js-->
    <script src="js/waypoints.min.js"></script>
    <!-- owl carousel -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- magnific popup -->
    <script src="js/jquery.magnific-popup.js"></script>
    <!-- wow js-->
    <script src="js/wow.min.js"></script>
    <!-- counterup js-->
    <script src="js/jquery.counterup.min.js"></script>
    <!-- datetime picker js-->
    <script src="js/bootstrap-datepicker.js"></script>
    <!-- main -->
    <script src="js/main.js"></script>
</body>
</html>