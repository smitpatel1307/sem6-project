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
	$shop_name=$_POST['shopname'];
	$vendor_name=$_POST['vendorname'];
	$vendor_email=$_POST['vendoremail'];
	$vendor_contactno=$_POST['contactno'];
	$description=$_POST['description'];
	$address=$_POST['address'];
	$category_id=$_POST['category'];
	$type_id=$_POST['type'];
						  
	$s=$link->rawQueryOne('select * from vendor where vendor_id=?',Array($vendor_id));
	if($link->count > 0)
	{
		$vendor_image=$s['vendor_image'];
		$vendor_company_idproof=$s['vendor_company_idproof'];
	}
	$link->where('vendor_id',$vendor_id);
	$u=$link->update('vendor',Array('shop_name'=>$shop_name,'vendor_name'=>$vendor_name,'vendor_email'=>$vendor_email,'vendor_contactno'=>$vendor_contactno,'description'=>$description,'address'=>$address,'category_id'=>$category_id,'type_id'=>$type_id));
	if($u)
	{
		$icon = $_FILES["vendorimage"]["name"];
		$ext = pathinfo($icon,PATHINFO_EXTENSION);
		$name = "vendor".$vendor_id.".".$ext;
		if(move_uploaded_file($_FILES["vendorimage"]["tmp_name"],'../../Admin-Panel/vendor/image/'.$name))
		{
			$link->where('vendor_id',$vendor_id);
			$ui = $link->update('vendor',Array('vendor_image'=>'image/'.$name));
			if($ui)
			{
				header('location:editprofile.php');
			}
		}
		else
		{
			$link->where('vendor_id',$vendor_id);
			$ui = $link->update('vendor',Array('vendor_image'=>$vendor_image));
			if($ui)
			{
				header('location:editprofile.php');
			}
		}
		$icon = $_FILES["idproof"]["name"];
	    $ext = pathinfo($icon,PATHINFO_EXTENSION);
		$name = "vendor_idproof".$vendor_id.".".$ext;
		if(move_uploaded_file($_FILES["idproof"]["tmp_name"],'../../Admin-Panel/vendor/image/'.$name))
		{
			$link->where('vendor_id',$vendor_id);
			$i = $link->update('vendor',Array('vendor_company_idproof'=>'image/'.$name));
			if($i)
			{
				header('location:editprofile.php');
			}
		}
		else
		{
			$link->where('vendor_id',$vendor_id);
			$i = $link->update('vendor',Array('vendor_company_idproof'=>$vendor_company_idproof));
			if($i)
			{
				header('location:editprofile.php');
			}
		}
		header('location:editprofile.php');
	}
}
?>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>QuickSearch|Vendor|Edit Profile</title>
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
	
	document.getElementById("validshopname").innerHTML = "";
	document.getElementById("validvendorname").innerHTML = "";
	document.getElementById("validimage").innerHTML = "";
	document.getElementById("validemail").innerHTML = "";
	document.getElementById("valididproof").innerHTML = "";
	document.getElementById("validcontactno").innerHTML = "";
	document.getElementById("validaddress").innerHTML = "";
	document.getElementById("validdescription").innerHTML = "";
	
	var validsname = document.data.shopname.value;
	var reg=/^[a-zA-Z & ]+$/;
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
	
	var validvname = document.data.vendorname.value;
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
	
	var image=document.data.vendorimage.value;
	if(image!="")
	{
		var file=document.getElementById('vendorimage').files[0];
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
	
	var email = document.data.vendoremail.value;
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
	
	var idproof=document.data.idproof.value;
	if(idproof!="")
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
	
	var contactno = document.data.contactno.value;
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
	
	var description = document.data.description.value;
	var reg=/^[a-zA-Z0-9\s\,\''\-]*$/;
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
                  <h4 class="card-title">Vendor form</h4>
				  <?php
						include '../include/connect.php';
						$vendor_id=$_SESSION['vendor_id'];

						$s=$link->rawQueryOne('select * from vendor where vendor_id=?',Array($vendor_id));
						if($link->count > 0)
						{
						  $shop_name=$s['shop_name'];
						  $vendor_image=$s['vendor_image'];
						  $vendor_name=$s['vendor_name'];
						  $vendor_email=$s['vendor_email'];
						  $vendor_contactno=$s['vendor_contactno'];
						  $vendor_company_idproof=$s['vendor_company_idproof'];
						  $description=$s['description'];
						  $address=$s['address'];
						  $registration_date=$s['registration_date'];
						  $category_id=$s['category_id'];
						  $type_id=$s['type_id'];
						}
				?>
                  <form class="form-sample" name="data" id="data" method="post" enctype="multipart/form-data">
				  <div>
					<input type="hidden" name="vendor_id" value="<?php echo $vendor_id; ?>">
				  </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Shop Name</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name='shopname' value="<?php echo $shop_name; ?>" id="shopname" />
							<span id="validshopname" style="color:red;"></span>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Vendor Name</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name='vendorname' value="<?php echo $vendor_name; ?>" id="vendorname" />
							<span id="validvendorname" style="color:red;"></span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
						<div class="col-md-6">
						  <div class="form-group row">
							  <label class="col-sm-3 col-form-label">Vendor Image</label>
							  <div class="col-sm-9">
								  <input type="file" name="vendorimage" class="file-upload-default" id="vendorimage">
								  <div class="input-group col-xs-5">
									<input type="text" class="form-control file-upload-info" value="<?php echo $vendor_image; ?>" disabled>
									<span class="input-group-append">
									  <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
									</span>
								  </div>
								  <div class="input-group col-xs-2">
									<img src="../../Admin-Panel/vendor/<?php echo $vendor_image; ?>" height="50px" width="50px">
								  </div>
								  <span id="validimage" style="color:red;"></span>
							  </div>
						  </div>
						</div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Vendor Email</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name='vendoremail' value="<?php echo $vendor_email; ?>" id="vendoremail"/>
							<span id="validemail" style="color:red;"></span>
                          </div>
                        </div>
                      </div>
                    </div>
					<div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Company IDProof</label>
                          <div class="col-sm-9">
							<input type="file" name="idproof" class="file-upload-default" id="idproof">
						    <div class="input-group col-xs-5">
							<input type="text" class="form-control file-upload-info" value="<?php echo $vendor_company_idproof; ?>" disabled>
							<span class="input-group-append">
								<button class="file-upload-browse btn btn-primary" type="button">Upload</button>
							</span>
							</div>
							<div class="input-group col-xs-2">
								<img src="../../Admin-Panel/vendor/<?php echo $vendor_company_idproof; ?>" height="50px" width="50px">
							</div>
							<span id="valididproof" style="color:red;"></span>
						   </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Contact No</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name='contactno' value="<?php echo $vendor_contactno; ?>" id="contactno" />
							<span id="validcontactno" style="color:red;"></span>
                          </div>
                        </div>
                      </div>
					  <span id="valididproof" style="color:red;"></span>
                    </div>
                   
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Address</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name='address' value="<?php echo $address; ?>" id="address" />
							<span id="validaddress" style="color:red;"></span>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Category</label>
                          <div class="col-sm-9">
                            <select class="form-control" name='category'>
                              <?php
								$sql = $link->rawQuery('select * from category');
								if($link->count > 0)
								{
									foreach($sql as $s)
									{
										?>
										<option value='<?php echo $s['category_id'] ?>' <?php if($s['category_id']==$category_id){echo 'selected';} ?>><?php echo $s['category_name'] ?></option>
							   <?php			
									}
								}
							  ?>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Description</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name='description' value="<?php echo $description; ?>" id="description"/>
							<span id="validdescription" style="color:red;"></span>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Type</label>
                          <div class="col-sm-9">
                            <select class="form-control" name='type'>
                              <?php
								$sql = $link->rawQuery('select * from type');
								if($link->count > 0)
								{
									foreach($sql as $s)
									{
							   ?>
										<option value='<?php echo $s['type_id'] ?>' <?php if($s['type_id']==$type_id){echo 'selected';} ?>><?php echo $s['type_name'] ?></option>
							   <?php			
									}
								}
							  ?>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
					<button type="submit" class="btn btn-primary mr-2" name="submit" onclick="return(validate());">Submit</button>
                    <button class="btn btn-light">Cancel</button>
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
