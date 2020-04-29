<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>QuickSearch|Vendor|LogIn</title>
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
  <style type="text/css">
	#error
	{
		color:red;
	}
  </style>
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0" style="background-image: url('images/back2.jpg'); position: fixed; width: 100%; height: 100%; background-size: cover; background-repeat: no-repeat; background-position: center;">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5" style="background:#353a4ebd;">
              <div class="brand-logo">
				<center><h1 style="color: white;"><img src="images/search.png" style="height: 100px;width: 350px;"></h1></center>
              
              </div>
              <h4 style="color: white;">Hello! let's get started</h4>
              <h6 class="font-weight-light" style="color: white;">Sign in to continue.</h6>
			  <?php
				session_start();
				if((isset($_GET['err'])) && $_GET['err']==0)
				{
					?>
					<span id="error">VendorName or Password is empty</span>
			  <?php
				}
				if((isset($_GET['err'])) && $_GET['err']==1)
				{
					?>
					<span id="error">VendorName or Password is Invalid</span>
			  <?php
				}
				if((isset($_GET['err'])) && $_GET['err']==2)
				{
					?>
					<span id="error">Vendor is not approved yet!!</span>
			  <?php
				}
			  ?>
              <form class="pt-3" method="post" action="login_code.php">
			  <?php 
			  if(isset($_COOKIE['vendor_name']))
			  {
				  $vendor_name=$_COOKIE['vendor_name'];
				  $vendor_password=$_COOKIE['vendor_password'];
			  }
			  else
			  {
				  $vendor_name="";
				  $vendor_password="";
			  }
			  ?>
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Vendor Name" value="<?php echo $vendor_name; ?>" name="vendor_name" style="color: white;">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password" value="<?php echo $vendor_password; ?>" name="password" style="color: white;">
                </div>
                <div class="mt-3">
                  <center><button type="submit" class="btn btn-primary mr-2" name="submit" value="submit" style="color: #212529; background-color: #f8f9fa;  border-color: #f8f9fa;">SIGN IN</button></center>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted" style="color:#ffffff !important;">
                      <input type="checkbox" class="form-check-input" name="remember_me">
                      Keep me signed in
                    </label>
                  </div>
                  <a href="forgotpassword.php" class="auth-link text-black" style="color: white;">Forgot password?</a>
                </div>
                
                <div class="text-center mt-4 font-weight-light" style="color: white;">
                  Don't have an account? <a href="register.php" class="text-primary" style="color: white !important;">Create</a>
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
  <!-- endinject -->
</body>
</html>
