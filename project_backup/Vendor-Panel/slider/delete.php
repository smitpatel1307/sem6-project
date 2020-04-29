<?php
session_start();

if(isset($_SESSION['vendor_id']))
{
include '../include/connect.php';
$slider_id=$_GET["slider_id"];
$sql = $link->rawQueryOne('select slider_image from slider where slider_id=?',Array($slider_id));
if($link->count > 0)
{
	$image=$sql['slider_image'];
	if(file_exists($image))
	{
		unlink($image);
	}
}
$link->where('slider_id',$slider_id);
$d = $link->delete('slider');
if($d)
{
	header("location:view_slider.php");
}
}
else
{
	header("location:../login.php");
}
?>