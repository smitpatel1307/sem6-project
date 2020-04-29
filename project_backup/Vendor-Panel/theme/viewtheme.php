<?php
	session_start();
	$vendor_id=$_SESSION['vendor_id'];
	include '../include/connect.php';
	if(isset($_POST['submit']))
	{
		$theme_id=$_POST['submit'];
		$link->where('vendor_id',$vendor_id);
		$u=$link->update('vendor',Array('theme_id'=>$theme_id));
	}
?>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>QuickSearch|Vendor|Theme</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../css/themify-icons.css">
  <link rel="stylesheet" href="../css/vendor.bundle.base.css">
  <link rel="stylesheet" href="../css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../css/style.css">
  <!-- endinject --> 
  
  <link rel="shortcut icon" href="../images/favicon.png" />
    
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <?php
		include '../include/header.php';
	?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial -->
      <!-- partial:../../partials/_sidebar.html -->
      <?php
		include '../include/sidebar.php';
	  ?>
      <!-- partial -->
      <div class="main-panel">
        
					
            <form method="post" action="" enctype="multipart/form-data" style="margin-bottom: 00px;">
              <div class="content-wrapper">
                <div class="row">
				<?php
					include '../include/connect.php';
					$sql = $link->rawQuery('select * from theme');
					if($link->count > 0)
					{
						foreach($sql as $s)
						{
							?>
							
							<div class="col-4">
							<div class="card">
							<div class="card-body">
							<div class="row">
								<div class="col-12">
								  <div class="row portfolio-grid">
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
									  <figure class="">
										<img src="../../Admin-Panel/theme/<?php echo $s['theme_icon']; ?>" alt="image"/>
										<figcaption>
										  <a href="../../Admin-Panel/theme/upload/<?php echo $s['theme_url']; ?>" target="_blank" style="color: white;"><h4><?php echo $s['theme_name']; ?></h4></a>
										</figcaption>
									  </figure>
									  <?php
									    $t=$link->rawQueryOne('select theme_id from vendor where vendor_id=?',Array($_SESSION['vendor_id']));
										if($s['theme_id']==$t['theme_id'])
										{
											?>
											<center><button type="submit" class="btn btn-primary btn-rounded btn-fw" name="submit" value="<?php echo $s['theme_id']; ?>" style="background-color: green;border-color: green;" disabled>Applied</button></center>
											<?php
										}
										else
										{	
											?>
											 <center><button type="submit" class="btn btn-primary btn-rounded btn-fw" name="submit" value="<?php echo $s['theme_id']; ?>">Apply</button></center>
											<?php
										}
									  ?>
									 
									</div>
								  </div>
								</div>
							</div>
							</div>
							</div>
							</div>
							
							
				<?php
						}
					}
				?>
                </div>
			  </div>
              
            </form>
          
        
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <?php
			include '../include/footer.php';
		?>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../js/vendor.bundle.base.js"></script>
  <script src="../js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="../js/off-canvas.js"></script>
  <script src="../js/hoverable-collapse.js"></script>
  <script src="../js/template.js"></script>
  <script src="../js/settings.js"></script>
  <script src="../js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
</body>
</html>
