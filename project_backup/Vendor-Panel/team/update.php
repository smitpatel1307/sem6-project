<?php
session_start();
if(!isset($_SESSION['vendor_id']))
{
	header('location:../login.php');
}
include '../include/connect.php';
if(isset($_POST['submit']))
{
	$team_id=$_POST['team_id'];
	$vendor_id=$_POST['vendor_id'];
	$name=$_POST['name'];
	$designation=$_POST['designation'];
	$sdescription=$_POST['sdescription'];
	
	$s=$link->rawQueryOne('select * from team where team_id=?',Array($team_id));
	if($link->count > 0)
	{
		$team_image=$s['team_image'];
	}
	$link->where('team_id',$team_id);
	$u=$link->update('team',Array('name'=>$name,'designation'=>$designation,'short_description'=>$sdescription));
	if($u)
	{
		$icon = $_FILES["teamimage"]["name"];
		$ext = pathinfo($icon,PATHINFO_EXTENSION);
		$name = "team".$team_id.".".$ext;
		if(move_uploaded_file($_FILES["teamimage"]["tmp_name"],'image/'.$name))
		{
			$link->where('team_id',$team_id);
			$ui = $link->update('team',Array('team_image'=>'image/'.$name));
			if($ui)
			{	
				header('location:view_team.php');
			}
		}
		else
		{
			$link->where('team_id',$team_id);
			$ui = $link->update('team',Array('team_image'=>$team_image));
			if($ui)
			{	
				header('location:view_team.php');
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
  <title>QuickSearch|Vendor|Update Team</title>
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
		
		document.getElementById("validimage").innerHTML = "";
		document.getElementById("validname").innerHTML = "";
		document.getElementById("validdesignation").innerHTML = "";
		document.getElementById("validdescription").innerHTML = "";
		
		var timage=document.data.teamimage.value;
		if(timage!="")
		{
			var file=document.getElementById('teamimage').files[0];
			var Extension = file.type.split('/').pop().toLowerCase();
			if (Extension != "gif" && Extension != "png" && Extension != "bmp" && Extension != "jpeg" && Extension != "jpg") 
			{
				document.getElementById('validimage').innerHTML="Image only allows file types of GIF, PNG, JPG, JPEG and BMP. ";
				s=false;
			}
			else if(file.size > 1024000)
			{
				document.getElementById('validimage').innerHTML="Image is too large";
				s=false;
			}
		}
		
		var name = document.data.name.value;
		var reg=/^[A-Za-z\s]+$/;
		if(name == "")
		{
			document.getElementById("validname").innerHTML = "Enter Team Name";
			s=false;
		}
		else if(!reg.test(name))
		{
			document.getElementById("validname").innerHTML="Enter valid Team Name";
			s=false;
		}
		
		var designation = document.data.designation.value;
		var reg=/^[A-Za-z\s]+$/;
		if(designation == "")
		{
			document.getElementById("validdesignation").innerHTML = "Enter Designation";
			s=false;
		}
		else if(!reg.test(designation))
		{
			document.getElementById("validdesignation").innerHTML="Enter valid Designation";
			s=false;
		}
		
		var description = document.data.sdescription.value;
		var reg=/^[A-Za-z\d\.\-_\,\s]+$/;
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
					$team_id=$_GET['team_id'];
					$s=$link->rawQueryOne('select * from team where team_id=?',Array($team_id));
					if($link->count > 0)
					{
						$team_image=$s['team_image'];
						$designation=$s['designation'];
						$name=$s['name'];
						$sdescription=$s['short_description'];
					}
				?>
                  <h4 class="card-title">Team form</h4>
                  <form class="forms-sample" method="post" enctype="multipart/form-data" name="data" id="data">
				   <div>
				  <input type="hidden" name="team_id" value="<?php echo $_GET['team_id']; ?>">
				  </div>
                    <div class="form-group">
                      <label>Team Image</label>
                      <input type="file" name="teamimage" class="file-upload-default" id="teamimage">
                      <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" value="<?php echo $team_image; ?>" disabled >
                        <span class="input-group-append">
                          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                      </div>
					  <div class="input-group col-xs-12">
						<img src="<?php echo $team_image; ?>" height="50" width="50">
					  </div>
					  <span id="validimage" style="color:red;"></span>
                    </div>
					<div class="form-group">
                      <label for="exampleInputName1">Name</label>
                      <input type="text" class="form-control" id="name" name="name" value="<?php echo $name;?>">
					  <span id="validname" style="color:red;"></span>
                    </div>
					<div class="form-group">
                      <label for="exampleInputName1">Designation</label>
                      <input type="text" class="form-control" id="designation" name="designation" value="<?php echo $designation;?>">
					  <span id="validdesignation" style="color:red;"></span>
                    </div>   
					<div class="form-group">
                      <label for="exampleTextarea1">Short Description</label>
                      <textarea class="form-control" id="sdescription" rows="4" name="sdescription"><?php echo $sdescription; ?></textarea>
					  <span id="validdescription" style="color:red;"></span>
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
