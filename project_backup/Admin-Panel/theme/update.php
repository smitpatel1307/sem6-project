<?php
session_start();
if(!isset($_SESSION['admin_id']))
{
	header('location:../index.php');
}
include '../include/connect.php';
if(isset($_POST['submit']))
{
	$theme_name=$_POST['theme_name'];
	$theme_url=$_POST['theme_url'];
	$theme_id=$_POST['theme_id'];
	
	$s=$link->rawQueryOne('select theme_icon from theme where theme_id=?',Array($theme_id));
	  if($link->count > 0)
	  {
		  $theme_icon=$s['theme_icon'];
	  }
	
	$link->where('theme_id',$theme_id);
	$u=$link->update('theme',Array('theme_name'=>$theme_name,'theme_url'=>$theme_url));
	if($u)
	{
		$icon = $_FILES["themeicon"]["name"];
		$ext = pathinfo($icon,PATHINFO_EXTENSION);
		$name = "theme".$theme_id.".".$ext;
		if(move_uploaded_file($_FILES["themeicon"]["tmp_name"],'image/'.$name))
		{
			$link->where('theme_id',$theme_id);
			$ui = $link->update('theme',Array('theme_icon'=>'image/'.$name));
			if($ui)
			{
				header('location:viewtheme.php');
			}
		}
		else
		{
			$link->where('theme_id',$theme_id);
			$ui = $link->update('theme',Array('theme_icon'=>$theme_icon));
			if($ui)
			{
				header('location:viewtheme.php');
			}
		}
	}
}
if(isset($_POST['cancel']))
{
	$_POST['theme_name']="";
	$_POST['theme_url']="";
	$_POST['icon']="";
}
?>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>QuickSearch|Admin|Update Theme</title>
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
	
	document.getElementById("validname").innerHTML = "";
	document.getElementById("validurl").innerHTML = "";
	document.getElementById("validicon").innerHTML = "";
	
	var validname = document.data.themename.value;
	var reg=/^[a-zA-Z]+$/;
   	if(validname == "")
   	{
   		document.getElementById("validname").innerHTML = "Enter Theme Name";
		s=false;
   	}
	else if(!reg.test(validname))
	{
		document.getElementById("validname").innerHTML="Enter valid Theme";
		s=false;
	}
	
	var url = document.data.themeurl.value;
	var reg = /^[a-zA-Z0-9\-\.\/]+$/;
   	if(url == "")
   	{
   		document.getElementById("validurl").innerHTML = "Enter Theme URL";
		s=false;
   	}
	else if(!reg.test(url))
	{
		document.getElementById("validurl").innerHTML="Enter valid Theme URL";
		s=false;
	}
	
	var icon=document.data.ticon.value;
	if(icon!="")
	{
		var file=document.getElementById('ticon').files[0];
		var Extension = file.type.split('/').pop().toLowerCase();
		if (Extension != "gif" && Extension != "png" && Extension != "bmp" && Extension != "jpeg" && Extension != "jpg") 
		{
			document.getElementById('validicon').innerHTML="Icon only allows file types of GIF, PNG, JPG, JPEG and BMP. ";
			s=false;
		}
		else if(file.size > 1024000)
		{
			document.getElementById('validicon').innerHTML="Icon is too large";
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
	  <?php
	  include '../include/connect.php';
	  $theme_id=$_GET['theme_id'];
	  
	  $s=$link->rawQueryOne('select * from theme where theme_id=?',Array($theme_id));
	  if($link->count > 0)
	  {
		  $theme_name=$s['theme_name'];
		  $theme_url=$s['theme_url'];
		  $theme_icon=$s['theme_icon'];
	  }
	  ?>
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Theme Form</h4>
                  <p class="card-description">
                    
                  </p>
                  <form class="forms-sample" method='post' enctype="multipart/form-data" name="data" id="data"> 
				  <div>
				  <input type="hidden" name="theme_id" value="<?php echo $theme_id; ?>">
				  </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Theme Name</label>
                      <input type="text" class="form-control" name="theme_name" value="<?php echo $theme_name; ?>" id="themename">
					  <span id="validname" style="color:red;"></span>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Theme URL</label>
                      <input type="text" class="form-control" name="theme_url" value="<?php echo $theme_url; ?>" id="themeurl">
					  <span id="validurl" style="color:red;"></span>
                    </div>
                   
                    <div class="form-group">
                      <label>Theme Icon</label>
                      <input type="file" name="themeicon" class="file-upload-default" id="ticon">
                     
					<div class="input-group col-xs-6"> 
                        <input type="text" class="form-control file-upload-info" disabled value="<?php echo $theme_icon; ?>" name="theme_icon">
                        <span class="input-group-append">
                          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
					  </div>
					 <div class="input-group col-xs-12">
						<img src="<?php echo $theme_icon; ?>" height="50" width="50">
					  </div>
                      <span id="validicon" style="color:red;"></span>
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

