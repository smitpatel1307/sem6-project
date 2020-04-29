<?php
session_start();
if(!isset($_SESSION['vendor_id']))
{
	header('location:../login.php');
}
include '../include/connect.php';
if(isset($_POST['submit']))
{
	$search_id=$_POST['search_id'];
	$vendor_id=$_POST['vendor_id'];
	$shopname=$_POST['shopname'];
	$description=$_POST['description'];
	$keyword=$_POST['keyword'];
	
	$link->where('search_id',$search_id);
	$ui = $link->update('search',Array('shop_name'=>$shopname,'description'=>$description,'keyword'=>$keyword));
	if($ui)
	{
		header('location:view_search.php');
	}
}
?>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>QuickSearch|Vendor|Update Search</title>
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
		document.getElementById("validdescription").innerHTML = "";
		document.getElementById("validkeyword").innerHTML = "";
		
		var validsname = document.data.shopname.value;
		var reg=/^[a-zA-Z]+$/;
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
		
		var keyword = document.data.keyword.value;
		var reg=/^[a-zA-Z\s]+$/;
		if(keyword == "")
		{
			document.getElementById("validkeyword").innerHTML = "Enter Keyword";
			s=false;
		}
		else if(!reg.test(keyword))
		{
			document.getElementById("validkeyword").innerHTML="Enter valid Keyword";
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
					$search_id=$_GET['search_id'];
					$s=$link->rawQueryOne('select * from search where search_id=?',Array($search_id));
					if($link->count > 0)
					{
						$shopname=$s['shop_name'];
						$description=$s['description'];
						$keyword=$s['keyword'];
					}
				?>
                  <h4 class="card-title">Search form</h4>
                  <form class="forms-sample" method="post" enctype="multipart/form-data" name="data" id="data">
				  <div>
					<input type="hidden" name="search_id" value="<?php echo $_GET['search_id']; ?>">
				  </div>
				 <div class="form-group">
                      <label for="exampleInputName1">Shop Name</label>
                      <input type="text" class="form-control" id="shopname" name="shopname" value="<?php echo $shopname;?>" readonly>
					  <span id="validshopname" style="color:red;"></span>
                 </div> 
				  <div class="form-group">
                      <label for="exampleTextarea1">Description</label>
                      <textarea class="form-control" id="description" rows="4" name="description"><?php echo $description;?></textarea>
					  <span id="validdescription" style="color:red;"></span>
                  </div>
				   <div class="form-group">
                      <label for="exampleTextarea1">Keyword</label>
                     <input type="text" class="form-control" id="keyword" name="keyword" value="<?php echo $keyword;?>">
					 <span id="validkeyword" style="color:red;"></span>
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
