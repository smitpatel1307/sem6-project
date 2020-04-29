<?php
include 'connect.php';
require_once ('phpmailer/PHPMailerAutoload.php');
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

if(isset($_POST['submit']))
{
	$s=$link->rawQuery('select * from user where email=?',Array($_POST['email']));
	if($link->count > 0)
	{
		foreach($s as $sql)
		{
			$name=$_POST['username'];
			$email=$_POST['email'];
			$contactno=$_POST['cno'];
			$_SESSION['user_name']=$_POST['username'];
			$user_id=$sql['user_id'];
			
			$link->where('user_id',$user_id);
			$i = $link->update('user',Array('user_name'=>$name,'email'=>$email,'contact_no'=>$contactno));
			if($i)
			{
				$newPassword = randomPassword();
				$link->where ('email', $email);
				$link->update ('user', Array ('password' => $newPassword));
				$var = "<html>
						
									<body>
									
										<p>Dear User,</p></br>

					<p style='margin:0px;'>Please use this Password to login: ".$newPassword." </p></br>
					<p>Please use this link to Login:http://localhost/Vendor-Panel/login.php</p></br>
					
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
					echo "<script>window.location.replace('index.php?errs=1');</script>";
				}
				else
				{
				    echo "<script>window.location.replace('index.php?errs=2');</script>";
				}
			}
			else
			{
				header('location:index.php?error=0');
			}
		}
	}
	else
	{
		$name=$_POST['username'];
		$email=$_POST['email'];
		$contactno=$_POST['cno'];
		$_SESSION['user_name']=$_POST['username'];
		
		$i = $link->insert('user',Array('user_name'=>$name,'email'=>$email,'contact_no'=>$contactno));
		if($i)
		{
			$newPassword = randomPassword();
				$link->where ('email', $email);
				$link->update ('user', Array ('password' => $newPassword));
				$var = "<html>
						
									<body>
									
										<p>Dear User,</p></br>

					<p style='margin:0px;'>Please use this Password to login: ".$newPassword." </p></br>
					<p>Please use this link to Login:http://localhost/Vendor-Panel/login.php</p></br>
					
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
					echo "<script>window.location.replace('index.php?errs=1');</script>";
				}
				else
				{
				    echo "<script>window.location.replace('index.php?errs=2');</script>";
				}
		}
		else
		{
			header('location:index.php?error=0');
		}
	}
}
if(isset($_POST['btnpass']))
{
	$email = $_REQUEST['email'];
			
			$users = $link->rawQuery('SELECT * from user where email = ?', Array ($email));
			if($link->count == 0)
			{
			
				echo "<script>window.location.replace('index.php?e=3');</script>";
			}
			else
			{
				$newPassword = randomPassword();
				$link->where ('email', $email);
				$link->update ('user', Array ('password' => $newPassword ));
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
					echo "<script>window.location.replace('index.php?e=1');</script>";
				}
				else
				{
				    echo "<script>window.location.replace('index.php?e=2');</script>";
				}
				
			}
}
?>
<html>
<head>
<style type="text/css">
	#error
	{
		color:red;
	}
  </style>
  <script>
  function validate()
  {	
	var s=true;
		
	document.getElementById("validname").innerHTML = "";
	document.getElementById("validemail").innerHTML = "";
	document.getElementById("validcontactno").innerHTML = "";
	
	var validname = document.data.username.value;
	var reg=/^[a-zA-Z ]+$/;
   	if(validname == "")
   	{
   		document.getElementById("validname").innerHTML = "Enter Name";
		s=false;
   	}
	else if(!reg.test(validname))
	{
		document.getElementById("validname").innerHTML="Enter valid Name";
		s=false;
	}
	
	var email = document.data.email.value;
	var reg=/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
   	if(email == "")
   	{
   		document.getElementById("validemail").innerHTML = "Enter E-mail";
		s=false;
   	}
	else if(!reg.test(email))
	{
		document.getElementById("validemail").innerHTML="Enter valid E-mail";
		s=false;
	}
	
	var contactno = document.data.cno.value;
	var reg=/^[6789]{1}[0-9]{9}$/;
   	if(contactno == "")
   	{
   		document.getElementById("validcontactno").innerHTML = "Enter Contact NO";
		s=false;
   	}
	else if(!reg.test(contactno))
	{
		document.getElementById("validcontactno").innerHTML="Enter valid Contact NO";
		s=false;
	}
	
	return (s);
  }
  </script>
