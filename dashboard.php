<?php
    include 'koneksi.php';
    
    session_start();

    $username = $_SESSION['username'];
    $level = $_SESSION['level'];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SPP</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="template/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="template/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="template/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="template/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="template/assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:template/partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="template/index.html"><img src="template/assets/images/logo.svg" alt="logo" /></a>
          <a class="navbar-brand brand-logo-mini" href="template/index.html"><img src="template/assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <div class="search-field d-none d-xl-block">
          </div>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:template/partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-category">Main</li>
            <?php if ($level == 1) { ?>
            <li class="nav-item">
              <a class="nav-link" href="dashboard.php">
                <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="siswa.php">
                <span class="icon-bg"><i class="mdi mdi-account-multiple"></i></span>
                <span class="menu-title">Data Siswa</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../pages/tables/basic-table.html">
                <span class="icon-bg"><i class="mdi mdi-account-key"></i></span>
                <span class="menu-title">Data Petugas</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../pages/tables/basic-table.html">
                <span class="icon-bg"><i class="mdi mdi-library"></i></span>
                <span class="menu-title">Data Kelas</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../pages/tables/basic-table.html">
                <span class="icon-bg"><i class="mdi mdi-library-books"></i></span>
                <span class="menu-title">Data SPP</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../pages/tables/basic-table.html">
                <span class="icon-bg"><i class="mdi mdi-cash"></i></span>
                <span class="menu-title">Transaksi</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../pages/tables/basic-table.html">
                <span class="icon-bg"><i class="mdi mdi-cash-usd"></i></span>
                <span class="menu-title">Laporan</span>
              </a>
            </li>
            <li class="nav-item sidebar-user-actions">
              <div class="user-details">
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <div class="d-flex align-items-center">
                      <!-- <div class="sidebar-profile-img">
                        <img src="template/assets/images/faces/face28.png" alt="image">
                      </div> -->
                      <div class="sidebar-profile-text">
                        <p class="mb-1"><?php echo $username ?></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item sidebar-user-actions">
              <div class="sidebar-user-menu">
                <a href="logout.php" class="nav-link"><i class="mdi mdi-logout menu-icon"></i>
                  <span class="menu-title">Log Out</span></a>
              </div>
            </li>
          </ul>
        </nav>
        <?php } else if ($level == 2) { ?>
            <li class="nav-item">
              <a class="nav-link" href="dashboard.php">
                <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../pages/tables/basic-table.html">
                <span class="icon-bg"><i class="mdi mdi-cash"></i></span>
                <span class="menu-title">Transaksi</span>
              </a>
            </li>
            <li class="nav-item sidebar-user-actions">
              <div class="user-details">
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <div class="d-flex align-items-center">
                      <!-- <div class="sidebar-profile-img">
                        <img src="template/assets/images/faces/face28.png" alt="image">
                      </div> -->
                      <div class="sidebar-profile-text">
                        <p class="mb-1"><?php echo $username ?></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item sidebar-user-actions">
              <div class="sidebar-user-menu">
                <a href="logout.php" class="nav-link"><i class="mdi mdi-logout menu-icon"></i>
                  <span class="menu-title">Log Out</span></a>
              </div>
            </li>
        <?php } else if ($level == 3) { ?>
            <li class="nav-item">
              <a class="nav-link" href="dashboard.php">
                <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../pages/tables/basic-table.html">
                <span class="icon-bg"><i class="mdi mdi-cash"></i></span>
                <span class="menu-title">Riwayat</span>
              </a>
            </li>
            <li class="nav-item sidebar-user-actions">
              <div class="user-details">
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <div class="d-flex align-items-center">
                      <!-- <div class="sidebar-profile-img">
                        <img src="template/assets/images/faces/face28.png" alt="image">
                      </div> -->
                      <div class="sidebar-profile-text">
                        <p class="mb-1"><?php echo $username ?></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item sidebar-user-actions">
              <div class="sidebar-user-menu">
                <a href="logout.php" class="nav-link"><i class="mdi mdi-logout menu-icon"></i>
                  <span class="menu-title">Log Out</span></a>
              </div>
            </li>
        <?php } ?>
        </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
            <?php if ($level == 1) { ?>
                <div class="content-wrapper">
                <center>
                    <h4 class="alert-heading">SELAMAT DATANG, <?php echo $username ?></h4>
                    Di Sistem Pembayaran SPP.
                    <br> Semoga Hari Anda Menyenangkan.
                </center>
            </div>
          <?php } else {?>
            <div class="content-wrapper">
                <center>
                    <h4 class="alert-heading">SELAMAT DATANG, <?php echo $username ?></h4>
                    Di Sistem Pembayaran SPP.
                    <br> Semoga Hari Anda Menyenangkan.
                </center>
            </div>
          <?php } ?>
          <!-- content-wrapper ends -->
          <!-- partial:template/partials/_footer.html -->
          <footer class="footer">
            <div class="footer-inner-wraper">
              <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap dashboard templates</a> from Bootstrapdash.com</span>
              </div>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="template/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="template/assets/js/off-canvas.js"></script>
    <script src="template/assets/js/hoverable-collapse.js"></script>
    <script src="template/assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
  </body>
</html>