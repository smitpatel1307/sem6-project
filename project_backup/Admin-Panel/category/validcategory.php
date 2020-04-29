<?php
include '../include/connect.php';

	if(isset($_POST['category']))
	{
		 $s = $link->rawQueryOne("select * from category where Category_name=?",Array($_POST['category']));
		 if($link->count==1)
		 {
		 	echo "Category Already Exist..";
		 }
	}
	
	if(isset($_POST['type']))
	{
		 $s = $link->rawQueryOne("select * from type where type_name=?",Array($_POST['type']));
		 if($link->count==1)
		 {
		 	echo "Business type Already Exist..";
		 }
	}
?>