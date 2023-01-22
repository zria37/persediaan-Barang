<?php 
$this->db->select('name,stock');
$dataproductchart = $this->db->get("p_item")->result();
foreach ($dataproductchart as $key => $value) {
  $arrprod[]=['label'=>$value->name,'y' => $value->stock];
}
// print_r(json_encode($arrprod, JSON_NUMERIC_CHECK));die();
?>

<section class="content-header">
      <h1> Dashboard
        <small>control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Dashboard</li>
      </ol>
</section>

<!-- Main content -->
<section class="content">
<div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-shopping-cart"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Items</span>
              <span class="info-box-number"><?=$this->fungsi->count_item()?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-truck"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Suppliers</span>
              <span class="info-box-number"><?=$this->fungsi->count_supplier()?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-users"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Customers</span>
              <span class="info-box-number"><?=$this->fungsi->count_customer()?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-user-plus"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Users</span>
              <span class="info-box-number"><?=$this->fungsi->count_user()?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
          <div class="col-lg-12">
          <div id="data_barang"></div>

          </div>
      </div>


      <script type="text/javascript">
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	theme: "light1", // "light2", "dark1", "dark2"
	animationEnabled: false, // change to true		
	title:{
		text: "Data Nama Dan Stock Barang"
	},
	data: [
	{
		// Change type to "bar", "area", "spline", "pie",etc.
		type: "column",
		// dataPoints: [
		// 	{ label: "apple",  y: 10  },
		// 	{ label: "orange", y: 15  },
		// 	{ label: "banana", y: 25  },
		// 	{ label: "mango",  y: 30  },
		// 	{ label: "grape",  y: 28  }
		// ]
    dataPoints: 
      <?=json_encode($arrprod, JSON_NUMERIC_CHECK);?>
    


	}
	]
});
chart.render();

}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"> </script>



</section>