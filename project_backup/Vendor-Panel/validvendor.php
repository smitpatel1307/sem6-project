<?php
include 'include/connect.php';

	if(isset($_POST['title']))
	{
		 $s = $link->rawQueryOne("select * from product where title=?",Array($_POST['title']));
		 if($link->count==1)
		 {
		 	echo "Product title Already Exist..";
		 }
	}
	
	if(isset($_POST['name']))
	{
		 $s = $link->rawQueryOne("select * from service where title=?",Array($_POST['name']));
		 if($link->count==1)
		 {
		 	echo "Service title Already Exist..";
		 }
	}
?>