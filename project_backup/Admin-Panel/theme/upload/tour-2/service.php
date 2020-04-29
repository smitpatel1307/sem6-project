<?php
$current="3";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php
session_start();
include 'include/connect.php';
$vendor_id=$_SESSION['vendor_id'];
$sql = $link->rawQueryOne('select * from vendor where vendor_id=?',Array($vendor_id));
?>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $sql['shop_name']; ?> | Services </title>
    <!-- favicon --> 
    <link rel="shortcut icon" href="images/x-icon.jpg" type="image/x-icon">
    <!-- bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- fontawesome -->
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <!-- animate -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- magnific popup -->
    <link rel="stylesheet" href="css/magnific-popup.css">
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
<!-- breadcrumb area start -->
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
<section class="breadcrumb-area extra" style="background-image: url(../../../../Vendor-Panel/service/<?php echo $banner_image; ?>)">
 
</section>
<!-- breadcrumb area end -->

<!-- pakages content area start -->
<section class="pakages-content-area">
    <div class="container">
        <div class="row">
		<?php
				$vendor_id=$_SESSION['vendor_id'];
				$sql = $link->rawQuery('select * from service where vendor_id=? and is_active=?',Array($vendor_id,"1"));
				if($link->count > 0)
				{
					foreach($sql as $s)
					{
						?>
            <div class="col-lg-4 col-md-6">
                <div class="single-pakages-item margin-bottom-30"><!-- single pakages item -->
                    <div class="thumb">
                        <img src="../../../../Vendor-Panel/service/<?php echo $s['service_image']; ?>" alt="awesome pakages">
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
<!-- pakages content area end -->

<!-- testimonial area start -->
<!-- testimonial area end -->

<!-- brand carousel area start -->
<!-- brand carousel area end -->

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
    <!-- main -->
    <script src="js/main.js"></script>
</body>
</html>