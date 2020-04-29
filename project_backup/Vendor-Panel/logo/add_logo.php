<?php
session_start();
if(!isset($_SESSION['vendor_id']))
{
	header("location:../login.php");
}
include '../include/connect.php';
if(isset($_POST['submit']))
{
	$vendor_id=$_SESSION['vendor_id'];
	$sql = $link->rawQuery('select * from logo where vendor_id=?',Array($vendor_id));
	if($link->count > 0)
	{
		foreach($sql as $s)
		{
			$logo_id=$s['logo_id'];
			$icon = $_FILES["image"]["name"];
			$ext = pathinfo($icon,PATHINFO_EXTENSION);
			$name = "logo".$logo_id.".".$ext;
			if(move_uploaded_file($_FILES["image"]["tmp_name"],'image/'.$name))
			{
				$link->where('logo_id',$logo_id);
				$ui = $link->update('logo',Array('image'=>'image/'.$name));
				if($ui)
				{
					header('location:view_logo.php');
				}
			}
		}
	}
	else
	{
		$vendor_id=$_SESSION['vendor_id'];
		$i=$link->insert('logo',Array('vendor_id'=>$vendor_id));
		if($i)
		{
			$icon = $_FILES["image"]["name"];
			$ext = pathinfo($icon,PATHINFO_EXTENSION);
			$name = "logo".$i.".".$ext;
			if(move_uploaded_file($_FILES["image"]["tmp_name"],'image/'.$name))
			{
				$link->where('logo_id',$i);
				if($link->update('logo',Array('image'=>'image/'.$name)))
				{
					header('location:view_logo.php');
				}
			}
		}
	}
}
?>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>QuickSearch|Vendor|Add Logo</title>
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
	if (FileUploadPath == '') 
	{
        document.getElementById('validimage').innerHTML="Please upload an image";
		return false;
    } 
	else 
	{
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
                  <h4 class="card-title">Add Logo</h4>
                  <form class="forms-sample" method="post" enctype="multipart/form-data" name="data" id="data">
                    <div class="form-group">
                      <label>Logo</label>
                      <input type="file" name="image" class="file-upload-default" id="image">
                      <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                        <span class="input-group-append">
                          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
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
