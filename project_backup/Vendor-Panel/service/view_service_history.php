<?php
session_start();
include '../include/connect.php';
if(isset($_POST['submit']))
{
	$service_id=$_POST['submit'];
	$link->where('service_id',$service_id);
	$u=$link->update('service',Array('is_active'=>"1"));
	header('location:view_service.php');
}
?>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>QuickSearch|Vendor|View Service</title>
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
              <h4 class="card-title">View Service History</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
				  <form method="post">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
							<th>Title</th>
							<th>Description</th>
                            <th>Banner Image</th>
                            <th>Service Image</th>
                            <th>Icon</th>
                            <th>Sort Order</th>
							<th>Short Description</th>
                            <th>Deactivate</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
							include '../include/connect.php';
							$vendor_id=$_SESSION['vendor_id'];
							$sql = $link->rawQuery('select * from service where is_active=? and vendor_id=?',Array("0",$vendor_id));
							if($link->count > 0)
							{
								foreach($sql as $s)
								{
						?>
									<tr>
										<td><?php echo $s['title']; ?></td>
										<td><?php echo $s['description']; ?></td>
										<td><img src="<?php echo $s['banner_image']; ?>" height='100' width='100'></td>
										<td><img src="<?php echo $s['service_image']; ?>" height='100' width='100'></td>
										<td><img src="<?php echo $s['icon']; ?>" height='100' width='100'></td>
										<td><?php echo $s['sortorder']; ?></td>
										<td><?php echo $s['short_description']; ?></td>
										<td><button type="submit" class="btn btn-primary mr-2" name="submit" value="<?php echo $s['service_id']; ?>">Active</button></td>
									</tr>
						<?php
								}
							}
						?>
                      </tbody>
                    </table>
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
  </form>
</body>
</html>
