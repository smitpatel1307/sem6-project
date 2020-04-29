<!DOCTYPE html>
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
	$cno=$_POST['cno'];
	
	$var = "<html>
						
									<body>
									
										<p>Dear Vendor,</p></br>

					<p style='margin:0px;'>Contact Name: ".$name." </p></br>
					<p>Contact Person email : ".$email."</p></br>
					<p>Contact No : ".$cno."</p></br>
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
    <title> <?php echo $sql['shop_name']; ?> | Contact </title>
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
<script>
	function validate()
	{
		var s=true;
		document.getElementById("validname").innerHTML = "";
		document.getElementById("validemail").innerHTML = "";
		document.getElementById("validmessage").innerHTML = "";
		document.getElementById("validsub").innerHTML = "";
		document.getElementById("validcontactno").innerHTML = "";
		
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
		
		var contactno = document.data.cno.value;
		var reg=/^[6789]{1}[0-9]{9}$/;
		if(contactno == "")
		{
			document.getElementById("validcontactno").innerHTML = "Enter Vendor Contact NO";
			s=false;
		}
		else if(!reg.test(contactno))
		{
			document.getElementById("validcontactno").innerHTML="Enter valid Vendor Contact NO";
			s=false;
		}
		return (s);
	}
</script>
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
		$sql = $link->rawQuery('select * from contact where vendor_id=?',Array($vendor_id));
		if($link->count > 0)
		{
			foreach($sql as $s)
			{
				$banner_image=$s['contact_image'];
			}
		}
	?>
<section class="breadcrumb-area extra" style="background-image: url(../../../../Vendor-Panel/contact/<?php echo $banner_image; ?>)">
    
</section>
<!-- breadcrumb area end -->

<!-- contact page content area start -->
<section class="conteact-page-content-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title"><!-- section title -->
                    <h2 class="title"><span class="base-color">Get</span> In Touch</h2>
                    
                </div><!-- //. section title -->
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="contact-form-outer"><!-- contact form outer -->
                    <form action="" id="data" name="data" method="post" class="contact-form">
                       <div class="row">
                           <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" id="cname" name="cname" class="form-control" placeholder="Contact Name">
									<span id="validname" style="color:red;"></span>
                                </div>
                                <div class="form-group">
                                    <input type="text" id="email" name="email" class="form-control" placeholder="Email">
									<span id="validemail" style="color:red;"></span>
                                </div>
                           </div>
                           <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" id="cno" name="cno" class="form-control" placeholder="Phone No">
									<span id="validcontactno" style="color:red;"></span>
                                </div>
                                <div class="form-group">
                                    <input type="text" id="subject" name="subject" class="form-control" placeholder="Subject">
									<span id="validsub" style="color:red;"></span>
                                </div>
                           </div>
                           <div class="col-lg-12">
                               <div class="form-group textarea">
                                   <textarea class="form-control" id="message" name="message" cols="30" placeholder="Enter Your Message" rows="5"></textarea>
								   <span id="validmessage" style="color:red;"></span>
                               </div>
                               <button class="submit-btn" type="submit" name="submit" onclick="return(validate());">Send Message</button>
                           </div>
                       </div>
                    </form>
                </div><!-- //. contact form outer -->
            </div>
        </div>
    </div>
</section>
<!-- contact page content area end -->

<div class="map-marker">
    <div id="map"></div>
</div>

<!-- footer area start -->
<?php
  include 'include/footer.php';
?>
<!-- footer area end -->


<div class="back-to-top base-color-2">
        <i class="fas fa-rocket"></i>
</div>

    <!-- jquery -->
	<script type="text/javascript">
	var Setting = {
		'address'	: '<?php echo $s['address'];?>',
		'state'		: 'Gujarat',
		'city'		: 'Surat'
	};
	</script>
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
    <!-- contact js-->
    <script src="js/contact.js"></script>
    <!-- google map api -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBqFuLx8S7A8eianoUhkYMeXpGPvsXp1NM&amp;callback=initMap" async defer></script>
    <!-- google map activate js -->
   
    <!-- counterup js-->
    <script src="js/jquery.counterup.min.js"></script>
    <!-- main -->
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