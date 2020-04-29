<?php				
		session_start();
		include 'include/connect.php';
		if($_POST['username']=="" && $_POST['password']=="")
		{
			header("location:index.php?err=0");
		}
		else
		{
			$sql=$link->rawQueryOne('select * from admin where admin_name=?',Array($_POST['username']));
			if($link->count > 0)
			{
				$s=$link->rawQueryOne('select * from admin where admin_password=?',Array($_POST['password']));
				if($link->count > 0)
				{
					$_SESSION['admin_id'] = $sql['admin_id'];
					$_SESSION['admin_name'] = $sql['admin_name'];
					//$_SESSION['admin_password'] = $sql['admin_password'];
					header("location:dashboard/dashboard.php");
				}
				else
				{
					header('location:index.php?err=2');
				}
			}
			else
			{
				header('location:index.php?err=1');
			}
		}
		if(isset($_POST['remember_me']))
		{
			setcookie('admin_name',$_POST['username'],(time() + (24 * 60 * 60)));
			setcookie('admin_password',$_POST['password'],(time() + (24 * 60 * 60)));
		}
		else
		{
			setcookie('admin_name',"");
			setcookie('admin_password',"");
		}
?>