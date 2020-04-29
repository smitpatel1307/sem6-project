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
	
	$i = $link->insert('theme',Array('theme_name'=>$theme_name,'theme_url'=>$theme_url));
	if($i)
	{
		$icon = $_FILES["themeicon"]["name"];
		$ext = pathinfo($icon,PATHINFO_EXTENSION);
		$name = "theme".$i.".".$ext;
		if(move_uploaded_file($_FILES["themeicon"]["tmp_name"],'image/'.$name))
		{
			$link->where('theme_id',$i);
			if($link->update('theme',Array('theme_icon'=>'image/'.$name)))
			{
				header('location:viewtheme.php');
			}
		}
		
		//$output = '';  
      if($_FILES['theme1']['name'] != '')  
      {  
           $file_name = $_FILES['theme1']['name'];  
           $array = explode(".", $file_name);  
           $name = $array[0];  
           $ext = $array[1];  
           if($ext == 'zip')  
           {  
                $path = 'upload/';  
                $location = $path . $file_name;  
                if(move_uploaded_file($_FILES['theme1']['tmp_name'], $location))  
                {  
                     $zip = new ZipArchive;  
                     if($zip->open($location))  
                     {  
                          $zip->extractTo($path);  
                          $zip->close();  
                     }  
                     $files = scandir($path . $name);  
                     //$name is extract folder from zip file  
                     foreach($files as $file)  
                     {  
                          $file_ext = end(explode(".", $file));  
                          $allowed_ext = array('jpg', 'png');  
                          if(in_array($file_ext, $allowed_ext))  
                          {  
                               $new_name = md5(rand()).'.' . $file_ext;  
                              // $output .= '<div class="col-md-6"><div style="padding:16px; border:1px solid #CCC;"><img src="upload/'.$new_name.'" width="170" height="240" /></div></div>';  
                               copy($path.$name.'/'.$file, $path . $new_name);  
                               unlink($path.$name.'/'.$file);  
                          }       
                     }  
                     unlink($location);  
                    // rmdir($path . $name);  
                }  
           }  
      } 
	}
	else
	{
		header('location:addtheme.php');
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
  <title>QuickSearch|Admin|Add Theme</title>
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
	var reg=/^[a-zA-Z ]+$/;
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
	var reg = /^[a-zA-Z0-9\/\-\.]+$/;
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
	
	var fuData = document.getElementById('ticon');
    var FileUploadPath = fuData.value;
	if (FileUploadPath == '') 
	{
        document.getElementById('validicon').innerHTML="Please upload an icon";
		s=false;
    } 
	else 
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
	
	var fuData1 = document.getElementById('theme1');
    var FileUploadPath1 = fuData1.value;
	if (FileUploadPath1 == '') 
	{
        document.getElementById('validtheme').innerHTML="Please upload theme";
		s=false;
    } 
	else 
	{
		var fup = document.getElementById('theme1');
		var fileName = fup.value;
		var ext = fileName.substring(fileName.lastIndexOf('.') + 1);
		if(ext != "zip")
		{
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
                  <h4 class="card-title">Add Theme</h4>
                  <p class="card-description">
                    
                  </p>
                  <form class="forms-sample" method='post' enctype="multipart/form-data" name="data" id="data">
                    <div class="form-group">
                      <label for="exampleInputName1">Theme Name</label>
                      <input type="text" class="form-control" id="themename" placeholder="Theme Name" name="theme_name">
					  <span id="validname" style="color:red;"></span>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Theme URL</label>
                      <input type="text" class="form-control" id="themeurl" placeholder="Theme URL" name="theme_url">
					  <span id="validurl" style="color:red;"></span>
                    </div>
                   
                    <div class="form-group">
                      <label>Theme Icon</label>
                      <input type="file" name="themeicon" class="file-upload-default" id="ticon">
                      <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image" name="icon">
                        <span class="input-group-append">
                          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                      </div>
					  <span id="validicon" style="color:red;"></span>
                    </div>
					
					<div class="form-group">
                      <label>Theme Folder</label>
                      <input type="file" name="theme1" class="file-upload-default" id="theme1">
                      <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Theme" name="theme">
                        <span class="input-group-append">
                          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                      </div>
					  <span id="validtheme" style="color:red;"></span>
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

