<header class="header-area stricky" style="padding-bottom: 00px;margin-bottom: -32px;margin-top: -19px;">
<?php
		    
			include 'include/connect.php';
			$vendor_id=$_SESSION['vendor_id'];
			$sql = $link->rawQueryOne('select * from logo where vendor_id=?',Array($vendor_id));
		?>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="outer-box clearfix">
                    <!--Start logo-->
                    <div class="logo">
                            <img src="../../../../../Vendor-Panel/logo/<?php echo $sql['image']; ?>" alt="Awesome Logo" style="height: 65px;width: 150px;">
                    </div>
                    <!--End logo-->
                    <!--Start search box btn-->
                    
                    <!--End search box btn-->
                    <!--Start cart btn-->
                    
                    <!--End cart btn-->
                    <!--Start mainmenu-->
                    <nav class="main-menu">
                        <div class="navbar-header">   	
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li
								<?php
									if($current=="1")
									{
										?>
										class="current"
										<?php
									}
								?>
								><a href="index.php">Home</a></li>
                                <li
								<?php
									if($current=="2")
									{
										?>
										class="current"
										<?php
									}
								?>
								><a href="about.php">About</a>
                                </li>
                                <li
								<?php
									if($current=="3")
									{
										?>
										class="current"
										<?php
									}
								?>
								><a href="service.php">Service</a>
                                </li>
                                <?php
									$vendor_id=$_SESSION['vendor_id'];
									$s = $link->rawQuery('select * from product where vendor_id=? and is_active=?',Array($vendor_id,"1"));
									if($link->count > 0)
									{
										?>
										<li
										<?php
									if($current=="4")
									{
										?>
										class="current"
										<?php
									}
								?>
										><a href="product.php">Product</a></li>
										<?php
									}
									?>
                                <li
								<?php
									if($current=="5")
									{
										?>
										class="current"
										<?php
									}
								?>
								><a href="contact.php">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <!--End mainmenu-->
                </div>
            </div>
        </div>
    </div>
</header> 