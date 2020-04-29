
<html lang="en">

<!-- Mirrored from aazztech.com/demos/themes/html/direo/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Apr 2019 04:18:07 GMT -->
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
                        <h1 class="page-title">Checkout</h1>
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


    <section class="checkout-wrapper section-padding-strict section-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="checkout-form">
                        <form action="http://aazztech.com/">
                            <div class="checkout-table table-responsive">
                                <table id="directorist-checkout-table" class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th colspan="2">Details</th>
                                        <th><strong>Price</strong></th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    <tr>
                                        <td>
                                            <div class="custom-control custom-checkbox checkbox-outline checkbox-outline-primary custom-control-inline">
                                                <input type="checkbox" class="custom-control-input" id="select_one"
                                                       value="one" checked="">
                                                <label class="custom-control-label" for="select_one"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <h4>Basic Plan</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo,
                                                labore.</p>
                                        </td>
                                        <td>
                                            $45.00
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="custom-control custom-checkbox checkbox-outline checkbox-outline-primary custom-control-inline">
                                                <input type="checkbox" class="custom-control-input" id="select_two"
                                                       value="one" checked="">
                                                <label class="custom-control-label" for="select_two"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <h4>Plan example two</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo,
                                                labore.</p>
                                        </td>
                                        <td>
                                            $105.00
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="text-right vertical-middle">
                                            <strong>Total amount</strong>
                                        </td>
                                        <td class="vertical-middle">
                                            <div id="atbdp_checkout_total_amount">$150.00</div>
                                            <!--total amount will be populated by JS-->
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div><!-- ends: .checkout-table -->
                            <div class="atbd_content_module" id="directorist_payment_gateways">
                                <div class="atbd_content_module__tittle_area">
                                    <div class="atbd_area_title">
                                        <h4>Choose a payment method</h4>
                                    </div>
                                </div>

                                <div class="atbdb_content_module_contents">
                                    <ul class="list-unstyled">
                                        <li>
                                            <div class="gateway_list">
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" id="bank_transfer" name="payment_gateway" class="custom-control-input">
                                                    <label class="custom-control-label" for="bank_transfer">Bank Transfer</label>
                                                </div>
                                            </div>
                                            <p class="text-muted">You can make your payment directly to our bank account
                                                using this gateway. Please use your <strong>ORDER ID</strong> as a reference when making
                                                the payment. We will complete your order as soon as your deposit is
                                                cleared in our bank.</p>
                                        </li>
                                        <li>
                                            <div class="gateway_list">
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" id="paypal_gateway" name="payment_gateway" class="custom-control-input">
                                                    <label class="custom-control-label" for="paypal_gateway">Paypal</label>
                                                </div>
                                            </div>
                                            <p class="text-muted">You can make payment using paypal if you choose this
                                                payment gateway.</p>
                                        </li>
                                        <li>
                                            <div class="gateway_list">
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" id="stripe_gateway" name="payment_gateway" class="custom-control-input">
                                                    <label class="custom-control-label" for="stripe_gateway">Stripe</label>
                                                </div>
                                            </div>
                                            <p class="text-muted">You can make payment using your credit card using
                                                stripe if you choose this payment gateway.</p>
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- ends: .atbd_content_module -->
                            <div class="text-right">
                                <a href="#" class="btn btn-outline-danger m-right-10">Not Now</a><input type="submit" id="atbdp_checkout_submit_btn" class="btn btn-secondary" value="Pay Now">
                            </div>
                        </form>
                    </div><!-- ends: .checkout-form -->
                </div><!-- ends: .col-lg-12 -->
            </div>
        </div>
    </section><!-- ends: .checkout-wrapper -->

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

<!-- Mirrored from aazztech.com/demos/themes/html/direo/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Apr 2019 04:18:07 GMT -->
</html>