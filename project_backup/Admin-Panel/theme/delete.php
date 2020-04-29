<?php
session_start();

if(isset($_SESSION['admin_id']))
{
include '../include/connect.php';
$theme_id=$_GET["theme_id"];
$sql = $link->rawQueryOne('select theme_icon from theme where theme_id=?',Array($theme_id));
if($link->count > 0)
{
	$image=$sql['theme_icon'];
	if(file_exists($image))
	{
		unlink($image);
	}
}
$link->where('theme_id',$theme_id);
$d = $link->delete('theme');
if($d)
{
	header("location:viewtheme.php");
}
}
else
{
	header("location:../index.php");
}
?>