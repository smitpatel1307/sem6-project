<?php
if(!isset($_SESSION['vendor_id']))
{
	header('location:../login.php');
}
?>
<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="../dashboard/dashboard.php"><img src="../images/search.png" style="width: 160px;height: 50px;"></a>
        <a class="navbar-brand brand-logo-mini" href="../dashboard/dashboard.php"><img src="../images/search.png" style="width: 160px;height: 50px;"></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="ti-layout-grid2"></span>
        </button>
       
        <ul class="navbar-nav navbar-nav-right">
          
         
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
			<?php
				$i=$_SESSION['vendor_id'];
			?>
              <img src="<?php echo '../../Admin-Panel/vendor/image/vendor'.$i.'.jpg'; ?>" alt="profile"/>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
			  <a class="dropdown-item" href="../profile/editprofile.php">
                <i class="ti-user text-primary"></i>
                Edit Profile
              </a>
			  <a class="dropdown-item" href="../changepassword/changepassword.php">
                <i class="ti-settings text-primary"></i>
                Change Password
              </a>
			  <a class="dropdown-item" href="../logout1.php">
                <i class="ti-power-off text-primary"></i>
                Logout
              </a>
            </div>
          </li>
         
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="ti-layout-grid2"></span>
        </button>
      </div>
    </nav>