<?php
session_start();

if(isset($_SESSION['vendor_id']))
{
include '../include/connect.php';
$logo_id=$_GET["logo_id"];
$sql = $link->rawQueryOne('select image from logo where logo_id=?',Array($logo_id));
if($link->count > 0)
{
	$image=$sql['image'];
	if(file_exists($image))
	{
		unlink($image);
	}
}
$link->where('logo_id',$logo_id);
$d = $link->delete('logo');
if($d)
{
	header("location:view_logo.php");
}
}
else
{
	header("location:../login.php");
}
?>