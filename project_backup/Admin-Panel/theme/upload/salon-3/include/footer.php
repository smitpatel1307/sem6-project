<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="widget news-widget">
							<div class="widget-title">
							<?php
								include 'include/connect.php';
								$vendor_id=$_SESSION['vendor_id'];
								$sql = $link->rawQueryOne('select * from logo where vendor_id=?',Array($vendor_id));
							?>
								<img src="../../../../../Vendor-Panel/logo/<?php echo $sql['image']; ?>" alt="" style="height: 65px;width: 150px;padding-top: 10px;">
							</div>
							<div class="latest-post">
								<div class="post-box">
									<div class="left">
									<p>
										<?php
											$s=$link->rawQueryOne('select * from vendor where vendor_id=?',Array($vendor_id));
											echo $s['description'];
										?>
										</p>
									</div>
								</div>
					
							</div>
					</div>
				</div>
				<?php
					$s=$link->rawQueryOne('select * from contact where vendor_id=?',Array($vendor_id));
				?>
				<div class="col-lg-4 col-md-6">
					<div class="widget logo-widget text-center">
						<h3>Contact Us</h3>
						<h5 align="left">Address : </h5><p><?php echo $s['address']; ?></p>
						
						<h5 align="left">Contact No : </h5><p><?php echo $s['phone_no1']; ?></p>
						
						<h5 align="left">E-mail : </h5><p><?php echo $s['email']; ?></p>
					</div>
				</div>
				<?php
					$sql=$link->rawQuery('select * from social_media where vendor_id=?',Array($vendor_id));
					if($link->count > 0)
					{
						?>
						<div class="col-lg-4 col-md-6">
							<div class="widget logo-widget text-center">
								<h3>Follow US</h3>
								<div class="social-link">
									<ul>
										<?php
										$s=$link->rawQuery('select * from social_media where vendor_id=?',Array($vendor_id));
										if($link->count > 0)
										{
											foreach($s as $sql)
											{
												?>
												<Li><a href="<?php echo $sql['link']; ?>" target="_blank"><i class="fab fa-<?php echo $sql['media_name']; ?>" aria-hidden="true"></i></a></Li>
												<?php
											}
										}
									?>
									</ul>
								</div>

							</div>
						</div>	
						<?php
					}
				?>
				
			</div>
		</div>
	</footer>