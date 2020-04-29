<?php
$current="1";
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
if(isset($_GET['vendor_id']))
{
$vendor_id=$_GET['vendor_id'];
$_SESSION['vendor_id']=$vendor_id;
}
include 'include/connect.php';
$vendor_id=$_SESSION['vendor_id'];
$sql = $link->rawQueryOne('select * from vendor where vendor_id=?',Array($vendor_id));
?>
    <title><?php echo $sql['shop_name']; ?> | Home </title>

    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="images/site-icon-resturant.png">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.html">
    <link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.html">

    <!-- Custom Font
    ================================================== -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i%7cPoppins:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"> 

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/plugins.min.css">
    <link rel="stylesheet" href="css/jquery.datetimepicker.css">
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

    <!-- Hamburger Menu
    ================================================== -->

    <!-- Login Registration Modal
    ================================================== -->
	<?php
	  include 'include/header.php';
	?>

    <!-- Header Modal
    ================================================== --> 

    <!-- Slider Block
    ================================================== -->
    <div class="slider-block">
        <div class="rev_slider_wrapper">
            <div class="rev_slider litmus-restaurant-slider" data-version="5.4.5.1">
                <ul>
				<?php
			
				$vendor_id=$_SESSION['vendor_id'];
				include 'include/connect.php';
				$sql = $link->rawQuery('select * from slider where vendor_id=?',Array($vendor_id));
				if($link->count > 0)
				{
					foreach($sql as $s)
					{
						?>
					<li data-transition="fade" data-slotamount="default" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off" data-title="materialize Material" data-description="">
                        <img src="../../../../Vendor-Panel/slider/<?php echo $s['slider_image']; ?>" alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina >
                    </li>
						<?php
					}
				}
				
				?>
                </ul>             
            </div><!-- /.revolution slider -->
        </div><!-- /.slider wrapper -->
    </div><!--  /.slider-block -->

    <!-- Restaurant Welcome
    ================================================== -->
    <section class="restaurent-welcome overflow-hide">
        <div class="container">
            <div class="row no-gutters align-items-center">
                <div class="col-lg-6">
                    <div class="welcome-block clearfix">                    
                        <h2 class="welcome-title">About Us</h2>
                        <div class="owner-area row align-items-center">
                            <div class="col-6">
                               <?php
								$vendor_id=$_SESSION['vendor_id'];
								$sql = $link->rawQueryOne('select * from about where vendor_id=?',Array($vendor_id));
								echo $sql['description'];
								echo $sql['about_mission'];
								echo $sql['about_vision'];
								echo $sql['about_success'];
							?>
                            </div><!--  /.float-left -->
                        </div><!--  /.owner-area -->
                    </div><!--  /.welcome-block -->
                </div><!--  /.col-md-6 -->
                
                <div class="col-lg-6 d-none d-xl-block">
                    <div class="tab-content litmus-dish-content">
                        
                        
                        <div class="tab-pane fade show active" id="salads-welcome" role="tabpanel">
                            <img src="../../../../Vendor-Panel/about/<?php echo $sql['about_image']; ?>" alt="chef image" / style="padding-top: 75px;">
                        </div>
                        
                        
                    </div>
                </div><!--  /.col-md-6 -->
            </div><!--  /.row -->
        </div><!-- /.container -->
    </section><!-- /.restaurant-welcome -->

    <!-- Best Seller Block
    ================================================== -->

    <!-- Our Menu Block
    ================================================== -->
    <!-- Make Reservation Block
    ================================================== -->

    <!-- Blog Block
    ================================================== -->
    <section class="blog-block pd-tb-90">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center full-content">
                    <h2 class="section-title no-border">Services</h2>
                    
                </div><!--  /.col-md-12 -->
            </div><!--  /.row -->

            <div class="row">
                <div class="col-12">
                    <div class="blog-slider citrus-theme owl-carousel">
					<?php
						$vendor_id=$_SESSION['vendor_id'];
						$sql = $link->rawQuery('select * from service where vendor_id=? and is_active=? limit 6',Array($vendor_id,"1"));
						if($link->count > 0)
						{
							foreach($sql as $s)
							{
					?>
                        <div class="item">
                            <article class="post">
                                <figure class="article-thumb">
                                    
                                        <img src="../../../../Vendor-Panel/service/<?php echo $s['icon']; ?>"  height="500px" width="400px" alt="blog image" />
                                    
                                </figure><!-- /.article-thumb -->
                                <div class="article-header">
                                    <div class="entry-meta">
                                        <div class="article-content"><h4><?php echo $s['title']; ?></h4></div><!-- /.entry-date -->
                                    </div><!-- /.entry-meta -->
                                </div><!-- /.article-header -->
                                <div class="entry-date">
                                    <p><?php echo $s['description']; ?></p>
                                </div><!--  /.article-content -->
                            </article><!--  /.post -->
                        </div><!--  /.item -->
						<?php
							}
						}
						?>
                    </div><!--  /.blog-carousel -->
                </div><!--  /.col-12 -->
            </div><!--  /.row -->
        </div><!--  /.container -->
    </section><!--  /.blog-block -->
    
	
	
    <!-- Newsletter Block
    ================================================== -->
    <!-- Footer
    ================================================== -->
    <?php
	  include 'include/footer.php';
	?><!--  /.site-footer -->

    <!-- All The JS Files
    ================================================== --> 
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/plugin.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/jquery.hoverdir.js"></script>
    <script src="js/ajaxchimp.js"></script>
    <script src="js/jquery.datetimepicker.full.min.js"></script>
    <script src="js/litmus.min.js"></script><!-- main-js -->

    <!-- Slider Revolution core JavaScript files -->
    <script src="js/jquery.themepunch.tools.min.js"></script>
    <script src="js/jquery.themepunch.revolution.min.js"></script>
    <!-- Slider Revolution extension scripts. ONLY NEEDED FOR LOCAL TESTING --> 
    <script src="js/revolution.extension.actions.min.js"></script>
    <script src="js/revolution.extension.carousel.min.js"></script>
    <script src="js/revolution.extension.kenburn.min.js"></script>
    <script src="js/revolution.extension.layeranimation.min.js"></script>
    <script src="js/revolution.extension.migration.min.js"></script>
    <script src="js/revolution.extension.navigation.min.js"></script>
    <script src="js/revolution.extension.parallax.min.js"></script>
    <script src="js/revolution.extension.slideanims.min.js"></script>
    <script src="js/revolution.extension.video.min.js"></script>

    <script>
        jQuery(document).ready(function() {
            var $sliderSlector = jQuery(".litmus-restaurant-slider");
            $sliderSlector.revolution({
                sliderType: "standard",
                sliderLayout: "fullwidth",
                delay: 9000,
                navigation: {
                    keyboardNavigation: "on",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation: "off",
                    onHoverStop: "off",
                    touch: {
                        touchenabled: "on",
                        swipe_threshold: 75,
                        swipe_min_touches: 1,
                        swipe_direction: "horizontal",
                        drag_block_vertical: false
                    },
                    arrows: {
                        style: "uranus",
                        enable: true,
                        hide_onmobile: false,
                        hide_onleave: true,
                        tmp: '',
                        left: {
                            h_align: "left",
                            v_align: "center",
                            h_offset: 60,
                            v_offset: -30
                        },
                        right: {
                            h_align: "right",
                            v_align: "center",
                            h_offset: 60,
                            v_offset: -30
                        }
                    }
                },
                responsiveLevels:[1340,1024,778,560],
                gridwidth:[1340,1024,778,560],
                gridheight:[900,900,750,750],
                visibilityLevels:[1340,1024,778,560],
                disableProgressBar:"on"
            });
        });
    </script>
</body>
</html>