<?php
session_start();

if(isset($_SESSION['vendor_id']))
{
include '../include/connect.php';
$testimonial_id=$_GET["testimonial_id"];
$sql = $link->rawQueryOne('select * from testimonials where testimonial_id=?',Array($testimonial_id));
$link->where('testimonial_id',$testimonial_id);
$d = $link->delete('testimonials');
if($d)
{
	header("location:view_testimonial.php");
}
}
else
{
	header("location:../login.php");
}
?>