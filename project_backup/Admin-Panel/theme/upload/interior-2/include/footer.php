<footer class="main-footer">
        <!--Widgets Section-->
		<?php
			include 'include/connect.php';
			$vendor_id=$_SESSION['vendor_id'];
			$sql = $link->rawQueryOne('select * from logo where vendor_id=?',Array($vendor_id));
		?>
        <div class="widgets-section" style="background-image:url(images/background/bg-1.jpg)">
            <div class="auto-container">
                <div class="row">
                    <!--Big Column-->
                    <div class="big-column col-lg-4">
                        <div class="row">
                            <!--Footer Column-->
                            <div class="footer-column col-lg-7 col-md-6">
                                <div class="footer-widget about-widget">
                                    <div class="footer-logo"><img src="../../../../../Vendor-Panel/logo/<?php echo $sql['image']; ?>" alt="" style="height: 65px;width: 150px;padding-top: 10px;"></div>
                                    <div class="text">
									<?php
									$s=$link->rawQueryOne('select * from vendor where vendor_id=?',Array($vendor_id));
									echo $s['description'];
									?>
									</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Big Column-->
					<?php
					$s=$link->rawQueryOne('select * from contact where vendor_id=?',Array($vendor_id));
				?>
                    <div class="big-column col-lg-4">
                        <div class="row">

                            <!--Footer Column-->
                            <div class="footer-column col-md-6">
                                <div class="footer-widget contact-widget">
                                    <h4 class="widget-title">CONTACT US</h4>
                                    <div class="inner-box">
                                        <h5>Address</h5>
                                        <div class="text"><?php echo $s['address']; ?></div>
                                    </div>
                                    <div class="inner-box">
                                        <h5>email</h5>
                                        <div class="text"><?php echo $s['phone_no1']; ?></div>
                                    </div>  
									<div class="inner-box">
                                        <h5>Contact No</h5>
                                        <div class="text"><?php echo $s['email']; ?></div>
                                    </div>  
                                </div>
                            </div>
                        </div>
                    </div>
					<?php
						$sql=$link->rawQuery('select * from social_media where vendor_id=?',Array($vendor_id));
						if($link->count > 0)
						{
							?>
							<div class="footer-column col-lg-4">
								<div class="footer-widget social-link-widget">
									<h4 class="widget-title">FOLLOW US</h4>
									<ul class="social-icon-one clearfix">
									<?php
										$s=$link->rawQuery('select * from social_media where vendor_id=?',Array($vendor_id));
										if($link->count > 0)
										{
											foreach($s as $sql)
											{
												?>
												<li><a href="<?php echo $sql['link']; ?>" target="_blank"><i class="fab fa-<?php echo $sql['media_name']; ?>" style="margin-top:10px;"></i></a></li>
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
    </footer>