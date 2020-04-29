<?php
$current="5";
?>
<?php
session_start();
error_reporting(0);

require_once ('phpmailer/PHPMailerAutoload.php');
include 'include/connect.php';
$mail = new PHPMailer();
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
$mail->Host = "smtp.gmail.com";
$mail->Port = 465; // or 587
$mail->IsHTML(true);
$mail->Username = "chauhandinal2018@gmail.com";
$mail->Password = "8511870099";

if(isset($_POST['submit']))
{
	$name=$_POST['cname'];
	$email=$_POST['email'];
	$message=$_POST['message'];
	
	$var = "<html>
						
									<body>
									
										<p>Dear Vendor,</p></br>

					<p style='margin:0px;'>Contact Name: ".$name." </p></br>
					<p>Contact Person email : ".$email."</p></br>
					<p>Contact Person message : ".$message."</p></br>
					
					<p>With regards,</p></br>
					<p style='margin:0px;'>".$name."</p></br>

				</body>
			</html>";
				$mail->SetFrom($email,$name);
				$sql = $link->rawQueryOne('select * from vendor where vendor_id=?',Array($_SESSION['vendor_id']));
				$mail->Subject = "Contact for ".$sql['shop_name'];
				
				$mail->MsgHTML($var);
				
				$sql = $link->rawQueryOne('select * from contact where vendor_id=?',Array($_SESSION['vendor_id']));
				if($link->count > 0)
				{
					$vendor_mail=$sql['email'];
				}
				$mail->AddAddress($vendor_mail);

				if($mail->Send())
				{
					echo "<script>window.location.replace('contact.php?err=1');</script>";
				}
				else
				{
				    echo "<script>window.location.replace('contact.php?err=2');</script>";
				}
}
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
        <title><?php echo $sql['shop_name']; ?> || Contact</title>
        
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
<script>
	function validate()
	{
		var s=true;
		document.getElementById("validname").innerHTML = "";
		document.getElementById("validemail").innerHTML = "";
		document.getElementById("validmessage").innerHTML = "";
		
		var validname = document.data.cname.value;
		var reg=/^[a-zA-Z ]+$/;
		if(validname == "")
		{
			document.getElementById("validname").innerHTML = "Enter Contact Name";
			s=false;
		}
		else if(!reg.test(validname))
		{
			document.getElementById("validname").innerHTML="Enter valid Contact Name";
			s=false;
		}
		
		var email = document.data.email.value;
		var reg=/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
		if(email == "")
		{
			document.getElementById("validemail").innerHTML = "Enter Vendor E-mail";
			s=false;
		}
		else if(!reg.test(email))
		{
			document.getElementById("validemail").innerHTML="Enter valid Vendor E-mail";
			s=false;
		}
		
		var description = document.data.message.value;
		var reg=/^[a-zA-Z0-9\s\,\''\-]+$/;
		if(description == "")
		{
			document.getElementById("validmessage").innerHTML = "Enter Message";
			s=false;
		}
		else if(!reg.test(description))
		{
			document.getElementById("validmessage").innerHTML="Enter valid Message";
			s=false;
		}
			return (s);
	}
