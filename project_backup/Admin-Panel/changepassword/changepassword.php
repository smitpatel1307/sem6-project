<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>QuickSearch|Admin|Change Password</title>
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
		
		document.getElementById("validcpass").innerHTML = "";
		document.getElementById("validnpass").innerHTML = "";
		document.getElementById("validrpass").innerHTML = "";
		
		var cpass = document.changepass.cpassword.value;
		var reg=/^[a-zA-Z0-9]+$/;
		if(cpass == "")
		{
			document.getElementById("validcpass").innerHTML = "Enter password";
			s=false;
		}
		
		var rpass = document.changepass.rpassword.value;
		var reg=/^[a-zA-Z0-9]+$/;
		if(rpass == "")
		{
			document.getElementById("validrpass").innerHTML = "Enter password";
			s=false;
		}
		else if(!reg.test(rpass))
		{
			document.getElementById("validrpass").innerHTML="Enter valid password";
			s=false;
		}
		
		var npass = document.changepass.npassword.value;
		var reg=/^[a-zA-Z0-9]+$/;
		if(npass == "")
		{
			document.getElementById("validnpass").innerHTML = "Enter password";
			s=false;
		}
		else if(!reg.test(npass))
		{
			document.getElementById("validnpass").innerHTML="Enter valid password";
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
	session_start();
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
                  <h4 class="card-title">Change Password</h4>
                  <p class="card-description">
                    
                  </p>
                  <form class="forms-sample" method='post' enctype="multipart/form-data" action='#' id="changepass" name="changepass">
                    <div class="form-group">
                      <label for="exampleInputName1">Current Password</label>
                      <input type="password" class="form-control" placeholder="Old Password" name="cpassword" id="cpassword" value="">
					  <span id="validcpass" style="color:red;"></span>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">New Password</label>
                      <input type="password" class="form-control" placeholder="New Password" name="npassword" id="npassword" value="">
					  <span id="validnpass" style="color:red;"></span>
                    </div>
                   <div class="form-group">
                      <label for="exampleInputEmail3">Reset Password</label>
                      <input type="password" class="form-control" placeholder="Confirm Password" name="rpassword" id="rpassword" value="">
					  <span id="validrpass" style="color:red;"></span>
                    </div>
                    <p id="rerror"></p>
                    <button type="submit" class="btn btn-primary mr-2" name="submit" onclick="return(validate());">Submit</button>
                    
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
  <script>
	$("#changepass").submit(function(e) {
		$.ajax({
		   type: "POST",
		   url: "password_code.php",
		   data: $("#changepass").serialize(), // serializes the form's elements.
		   success: function(data)
		   {
				$("#rerror").html(data);
				if(data == 'Password is successfully changed.')
				{
					$("#rerror").css("color","green");
					$("#cpassword").val("");
					$("#npassword").val("");
					$("#rpassword").val("");
				}
				else
				{
					$("#rerror").css("color","red");
				}
		   }
		});
		e.preventDefault(); // avoid to execute the actual submit of the form.
	});
	
	function check(rpass)
	{
		var npass = $("#npassword").val();
		if(npass == rpass)
		{
			$("#rerror").html("");
			$("#submit").attr("disabled",false);
		}
		else
		{
			$("#rerror").html("New password and Repeat password must be same!");
			$("#rerror").css("color","red");
			$("#submit").attr("disabled",false);
		}
	}
	</script>
</body>
</html>


