<?php
	session_start();
	if(!isset($_SESSION['vendor_name']))
	{
		header('location:register.php');
	}
	
	include 'include/connect.php';
	if(isset($_POST['submit']))
	{
			$vendor_id=$_SESSION['vendor_id'];
			$shopname=$_POST['sname'];	
			$address=$_POST['address'];
			$description=$_POST['description'];
			$category=$_POST['category'];
			$type=$_POST['type'];
			$date=date('Y-m-d');

			$link->where('vendor_id',$vendor_id);
			$u=$link->update('vendor',Array('shop_name'=>$shopname,'description'=>$description,'address'=>$address,'category_id'=>$category,'type_id'=>$type,'approve'=>"0",'registration_date'=>$date));
			if($u)
			{
				$icon = $_FILES["idproof"]["name"];
				$ext = pathinfo($icon,PATHINFO_EXTENSION);
				$name = "vendor_idproof".$vendor_id.".".$ext;
				if(move_uploaded_file($_FILES["idproof"]["tmp_name"],'../Admin-Panel/vendor/image/'.$name))
				{
					$link->where('vendor_id',$vendor_id);
					$i = $link->update('vendor',Array('vendor_company_idproof'=>'image/'.$name));
					if($i)
					{
						header("location:success.php");
					}
				}
				header("location:success.php");
			}
			//echo $vendor_id;
	}
?>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>QuickSearch|Vendor|Shop Information</title>
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
  
	document.getElementById("validshopname").innerHTML = "";
	document.getElementById("valididproof").innerHTML = "";
	document.getElementById("validaddress").innerHTML = "";
	document.getElementById("validdescription").innerHTML = "";
	
	var validterm = document.data.terms.checked;
   	if(validterm == false)
   	{
   		alert('Must agree the all terms and condition');
		s=false;
   	}
	
	var validsname = document.data.sname.value;
	var reg=/^[a-zA-Z\s]+$/;
   	if(validsname == "")
   	{
   		document.getElementById("validshopname").innerHTML = "Enter Shop Name";
		s=false;
   	}
	else if(!reg.test(validsname))
	{
		document.getElementById("validshopname").innerHTML="Enter valid Shop Name";
		s=false;
	}
	
	var description = document.data.description.value;
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
	
	var address = document.data.address.value;
	var reg=/^[a-zA-Z0-9\s\,\''\-]*$/;
   	if(address == "")
   	{
   		document.getElementById("validaddress").innerHTML = "Enter Vendor Address";
		s=false;
   	}
	else if(!reg.test(address))
	{
		document.getElementById("validaddress").innerHTML="Enter valid Vendor Address";
		s=false;
	}
	
	var fuData = document.getElementById('idproof');
    var FileUploadPath = fuData.value;
	if (FileUploadPath == '') 
	{
        document.getElementById('valididproof').innerHTML="Please upload an IDProof";
		s=false;
    } 
	else 
	{
		var file=document.getElementById('idproof').files[0];
        var Extension = file.type.split('/').pop().toLowerCase();
		if (Extension != "gif" && Extension != "png" && Extension != "bmp" && Extension != "jpeg" && Extension != "jpg") 
		{
			document.getElementById('valididproof').innerHTML="IdProof only allows file types of GIF, PNG, JPG, JPEG and BMP. ";
			s=false;
        }
		else if(file.size > 1024000)
		{
			document.getElementById('valididproof').innerHTML="IDProof is too large";
			s=false;
		}
    }
	
	return (s);
  }
  </script>
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0" style="background-image: url('images/back2.jpg'); background-repeat: no-repeat; background-position: center;">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5" style="background:#0c0f1087;">
              <div class="brand-logo">
               <img src="images/search.png" style="height: 100px;width: 350px;">
              </div>
              <h4 style="color: white;">New here?</h4>
              <h5 class="font-weight-light" style="color: white;">Signing up is easy. It only takes a few steps</h5>
			  <h6 class="font-weight-light" style="color: white;">Company Information</h6>
              <form class="pt-3" method="post" enctype="multipart/form-data" name="data" id="data">
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="sname" placeholder="Shop Name" name="sname" style="color: #f8f9fa; border:1px solid #f8f9fa;">
				  <span id="validshopname" style="color:red;"></span>
                </div>
				<div class="form-group">
                      <input type="file" name="idproof" class="file-upload-default" id="idproof">
                      <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload IDProof" style="color: #f8f9fa; border:1px solid #f8f9fa;">
                        <span class="input-group-append">
                          <button class="file-upload-browse btn btn-primary" type="button"  style="color: #1a1f26; background-color: #f8f9fa; border-color: #fafafa;">Upload</button>
                        </span>
                      </div>
					  <span id="valididproof" style="color:red;"></span>
                </div>
                <div class="form-group">
                    <textarea class="form-control" id="description" rows="4" name="description" placeholder="Description" style="color: #f8f9fa; border:1px solid #f8f9fa;"></textarea>
					<span id="validdescription" style="color:red;"></span>
                </div>
				<div class="form-group">
                    <textarea class="form-control" id="address" rows="4" name="address" placeholder="Address" style="color: #f8f9fa; border:1px solid #f8f9fa;"></textarea>
					<span id="validaddress" style="color:red;"></span>
                </div>
                <div class="form-group">
                    <select class="form-control" name='category' id="category" style="background-color: #21252985;">
                        <?php
							$sql = $link->rawQuery('select * from category');
							if($link->count > 0)
							{
								foreach($sql as $s)
								{
						?>
								<option value='<?php echo $s['category_id'] ?>'><?php echo $s['category_name'] ?></option>
							<?php			
								}
							}
							?>
                    </select>
                </div>
				<div class="form-group">
                            <select class="form-control" name='type' id="type" style="background-color: #21252985;">
                              <?php
								$sql = $link->rawQuery('select * from type');
								if($link->count > 0)
								{
									foreach($sql as $s)
									{
										?>
										<option value='<?php echo $s['type_id'] ?>'><?php echo $s['type_name'] ?></option>
							   <?php			
									}
								}
							  ?>
                            </select>
                </div>
				<div class="mb-4">
                  <div class="form-check">
                    <label class="form-check-label text-muted" style="color: white !important;">
                      <input type="checkbox" class="form-check-input" name="terms" id="terms">
                      I agree to all Terms & Conditions
                    </label>
                  </div>
                </div>
                <div class="mt-3">
                  <button type="submit" class="btn btn-primary mr-2" name="submit" onclick="return(validate());"  style="color: #1a1f26; background-color: #f8f9fa; border-color: #fafafa;">Submit</button>
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