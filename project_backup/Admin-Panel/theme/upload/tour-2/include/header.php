<nav class="navbar navbar-area navbar-expand-lg absolute">
		<?php
		    //session_start();
			include 'include/connect.php';
			$vendor_id=$_SESSION['vendor_id'];
			$sql = $link->rawQueryOne('select * from logo where vendor_id=?',Array($vendor_id));
		?>
        <div class="container nav-container">
            <div class="logo-wrapper navbar-brand">
                <a href="index.php" class="logo ">
                    <img src="../../../../../Vendor-Panel/logo/<?php echo $sql['image']; ?>" alt="logo" style="height: 65px;width: 150px;">
                </a>
            </div>
            <div class="collapse navbar-collapse" id="hostinglab">
                <!-- navbar collapse start -->
                <ul class="navbar-nav">
                    <!-- navbar- nav -->
                    <li class="nav-item 
					<?php
								if($current=="1")
								{
									$a=" active";
								}
								else
								{
									$a="";
								}
							?>
								<?php echo $a; ?>
					">
                        <a class="nav-link pl-0" href="index.php">Home
                        </a>
                    </li>
                    <li class="nav-item
					<?php
								if($current=="2")
								{
									$a=" active";
								}
								else
								{
									$a="";
								}
							?>
								<?php echo $a; ?>
					">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item
					<?php
								if($current=="3")
								{
									$a=" active";
								}
								else
								{
									$a="";
								}
						?>
								<?php echo $a; ?>
					">
                        <a class="nav-link" href="service.php">Service</a>
                    </li>
                    <?php
									$vendor_id=$_SESSION['vendor_id'];
									$s = $link->rawQuery('select * from product where vendor_id=? and is_active=?',Array($vendor_id,"1"));
									if($link->count > 0)
									{
										?>
										<li class="nav-item
										<?php
								if($current=="4")
								{
									$a=" active";
								}
								else
								{
									$a="";
								}
						?>
								<?php echo $a; ?>
										"><a class="nav-link" href="product.php">Product</a></li>
										<?php
									}
									?>
                    <li class="nav-item
					<?php
								if($current=="5")
								{
									$a=" active";
								}
								else
								{
									$a="";
								}
							?>
								<?php echo $a; ?>
					">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
                <!-- /.navbar-nav -->
            </div>
            <!-- /.navbar btn wrapper -->
            <div class="responsive-mobile-menu">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#hostinglab" aria-controls="hostinglab"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <!-- navbar collapse end -->
        </div>
    </nav>