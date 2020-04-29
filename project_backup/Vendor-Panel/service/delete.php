<?php
session_start();

if(isset($_SESSION['vendor_id']))
{
include '../include/connect.php';
$service_id=$_GET["service_id"];
$sql = $link->rawQueryOne('select banner_image,service_image,icon from service where service_id=?',Array($service_id));
if($link->count > 0)
{
	$image=$sql['banner_image'];
	if(file_exists($image))
	{
		unlink($image);
	}
	$image1=$sql['service_image'];
	if(file_exists($image1))
	{
		unlink($image1);
	}
	$image2=$sql['icon'];
	if(file_exists($image2))
	{
		unlink($image2);
	}
}
$link->where('service_id',$service_id);
$d = $link->delete('service');
if($d)
{
	header("location:view_service.php");
}
}
else
{
	header("location:../login.php");
}
?>