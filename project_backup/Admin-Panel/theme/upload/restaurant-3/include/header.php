<header class="header-two">
<?php
		    //session_start();
			include 'connect.php';
			$vendor_id=$_SESSION['vendor_id'];
			$sql = $link->rawQueryOne('select * from logo where vendor_id=?',Array($vendor_id));
		?>
		   <div class="container">
	   		<a href="index.php"><img class="logo2" src="../../../../../Vendor-Panel/logo/<?php echo $sql['image']; ?>" style="height: 30px;width: 170px;"" alt=""></a>
			
			
			<div class="cont-right">
			
            <nav class="menu-5 nav">
            	<ul class="wtf-menu">
                	<li><a href="index.php" style="color: black;">Home</a>
					</li>
					
					<li><a href="about.php" style="color: black;">About</a>
					</li>
					
					<li><a href="service.php" style="color: black;">Service</a></li>
					
					
					<?php
									$vendor_id=$_SESSION['vendor_id'];
									$s = $link->rawQuery('select * from product where vendor_id=? and is_active=?',Array($vendor_id,"1"));
									if($link->count > 0)
									{
										?>
										<li><a href="product.php" style="color: black;">Product</a></li>
										<?php
									}
									?>
					
					<li><a href="contact.php" style="color: black;">contact us</a>
					</li>
                </ul>	
            </nav>
			
			</div>
		</div>
	
       </header>