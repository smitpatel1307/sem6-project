<footer class="footer"  id="footer" style="padding-top: 00px;">
			<div class="container">
				
				<div class="get-touch">
					<div class="row">
					<div class="col-md-4">
					<?php
								include 'include/connect.php';
								$vendor_id=$_SESSION['vendor_id'];
								$sql = $link->rawQueryOne('select * from logo where vendor_id=?',Array($vendor_id));
							?>
							<div >
									<img src="../../../../../Vendor-Panel/logo/<?php echo $sql['image']; ?>" style="height: 65px;width: 150px;padding-top: 10px;margin-bottom:20px;">
							</div>
							<?php
									$s=$link->rawQueryOne('select * from vendor where vendor_id=?',Array($vendor_id));
									echo $s['description'];
								?>
						</div>
						<?php
							$s=$link->rawQueryOne('select * from contact where vendor_id=?',Array($vendor_id));
						?>
						<div class="col-md-4">
							<div class="contact-us">
									<h4>Contact Us</h4>
									<div class="detail">
										<ul>
										<li class="location"><i class="icon-home"></i> <span><?php echo $s['address']; ?></span></li>
											<li class="phone"><i class="icon-telephone"></i> <span><?php echo $s['phone_no1']; ?></span></li>
											<li class="email"><i class="icon-email-1"></i> <span><?php echo $s['email']; ?></span></li>
											
										</ul>
									</div>
							</div>
						</div>
						<?php
							$sql=$link->rawQuery('select * from social_media where vendor_id=?',Array($vendor_id));
							if($link->count > 0)
							{
								?>
								<div class="col-md-4 follow-us">
									<div class="about-pearl" style="margin-top:0px;">
									<div class="follow-us" style="margin-top:0px;">
														
									<h4>Follow US</h4>
									<ul>
										<?php
										$s=$link->rawQuery('select * from social_media where vendor_id=?',Array($vendor_id));
										if($link->count > 0)
										{
											foreach($s as $sql)
											{
												?>
												<Li><a href="<?php echo $sql['link']; ?>" target="_blank"><i class="icon-<?php echo $sql['media_name']; ?>" aria-hidden="true"></i></a></Li>
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
				
			</div>
			
			
		</footer>