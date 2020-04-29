<?php
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

 	
		function randomPassword() 
		{
			$alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
			$pass = array(); //remember to declare $pass as an array
			$alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
			for ($i = 0; $i < 8; $i++) 
			{
				$n = rand(0, $alphaLength);
				$pass[] = $alphabet[$n];
			}
			return implode($pass); //turn the array into a string
		}
		if(isset($_REQUEST['submit']))
		{
			$email = $_REQUEST['email'];
			
			$users = $link->rawQuery('SELECT * from admin where admin_email = ?', Array ($email));
			if($link->count == 0)
			{
			
				echo "<script>window.location.replace('forgotpassword.php?err=3');</script>";
			}
			else
			{
				$newPassword = randomPassword();
				$link->where ('admin_email', $email);
				$link->update ('admin', Array ('admin_password' => $newPassword ));
				$var = "<html>
						
									<body>
									
										<p>Dear User,</p></br>

					<p style='margin:0px;'>Please use this Password to login: ".$newPassword." </p></br>
					<p>Please use this link to Login:http://localhost/Admin-Panel/index.php</p></br>
					
					<p>With regards,</p></br>
					<p style='margin:0px;'>Quick Search</p></br>

				</body>
			</html>";
				$mail->SetFrom("chauhandinal2018@gmail.com","Quick Search");
				$mail->Subject = "New Password for Quick Search";
				
				$mail->MsgHTML($var);
				$mail->AddAddress($email);

				if($mail->Send())
				{
					echo "<script>window.location.replace('forgotpassword.php?err=1');</script>";
				}
				else
				{
				    echo "<script>window.location.replace('forgotpassword.php?err=2');</script>";
				}
				
			}
		}
?>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>QuickSearch|Forget Password</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="css/themify-icons.css">
  <link rel="stylesheet" href="css/vendor.bundle.base.css">
  <link rel="stylesheet" href="css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
	<style>
	.nav-tabs {
		border: none;
	}
	
	.nav-tabs li{
		float: left;
		/* margin-right: 5px; */
		font-size: 16px;
		background: #f6f6f6;
		padding: 10px;
		border-right: 1px solid #ddd;
		border-left: 1px solid #ddd;
		border-top: 1px solid #ddd;
		width: 50%;
		text-align: center;
		text-transform: uppercase;
	}
	
	.nav-tabs li a{
		color:black;
	}
	.nav-tabs li a:focus{
		text-decoration:none;
	}
	
	.nav-tabs li.active{
		background:#e21f25;
	}
	
	.nav-tabs li.active a{
		color:white;
		background:#e21f25;
	}
	
	.tab-content{
		padding:20px;
	}
	body{
		background:black;
	}
	.inner-page{
		margin-top:100px;
		margin-bottom:100px;
	}
	.page-wrapper55:before {
		content: "";
		position: absolute;
		z-index: -1;
		top: 0;
		bottom: 0;
		left: 0;
		right: 0;
		background: url(images/loginbg.jpg) center center;
		opacity: .75;
	}
	.forgot:hover
	{
		color:#000;
	}
	a:hover, a:focus {
    text-decoration: none!important;
    color: #000;
}
	</style>
	
	<!-- Global site tag (gtag.js) - AdWords: 806499461 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-806499461"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-806499461');
</script>
<script>
  gtag('event', 'page_view', {
    'send_to': 'AW-806499461',
    'user_id': 'replace with value'
  });
</script>
<!-- Event snippet for Adwishgourmet conversion page
In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
<script>
function gtag_report_conversion(url) {
var callback = function () {
if (typeof(url) != 'undefined') {
window.location = url;
}
};
gtag('event', 'conversion', {
'send_to': 'AW-806499461/c3hYCPr80YkBEIXpyIAD',
'event_callback': callback
});
return false;
}
</script>
</head>
<body>
     <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0" style="background-image: url('images/back.jpg'); position: fixed; width: 100%; height: 100%; background-size: cover; background-repeat: no-repeat; background-position: center;">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5" style="background:#0a0a17a8;">
			<div class="brand-logo">
			  <center><h1 style="color: white;">Quick Search</h1></center>
               <!-- <img src="http://www.urbanui.com/justdo/template/images/logo.svg" alt="logo"> -->
              </div>
              <h3 style="text-align:center;color:white;font-weight:bold;">Forgot Password?</h3>
			  <form method="post" action="#">
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" placeholder="email" name="email" id="email" style="color: #f8f9fa; border:1px solid #f8f9fa; margin-top: 50px;" required>
                </div>
                <div class="col-md-12" style="padding-bottom:20px;text-align: center;">
				<?php 
					if(isset($_REQUEST['err']) && $_REQUEST['err'] == 1)
					{
						echo "<span style='color:green;'>New Password has been mailed successfully.</span>";
					} 
					else if(isset($_REQUEST['err']) && $_REQUEST['err'] == 2)
					{
						echo "<span style='color:red;'>Mail not sent Try again later.</span>";
					}
					else if(isset($_REQUEST['err']) && $_REQUEST['err'] == 3)
					{
						echo "<span style='color:red;'>Email Id does not exists.</span>";
					}
				?>
				</div>
                <div class="mt-12">
                  <center><button type="submit" class="btn btn-primary mr-2" name="submit" value="submit" style="color: #1a1f26; background-color: #f8f9fa; border-color: #fafafa;">Submit</button></center>
                </div>
                <a href="index.php" class="auth-link text-black" style="color:white;">Login From Here</a>
                
                
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
      <!--/end:Site wrapper -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--<script src="js/bootstrap.min.js"></script>-->
    <script src="js/animsition.min.js"></script>
    <script src="js/bootstrap-slider.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/headroom.js"></script>
    <script src="js/foodpicky.min.js"></script>
	<script src="js/vendor.bundle.base.js"></script>
  <script src="js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
</body>


</html>

