<?php
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
									
										<p>Dear Admin,</p></br>

					<p style='margin:0px;'>Contact Name: ".$name." </p></br>
					<p>Contact Person email : ".$email."</p></br>
					<p>Contact Person message : ".$message."</p></br>
					
					<p>With regards,</p></br>
					<p style='margin:0px;'>".$name."</p></br>

				</body>
			</html>";
				$mail->SetFrom($email,$name);
				$mail->Subject = "Contact for Quick Search";
				
				$mail->MsgHTML($var);
				
				$sql = $link->rawQueryOne('select * from admin where admin_name=?',Array("smit"));
				if($link->count > 0)
				{
					$admin_mail=$sql['admin_email'];
				}
				$mail->AddAddress($admin_mail);

				if($mail->Send())
				{
					echo "<script>window.location.replace('contact.php?e=1');</script>";
				}
				else
				{
				    echo "<script>window.location.replace('contact.php?e=2');</script>";
				}
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quick Search</title>
    <link href="css/font.css" rel="stylesheet">

    <!-- inject:css-->
    <link rel="stylesheet" href="css/plugin.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- endinject -->

    <link rel="icon" type="image/png" sizes="32x32" href="img/fevicon.png">
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
		
		
	function valid()
	{
		var s=true;
		
		document.getElementById("validcpass").innerHTML = "";
		document.getElementById("validnpass").innerHTML = "";
		document.getElementById("validrpass").innerHTML = "";
		
		var cpass = document.changepass.cpassword.value;
		var reg=/^[a-zA-Z0-9]+$/;
		if(cpass == "")
		{
			document.getElementById("validcpass").innerHTML = "Enter password";
			s=false;
		}
		
		var rpass = document.changepass.rpassword.value;
		var reg=/^[a-zA-Z0-9]+$/;
		if(rpass == "")
		{
			document.getElementById("validrpass").innerHTML = "Enter password";
			s=false;
		}
		else if(!reg.test(rpass))
		{
			document.getElementById("validrpass").innerHTML="Enter valid password";
			s=false;
		}
		
		var npass = document.changepass.npassword.value;
		var reg=/^[a-zA-Z0-9]+$/;
		if(npass == "")
		{
			document.getElementById("validnpass").innerHTML = "Enter password";
			s=false;
		}
		else if(!reg.test(npass))
		{
			document.getElementById("validnpass").innerHTML="Enter valid password";
			s=false;
		}
	
		return (s);
	}
	</script>
</head>
<body>
  <div class="modal fade" id="changepass_modal" tabindex="-1" role="dialog" aria-labelledby="signup_modal_label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="signup_modal_label"><i class="la la-lock"></i> Change Password</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="#" method="post" id="changepass" name="changepass" enctype="multipart/form-data">
						<input type="password" class="form-control" placeholder="Current Password" name="cpassword" id="cpassword" style="margin-bottom: 00px;">
						<span id="validcpass" style="color:red;"></span>
                        <input type="password" class="form-control" placeholder="New Password" name="npassword" id="npassword" style="margin-bottom: 00px;margin-top: 20px;">
						<span id="validnpass" style="color:red;"></span>
                        <input type="password" class="form-control" placeholder="Reset Password" name="rpassword" id="rpassword" style="margin-bottom: 00px;margin-top: 20px;">
						<span id="validrpass" style="color:red;"></span>
						<p id="rerror"></p>
                        <button type="submit" class="btn btn-block btn-lg btn-gradient btn-gradient-two" name="submit" onclick="return(valid());" style="margin-top: 25px;">Submit</button>
                    </form>
				</div>
            </div>
        </div>
