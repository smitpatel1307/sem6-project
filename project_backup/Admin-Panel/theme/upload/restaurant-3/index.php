<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
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
    <title><?php echo $sql['shop_name']; ?></title>
	 
    <meta name="keywords" content="">
	<meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	
	<link rel="icon" type="image/png" href="images/favicon-pearl.png">
	
    <!--main file-->
	<link href="css/pearl-restaurant.css" rel="stylesheet" type="text/css">
    
    <!--Medical Guide Icons-->
	<link href="css/pearl-icons.css" rel="stylesheet" type="text/css">
	
	<!-- Default Color-->
	<link href="css/default-color.css" rel="stylesheet" id="color"  type="text/css">
    
    <!--bootstrap-->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    
    <!--Dropmenu-->
	<link href="css/dropmenu.css" rel="stylesheet" type="text/css">
    
	<!--Sticky Header-->
	<link href="css/sticky-header.css" rel="stylesheet" type="text/css">
	
	<!--Sticky Countdown-->
	<link href="css/countdown.css" rel="stylesheet" type="text/css">
	
	<!--revolution-->
	<link href="css/settings.css" rel="stylesheet" type="text/css">    
    <link href="css/extralayers.css" rel="stylesheet" type="text/css">    
   
    <!--Owl Carousel-->
	<link href="css/owl.carousel.css" rel="stylesheet" type="text/css">    
	
	<!--Date Picker-->
	<link href="css/date-pick.css" rel="stylesheet" type="text/css">    
	
	<!--Form Dropdown-->
	<link href="css/form-dropdown.css" rel="stylesheet" type="text/css">    
	
    <!-- Mobile Menu -->
	<link rel="stylesheet" type="text/css" href="css/jquery.mmenu.all.css" />
	
	<!--PreLoader-->
	<link href="css/loader.css" rel="stylesheet" type="text/css">    
   
    <!--switcher-->
	<link href="css/switcher.css" rel="stylesheet" type="text/css">	
	
</head>
  <body>
	
  <div id="wrap">
   
   <!--Start PreLoader-->
   
	<!--End PreLoader--> 

  
   <!--Start Header-->
	<div id="header-1">
       <?php
	     include 'include/header.php';
	   ?>
	</div>
    
   <!--End Header-->	
	
	<!-- Mobile Menu Start -->
	
   
   <div class="tp-banner-container">
		<div class="tp-banner" >
			<ul>
    	<!-- SLIDE  -->	
	        <?php
			
				$vendor_id=$_SESSION['vendor_id'];
				include 'include/connect.php';
				$sql = $link->rawQuery('select * from slider where vendor_id=?',Array($vendor_id));
				if($link->count > 0)
				{
					foreach($sql as $s)
					{
			?>
    
		<li data-transition="fade" data-slotamount="7" data-masterspeed="500"  data-saveperformance="on"  data-title="Intro Slide">
			<img src="../../../../Vendor-Panel/slider/<?php echo $s['slider_image']; ?>"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
	    </li>
		        <?php
					}
				}
				
				?>
    
