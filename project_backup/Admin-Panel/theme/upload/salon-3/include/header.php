<header class="prymery-menu">
 <?php
		    //session_start();
			include 'include/connect.php';
			$vendor_id=$_SESSION['vendor_id'];
			$sql = $link->rawQueryOne('select * from logo where vendor_id=?',Array($vendor_id));
		?>
			<nav class="navbar navbar-area navbar-expand-lg navbar-light ">
				<div class="container">
					
					<div class="collapse navbar-collapse" id="nav-left">
						<ul class="nav navbar-nav">
								<li class="nav-item 
								<?php
								if($current=="1")
								{
									$a=" active";
								}
								else
								{
									$a="";
								}
							?>
								<?php echo $a; ?>">
										<a class="nav-link" href="index.php" >
											Home
										</a>
								</li>
							<li class="nav-item 
							<?php
								if($current=="2")
								{
									$a=" active";
								}
								else
								{
									$a="";
								}
							?>
								<?php echo $a; ?>
							">
								<a class="nav-link" href="about.php">About</a>
							</li>
							<li class="nav-item 
							<?php
								if($current=="3")
								{
									$a=" active";
								}
								else
								{
									$a="";
								}
							?>
								<?php echo $a; ?>
							">
								<a class="nav-link" href="service.php" >
									Service
								</a>
								
							</li>
						</ul>
					</div>
					<a class="navbar-brand mr-auto" href="index.php">
						<div id="logo">
							<img src="../../../../../Vendor-Panel/logo/<?php echo $sql['image']; ?>" alt=""  style="height: 65px;width: 150px;">
						</div>
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMobile" aria-controls="navbarMobile"
					 aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav ml-auto">
							
							<?php
									$vendor_id=$_SESSION['vendor_id'];
									$s = $link->rawQuery('select * from product where vendor_id=? and is_active=?',Array($vendor_id,"1"));
									if($link->count > 0)
									{
										?>
										<li class="nav-item 
										<?php
								if($current=="4")
								{
									$a=" active";
								}
								else
								{
									$a="";
								}
							?>
								<?php echo $a; ?>
										"><a class="nav-link" href="product.php">Product</a></li>
										<?php
									}
									?>
							<li class="nav-item
							<?php
								if($current=="5")
								{
									$a=" active";
								}
								else
								{
									$a="";
								}
							?>
								<?php echo $a; ?>
							">
									<a class="nav-link" href="contact.php">Contact</a>
								</li>
						</ul>
					</div>
					<!-- Mobile -->
					
				</div>
			</nav>
		</header>