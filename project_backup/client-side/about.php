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
 
    <section class="about-wrapper bg-gradient-ps">
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
        <div class="about-intro content_above">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-6">
                        <h1>Place your Businessor Explore Anything what you want</h1>
                        
                    </div>
                    <div class="col-lg-6 offset-lg-1 col-md-6 offset-md-0 col-sm-8 offset-sm-2">
                        <img src="img/about-illustration.png" alt="">
                    </div>
                </div>
            </div>
        </div><!-- ends: .about-intro -->
    </section><!-- ends: .intro-wrapper -->

    <section class="about-contents section-padding">
        <div class="container">
            <div class="row">
                
    <div class="col-lg-12 contents-wrapper">
        <div class="contents">
            <div class="row align-items-center">
                <div class="col-lg-5 col-sm-6">
                    <img src="img/about-img1.png" alt="">
                </div>
                <div class="col-lg-6 offset-lg-1 col-sm-6 mt-5 mt-md-0">
                    <h1>About <span>Quick Search</span></h1>
                    <p>The leading player in Finding shops in Surat,Quick Search display all shops category wise,User will get all the details about the shop through shop website. Daily needs, restaurants, saloon, event organisor and holiday plannning through the desktop or mobile site is a delightfully customer friendly experience, and with just a few clicks you can find a shop,which is related with your needs. 
					   The overall booking experience with Quick Search constantly adds value to its product and continues to offer the best to its customers.</p>
                </div>
            </div>
        </div><!-- ends: .contents -->
        <div class="contents">
            <div class="row align-items-center">
                <div class="col-lg-5 col-sm-6">
                    <h1>Why List on <span>Quick Search</span></h1>
                    <ul class="list-unstyled list-features p-top-15">
                        <li>
                            <div class="list-count"><span>1</span></div>
                            <div class="list-content">
                                <h4>Easy Registration</h4>
                                <p>Vendors can easily register his/her shop.</p>
                            </div>
                        </li>
                        <li>
                            <div class="list-count"><span>2</span></div>
                            <div class="list-content">
                                <h4>Promote your Listing</h4>
                                <p>Quick Search promote all the vendors shops category wise.</p>
                            </div>
                        </li>
                        <li>
                            <div class="list-count"><span>3</span></div>
                            <div class="list-content">
                                <h4>Great Sales Benefits</h4>
                                <p>The user can easily get the details of the shops.so,sales of the product is increase day by day.</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 offset-lg-1 text-right col-sm-6 mt-5 mt-md-0">
                    <img src="img/about-img2.png" alt="">
                </div>
            </div>
        </div><!-- ends: .contents -->
    </div><!-- ends: .content-block -->

            </div>
        </div>
    </section><!-- ends: .about-contents -->

    
    <section class="counters-wrapper bg-gradient-pw section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1>Millions of People</h1>
                    <p>turn to Directoria every day to make spending decisions</p>
                    <ul class="list-unstyled counter-items">
                        <li>
                            <p><span class="count_up">
							<?php
								include 'include/connect.php';
								$sql=$link->rawQueryOne('select count(*) as cnt from vendor');
								if($link->count > 0)
								{
									echo $sql['cnt'];
								}
							?>
							</p>
                            <span>Listings</span>
                        </li>
                        <li>
                            <p><span class="count_up">
							<?php
								$sql=$link->rawQueryOne('select count(*) as cnt from user');
								if($link->count > 0)
								{
									echo $sql['cnt'];
								}
							?>
							</p>
                            <span>Verified Users</span>
                        </li>
                        <li>
                            <p><span class="count_up">
							<?php
								$sql=$link->rawQueryOne('select count(*) as cnt from category');
								if($link->count > 0)
								{
									echo $sql['cnt'];
								}
							?>
							</p>
                            <span>Categories</span>
                        </li>
                        <li>
                            <p><span class="count_up">
							<?php
								include '../include/connect.php';
								$sql=$link->rawQueryOne('select count(*) as cnt from theme');
								if($link->count > 0)
								{
									echo $sql['cnt'];
								}
							?>
							</p>
                            <span>Themes</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section><!-- ends: .counter-wrapper -->


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