<?php
session_start();
include 'connect.php';
if(isset($_SESSION['user_id']))
{
	$cpassword = $_REQUEST['cpassword'];
	$npassword = $_REQUEST['npassword'];
	$rpassword = $_REQUEST['rpassword'];


	$user_id = $_SESSION['user_id'];

	$pass = $link->rawQueryOne("select * from user where user_id = ?",Array($user_id));
	$old_password = $pass['password'];
	if($npassword == $rpassword)
	{
		if($old_password == $cpassword)
		{
			$link->where("user_id",$user_id);
			$link->update("user",Array("password"=>$npassword));
			echo "Password is successfully changed.";
		}
		else
		{
			echo "Your old password id incorrect!";
		}
	}
	else
	{
		echo "New password and repeat password must be same!";
	}
}
else
{
	header("location:index.php");
}
?>