<?php				
		session_start();
		include 'include/connect.php';
		if($_POST['username']=="" && $_POST['password']=="")
		{
			header("location:index.php?err=0");
		}
		else
		{
			$sql=$link->rawQueryOne('select * from user where user_name=? and password=?',Array($_POST['username'],$_POST['password']));
			if($link->count > 0)
			{
					$_SESSION['user_id'] = $sql['user_id'];
					$_SESSION['user_name'] = $sql['user_name'];
					//$_SESSION['password'] = $sql['password'];
					header("location:index.php");
			}
			else
			{
				header('location:index.php?err=1');
				
			}
		}
		if(isset($_POST['keep_signed_in']))
		{
			setcookie('user_name',$_POST['username'],(time() + (24 * 60 * 60)));
			setcookie('user_password',$_POST['password'],(time() + (24 * 60 * 60)));
		}
		else
		{
			setcookie('user_name',"");
			setcookie('user_password',"");
		}
?>