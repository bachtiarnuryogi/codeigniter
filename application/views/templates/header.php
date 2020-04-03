<<<<<<< HEAD
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Dashboard - Toko Gadget</title>
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="assets/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="../../assets/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/css/adminlte.min.css">
  <link rel="stylesheet" href="../../assets/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
</head>
<body class="hold-transition sidebar-collapse layout-top-nav">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
      <a href="<?php echo base_url('admin')?>" class="navbar-brand">
        <span class="brand-text font-weight-light">Toko Gadget</span>
      </a>
      <div class="collapse navbar-collapse order-5" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('admin')?>" class="nav-link">Home </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('upload')?>" class="nav-link">Upload File </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('product')?>" class="nav-link">Product </a>
          </li>
          <li class="nav-item dropdown">
            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Category</a>
            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
              <li><a href="#" class="dropdown-item">Product 1 </a></li>
              <li><a href="#" class="dropdown-item">Product 2</a></li>

              <li class="dropdown-divider"></li>

              <!-- Level two dropdown-->
              <li class="dropdown-submenu dropdown-hover">
                <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Hover for action</a>
                <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                  <li>
                    <a tabindex="-1" href="#" class="dropdown-item">level 2</a>
                  </li>

                  <!-- Level three dropdown-->
                  <li class="dropdown-submenu">
                    <a id="dropdownSubMenu3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">level 2</a>
                    <ul aria-labelledby="dropdownSubMenu3" class="dropdown-menu border-0 shadow">
                      <li><a href="#" class="dropdown-item">3rd level</a></li>
                      <li><a href="#" class="dropdown-item">3rd level</a></li>
                    </ul>
                  </li>
                  <!-- End Level three -->

                  <li><a href="#" class="dropdown-item">level 2</a></li>
                  <li><a href="#" class="dropdown-item">level 2</a></li>
                </ul>
              </li>
              <!-- End Level two -->
            </ul>
          </li>
        </ul>

        <!-- SEARCH FORM -->
        <form class="form-inline ml-0 ml-md-3">
          <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-navbar" type="submit">
                <i class="fas fa-search"></i>
              </button>
            </div>
          </div>
        </form>
        <form class="form-inline">
          <div class="input-group input-group-sm">
          <li class="nav-item">
            <a href="<?php echo base_url('login/logout')?>" class="nav-link">Logout <img src="gambar/user.png" width="25px" height="25px"></a>
          </li>
          </div>
        </form>
      </div>
    </div>
  </nav>
  <!-- /.navbar -->
=======
<html>
  <head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="assets/css/font.css">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="assets/css/style.sea.css" id="theme-stylesheet">
    <link rel="stylesheet" href="assets/css/style.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="assets/vendor/css/style.sea.css">
  </head>
  <body>
    <header class="header">   
      <nav class="navbar navbar-expand-lg">
        <div class="container-fluid d-flex align-items-center justify-content-between">
          <div class="navbar-header">
            <!-- Navbar Header--><a href="<?php echo base_url('admin')?>" class="navbar-brand">
              <div class="brand-text brand-big visible text-uppercase"><strong class="text-primary">Halaman&nbsp;</strong><strong>Admin</strong></div>
              <div class="brand-text brand-sm"><strong class="text-primary">D</strong><strong>A</strong></div></a>
          </div>
          <div class="right-menu list-inline no-margin-bottom">
            <!-- Log out               -->
            <div class="list-inline-item logout">
              <!-- SEARCH FORM -->
                <form class="form-inline ml-0 ml-md-3">
                  <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Apa yang anda cari.." aria-label="Search">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="submit">
                        <i class="glyphicon glyphicon-search"></i>Cari
                      </button>
                    </div>
                  </div>
                </form>
              </div>
          </div>
        </div>
      </nav>
    </header>
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      <nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
          <div class="avatar"><img src="<?php echo base_url('gambar/user.png')?>" class="img-fluid rounded-circle"></div>
          <div class="title">
            <h1 class="h5">Admin Name</h1>
            <p>Web Designer</p>
          </div>
        </div>
        <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
        <ul class="list-unstyled">
          <li class="<?php if($this->uri->segment(1)=="admin"){echo("active");}?>"><a href="<?php echo base_url('admin')?>">Home </a></li>
          <li class="<?php if($this->uri->segment(1)=="upload"){echo("active");}?>"><a href="<?php echo base_url('upload')?>">Upload File </a></li>
          <li class="<?php if($this->uri->segment(1)=="product"){echo("active");}?>"><a href="<?php echo base_url('product')?>">Product </a></li>
          <li class="<?php if($this->uri->segment(1)=="handphone" || $this->uri->segment(1)=="laptop"){echo("dropdown show active");}?>">
            <a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse">Category </a>
            <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
              <li class="<?php if($this->uri->segment(1)=="handphone"){echo("active");}?>"><a href="<?php echo base_url('handphone')?>">Handphone</a></li>
              <li class="<?php if($this->uri->segment(1)=="laptop"){echo("active");}?>"><a href="<?php echo base_url('laptop')?>">Laptop</a></li>
            </ul>
          </li>
          <li><a href="<?php echo base_url('login/logout')?>">Logout </a></li>
        </ul>
      </nav>
>>>>>>> 3549e69... codeigniter
