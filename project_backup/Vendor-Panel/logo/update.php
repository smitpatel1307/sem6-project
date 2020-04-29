<?php
session_start();
if(!isset($_SESSION['vendor_id']))
{
	header('location:../login.php');
}
include '../include/connect.php';
if(isset($_POST['submit']))
{
	$logo_id=$_POST['logo_id'];
	$logo_image=$_POST['image'];
	$s=$link->rawQueryOne('select * from logo where logo_id=?',Array($logo_id));
    if($link->count > 0)
	{
		$logo_image=$s['image'];
	}
		$icon = $_FILES["image"]["name"];
		$ext = pathinfo($icon,PATHINFO_EXTENSION);
		$name = "logo".$logo_id.".".$ext;
		if(move_uploaded_file($_FILES["image"]["tmp_name"],'image/'.$name))
		{
			$link->where('logo_id',$logo_id);
			$ui = $link->update('logo',Array('image'=>$logo_image));
			if($ui)
			{
				header('location:view_logo.php');
			}
		}
		else
		{
			$link->where('logo_id',$logo_id);
			$ui = $link->update('logo',Array('image'=>$logo_image));
			if($ui)
			{
				header('location:view_logo.php');
			}
		}
}
?>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>QuickSearch|Vendor|Update Logo</title>
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
	document.getElementById("validimage").innerHTML = "";
	
	var fuData = document.getElementById('image');
    var FileUploadPath = fuData.value;
		var file=document.getElementById('image').files[0];
        var Extension = file.type.split('/').pop().toLowerCase();
		if (Extension != "gif" && Extension != "png" && Extension != "bmp" && Extension != "jpeg" && Extension != "jpg") 
		{
			document.getElementById('validimage').innerHTML="Image only allows file types of GIF, PNG, JPG, JPEG and BMP. ";
			return false;
        }
		if(file.size > 1024000)
		{
			document.getElementById('validimage').innerHTML="Image is too large";
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
				<?php
					$logo_id=$_GET['logo_id'];
					$s=$link->rawQueryOne('select * from logo where logo_id=?',Array($logo_id));
					if($link->count > 0)
					{
						$logo_image=$s['image'];
					}
				?>
                  <h4 class="card-title">Logo form</h4>
                  <form class="forms-sample" method="post" enctype="multipart/form-data" name="data" id="data">
				   <div>
					<input type="hidden" name="logo_id" value="<?php echo $_GET['logo_id']; ?>">
				  </div>
                    <div class="form-group">
                      <label>Image</label>
                      <input type="file" name="image" class="file-upload-default" id="image">
                      <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" value="<?php echo $logo_image; ?>" disabled>
                        <span class="input-group-append">
                          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                      </div>
					  <div class="input-group col-xs-12">
                        <img src="<?php echo $logo_image; ?>" height="50px" width="50px">
                      </div>
					  <span id="validimage" style="color:red;"></span>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2" name="submit" onclick="return(validate());">Submit</button>
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
