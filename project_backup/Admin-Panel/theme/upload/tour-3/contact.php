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
<html>
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<?php
session_start();
include 'include/connect.php';
$vendor_id=$_SESSION['vendor_id'];
$sql = $link->rawQueryOne('select * from vendor where vendor_id=?',Array($vendor_id));
?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title><?php echo $sql['shop_name']; ?> | Contact</title>
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">

<!-- Google Font -->
<link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Karla:400,700italic,700,400italic' rel='stylesheet' type='text/css'>
<!-- Font Awesome -->
<link rel="stylesheet" href="css/font-awesome.min.css" />

<!-- Bootstrap -->
<link rel="stylesheet" href="css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="css/dropdown.css" />
<link rel="stylesheet" href="css/owl.carousel.css" />
<link rel="stylesheet" href="css/global.css" />
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/responsive.css" />
<link href="css/skin.less" rel="stylesheet/less">
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
<body ng-app="websiteApp">
<!-- Loader Starts here -->
<!-- Loader Ends here --> 
<!--Wrapper Section Start Here -->
<div id="wrapper" class="homepage common-page contact-us-page"> 
  <!--header Section Start Here -->
  <header id="header" class="header"> 
    <!-- primary header Start Here -->
    
    <!-- primary header Ends Here --> 
    <!-- main header Starts Here -->
    <?php
	  include 'include/header.php';
	?>
    <!-- main header Ends Here --> 
  </header>
  <!--header Section ends Here --> 
  <!--banner Section starts Here -->
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
  <div class="banner service-banner spacetop">
    <div class="banner-image-plane parallax" style="background-image: url(../../../../Vendor-Panel/contact/<?php echo $banner_image; ?>)"> 
	</div>
    
  </div>
  <!--banner Section ends Here --> 
  <!--Section area starts Here -->
  <section id="section"> 
    <!--Section box starts Here -->
    <div class="section">
      <div class="contact-form">
        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-sm-6">
              <div class="heading "> <span>our</span>
                <h3>contact form</h3>
              </div>
              <div class="contact-form-box " ng-controller="FormController">
                <form name="data" method="post" action="">
                  <div class="row">
                    <input id="cname" name="cname" class="contact-name" type="text" placeholder="Name*" ng-model="formData.name" style="margin-bottom:00px;">
					<span id="validname" style="color:red;"></span>
                    <input id="email" name="email" class="contact-mail" type="text" placeholder="Email*" ng-model="formData.email" style="margin-bottom:00px;margin-top:20px;">
					<span id="validemail" style="color:red;"></span>
                    <input id="subject" name="subject" class="contact-subject" type="text" placeholder="Subject*" ng-model="formData.subject" style="margin-bottom:00px;margin-top:20px;">
					<span id="validsub" style="color:red;"></span>
                    <textarea placeholder="Comment*" id="message" name="message" ng-model="formData.message" style="margin-bottom:00px;margin-top:20px;"></textarea>
					<span id="validmessage" style="color:red;"></span>
                    <!--<input id="submit" class="comment-submit qoute-sub" type="button"  value="submit">-->
                    <button type="submit" class="comment-submit qoute-sub" ng-disabled="submitButtonDisabled" name="submit" onclick="return(validate());">Submit</button>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6">
              <div class="map-box " id="map-box"> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Section box ends Here --> 
  </section>
  <!--Section area ends Here --> 
  <!--Footer area starts Here -->
  <?php
    include 'include/footer.php';
  ?>
  <!--Footer area ends Here --> 
</div>
<!--Wrapper Section ends Here --> 
<script type="text/javascript">
	var Setting = {
		'address'	: '<?php echo $s['address'];?>',
		'state'		: 'Gujarat',
		'city'		: 'Surat'
	};
	</script>
<script data-cfasync="false" src="js/email-decode.min.js"></script>
<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script> 
<script src="js/angular.js"></script> 
<script type="text/javascript" src="js/app.js"></script> 
<script type="text/javascript" src="js/less.js"></script> 
<script type="text/javascript" src="js/owl.carousel.js"></script> 
<script type="text/javascript" src="js/parallax.js"></script> 
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBPaBjLtRxnKGLbB17yzWAGPAyFWPexbJA&amp;callback=initMap" async defer></script> 
<script type="text/javascript" src="js/gmap.js"></script> 
<script type="text/javascript" src="js/vailidation.js"></script> 
<script src="js/script.js" type="text/javascript"></script> 
<script type="text/javascript" src="js/site.js"></script> 

<!-- Switcher Js --> 
<script src="js/style.switcher.js"></script> 
<script src="js/jquery.cookie.js"></script> 
<!-- Switcher Js -->
<script type="text/javascript">
	
	var map;
	
	function initMap() {
        var myLatLng = {lat: -25.363, lng: 131.044};

        var map = new google.maps.Map(document.getElementById('map-box'), {
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