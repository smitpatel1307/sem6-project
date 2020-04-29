<section class="page_toplogo table_section table_section_md ls section_padding_top_15 section_padding_bottom_15">
 <?php
		   // session_start();
			include 'include/connect.php';
			$vendor_id=$_SESSION['vendor_id'];
			$sql = $link->rawQueryOne('select * from logo where vendor_id=?',Array($vendor_id));
		?>
				<div class="container">
					<div class="row">
						<div class="col-md-3 text-center text-md-left">
							<a href="index.php" class="logo top_logo">
								<img src="../../../../../Vendor-Panel/logo/<?php echo $sql['image']; ?>" style="height: 65px;width: 150px;" alt="">
							</a>
						</div>
						<div class="col-md-9 text-center text-md-right">

							<div class="inline-teasers-wrap">
								<div class="small-teaser text-left">
									<p class="small-text grey margin_0">
							Call Us Today:
						</p>
									<p class="highlight2 fontsize_20 medium">
						<?php
							$s=$link->rawQueryOne('select * from contact where vendor_id=?',Array($vendor_id));
							echo $s['phone_no2'];
						?>
						</p>
								</div>
								<div class="small-teaser text-left">
									<p class="small-text grey margin_0">
							Our Location:
						</p>
									<p class="highlight2 fontsize_20 medium">
							<?php echo $s['address']; ?>
						</p>
								</div>
								
							</div>

						</div>

					</div>
				</div>
			</section>
			<header class="page_header header_white toggler_left with_top_border item_with_border">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 display_table">

							<div class="header_mainmenu display_table_cell">
								<!-- main nav start -->
								<nav class="mainmenu_wrapper">
									<ul class="mainmenu nav sf-menu">
										<li
										<?php
										if($current=="1")
										{
											?>
											class="active"
											<?php
										}
										?>
										>
											<a href="index.php">Home</a>
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
										>
											<a href="about.php">About</a>
										</li>
										<!-- eof pages -->

										<li
										<?php
										if($current=="3")
										{
											?>
											class="active"
											<?php
										}
										?>
										>
											<a href="service.php">Service</a>
											<!-- eof mega menu -->
										</li>
										<!-- eof features -->


										<!-- gallery -->
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
										<!-- eof Gallery -->

										<!-- blog -->
										<!-- eof blog -->

										<!-- contacts -->
										<li
										<?php
										if($current=="5")
										{
											?>
											class="active"
											<?php
										}
										?>
										>
											<a href="contact.php">Contact</a>
										</li>
										<!-- eof contacts -->
									</ul>
								</nav>
								<!-- eof main nav -->
								<!-- header toggler -->
								<span class="toggle_menu">
									<span></span>
								</span>
							</div>

						</div>
					</div>
				</div>
			</header>