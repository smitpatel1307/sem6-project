<?php
session_start();
if(!isset($_SESSION['vendor_id']))
{
	header('location:register.php');
}
?>
<html>
<head>
	<title>QuickSearch|Vendor|Success</title>
</head>
<body align="center">
  <center><img src="images/download.png" height="280px" width="250px"></center>
  <font size="20"><h1 align="center" font="bold">Thank You!</h1></font>
 <font size="5"> <h3 align="center">Your registration is received and we will contact soon</h3></font>
</body>
</html>