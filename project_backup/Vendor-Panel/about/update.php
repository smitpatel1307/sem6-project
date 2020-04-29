<?php
session_start();
if(!isset($_SESSION['vendor_id']))
{
	header('location:../login.php');
}
include '../include/connect.php';
if(isset($_POST['submit']))
{
	$about_id=$_POST['about_id'];
	$vendor_id=$_POST['vendor_id'];
	$description=$_POST['description'];
	$mission=$_POST['mission'];
	$vision=$_POST['vision'];
	$success=$_POST['success'];
	
	$s=$link->rawQueryOne('select * from about where about_id=?',Array($about_id));
    if($link->count > 0)
	{
		$baner_image=$s['baner_image'];
		$about_image=$s['about_image'];
	}
	
	$link->where('about_id',$about_id);
	$u=$link->update('about',Array('description'=>$description,'about_mission'=>$mission,'about_vision'=>$vision,'about_success'=>$success));
	if($u)
	{
		$icon = $_FILES["bimage"]["name"];
		$ext = pathinfo($icon,PATHINFO_EXTENSION);
		$name = "banner".$about_id.".".$ext;
		if(move_uploaded_file($_FILES["bimage"]["tmp_name"],'image/'.$name))
		{
			$link->where('about_id',$about_id);
			$ui = $link->update('about',Array('baner_image'=>'image/'.$name));
			if($ui)
			{
				header('location:view_about.php');
			}
		}
		else
		{
			$link->where('about_id',$about_id);
			$ui = $link->update('about',Array('baner_image'=>$baner_image));
			if($ui)
			{
				header('location:view_about.php');
			}
		}
		
		$icon1 = $_FILES["aimage"]["name"];
		$ext1 = pathinfo($icon1,PATHINFO_EXTENSION);
		$name1 = "about".$about_id.".".$ext1;
		if(move_uploaded_file($_FILES["aimage"]["tmp_name"],'image/'.$name1))
		{
			$link->where('about_id',$about_id);
			$ui = $link->update('about',Array('about_image'=>'image/'.$name1));
			if($ui)
			{
				header('location:view_about.php');
			}
		}
		else
		{
			$link->where('about_id',$about_id);
			$ui = $link->update('about',Array('about_image'=>$about_image));
			if($ui)
			{
				header('location:view_about.php');
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
  <title>QuickSearch|Vendor|Update About</title>
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
  
	document.getElementById("validbimage").innerHTML = "";
	document.getElementById("validaimage").innerHTML = "";
	document.getElementById("validdescription").innerHTML = "";
	document.getElementById("validmission").innerHTML = "";
	document.getElementById("validvision").innerHTML = "";
	document.getElementById("validsuccess").innerHTML = "";
		
	var description = document.data.description.value;
	var reg=/^[A-Za-z\d\.\-_\s]+$/;
   	if(description == "")
   	{
   		document.getElementById("validdescription").innerHTML = "Enter Description";
		s=false;
   	}
	else if(!reg.test(description))
	{
		document.getElementById("validdescription").innerHTML="Enter valid Description";
		s=false;
	}
		
	var mission = document.data.mission.value;
	var reg=/^[A-Za-z\d\.\-_\s]+$/;
   	if(mission == "")
   	{
   		document.getElementById("validmission").innerHTML = "Enter Mission";
		s=false;
   	}
	else if(!reg.test(mission))
	{
		document.getElementById("validmission").innerHTML="Enter valid Mission";
		s=false;
	}
	
	var vision = document.data.vision.value;
	var reg=/^[A-Za-z\d\.\-_\s]+$/;
   	if(vision == "")
   	{
   		document.getElementById("validvision").innerHTML = "Enter Vision";
		s=false;
   	}
	else if(!reg.test(vision))
	{
		document.getElementById("validvision").innerHTML="Enter valid Vision";
		s=false;
	}
	
	var aimage=document.data.aimage.value;
	if(aimage!="")
	{
		var file1=document.getElementById('aimage').files[0];
		var Extension1 = file1.type.split('/').pop().toLowerCase();
		if (Extension1 != "gif" && Extension1 != "png" && Extension1 != "bmp" && Extension1 != "jpeg" && Extension1 != "jpg") 
		{
			document.getElementById('validaimage').innerHTML="Image only allows file types of GIF, PNG, JPG, JPEG and BMP. ";
			s=false;
		}
		else if(file1.size > 1024000)
		{
			document.getElementById('validaimage').innerHTML="Image is too large";
			s=false;
		}
	}
	
	var success = document.data.success.value;
	var reg=/^[A-Za-z\d\.\-_\s]+$/;
   	if(success == "")
   	{
   		document.getElementById("validsuccess").innerHTML = "Enter Success Details";
		s=false;
   	}
	else if(!reg.test(success))
	{
		document.getElementById("validsuccess").innerHTML="Enter valid Success Details";
		s=false;
	}
	
	var bimage=document.data.bimage.value;
	if(bimage!="")
	{
		var file=document.getElementById('bimage').files[0];
		var Extension = file.type.split('/').pop().toLowerCase();
		if (Extension != "gif" && Extension != "png" && Extension != "bmp" && Extension != "jpeg" && Extension != "jpg") 
		{
			document.getElementById('validbimage').innerHTML="Image only allows file types of GIF, PNG, JPG, JPEG and BMP. ";
			return false;
		}
		else if(file.size > 1024000)
		{
			document.getElementById('validbimage').innerHTML="Image is too large";
			return false;
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
				<?php
					$about_id=$_GET['about_id'];
					$s=$link->rawQueryOne('select * from about where about_id=?',Array($about_id));
					if($link->count > 0)
					{
						$baner_image=$s['baner_image'];
						$about_image=$s['about_image'];
						$description=$s['description'];
						$mission=$s['about_mission'];
						$vision=$s['about_vision'];
						$success=$s['about_success'];
					}
				?>
                  <h4 class="card-title">About form</h4>
                  <form class="forms-sample" method="post" enctype="multipart/form-data" name="data" id="data">
				  <input type="hidden" name="vendor_id" value="<?php echo $_SESSION['vendor_id']; ?>">
				  <div>
					<input type="hidden" name="about_id" value="<?php echo $_GET['about_id']; ?>">
				  </div>
                    <div class="form-group">
                      <label>Banner Image</label>
                      <input type="file" name="bimage" class="file-upload-default" id="bimage">
                      <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" value="<?php echo $baner_image; ?>" disabled>
                        <span class="input-group-append">
                          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                      </div>
					  <div class="input-group col-xs-12">
                        <img src="<?php echo $baner_image; ?>" height="50px" width="50px">
                      </div>
					  <span id="validbimage" style="color:red;"></span>
                    </div>
					<div class="form-group">
                      <label>About Image</label>
                      <input type="file" name="aimage" class="file-upload-default" id="aimage">
                      <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" value="<?php echo $about_image; ?>" disabled>
                        <span class="input-group-append">
                          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                      </div>
					  <div class="input-group col-xs-12">
                        <img src="<?php echo $about_image; ?>" height="50px" width="50px">
                      </div>
					  <span id="validaimage" style="color:red;"></span>
                    </div>
                    <div class="form-group">
                      <label for="exampleTextarea1">Description</label>
                      <textarea class="form-control" id="description" rows="4" name="description"><?php echo $description; ?></textarea>
					  <span id="validdescription" style="color:red;"></span>
                    </div>
					<div class="form-group">
                      <label for="exampleTextarea1">About Mission</label>
                      <textarea class="form-control" id="mission" rows="4" name="mission"><?php echo $mission; ?></textarea>
					  <span id="validmission" style="color:red;"></span>
                    </div>
					<div class="form-group">
                      <label for="exampleTextarea1">About Vision</label>
                      <textarea class="form-control" id="vision" rows="4" name="vision"><?php echo $vision; ?></textarea>
					  <span id="validvision" style="color:red;"></span>
                    </div>
					<div class="form-group">
                      <label for="exampleTextarea1">About Success</label>
                      <textarea class="form-control" id="success" rows="4" name="success"><?php echo $success; ?></textarea>
					  <span id="validsuccess" style="color:red;"></span>
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
