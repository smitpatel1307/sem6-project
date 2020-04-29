<?php
	session_start();
	if(isset($_SESSION['vendor_name']))
	{
		unset($_SESSION['vendor_id']);
		unset($_SESSION['vendor_name']);
		//unset($_SESSION['password']);
		header("location:login.php");
	}
	
?>