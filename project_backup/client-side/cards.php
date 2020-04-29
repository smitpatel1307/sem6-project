<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from aazztech.com/demos/themes/html/direo/cards.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Apr 2019 04:17:36 GMT -->
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
                                            <form action="http://aazztech.com/">
                                                <div class="input-group input-group-light">
                                                    <input type="text" class="form-control search_field top-search-field" placeholder="What are you looking for?" autocomplete="off">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="search-categories">
                                        <ul class="list-unstyled">
                                            <li><a href="#"><span class="la la-glass bg-danger"></span> Food & Drinks</a></li>
                                            <li><a href="#"><span class="la la-cutlery bg-primary"></span> Restaurants</a></li>
                                            <li><a href="#"><span class="la la-map-marker bg-success"></span> Places</a></li>
                                            <li><a href="#"><span class="la la-shopping-cart bg-secondary"></span> Shopping & Store</a></li>
                                            <li><a href="#"><span class="la la-bed bg-info"></span> Hotels</a></li>
                                            <li><a href="#"><span class="la la-bank bg-warning"></span> Art & History</a></li>
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
                                                <a href="#" class="access-link" data-toggle="modal" data-target="#login_modal">Login</a>
                                <span>or</span>
                                <a href="#" class="access-link" data-toggle="modal" data-target="#signup_modal">Register</a>
                                                
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- end .author-area -->

                                <div class="offcanvas-menu d-none">
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
                        <h1 class="page-title">Post Cards</h1>
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

    <section class="cards-grid section-padding-two border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Product Card Grid</h2>
                        <p>The style of product cards shown as tiles.</p>
                    </div>
                </div>

                <div class="listing-cards-wrapper col-lg-12">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
    <div class="atbd_single_listing ">
        <article class="atbd_single_listing_wrapper">
            <figure class="atbd_listing_thumbnail_area">
                <div class="atbd_listing_image">
                    <a href="#">
                        <img src="img/p1.jpg" alt="listing image">
                    </a>
                </div><!-- ends: .atbd_listing_image -->
                <div class="atbd_author atbd_author--thumb">
                                    <a href="#">
                                        <img src="img/author-thumb2.jpg" alt="Author Image">
                                        <span class="custom-tooltip">Jeffery A, Owner</span>
                                    </a>
                                </div>
                <div class="atbd_thumbnail_overlay_content">
                    <ul class="atbd_upper_badge">
                        <li><span class="atbd_badge atbd_badge_featured">Featured</span></li>
                    </ul><!-- ends .atbd_upper_badge -->
                </div><!-- ends: .atbd_thumbnail_overlay_content -->
            </figure><!-- ends: .atbd_listing_thumbnail_area -->

            <div class="atbd_listing_info">
                <div class="atbd_content_upper">
                    <h4 class="atbd_listing_title">
                        <a href="#">Flanders Heat &amp; Air Systems</a>
                    </h4>
                    
                    <div class="atbd_listing_meta">
                        <span class="atbd_meta atbd_listing_rating">4.5<i class="la la-star"></i></span>
                        
                        <span class="atbd_meta atbd_listing_price">$55.00</span>
                        <span class="atbd_meta atbd_badge_open">Open Now</span>
                        
                    </div><!-- End atbd listing meta -->
                    <div class="atbd_listing_data_list">
                        <ul>
                            <li>
                                <p><span class="la la-map-marker"></span>Los Angeles, United States</p>
                            </li>
                            <li>
                                <p><span class="la la-phone"></span>(415) 796-3633</p>
                            </li>
                            <li>
                                <p><span class="la la-calendar-check-o"></span>Posted 2 months ago</p>
                            </li>
                        </ul>
                    </div><!-- End atbd listing meta -->
                    
                </div><!-- end .atbd_content_upper -->

                <div class="atbd_listing_bottom_content">
                    <div class="atbd_content_left">
                        <div class="atbd_listing_category">
                            <a href="#"><span class="la la-glass"></span>Restaurant</a>
                            
                        </div>
                    </div>
                    <ul class="atbd_content_right">
                        <li class="atbd_count"><span class="la la-eye"></span>900+</li>
                        <li class="atbd_save">
                            <span class="la la-heart-o"></span>
                        </li>
                        
                    </ul>
                </div><!-- end .atbd_listing_bottom_content -->
            </div><!-- ends: .atbd_listing_info -->
        </article><!-- atbd_single_listing_wrapper -->
    </div>

                        </div><!-- ends: .col-lg-4 -->
                        <div class="col-lg-4 col-md-6">
    <div class="atbd_single_listing ">
        <article class="atbd_single_listing_wrapper">
            <figure class="atbd_listing_thumbnail_area">
                <div class="atbd_listing_image">
                    <a href="#">
                        <img src="img/p2.jpg" alt="listing image">
                    </a>
                </div><!-- ends: .atbd_listing_image -->
                <div class="atbd_author atbd_author--thumb">
                                    <a href="#">
                                        <img src="img/author-thumb2.jpg" alt="Author Image">
                                        <span class="custom-tooltip">Jeffery A, Owner</span>
                                    </a>
                                </div>
                <div class="atbd_thumbnail_overlay_content">
                    <ul class="atbd_upper_badge">
                        <li><span class="atbd_badge atbd_badge_popular">Popular</span></li>
                    </ul><!-- ends .atbd_upper_badge -->
                </div><!-- ends: .atbd_thumbnail_overlay_content -->
            </figure><!-- ends: .atbd_listing_thumbnail_area -->

            <div class="atbd_listing_info">
                <div class="atbd_content_upper">
                    <h4 class="atbd_listing_title">
                        <a href="#">Sydney Restaurant Towers</a>
                    </h4>
                    
                    <div class="atbd_listing_meta">
                        <span class="atbd_meta atbd_listing_rating">4.5<i class="la la-star"></i></span>
                        <span class="atbd_meta atbd_listing_average_pricing" data-toggle="tooltip" data-placement="top" title="" data-original-title="Average">
                                <span class="atbd_active"><img src="img/svg/dollar.svg" class="svg" alt="" /></span>
                                <span class="atbd_active"><img src="img/svg/dollar.svg" class="svg" alt="" /></span>
                                <span><img src="img/svg/dollar.svg" class="svg" alt="" /></span>
                                <span><img src="img/svg/dollar.svg" class="svg" alt="" /></span>
                            </span>
                        
                        
                        <span class="atbd_meta atbd_badge_close">Closed</span>
                    </div><!-- End atbd listing meta -->
                    <div class="atbd_listing_data_list">
                        <ul>
                            <li>
                                <p><span class="la la-map-marker"></span>Los Angeles, United States</p>
                            </li>
                            <li>
                                <p><span class="la la-phone"></span>(415) 796-3633</p>
                            </li>
                            <li>
                                <p><span class="la la-calendar-check-o"></span>Posted 2 months ago</p>
                            </li>
                        </ul>
                    </div><!-- End atbd listing meta -->
                    
                </div><!-- end .atbd_content_upper -->

                <div class="atbd_listing_bottom_content">
                    <div class="atbd_content_left">
                        <div class="atbd_listing_category">
                            <a href="#"><span class="la la-map-marker"></span>Places</a>
                            <div class="atbd_cat_popup">
                                <span>+2</span>
                                <div class="atbd_cat_popup_wrapper">
                                   <span><a href="#">Event</a></span>
                                   <span><a href="#">Food</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="atbd_content_right">
                        <li class="atbd_count"><span class="la la-eye"></span>900+</li>
                        <li class="atbd_save">
                            <span class="la la-heart-o"></span>
                        </li>
                        
                    </ul>
                </div><!-- end .atbd_listing_bottom_content -->
            </div><!-- ends: .atbd_listing_info -->
        </article><!-- atbd_single_listing_wrapper -->
    </div>

                        </div><!-- ends: .col-lg-4 -->
                        <div class="col-lg-4 col-md-6">
    <div class="atbd_single_listing ">
        <article class="atbd_single_listing_wrapper">
            <figure class="atbd_listing_thumbnail_area">
                <div class="atbd_listing_image">
                    <a href="#">
                        <img src="img/p3.jpg" alt="listing image">
                    </a>
                </div><!-- ends: .atbd_listing_image -->
                <div class="atbd_author atbd_author--thumb">
                                    <a href="#">
                                        <img src="img/author-thumb2.jpg" alt="Author Image">
                                        <span class="custom-tooltip">Jeffery A, Owner</span>
                                    </a>
                                </div>
                <div class="atbd_thumbnail_overlay_content">
                    <ul class="atbd_upper_badge">
                        <li><span class="atbd_badge atbd_badge_new">New</span></li>
                    </ul><!-- ends .atbd_upper_badge -->
                </div><!-- ends: .atbd_thumbnail_overlay_content -->
            </figure><!-- ends: .atbd_listing_thumbnail_area -->

            <div class="atbd_listing_info">
                <div class="atbd_content_upper">
                    <h4 class="atbd_listing_title">
                        <a href="#">Kung Food &amp; Drinks</a>
                    </h4>
                    
                    <div class="atbd_listing_meta">
                        <span class="atbd_meta atbd_listing_rating">4.5<i class="la la-star"></i></span>
                        <span class="atbd_meta atbd_listing_average_pricing" data-toggle="tooltip" data-placement="top" title="" data-original-title="Average">
                                <span class="atbd_active"><img src="img/svg/dollar.svg" class="svg" alt="" /></span>
                                <span class="atbd_active"><img src="img/svg/dollar.svg" class="svg" alt="" /></span>
                                <span><img src="img/svg/dollar.svg" class="svg" alt="" /></span>
                                <span><img src="img/svg/dollar.svg" class="svg" alt="" /></span>
                            </span>
                        
                        
                        <span class="atbd_meta atbd_badge_close">Closed</span>
                    </div><!-- End atbd listing meta -->
                    <div class="atbd_listing_data_list">
                        <ul>
                            <li>
                                <p><span class="la la-map-marker"></span>Los Angeles, United States</p>
                            </li>
                            <li>
                                <p><span class="la la-phone"></span>(415) 796-3633</p>
                            </li>
                            <li>
                                <p><span class="la la-calendar-check-o"></span>Posted 2 months ago</p>
                            </li>
                        </ul>
                    </div><!-- End atbd listing meta -->
                    
                </div><!-- end .atbd_content_upper -->

                <div class="atbd_listing_bottom_content">
                    <div class="atbd_content_left">
                        <div class="atbd_listing_category">
                            <a href="#"><span class="la la-shopping-cart"></span>Shopping</a>
                            
                        </div>
                    </div>
                    <ul class="atbd_content_right">
                        <li class="atbd_count"><span class="la la-eye"></span>900+</li>
                        <li class="atbd_save">
                            <span class="la la-heart-o"></span>
                        </li>
                        
                    </ul>
                </div><!-- end .atbd_listing_bottom_content -->
            </div><!-- ends: .atbd_listing_info -->
        </article><!-- atbd_single_listing_wrapper -->
    </div>

                        </div><!-- ends: .col-lg-4 -->
                        <div class="col-lg-4 col-md-6">
    <div class="atbd_single_listing ">
        <article class="atbd_single_listing_wrapper">
            <figure class="atbd_listing_thumbnail_area">
                <div class="atbd_listing_image">
                    <a href="#">
                        <img src="img/p4.jpg" alt="listing image">
                    </a>
                </div><!-- ends: .atbd_listing_image -->
                <div class="atbd_author atbd_author--thumb">
                                    <a href="#">
                                        <img src="img/author-thumb2.jpg" alt="Author Image">
                                        <span class="custom-tooltip">Jeffery A, Owner</span>
                                    </a>
                                </div>
                <div class="atbd_thumbnail_overlay_content">
                    <ul class="atbd_upper_badge">
                        <li><span class="atbd_badge atbd_badge_featured">Featured</span></li>
                        <li><span class="atbd_badge atbd_badge_popular">Popular</span></li>
                    </ul><!-- ends .atbd_upper_badge -->
                </div><!-- ends: .atbd_thumbnail_overlay_content -->
            </figure><!-- ends: .atbd_listing_thumbnail_area -->

            <div class="atbd_listing_info">
                <div class="atbd_content_upper">
                    <h4 class="atbd_listing_title">
                        <a href="#">Favorite Place Fog Bank</a>
                    </h4>
                    
                    <div class="atbd_listing_meta">
                        <span class="atbd_meta atbd_listing_rating">4.5<i class="la la-star"></i></span>
                        <span class="atbd_meta atbd_listing_average_pricing" data-toggle="tooltip" data-placement="top" title="" data-original-title="Average">
                                <span class="atbd_active"><img src="img/svg/dollar.svg" class="svg" alt="" /></span>
                                <span class="atbd_active"><img src="img/svg/dollar.svg" class="svg" alt="" /></span>
                                <span><img src="img/svg/dollar.svg" class="svg" alt="" /></span>
                                <span><img src="img/svg/dollar.svg" class="svg" alt="" /></span>
                            </span>
                        
                        <span class="atbd_meta atbd_badge_open">Open Now</span>
                        
                    </div><!-- End atbd listing meta -->
                    <div class="atbd_listing_data_list">
                        <ul>
                            <li>
                                <p><span class="la la-map-marker"></span>Los Angeles, United States</p>
                            </li>
                            <li>
                                <p><span class="la la-phone"></span>(415) 796-3633</p>
                            </li>
                            <li>
                                <p><span class="la la-calendar-check-o"></span>Posted 2 months ago</p>
                            </li>
                        </ul>
                    </div><!-- End atbd listing meta -->
                    
                </div><!-- end .atbd_content_upper -->

                <div class="atbd_listing_bottom_content">
                    <div class="atbd_content_left">
                        <div class="atbd_listing_category">
                            <a href="#"><span class="la la-bank"></span>Art &amp; History</a>
                            
                        </div>
                    </div>
                    <ul class="atbd_content_right">
                        <li class="atbd_count"><span class="la la-eye"></span>900+</li>
                        <li class="atbd_save">
                            <span class="la la-heart-o"></span>
                        </li>
                        
                    </ul>
                </div><!-- end .atbd_listing_bottom_content -->
            </div><!-- ends: .atbd_listing_info -->
        </article><!-- atbd_single_listing_wrapper -->
    </div>

                        </div><!-- ends: .col-lg-4 -->
                        <div class="col-lg-4 col-md-6">
    <div class="atbd_single_listing ">
        <article class="atbd_single_listing_wrapper">
            <figure class="atbd_listing_thumbnail_area">
                <div class="atbd_listing_image">
                    <a href="#">
                        <img src="img/p5.jpg" alt="listing image">
                    </a>
                </div><!-- ends: .atbd_listing_image -->
                <div class="atbd_author atbd_author--thumb">
                                    <a href="#">
                                        <img src="img/author-thumb2.jpg" alt="Author Image">
                                        <span class="custom-tooltip">Jeffery A, Owner</span>
                                    </a>
                                </div>
                <div class="atbd_thumbnail_overlay_content">
                    <ul class="atbd_upper_badge">
                        
                    </ul><!-- ends .atbd_upper_badge -->
                </div><!-- ends: .atbd_thumbnail_overlay_content -->
            </figure><!-- ends: .atbd_listing_thumbnail_area -->

            <div class="atbd_listing_info">
                <div class="atbd_content_upper">
                    <h4 class="atbd_listing_title">
                        <a href="#">Flanders Heat &amp; Air Systems</a>
                    </h4>
                    
                    <div class="atbd_listing_meta">
                        <span class="atbd_meta atbd_listing_rating">4.5<i class="la la-star"></i></span>
                        
                        <span class="atbd_meta atbd_listing_price">$55.00</span>
                        
                        <span class="atbd_meta atbd_badge_close">Closed</span>
                    </div><!-- End atbd listing meta -->
                    <div class="atbd_listing_data_list">
                        <ul>
                            <li>
                                <p><span class="la la-map-marker"></span>Los Angeles, United States</p>
                            </li>
                            <li>
                                <p><span class="la la-phone"></span>(415) 796-3633</p>
                            </li>
                            <li>
                                <p><span class="la la-calendar-check-o"></span>Posted 2 months ago</p>
                            </li>
                        </ul>
                    </div><!-- End atbd listing meta -->
                    
                </div><!-- end .atbd_content_upper -->

                <div class="atbd_listing_bottom_content">
                    <div class="atbd_content_left">
                        <div class="atbd_listing_category">
                            <a href="#"><span class="la la-bed"></span>Hotel &amp; Travel</a>
                            
                        </div>
                    </div>
                    <ul class="atbd_content_right">
                        <li class="atbd_count"><span class="la la-eye"></span>900+</li>
                        <li class="atbd_save">
                            <span class="la la-heart-o"></span>
                        </li>
                        
                    </ul>
                </div><!-- end .atbd_listing_bottom_content -->
            </div><!-- ends: .atbd_listing_info -->
        </article><!-- atbd_single_listing_wrapper -->
    </div>

                        </div><!-- ends: .col-lg-4 -->
                        <div class="col-lg-4 col-md-6">
    <div class="atbd_single_listing ">
        <article class="atbd_single_listing_wrapper">
            <figure class="atbd_listing_thumbnail_area">
                <div class="atbd_listing_image">
                    <a href="#">
                        <img src="img/p6.jpg" alt="listing image">
                    </a>
                </div><!-- ends: .atbd_listing_image -->
                <div class="atbd_author atbd_author--thumb">
                                    <a href="#">
                                        <img src="img/author-thumb2.jpg" alt="Author Image">
                                        <span class="custom-tooltip">Jeffery A, Owner</span>
                                    </a>
                                </div>
                <div class="atbd_thumbnail_overlay_content">
                    <ul class="atbd_upper_badge">
                        
                    </ul><!-- ends .atbd_upper_badge -->
                </div><!-- ends: .atbd_thumbnail_overlay_content -->
            </figure><!-- ends: .atbd_listing_thumbnail_area -->

            <div class="atbd_listing_info">
                <div class="atbd_content_upper">
                    <h4 class="atbd_listing_title">
                        <a href="#">Store Clothing Shopping Mall</a>
                    </h4>
                    
                    <div class="atbd_listing_meta">
                        <span class="atbd_meta atbd_listing_rating">4.5<i class="la la-star"></i></span>
                        <span class="atbd_meta atbd_listing_average_pricing" data-toggle="tooltip" data-placement="top" title="" data-original-title="Average">
                                <span class="atbd_active"><img src="img/svg/dollar.svg" class="svg" alt="" /></span>
                                <span class="atbd_active"><img src="img/svg/dollar.svg" class="svg" alt="" /></span>
                                <span><img src="img/svg/dollar.svg" class="svg" alt="" /></span>
                                <span><img src="img/svg/dollar.svg" class="svg" alt="" /></span>
                            </span>
                        
                        <span class="atbd_meta atbd_badge_open">Open Now</span>
                        
                    </div><!-- End atbd listing meta -->
                    <div class="atbd_listing_data_list">
                        <ul>
                            <li>
                                <p><span class="la la-map-marker"></span>Los Angeles, United States</p>
                            </li>
                            <li>
                                <p><span class="la la-phone"></span>(415) 796-3633</p>
                            </li>
                            <li>
                                <p><span class="la la-calendar-check-o"></span>Posted 2 months ago</p>
                            </li>
                        </ul>
                    </div><!-- End atbd listing meta -->
                    
                </div><!-- end .atbd_content_upper -->

                <div class="atbd_listing_bottom_content">
                    <div class="atbd_content_left">
                        <div class="atbd_listing_category">
                            <a href="#"><span class="la la-cutlery"></span>Food &amp; Drink</a>
                            <div class="atbd_cat_popup">
                                <span>+2</span>
                                <div class="atbd_cat_popup_wrapper">
                                   <span><a href="#">Event</a></span>
                                   <span><a href="#">Food</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="atbd_content_right">
                        <li class="atbd_count"><span class="la la-eye"></span>900+</li>
                        <li class="atbd_save">
                            <span class="la la-heart-o"></span>
                        </li>
                        
                    </ul>
                </div><!-- end .atbd_listing_bottom_content -->
            </div><!-- ends: .atbd_listing_info -->
        </article><!-- atbd_single_listing_wrapper -->
    </div>

                        </div><!-- ends: .col-lg-4 -->
                    </div>
                </div><!-- ends: .listing-cards-wrapper -->
            </div>
        </div>
    </section><!-- ends: .cards-grid -->

    <section class="card-list section-padding-two border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Product Card List</h2>
                        <p>The style of product cards shown as list.</p>
                    </div>
                </div>

                <div class="listing-cards-wrapper col-lg-12">
                    <div class="row">
                        <div class="col-lg-12">

    <div class="atbd_single_listing atbd_listing_list">
        <article class="atbd_single_listing_wrapper">
            <figure class="atbd_listing_thumbnail_area">
                <div class="atbd_listing_image">
                    <a href="#">
                        <img src="img/p1.jpg" alt="listing image">
                    </a>
                </div><!-- ends: .atbd_listing_image -->
                
                <div class="atbd_thumbnail_overlay_content">
                    <ul class="atbd_upper_badge">
                        <li><span class="atbd_badge atbd_badge_featured">Featured</span></li>
                    </ul><!-- ends .atbd_upper_badge -->
                </div><!-- ends: .atbd_thumbnail_overlay_content -->
            </figure><!-- ends: .atbd_listing_thumbnail_area -->

            <div class="atbd_listing_info">
                <div class="atbd_content_upper">
                    <h4 class="atbd_listing_title">
                        <a href="#">Flanders Heat &amp; Air Systems</a>
                    </h4>
                    
                    <div class="atbd_listing_meta">
                        <span class="atbd_meta atbd_listing_rating">4.5<i class="la la-star"></i></span>
                        
                        <span class="atbd_meta atbd_listing_price">$55.00</span>
                        <span class="atbd_meta atbd_badge_open">Open Now</span>
                        
                    </div><!-- End atbd listing meta -->
                    <div class="atbd_listing_data_list">
                        <ul>
                            <li>
                                <p><span class="la la-map-marker"></span>Los Angeles, United States</p>
                            </li>
                            <li>
                                <p><span class="la la-phone"></span>(415) 796-3633</p>
                            </li>
                            <li>
                                <p><span class="la la-calendar-check-o"></span>Posted 2 months ago</p>
                            </li>
                        </ul>
                    </div><!-- End atbd listing meta -->
                    
                </div><!-- end .atbd_content_upper -->

                <div class="atbd_listing_bottom_content">
                    <div class="atbd_content_left">
                        <div class="atbd_listing_category">
                            <a href="#"><span class="la la-glass"></span>Restaurant</a>
                            
                        </div>
                    </div>
                    <ul class="atbd_content_right">
                        <li class="atbd_count"><span class="la la-eye"></span>900+</li>
                        <li class="atbd_save">
                            <span class="la la-heart-o"></span>
                        </li>
                        <li><div class="atbd_author atbd_author--thumb">
                                <a href="#">
                                    <img src="img/author-thumb2.jpg" alt="Author Image">
                                    <span class="custom-tooltip">Jeffery A, Owner</span>
                                </a>
                            </div></li>
                    </ul>
                </div><!-- end .atbd_listing_bottom_content -->
            </div><!-- ends: .atbd_listing_info -->
        </article><!-- atbd_single_listing_wrapper -->
    </div>

                        </div><!-- ends: .col-lg-12 -->
                        <div class="col-lg-12">

    <div class="atbd_single_listing atbd_listing_list">
        <article class="atbd_single_listing_wrapper">
            <figure class="atbd_listing_thumbnail_area">
                <div class="atbd_listing_image">
                    <a href="#">
                        <img src="img/p2.jpg" alt="listing image">
                    </a>
                </div><!-- ends: .atbd_listing_image -->
                
                <div class="atbd_thumbnail_overlay_content">
                    <ul class="atbd_upper_badge">
                        <li><span class="atbd_badge atbd_badge_popular">Popular</span></li>
                    </ul><!-- ends .atbd_upper_badge -->
                </div><!-- ends: .atbd_thumbnail_overlay_content -->
            </figure><!-- ends: .atbd_listing_thumbnail_area -->

            <div class="atbd_listing_info">
                <div class="atbd_content_upper">
                    <h4 class="atbd_listing_title">
                        <a href="#">Sydney Restaurant Towers</a>
                    </h4>
                    
                    <div class="atbd_listing_meta">
                        <span class="atbd_meta atbd_listing_rating">4.5<i class="la la-star"></i></span>
                        <span class="atbd_meta atbd_listing_average_pricing" data-toggle="tooltip" data-placement="top" title="" data-original-title="Average">
                                <span class="atbd_active"><img src="img/svg/dollar.svg" class="svg" alt="" /></span>
                                <span class="atbd_active"><img src="img/svg/dollar.svg" class="svg" alt="" /></span>
                                <span><img src="img/svg/dollar.svg" class="svg" alt="" /></span>
                                <span><img src="img/svg/dollar.svg" class="svg" alt="" /></span>
                            </span>
                        
                        
                        <span class="atbd_meta atbd_badge_close">Closed</span>
                    </div><!-- End atbd listing meta -->
                    <div class="atbd_listing_data_list">
                        <ul>
                            <li>
                                <p><span class="la la-map-marker"></span>Los Angeles, United States</p>
                            </li>
                            <li>
                                <p><span class="la la-phone"></span>(415) 796-3633</p>
                            </li>
                            <li>
                                <p><span class="la la-calendar-check-o"></span>Posted 2 months ago</p>
                            </li>
                        </ul>
                    </div><!-- End atbd listing meta -->
                    
                </div><!-- end .atbd_content_upper -->

                <div class="atbd_listing_bottom_content">
                    <div class="atbd_content_left">
                        <div class="atbd_listing_category">
                            <a href="#"><span class="la la-map-marker"></span>Places</a>
                            <div class="atbd_cat_popup">
                                <span>+2</span>
                                <div class="atbd_cat_popup_wrapper">
                                   <span><a href="#">Event</a></span>
                                   <span><a href="#">Food</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="atbd_content_right">
                        <li class="atbd_count"><span class="la la-eye"></span>900+</li>
                        <li class="atbd_save">
                            <span class="la la-heart-o"></span>
                        </li>
                        <li><div class="atbd_author atbd_author--thumb">
                                <a href="#">
                                    <img src="img/author-thumb2.jpg" alt="Author Image">
                                    <span class="custom-tooltip">Jeffery A, Owner</span>
                                </a>
                            </div></li>
                    </ul>
                </div><!-- end .atbd_listing_bottom_content -->
            </div><!-- ends: .atbd_listing_info -->
        </article><!-- atbd_single_listing_wrapper -->
    </div>

                        </div><!-- ends: .col-lg-12 -->
                        <div class="col-lg-12">
    <div class="atbd_single_listing atbd_listing_list">
        <article class="atbd_single_listing_wrapper">
            <figure class="atbd_listing_thumbnail_area">
                <div class="atbd_listing_image">
                    <a href="#">
                        <img src="img/p4.jpg" alt="listing image">
                    </a>
                </div><!-- ends: .atbd_listing_image -->
                
                <div class="atbd_thumbnail_overlay_content">
                    <ul class="atbd_upper_badge">
                        <li><span class="atbd_badge atbd_badge_new">New</span></li>
                    </ul><!-- ends .atbd_upper_badge -->
                </div><!-- ends: .atbd_thumbnail_overlay_content -->
            </figure><!-- ends: .atbd_listing_thumbnail_area -->

            <div class="atbd_listing_info">
                <div class="atbd_content_upper">
                    <h4 class="atbd_listing_title">
                        <a href="#">Kung Food &amp; Drinks</a>
                    </h4>
                    
                    <div class="atbd_listing_meta">
                        <span class="atbd_meta atbd_listing_rating">4.5<i class="la la-star"></i></span>
                        <span class="atbd_meta atbd_listing_average_pricing" data-toggle="tooltip" data-placement="top" title="" data-original-title="Average">
                                <span class="atbd_active"><img src="img/svg/dollar.svg" class="svg" alt="" /></span>
                                <span class="atbd_active"><img src="img/svg/dollar.svg" class="svg" alt="" /></span>
                                <span><img src="img/svg/dollar.svg" class="svg" alt="" /></span>
                                <span><img src="img/svg/dollar.svg" class="svg" alt="" /></span>
                            </span>
                        
                        
                        <span class="atbd_meta atbd_badge_close">Closed</span>
                    </div><!-- End atbd listing meta -->
                    <div class="atbd_listing_data_list">
                        <ul>
                            <li>
                                <p><span class="la la-map-marker"></span>Los Angeles, United States</p>
                            </li>
                            <li>
                                <p><span class="la la-phone"></span>(415) 796-3633</p>
                            </li>
                            <li>
                                <p><span class="la la-calendar-check-o"></span>Posted 2 months ago</p>
                            </li>
                        </ul>
                    </div><!-- End atbd listing meta -->
                    
                </div><!-- end .atbd_content_upper -->

                <div class="atbd_listing_bottom_content">
                    <div class="atbd_content_left">
                        <div class="atbd_listing_category">
                            <a href="#"><span class="la la-shopping-cart"></span>Shopping</a>
                            
                        </div>
                    </div>
                    <ul class="atbd_content_right">
                        <li class="atbd_count"><span class="la la-eye"></span>900+</li>
                        <li class="atbd_save">
                            <span class="la la-heart-o"></span>
                        </li>
                        <li><div class="atbd_author atbd_author--thumb">
                                <a href="#">
                                    <img src="img/author-thumb2.jpg" alt="Author Image">
                                    <span class="custom-tooltip">Jeffery A, Owner</span>
                                </a>
                            </div></li>
                    </ul>
                </div><!-- end .atbd_listing_bottom_content -->
            </div><!-- ends: .atbd_listing_info -->
        </article><!-- atbd_single_listing_wrapper -->
    </div>

                        </div><!-- ends: .col-lg-12 -->
                    </div>
                </div><!-- ends: .listing-cards-wrapper -->
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
                    <form action="http://aazztech.com/" id="login-form">
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
                            <li>Not a member? <a href="#">Sign up</a></li>
                            <li><a href="#">Recover Password</a></li>
                        </ul>
                        <div class="social-login">
                            <span>Or connect with</span>
                            <p><a href="#" class="btn btn-outline-secondary"><i class="fab fa-facebook-f"></i> Facebook</a><a href="#" class="btn btn-outline-danger"><i class="fab fa-google-plus-g"></i> Google</a></p>
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
                    <form action="http://aazztech.com/" id="signup-form">
                        <input type="email" class="form-control" placeholder="Email" required>
                        <input type="password" class="form-control" placeholder="Password" required>
                        <button type="submit" class="btn btn-block btn-lg btn-gradient btn-gradient-two">Sign Up</button>
                    </form>

                    <div class="form-excerpts">
                        <ul class="list-unstyled">
                            <li>Already a member? <a href="#">Sign In</a></li>
                            <li><a href="#">Recover Password</a></li>
                        </ul>
                        <div class="social-login">
                            <span>Or Signup with</span>
                            <p><a href="#" class="btn btn-outline-secondary"><i class="fab fa-facebook-f"></i> Facebook</a><a href="#" class="btn btn-outline-danger"><i class="fab fa-google-plus-g"></i> Google</a></p>
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

<!-- Mirrored from aazztech.com/demos/themes/html/direo/cards.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Apr 2019 04:17:36 GMT -->
</html>