<footer class="site-footer bg-nero">
        <div class="footer-middle citrus-theme">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="widget">
						<?php
								include 'include/connect.php';
								$vendor_id=$_SESSION['vendor_id'];
								$sql = $link->rawQueryOne('select * from logo where vendor_id=?',Array($vendor_id));
					    ?>
                            <div class="widget-content">
                                <figure class="widget-thumb">
                                    <img src="../../../../../Vendor-Panel/logo/<?php echo $sql['image']; ?>" style="height: 65px;width: 150px;padding-top: 10px;"" alt="" />
                                </figure><!--  /.widget-thumb --> 
                                <p>
								<?php
									$s=$link->rawQueryOne('select * from vendor where vendor_id=?',Array($vendor_id));
									echo $s['description'];
								?>	
                                <p>								
                                <br>
                                <!--  /.social-link -->
                            </div><!--  /.widget-content -->
                        </div><!--  /.widget -->
                    </div><!--  /.col-md-4 -->
					<?php
						$s=$link->rawQueryOne('select * from contact where vendor_id=?',Array($vendor_id));
					?>
                    <div class="col-md-4">
                        <div class="widget">
                            <h2 class="widget-title">Contact Details</h2>
                            <div class="widget-content">
                                <ul>
                                    <li><i class="fa fa-map-marker"></i><?php echo $s['address']; ?></li>
                                    <li><i class="fa fa-phone"></i><?php echo $s['phone_no1']; ?></li>
                                    <li><i class="fa fa-envelope"></i><?php echo $s['email']; ?></li>
                                </ul>
                            </div><!--  /.widget-content -->
                        </div><!--  /.widget -->
                    </div><!--  /.col-md-4 -->
					<?php
						$sql=$link->rawQuery('select * from social_media where vendor_id=?',Array($vendor_id));
						if($link->count > 0)
						{
							?>
							<div class="col-md-4">
					   <div class="widget">
					    <div class="widget-content">
							<h2 class="widget-title">Follow US</h2>
					         <ul class="social-link">
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
					</div>
							<?php
						}
					?>
					
                </div><!--  /.row -->
            </div><!--  /.container -->
        </div><!--  /.footer-middle -->
    </footer>