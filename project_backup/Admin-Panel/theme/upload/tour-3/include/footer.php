<footer id="footer">
<?php
	include 'connect.php';
	$vendor_id=$_SESSION['vendor_id'];
	$sql = $link->rawQueryOne('select * from logo where vendor_id=?',Array($vendor_id));
?>
				<!--Footer box starts Here -->
				<div class="footer clearfix">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-4">
								<div class="quick-links">
									<img src="../../../../../Vendor-Panel/logo/<?php echo $sql['image']; ?>" alt="" style="height:65px;width:150px;">
								</div>
								<div class="quick-list">
									<ul>
										<?php
									$s=$link->rawQueryOne('select * from vendor where vendor_id=?',Array($vendor_id));
									
								?>
									</ul>
								</div>
								<p style="color:white;">
								    <?php echo $s['description']; ?>
								</p>
							</div>
							<div class="col-xs-12 col-sm-4">
							<?php
									$s=$link->rawQueryOne('select * from contact where vendor_id=?',Array($vendor_id));
									
								?>
								<div class="our-address" style="padding-bottom: 30px;">
									<h5>contact us</h5>
									<div class="address">
										<h6>Address</h6>
										<address>
											<?php echo $s['address']; ?>
										</address>
										<div class="phone">
											<span>phone : </span><p><?php echo $s['phone_no1']; ?></p>
											<span>email : </span><p><?php echo $s['email']; ?></p>
										</div>
									</div>
								</div>
							</div>
							<?php
								$sql=$link->rawQuery('select * from social_media where vendor_id=?',Array($vendor_id));
								if($link->count > 0)
								{
									?>
									<div class="col-xs-12 col-sm-4">
									<h5>Follow US</h5>
								<div class="social-wrap clearfix">
									
									<ul>
										<?php
								$s=$link->rawQuery('select * from social_media where vendor_id=?',Array($vendor_id));
								if($link->count > 0)
								{
									foreach($s as $sql)
									{
										?>
										<a href="<?php echo $sql['link']; ?>" target="_blank" style="color: white;padding-right: 15px;"><i class="fa fa-<?php echo $sql['media_name']; ?>" aria-hidden="true"></i></a>
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
							
						</div>
						
					</div>
				</div>
				<!--Footer box ends Here -->
			</footer>