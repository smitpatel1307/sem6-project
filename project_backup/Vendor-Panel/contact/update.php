<?php
session_start();
if(!isset($_SESSION['vendor_id']))
{
	header('location:../login.php');
}
include '../include/connect.php';
if(isset($_POST['submit']))
{
	$contact_id=$_POST['contact_id'];
	$vendor_id=$_POST['vendor_id'];
	$pno1=$_POST['pno1'];
	$pno2=$_POST['pno2'];
	$email=$_POST['email'];
	$address=$_POST['address'];
	$cname=$_POST['cname'];
	
	$s=$link->rawQueryOne('select * from contact where contact_id=?',Array($contact_id));
	if($link->count > 0)
	{
		$contact_image=$s['contact_image'];
	}
	$link->where('contact_id',$contact_id);
	$u=$link->update('contact',Array('phone_no1'=>$pno1,'phone_no2'=>$pno2,'email'=>$email,'address'=>$address,'contact_name'=>$cname));
	if($u)
	{
		$icon = $_FILES["contactimage"]["name"];
		$ext = pathinfo($icon,PATHINFO_EXTENSION);
		$name = "contact".$contact_id.".".$ext;
		if(move_uploaded_file($_FILES["contactimage"]["tmp_name"],'image/'.$name))
		{
			$link->where('contact_id',$contact_id);
			$ui = $link->update('contact',Array('contact_image'=>'image/'.$name));
			if($ui)
			{
				header('location:view_contact.php');
			}
		}
		else
		{
			$link->where('contact_id',$contact_id);
			$ui = $link->update('contact',Array('contact_image'=>$contact_image));
			if($ui)
			{
				header('location:view_contact.php');
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
  <title>QuickSearch|Vendor|Update Contact</title>
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
		
		document.getElementById("validpno1").innerHTML = "";
		document.getElementById("validpno2").innerHTML = "";
		document.getElementById("validemail").innerHTML = "";
		document.getElementById("validaddress").innerHTML = "";
		document.getElementById("validimage").innerHTML = "";
		document.getElementById("validname").innerHTML = "";
		
		var pno1 = document.data.pno1.value;
		var reg=/^[6789]{1}[0-9]{9}$/;
		if(pno1 == "")
		{
			document.getElementById("validpno1").innerHTML = "Enter Vendor Contact NO";
			s=false;
		}
		else if(!reg.test(pno1))
		{
			document.getElementById("validpno1").innerHTML="Enter valid Vendor Contact NO";
			s=false;
		}
		
		var pno2 = document.data.pno2.value;
		var reg=/^[6789]{1}[0-9]{9}$/;
		if(pno2 == "")
		{
			document.getElementById("validpno2").innerHTML = "Enter Vendor Contact NO";
			s=false;
		}
		else if(!reg.test(pno2))
		{
			document.getElementById("validpno2").innerHTML="Enter valid Vendor Contact NO";
			s=false;
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
	
		var cimage=document.data.contactimage.value;
		if(cimage!="")
		{
			var file=document.getElementById('contactimage').files[0];
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
		
		var cname = document.data.cname.value;
		var reg=/^[a-zA-Z]+$/;
		if(cname == "")
		{
			document.getElementById("validname").innerHTML = "Enter Contact Name";
			s=false;
		}
		else if(!reg.test(cname))
		{
			document.getElementById("validname").innerHTML="Enter valid Contact Name";
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
					$contact_id=$_GET['contact_id'];
					$s=$link->rawQueryOne('select * from contact where contact_id=?',Array($contact_id));
					if($link->count > 0)
					{
						$contact_image=$s['contact_image'];
						$pno1=$s['phone_no1'];
						$pno2=$s['phone_no2'];
						$cname=$s['contact_name'];
						$email=$s['email'];
						$address=$s['address'];
					}
				?>
                  <h4 class="card-title">Contact form</h4>
                  <form class="forms-sample" method="post" enctype="multipart/form-data" name="data" id="data">
				  <div>
				  <input type="hidden" name="contact_id" value="<?php echo $_GET['contact_id']; ?>">
				  </div>
				 <div class="form-group">
                      <label for="exampleInputName1">Phone no1</label>
                      <input type="text" class="form-control" id="pno1" name="pno1" value="<?php echo $pno1;?>">
					  <span id="validpno1" style="color:red;"></span>
                 </div> 
				 <div class="form-group">
                      <label for="exampleInputName1">Phone no2</label>
                      <input type="text" class="form-control" id="pno2" name="pno2" value="<?php echo $pno2;?>">
					  <span id="validpno2" style="color:red;"></span>
                 </div> 
                 <div class="form-group">
                      <label for="exampleInputName1">E-mail</label>
                      <input type="text" class="form-control" id="email" name="email" value="<?php echo $email;?>">
					  <span id="validemail" style="color:red;"></span>
                 </div> 
					<div class="form-group">
                      <label for="exampleTextarea1">Address</label>
                      <textarea class="form-control" id="address" rows="4" name="address"><?php echo $address; ?></textarea>
					  <span id="validaddress" style="color:red;"></span>
                    </div>				 
                    <div class="form-group">
                      <label>Contact Image</label>
                      <input type="file" name="contactimage" class="file-upload-default" id="contactimage">
                      <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" value="<?php echo $contact_image;?>" disabled>
                        <span class="input-group-append">
                          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                      </div>
					  <div class="input-group col-xs-12">
						<img src="<?php echo $contact_image; ?>" height="50" width="50">
					  </div>
					  <span id="validimage" style="color:red;"></span>
                    </div>
					<div class="form-group">
                      <label for="exampleInputName1">Contact Name</label>
                      <input type="text" class="form-control" id="cname" name="cname" value="<?php echo $cname;?>">
					  <span id="validname" style="color:red;"></span>
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
