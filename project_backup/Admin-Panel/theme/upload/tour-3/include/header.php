<div class="main-header" style="margin-top: 20px;">
<?php
		    //session_start();
			include 'include/connect.php';
			$vendor_id=$_SESSION['vendor_id'];
			$sql = $link->rawQueryOne('select * from logo where vendor_id=?',Array($vendor_id));
		?>
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-3">
							 <img src="../../../../../Vendor-Panel/logo/<?php echo $sql['image'];?>" alt="" style="height: 65px;width: 150px;"> 

							</div>
							<div class="col-xs-12 col-sm-9 custom-nav">
								<nav>
									<div id='cssmenu'>
										<ul class="navigation">
											<li class='active'>
												<a href='index.php'>Home</a>
											</li>
											<li>
												<a href="about.php">about us</a>
											</li>
											<li>
												<a href="service.php">services</a>
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
		
											<li>
												<a href="contact.php">contact</a>
											</li>
										</ul>
									</div>
								</nav>
							</div>
						</div>
					</div>
				</div>