<?php
    include '../koneksi.php';
    
    session_start();

    $name = $_SESSION['nama'];
    $level = $_SESSION['level'];
    $idPetugas = $_SESSION['idPetugas'];

    $id = $_GET["id"];
    $idSiswa = $_GET["idSiswa"];
    $idSpp = $_GET["idSpp"];

    if (isset($_POST["submit"])) {
        $idSiswa = $_POST["idSiswa"];
        $tglBayar = $_POST["tglBayar"];
        $blnBayar = $_POST["blnBayar"];
        $thnBayar = $_POST["thnBayar"];
        $idSpp = $_POST["idSpp"];
        $jmlBayar = $_POST["jmlBayar"];

        $sql = "UPDATE pembayaran SET  id_siswa='$idSiswa', tgl_bayar='$tglBayar', bulan_bayar='$blnBayar', tahun_bayar='$thnBayar', id_spp='$idSpp', jumlah_bayar='$jmlBayar' WHERE id='$id'";

        $result = mysqli_query($conn,$sql);

        if ($result) {
            echo "<script> alert('Data Berhasil Dimasukan') </script>";
            header("location: transaksi.php");
        } else {
            echo "<script> alert('Terjadi Kesalah') </script>"; 
        }
    }

    $sql = "select * from pembayaran where id='$id'";

    $result = mysqli_query($conn,$sql);

    $row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SPP</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../template/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../template/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../template/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../template/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../template/assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:../template/partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="../template/index.html"><img src="../template/assets/images/logo.svg" alt="logo" /></a>
          <a class="navbar-brand brand-logo-mini" href="../template/index.html"><img src="../template/assets/images/logo-mini.svg" alt="logo" /></a>
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
        <!-- partial:../template/partials/_sidebar.html -->
        <?php include('../inc/sidebar.php'); ?>
        <!-- partial -->
        <div class="main-panel">
        <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Tambah Data Transaksi</h4>
                    <form class="forms-sample" method="post">
                      <div class="form-group">
                        <label for="exampleSelectGender">Siswa</label>
                        <select class="form-control" id="exampleSelectGender" name="idSiswa">
                            <?php 
                                $sql = "select * from siswa";
                                $result = mysqli_query($conn,$sql);

                                while($rows = mysqli_fetch_assoc($result)){
                            ?>
                                <option <?php if($idSiswa == $rows['id']) { echo 'selected'; } ?> value="<?php echo $rows['id'] ?>"><?php echo $rows['nama'] ?></option>
                            <?php } ?>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Tanggal Bayar</label>
                        <input type="number" min="1" max="31" class="form-control" id="exampleInputName1" value="<?php echo $row['tgl_bayar'] ?>" name="tglBayar">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Bulan Bayar</label>
                        <input type="number" min="1" max="12" class="form-control" id="exampleInputName1" value="<?php echo $row['bulan_bayar'] ?>" name="blnBayar">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Tahun Bayar</label>
                        <input type="number" min="1940" max="2099" class="form-control" id="exampleInputName1" value="<?php echo $row['tahun_bayar'] ?>" name="thnBayar">
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">Tahun SPP</label>
                        <select class="form-control" id="exampleSelectGender" name="idSpp">
                            <?php 
                                $sql = "select * from spp";
                                $result = mysqli_query($conn,$sql);

                                while($rows = mysqli_fetch_assoc($result)){
                            ?>
                                <option <?php if($idSpp == $rows['id']) { echo 'selected'; } ?> value="<?php echo $rows['id'] ?>"><?php echo $rows['tahun'] ?></option>
                            <?php } ?>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Jumlah Bayar</label>
                        <input type="number" min="100000" class="form-control" id="exampleInputName1" name="jmlBayar" value="<?php echo $row['jumlah_bayar'] ?>">
                      </div>
                      <button type="submit" class="btn btn-primary mr-2" name="submit">Submit</button>
                      <a class="btn btn-light" href="transaksi.php">Cancel</a>
                    </form>
                  </div>
                </div>
              </div>
          <!-- content-wrapper ends -->
          <!-- partial:../template/partials/_footer.html -->
          <footer class="footer">
            <div class="footer-inner-wraper">
              <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap dashboard ../templates</a> from Bootstrapdash.com</span>
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
    <script src="../template/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../template/assets/js/off-canvas.js"></script>
    <script src="../template/assets/js/hoverable-collapse.js"></script>
    <script src="../template/assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
  </body>
</html>