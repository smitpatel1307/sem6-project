 <header id="header" class="header_section">
        <?php
		    //session_start();
			include 'include/connect.php';
			$vendor_id=$_SESSION['vendor_id'];
			$sql = $link->rawQueryOne('select * from logo where vendor_id=?',Array($vendor_id));
		?>
			<nav class="navbar">
				<div class="container">
					<div class="navbar-header">
						<img src="../../../../../Vendor-Panel/logo/<?php echo $sql['image']; ?>" style="height: 65px;width: 150px;" alt="Logo">
					</div>
					<div id="navbar" class="navbar-right">
						<ul id="mainmenu" class="nav navbar-nav nav-menu">
                            <li
							<?php
									if($current=="1")
									{
								?>
										class="active"
										<?php
									}
								?>
							><a href="index.php">Home <span class="sr-only">(current)</span></a>
                                <!--<ul>
                                   <li><a href="index-2.html">Home 01</a></li>
                                   <li><a href="index-3.html">Home 02</a></li>
                                   <li><a href="index-4.html">Home 03</a></li>
                                </ul>-->
								
                            </li>            
							<li
							<?php
									if($current=="2")
									{
								?>
										class="active"
										<?php
									}
								?>
							> <a href="about.php">About</a>
                                <!--<ul>
                                   <li><a href="about.html">About</a></li>
                                   <li><a href="about-2.html">About 02</a></li>
                                </ul>-->
                            </li>
							<li
							<?php
									if($current=="3")
									{
								?>
										class="active"
										<?php
									}
								?>
							> <a href="service.php">Services</a>
                               <!-- <ul>
                                   <li><a href="services.html">Service</a></li>
                                   <li><a href="services-2.html">Service 02</a></li>
                                </ul>-->
                            </li>
                            <?php
									$vendor_id=$_SESSION['vendor_id'];
									$s = $link->rawQuery('select * from product where vendor_id=? and is_active=?',Array($vendor_id,"1"));
									if($link->count > 0)
									{
										?>
										<li
										<?php
									if($current=="4")
									{
								?>
										class="active"
										<?php
									}
								?>
										><a href="product.php">Product</a></li>
										<?php
									}
									?>
                            <!--<li> <a href="#">Pages</a>
                                <ul>
                                   <li><a href="gallery.html">Gallery</a></li>
                                   <li><a href="team.html">Team</a></li>
                                   <li><a href="pricing.html">Pricing</a></li>
                                   <li><a href="404.html">404 Not Found</a></li>
                                </ul>
                            </li>
							<li><a href="blog-grid.html">News</a>
								<ul>
									<li><a href="blog-grid.html">News Grid</a></li>
									<li><a href="blog-sidebar.html">News Sidebar</a></li>
									<li><a href="blog-details.html">News Details</a></li>
								</ul>
							</li>-->
							<li
							<?php
									if($current=="5")
									{
								?>
										class="active"
										<?php
									}
								?>
							><a href="contact.php">Contact</a></li>
                        </ul>
					</div><!--/.navbar-collapse -->
				</div>
			</nav><!-- Navigation Bar -->
		</header> <!-- Header_Section -->