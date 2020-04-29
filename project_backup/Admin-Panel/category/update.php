<?php
session_start();
if(!isset($_SESSION['admin_id']))
{
	header('location:../index.php');
}
include '../include/connect.php';
if(isset($_POST['submit']))
{
	$category_name=$_POST['cname'];
	$category_image=$_POST['cimage'];
	$category_id=$_POST['category_id'];
	
	$s=$link->rawQueryOne('select * from category where category_id=?',Array($category_id));
    if($link->count > 0)
	{
		$category_image=$s['category_image'];
	}
	
	$link->where('category_id',$category_id);
	$u=$link->update('category',Array('category_name'=>$category_name));
	if($u)
	{
		$icon = $_FILES["cimage"]["name"];
		$ext = pathinfo($icon,PATHINFO_EXTENSION);
		$name = "category".$category_id.".".$ext;
		if(move_uploaded_file($_FILES["cimage"]["tmp_name"],'image/'.$name))
		{
			$link->where('category_id',$category_id);
			$ui = $link->update('category',Array('category_image'=>'image/'.$name));
			if($ui)
			{
				header('location:viewcategory.php');
			}
		}
		else
		{
			$link->where('category_id',$category_id);
			$ui = $link->update('category',Array('category_image'=>$category_image));
			if($ui)
			{
				header('location:viewcategory.php');
			}
		}
	}
}
if(isset($_POST['cancel']))
{
	$_POST['cname']="";
	$_POST['image']="";
}
?>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>QuickSearch|Admin|Update Category</title>
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
	var s=true;
	
	document.getElementById("cspan").innerHTML = "";
	document.getElementById("validimage").innerHTML = "";
	
	var validname = document.data.cname.value;
	var reg=/^[a-zA-Z ]+$/;
   	if(validname == "")
   	{
   		document.getElementById("cspan").innerHTML = "Enter Category Name";
		s=false;
   	}
	else if(!reg.test(validname))
	{
		document.getElementById("cspan").innerHTML="Enter valid Category";
		s=false;
	}

	var image=document.data.cimage.value;
	if(image!="")
	{
	var file=document.getElementById('cimage').files[0];
    var Extension = file.type.split('/').pop().toLowerCase();
	if (Extension != "gif" && Extension != "png" && Extension != "bmp" && Extension != "jpeg" && Extension != "jpg") 
	{
		document.getElementById('validimage').innerHTML="Photo only allows file types of GIF, PNG, JPG, JPEG and BMP. ";
		s=false;
    }
	else if(file.size > 1024000)
	{
		document.getElementById('validimage').innerHTML="Image is too large";
		s=false;
	}
	}

	return (s);
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
                  <h4 class="card-title">Category Form</h4>
                  <p class="card-description">
                    
                  </p>
				  <?php
					  //include '../include/connect.php';
					  $category_id=$_GET['category_id'];
					  
					  $s=$link->rawQueryOne('select * from category where category_id=?',Array($category_id));
					  if($link->count > 0)
					  {
						  $category_name=$s['category_name'];
						  $category_image=$s['category_image'];
					  }
				?>
                  <form class="forms-sample" method='post' enctype='multipart/form-data' name="data">
				  <div>
					<input type="hidden" name="category_id" value="<?php echo $category_id; ?>">
				  </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Category Name</label>
                      <input type="text" class="form-control" id="cname" value="<?php echo $category_name; ?>" name='cname'>
					  <span id="cspan" style="color:red;"></span>
                    </div>
                    
                    <div class="form-group">
                      <label>Category Image</label>
                      <input type="file" name="cimage" class="file-upload-default" id="cimage">
					  <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled value="<?php echo $category_image; ?>" name="image">
                        <span class="input-group-append">
                          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
						</div>
					  <div class="input-group col-xs-12">
						<img src="<?php echo $category_image; ?>" height="50" width="50">
					  </div>
                      <span id="validimage" style="color:red;"></span>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2" name='submit' id="submit" onclick="return(validate());">Submit</button>
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
