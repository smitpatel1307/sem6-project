<?php
session_start();

if(isset($_SESSION['vendor_id']))
{
include '../include/connect.php';
$team_id=$_GET["team_id"];
$sql = $link->rawQueryOne('select team_image from team where team_id=?',Array($team_id));
if($link->count > 0)
{
	$image=$sql['team_image'];
	if(file_exists($image))
	{
		unlink($image);
	}
}
$link->where('team_id',$team_id);
$d = $link->delete('team');
if($d)
{
	header("location:view_team.php");
}
}
else
{
	header("location:../login.php");
}
?>