</div>   
    
    <section class="header-breadcrumb bgimage overlay overlay--dark">
        <div class="bg_image_holder"><img src="img/breadcrumb1.jpg" alt=""></div>
        <div class="mainmenu-wrapper">
    <div class="menu-area menu1 menu--light">
        <div class="top-menu-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="menu-fullwidth">
                            <div class="logo-wrapper order-lg-0 order-sm-1">
                                <div class="logo logo-top">
                                    <a href="index.php"><img src="img/search.png" alt="logo image" class="img-fluid" style="height: 40px;"></a>
                                </div>
                            </div><!-- ends: .logo-wrapper -->

                            
    <div class="menu-container order-lg-1 order-sm-0">
        <div class="d_menu">
            <?php
			include 'include/header.php';
			?>
        </div>
    </div>


                            <?php
								session_start();
								if(!isset($_SESSION['user_id']))
								{
									include 'include/register.php';
								}
								if(isset($_SESSION['user_id']))
								{
									include 'include/login.php';
								}
							?>
                               
                        </div>
                    </div>
                </div>
                <!-- end /.row -->
            </div>
            <!-- end /.container -->
        </div>
        <!-- end  -->
    </div>

        </div><!-- ends: .mainmenu-wrapper -->

        <div class="breadcrumb-wrapper content_above">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h1 class="page-title">Contact Us</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">All Listings</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div><!-- ends: .breadcrumb-wrapper -->

    </section>


    <section class="contact-area section-bg p-top-100 p-bottom-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="widget atbd_widget widget-card contact-block">
                        <div class="atbd_widget_title">
                            <h4><span class="la la-envelope"></span> Contact Form</h4>
                        </div><!-- ends: .atbd_widget_title -->
                        <div class="atbdp-widget-listing-contact contact-form">
                            <form class="form-vertical" role="form" method="post" name="data" id="data" action="">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="cname" placeholder="Name" name="cname">
									<span id="validname" style="color:red;"></span>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="email" placeholder="Email" name="email">
									<span id="validemail" style="color:red;"></span>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" id="message" rows="6" placeholder="Message" name="message"></textarea>
									<span id="validmessage" style="color:red;"></span>
                                </div>
                                <button type="submit" class="btn btn-gradient btn-gradient-one btn-block" name="submit" onclick="return(validate());">Send Message</button>
                            </form>
                        </div><!-- ends: .atbdp-widget-listing-contact -->
                    </div><!-- ends: .widget -->
                </div><!-- ends: .col-lg-8 -->
                <div class="col-lg-4">
                    <div class="widget atbd_widget widget-card">
                        <div class="atbd_widget_title">
                            <h4><span class="la la-phone"></span>Contact Info</h4>
                        </div><!-- ends: .atbd_widget_title -->
                        <div class="widget-body atbd_author_info_widget">

                            
    <div class="atbd_widget_contact_info">
        <ul>
            <li>
                <span class="la la-map-marker"></span>
                <span class="atbd_info">208,SNS Arista,opp Safal Square,besides prime shoppers,Vesu,Surat</span>
            </li>
            <li>
                <span class="la la-phone"></span>
                <span class="atbd_info">
095105 37693</span>
            </li>
            <li>
                <span class="la la-envelope"></span>
                <span class="atbd_info">credencetech@gmail.in</span>
            </li>
            <li>
                <span class="la la-globe"></span>
                <a href="#" class="atbd_info">www.credencetech.in</a>
            </li>
        </ul>
    </div><!-- ends: .atbd_widget_contact_info -->


                            <div class="atbd_social_wrap">
                                <p><a href="https://www.facebook.com/credencetech" target="_blank"><span class="fab fa-facebook-f"></span></a></p>
                                <p><a href="#"><span class="fab fa-twitter"></span></a></p>
                                <p><a href="#"><span class="fab fa-google-plus-g"></span></a></p>
                                <p><a href="#"><span class="fab fa-linkedin-in"></span></a></p>
                                <p><a href="#"><span class="fab fa-dribbble"></span></a></p>
                            </div><!-- ends: .atbd_social_wrap -->
                        </div><!-- ends: .widget-body -->
                    </div><!-- ends: .widget -->
                </div><!-- ends: .col-lg-4 -->
            </div>
        </div>
    </section><!-- ends: .contact-area -->

    <?php
	 include 'include/footer.php';
	?>
	
     <script src="js/extra.js"></script>
     <!-- inject:js-->
     <script src="js/plugins.min.js"></script>
     <script src="js/script.min.js"></script>
	 <script>
	<?php
if(isset($_REQUEST['err']))
{
	?>
	$('#login_modal').modal('show');
	<?php
}
?>
$("#hidelogopenreg").click( function()
         {
            $('#login_modal').modal('hide')
            $('#signup_modal').modal('show')
         }
 );
 
 $("#sample").click( function()
         {
            $('#login_modal').modal('show')
            $('#signup_modal').modal('hide')
         }
 );
 
 $("#changepass").submit(function(e) {
		
		$.ajax({
		   type: "POST",
		   url: "include/password_code.php",
		   data: $("#changepass").serialize(), // serializes the form's elements.
		   success: function(data)
		   {
				$("#rerror").html(data);
				if(data == 'Password is successfully changed.')
				{
					$("#rerror").css("color","green");
					$("#cpassword").val("");
					$("#npassword").val("");
					$("#rpassword").val("");
				}
				else
				{
					$("#rerror").css("color","red");
				}
		   }
		});
		e.preventDefault(); // avoid to execute the actual submit of the form.
	});
	
	function check(rpass)
	{
		var npass = $("#npassword").val();
		if(npass == rpass)
		{
			$("#rerror").html("");
			$("#submit").attr("disabled",false);
		}
		else
		{
			$("#rerror").html("New password and Repeat password must be same!");
			$("#rerror").css("color","red");
			$("#submit").attr("disabled",false);
		}
	}

</script>
     <!-- endinject-->
</body>
</html>
<?php 
					if(isset($_REQUEST['e']) && $_REQUEST['e'] == 1)
					{
						?>
						<script>alert('Message has been sent successfully.');</script>
					<?php
					} 
					else if(isset($_REQUEST['e']) && $_REQUEST['e'] == 2)
					{
						?><script>alert('Message not sent Try again later.');</script>
					<?php
					}
				?>