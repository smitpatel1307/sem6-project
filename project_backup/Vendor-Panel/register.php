<?php
session_start();
include 'include/connect.php';
if(isset($_POST['submit']))
{
	$s=$link->rawQuery('select * from vendor where vendor_email=?',Array($_POST['email']));
	if($link->count > 0)
	{
		foreach($s as $sql)
		{
			$vendorname=$_POST['vname'];
			$vendoremail=$_POST['email'];
			$contactno=$_POST['cno'];
			$_SESSION['vendor_name']=$_POST['vname'];
			$vendor_id=$sql['vendor_id'];
			
			$link->where('vendor_id',$vendor_id);
			$i = $link->update('vendor',Array('vendor_name'=>$vendorname,'vendor_email'=>$vendoremail,'vendor_contactno'=>$contactno,'approve'=>"1"));
			if($i)
			{
				$image = $_FILES["vimage"]["name"];
				$ext = pathinfo($image,PATHINFO_EXTENSION);
				$name = "vendor".$vendor_id.".".$ext;
				if(move_uploaded_file($_FILES["vimage"]["tmp_name"],'../Admin-Panel/vendor/image/'.$name))
				{
					$link->where('vendor_id',$vendor_id);
					if($link->update('vendor',Array('vendor_image'=>'image/'.$name)))
					{
						$_SESSION['vendor_id']=$vendor_id;
						header('location:register1.php');
					}
				}
			}
			else
			{
				header('location:register1.php');
			}
		}
	}
	else
	{
		$vendorname=$_POST['vname'];
		$vendoremail=$_POST['email'];
		$contactno=$_POST['cno'];
		$_SESSION['vendor_name']=$_POST['vname'];
		
		$i = $link->insert('vendor',Array('vendor_name'=>$vendorname,'vendor_email'=>$vendoremail,'vendor_contactno'=>$contactno,'approve'=>"1"));
		if($i)
		{
			$image = $_FILES["vimage"]["name"];
			$ext = pathinfo($image,PATHINFO_EXTENSION);
			$name = "vendor".$i.".".$ext;
			if(move_uploaded_file($_FILES["vimage"]["tmp_name"],'../Admin-Panel/vendor/image/'.$name))
			{
				$link->where('vendor_id',$i);
				if($link->update('vendor',Array('vendor_image'=>'image/'.$name)))
				{
					$_SESSION['vendor_id']=$i;
					header('location:register1.php');
				}
			}
		}
		else
		{
			header('location:register1.php');
		}
	}
}
?>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>QuickSearch|Vendor|Register</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="css/themify-icons.css">
  <link rel="stylesheet" href="css/vendor.bundle.base.css">
  <link rel="stylesheet" href="css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
  <script>
  function validate()
  {	
	var s=true;
		
	document.getElementById("validvendorname").innerHTML = "";
	document.getElementById("validimage").innerHTML = "";
	document.getElementById("validemail").innerHTML = "";
	document.getElementById("validcontactno").innerHTML = "";
	
	var validvname = document.data.vname.value;
	var reg=/^[a-zA-Z ]+$/;
   	if(validvname == "")
   	{
   		document.getElementById("validvendorname").innerHTML = "Enter Vendor Name";
		s=false;
   	}
	else if(!reg.test(validvname))
	{
		document.getElementById("validvendorname").innerHTML="Enter valid Vendor Name";
		s=false;
	}
	
	var fuData = document.getElementById('vimage');
    var FileUploadPath = fuData.value;
	if (FileUploadPath == '') 
	{
        document.getElementById('validimage').innerHTML="Please upload an image";
		s=false;
    } 
	else 
	{
		var file=document.getElementById('vimage').files[0];
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
	
	var email = document.data.email.value;
	var reg=/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
   	if(email == "")
   	{
   		document.getElementById("validemail").innerHTML = "Enter Vendor E-mail";
		s=false;
   	}
	else if(!reg.test(email))
	{
		document.getElementById("validemail").innerHTML="Enter valid Vendor E-mail";
		s=false;
	}
	
	var contactno = document.data.cno.value;
	var reg=/^[6789]{1}[0-9]{9}$/;
   	if(contactno == "")
   	{
   		document.getElementById("validcontactno").innerHTML = "Enter Vendor Contact NO";
		s=false;
   	}
	else if(!reg.test(contactno))
	{
		document.getElementById("validcontactno").innerHTML="Enter valid Vendor Contact NO";
		s=false;
	}
	
	return (s);
  }
  </script>
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0" style="background-image: url('images/back2.jpg'); position: fixed; width: 100%; height: 100%; background-size: cover; background-repeat: no-repeat; background-position: center;">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5" style="background:#0c0f1087;">
              <div class="brand-logo">
                <img src="images/search.png" style="height: 100px;width: 350px;">
              </div>
              <h4 style="color: white;">New here?</h4>
              <h5 class="font-weight-light" style="color: white;">Signing up is easy. It only takes a few steps</h5>
			  <h6 class="font-weight-light" style="color: white;">Personal Information</h6>
              <form class="pt-3" method="post" enctype="multipart/form-data" name="data" id="data">
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="vname" placeholder="Vendor Name" name="vname" style="color: #f8f9fa; border:1px solid #f8f9fa;">
				  <span id="validvendorname" style="color:red;"></span>
                </div>
				<div class="form-group">
                      <input type="file" name="vimage" class="file-upload-default" id="vimage">
                      <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image" style="color: #f8f9fa; border:1px solid #f8f9fa;">
                        <span class="input-group-append">
                          <button class="file-upload-browse btn btn-primary" type="button" style="color: #1a1f26; background-color: #f8f9fa; border-color: #fafafa;">Upload</button>
                        </span>
                      </div>
					  <span id="validimage" style="color:red;"></span>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="email" placeholder="Email" name="email" style="color: #f8f9fa; border:1px solid #f8f9fa;">
				  <span id="validemail" style="color:red;"></span>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="cno" placeholder="Contact No" name="cno" style="color: #f8f9fa; border:1px solid #f8f9fa;">
				  <span id="validcontactno" style="color:red;"></span>
                </div>
                <div class="mt-3">
                  <button type="submit" class="btn btn-primary mr-2" name="submit" onclick="return(validate());" style="color: #1a1f26; background-color: #f8f9fa; border-color: #fafafa;">Confirm</button>
                </div>
                <div class="text-center mt-4 font-weight-light" style="color: white;">
                  Already have an account? <a href="login.php" class="text-primary" style="color: white !important;">Login</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="js/vendor.bundle.base.js"></script>
  <script src="js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  
  <script src="js/file-upload.js"></script>
  <script src="js/iCheck.js"></script>
  <script src="js/typeahead.js"></script>
  <script src="js/select2.js"></script>
  <!-- endinject -->
</body>
</html>
