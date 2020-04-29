<?php
session_start();

if(isset($_SESSION['admin_id']))
{
include '../include/connect.php';
$category_id=$_GET["category_id"];
$sql = $link->rawQueryOne('select category_image from category where category_id=?',Array($category_id));
if($link->count > 0)
{
	$image=$sql['category_image'];
	if(file_exists($image))
	{
		unlink($image);
	}
}
$link->where('category_id',$category_id);
$d = $link->delete('category');
if($d)
{
	header("location:viewcategory.php");
}
}
else
{
	header("location:../index.php");
}
?>