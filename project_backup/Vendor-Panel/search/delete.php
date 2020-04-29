<?php
session_start();

if(isset($_SESSION['vendor_id']))
{
include '../include/connect.php';
$search_id=$_GET["search_id"];
$sql = $link->rawQueryOne('select * from search where search_id=?',Array($search_id));
$link->where('search_id',$search_id);
$d = $link->delete('search');
if($d)
{
	header("location:view_search.php");
}
}
else
{
	header("location:../login.php");
}
?>