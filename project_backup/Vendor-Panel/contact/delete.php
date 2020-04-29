<?php
session_start();

if(isset($_SESSION['vendor_id']))
{
include '../include/connect.php';
$contact_id=$_GET["contact_id"];
$sql = $link->rawQueryOne('select contact_image from contact where contact_id=?',Array($contact_id));
if($link->count > 0)
{
	$image=$sql['contact_image'];
	if(file_exists($image))
	{
		unlink($image);
	}
}
$link->where('contact_id',$contact_id);
$d = $link->delete('contact');
if($d)
{
	header("location:view_contact.php");
}
}
else
{
	header("location:../login.php");
}
?>