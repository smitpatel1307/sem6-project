<?php
session_start();
include '../include/connect.php';
if(isset($_SESSION['admin_id']))
{
	$cpassword = $_REQUEST['cpassword'];
	$npassword = $_REQUEST['npassword'];
	$rpassword = $_REQUEST['rpassword'];


	$admin_id = $_SESSION['admin_id'];

	$pass = $link->rawQueryOne("select * from admin where admin_id = ?",Array($admin_id));
	$old_password = $pass['admin_password'];
	if($npassword == $rpassword)
	{
		if($old_password == $cpassword)
		{
			$link->where("admin_id",$admin_id);
			$link->update("admin",Array("admin_password"=>$npassword));
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
	header("location:../index.php");
}
?>