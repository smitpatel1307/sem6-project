<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>QuickSearch|Admin|View Vendor</title>
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
	session_start();
		include '../include/header.php';
	?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_settings-panel.html -->
    
      <!-- partial -->
      <!-- partial:../../partials/_sidebar.html -->
      <?php
	      include '../include/sidebar.php';
	  ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Vendors</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
				  <form method="post" action="approve.php" id="data" name="data">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            
                            <th>Shop Name</th>
                            <th>Vendor Image</th>
                            <th>Vendor Name</th>
							<th>Vendor Email</th>
                            <th>Contact No</th>
                            <th>Company IDProof</th>
							<th>Description</th>
							<th>Address</th>
							<th>Registration Date</th>
							<th>Category</th>
							<th>Type</th>
							<th>Theme</th>
							<th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
							include '../include/connect.php';
							$sql = $link->rawQuery('select * from vendor where approve!=1');
							if($link->count > 0)
							{
								foreach($sql as $s)
								{
						?>
									<tr>
										<td><?php echo $s['shop_name']; ?></td>
										<td><img src="<?php echo $s['vendor_image']; ?>" height='50' width='50'></td>
										<td><?php echo $s['vendor_name']; ?></td>
										<td><?php echo $s['vendor_email']; ?></td>
										<td><?php echo $s['vendor_contactno']; ?></td>
										<td><img src="<?php echo $s['vendor_company_idproof']; ?>" height='50' width='50'></td>
										<td><?php echo $s['description']; ?></td>
										<td><?php echo $s['address']; ?></td>
										<td><?php echo $s['registration_date']; ?></td>
										<?php
											
											$c = $link->rawQueryOne("select category_name from category where category_id=?",Array($s['category_id']));
											
										?>
										<td><?php echo $c['category_name']; ?></td>
										<?php
											
											$c = $link->rawQueryOne("select type_name from type where type_id=?",Array($s['type_id']));
											
										?>
										<td><?php echo $c['type_name']; ?></td>
										<?php
											
											$c = $link->rawQueryOne("select theme_name from theme where theme_id=?",Array($s['theme_id']));
											
										?>
										<td><?php echo $c['theme_name']; ?></td>
										<?php
											$a=$s['approve'];
											if($a==2)
											{
										?>
										<td><button type="submit" class="btn btn-primary mr-2" name="disapprove" value="<?php echo $s['vendor_id']; ?>" style="background-color: #c11212;border-color: #c11212;">Disapprove</button></td>
										<?php
											}
											else
											{
										?>
										<td><button type="submit" class="btn btn-primary mr-2" name="approve" value="<?php echo $s['vendor_id']; ?>" style="background-color: #008000eb;border-color: green;">Approve</button></td>
										<?php
											}
										?>
									</tr>
						<?php
								}
							}
						?>
                      </tbody>
                    </table>
					</form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
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
  <!-- inject:js -->
  <script src="../js/off-canvas.js"></script>
  <script src="../js/hoverable-collapse.js"></script>
  <script src="../js/template.js"></script>
  <script src="../js/settings.js"></script>
  <script src="../js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../js/data-table.js"></script>
  <!-- End custom js for this page-->
</body>
</html>
<?php 
					if(isset($_REQUEST['err']) && $_REQUEST['err'] == 1)
					{
						?>
						<script>alert('New Password has been mailed successfully.');</script>
					<?php
					} 
					else if(isset($_REQUEST['err']) && $_REQUEST['err'] == 2)
					{
						?><script>alert('Mail not sent Try again later.');</script>
					<?php
					}
					else if(isset($_REQUEST['err']) && $_REQUEST['err'] == 3)
					{
						?>
						<script>alert('Email Id does not exists.');</script>
					<?php
					}
				?>
