<?php
session_start();
if(!isset($_SESSION['admin_id']))
{
	header('location:../index.php');
}
include '../include/connect.php';
if(isset($_POST['submit']))
{
	$type_name=$_POST['btype'];
	$type_id=$_POST['type_id'];
	
	$link->where('type_id',$type_id);
	$u=$link->update('type',Array('type_name'=>$type_name));
	if($u)
	{
		header('location:viewbusinesstype.php');	
	}
}
?>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>QuickSearch|Admin|Update Business Type</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../css/themify-icons.css">
  <link rel="stylesheet" href="../css/vendor.bundle.base.css">
  <link rel="stylesheet" href="../css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="http://www.urbanui.com/">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../images/favicon.png" />
  <script>
  function validate()
  {	
	document.getElementById("validtype").innerHTML = "";
	
	var validtype = document.data.btype.value;
	var reg=/^[a-zA-Z]+$/;
   	if(validtype == "")
   	{
   		document.getElementById("validtype").innerHTML = "Enter Business Type";
		return false;
   	}
	if(!reg.test(validtype))
	{
		document.getElementById("validtype").innerHTML="Enter valid Business Type";
		return false;
	}
	return (true);
  }
  </script>
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
          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Business Type Form</h4>
                  <p class="card-description">
                    
                  </p>
				  <?php
					  include '../include/connect.php';
					  $type_id=$_GET['type_id'];
					  
					  $s=$link->rawQueryOne('select * from type where type_id=?',Array($type_id));
					  if($link->count > 0)
					  {
						  $type_name=$s['type_name'];
					  }
				?>
                  <form class="forms-sample" method='post' enctype='multipart/form-data' name="data" id="data">
				  <div>
					<input type="hidden" name="type_id" value="<?php echo $type_id; ?>">
				  </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Type Name</label>
                      <input type="text" class="form-control" id="typename" value="<?php echo $type_name; ?>" name='btype'>
					  <span id="validtype" style="color:red;"></span>
                    </div>
                  
                    <button type="submit" class="btn btn-primary mr-2" name='submit' onclick="return(validate());">Submit</button>
                    <button class="btn btn-light" name="cancel">Cancel</button>
                  </form>
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
  <script src="../js/file-upload.js"></script>
  <script src="../js/iCheck.js"></script>
  <script src="../js/typeahead.js"></script>
  <script src="../js/select2.js"></script>
  <!-- End custom js for this page-->
</body>
</html>
