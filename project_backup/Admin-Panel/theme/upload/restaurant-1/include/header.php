<header class="top-area">
		<?php
		    
			include 'include/connect.php';
			$vendor_id=$_SESSION['vendor_id'];
			$sql = $link->rawQueryOne('select * from logo where vendor_id=?',Array($vendor_id));
		?>
		
		<div class="mbl-menu"></div>
		<div class="top-men-bar">
			<div class="container">
				<div class="row">
					<div class="col-md-2  hidden-sm hidden-xs">
						<div class="logo">
							<a href="index.php">
								<img src="../../../../../Vendor-Panel/logo/<?php echo $sql['image']; ?>" style="height: 65px;width: 150px;padding-top: 10px;">
							</a>
						</div>
						<!-- end logo -->
					</div>
					<div class="col-md-8  hidden-sm hidden-xs">
						<div class="main-menu">
							<nav>
								<ul>
									<li><a href="index.php">Home</a>
										<!--<ul class="sub-menu">
											<li><a href="index-2.html"> Home One</a></li>
											<li><a href="index1.html"> Home Two</a></li>
											<li><a href="index2.html"> Home Three</a></li>
										</ul>-->
									</li>
									<li><a href="about.php">About</a>
										<!--<ul class="sub-menu">
											<li><a href="about.html">About one</a></li>
											<li><a href="about1.html">About two</a></li>
										</ul>-->
									</li>
									<li><a href="service.php">Service</a>
										<!--<ul class="sub-menu">
											<li><a href="menu1.html">Menu one</a></li>
											<li><a href="menu2.html">Menu Two</a></li>
										</ul>-->
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
									<!--<li class="has-child"><a href="#">Pages</a>
										<ul class="sub-menu">
											<li><a href="index-2.html"> Home One</a></li>
											<li><a href="index1-2.html"> Home Two</a></li>
											<li><a href="index2-2.html"> Home Three</a></li>
											<li class="has-child"><a href="#">Menu</a>
												<ul class="menu-sub">
													<li><a href="menu1.html">Menu one</a></li>
													<li><a href="menu2.html">Menu Two</a></li>
												</ul>
											</li>
											<li class="has-child"><a href="#">Other page</a>
												<ul class="menu-sub">
													<li><a href="blog.html">Blog</a></li>
													<li><a href="blog-single.html">Blog single</a></li>
													<li><a href="reservation.html">Reservation</a></li>
													<li><a href="contact.html">contact</a></li>
												</ul>
											</li>
										</ul>
									</li>-->
									<!--<li><a href="reservation.html">Reservation</a></li>-->
									<li><a href="contact.php">contact</a></li>
								</ul>
							</nav>
						</div>
						<!-- end main menu -->
					</div>
					
				</div>
			</div>
		</div>
		<!-- end top menu bar -->
	</header>