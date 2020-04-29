<?php
session_start();

if(isset($_SESSION['admin_id']))
{
include '../include/connect.php';
$type_id=$_GET["type_id"];
$link->where('type_id',$type_id);
$d = $link->delete('type');
if($d)
{
	header("location:viewbusinesstype.php");
}
}
else
{
	header("location:../index.php");
}
?>