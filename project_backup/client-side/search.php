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
                        <h1 class="page-title">Search Listing</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Search Listings</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div><!-- ends: .breadcrumb-wrapper -->

    </section>
	<?php
	if(($_POST['category']=="") && ($_POST['look']==""))
	{
		?>
		<img src="img/404-cat.gif" style="margin-left: 340px;">
		<div class="col-lg-12 text-center m-top-20">
            <a href="index.php" class="btn btn-gradient btn-gradient-two">Go to Home </a>
        </div>
		<?php
	}
	else
	{
	?>
    <section class="all-listing-wrapper section-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
				<form action="" method="post">
                    <div class="atbd_generic_header">
                        <div class="atbd_generic_header_title">
                            <h4>All Items</h4>
							<?php
							include 'include/connect.php';
							if($_POST['look']!="" && $_POST['category']=="")
							{
								$sql = $link->rawQueryOne('select count(v.vendor_id) as cnt from vendor v,contact c,about a,search s where v.vendor_id=c.vendor_id and v.vendor_id=a.vendor_id and s.vendor_id=v.vendor_id and v.approve=? and upper(s.keyword)=upper(?)',Array("2",$_POST['look']));
								if($link->count > 0)
								{
									$count = $sql['cnt'];
								}
							}
							else if(($_POST['look']=="") && ($_POST['category']!=""))
							{
								$sql = $link->rawQueryOne('select count(v.vendor_id) as cnt from vendor v,contact c,about a,category ct where v.vendor_id=c.vendor_id and v.vendor_id=a.vendor_id and ct.category_id=v.category_id and v.approve=? and v.category_id=?',Array("2",$_POST['category']));
								if($link->count > 0)
								{
									$count = $sql['cnt'];
								}
							}
							else if(($_POST['look']!="") && ($_POST['category']!=""))
							{
								$sql = $link->rawQueryOne('select count(v.vendor_id) as cnt from vendor v,contact c,about a,category ct,search s where v.vendor_id=c.vendor_id and v.vendor_id=a.vendor_id and ct.category_id=v.category_id and s.vendor_id=v.vendor_id and v.approve=? and v.category_id=? and upper(s.keyword)=upper(?)',Array("2",$_POST['category'],$_POST['look']));
								if($link->count > 0)
								{
									$count = $sql['cnt'];
								}
							}
							?>
                            <p>Total Listing Found: <?php echo $count; ?> </p>
                        </div><!-- ends: .atbd_generic_header_title -->
						
						<div class="form-group">
							<input type="text" placeholder="What are you looking for?" class="form-control" style="width: 250px;" name="look">
						</div>
						<div class="form-group" style="margin-left: -150px;">
							<div class="select-basic">
								<select class="form-control ad_search_category" name="category">
									<option value="">Select Category</option>
									<?php
										include 'include/connect.php';
										$sql = $link->rawQuery('select * from category');
										if($link->count > 0)
										{
											foreach($sql as $s)
											{
											?>
												<option value="<?php echo $s['category_id']; ?>"><?php echo $s['category_name']; ?></option>
											<?php
											}
										}
									?>
								</select>
							</div>
						</div>
						<div class="atbd_submit_btn" style="margin-left: -136px;margin-top: -17px;">
                            <button type="submit" class="btn btn-block btn-gradient btn-gradient-one btn-md btn_search" name="submit">Search</button>
                        </div>
                        <div class="atbd_listing_action_btn btn-toolbar align-items-center" role="toolbar">
                            <!-- Views dropdown -->
                           
                            <!-- Orderby dropdown -->
                         
                        </div><!-- ends: .atbd_listing_action_btn -->
                    </div><!-- ends: .atbd_generic_header -->
					</form>
                </div><!-- ends: .col-lg-12 -->

                <div class="col-lg-12 listing-items">
                    <div class="row">
                        
    <div class="col-lg-12 order-0 order-lg-1">
    <div class="row">
	<?php
				include 'include/connect.php';
				if($_POST['look']!="" && $_POST['category']=="")
				{
					$sql = $link->rawQuery('select v.vendor_id,s.keyword,v.shop_name,c.address,c.phone_no1,c.phone_no2,a.baner_image from vendor v,contact c,about a,search s where v.vendor_id=c.vendor_id and v.vendor_id=a.vendor_id and s.vendor_id=v.vendor_id and v.approve=? and upper(s.keyword)=upper(?)',Array("2",$_POST['look']));
					if($link->count > 0)
					{
						
						foreach($sql as $s)
						{
							?>
							<div class="col-lg-12">
								<div class="atbd_single_listing atbd_listing_list">
									<article class="atbd_single_listing_wrapper">
										<figure class="atbd_listing_thumbnail_area">
											<div class="atbd_listing_image">
												<a href="#">
													<img src="<?php echo '../Vendor-Panel/about/'.$s['baner_image']; ?>" alt="listing image" style="height: 40%;">
												</a>
											</div><!-- ends: .atbd_listing_image -->
										</figure><!-- ends: .atbd_listing_thumbnail_area -->

									<div class="atbd_listing_info">
										<div class="atbd_content_upper">
											<h4 class="atbd_listing_title">
												<a href="#"><?php echo $s['shop_name']; ?></a>
											</h4>
											<div class="atbd_listing_data_list">
												<ul>
													<li>
														<p><span class="la la-map-marker"></span><?php echo $s['address']; ?></p>
													</li>
													<li>
														<p><span class="la la-phone"></span><?php echo $s['phone_no1']; ?></p>
													</li>
													<li>
														<p><span class="la la-phone"></span><?php echo $s['phone_no2']; ?></p>
													</li>
												</ul>
											</div><!-- End atbd listing meta -->
						
										</div><!-- end .atbd_content_upper -->

										<?php
											if(isset($_SESSION['user_id']))
											{
										?>
											<div class="atbd_listing_bottom_content">
												<div class="atbd_content_left">
													<div class="atbd_listing_category">
														<?php
														
															$se = $link->rawQueryOne('select t.theme_url from theme t,vendor v where v.theme_id=t.theme_id and vendor_id=?',Array($s['vendor_id']));
															
														?>
														<a href="../Admin-Panel/theme/upload/<?php echo $se['theme_url'];?>?vendor_id=<?php echo $s['vendor_id']; ?>" target="_private"><span class="la la-eye"></span>Website</a>
													</div>
												</div>
											</div>
										<?php
											}
										?>
									</div>
									</article>
								</div>
							</div>
							<?php
						}
					}
					else
					{
						?>
						<img src="img/NoRecordFound.jpg">
						<div class="col-lg-12 text-center m-top-20">
							<a href="index.php" class="btn btn-gradient btn-gradient-two">Go to Home </a>
						</div>
						<?php
					}
				}
				else if(($_POST['look']=="") && ($_POST['category']!=""))
				{
					$sql = $link->rawQuery('select v.vendor_id,v.category_id,v.shop_name,c.address,c.phone_no1,c.phone_no2,a.baner_image from vendor v,contact c,about a,category ct where v.vendor_id=c.vendor_id and v.vendor_id=a.vendor_id and ct.category_id=v.category_id and v.approve=? and v.category_id=?',Array("2",$_POST['category']));
					if($link->count > 0)
					{
						foreach($sql as $s)
						{
							?>
							<div class="col-lg-12">
								<div class="atbd_single_listing atbd_listing_list">
									<article class="atbd_single_listing_wrapper">
										<figure class="atbd_listing_thumbnail_area">
											<div class="atbd_listing_image">
												<a href="#">
													<img src="<?php echo '../Vendor-Panel/about/'.$s['baner_image']; ?>" alt="listing image" style="height: 40%;">
												</a>
											</div><!-- ends: .atbd_listing_image -->
										</figure><!-- ends: .atbd_listing_thumbnail_area -->

									<div class="atbd_listing_info">
										<div class="atbd_content_upper">
											<h4 class="atbd_listing_title">
												<a href="#"><?php echo $s['shop_name']; ?></a>
											</h4>
											<div class="atbd_listing_data_list">
												<ul>
													<li>
														<p><span class="la la-map-marker"></span><?php echo $s['address']; ?></p>
													</li>
													<li>
														<p><span class="la la-phone"></span><?php echo $s['phone_no1']; ?></p>
													</li>
													<li>
														<p><span class="la la-phone"></span><?php echo $s['phone_no2']; ?></p>
													</li>
												</ul>
											</div><!-- End atbd listing meta -->
						
										</div><!-- end .atbd_content_upper -->

										<?php
											if(isset($_SESSION['user_id']))
											{
										?>
											<div class="atbd_listing_bottom_content">
												<div class="atbd_content_left">
													<div class="atbd_listing_category">
														<?php
														
															$se = $link->rawQueryOne('select t.theme_url from theme t,vendor v where v.theme_id=t.theme_id and vendor_id=?',Array($s['vendor_id']));
														?>
														<a href="../Admin-Panel/theme/upload/<?php echo $se['theme_url'];?>?vendor_id=<?php echo $s['vendor_id']; ?>" target="_private"><span class="la la-eye"></span>Website</a>
													</div>
												</div>
											</div>
										<?php
											}
										?>
									</div>
									</article>
								</div>
							</div>
							<?php
						}
					}
					else
					{
						?>
						<img src="img/NoRecordFound.jpg">
						<div class="col-lg-12 text-center m-top-20">
							<a href="index.php" class="btn btn-gradient btn-gradient-two">Go to Home </a>
						</div>
						<?php
					}
				}
				else if(($_POST['look']!="") && ($_POST['category']!=""))
				{
					$sql = $link->rawQuery('select v.vendor_id,s.keyword,v.category_id,v.shop_name,c.address,c.phone_no1,c.phone_no2,a.baner_image from vendor v,contact c,about a,category ct,search s where v.vendor_id=c.vendor_id and v.vendor_id=a.vendor_id and ct.category_id=v.category_id and s.vendor_id=v.vendor_id and v.approve=? and v.category_id=? and upper(s.keyword)=upper(?)',Array("2",$_POST['category'],$_POST['look']));
					if($link->count > 0)
					{
						foreach($sql as $s)
						{
							?>
							<div class="col-lg-12">
								<div class="atbd_single_listing atbd_listing_list">
									<article class="atbd_single_listing_wrapper">
										<figure class="atbd_listing_thumbnail_area">
											<div class="atbd_listing_image">
												<a href="#">
													<img src="<?php echo '../Vendor-Panel/about/'.$s['baner_image']; ?>" alt="listing image" style="height: 40%;">
												</a>
											</div><!-- ends: .atbd_listing_image -->
										</figure><!-- ends: .atbd_listing_thumbnail_area -->

									<div class="atbd_listing_info">
										<div class="atbd_content_upper">
											<h4 class="atbd_listing_title">
												<a href="#"><?php echo $s['shop_name']; ?></a>
											</h4>
											<div class="atbd_listing_data_list">
												<ul>
													<li>
														<p><span class="la la-map-marker"></span><?php echo $s['address']; ?></p>
													</li>
													<li>
														<p><span class="la la-phone"></span><?php echo $s['phone_no1']; ?></p>
													</li>
													<li>
														<p><span class="la la-phone"></span><?php echo $s['phone_no2']; ?></p>
													</li>
												</ul>
											</div><!-- End atbd listing meta -->
						
										</div><!-- end .atbd_content_upper -->

										<?php
											if(isset($_SESSION['user_id']))
											{
										?>
											<div class="atbd_listing_bottom_content">
												<div class="atbd_content_left">
													<div class="atbd_listing_category">
														<?php
															$se = $link->rawQueryOne('select t.theme_url from theme t,vendor v where v.theme_id=t.theme_id and vendor_id=?',Array($s['vendor_id']));
														?>
														<a href="../Admin-Panel/theme/upload/<?php echo $se['theme_url'];?>?vendor_id=<?php echo $s['vendor_id']; ?>" target="_private"><span class="la la-eye"></span>Website</a>
													</div>
												</div>
											</div>
										<?php
											}
										?>
									</div>
									</article>
								</div>
							</div>
							<?php
						}
					}
					else
					{
						?>
						<img src="img/NoRecordFound.jpg">
						<div class="col-lg-12 text-center m-top-20">
							<a href="index.php" class="btn btn-gradient btn-gradient-two">Go to Home </a>
						</div>
						<?php
					}
				}
			?>
	
    </div>
                        </div><!-- ends: .col-lg-8 -->
                    </div>
                </div><!-- ends: .listing-items -->
            </div>
        </div>
    </section><!-- ends: .all-listing-wrapper -->
    <?php
	}
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