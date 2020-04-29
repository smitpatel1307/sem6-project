<?php
session_start();
if(!isset($_SESSION['admin_id']))
{
	header('location:../index.php');
}
include '../include/connect.php';
require_once ('../phpmailer/PHPMailerAutoload.php');
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
	
if(isset($_POST['approve']))
{			$vendor_id1=$_POST['approve'];			
			$users = $link->rawQueryOne('SELECT * from vendor where vendor_id = ?', Array ($vendor_id1));
			if($link->count == 0)
			{
				echo "<script>window.location.replace('viewvendor.php?err=3');</script>";
			}
			else
			{
				$email=$users['vendor_email'];
				$newPassword = randomPassword();
				$link->where ('vendor_id', $vendor_id1);
				$link->update ('vendor', Array ('password' => $newPassword,'approve'=>"2"));
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
					echo "<script>window.location.replace('viewvendor.php?err=1');</script>";
				}
				else
				{
				    echo "<script>window.location.replace('viewvendor.php?err=2');</script>";
				}
				
			}
}
if(isset($_POST['disapprove']))
{
	$vendor_id=$_POST['disapprove'];
	$link->where('vendor_id',$vendor_id);
	$u=$link->update('vendor',Array('approve'=>"0",'password'=>NULL));
	header('location:viewvendor.php');
}
?>