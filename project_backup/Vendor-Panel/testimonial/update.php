<?php
session_start();
if(!isset($_SESSION['vendor_id']))
{
	header('location:../login.php');
}
include '../include/connect.php';
if(isset($_POST['submit']))
{
	$testimonial_id=$_POST['testimonial_id'];
	$vendor_id=$_POST['vendor_id'];
	$title=$_POST['title'];
	$designation=$_POST['designation'];
	$review=$_POST['review'];
	
	$link->where('testimonial_id',$testimonial_id);
	$ui = $link->update('testimonials',Array('title'=>$title,'designation'=>$designation,'review'=>$review));
	if($ui)
	{
		header('location:view_testimonial.php');
	}
}
?>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>QuickSearch|Vendor|Update Testmonials</title>
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
		document.getElementById("validdesignation").innerHTML = "";
		document.getElementById("validreview").innerHTML = "";
		
		var title = document.data.title.value;
		var reg=/^[a-zA-Z]+$/;
		if(title == "")
		{
			document.getElementById("validtitle").innerHTML = "Enter title";
			s=false;
		}
		else if(!reg.test(title))
		{
			document.getElementById("validtitle").innerHTML="Enter valid title";
			s=false;
		}
		
		var designation = document.data.designation.value;
		var reg=/^[a-zA-Z]+$/;
		if(designation == "")
		{
			document.getElementById("validdesignation").innerHTML = "Enter designation";
			s=false;
		}
		else if(!reg.test(designation))
		{
			document.getElementById("validdesignation").innerHTML="Enter valid designation";
			s=false;
		}
		
		var review = document.data.review.value;
		var reg=/^[A-Za-z\d\.\-_\,\s]+$/;
		if(review == "")
		{
			document.getElementById("validreview").innerHTML = "Enter Review";
			s=false;
		}
		else if(!reg.test(review))
		{
			document.getElementById("validreview").innerHTML="Enter valid Review";
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
					$testimonial_id=$_GET['testimonial_id'];
					$s=$link->rawQueryOne('select * from testimonials where testimonial_id=?',Array($testimonial_id));
					if($link->count > 0)
					{
						$title=$s['title'];
						$designation=$s['designation'];
						$review=$s['review'];
					}
				?>
                  <h4 class="card-title">Testimonial form</h4>
                  <form class="forms-sample" method="post" enctype="multipart/form-data" name="data" id="data">
				  <div>
					<input type="hidden" name="testimonial_id" value="<?php echo $_GET['testimonial_id']; ?>">
				  </div>
				 <div class="form-group">
                      <label for="exampleInputName1">Title</label>
                      <input type="text" class="form-control" id="title" name="title" value="<?php echo $title;?>">
					  <span id="validtitle" style="color:red;"></span>
                 </div> 
				  <div class="form-group">
                      <label for="exampleTextarea1">Designation</label>
                     <input type="text" class="form-control" id="designation" name="designation" value="<?php echo $designation;?>">
					 <span id="validdesignation" style="color:red;"></span>
                  </div> 
				   <div class="form-group">
                      <label for="exampleTextarea1">Review</label>
                     <input type="text" class="form-control" id="review" name="review" value="<?php echo $review;?>">
					 <span id="validreview" style="color:red;"></span>
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