</script>
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
		<?php
		$vendor_id=$_SESSION['vendor_id'];
		include 'include/connect.php';
		$sql = $link->rawQuery('select * from contact where vendor_id=?',Array($vendor_id));
		if($link->count > 0)
		{
			foreach($sql as $s)
			{
				$banner_image=$s['contact_image'];
			}
		}
	?>
		<section class="page_header" style="background-image: url(../../../../Vendor-Panel/contact/<?php echo $banner_image; ?>);">
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
        
        <div class="contact_section bd-bottom padding">
		    <div class="container">
                <div class="col-sm-6 xs-padding">
                     <div class="contact_info">
                        <h2>Contact Information</h2>
                        <div class="page_border"></div>
                        <p><span>Name: </span><?php echo $s['contact_name']; ?><br><span>Call: </span><?php echo $s['phone_no1']; ?><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $s['phone_no2']; ?> <br><span>Email: </span><?php echo $s['email']; ?> <br> <span>Address: </span><?php echo $s['address']; ?></p>
                    </div>
                </div>
		       <div class="col-sm-6 xs-padding">
		            <div class="contact_form">
                        <h2>Send Us Message</h2>
                        <p>Please don’t hesitate to chat with me just drop a line.</p>
                        <form action="" method="post" id="data" name="data" class="form-horizontal">
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <input type="text" id="cname" name="cname" class="form-control" placeholder="Name">
									<span id="validname" style="color:red;"></span>
                                </div>
                                <div class="col-sm-6">
                                    <input type="email" id="email" name="email" class="form-control" placeholder="Email">
									<span id="validemail" style="color:red;"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <textarea id="message" name="message" cols="30" rows="5" class="form-control" placeholder="Message"></textarea>
									<span id="validmessage" style="color:red;"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <button id="submit" class="default_btn" type="submit" name="submit" onclick="return(validate());">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div><!-- /.contact_form -->
		       </div>
		    </div>
		</div><!-- /#contact_section -->
		
		<div id="google_map"></div><!-- /#google_map -->
		

       <?php
	      include 'include/footer.php';
	   ?>

		<a data-scroll href="#header" id="scroll-to-top"><i class="arrow_up"></i></a>
		<script type="text/javascript">
	var Setting = {
		'address'	: '<?php echo $s['address'];?>',
		'state'		: 'Gujarat',
		'city'		: 'Surat'
	};
	</script>
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
		<!-- vendor JS -->
		<script src="js/venobox.min.js"></script>
        <!-- ajaxchimp JS -->
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <!-- Slick Nav JS -->
        <script src="js/jquery.slicknav.min.js"></script>
        <!-- Google Map JS -->
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBPaBjLtRxnKGLbB17yzWAGPAyFWPexbJA&amp;callback=initMap" async defer></script>
        <!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBGm_weV-pxqGWuW567g78KhUd7n0p97RY"></script>-->
		<script src="js/map.js"></script>
        <!-- YTPlayer JS -->
	    <script src="js/jquery.mb.YTPlayer.min.js"></script>
		<!-- Contact JS -->
		<script src="js/contact.js"></script>
		<!-- Main JS -->
		<script src="js/main.js"></script>

        <!--<script>

        (function($){ "use strict";

            /*=========================================================================
                Google Map Settings
            =========================================================================*/
                         
            google.maps.event.addDomListener(window, 'load', init);

            function init() {

                var mapOptions = {
                    zoom: 11,
                    center: new google.maps.LatLng(40.6700, -73.9400), 
                    scrollwheel: false,
                    navigationControl: false,
                    mapTypeControl: false,
                    scaleControl: false,
                    draggable: false,
                    styles: [{"featureType":"administrative","elementType":"all","stylers":[{"saturation":"-100"}]},{"featureType":"administrative.province","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"landscape","elementType":"all","stylers":[{"saturation":-100},{"lightness":65},{"visibility":"on"}]},{"featureType":"poi","elementType":"all","stylers":[{"saturation":-100},{"lightness":"50"},{"visibility":"simplified"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":"-100"}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"all","stylers":[{"lightness":"30"}]},{"featureType":"road.local","elementType":"all","stylers":[{"lightness":"40"}]},{"featureType":"transit","elementType":"all","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#ffff00"},{"lightness":-25},{"saturation":-97}]},{"featureType":"water","elementType":"labels","stylers":[{"lightness":-25},{"saturation":-100}]}]
                };

                var mapElement = document.getElementById('google_map');

                var map = new google.maps.Map(mapElement, mapOptions);

                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(40.6700, -73.9400),
                    map: map,
                    title: 'Location!'
                });
            }

        })(jQuery);

        </script>-->
	<script type="text/javascript">
	
	var map;
	
	function initMap() {
        var myLatLng = {lat: -25.363, lng: 131.044};

        var map = new google.maps.Map(document.getElementById('google_map'), {
          zoom: 4,
          center: myLatLng
        });
		
		$.ajax({
		'url': 'https://maps.googleapis.com/maps/api/geocode/json?address='+Setting.address+Setting.city+Setting.state+'&key=AIzaSyA0C5etf1GVmL_ldVAichWwFFVcDfa1y_c',
		'method': 'GET',
		'dataType': 'json',
		'success': function(data) {
				var _location = data.results[0].geometry.location;
				var marker = new google.maps.Marker({
					position: _location,
					map: map,
					animation: google.maps.Animation.BOUNCE
				});
				
				map.setCenter(_location);
				map.setZoom(10);
			}
		});
	}
	
</script>
    </body>

</html>
<?php 
					if(isset($_REQUEST['err']) && $_REQUEST['err'] == 1)
					{
						?>
						<script>alert('Message has been sent successfully.');</script>
					<?php
					} 
					else if(isset($_REQUEST['err']) && $_REQUEST['err'] == 2)
					{
						?><script>alert('Message not sent Try again later.');</script>
					<?php
					}
				?>