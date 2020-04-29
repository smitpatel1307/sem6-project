<html>
<head>
<meta charset="utf-8">
<?php
session_start();
include 'include/connect.php';
$vendor_id=$_SESSION['vendor_id'];
$sql = $link->rawQueryOne('select * from vendor where vendor_id=?',Array($vendor_id));
?>
<title><?php echo $sql['shop_name']; ?> | About</title>
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
    
    <!--Page Title-->
	<?php
		include 'include/connect.php';
		$vendor_id=$_SESSION['vendor_id'];
		$sql = $link->rawQueryOne('select * from about where vendor_id=?',Array($vendor_id));
	?>
    <section class="page-title" style="background-image:url(../../../../Vendor-Panel/about/<?php echo $sql['baner_image']; ?>)">
    	<div class="auto-container">
        	<h1>About Us</h1>
            <ul class="page-breadcrumb">
            	<li><a href="index.php">Home</a></li>
                <li>About Us</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
    
    <!--Company Section-->
    <section class="company-section">
    	<div class="auto-container">
        	<!--Sec Title-->
            <div class="sec-title">
            	<h2>Company Overview</h2>
                <div class="separator"></div>
            </div>
            <div class="row clearfix">
            	
                <!--Content Column-->
                <div class="content-column col-md-6 col-sm-12 col-xs-12">
                	<div class="inner-column">
                        <div class="text">
                        	<p>
							<?php
								$vendor_id=$_SESSION['vendor_id'];
								$sql = $link->rawQueryOne('select * from about where vendor_id=?',Array($vendor_id));
								echo $sql['description'];
							?>
							</p>
							<h4 style="color: black;">About Mission</h4>
                            <p><?php echo $sql['about_mission']; ?></p>
							<h4 style="color: black;">About Vision</h4>
                            <p><?php echo $sql['about_vision']; ?></p>
							<h4 style="color: black;">About Success</h4>
                            <p><?php echo $sql['about_success']; ?></p>
                        </div>
                    </div>
                </div>
                
                <!--Founder Column-->
                <div class="founder-column col-md-6 col-sm-12 col-xs-12">
                	<div class="inner-column">
                    	<div class="row clearfix">
                        	<!--Image Column-->
                        	<div class="image-column col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            	<div class="image">
                                	<img src="../../../../Vendor-Panel/about/<?php echo $sql['about_image']; ?>" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!--End Company Section-->
    
    <!--Team Section-->
    <section class="team-section">
    	<div class="auto-container">
        	<!--Sec Title-->
            <div class="sec-title centered">
            	<h2>Meet Our Team</h2>
                <div class="separator"></div>
            </div>
            <div class="row clearfix">
            	
                <!--Team Block-->
				<?php
						$vendor_id=$_SESSION['vendor_id'];
						$sql = $link->rawQuery('select * from team where vendor_id=?',Array($vendor_id));
						if($link->count > 0)
						{
							foreach($sql as $s)
							{
								?>
								<div class="team-block col-md-4 col-sm-6 col-xs-12">
									<div class="inner-box">
										<div class="image">
											<img src="../../../../Vendor-Panel/team/<?php echo $s['team_image']; ?>" alt="" />
											<div class="overlay-box">
												<div class="content">
													<div class="name"><?php echo $s['name']; ?></div>
													<div class="designation"><?php echo $s['designation']; ?></div>
													<p style="color: white;"><?php echo $s['short_description']; ?></p>
												</div>
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
    </section>
    <!--End Team Section-->
    
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