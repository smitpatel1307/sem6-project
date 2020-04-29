<?php
session_start();

if(isset($_SESSION['vendor_id']))
{
include '../include/connect.php';
$socialmedia_id=$_GET["socialmedia_id"];
$sql = $link->rawQueryOne('select * from social_media where socialmedia_id=?',Array($socialmedia_id));
$link->where('socialmedia_id',$socialmedia_id);
$d = $link->delete('social_media');
if($d)
{
	header("location:view_social.php");
}
}
else
{
	header("location:../login.php");
}
?>