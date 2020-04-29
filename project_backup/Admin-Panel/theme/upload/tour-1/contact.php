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
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title><?php echo $sql['shop_name']; ?> | Contact Us</title>
	<link rel="icon" type="image/png" href="images/favicon.png">
	<!--Main style css-->
	<link rel="stylesheet" href="css/style.css"> 
	<!--Responsive style css-->
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
	<!-- main header -->
	<?php
		include 'include/header.php';
	?>
	
	<!--Page headet title-->
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
	<div class="header_title pade_bg2 d-flex justify_content_center align_items_center bg_overlay1" style="background-image:url(../../../../Vendor-Panel/contact/<?php echo $banner_image; ?>);">
		
	</div><!--END Page headet title-->
	
	
	<!--type page wrapper-->
	<div class="type_page_wrapper section_padding_60_60">

		<!--Start container-->
		<div class="container">
			
			<div class="row">
				<div class="image-column col-md-4 col-sm-12 col-xs-12">
					<ul class="card_detail_info">
						<li><strong>Phone:</strong> 
							<span >
								<i class="fas fa-mobile-alt"></i> <?php echo $s['phone_no1'];?><br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-mobile-alt"></i> <?php echo $s['phone_no2'];?>
							</span>
						</li>
						<li><strong>E-mail:</strong> 
							<span class="datelink">
								<?php echo $s['email']; ?>
							</span>
						</li>
						<li><strong>Address:</strong> 
							<span class="datelink">
								<?php echo $s['address']; ?>
							</span>
						</li>
					</ul>
				</div>
				<div class="info-column col-md-8 col-sm-12 col-xs-12">
					<form class="contact-form" method="post" action="#" name="data" id="data">
						<div class="row columns_padding_5">

							<div class="col-xs-12 col-md-6 ">
								<div class="filed_form">
									<input type="text" value="" name="cname" id="cname" class="form-control" placeholder="Name">
									<span id="validname" style="color:red;"></span>
								</div>
							</div>
							<div class="col-xs-12 col-md-6">
								<div class="filed_form">
									<input type="tel" value="" name="cno" class="form-control" id="cno" placeholder="Phone">
									<span id="validcontactno" style="color:red;"></span>
								</div>
							</div>
							<div class="col-xs-12 col-md-6">
								<div class="filed_form">
									<input type="email" value="" name="email" id="email" class="form-control" placeholder="Email">
									<span id="validemail" style="color:red;"></span>
								</div>
							</div>
							<div class="col-xs-12 col-md-6">
								<div class="filed_form"> 
									<input type="text" value="" name="subject" id="subject" class="form-control" placeholder="Topic">
									<span id="validsub" style="color:red;"></span>
								</div>
							</div>
							<div class="col-xs-12 col-md-12">
								<div class="filed_form">
									<textarea rows="4" cols="45" name="message" id="message" placeholder="Message"></textarea>
									<span id="validmessage" style="color:red;"></span>
								</div>
							</div>

						</div>
						<div class="contact_form_submit">
							<button type="submit" name="submit" class="sv_btn sv_btn_default" onclick="return(validate());">Submit</button>
						</div>
					</form>
					
				</div>
			</div>
		</div><!--END Start container-->
		
	</div><!--END type page wrapper-->
	
	
	<!--related card slider-->
	

	
	<!-- main_footer -->
	<?php
		include 'include/footer.php';
	?>
	<!-- END main_footer -->
	
	<!-- JS -->
	<!--jQuery 1.12.4 google link-->
	<script src="js/jquery.min.js"></script>
	<!--Bootstrap 4.1.0-->
	<script src="js/bootstrap.min.js"></script>
	<!--jquery.magnific-popup-->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<!--OwlCarousel2-2.3.4-->
	<script src="js/owl.carousel.min.js"></script>
	<!--Custom js-->
	<script src="js/custom.js"></script>

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