<?php
session_start();

if(isset($_SESSION['admin_id']))
{
include '../include/connect.php';
$user_id=$_GET["user_id"];
$link->where('user_id',$user_id);
$d = $link->delete('user');
if($d)
{
	header("location:viewuser.php");
}
}
else
{
	header("location:../index.php");
}
?>