<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>QuickSearch|Admin|Shop Report</title>
  <!-- plugins:css -->
  <link rel="stylesheet" type="text/css" href="../css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="../css/vendor.bundle.base.css">
  <link rel="stylesheet" type="text/css" href="../css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" type="text/css" href="../images/favicon.png" />
  <style>
body { background-color: #30303d; color: #fff; }
#chartdiv {
  width: 100%;
  height: 500px;
}

</style>
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <?php
	session_start();
		include '../include/header.php';
	?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <?php
			include '../include/sidebar.php';
	  ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          
          <div class="row">
            
            <div id="chartdiv"></div>
            
            
          </div>
         
          
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <?php
				include '../include/footer.php';
		?>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="../js/vendor.bundle.base.js"></script>
  <script src="../js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="../js/off-canvas.js"></script>
  <script src="../js/hoverable-collapse.js"></script>
  <script src="../js/template.js"></script>
  <script src="../js/settings.js"></script>
  <script src="../js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../js/dashboard.js"></script>
  <!-- End custom js for this page-->
  <script src="https://www.amcharts.com/lib/4/core.js"></script>
<script src="https://www.amcharts.com/lib/4/charts.js"></script>
<script src="https://www.amcharts.com/lib/4/themes/dark.js"></script>
<script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>

<script>
am4core.ready(function() {

// Themes begin
am4core.useTheme(am4themes_dark);
am4core.useTheme(am4themes_animated);
// Themes end

var chart = am4core.create("chartdiv", am4charts.PieChart3D);
chart.hiddenState.properties.opacity = 0; // this creates initial fade-in

chart.legend = new am4charts.Legend();

chart.data = [
  <?php
    include '../include/connect.php';
	$sql=$link->rawQuery('SELECT type_name,COUNT(t.type_id) as cnt FROM type t,vendor v WHERE t.type_id = v.type_id and approve=? GROUP BY t.type_id',Array("2"));
	if($link->count > 0)
	{
		foreach($sql as $s)
		{
			?>
			{
			  Type: "<?php echo $s['type_name']; ?>",
			  shops: <?php echo $s['cnt']; ?>
		    },
			<?php
		}
	}
?>
];

var series = chart.series.push(new am4charts.PieSeries3D());
series.dataFields.value = "shops";
series.dataFields.category = "Type";

}); // end am4core.ready()
</script>


</body>
</html>