</head>
<div class="menu-right order-lg-2 order-sm-2">
    <div class="author-area">
        <div class="author__access_area">
            <ul class="d-flex list-unstyled align-items-center">
				<li>
					<a href="#" class="access-link" data-toggle="modal" data-target="#login_modal">Login</a>
                    <span>or</span>
                    <a href="#" class="access-link" data-toggle="modal" data-target="#signup_modal">Register</a>                      
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="modal fade" id="login_modal" tabindex="-1" role="dialog" aria-labelledby="login_modal_label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="login_modal_label"><i class="la la-lock"></i> Sign In</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="login_code.php" id="login-form" method="post">
					<?php 
					  if(isset($_COOKIE['user_name']))
					  {
						  $user_name=$_COOKIE['user_name'];
						  $user_password=$_COOKIE['user_password'];
					  }
					  else
					  {
						  $user_name="";
						  $user_password="";
					  }
					  ?>
					  <?php
				
				if((isset($_GET['err'])) && $_GET['err']==0)
				{
					?>
					<span id="error">UserName or Password is empty</span>
				  <?php
					}
					if((isset($_GET['err'])) && $_GET['err']==1)
					{
						?>
						<span id="error">UserName or Password is Invalid</span>
				  <?php
					}
					?>
                        <input type="text" class="form-control" placeholder="Username" name="username" value="<?php echo $user_name; ?>">
                        <input type="password" class="form-control" placeholder="Password" name="password" value="<?php echo $user_password; ?>">
                        <div class="keep_signed custom-control custom-checkbox checkbox-outline checkbox-outline-primary">
                            <input type="checkbox" class="custom-control-input" name="keep_signed_in" value="1" id="keep_signed_in">
                            <label for="keep_signed_in" class="not_empty custom-control-label">Keep me signed in</label>
                        </div>
                        <button type="submit" class="btn btn-block btn-lg btn-gradient btn-gradient-two" style="margin-top: 25px;">Sign In</button>
                    </form>

                    <div class="form-excerpts">
                        <ul class="list-unstyled">
                            <li>Not a member? <a href="#" id="hidelogopenreg">Sign up</a></li>
                            <li><a href="#" id="password">Recover Password</a></li>
                        </ul>
                        <!--<div class="social-login">
                            <span>Or connect with</span>
                            <p><a href="#" class="btn btn-outline-secondary"><i class="fab fa-facebook-f"></i> Facebook</a><a href="#" class="btn btn-outline-danger"><i class="fab fa-google-plus-g"></i> Google</a></p>
                        </div>-->
                    </div>

                </div>
            </div>
        </div>
    </div>
	
	<div class="modal fade" id="signup_modal" tabindex="-1" role="dialog" aria-labelledby="signup_modal_label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="signup_modal_label"><i class="la la-lock"></i> Sign Up</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="#" id="signup-form" method="post"name="data" id="data">
						<input type="text" class="form-control" placeholder="Username" name="username" id="username" style="margin-bottom: 00px;">
						<span id="validname" style="color:red;"></span>
                        <input type="text" class="form-control" placeholder="Email" name="email" id="email" style="margin-bottom: 00px;margin-top: 20px;">
						<span id="validemail" style="color:red;"></span>
                        <input type="text" class="form-control" placeholder="Contact No" name="cno" id="cno" style="margin-bottom: 00px;margin-top: 20px;">
						<span id="validcontactno" style="color:red;"></span>
                        <button type="submit" class="btn btn-block btn-lg btn-gradient btn-gradient-two" name="submit" value="submit" onclick="return(validate());" style="margin-top: 25px;">Sign Up</button>
                    </form>

                    <div class="form-excerpts">
                        <ul class="list-unstyled">
                            <li>Already a member? <a href="#" id="sample">Sign In</a></li>
                        </ul>
                       <!-- <div class="social-login">
                            <span>Or Signup with</span>
                            <p><a href="#" class="btn btn-outline-secondary"><i class="fab fa-facebook-f"></i> Facebook</a><a href="#" class="btn btn-outline-danger"><i class="fab fa-google-plus-g"></i> Google</a></p>
                        </div>-->
                    </div>

                </div>
            </div>
        </div>
    </div>
	
	<div class="modal fade" id="password_modal" tabindex="-1" role="dialog" aria-labelledby="login_modal_label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="login_modal_label"><i class="la la-lock"></i> Forgot Password</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="#" id="password-form" method="post">
                        <input type="text" class="form-control" placeholder="E-mail" name="email">
						<button type="submit" class="btn btn-block btn-lg btn-gradient btn-gradient-two" style="margin-top: 25px;" name="btnpass">Submit</button>
                    </form>
				</div>
            </div>
        </div>
    </div>
</html>