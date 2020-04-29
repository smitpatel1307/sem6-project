<?php
session_start();
include '../include/connect.php';
if(isset($_SESSION['vendor_id']))
{
	$cpassword = $_REQUEST['cpassword'];
	$npassword = $_REQUEST['npassword'];
	$rpassword = $_REQUEST['rpassword'];


	$vendor_id = $_SESSION['vendor_id'];

	$pass = $link->rawQueryOne("select * from vendor where vendor_id = ?",Array($vendor_id));
	$old_password = $pass['password'];
	if($npassword == $rpassword)
	{
		if($old_password == $cpassword)
		{
			$link->where("vendor_id",$vendor_id);
			$link->update("vendor",Array("password"=>$npassword));
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
	header("location:../login.php");
}
?>