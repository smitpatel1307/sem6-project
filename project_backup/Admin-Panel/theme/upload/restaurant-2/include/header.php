<header class="site-header bg-bl-transparent no-border sticky-header citrus-theme" id="site-header">
<?php
		    //session_start();
			include 'connect.php';
			$vendor_id=$_SESSION['vendor_id'];
			$sql = $link->rawQueryOne('select * from logo where vendor_id=?',Array($vendor_id));
		?>
        <div class="container clearfix">
            <div class="row">
                <div class="col-5 col-sm-6 col-md-6 col-lg-6 col-xl-2">
                    <div class="header-left">                    
                        <div class="site-logo">
                            <a href="index.php">
                                <img src="../../../../../Vendor-Panel/logo/<?php echo $sql['image']; ?>" style="height: 30px;width: 170px;" />
                            </a>
                        </div><!-- /.site-logo -->
                    </div><!-- /.header-left -->
                </div><!-- /.col-md-6 -->

                <div class="d-none d-xl-block col-md-8">
                    <div class="header-middle">                    
                        <nav class="navigation">
                            <!-- Main Menu -->
                            <div class="menu-wrapper">
                                <div class="menu-content">
                                    <ul class="mainmenu">
                                        <li>
                                            <a href="index.php"
											<?php
											if($current=="1")
											{
												?>
												class="active"
												<?php
											}
										?>
											>Home</a>
                                        </li>
                                        <li>
                                            <a href="about.php" 
											<?php
											if($current=="2")
											{
												?>
												class="active"
												<?php
											}
										?>
											>About</a>
                                        </li>                                    
                                        <li>
                                            <a href="service.php"
											<?php
											if($current=="3")
											{
												?>
												class="active"
												<?php
											}
										?>
											>Service</a>
                                        </li>
                                        <?php
									$vendor_id=$_SESSION['vendor_id'];
									$s = $link->rawQuery('select * from product where vendor_id=? and is_active=?',Array($vendor_id,"1"));
									if($link->count > 0)
									{
										?>
										<li><a href="product.php"
										<?php
											if($current=="4")
											{
												?>
												class="active"
												<?php
											}
										?>
										>Product</a></li>
										<?php
									}
									?>
                                        <li>
                                            <a href="contact.php"
											<?php
											if($current=="5")
											{
												?>
												class="active"
												<?php
											}
										?>
											>Contact</a>
                                        </li>
                                    </ul> <!-- /.menu-list -->
                                </div> <!-- /.hours-content-->
                            </div><!-- /.menu-wrapper --> 
                        </nav><!-- /.site-navigation -->
                    </div>
                </div><!-- /.col-md-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </header>