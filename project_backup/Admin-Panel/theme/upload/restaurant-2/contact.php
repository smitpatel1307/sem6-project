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
include 'include/connect.php';
$vendor_id=$_SESSION['vendor_id'];
$sql = $link->rawQueryOne('select * from vendor where vendor_id=?',Array($vendor_id));
?>
    <title><?php echo $sql['shop_name']; ?> | Contact Us</title>

    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="images/site-icon-resturant.png">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.html">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.html">

    <!-- Custom Font
    ================================================== -->
    

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/plugins.min.css">
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
    <!-- Header
    ================================================== --> 
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
    <section class="restaurant-banner overlay-bg pd-t-175-b-90" style="background-image: url(../../../../Vendor-Panel/contact/<?php echo $banner_image; ?>)">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs citrus-theme text-center color-white">
                        <span class="first-item">
                            <a href="index.php">Home</a>
                        </span>
                        <span class="separator"><i class="fa fa-angle-right"></i></span>
                        <span class="last-item">Contact Us</span>
                    </div>
                </div><!--  /.col-12 -->
            </div><!--  /.row -->
        </div><!--  /.container -->
    </section><!--  /.restaurant-banner -->   

    <!-- Contact Content
    ================================================== -->
    <section class="contact-content pd-tb-90">
        <div class="container">
            <div class="row">
                <div class="col-md-7 text-center full-content">
                    <h2 class="section-title no-border">Contact Us</h2>
                    <div class="mrb-45"></div><!--  /.mrb -->
                </div><!--  /.col-md-7 -->
            </div><!--  /.row -->
            <div class="row">
                <div class="col-md-7">
                    <div class="contact-form-area">
                        <form action="#" method="post" id="data" class="contact-form round no-bg citrus-theme" name="data">
                            <div class="row">
                                <div class="col-12">
                                    <textarea id="message" name="message" class="bsm-textarea" cols="8" rows="40" placeholder="Your Message *" style="margin-bottom:00px;"></textarea>
									<span id="validmessage" style="color:red;"></span>
                                </div><!-- /.col-md-12 -->

                                <div class="clearfix"></div><!--  /.clearfix -->

                                <div class="col-12">
                                    <input id="cname" name="cname" type="text" class="validate" placeholder="Your Name *" style="margin-bottom:00px;margin-top:20px;">
									<span id="validname" style="color:red;"></span>
                                </div><!-- /.col-md-6 -->

                                <div class="clearfix"></div><!--  /.clearfix -->

                                <div class="col-md-12">
                                    <input id="email" name="email" type="email" class="validate" placeholder="Email *" style="margin-bottom:00px;margin-top:20px;">
									<span id="validemail" style="color:red;"></span>
                                </div><!-- /.col-md-12 -->

                                <div class="clearfix"></div><!--  /.clearfix -->

                                <div class="col-12 mrt-15">
                                    <button class="btn-contact" type="submit" name="submit" onclick="return(validate());">Submit Form</button>
                                </div><!-- /.col-md-12 -->
                            </div><!-- /.row -->
                        </form><!-- /.contact-form -->
                    </div>
                </div><!--  /.col-md-7 -->
                <div class="col-md-5">
                    <div class="contact-details-content v-2" >
					<div class="contact-list">
                            <p><i class="fa fa-user"></i><?php echo $s['contact_name']; ?></p>
                        </div>
                        <div class="contact-list">
                            <p><i class="fa fa-map-marker"></i><?php echo $s['address']; ?></p>
                        </div><!--  /.contact-list -->
                        <div class="contact-list">
                            <p><i class="fa fa-phone"></i><?php echo $s['phone_no1']; ?><br>
							 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $s['phone_no2']; ?></p>
                        </div><!--  /.contact-list -->
                        <div class="contact-list">
                            <p><i class="fa fa-envelope"></i><?php echo $s['email']; ?></p>
                        </div><!--  /.contact-list -->
                  
                    </div><!--  /.contact-details-content -->
                </div><!--  /.col-md-5 -->
            </div><!--  /.row -->
        </div><!--  /.container -->
    </section><!--  /.contact-content -->

    <!-- Google Maps
    ================================================== -->
    <div class="google-maps-content" style="width:100%;height:300px;">
        <div class="map-left-content" id="map" style="width:100%;height:300px;position:absolute;width:100%;">
            
        </div>
    </div>
    <!-- Footer
    ================================================== -->
    <?php
	  include 'include/footer.php';
	?>

    <!-- All The JS Files
    ================================================== --> 
	
    <script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/plugin.min.js"></script>
	<script src="js/isotope.pkgd.min.js"></script>
    <script src="js/jquery.hoverdir.js"></script>
    <script src="js/ajaxchimp.js"></script>
    <script src="js/litmus.min.js"></script><!-- main-js -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBPaBjLtRxnKGLbB17yzWAGPAyFWPexbJA&amp;callback=initMap" async defer></script>
	<!--<script src="js/map.js"></script>-->
    
	<script type="text/javascript">
	var Setting = {
		'address'	: '<?php echo $s['address'];?>',
		'state'		: 'Gujarat',
		'city'		: 'Surat'
	};
	
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