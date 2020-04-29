<header class="main-header header-style-one">
		<?php
		    
			include 'include/connect.php';
			$vendor_id=$_SESSION['vendor_id'];
			$sql = $link->rawQueryOne('select * from logo where vendor_id=?',Array($vendor_id));
		?>
        <!--Header-Upper-->
        <div class="header-upper">

            <div class="auto-container">
                <div class="header-outer">
                    <div class="logo-box">
                        <div class="logo"><a href="index.php"><img src="../../../../../Vendor-Panel/logo/<?php echo $sql['image']; ?>" alt="" title="" style="height: 65px;width: 150px;padding-top: 10px;"></a></div>
                    </div>
                    
                    <div class="nav-outer clearfix">
                    
                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-lg">
                            <div class="navbar-header">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="navbar-collapse collapse scroll-nav clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="about.php">About</a></li>
                                    <li><a href="service.php">Services</a></li>
                                    <?php
									$vendor_id=$_SESSION['vendor_id'];
									$s = $link->rawQuery('select * from product where vendor_id=? and is_active=?',Array($vendor_id,"1"));
									if($link->count > 0)
									{
										?>
										<li><a href="product.php">Product</a></li>
										<?php
									}
									?>
                                    <li><a href="contact.php">Contact</a></li>
                                </ul>
                            </div>
                        </nav>                      
                    </div>
                </div>
            </div>
        </div>
        <!--End Header Upper-->

        <!--Sticky Header-->
        <div class="sticky-header">
            <div class="auto-container">
                <div class="clearfix">
                    <!--Logo-->
                    <div class="logo float-left">
                        <a href="index-2.html" class="img-responsive"><img src="../../../../../Vendor-Panel/logo/<?php echo $sql['image']; ?>" alt="" title="" style="height: 65px;width: 150px;padding-top: 10px;"></a>
                    </div>
                    
                    <!--Right Col-->
                    <div class="right-col float-right">
                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-lg">
                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="about.php">About</a></li>
                                    <li><a href="services.php">Services</a></li>
                                    <?php
									$vendor_id=$_SESSION['vendor_id'];
									$s = $link->rawQuery('select * from product where vendor_id=? and is_active=?',Array($vendor_id,"1"));
									if($link->count > 0)
									{
										?>
										<li><a href="product.php">Product</a></li>
										<?php
									}
									?>
                                    <li><a href="contact.php">Contact</a></li>
                                </ul>
                            </div>
                        </nav><!-- Main Menu End-->
                    </div>
                </div>    
            </div>
        </div>
        <!--End Sticky Header-->

    </header>