<footer class="main_footer">
							<?php
								include 'connect.php';
								$vendor_id=$_SESSION['vendor_id'];
								$sql = $link->rawQueryOne('select * from logo where vendor_id=?',Array($vendor_id));
							?>
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-4 footer_block">
					<img src="../../../../../Vendor-Panel/logo/<?php echo $sql['image']; ?>" alt="" style="height:65px;width:150px;">
					<p class="copy">
						<?php
									$s=$link->rawQueryOne('select * from vendor where vendor_id=?',Array($vendor_id));
									echo $s['description'];
								?>
					</p>
				</div>
				<?php
					$s=$link->rawQueryOne('select * from contact where vendor_id=?',Array($vendor_id));
				?>
				<div class="col-md-6 col-lg-4 footer_block">
						<h6 class="footer_block_title">Contact us</h6>
						<p><?php echo $s['address']; ?><br>
						<br>
						<?php echo $s['phone_no1']; ?><br>
						<br>
						<?php echo $s['email']; ?></p>
				</div>
				<?php
					$sql=$link->rawQuery('select * from social_media where vendor_id=?',Array($vendor_id));
					if($link->count > 0)
					{
						?>
						<div class="col-md-6 col-lg-4 footer_block">
						<h6 class="footer_block_title">Follow US</h6>
							<div class="social_wg">
								<?php
										$s=$link->rawQuery('select * from social_media where vendor_id=?',Array($vendor_id));
										if($link->count > 0)
										{
											foreach($s as $sql)
											{
												?>
												<a href="<?php echo $sql['link']; ?>" target="_blank"><i class="fab fa-<?php echo $sql['media_name']; ?>" aria-hidden="true"></i></a>
												<?php
											}
										}
									?>
							</div>
			
						</div>
						<?php
					}
				?>
				
			</div>
		</div>
	</footer>