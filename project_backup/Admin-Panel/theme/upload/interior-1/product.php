<html>
<head>
<meta charset="utf-8">
<?php
session_start();
include 'include/connect.php';
$vendor_id=$_SESSION['vendor_id'];
$sql = $link->rawQueryOne('select * from vendor where vendor_id=?',Array($vendor_id));
?>
<title><?php echo $sql['shop_name']; ?> | Product</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">

<!--Color Switcher Mockup-->
<link href="css/color-switcher-design.css" rel="stylesheet">

<!--Color Themes-->
<link id="theme-color-file" href="css/default-theme.css" rel="stylesheet">

<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
    <!-- Main Header-->
    <?php
		include 'include/header.php';
	?>
    <!--End Main Header -->
    <?php
	include 'include/connect.php';
	$vendor_id=$_SESSION['vendor_id'];
	$sql = $link->rawQueryOne('select * from product where vendor_id=? and is_active=?',Array($vendor_id,"1"));
	?>
    <!--Page Title-->
    <section class="page-title" style="background-image:url(../../../../Vendor-Panel/product/<?php echo $sql['banner_image']; ?>)">
    	<div class="auto-container">
        	<h1>Shop Products</h1>
            <ul class="page-breadcrumb">
            	<li><a href="index.php">Home</a></li>
                <li>Shop Products</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
    
    <!--Sidebar Page Container-->
    <div class="sidebar-page-container">
    	<div class="auto-container">
        	<div class="row clearfix">
            	
                <!--Content Side-->
                <div class="content-side col-lg-12 col-md-12 col-sm-12 col-xs-12">
                	<!--Shop Single-->
                	<div class="shop-section">
                    	<div class="row clearfix">
                            <!--Shop Item-->
							<?php
								$vendor_id=$_SESSION['vendor_id'];
								$sql = $link->rawQuery('select * from product where vendor_id=? and is_active=?',Array($vendor_id,"1"));
								if($link->count > 0)
								{
									foreach($sql as $s)
									{
										?>
										<div class="shop-item col-lg-4 col-md-6 col-sm-6 col-xs-12">
											<div class="inner-box">
												<div class="image-box">
													<div class="image">
														<img src="../../../../Vendor-Panel/product/<?php echo $s['product_image'] ?>" alt="" />
													</div>
												</div>
												<div class="lower-content">
													<div class="price-box">
														<h3><?php echo $s['title'] ?></h3>
														<p><?php echo $s['description'] ?></p>
														<div class="price"><?php echo $s['product_price'] ?></div>
													</div>
												</div>
											</div>
										</div>
							<?php
									}
								}
							?>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    
    <!--Main Footer-->
    <?php
		include 'include/footer.php';
	?>
    <!--End Main Footer-->
    
</div>
<!--End pagewrapper-->

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/owl.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/wow.js"></script>
<script src="js/appear.js"></script>
<script src="js/script.js"></script>

<!--Color Switcher-->
<script src="js/color-settings.js"></script>
</body>
</html>