<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Admin Paneli</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="<?php echo SITE_PUBLIC; ?>/img/apple-touch-icon.png" rel="icon">
  <link href="<?php echo SITE_PUBLIC; ?>/img/apple-touch-icon.png" rel="apple-touch-icon"> 

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo SITE_PUBLIC; ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo SITE_PUBLIC; ?>/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo SITE_PUBLIC; ?>/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo SITE_PUBLIC; ?>/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="<?php echo SITE_PUBLIC; ?>/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="<?php echo SITE_PUBLIC; ?>/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?php echo SITE_PUBLIC; ?>/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo SITE_PUBLIC; ?>/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="<?php echo SITE_URL; ?>/panel/home"  class="logo d-flex align-items-center">
        <img src="<?php echo SITE_PUBLIC; ?>/img/apple-touch-icon.png" alt="">
        <span class="d-none d-lg-block">Admin Paneli</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->
       <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="<?php echo SITE_PUBLIC; ?>/img/apple-touch-icon.png" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo Session::get("username"); ?></span>
          </a>

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Merhaba, <?php echo Session::get("username"); ?></h6>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>


            <li>
              <a class="dropdown-item d-flex align-items-center" href="<?php echo SITE_URL; ?>/panel/home" >
                <i class="bi bi-house"></i>
                <span>Anasayfa</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="<?php echo SITE_URL; ?>/admin/logout">
              <i class="bi bi-box-arrow-right"></i> 
                <span> Çıkış Yap</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->