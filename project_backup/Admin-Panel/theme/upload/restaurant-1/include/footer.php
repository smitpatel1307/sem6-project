<footer>
		<div class="footer-top-area sec-pad sm-font">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-6 col-xs-12 mtb-30 stb-30">
						<div class="single-footer">
							<?php
								include 'include/connect.php';
								$vendor_id=$_SESSION['vendor_id'];
								$sql = $link->rawQueryOne('select * from logo where vendor_id=?',Array($vendor_id));
							?>
							<img src="../../../../../Vendor-Panel/logo/<?php echo $sql['image']; ?>" style="height: 65px;width: 150px;padding-top: 10px;">
							<ul>
								<?php
									$s=$link->rawQueryOne('select * from vendor where vendor_id=?',Array($vendor_id));
									echo $s['description'];
								?>
							</ul>
						</div>
					</div>
					<?php
						$s=$link->rawQueryOne('select * from contact where vendor_id=?',Array($vendor_id));
									
					?>
					<div class="col-md-4 col-sm-6 col-xs-12 mtb-30 stb-30">
						<div class="single-footer">
							<h6>Contact<span>Details</span></h6>
							<ul>
								<li style="padding-bottom: 50px;">address<span class="pull-right"><?php echo $s['address']; ?></span></li>
								<li>Phone<span class="pull-right"><?php echo $s['phone_no1']; ?></span></li>
								<li>Email<span class="pull-right"><?php echo $s['email']; ?></span></li>
							</ul>
						</div>
					</div>
			
					<!-- end single footer -->
					<?php
						$sql=$link->rawQuery('select * from social_media where vendor_id=?',Array($vendor_id));
						if($link->count > 0)
						{
							?>
							<div class="col-md-4 col-sm-6 col-xs-12">
								<div class="single-footer">
									<h6>follow<span>us</span></h6>
									<ul class=" footer-social-ioocn">
									<?php
										$s=$link->rawQuery('select * from social_media where vendor_id=?',Array($vendor_id));
										if($link->count > 0)
										{
											foreach($s as $sql)
											{
												?>
												<Li><a href="<?php echo $sql['link']; ?>" target="_blank"><i class="fa fa-<?php echo $sql['media_name']; ?>" aria-hidden="true"></i></a></Li>
												<?php
											}
										}
									?>
									</ul>
								</div>
							</div>
							<?php
						}
					?>
					
					<!-- end single footer -->
				</div>
			</div>
		</div>
		<!-- end footer-top -->
		
	</footer>