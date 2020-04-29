<header class="main_header fixed_header transparen_bg_head">
		<?php
		    //session_start();
			include 'include/connect.php';
			$vendor_id=$_SESSION['vendor_id'];
			$sql = $link->rawQueryOne('select * from logo where vendor_id=?',Array($vendor_id));
		?>
		<div class="container clearfix">
			<div class="logo_head">
				<a href="index.php"><img src="../../../../../Vendor-Panel/logo/<?php echo $sql['image']; ?>" alt="" style="height: 65px;width: 150px;"></a>
			</div>
			<div class="navbar-expand-lg nav_btn_toggle">
				<button class="navbar-toggler open_mobile_menu" type="button" data-target="#topNavMobile">
					<span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
				</button>
			</div>
			<nav class="top_nav_links navbar navbar-expand-lg">
				<div class="collapse navbar-collapse" id="topNav">
					<ul class="navbar-nav mr-auto">
						<li><a href="index.php">Home</a></li>
						<li><a href="about.php">About</a></li>
						<li>
							<a href="service.php">Services</a>
						</li>
						<?php
									$vendor_id=$_SESSION['vendor_id'];
									$s = $link->rawQuery('select * from product where vendor_id=? and is_active=?',Array($vendor_id,"1"));
									if($link->count > 0)
									{
										?>
										<li><a href="product.php">Product</a></li>
										<?php
									}
									?>
						<li><a href="contact.php">Contact</a></li>
						
					</ul>
				</div>
			</nav>
		</div>
	</header>