<?php
$current="5";
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
	$subject=$_POST['subject'];
	
	$var = "<html>
						
									<body>
									
										<p>Dear Vendor,</p></br>

					<p style='margin:0px;'>Contact Name: ".$name." </p></br>
					<p>Contact Person email : ".$email."</p></br>
					<p>Contact Subject : ".$subject."</p></br>
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
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php
session_start();
include 'include/connect.php';
$vendor_id=$_SESSION['vendor_id'];
$sql = $link->rawQueryOne('select * from vendor where vendor_id=?',Array($vendor_id));
?>
	<title>Contact || <?php echo $sql['shop_name']; ?></title>

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
<script>
	function validate()
	{
		var s=true;
		document.getElementById("validname").innerHTML = "";
		document.getElementById("validemail").innerHTML = "";
		document.getElementById("validmessage").innerHTML = "";
		document.getElementById("validsub").innerHTML = "";
		
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
		
		var validsub = document.data.subject.value;
		var reg=/^[a-zA-Z ]+$/;
		if(validsub == "")
		{
			document.getElementById("validsub").innerHTML = "Enter Subject";
			s=false;
		}
		else if(!reg.test(validsub))
		{
			document.getElementById("validsub").innerHTML="Enter valid Subject";
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

<!--Start header-search  area-->
<!--End header-search  area-->  

<!--Start header area-->
<?php
  include 'include/header.php';
?>
<!--End header area-->

<!--Start breadcrumb area-->  
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
<section class="breadcrumb-area" style="background-image: url(../../../../Vendor-Panel/contact/<?php echo $banner_image; ?>);">
	<div class="container-fluid text-center">
		<h1>Contact Us</h1>
		<div class="breadcrumb-bottom">
            
		</div>
	</div>
</section>
<!--End breadcrumb area-->

<!--Start contact v1 area-->
<section class="contact-v2-area">
    <div class="container">
        <div class="row">
           
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="contact-info pd-bottom">
                   
                    <ul class="contact-address">
		
                        <li>
                            <div class="icon-holder">
                                <span class="flaticon-building"></span>
                            </div>
                            <div class="text-holder">
                                <p><?php echo $s['address']; ?></p>
                            </div>
                        </li>
                        <li>
                            <div class="icon-holder">
                                <span class="flaticon-technology"></span>
                            </div>
                            <div class="text-holder">
                                <p><?php echo $s['phone_no1']; ?></p>
                            </div>
                        </li>
                        <li>
                            <div class="icon-holder">
                                <span class="flaticon-new-email-outline"></span>
                            </div>
                            <div class="text-holder">
                                <p><?php echo $s['email']; ?></p>
                            </div>
                        </li>
                        
                    </ul>
                </div>
            </div>
            <div class="col-lg-8 col-md-6 col-sm-12 col-xs-12">
                <div class="google-map-area">
                    <div class="google-map" id="contact-v2-google-map">

                    </div>
                </div>
            </div> 
        </div>
    </div>
</section>                                                                     
<!--End contact v1 area-->
 
<!--Start contact v2 form area-->
<section class="contact-v2-form-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="contact-v2-form">
                    <div class="sec-title text-center">
                        <h2>Send Your Message</h2>
                    </div>
                    <form id="data" name="data" action="" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="cname" value="" placeholder="Your Name *" id="cname" style="margin-bottom:00px;">
								<span id="validname" style="color:red;"></span>
                                <input type="email" name="email" value="" placeholder="Your Mail *" id="email" style="margin-bottom:00px;margin-top:20px;">
								<span id="validemail" style="color:red;"></span>
                                <input type="text" name="subject" value="" placeholder="Subject *" id="subject" style="margin-bottom:00px;margin-top:20px;">
								<span id="validsub" style="color:red;"></span>
                            </div>
                            <div class="col-md-6">
                                <textarea name="message" placeholder="Your Message.." id="message" style="margin-bottom:00px;"></textarea>
								<span id="validmessage" style="color:red;"></span>
                                <input id="form_botcheck" name="form_botcheck" type="hidden" value="">
                                <button class="thm-btn bg-cl-1" type="submit" name="submit" onclick="return(validate());" style="margin-top:20px;">send message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>                                                                                           
<!--End contact v2 form area--> 
                                               
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
<script type="text/javascript">
	var Setting = {
		'address'	: '<?php echo $s['address'];?>',
		'state'		: 'Gujarat',
		'city'		: 'Surat'
	};
	</script>
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
<script src="js/validation.js"></script>
<!-- mixit up -->
<script src="js/jquery.mixitup.min.js"></script>
<!-- easing -->
<script src="js/jquery.easing.min.js"></script>
<!-- gmap helper -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBPaBjLtRxnKGLbB17yzWAGPAyFWPexbJA&amp;callback=initMap" async defer></script>
<!--gmap script-->
<script src="js/map.js"></script>
<script src="js/map-helper-2.js"></script>
<!-- video responsive script -->
<script src="js/jquery.fitvids.js"></script>
<!-- jQuery ui js -->
<script src="js/jquery-ui.js"></script>
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
<script type="text/javascript">
	
	var map;
	
	function initMap() {
        var myLatLng = {lat: -25.363, lng: 131.044};

        var map = new google.maps.Map(document.getElementById('contact-v2-google-map'), {
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