<footer class="footer-area">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
							<?php
								include 'include/connect.php';
								$vendor_id=$_SESSION['vendor_id'];
								$sql = $link->rawQueryOne('select * from logo where vendor_id=?',Array($vendor_id));
							?>
                    <div class="widget footer-widget about_widget">
                        <img src="../../../../../Vendor-Panel/logo/<?php echo $sql['image']; ?>" alt="footer logo image" style="height: 65px;width: 150px;">
                        <p><?php
									$s=$link->rawQueryOne('select * from vendor where vendor_id=?',Array($vendor_id));
									echo $s['description'];
								?></p>
                    </div>
                </div>
				<?php
					$s=$link->rawQueryOne('select * from contact where vendor_id=?',Array($vendor_id));
				?>
                <div class="col-lg-4 col-md-6">
                    <div class="widget footer-widget pages">
                        <h4 class="widget-title">Contact US</h4>
                        <ul>
                            <li><?php echo $s['address']; ?></li>
                            <li><?php echo $s['phone_no1']; ?></li>
                            <li><?php echo $s['email']; ?></li>
                        </ul>
                    </div>
                </div>
				<?php
						$sql=$link->rawQuery('select * from social_media where vendor_id=?',Array($vendor_id));
						if($link->count > 0)
						{
							?>
							<div class="col-lg-4 col-md-6">
                    <div class="widget footer-widget pages">
                        <h4 class="widget-title">Follow US</h4>
                        <div class="right-content">
                            <ul>
                                <?php
								$s=$link->rawQuery('select * from social_media where vendor_id=?',Array($vendor_id));
								if($link->count > 0)
								{
									foreach($s as $sql)
									{
										?>
										<a href="<?php echo $sql['link']; ?>" target="_blank" style="color:white;padding-right: 16px;"><i class="fab fa-<?php echo $sql['media_name']; ?>" aria-hidden="true"></i></a>
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
    <div class="copyright-area"><!-- sopyright area -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright-inner">
                            &copy; 2019 All Right Reserved.
                    </div>
                </div>
            </div>
        </div>
    </div><!-- //. copyright area -->
</footer>