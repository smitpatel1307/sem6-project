<?php
session_start();
if(isset($_SESSION['admin_id']))
{
include '../include/connect.php';
if(isset($_POST['submit']))
{
	$shopname=$_POST['shopname'];
	$vendorname=$_POST['vendorname'];
	$vendoremail=$_POST['vendoremail'];
	$contactno=$_POST['contactno'];
	$address=$_POST['address'];
	$description=$_POST['description'];
	$category=$_POST['category'];
	$type=$_POST['type'];
	$date = date('Y-m-d');

	$i = $link->insert('vendor',Array('shop_name'=>$shopname,'vendor_name'=>$vendorname,'vendor_email'=>$vendoremail,'vendor_contactno'=>$contactno,'description'=>$description,'address'=>$address,'registration_date'=>$date,'category_id'=>$category,'type_id'=>$type));
	if($i)
	{
		$image = $_FILES["vendorimage"]["name"];
		$ext = pathinfo($image,PATHINFO_EXTENSION);
		$name = "vendor".$i.".".$ext;
		if(move_uploaded_file($_FILES["vendorimage"]["tmp_name"],'image/'.$name))
		{
			$link->where('vendor_id',$i);
			if($link->update('vendor',Array('vendor_image'=>'image/'.$name)))
			{
				header('location:viewvendor.php');
			}
		}
		$proof = $_FILES["idproof"]["name"];
		$ext1 = pathinfo($proof,PATHINFO_EXTENSION);
		$name1 = "idproof".$i.".".$ext1;
		if(move_uploaded_file($_FILES["idproof"]["tmp_name"],'image/'.$name1))
		{
			$link->where('vendor_id',$i);
			if($link->update('vendor',Array('vendor_company_idproof'=>'image/'.$name1)))
			{
				header('location:viewvendor.php');
			}
		}
	}
	else
	{
		header('location:addvendor.php');
	}
}
}
else
{
	header('location:../index.php');
}
?>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>QuickSearch|Admin|Add Vendor</title>
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
	var reg=/^[a-zA-Z ]+$/;
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
	
	var fuData = document.getElementById('vendorimage');
    var FileUploadPath = fuData.value;
	if (FileUploadPath == '') 
	{
        document.getElementById('validimage').innerHTML="Please upload an image";
		s=false;
    } 
	else 
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
	var reg=/^[a-zA-Z0-9\s\,\''\-]+$/;
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
	var reg=/^[a-zA-Z0-9\s\,\''\-]+$/;
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
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"> Add Vendor</h4>
                  <form class="form-sample" name="data" id="data" method="post" enctype="multipart/form-data">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Shop Name</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name='shopname' id="shopname" placeholder="Shop Name"/>
							<span id="validshopname" style="color:red;"></span>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Vendor Name</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name='vendorname' id="vendorname" placeholder="Vendor Name"/>
							<span id="validvendorname" style="color:red;"></span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Vendor Image</label>
                          <div class="col-sm-5">
                            <input type="file" name="vendorimage" class="file-upload-default" id="vendorimage">
							<input type="text" class="form-control file-upload-info" disabled placeholder="Upload Vendor Image">
							<span id="validimage" style="color:red;"></span>
                          </div>
						  <div class="col-sm-1">
							<button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Vendor Email</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name='vendoremail' id="vendoremail" placeholder="Vendor E-mail" />
							<span id="validemail" style="color:red;"></span>
                          </div>
                        </div>
                      </div>
                    </div>
					<div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Company IDProof</label>
                          <div class="col-sm-5">
                            <input type="file" name="idproof" class="file-upload-default" id="idproof">
							<input type="text" class="form-control file-upload-info" disabled placeholder="Id proof">
							<span id="valididproof" style="color:red;"></span>
                          </div>
						  <div class="col-sm-1">
							<button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Contact No</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name='contactno' id="contactno" placeholder="Contact No"/>
							<span id="validcontactno" style="color:red;"></span>
                          </div>
                        </div>
                      </div>
                    </div>
                   
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Address</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name='address' id="address" placeholder="Address"/>
							<span id="validaddress" style="color:red;"></span>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Category</label>
                          <div class="col-sm-9">
                            <select class="form-control" name='category' id="category">
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
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Description</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name='description' id="description" placeholder="Description"/>
							<span id="validdescription" style="color:red;"></span>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Type</label>
                          <div class="col-sm-9">
                            <select class="form-control" name='type' id="type">
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
                        </div>
                      </div>
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
  
  <!--Extra js-->
  <script src="../js/formpickers.js"></script>
  <!-- End custom js for this page-->
</body>
</html>
