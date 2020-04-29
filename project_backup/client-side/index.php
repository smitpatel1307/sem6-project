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
	
		/*<?php
			session_start();
		    include 'include/connect.php';
			$i=$link->rawQueryOne('select * from user where user_name=?',Array($_SESSION['user_name']));
			$password=$i['password'];
		?>
		if(cpass!=<?php echo $password; ?> && rpass=="" && npass=="")
		{
			document.getElementById("validcpass").innerHTML = "Enter correct current password";
			s=false;
		}*/
		
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

    <section class="intro-wrapper bgimage overlay overlay--dark">
        <div class="bg_image_holder"><img src="img/intro.jpg" alt=""></div>
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

                                <!--<div class="offcanvas-menu d-none">
                                    <a href="#" class="offcanvas-menu__user"><i class="la la-user"></i></a>
                                    <div class="offcanvas-menu__contents">
                                        <a href="#" class="offcanvas-menu__close"><i class="la la-times-circle"></i></a>
                                        <div class="author-avatar">
                                            <img src="img/author-avatar.png" alt="" class="rounded-circle">
                                        </div>
                                        <ul class="list-unstyled">
                                            <li><a href="dashboard-listings.html">My Profile</a></li>
                                            <li><a href="dashboard-listings.html">My Listing</a></li>
                                            <li><a href="dashboard-listings.html">Favorite Listing</a></li>
                                            <li><a href="add-listing.html">Add Listing</a></li>
                                            <li><a href="#">Logout</a></li>
                                        </ul>
                                        <div class="search_area">
                                            <form action="http://aazztech.com/">
                                                <div class="input-group input-group-light">
                                                    <input type="text" class="form-control search_field" placeholder="Search here..." autocomplete="off">
                                                </div>
                                                <button type="submit" class="btn btn-sm btn-secondary">Search</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>-->
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

        <div class="directory_content_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="search_title_area">
                            <h2 class="title">Find the Best Places to Be</h2>
                            <p class="sub_title">All the top locations – from restaurants and clubs, to galleries, famous places and more..</p>
                        </div><!-- ends: .search_title_area -->

                        <form action="search.php" class="search_form" method="post">
                            <div class="atbd_seach_fields_wrapper">
                                <div class="single_search_field search_query">
                                    <input class="form-control search_fields" type="text" placeholder="What are you looking for?" name="look">
                                </div>
                                <div class="single_search_field search_category">
                                    <select class="search_fields" id="at_biz_dir-category" name="category">
                                        <option value="">Select a category</option>
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
                                
                                <div class="atbd_submit_btn">
                                    <button type="submit" class="btn btn-block btn-gradient btn-gradient-one btn-md btn_search" name="submit" value="submit">Search</button>
                                </div>
                            </div>
                        </form><!-- ends: .search_form -->
                        
                    </div><!-- ends: .col-lg-10 -->
                </div>
            </div>
        </div><!-- ends: .directory_search_area -->

    </section><!-- ends: .intro-wrapper -->

    <section class="categories-cards section-padding-two">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>What Kind of Activity do you Want to try?</h2>
                        <p>Discover best things to do restaurants, shopping, hotels, cafes and places around the Surat by categories.</p>
                    </div>
                </div>
            </div>
            
			<div class="row">
			<?php
				$sql = $link->rawQuery('select * from category limit 6');
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
									
										<div>
											<a href="category_vendor.php?cid=<?php echo $s['category_id']; ?>" style="color:white;"><h4 class="cat-name"><?php echo $s['category_name']; ?></a></h4>
										</div>
									
								</figcaption>
							</figure>
							</div>
						</div>
						<?php
					}
				}
			?>
			</div>
        <div class="col-lg-12 text-center m-top-20">
            <a href="all-categories.php" class="btn btn-gradient btn-gradient-two">View All Listing </a>
        </div>
        </div>
    </section><!-- ends: .categories-cards -->

    <section class="listing-cards section-bg section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Best Listings Around the Surat</h2>
                        <p>Explore the popular listings in the Surat</p>
                    </div>
                </div>

                <div class="listing-cards-wrapper col-lg-12">
                    <div class="row">
					<?php
					$sql = $link->rawQuery('select v.vendor_id,v.shop_name,c.address,c.phone_no1,c.phone_no2,a.baner_image from vendor v,contact c,about a where v.vendor_id=c.vendor_id and v.vendor_id=a.vendor_id and v.approve=? limit 6',Array("2"));
					if($link->count > 0)
					{
						foreach($sql as $s)
						{
							//$_SESSION['vendor_id']=$s['vendor_id'];
							?>
							<div class="col-lg-4 col-sm-6">
								<div class="atbd_single_listing ">
									<article class="atbd_single_listing_wrapper">
										<figure class="atbd_listing_thumbnail_area">
											<div class="atbd_listing_image">
												<img src="<?php echo '../Vendor-Panel/about/'.$s['baner_image']; ?>" alt="listing image" style="height:176px;">
											</div>
										</figure>

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
												</div>
											</div>
											<?php
												if(isset($_SESSION['user_id']))
												{
											?>
												<div class="atbd_listing_bottom_content">
													<div class="atbd_content_left">
														<div class="atbd_listing_category">
															<?php
																$sql = $link->rawQueryOne('select t.theme_url from theme t,vendor v where v.theme_id=t.theme_id and vendor_id=?',Array($s['vendor_id']));
															?>
															<a target="_private" href="../Admin-Panel/theme/upload/<?php echo $sql['theme_url'];?>?vendor_id=<?php echo $s['vendor_id']; ?>"><span class="la la-eye"></span>Website</a>
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
					?>
                      
                        <div class="col-lg-12 text-center m-top-20">
                            <a href="all-listings-list.php" class="btn btn-gradient btn-gradient-two">View All Listing</a>
                        </div>
                    </div>
                </div><!-- ends: .listing-cards-wrapper -->

            </div>
        </div>
    </section><!-- ends: .listing-cards -->

    <section class="cta section-padding border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12"> 
                    <div class="section-title">
                        <h2>How <span>Quick Search</span> Work ?</h2>
                        <p>Explore the popular listings in Surat</p>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6">
                            <img src="img/illustration-1.svg" alt="" class="svg">
                        </div>
                        <div class="col-lg-5 offset-lg-1 col-md-6 mt-5 mt-md-0">
                            
    <ul class="feature-list-wrapper list-unstyled">
        <li>
            <div class="icon"><span class="circle-secondary"><i class="la la-search"></i></span></div>
            <div class="list-content">
                <h4>Search Vendor</h4>
                <p>Search the vendor based on the your needs with the help of the vendor name,shop name or keywords.</p>
            </div>
        </li>
        <li>
            <div class="icon"><span class="circle-success"><i class="la la-list-alt"></i></span></div>
            <div class="list-content">
                <h4>Shop Listing</h4>
                <p>Display all shops acording to your search.</p>
            </div>
        </li>
        <li>
            <div class="icon"><span class="circle-primary"><i class="la la-eye"></i></span></div>
            <div class="list-content">
                <h4>View Website</h4>
                <p>View website of the particular search display in the list.</p>
            </div>
        </li>
    </ul><!-- ends: .feature-list-wrapper -->

                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- ends: .cta -->

    

    <section class="testimonial-wrapper section-padding--bottom">
        <div class="container" style="margin-top: 100px;">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Trusted By Over 4000+ Users</h2>
                        <p>Here is what people say about Quick Search</p>
                    </div>
                </div><!-- ends: .col-lg-12 -->
                
    <div class="testimonial-carousel owl-carousel">
        
    <div class="carousel-single">
        <div class="author-thumb">
            <img src="img/misha1.jpg" alt="" class="rounded-circle">
        </div>
        <div class="author-info">
            <h4>Misha Kelawala</h4>
            <span>Adajan , Surat</span>
        </div>
        <p class="author-comment">Any person who wants to search for helping them is too easy to search.Its amazing services given by Quick Search.</p>
    </div><!-- ends: .carousel-single -->

        
    <div class="carousel-single">
        <div class="author-thumb">
            <img src="img/krishna.jpg" alt="" class="rounded-circle">
        </div>
        <div class="author-info">
            <h4>Krishna Borkar</h4>
            <span>City-Light , Surat</span>
        </div>
        <p class="author-comment">Quick Search is only platform to find any thing which we want in unknown city I love this Website.Excellent service provider.</p>
    </div><!-- ends: .carousel-single -->

        
    <div class="carousel-single">
        <div class="author-thumb">
            <img src="img/divyesh.jpg" alt="" class="rounded-circle">
        </div>
        <div class="author-info">
            <h4>Divyesh Solanki</h4>
            <span>Jahangirpura , Surat</span>
        </div>
        <p class="author-comment">I always trust Quick Search to give me the right information since a long time.Super services given by Quick Search.</p>
    </div><!-- ends: .carousel-single -->

    </div><!-- ends: .testimonial-carousel -->

            </div>
        </div>
    </section><!-- ends: .testimonial-wrapper -->
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
if(isset($_REQUEST['error']))
{
	?>
	$('#signup_modal').modal('show');
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
 
 $("#password").click( function()
         {
            $('#password_modal').modal('show')
			$('#login_modal').modal('hide')
         }
 );


     <!-- endinject-->


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
</body>
</html>
<?php 
					if(isset($_REQUEST['errs']) && $_REQUEST['errs'] == 1)
					{
						?>
						<script>alert('New Password has been mailed successfully.');</script>
					<?php
					} 
					else if(isset($_REQUEST['errs']) && $_REQUEST['errs'] == 2)
					{
						?><script>alert('Mail not sent Try again later.');</script>
					<?php
					}
				?>
<?php 
					if(isset($_REQUEST['e']) && $_REQUEST['e'] == 1)
					{
						?>
						<script>alert('New Password has been mailed successfully.');</script>
					<?php
					} 
					else if(isset($_REQUEST['e']) && $_REQUEST['e'] == 2)
					{
						?><script>alert('Mail not sent Try again later.');</script>
					<?php
					}
					else if(isset($_REQUEST['e']) && $_REQUEST['e'] == 3)
					{
						?><script>alert('Email Id does not exists.');</script>
					<?php
					}
?>
