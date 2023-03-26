<?php
    include 'koneksi.php';
    
    session_start();

    $idSiswa = $_SESSION['idPetugas'];
    $name = $_SESSION['nama'];
    $level = $_SESSION['level'];

    if (isset($_POST["hapus"])) {
      $id = $_POST["hapus"];

      $sql = "delete from pembayaran where id=$id";

      if (mysqli_query($conn, $sql)) {
        echo "<script> alert('Data Berhasil Dihapus.') </script>";
    } else {
        echo "<script> alert('Error : " . mysqli_error($conn)."') </script>";
    }
    }
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
    <style>
        @media print {
        body * {
            visibility: hidden;
        }
        .table, .table * {
            visibility: visible;
        }
        .table {
            position: absolute;
            right: 0;
            bottom: auto;
            left: 1000;
            top: auto;
        }
        }
    </style>
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
        <?php include('inc/sidebar.php'); ?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Laporan Transaksi </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <button type="button" class="btn btn-info btn-icon-text" onclick="window.print()"> Print <i class="mdi mdi-printer btn-icon-append"></i> </button>
                </ol>
              </nav>
            </div>
            <div class="printable">
                <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                    <div class="card-body">
                        <table class="table table-dark">
                        <thead>
                            <tr>
                            <th> ID </th>
                            <th> ID Petugas </th>
                            <th> ID Siswa </th>
                            <th> Tanggal Bayar </th>
                            <th> Bulan Bayar </th>
                            <th> Tahun Bayar </th>
                            <th> ID SPP </th>
                            <th> Jumlah Bayar </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if ($level == 1 || $level == 2) {
                                $sql = "SELECT * FROM pembayaran";
                            } else {
                                $sql = "SELECT * FROM pembayaran where id_siswa='$idSiswa'";
                            }
                            $result = mysqli_query($conn,$sql);
                        
                            while ($row = mysqli_fetch_assoc($result)) { ?>
                                <tr>
                                    <td> <?php echo $row["id"]; ?></td>
                                    <td> <?php echo $row["id_petugas"]; ?></td>
                                    <td> <?php echo $row["id_siswa"]; ?></td>
                                    <td> <?php echo $row["tgl_bayar"]; ?></td>
                                    <td> <?php echo $row["bulan_bayar"]; ?></td>
                                    <td> <?php echo $row["tahun_bayar"]; ?></td>
                                    <td> <?php echo $row["id_spp"]; ?></td>
                                    <td> <?php echo $row["jumlah_bayar"]; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                        </table>
                    </div>
                    </div>
                </div>
                </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
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