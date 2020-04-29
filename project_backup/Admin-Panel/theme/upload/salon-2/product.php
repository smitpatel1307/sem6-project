<?php
$current="4";
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
<head>
<?php
session_start();
include 'include/connect.php';
$vendor_id=$_SESSION['vendor_id'];
$sql = $link->rawQueryOne('select * from vendor where vendor_id=?',Array($vendor_id));
?>
	<title><?php echo $sql['shop_name']; ?> | Products</title>
	<meta charset="utf-8">
	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<![endif]-->
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animations.css">
	<link rel="stylesheet" href="css/fonts.css">
	<link rel="stylesheet" href="css/main.css" class="color-switcher-link">
	<link rel="stylesheet" href="css/shop.css" class="color-switcher-link">
	<script src="js/modernizr-2.6.2.min.js"></script>

	<!--[if lt IE 9]>
		<script src="js/vendor/html5shiv.min.js"></script>
		<script src="js/vendor/respond.min.js"></script>
		<script src="js/vendor/jquery-1.12.4.min.js"></script>
	<![endif]-->

</head>

<body>
	<!--[if lt IE 9]>
		<div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="highlight">upgrade your browser</a> to improve your experience.</div>
	<![endif]-->

	<div class="preloader">
		<div class="preloader_image"></div>
	</div>

	<!-- search modal -->

	<!-- Unyson messages modal -->
	
	<!-- eof .modal -->

	<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas">
		<div id="box_wrapper">

			<!-- template sections -->

			<?php
			  include 'include/header.php';
			?>
        	<?php
				include 'include/connect.php';
				$vendor_id=$_SESSION['vendor_id'];
				$sql = $link->rawQueryOne('select * from product where vendor_id=? and is_active=?',Array($vendor_id,"1"));
			?>
			<section class="page_breadcrumbs ds background_cover background_overlay section_padding_top_65 section_padding_bottom_65" style="background-image: url('../../../../Vendor-Panel/product/<?php echo $sql['banner_image']; ?>')">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h2 class="highlight">Products</h2>
							<ol class="breadcrumb darklinks">
							</ol>
						</div>
					</div>
				</div>
			</section>

			<section class="ls section_padding_top_100 section_padding_bottom_100 columns_padding_25">
				<div class="container">
					<div class="row">

						<div class="col-sm-12">

                          <h2 align="center">Our Produtcs</h2>
							<div class="columns-3">

								<ul id="products" class="products list-unstyled">
										<?php
											$vendor_id=$_SESSION['vendor_id'];
											$sql = $link->rawQuery('select * from product where vendor_id=? and is_active=?',Array($vendor_id,"1"));
											if($link->count > 0)
											{
												foreach($sql as $s)
												{
													?>
									<li class="product type-product">
										<div class="vertical-item content-padding text-center with_shadow rounded">
											<div class="item-media with_background">
												<img src="../../../../Vendor-Panel/product/<?php echo $s['product_image'] ?>" alt="" />
											</div>
											<div class="item-content">
												<h4 class="hover-color3 bottommargin_10">
													<?php echo $s['title'] ?>
												</h4>
												<h6><?php echo $s['description'] ?></h6>
												<h6><?php echo $s['product_price'] ?></h6>					
											</div>
										</div>
									</li>
					<?php
					}
				}
				?>
								</ul>

							</div>
							<!-- eof .columns-* -->
						</div>

					</div>
				</div>
			</section>

			<?php
			  include 'include/footer.php';
			?>

		</div>
		<!-- eof #box_wrapper -->
	</div>
	<!-- eof #canvas -->

	<script src="js/compressed.js"></script>
	<script src="js/main.js"></script>
	<script src="js/switcher.js"></script>

</body>
</html>