</ul>
<div class="tp-bannertimer"></div>	</div>
<div class="wave"></div>
</div>		
   
   <!--End Banner-->
   
   <div class="our-story">
				<div class="container">
					<div class="row">
						
						<div class="col-md-6">
							<div class="story-detail">
							<div>
								
								<h1 style="padding-bottom: 16px;">About Us</h1>
							</div>
							<p> <?php
								$vendor_id=$_SESSION['vendor_id'];
								$sql = $link->rawQueryOne('select * from about where vendor_id=?',Array($vendor_id));
								echo $sql['description'];
								echo $sql['about_mission'];
								echo $sql['about_vision'];
								echo $sql['about_success'];
							?></p>
							</div>
						</div>
						
						<div class="col-md-6">
							<img src="../../../../Vendor-Panel/about/<?php echo $sql['about_image']; ?>" alt="">
						</div>
						
					</div>
				</div>
			</div>
   
   <!--Start Content-->
   <div class="content">
		
		
		<!--Start Services-->
		<div class="services" style="padding-top: 00px;">
			<div class="container">
				
				<div class="row">
				<div class="col-md-12">
					<div >
					<h1 style="text-align: center;">Our Services</h1>
					</div>
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
                	
					<div class="col-md-4">
						<div class="serv-main-sec">
						<div class="service-sec-top-bg"></div>
						<div class="service-sec">
							<!--<i class="icon-restaurant14"></i>-->
							<img src="../../../../Vendor-Panel/service/<?php echo $s['icon']; ?>" alt="blog image" />
							<h6><?php echo $s['title']; ?></h6>
							<p><?php echo $s['description']; ?></p>
						</div>
						<div class="service-sec-bottom-bg"></div>
						</div>
					</div>
					<?php
							}
						}
					?>	
				</div>	

			</div>
		</div>	
	<!--Start Customer Words-->
		<div class="customer-words" style="height: 500px;">
			
				<div class="parallax parallax-customer-words">
					<div class="detail">
						
						<div style="color: white;">
							<span>Some Words</span>
							<h1>FROM CUSTOMERS</h1>
						</div>
						
						<div id="testimonials">
							<div class="container">
								<div class="row">

									<div class="col-md-12">
									<div class="span12">

										<div id="owl-demo2" class="">
										<?php
											$vendor_id=$_SESSION['vendor_id'];
											$sql = $link->rawQuery('select * from testimonials where vendor_id=? limit 6',Array($vendor_id));
											if($link->count > 0)
											{
												foreach($sql as $s)
												{
										?>

										<div class="testi-sec">
										
										<span class="name"><?php echo $s['review']; ?></span> 
										<span class="work"><?php echo $s['title']; ?></span>
										<p><?php echo $s['designation']; ?></p>
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
						
					</div>
				</div>
		
		</div>
		<!--End Customer Words-->
		
		
		
	 </div>
   <!--End Content-->
	<!--Start Footer-->
		<?php
		  include 'include/footer.php';
		?>
	<!--End Footer-->
	
	
	
	
	



<a href="#0" class="cd-top"></a>
  </div>




<script type="text/javascript" src="js/jquery.js"></script>

<!-- SMOOTH SCROLL -->	
<script type="text/javascript" src="js/scroll-desktop.js"></script>
<script type="text/javascript" src="js/scroll-desktop-smooth.js"></script>

<!-- START REVOLUTION SLIDER -->	
<script type="text/javascript" src="js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="js/jquery.themepunch.tools.min.js"></script>

<!-- Countdown -->
<script type="text/javascript" src="js/countdown.js"></script>

<!-- Owl Carousel -->
<script type="text/javascript" src="js/owl.carousel.js"></script>
<script type="text/javascript" src="js/cart-detail.js"></script>

<!-- Mobile Menu -->
<script type="text/javascript" src="js/jquery.mmenu.min.all.js"></script>

<!-- Form Drop Dow -->
<script type="text/javascript" src="js/form-dropdown.js"></script>

<!-- Date Picker and input hover -->
<script type="text/javascript" src="js/classie.js"></script> 
<script type="text/javascript" src="js/jquery-ui-1.10.3.custom.js"></script>


<!-- All Scripts -->
<script type="text/javascript" src="js/custom.js"></script> 


<!-- Switcher -->
<script type="text/javascript" src="js/switcher-restaurant.js"></script>


<!-- Date Picker -->	
<script type="text/javascript">
[].slice.call( document.querySelectorAll( 'input.input__field' ) ).forEach( function( inputEl ) {
// in case the input is already filled..

// events:
inputEl.addEventListener( 'focus', onInputFocus );
inputEl.addEventListener( 'blur', onInputBlur );
} );

function onInputFocus( ev ) {
classie.add( ev.target.parentNode, 'input--filled' );
}

function onInputBlur( ev ) {
if( ev.target.value.trim() === '' ) {
classie.remove( ev.target.parentNode, 'input--filled' );
}
}

//date picker
jQuery("#datepicker").datepicker({
inline: true
});

<!-- Form Drop Down -->
$(document).ready(function() {

		$(".basic-example").heapbox();

});

</script>
 

<!-- Revolution Slider -->	
<script type="text/javascript">
jQuery('.tp-banner').show().revolution(
{
dottedOverlay:"none",
delay:16000,
startwidth:1170,
startheight:900,
hideThumbs:200,

thumbWidth:100,
thumbHeight:50,
thumbAmount:5,

navigationType:"nexttobullets",
navigationArrows:"solo",
navigationStyle:"preview",

touchenabled:"on",
onHoverStop:"on",

swipe_velocity: 0.7,
swipe_min_touches: 1,
swipe_max_touches: 1,
drag_block_vertical: false,

parallax:"mouse",
parallaxBgFreeze:"on",
parallaxLevels:[7,4,3,2,5,4,3,2,1,0],

keyboardNavigation:"off",

navigationHAlign:"center",
navigationVAlign:"bottom",
navigationHOffset:0,
navigationVOffset:20,

soloArrowLeftHalign:"left",
soloArrowLeftValign:"center",
soloArrowLeftHOffset:20,
soloArrowLeftVOffset:0,

soloArrowRightHalign:"right",
soloArrowRightValign:"center",
soloArrowRightHOffset:20,
soloArrowRightVOffset:0,

shadow:0,
fullWidth:"on",
fullScreen:"off",

spinner:"spinner4",

stopLoop:"off",
stopAfterLoops:-1,
stopAtSlide:-1,

shuffle:"off",

autoHeight:"off",						
forceFullWidth:"off",						



hideThumbsOnMobile:"off",
hideNavDelayOnMobile:1500,						
hideBulletsOnMobile:"off",
hideArrowsOnMobile:"off",
hideThumbsUnderResolution:0,

hideSliderAtLimit:0,
hideCaptionAtLimit:0,
hideAllCaptionAtLilmit:0,
startWithSlide:0,
videoJsPath:"rs-plugin/videojs/",
fullScreenOffsetContainer: ""	
});
</script>
</body>
</html>