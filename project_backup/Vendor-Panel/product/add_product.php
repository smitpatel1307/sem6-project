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
    $title=$_POST['title'];
	$product_price=$_POST['price'];
	$description=$_POST['description'];
	$sortorder=$_POST['sortorder'];
	$short_description=$_POST['sdescription'];
	$i=$link->insert('product',Array('vendor_id'=>$vendor_id,'title'=>$title,'product_price'=>$product_price,'description'=>$description,'sortorder'=>$sortorder,'short_description'=>$short_description,'is_active'=>"1"));
	if($i)
	{
		$icon = $_FILES["bimage"]["name"];
		$ext = pathinfo($icon,PATHINFO_EXTENSION);
		$name = "banner".$vendor_id.".".$ext;
		if(move_uploaded_file($_FILES["bimage"]["tmp_name"],'image/'.$name))
		{
			$link->where('product_id',$i);
			if($link->update('product',Array('banner_image'=>'image/'.$name)))
			{
				$icon1 = $_FILES["pimage"]["name"];
				$ext1 = pathinfo($icon1,PATHINFO_EXTENSION);
				$name1 = "product".$i.".".$ext1;
				if(move_uploaded_file($_FILES["pimage"]["tmp_name"],'image/'.$name1))
				{
					$link->where('product_id',$i);
					if($link->update('product',Array('product_image'=>'image/'.$name1)))
					{
						header('location:view_product.php');
					}
				}
			}
		}
	}
	else
	{
		header('location:add_product.php');
	}
}
?>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>QuickSearch|Vendor|Add Product</title>
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
		
		document.getElementById("validtitle").innerHTML = "";
		document.getElementById("validprice").innerHTML = "";
		document.getElementById("validbimage").innerHTML = "";
		document.getElementById("validpimage").innerHTML = "";
		document.getElementById("validdescription").innerHTML = "";
		document.getElementById("validsortorder").innerHTML = "";
		document.getElementById("validsdescription").innerHTML = "";
		
		var title = document.data.title.value;
		var reg=/^[A-Za-z\s]+$/;
		if(title == "")
		{
			document.getElementById("validtitle").innerHTML = "Enter Product Title";
			s=false;
		}
		else if(!reg.test(title))
		{
			document.getElementById("validtitle").innerHTML="Enter valid Product Title";
			s=false;
		}
		
		var price = document.data.price.value;
		var reg=/^[0-9]{1,6}$/;
		if(price == "")
		{
			document.getElementById("validprice").innerHTML = "Enter Product Price";
			s=false;
		}
		else if(!reg.test(price))
		{
			document.getElementById("validprice").innerHTML="Enter valid Product Price";
			s=false;
		}
		
		var fuData = document.getElementById('bimage');
		var FileUploadPath = fuData.value;
		if (FileUploadPath == '') 
		{
			document.getElementById('validbimage').innerHTML="Please upload banner image";
			s=false;
		} 
		else 
		{
			var file=document.getElementById('bimage').files[0];
			var Extension = file.type.split('/').pop().toLowerCase();
			if (Extension != "gif" && Extension != "png" && Extension != "bmp" && Extension != "jpeg" && Extension != "jpg") 
			{
				document.getElementById('validbimage').innerHTML="Image only allows file types of GIF, PNG, JPG, JPEG and BMP. ";
				s=false;
			}
			else if(file.size > 1024000)
			{
				document.getElementById('validbimage').innerHTML="Image is too large";
				s=false;
			}
		}
		
		var fuData = document.getElementById('pimage');
		var FileUploadPath = fuData.value;
		if (FileUploadPath == '') 
		{
			document.getElementById('validpimage').innerHTML="Please upload an Image";
			s=false;
		} 
		else 
		{
			var file=document.getElementById('pimage').files[0];
			var Extension = file.type.split('/').pop().toLowerCase();
			if (Extension != "gif" && Extension != "png" && Extension != "bmp" && Extension != "jpeg" && Extension != "jpg") 
			{
				document.getElementById('validpimage').innerHTML="Image only allows file types of GIF, PNG, JPG, JPEG and BMP. ";
				s=false;
			}
			else if(file.size > 1024000)
			{
				document.getElementById('validpimage').innerHTML="Image is too large";
				s=false;
			}
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
		
		var sortorder = document.data.sortorder.value;
		var reg=/^[0-9]{1,3}$/;
		if(sortorder == "")
		{
			document.getElementById("validsortorder").innerHTML = "Enter Sort Order";
			s=false;
		}
		else if(!reg.test(sortorder))
		{
			document.getElementById("validsortorder").innerHTML="Enter valid Sort Order";
			s=false;
		}
		
		var sdescription = document.data.sdescription.value;
		var reg=/^[A-Za-z\d\.\-_\,\s]+$/;
		if(sdescription == "")
		{
			document.getElementById("validsdescription").innerHTML = "Enter Short Description";
			s=false;
		}
		else if(!reg.test(sdescription))
		{
			document.getElementById("validsdescription").innerHTML="Enter valid Short Description";
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
                  <h4 class="card-title">Add Product</h4>
                  <form class="forms-sample" method="post" enctype="multipart/form-data" name="data" id="data">
				 <div class="form-group">
                      <label for="exampleInputName1">Title</label>
                      <input type="text" class="form-control" id="title" placeholder="Product Title" name="title">
					  <span id="validtitle" style="color:red;"></span>
                 </div> 
				 <div class="form-group">
                      <label for="exampleInputName1">Product Price</label>
                      <input type="text" class="form-control" id="price" placeholder="Product Price" name="price">
					  <span id="validprice" style="color:red;"></span>
                 </div> 
				 
                    <div class="form-group">
                      <label>Banner Image</label>
                      <input type="file" name="bimage" class="file-upload-default" id="bimage">
                      <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                        <span class="input-group-append">
                          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                      </div>
					  <span id="validbimage" style="color:red;"></span>
                    </div>
					<div class="form-group">
                      <label>Product Image</label>
                      <input type="file" name="pimage" class="file-upload-default" id="pimage">
                      <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                        <span class="input-group-append">
                          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                      </div>
					  <span id="validpimage" style="color:red;"></span>
                    </div>
                    <div class="form-group">
                      <label for="exampleTextarea1">Description</label>
                      <textarea class="form-control" id="description" rows="4" name="description" placeholder="Description"></textarea>
					  <span id="validdescription" style="color:red;"></span>
                    </div>
					<div class="form-group">
                      <label for="exampleInputName1">Sortorder</label>
                      <input type="text" class="form-control" id="sortorder" placeholder="Sortorder" name="sortorder">
					  <span id="validsortorder" style="color:red;"></span>
                    </div>  
					<div class="form-group">
                      <label for="exampleTextarea1">Short Description</label>
                      <textarea class="form-control" id="sdescription" rows="4" name="sdescription" placeholder="Short Description"></textarea>
					  <span id="validsdescription" style="color:red;"></span>
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
  <script>
  function checkvendor(id)
  {
	  $.post('../validvendor.php',{'title':id.value},function(data,status){
		  if(status==='success'){
			  $('#validtitle').html(data);
		  }
	  });
	  
  }
  </script>
  <!-- End custom js for this page-->
</body>
</html>
