<?php
error_reporting(0);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quick Search</title>
    <link href="css/font.css" rel="stylesheet">

    <!-- inject:css-->
    <link rel="stylesheet" href="css/plugin.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- endinject -->

    <link rel="icon" type="image/png" sizes="32x32" href="img/fevicon.png">
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
<div class="modal fade" id="changepass_modal" tabindex="-1" role="dialog" aria-labelledby="signup_modal_label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="signup_modal_label"><i class="la la-lock"></i> Change Password</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="#" method="post" id="changepass" name="changepass" enctype="multipart/form-data">
						<input type="password" class="form-control" placeholder="Current Password" name="cpassword" id="cpassword" style="margin-bottom: 00px;">
						<span id="validcpass" style="color:red;"></span>
                        <input type="password" class="form-control" placeholder="New Password" name="npassword" id="npassword" style="margin-bottom: 00px;margin-top: 20px;">
						<span id="validnpass" style="color:red;"></span>
                        <input type="password" class="form-control" placeholder="Reset Password" name="rpassword" id="rpassword" style="margin-bottom: 00px;margin-top: 20px;">
						<span id="validrpass" style="color:red;"></span>
						<p id="rerror"></p>
                        <button type="submit" class="btn btn-block btn-lg btn-gradient btn-gradient-two" name="submit" onclick="return(validate());" style="margin-top: 25px;">Submit</button>
                    </form>
				</div>
            </div>
        </div>
</div>

    <section class="header-breadcrumb bgimage overlay overlay--dark">
        <div class="bg_image_holder"><img src="img/breadcrumb1.jpg" alt=""></div>
        <div class="mainmenu-wrapper">
    <div class="menu-area menu1 menu--light">
        <div class="top-menu-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="menu-fullwidth">
                            <div class="logo-wrapper order-lg-0 order-sm-1">
                                <div class="logo logo-top">
                                    <a href="index.php"><img src="img/search.png" alt="logo image" class="img-fluid" style="height: 40px;"></a>
                                </div>
                            </div><!-- ends: .logo-wrapper -->

                            
    <div class="menu-container order-lg-1 order-sm-0">
        <div class="d_menu">
            <?php
			  include 'include/header.php';
			?>
        </div>
    </div>
                            <?php
								session_start();
								if(!isset($_SESSION['user_id']))
								{
									include 'include/register.php';
								}
								if(isset($_SESSION['user_id']))
								{
									include 'include/login.php';
								}
							?>
							
                        </div>
                    </div>
                </div>
                <!-- end /.row -->
            </div>
            <!-- end /.container -->
        </div>
        <!-- end  -->
    </div>

        </div><!-- ends: .mainmenu-wrapper -->

        <div class="breadcrumb-wrapper content_above">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h1 class="page-title">All Categories</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">All Listings</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div><!-- ends: .breadcrumb-wrapper -->

    </section>

    <section class="section-padding-1_7 border-bottom">
        <div class="container">
            
    <div class="row">
    <?php
				include 'include/connect.php';
				$sql = $link->rawQuery('select * from category');
				if($link->count > 0)
				{
					foreach($sql as $s)
					{
						?>
						<div class="col-lg-4 col-sm-6">
							<div class="category-single category--img">
							<figure class="category--img4">
								<img src="<?php echo '../Admin-Panel/category/'.$s['category_image']; ?>" alt="" height="300px" width="500px">
								<figcaption class="overlay-bg">
									<a href="category_vendor.php?cid=<?php echo $s['category_id']; ?>" class="cat-box">
										<div>
											<h4 class="cat-name"><?php echo $s['category_name']; ?></h4>
										</div>
									</a>
								</figcaption>
							</figure>
							</div>
						</div>
						<?php
					}
				}
			?>
    </div>

        </div>
    </section><!-- ends: section -->

    <?php
	 include 'include/footer.php';
	?>
 
     <script src="js/extra.js"></script>
     <!-- inject:js-->
     <script src="js/plugins.min.js"></script>
     <script src="js/script.min.js"></script>
	 <script>
	<?php
if(isset($_REQUEST['err']))
{
	?>
	$('#login_modal').modal('show');
	<?php
}
?>
$("#hidelogopenreg").click( function()
         {
            $('#login_modal').modal('hide')
            $('#signup_modal').modal('show')
         }
 );

 $("#sample").click( function()
         {
            $('#login_modal').modal('show')
            $('#signup_modal').modal('hide')
         }
 );
 
 $("#changepass").submit(function(e) {
		
		$.ajax({
		   type: "POST",
		   url: "include/password_code.php",
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
     <!-- endinject-->
</body>
</html>