<?php  
				if(isset($_POST['submit']))
				{
					session_start();
					include 'include/connect.php';
					if($_POST['vendor_name']=="" && $_POST['password']=="")
					{
						header("location:login.php?err=0");
					}
					else
					{
						$sql=$link->rawQueryOne('select vendor_id,vendor_name,password from vendor where vendor_name=? and password=?',Array($_POST['vendor_name'],$_POST['password']));
						if($link->count > 0)
						{
							$s=$link->rawQueryOne('select vendor_id,vendor_name,password,approve from vendor where approve=2 and vendor_name=? and password=?',Array($_POST['vendor_name'],$_POST['password']));
							if($link->count > 0)
							{
								$_SESSION['vendor_id'] = $s['vendor_id'];
								$_SESSION['vendor_name'] = $s['vendor_name'];
								//$_SESSION['password'] = $s['password'];
								//setcookie('vendor_id',$s['vendor_id'],(time() + (24 * 60 * 60)));
								header("location:dashboard/dashboard.php");
							}
							else
							{
								header('location:login.php?err=2');
							}
						}
						else
						{
							header('location:login.php?err=1');
						}
					}
					if(isset($_POST['remember_me']))
					{
						setcookie('vendor_name',$_POST['vendor_name'],(time() + (24 * 60 * 60)));
						setcookie('vendor_password',$_POST['password'],(time() + (24 * 60 * 60)));
					}
					else
					{
						setcookie('vendor_name',"");
						setcookie('vendor_password',"");
					}
				}
?>