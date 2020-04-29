
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Direo Template</title>
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,600,700" rel="stylesheet">

    <!-- inject:css-->
    <link rel="stylesheet" href="css/plugin.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- endinject -->

    <link rel="icon" type="image/png" sizes="32x32" href="img/fevicon.png">
</head>
<body>
     
    
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
                                    <a href="index.php"><img src="img/logo-white.png" alt="logo image" class="img-fluid"></a>
                                </div>
                            </div><!-- ends: .logo-wrapper -->

                            
    <div class="menu-container order-lg-1 order-sm-0">
        <div class="d_menu">
            <?php
			  include 'include/header.php';
			?>
        </div>
    </div>


                            <div class="menu-right order-lg-2 order-sm-2">
                                <div class="search-wrapper">
                                    <div class="nav_right_module search_module">
                                        <span class="icon-left" id="basic-addon9"><i class="la la-search"></i></span>
                                        <div class="search_area">
                                            <form action="/">
                                                <div class="input-group input-group-light">
                                                    <input type="text" class="form-control search_field top-search-field" placeholder="What are you looking for?" autocomplete="off">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="search-categories">
                                        <ul class="list-unstyled">
                                            <li><a href=""><span class="la la-glass bg-danger"></span> Food & Drinks</a></li>
                                            <li><a href=""><span class="la la-cutlery bg-primary"></span> Restaurants</a></li>
                                            <li><a href=""><span class="la la-map-marker bg-success"></span> Places</a></li>
                                            <li><a href=""><span class="la la-shopping-cart bg-secondary"></span> Shopping & Store</a></li>
                                            <li><a href=""><span class="la la-bed bg-info"></span> Hotels</a></li>
                                            <li><a href=""><span class="la la-bank bg-warning"></span> Art & History</a></li>
                                        </ul>
                                    </div>
                                </div><!-- ends: .search-wrapper -->
                                <!-- start .author-area -->
                                <div class="author-area">
                                    <div class="author__access_area">
                                        <ul class="d-flex list-unstyled align-items-center">
                                            <li>
                                                <a href="add-listing.html" class="btn btn-xs btn-gradient btn-gradient-two">
                                                    <span class="la la-plus"></span> Add Listing
                                                </a>
                                            </li>
                                            <li>
                                                <a href="" class="access-link" data-toggle="modal" data-target="#login_modal">Login</a>
                                <span>or</span>
                                <a href="" class="access-link" data-toggle="modal" data-target="#signup_modal">Register</a>
                                                
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- end .author-area -->

                                <div class="offcanvas-menu d-none">
                                    <a href="" class="offcanvas-menu__user"><i class="la la-user"></i></a>
                                    <div class="offcanvas-menu__contents">
                                        <a href="" class="offcanvas-menu__close"><i class="la la-times-circle"></i></a>
                                        <div class="author-avatar">
                                            <img src="img/author-avatar.png" alt="" class="rounded-circle">
                                        </div>
                                        <ul class="list-unstyled">
                                            <li><a href="dashboard-listings.html">My Profile</a></li>
                                            <li><a href="dashboard-listings.html">My Listing</a></li>
                                            <li><a href="dashboard-listings.html">Favorite Listing</a></li>
                                            <li><a href="add-listing.html">Add Listing</a></li>
                                            <li><a href="">Logout</a></li>
                                        </ul>
                                        <div class="search_area">
                                            <form action="/">
                                                <div class="input-group input-group-light">
                                                    <input type="text" class="form-control search_field" placeholder="Search here..." autocomplete="off">
                                                </div>
                                                <button type="submit" class="btn btn-sm btn-secondary">Search</button>
                                            </form>
                                        </div><!-- ends: .search_area -->
                                    </div><!-- ends: .author-info -->
                                </div><!-- ends: .offcanvas-menu -->
                            </div><!-- ends: .menu-right -->
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
                        <h1 class="page-title">Dashboard</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">All Listings</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div><!-- ends: .breadcrumb-wrapper -->

    </section>


    <section class="dashboard-wrapper section-bg p-bottom-70">
        <div class="dashboard-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="dashboard-nav-area">
                            <ul class="nav" id="dashboard-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="all-listings" data-toggle="tab" href="#listings" role="tab" aria-controls="listings" aria-selected="true">My Listings</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">My Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="faborite-listings" data-toggle="tab" href="#favorite" role="tab" aria-controls="favorite" aria-selected="false">Favorite Listing</a>
                                </li>
                            </ul>

                            <div class="nav_button">
                                <a href="add-listing.html" class="btn btn-primary"><span class="la la-plus"></span> Add Listing</a>
                                <a href="" class="btn btn-secondary">Log Out</a>
                            </div>
                        </div>
                    </div><!-- ends: .col-lg-12 -->
                </div>
            </div>
        </div><!-- ends: .dashboard-nav -->
        <div class="tab-content p-top-100" id="dashboard-tabs-content">
            <div class="tab-pane fade show active" id="listings" role="tabpanel" aria-labelledby="all-listings">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6">
                            
    <div class="atbd_single_listing atbd_listing_card">
        <article class="atbd_single_listing_wrapper ">
            <figure class="atbd_listing_thumbnail_area">
                <div class="atbd_listing_image">
                    <a href=""><img src="img/p1.jpg" alt="listing image"></a>
                </div>

                <figcaption class="atbd_thumbnail_overlay_content">
                    <div class="atbd_upper_badge">
                        <span class="atbd_badge atbd_badge_featured">Featured</span>
                    </div>
                </figcaption>
            </figure>

            <div class="atbd_listing_info">
                <div class="atbd_content_upper">
                    <div class="atbd_dashboard_tittle_metas">
                        <h4 class="atbd_listing_title">
                            <a href="">Flanders Heat & Air Systems</a>
                        </h4>
                    </div><!-- ends: .atbd_dashboard_tittle_metas -->
                    <div class="atbd_card_action">
                        <div class="atbd_listing_meta">
                            <span class="atbd_meta atbd_listing_rating">4.5<i class="la la-star"></i></span>
                        </div><!-- ends: .atbd listing meta -->
                        <div class="db_btn_area">
                            <div class="dropup edit_listing">
                                <a href="#" role="button" class="btn btn-sm btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Edit</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href=""><span class="la la-edit color-primary"></span> Edit Your Listing</a>
                                    <a class="dropdown-item" href=""><span class="la la-money color-secondary"></span> Change Your Plan</a>
                                </div>
                            </div>
                            <a href="#" class="directory_remove_btn btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#modal-item-remove">Delete</a>
                        </div> <!--ends .db_btn_area-->
                    </div>
                </div><!-- end .atbd_content_upper -->

                <div class="atbd_listing_bottom_content">
                    <div class="listing-meta">
                        <p><span>Plan Name:</span> Basic Plan</p>
                        <p><span>Expiration:</span> February 13, 2020</p>
                        <p><span>Listing Status:</span> Published</p>
                    </div>
                </div><!-- end .atbd_listing_bottom_content -->
            </div><!-- ends: .atbd_listing_info -->
        </article>
    </div><!-- ends: .atbd_single_listing -->

                        </div><!-- ends: .col-lg-4 -->
                        <div class="col-lg-4 col-sm-6">
                            
    <div class="atbd_single_listing atbd_listing_card">
        <article class="atbd_single_listing_wrapper ">
            <figure class="atbd_listing_thumbnail_area">
                <div class="atbd_listing_image">
                    <a href=""><img src="img/p2.jpg" alt="listing image"></a>
                </div>

                <figcaption class="atbd_thumbnail_overlay_content">
                    <div class="atbd_upper_badge">
                        <span class="atbd_badge atbd_badge_featured">Featured</span>
                    </div>
                </figcaption>
            </figure>

            <div class="atbd_listing_info">
                <div class="atbd_content_upper">
                    <div class="atbd_dashboard_tittle_metas">
                        <h4 class="atbd_listing_title">
                            <a href="">Flanders Heat & Air Systems</a>
                        </h4>
                    </div><!-- ends: .atbd_dashboard_tittle_metas -->
                    <div class="atbd_card_action">
                        <div class="atbd_listing_meta">
                            <span class="atbd_meta atbd_listing_rating">4.5<i class="la la-star"></i></span>
                        </div><!-- ends: .atbd listing meta -->
                        <div class="db_btn_area">
                            <div class="dropup edit_listing">
                                <a href="#" role="button" class="btn btn-sm btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Edit</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href=""><span class="la la-edit color-primary"></span> Edit Your Listing</a>
                                    <a class="dropdown-item" href=""><span class="la la-money color-secondary"></span> Change Your Plan</a>
                                </div>
                            </div>
                            <a href="#" class="directory_remove_btn btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#modal-item-remove">Delete</a>
                        </div> <!--ends .db_btn_area-->
                    </div>
                </div><!-- end .atbd_content_upper -->

                <div class="atbd_listing_bottom_content">
                    <div class="listing-meta">
                        <p><span>Plan Name:</span> Basic Plan</p>
                        <p><span>Expiration:</span> February 13, 2020</p>
                        <p><span>Listing Status:</span> Published</p>
                    </div>
                </div><!-- end .atbd_listing_bottom_content -->
            </div><!-- ends: .atbd_listing_info -->
        </article>
    </div><!-- ends: .atbd_single_listing -->

                        </div><!-- ends: .col-lg-4 -->
                        <div class="col-lg-4 col-sm-6">
                            
    <div class="atbd_single_listing atbd_listing_card">
        <article class="atbd_single_listing_wrapper ">
            <figure class="atbd_listing_thumbnail_area">
                <div class="atbd_listing_image">
                    <a href=""><img src="img/p3.jpg" alt="listing image"></a>
                </div>

                <figcaption class="atbd_thumbnail_overlay_content">
                    <div class="atbd_upper_badge">
                        <span class="atbd_badge atbd_badge_featured">Featured</span>
                    </div>
                </figcaption>
            </figure>

            <div class="atbd_listing_info">
                <div class="atbd_content_upper">
                    <div class="atbd_dashboard_tittle_metas">
                        <h4 class="atbd_listing_title">
                            <a href="">Flanders Heat & Air Systems</a>
                        </h4>
                    </div><!-- ends: .atbd_dashboard_tittle_metas -->
                    <div class="atbd_card_action">
                        <div class="atbd_listing_meta">
                            <span class="atbd_meta atbd_listing_rating">4.5<i class="la la-star"></i></span>
                        </div><!-- ends: .atbd listing meta -->
                        <div class="db_btn_area">
                            <div class="dropup edit_listing">
                                <a href="#" role="button" class="btn btn-sm btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Edit</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href=""><span class="la la-edit color-primary"></span> Edit Your Listing</a>
                                    <a class="dropdown-item" href=""><span class="la la-money color-secondary"></span> Change Your Plan</a>
                                </div>
                            </div>
                            <a href="#" class="directory_remove_btn btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#modal-item-remove">Delete</a>
                        </div> <!--ends .db_btn_area-->
                    </div>
                </div><!-- end .atbd_content_upper -->

                <div class="atbd_listing_bottom_content">
                    <div class="listing-meta">
                        <p><span>Plan Name:</span> Basic Plan</p>
                        <p><span>Expiration:</span> February 13, 2020</p>
                        <p><span>Listing Status:</span> Published</p>
                    </div>
                </div><!-- end .atbd_listing_bottom_content -->
            </div><!-- ends: .atbd_listing_info -->
        </article>
    </div><!-- ends: .atbd_single_listing -->

                        </div><!-- ends: .col-lg-4 -->
                        <div class="col-lg-4 col-sm-6">
                            
    <div class="atbd_single_listing atbd_listing_card">
        <article class="atbd_single_listing_wrapper ">
            <figure class="atbd_listing_thumbnail_area">
                <div class="atbd_listing_image">
                    <a href=""><img src="img/p4.jpg" alt="listing image"></a>
                </div>

                <figcaption class="atbd_thumbnail_overlay_content">
                    <div class="atbd_upper_badge">
                        <span class="atbd_badge atbd_badge_featured">Featured</span>
                    </div>
                </figcaption>
            </figure>

            <div class="atbd_listing_info">
                <div class="atbd_content_upper">
                    <div class="atbd_dashboard_tittle_metas">
                        <h4 class="atbd_listing_title">
                            <a href="">Flanders Heat & Air Systems</a>
                        </h4>
                    </div><!-- ends: .atbd_dashboard_tittle_metas -->
                    <div class="atbd_card_action">
                        <div class="atbd_listing_meta">
                            <span class="atbd_meta atbd_listing_rating">4.5<i class="la la-star"></i></span>
                        </div><!-- ends: .atbd listing meta -->
                        <div class="db_btn_area">
                            <div class="dropup edit_listing">
                                <a href="#" role="button" class="btn btn-sm btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Edit</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href=""><span class="la la-edit color-primary"></span> Edit Your Listing</a>
                                    <a class="dropdown-item" href=""><span class="la la-money color-secondary"></span> Change Your Plan</a>
                                </div>
                            </div>
                            <a href="#" class="directory_remove_btn btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#modal-item-remove">Delete</a>
                        </div> <!--ends .db_btn_area-->
                    </div>
                </div><!-- end .atbd_content_upper -->

                <div class="atbd_listing_bottom_content">
                    <div class="listing-meta">
                        <p><span>Plan Name:</span> Basic Plan</p>
                        <p><span>Expiration:</span> February 13, 2020</p>
                        <p><span>Listing Status:</span> Published</p>
                    </div>
                </div><!-- end .atbd_listing_bottom_content -->
            </div><!-- ends: .atbd_listing_info -->
        </article>
    </div><!-- ends: .atbd_single_listing -->

                        </div><!-- ends: .col-lg-4 -->
                        <div class="col-lg-4 col-sm-6">
                            
    <div class="atbd_single_listing atbd_listing_card">
        <article class="atbd_single_listing_wrapper ">
            <figure class="atbd_listing_thumbnail_area">
                <div class="atbd_listing_image">
                    <a href=""><img src="img/p5.jpg" alt="listing image"></a>
                </div>

                <figcaption class="atbd_thumbnail_overlay_content">
                    <div class="atbd_upper_badge">
                        <span class="atbd_badge atbd_badge_featured">Featured</span>
                    </div>
                </figcaption>
            </figure>

            <div class="atbd_listing_info">
                <div class="atbd_content_upper">
                    <div class="atbd_dashboard_tittle_metas">
                        <h4 class="atbd_listing_title">
                            <a href="">Flanders Heat & Air Systems</a>
                        </h4>
                    </div><!-- ends: .atbd_dashboard_tittle_metas -->
                    <div class="atbd_card_action">
                        <div class="atbd_listing_meta">
                            <span class="atbd_meta atbd_listing_rating">4.5<i class="la la-star"></i></span>
                        </div><!-- ends: .atbd listing meta -->
                        <div class="db_btn_area">
                            <div class="dropup edit_listing">
                                <a href="#" role="button" class="btn btn-sm btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Edit</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href=""><span class="la la-edit color-primary"></span> Edit Your Listing</a>
                                    <a class="dropdown-item" href=""><span class="la la-money color-secondary"></span> Change Your Plan</a>
                                </div>
                            </div>
                            <a href="#" class="directory_remove_btn btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#modal-item-remove">Delete</a>
                        </div> <!--ends .db_btn_area-->
                    </div>
                </div><!-- end .atbd_content_upper -->

                <div class="atbd_listing_bottom_content">
                    <div class="listing-meta">
                        <p><span>Plan Name:</span> Basic Plan</p>
                        <p><span>Expiration:</span> February 13, 2020</p>
                        <p><span>Listing Status:</span> Published</p>
                    </div>
                </div><!-- end .atbd_listing_bottom_content -->
            </div><!-- ends: .atbd_listing_info -->
        </article>
    </div><!-- ends: .atbd_single_listing -->

                        </div><!-- ends: .col-lg-4 -->
                        <div class="col-lg-4 col-sm-6">
                            
    <div class="atbd_single_listing atbd_listing_card">
        <article class="atbd_single_listing_wrapper ">
            <figure class="atbd_listing_thumbnail_area">
                <div class="atbd_listing_image">
                    <a href=""><img src="img/p6.jpg" alt="listing image"></a>
                </div>

                <figcaption class="atbd_thumbnail_overlay_content">
                    <div class="atbd_upper_badge">
                        <span class="atbd_badge atbd_badge_featured">Featured</span>
                    </div>
                </figcaption>
            </figure>

            <div class="atbd_listing_info">
                <div class="atbd_content_upper">
                    <div class="atbd_dashboard_tittle_metas">
                        <h4 class="atbd_listing_title">
                            <a href="">Flanders Heat & Air Systems</a>
                        </h4>
                    </div><!-- ends: .atbd_dashboard_tittle_metas -->
                    <div class="atbd_card_action">
                        <div class="atbd_listing_meta">
                            <span class="atbd_meta atbd_listing_rating">4.5<i class="la la-star"></i></span>
                        </div><!-- ends: .atbd listing meta -->
                        <div class="db_btn_area">
                            <div class="dropup edit_listing">
                                <a href="#" role="button" class="btn btn-sm btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Edit</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href=""><span class="la la-edit color-primary"></span> Edit Your Listing</a>
                                    <a class="dropdown-item" href=""><span class="la la-money color-secondary"></span> Change Your Plan</a>
                                </div>
                            </div>
                            <a href="#" class="directory_remove_btn btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#modal-item-remove">Delete</a>
                        </div> <!--ends .db_btn_area-->
                    </div>
                </div><!-- end .atbd_content_upper -->

                <div class="atbd_listing_bottom_content">
                    <div class="listing-meta">
                        <p><span>Plan Name:</span> Basic Plan</p>
                        <p><span>Expiration:</span> February 13, 2020</p>
                        <p><span>Listing Status:</span> Published</p>
                    </div>
                </div><!-- end .atbd_listing_bottom_content -->
            </div><!-- ends: .atbd_listing_info -->
        </article>
    </div><!-- ends: .atbd_single_listing -->

                        </div><!-- ends: .col-lg-4 -->
                    </div>
                </div>
            </div><!-- ends: .tab-pane -->
            <div class="tab-pane fade p-bottom-30" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 mb-5 mb-lg-0">
                            <div class="user_pro_img_area">
                                <img src="img/author-profile.jpg" alt="">
                                <div class="image-info">
                                    <h6>Profile Image</h6>
                                    <span>JPG or PNG 120x120 px</span>
                                </div>
                                <div class="custom-file-upload">
                                    <input type="file" id="customFile">
                                    <label for="customFile" class="btn btn-sm btn-secondary">Upload New Image</label>
                                </div>
                                <button class="btn btn-sm btn-danger">Delete Image</button>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-8">
                            <div class="atbd_author_module">
                                <div class="atbd_content_module">
                                    <div class="atbd_content_module__tittle_area">
                                        <div class="atbd_area_title">
                                            <h4><span class="la la-user"></span>My Profile</h4>
                                        </div>
                                    </div>
                                    <div class="atbdb_content_module_contents">
                                        <div class="user_info_wrap">
                                            <!--Full name-->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="full_name" class="not_empty">Full Name</label>
                                                        <input class="form-control" type="text" placeholder="Full name" id="full_name">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="user_name" class="not_empty">Username</label>
                                                        <input class="form-control" id="user_name" type="text" disabled="disabled" value="admin">
                                                        <p>(Username can not be changed)</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="first_name" class="not_empty">First Name</label>
                                                        <input class="form-control" id="first_name" type="text" name="user[first_name]" placeholder="First Name">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="last_name" class="not_empty">Last Name</label>
                                                        <input class="form-control" id="last_name" type="text" placeholder="Last Name">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="req_email" class="not_empty">Email (required)</label>
                                                        <input class="form-control" id="req_email" type="text" placeholder="mail@example.com" required="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="phone" class="not_empty">Cell Number</label>
                                                        <input class="form-control" type="tel" placeholder="Phone number" id="phone">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="website" class="not_empty">Website</label>
                                                        <input class="form-control" id="website" type="text" placeholder="Website">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="address" class="not_empty">Address</label>
                                                        <input class="form-control" id="address" type="text" placeholder="Address">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="new_pass" class="not_empty">New Password</label>
                                                        <input id="new_pass" class="form-control" type="password" placeholder="Password">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="confirm_pass" class="not_empty">Confirm New Password</label>
                                                        <input id="confirm_pass" class="form-control" type="password" placeholder="Re-enter Password">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="facebook" class="not_empty">Facebook</label>
                                                        <input id="facebook" class="form-control" type="url" placeholder="Facebook URL">
                                                        <p>Leave it empty to hide</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="twitter" class="not_empty">Twitter</label>
                                                        <input id="twitter" class="form-control" type="url" placeholder="Twitter URL">
                                                        <p>Leave it empty to hide</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="google" class="not_empty">Google+</label>
                                                        <input id="google" class="form-control" type="url" placeholder="Google+ URL">
                                                        <p>Leave it empty to hide</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="linkedIn" class="not_empty">LinkedIn</label>
                                                        <input id="linkedIn" class="form-control" type="url" placeholder="Linkedin URL">
                                                        <p>Leave it empty to hide</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="youtube" class="not_empty">Youtube</label>
                                                        <input id="youtube" class="form-control" type="url" placeholder="Youtube URL">
                                                        <p>Leave it empty to hide</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="bio" class="not_empty">About Author</label>
                                                        <textarea class="wp-editor-area form-control" rows="6" autocomplete="off" id="bio" placeholder="Describe yourself"></textarea>
                                                    </div>
                                                </div>
                                            </div><!--ends social info .row-->
                                            <button type="submit" class="btn btn-primary" id="update_user_profile">Save Changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- ends: .atbd_author_module -->
                        </div>
                    </div>
                </div>
            </div><!-- ends: .tab-pane -->
            <div class="tab-pane fade p-bottom-30" id="favorite" role="tabpanel" aria-labelledby="faborite-listings">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="atbd_saved_items_wrapper">
                                <div class="atbd_content_module">
                                    <div class="atbd_content_module__tittle_area">
                                        <div class="atbd_area_title">
                                            <h4><span class="la la-list"></span>My Fovarite Listings</h4>
                                        </div>
                                    </div>
                                    <div class="atbdb_content_module_contents">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Listing Name</th>
                                                        <th scope="col">Category</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><a href="">Double Broccoli Quinoa</a></td>
                                                        <td><span class="la la-glass"></span> <a href="">Restaurant</a></td>
                                                        <td><a href="" class="remove-favorite"><span class="la la-times"></span></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="">Easy Brazillian Cheese Bread</a></td>
                                                        <td><span class="la la-glass"></span> <a href="">Restaurant</a></td>
                                                        <td><a href="" class="remove-favorite"><span class="la la-times"></span></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="">Hilton Hawaiian Village</a></td>
                                                        <td><span class="la la-bed"></span> <a href="">Hotel</a></td>
                                                        <td><a href="" class="remove-favorite"><span class="la la-times"></span></a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div><!-- ends: .atbdb_content_module_contents -->
                                </div>
                            </div><!--  ends: .atbd_saved_items_wrapper -->
                        </div><!-- ends: .col-lg-12 -->
                    </div>
                </div>
            </div><!-- ends: .tab-pane -->
        </div>

        
    <!-- Modal -->
    <div class="modal fade" id="modal-item-remove" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body text-center p-top-40 p-bottom-50">
                    <span class="la la-exclamation-circle color-warning"></span>
                    <h1 class="display-3 m-bottom-10">Are you sure?</h1>
                    <p class="m-bottom-30">Do you really want to delete this item?</p>
                    <div class="d-flex justify-content-center">
                        <button type="button" class="btn btn-secondary m-right-15" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-danger">Yes, Delete it!</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </section>

    <?php
	  include 'include/footer.php';
	?>

    <div class="modal fade" id="login_modal" tabindex="-1" role="dialog" aria-labelledby="login_modal_label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="login_modal_label"><i class="la la-lock"></i> Sign In</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/" id="login-form">
                        <input type="text" class="form-control" placeholder="Username or Email" required>
                        <input type="password" class="form-control" placeholder="Password" required>
                        <div class="keep_signed custom-control custom-checkbox checkbox-outline checkbox-outline-primary">
                            <input type="checkbox" class="custom-control-input" name="keep_signed_in" value="1" id="keep_signed_in">
                            <label for="keep_signed_in" class="not_empty custom-control-label">Keep me signed in</label>
                        </div>
                        <button type="submit" class="btn btn-block btn-lg btn-gradient btn-gradient-two">Sign In</button>
                    </form>

                    <div class="form-excerpts">
                        <ul class="list-unstyled">
                            <li>Not a member? <a href="">Sign up</a></li>
                            <li><a href="">Recover Password</a></li>
                        </ul>
                        <div class="social-login">
                            <span>Or connect with</span>
                            <p><a href="" class="btn btn-outline-secondary"><i class="fab fa-facebook-f"></i> Facebook</a><a href="" class="btn btn-outline-danger"><i class="fab fa-google-plus-g"></i> Google</a></p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

     
    <div class="modal fade" id="signup_modal" tabindex="-1" role="dialog" aria-labelledby="signup_modal_label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="signup_modal_label"><i class="la la-lock"></i> Sign Up</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/" id="signup-form">
                        <input type="email" class="form-control" placeholder="Email" required>
                        <input type="password" class="form-control" placeholder="Password" required>
                        <button type="submit" class="btn btn-block btn-lg btn-gradient btn-gradient-two">Sign Up</button>
                    </form>

                    <div class="form-excerpts">
                        <ul class="list-unstyled">
                            <li>Already a member? <a href="">Sign In</a></li>
                            <li><a href="">Recover Password</a></li>
                        </ul>
                        <div class="social-login">
                            <span>Or Signup with</span>
                            <p><a href="" class="btn btn-outline-secondary"><i class="fab fa-facebook-f"></i> Facebook</a><a href="" class="btn btn-outline-danger"><i class="fab fa-google-plus-g"></i> Google</a></p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA0C5etf1GVmL_ldVAichWwFFVcDfa1y_c"></script>
     <!-- inject:js-->
     <script src="js/plugins.min.js"></script>
     <script src="js/script.min.js"></script>
     <!-- endinject-->
</body>
</html>