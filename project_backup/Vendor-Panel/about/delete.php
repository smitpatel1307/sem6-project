<?php
session_start();

if(isset($_SESSION['vendor_id']))
{
include '../include/connect.php';
$about_id=$_GET["about_id"];
$sql = $link->rawQueryOne('select baner_image,about_image from about where about_id=?',Array($about_id));
if($link->count > 0)
{
	$image=$sql['baner_image'];
	if(file_exists($image))
	{
		unlink($image);
	}
	$image1=$sql['about_image'];
	if(file_exists($image1))
	{
		unlink($image1);
	}
}
$link->where('about_id',$about_id);
$d = $link->delete('about');
if($d)
{
	header("location:view_about.php");
}
}
else
{
	header("location:../login.php");
}
?>