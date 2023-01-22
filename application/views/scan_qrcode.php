<!DOCTYPE html>
<html>
  <head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Scan QR Code</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  </head>
  <body class="hold-transition skin-red sidebar-mini <?=$this->uri->segment(1) == 'sale' ?  'sidebar-collapse': null ?>">
<div class="wrapper">
  <header class="main-header">
    <a href="<?php echo base_url('dashboard')?>" class="logo">
      <span class="logo-mini"><b>M</b>P</span>
      <span class="logo-lg"><b>Welcome</b></span>
    </a>
    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">3</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 3 tasks</li>
              <li>
                <ul class="menu">
                  <li>
                    <a href="#">
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url()?>assets/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              
            </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <img src="<?php echo base_url()?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
              
              </li>
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo site_url('auth/logout')?>" class="btn btn-flat bg-red">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
    <main class="container">
      <div id="QR-Code">
        <div class="panel panel-info">
          <div class="panel-heading">
            <div class="navbar-form">
              <select class="form-control" id="camera-select"></select>
              <div class="form-group">
                <input id="image-url" type="text" class="form-control" placeholder="Image url">
                <button title="Decode Image" class="btn btn-default btn-sm" id="decode-img" type="button" data-toggle="tooltip"><span class="glyphicon glyphicon-upload"></span></button>
                <button title="Image shoot" class="btn btn-info btn-sm disabled" id="grab-img" type="button" data-toggle="tooltip"><span class="glyphicon glyphicon-picture"></span></button>
                <button title="Play" class="btn btn-success btn-sm" id="play" type="button" data-toggle="tooltip"><span class="glyphicon glyphicon-play"></span></button>
                <button title="Pause" class="btn btn-warning btn-sm" id="pause" type="button" data-toggle="tooltip"><span class="glyphicon glyphicon-pause"></span></button>
                <button title="Stop streams" class="btn btn-danger btn-sm" id="stop" type="button" data-toggle="tooltip"><span class="glyphicon glyphicon-stop"></span></button>
              </div>
            </div>
          </div>
          <div class="row panel-body text-center">
            <div class="col-md-6">
              <div class="well" style="position: relative;display: inline-block;">
                <canvas width="320" height="240" id="webcodecam-canvas"></canvas>
                <div class="scanner-laser laser-rightBottom" style="opacity: 0.5;"></div>
                <div class="scanner-laser laser-rightTop" style="opacity: 0.5;"></div>
                <div class="scanner-laser laser-leftBottom" style="opacity: 0.5;"></div>
                <div class="scanner-laser laser-leftTop" style="opacity: 0.5;"></div>
              </div>
              <div class="well" style="width: 100%;">
                <label id="zoom-value" width="100">Zoom: 2</label>
                <input id="zoom" onchange="Page.changeZoom();" type="range" min="10" max="30" value="20">
                <label id="brightness-value" width="100">Brightness: 0</label>
                <input id="brightness" onchange="Page.changeBrightness();" type="range" min="0" max="128" value="0">
                <label id="contrast-value" width="100">Contrast: 0</label>
                <input id="contrast" onchange="Page.changeContrast();" type="range" min="0" max="64" value="0">
                <label id="threshold-value" width="100">Threshold: 0</label>
                <input id="threshold" onchange="Page.changeThreshold();" type="range" min="0" max="512" value="0">
                <label id="sharpness-value" width="100">Sharpness: off</label>
                <input id="sharpness" onchange="Page.changeSharpness();" type="checkbox">
                <label id="grayscale-value" width="100">grayscale: off</label>
                <input id="grayscale" onchange="Page.changeGrayscale();" type="checkbox">
                <br>
                <label id="flipVertical-value" width="100">Flip Vertical: off</label>
                <input id="flipVertical" onchange="Page.changeVertical();" type="checkbox">
                <label id="flipHorizontal-value" width="100">Flip Horizontal: off</label>
                <input id="flipHorizontal" onchange="Page.changeHorizontal();" type="checkbox">
              </div>
            </div>
            <div class="col-md-6">
              <div class="thumbnail" id="result">
                <div class="well" style="overflow: hidden;">
                  <img width="320" height="240" id="scanned-img" src="">
                </div>
                <div class="caption">
                  <h3>Scanned result</h3>
                  <p id="scanned-QR" style="white-space:wrap; word-wrap:break-word;"></p>
                  <ul></ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <script type="text/javascript" src="<?php echo base_url()?>assets/bower_components/webcodecamjs/js/filereader.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/bower_components/webcodecamjs/js/qrcodelib.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/bower_components/webcodecamjs/js/webcodecamjs.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/dist/js/scan_qrcode.js"></script>
  
    <script src="<?php echo base_url()?>assets/bower_components/jquery/dist/jquery.min.js"></script>

<!-- Content Wrapper--->


<footer class="main-footer">
  <div class="pull-right hidden-xs">
    <b>FRIENDSOURCE</b>
  </div>
  <strong>Copyright &copy; 2020 <a href="https://adminlte.io">Admin LTE</a>.</strong> All rights
  reserved.
</footer>

</div>


<script src="<?php echo base_url()?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?php echo base_url()?>assets/dist/js/adminlte.min.js"></script>

<script src="<?php echo base_url()?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url()?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>


<script>
$(document).ready(function(){
    $('#table1').dataTable()
})
</script>
</body>
</html>