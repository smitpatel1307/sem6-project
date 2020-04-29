<?php
session_start();

if(isset($_SESSION['vendor_id']))
{
include '../include/connect.php';
$product_id=$_GET["product_id"];
$sql = $link->rawQueryOne('select banner_image,product_image from product where product_id=?',Array($product_id));
if($link->count > 0)
{
	$image=$sql['banner_image'];
	if(file_exists($image))
	{
		unlink($image);
	}
	$image1=$sql['product_image'];
	if(file_exists($image1))
	{
		unlink($image1);
	}
}
$link->where('product_id',$product_id);
$d = $link->delete('product');
if($d)
{
	header("location:view_product.php");
}
}
else
{
	header("location:../login.php");
}
?>