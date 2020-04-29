<footer class="footer-area">
    <div class="container">
        <div class="row">
            <!--Start single footer widget-->
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="single-footer-widget pd-bottom">
                    <div class="footer-logo">
					<?php
								include 'include/connect.php';
								$vendor_id=$_SESSION['vendor_id'];
								$sql = $link->rawQueryOne('select * from logo where vendor_id=?',Array($vendor_id));
					    ?>
                        
                            <img src="../../../../../Vendor-Panel/logo/<?php echo $sql['image']; ?>" alt="Awesome Footer Logo" style="height: 65px;width: 150px;">
                       
                    </div>
                    <div class="interrio-info">
                        <p>
						<?php
									$s=$link->rawQueryOne('select * from vendor where vendor_id=?',Array($vendor_id));
									echo $s['description'];
								?>	
						</p>
                    </div>
                    
                </div>
            </div>
            <!--End single footer widget-->
            <!--Start single footer widget-->
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="single-footer-widget pd-bottom">
                    <div class="title">
                        <h3>Contact Us</h3>
                    </div>
					<?php
									$s=$link->rawQueryOne('select * from contact where vendor_id=?',Array($vendor_id));
								?>
                    <ul class="footer-contact-info">
                        <li>
                            <div class="icon-holder">
                                <span class="flaticon-building"></span>
                            </div>
                            <div class="text-holder">
                                <p><?php echo $s['address'];?></p>
                            </div>
                        </li>
                        <li>
                            <div class="icon-holder">
                                <span class="flaticon-technology"></span>
                            </div>
                            <div class="text-holder">
                                <p><?php echo $s['phone_no1']; ?></p>
                            </div>
                        </li>
                        <li>
                            <div class="icon-holder">
                                <span class="flaticon-e-mail-envelope"></span>
                            </div>
                            <div class="text-holder">
                                <p><?php echo $s['email']; ?></p>
                            </div>
                        </li>
                       
                    </ul>
                </div>
            </div>
            <!--End single footer widget-->
            <!--Start single footer widget-->
			<?php
				$sql=$link->rawQuery('select * from social_media where vendor_id=?',Array($vendor_id));
				if($link->count > 0)
				{
					?>
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<div class="title">
							<h3>Follow Us</h3>
						</div>
						<div class="top-social-links">
							<ul style="margin-top: 50px;margin-left: -392px;">
								<?php
										$s=$link->rawQuery('select * from social_media where vendor_id=?',Array($vendor_id));
										if($link->count > 0)
										{
											foreach($s as $sql)
											{
												?>
												<li><a href="<?php echo $sql['link']; ?>" target="_blank"><i class="fa fa-<?php echo $sql['media_name']; ?>" aria-hidden="true"></i></a></li>
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
            
            <!--End single footer widget-->
        </div>
    </div>
</footer>  