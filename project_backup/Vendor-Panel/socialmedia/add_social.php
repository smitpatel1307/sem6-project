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
	$media_name=$_POST['mname'];
	$link1=$_POST['link1'];
	$i=$link->insert('social_media',Array('vendor_id'=>$vendor_id,'media_name'=>$media_name,'link'=>$link1));
	if($i)
	{
		header('location:view_social.php');
	}
}
?>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>QuickSearch|Vendor|Add SocialMedia</title>
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
	document.getElementById("validlink").innerHTML = "";
	
	var validname = document.data.mname.value;
	var reg=/^[a-z]+$/;
   	if(validname == "")
   	{
   		document.getElementById("validname").innerHTML = "Enter Media Name";
		s=false;
   	}
	else if(!reg.test(validname))
	{
		document.getElementById("validname").innerHTML="Enter valid Media Name";
		s=false;
	}
	
	var url = document.data.link1.value;
	var reg = /^(http|https):\/\/(([a-zA-Z0-9$\-_.+!*'(),;:&=]|%[0-9a-fA-F]{2})+@)?(((25[0-5]|2[0-4][0-9]|[0-1][0-9][0-9]|[1-9][0-9]|[0-9])(\.(25[0-5]|2[0-4][0-9]|[0-1][0-9][0-9]|[1-9][0-9]|[0-9])){3})|localhost|([a-zA-Z0-9\-\u00C0-\u017F]+\.)+([a-zA-Z]{2,}))(:[0-9]+)?(\/(([a-zA-Z0-9$\-_.+!*'(),;:@&=]|%[0-9a-fA-F]{2})*(\/([a-zA-Z0-9$\-_.+!*'(),;:@&=]|%[0-9a-fA-F]{2})*)*)?(\?([a-zA-Z0-9$\-_.+!*'(),;:@&=\/?]|%[0-9a-fA-F]{2})*)?(\#([a-zA-Z0-9$\-_.+!*'(),;:@&=\/?\s]|%[0-9a-fA-F]{2})*)?)?$/;
   	if(url == "")
   	{
   		document.getElementById("validlink").innerHTML = "Enter Media Link";
		s=false;
   	}
	else if(!reg.test(url))
	{
		document.getElementById("validlink").innerHTML="Enter valid Media Link";
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
                  <h4 class="card-title">Add Social Media</h4>
                  <form class="forms-sample" method="post" enctype="multipart/form-data" name="data" id="data">
				 <div class="form-group">
                      <label for="exampleInputName1">Media Name</label>
                      <input type="text" class="form-control" id="mname" placeholder="Media Name" name="mname">
					  <span id="validname" style="color:red;"></span>
                 </div> 
				  <div class="form-group">
                      <label for="exampleTextarea1">Link</label>
                     <input type="text" class="form-control" id="link1" placeholder="Link" name="link1">
					 <span id="validlink" style="color:red;"></span>
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
