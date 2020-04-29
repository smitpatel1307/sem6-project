<footer class="page_footer ds parallax section_padding_top_100 section_padding_bottom_65 columns_padding_25">
				<div class="container">
					<div class="row">
                        <?php
								include 'connect.php';
								$vendor_id=$_SESSION['vendor_id'];
								$sql = $link->rawQueryOne('select * from logo where vendor_id=?',Array($vendor_id));
							?>
						<div class="col-md-4 col-sm-12 text-center to_animate" data-animation="fadeInUp">
							<div class="widget">
								
									<img src="../../../../../Vendor-Panel/logo/<?php echo $sql['image']; ?>" alt="" style="height:65px;width:150px;">
								
							</div>
							<?php
									$s=$link->rawQueryOne('select * from vendor where vendor_id=?',Array($vendor_id));
									echo $s['description'];
								?>
						</div>

						<div class="col-md-4 col-sm-6 text-center to_animate" data-animation="fadeInUp">
							<h3>Contact Us</h3>
							<?php
								$s=$link->rawQueryOne('select * from contact where vendor_id=?',Array($vendor_id));
							?>
							<div class="grey topmargin_30">	
									<div class="media small-teaser inline-block margin_0">
										<div class="media-left media-middle">
											<i class="fa fa-map-marker highlight3" aria-hidden="true"></i>
										</div>
										<div class="media-body media-middle">
											<?php echo $s['address']; ?>
										</div>
									</div>
									<br>
									<div class="media small-teaser inline-block margin_0">
										<div class="media-left media-middle">
											<i class="fa fa-phone highlight3" aria-hidden="true"></i>
										</div>
										<div class="media-body media-middle">
											<?php echo $s['phone_no1']; ?>
										</div>
									</div>
									<br>
									<div class="media small-teaser inline-block margin_0">
										<div class="media-left media-middle">
											<i class="fa fa-envelope highlight3" aria-hidden="true"></i>
										</div>
										<div class="media-body media-middle darklinks color3">
											<?php echo $s['email']; ?>
										</div>
									</div>
								</div>
						</div>
						<?php
							$sql=$link->rawQuery('select * from social_media where vendor_id=?',Array($vendor_id));
							if($link->count > 0)
							{
								?>
								<div class="col-md-4 col-sm-6 text-center to_animate" data-animation="fadeInUp">
									<h3>Follow US</h3>
									<div class="darklinks topmargin_25">
											<?php
										$s=$link->rawQuery('select * from social_media where vendor_id=?',Array($vendor_id));
										if($link->count > 0)
										{
											foreach($s as $sql)
											{
												?>
												<a href="<?php echo $sql['link']; ?>" class="social-icon border-icon rounded-icon soc-<?php echo $sql['media_name']; ?>" target="_blank"></a>
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