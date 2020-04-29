<footer class="main-footer">
    	<div class="auto-container">
        
        	<!--Widgets Section-->
            <div class="widgets-section">
            	<div class="row clearfix">
					
                    <!--Footer Column-->
					<div class="footer-column col-md-4 col-sm-6 col-xs-12">
                        <div class="footer-widget news-widget">
                        	<div class="footer-title">
							<?php
								include 'include/connect.php';
								$vendor_id=$_SESSION['vendor_id'];
								$sql = $link->rawQueryOne('select * from logo where vendor_id=?',Array($vendor_id));
							?>
							<img src="../../../../../Vendor-Panel/logo/<?php echo $sql['image']; ?>" style="height: 65px;width: 150px;padding-top: 10px;">
                            	
                            </div>
                            <div class="widget-content">
                            
                            	<!--News Widget Block-->
                            	<div class="news-widget-block">
                                	<div class="widget-inner">
                                    	<?php
									$s=$link->rawQueryOne('select * from vendor where vendor_id=?',Array($vendor_id));
									echo $s['description'];
								?>
                                    </div>
                                </div>          
                            </div>
                        </div>
                    </div>
					<?php
					$s=$link->rawQueryOne('select * from contact where vendor_id=?',Array($vendor_id));
					?>
                    <div class="footer-column col-md-4 col-sm-6 col-xs-12">
                        <div class="footer-widget logo-widget">
                            <h3>Contact Details</h3>
                            <ul class="list clearfix">
                            	<li><?php echo $s['address']; ?></li>
								<br><br><br>
                                <li><?php echo $s['phone_no1']; ?></li>
								<br><br>
								<li><?php echo $s['email']; ?></li>
                            </ul> 
                        </div>
                    </div>
                    
                    <!--Footer Column-->
                    
                    <!--Footer Column-->
					<?php
						$sql=$link->rawQuery('select * from social_media where vendor_id=?',Array($vendor_id));
						if($link->count > 0)
						{
							?>
							<div class="footer-column col-md-4 col-sm-6 col-xs-12">
								<div class="footer-widget lists-widget">
									<div class="footer-title">
										<h2>Follow Us</h2>
									</div>
									<div class="widget-content">
										<div >
											 <ul class="social-icon-two">
												<?php
										$s=$link->rawQuery('select * from social_media where vendor_id=?',Array($vendor_id));
										if($link->count > 0)
										{
											foreach($s as $sql)
											{
												?>
												<li><a href="<?php echo $sql['link']; ?>" target="_blank"><span class="fa fa-<?php echo $sql['media_name']; ?>"></span></a></li>
												<?php
											}
										}
									?>
									</ul>

										</div>
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