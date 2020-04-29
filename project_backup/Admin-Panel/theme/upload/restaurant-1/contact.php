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
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php
session_start();
include 'include/connect.php';
$vendor_id=$_SESSION['vendor_id'];
$sql = $link->rawQueryOne('select * from vendor where vendor_id=?',Array($vendor_id));
?>
	<title><?php echo $sql['shop_name']; ?> | Contact</title>
	<!-- ==================Start Css Link===================== -->
	<!-- favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
	<!-- googlefonts -->
	<link href="https://fonts.googleapis.com/css?family=Oswald:400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700" rel="stylesheet">
	<!-- bootstrap css link -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<!-- fontawesome css link -->
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<!-- slick carosel css -->
	<link href="css/slick.css" rel="stylesheet">
	<!-- Slick carosel theme -->
	<link href="css/slick-theme.css" rel="stylesheet">
	<!-- animated css -->
	<link href="css/animate.css" rel="stylesheet">
	<!-- element css -->
	<link href="css/element.css" rel="stylesheet">
	<!-- mean menu css -->
	<link href="css/meanmenu.css" rel="stylesheet">
	<!-- main style link -->
	<link href="css/style.css" rel="stylesheet">
	<!-- responsive css links -->
	<link href="css/responsive.css" rel="stylesheet">
	<!-- ==================End Css Link===================== -->


	<!--[if lt IE 9]>
<script src="http://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="http://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
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
	<!--
=========================================================
		Header Area Start
==========================================================
-->
	<?php
	 // session_start();
	  include 'include/header.php';
	?>
	<!--
=========================================================
		Header Area End
==========================================================
-->
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
	<div class="grnbn-bread-cum white-clr-all white-clr-a" style="background-image: url(../../../../Vendor-Panel/contact/<?php echo $banner_image; ?>);">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h4 class="bred-p">Contact <span>Us</span></h4>
				</div>
			</div>
		</div>
	</div>
	<!--
=========================================================
		contact page contact
==========================================================
-->
	<div class="grnbrn-contact-page-contact sec-pad">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div id="map"></div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-5 col-sm-5 col-xs-12">
					<div class="con-heading mb-30">
						<h4>Contact <span>info</span></h4>
					</div>
					<!-- end con heading -->
					<ul class="mp0-ln con-ul">
						<li>
							<i class="fa fa-user" aria-hidden="true"></i>
							<h5> Contact Person</h5>
							<p><p><?php echo $s['contact_name']; ?></p></p>
						</li>
						<li>
							<i class="fa fa-phone" aria-hidden="true"></i>
							<h5> Phone</h5>
							<p><?php echo $s['phone_no1']; ?></p>
							<p><?php echo $s['phone_no2']; ?></p>
						</li>
						<li>
							<i class="fa fa-map-marker" aria-hidden="true"></i>
							<h5> Address</h5>
							<p><p><?php echo $s['address']; ?></p></p>
						</li>
						<li>
							<i class="fa fa-envelope-o"></i>
							<h5> Email</h5>
							<p><p><?php echo $s['email']; ?></p></p>
						</li>

					</ul>
				</div>
				<div class="col-md-6 col-md-offset-1 col-sm-7 col-xs-12">
					<div class="con-heading mb-30">
						<h4>Contact <span>Form</span></h4>
					</div>
					<!-- end con heading -->
					<form action="" method="post" name="data" id="data">
					<div class="row">
						<!-- single input end -->
						<div class="col-md-12 col-sm-12 col-xs-12 mb-30">
							<div class="single-input">
								<input type="text" placeholder="your Name" id="cname" name="cname">
								<span id="validname" style="color:red;"></span>
							</div>
						</div>
						<!-- single input end -->
					</div>
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12 mb-30">
							<div class="single-input">
								<input type="text" placeholder="Email" id="email" name="email">
								<span id="validemail" style="color:red;"></span>
							</div>
						</div>
						<!-- single input end -->
					</div>
					<div class="row">
						<div class="form-group col-md-12 col-sm-12 col-xs-12 mb-30">
							<div class="single-input">
								<textarea placeholder="Write your meassage" id="message" name="message"></textarea>
								<span id="validmessage" style="color:red;"></span>
							</div>
						</div>
						<!-- single input end -->
					</div>
					<div class="col-md-12 text-center mbn-n mn-0">
						<button type="submit" name="submit" onclick="return(validate());" style="background: #1f944ee0;color: white;height: 40px;width: 200px;">Send Message</button>
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!--
=========================================================
		contact page contact
==========================================================
-->
	<!--
=========================================================
		Footer Top Area Start Form Here
==========================================================
-->
	<?php
	  include 'include/footer.php';
	?>
	<!--
=========================================================
		Footer Top Area Start Form Here
==========================================================
-->
	<!-- main jquery  -->
	<script type="text/javascript">
	var Setting = {
		'address'	: '<?php echo $s['address'];?>',
		'state'		: 'Gujarat',
		'city'		: 'Surat'
	};
	</script>
	<script src="js/jquery.min.js"></script>
	<!-- bootstrap jquery  -->
	<script src="js/bootstrap.min.js"></script>
	<!-- jquery paralax -->
	<script src="js/jquery.parallax-1.1.3.js"></script>
	<!-- slick carosel js -->
	<script src="js/slick.min.js"></script>
	<!-- jquery sticky js -->
	<script src="js/sticky-header.js"></script>
	<!-- jquery couner up -->
	<script src="js/jquery.counterup.min.js"></script>
	<!-- jquery counter up animation -->
	<script src="js/waypoints.min.js"></script>
	<!-- map api -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBPaBjLtRxnKGLbB17yzWAGPAyFWPexbJA&amp;callback=initMap" async defer></script>
	<!-- map js -->
	<script src="js/map.js"></script>
	<!-- mean menu js mtb-30 -->
	<script src="js/jquery.meanmenu.min.js"></script>
	<!-- scroll up js -->
	<script src="js/jquery.scrollUp.min.js"></script>
	<!-- custom scripts -->
	<script src="js/main.js"></script>
	<script type="text/javascript">
	
	var map;
	
	function initMap() {
        var myLatLng = {lat: -25.363, lng: 131.044};

        var map = new google.maps.Map(document.getElementById('map'), {
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
