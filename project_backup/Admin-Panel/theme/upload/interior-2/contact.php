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
<html>
<head>
<meta charset="utf-8">
<?php
session_start();
include 'include/connect.php';
$vendor_id=$_SESSION['vendor_id'];
$sql = $link->rawQueryOne('select * from vendor where vendor_id=?',Array($vendor_id));
?>
<title><?php echo $sql['shop_name']; ?> | Contact Us </title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">

<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
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

<!-- Preloader -->

<div class="page-wrapper">
 	
 	
    <!-- Main Header-->
    <?php
	  include 'include/header.php';
	?>
    <!--End Main Header -->
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
    <!--Page Title-->
    <section class="page-title" style="background-image:url(../../../../Vendor-Panel/contact/<?php echo $banner_image; ?>)">
        <div class="auto-container">
            <h1>Contact</h1>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Contact Form Section -->
    <section class="contact-form-section sp-one">
        <div class="auto-container">
            <div class="wrapper-box">
                <div class="contact-form-area">
                    <div class="sec-title mb-50 text-center">
                        <div class="sub-title">Contact with us</div>
                        <h1>Do you have any question? <br>write us a message</h1>
                    </div>
                    <!-- Contact Form -->
                    <div class="contact-form">
                        <div id="form-messages"></div>
                        <form method="post" action="" id="data" name="data">
                            <div class="row clearfix">
                                
                                <div class="col-lg-12 form-group field">
                                    <input type="text" id="cname" name="cname" placeholder="Your Name">
									<span id="validname" style="color:red;"></span>
                                </div>
                                
                                <div class="col-lg-12 form-group field">
                                    <input type="email" id="email" name="email" placeholder="Email Address">
									<span id="validemail" style="color:red;"></span>
                                </div>
                                
                                <div class="col-lg-12 form-group field">
                                    <textarea id="message" name="message" placeholder="Write Message"></textarea>
									<span id="validmessage" style="color:red;"></span>
                                </div>
                            
                                <div class="col-lg-12 form-group text-center field">
                                    <button type="submit" name="submit" class="theme-btn btn-style-four border-anim-left" onclick="return(validate());"><span class="border-anim-right"></span>SEND MESSAGE</button>
                                </div>
                                
                            </div>
                        </form>
                            
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Info Section -->
    <section class="contact-info-section sp-two">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-3 col-md-6 contact-info-block">
                    <div class="inner-box">
                        <div class="wrapper-box">
                            <h3>Contact Person</h3>
                            <ul>
                                <li><?php echo $s['contact_name']; ?></li>
                            </ul>
                        </div>                            
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 contact-info-block">
                    <div class="inner-box">
                        <div class="wrapper-box">
                            <h3>Phone</h3>
                            <ul>
                                <li><?php echo $s['phone_no1']; ?></li>
                                <li><?php echo $s['phone_no2']; ?></li>
                            </ul>
                        </div>
                            
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 contact-info-block">
                    <div class="inner-box">
                        <div class="wrapper-box">
                            <h3>Email</h3>
                            <ul>
                                <li><?php echo $s['email']; ?></li>
                            </ul>
                        </div>                            
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 contact-info-block">
                    <div class="inner-box">
                        <div class="wrapper-box">
                            <h3>Address</h3>
                            <ul>
                                <li><?php echo $s['address']; ?></li>
                            </ul>
                        </div>                            
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Map Section -->
    <section class="contact-map-section">
        <div class="outer-container">
            <div class="map-outer">
                <div class="map-canvas" id="map-canvas">
                </div>
            </div>
        </div>
    </section>
    <!-- End Map Section -->
    


    <!-- Main Footer -->
    <?php
	 include 'include/footer.php';
	?>
    <!-- End Main Footer -->

</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fas fa-angle-up"></span></div>
<script type="text/javascript">
	var Setting = {
		'address'	: '<?php echo $s['address'];?>',
		'state'		: 'Gujarat',
		'city'		: 'Surat'
	};
	</script>
<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/pagenav.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.paroller.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/appear.js"></script>
<script src="js/swiper.min.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/element-in-view.js"></script>
<script src="js/timeline.min.js"></script>
<script src="js/TweenMax.min.js"></script>
<script src="js/jqBootstrapValidation.js"></script>
<script src="js/script.js"></script>

<!--Google Map APi Key-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBPaBjLtRxnKGLbB17yzWAGPAyFWPexbJA&amp;callback=initMap" async defer></script>
<script src="js/map.js"></script>
<!--End Google Map APi-->
<script type="text/javascript">
	
	var map;
	
	function initMap() {
        var myLatLng = {lat: -25.363, lng: 131.044};

        var map = new google.maps.Map(document.getElementById('map-canvas'), {
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

