<section id="subscribe" class="widget_section padding">
			<div class="container">
				<div class="col-md-4 col-xs-6 xs-padding">
					<div class="footer_widget">
					<?php
								include 'connect.php';
								$vendor_id=$_SESSION['vendor_id'];
								$sql = $link->rawQueryOne('select * from logo where vendor_id=?',Array($vendor_id));
							?>
						<img class="mb-15" src="../../../../../Vendor-Panel/logo/<?php echo $sql['image']; ?>" alt="Brand" style="height:65px;width:150px;">
						<div>
						<?php
									$s=$link->rawQueryOne('select * from vendor where vendor_id=?',Array($vendor_id));
									echo $s['description'];
								?>
								</div>
					</div>
				</div>
				<?php
					$s=$link->rawQueryOne('select * from contact where vendor_id=?',Array($vendor_id));
				?>
				<div class="col-md-4 col-xs-6 xs-padding">
				<h4 style="font-size: 25px;color: white;margin-top: 00px;"> Contact US </h4>
					<div class="footer_widget">
						<h4><?php echo $s['address']; ?>
						<br><?php echo $s['phone_no1']; ?>
						<br><?php echo $s['email']; ?></h4>
                        
					</div>
				</div>
				<?php
						$sql=$link->rawQuery('select * from social_media where vendor_id=?',Array($vendor_id));
						if($link->count > 0)
						{
							?>
							<div class="col-md-4 col-xs-6 xs-padding">
							<h4 style="font-size: 25px;color: white;margin-top: 00px;"> Follow US </h4>
								<div class="footer_widget">
									<ul class="widget_social">
									   <?php
											$s=$link->rawQuery('select * from social_media where vendor_id=?',Array($vendor_id));
											if($link->count > 0)
											{
												foreach($s as $sql)
												{
													?>
													<Li><a href="<?php echo $sql['link']; ?>" target="_blank"><i class="social_<?php echo $sql['media_name']; ?>" aria-hidden="true"></i></a></Li>
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
				
			</div>
		</section><!-- /.widget_section -->