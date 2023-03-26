<?php
    include '../koneksi.php';
    
    session_start();

    $name = $_SESSION['nama'];
    $level = $_SESSION['level'];

    $id = $_GET["id"];
    $levelform = $_GET["level"];

    if (isset($_POST["submit"])) {
        $username = $_POST["username"];
        $nama = $_POST["nama"];
        $level = $_POST["level"];

        $sql = "update petugas set username='$username',nama='$nama',level='$level' where id='$id'";

        $result = mysqli_query($conn,$sql);

        if ($result) {
            echo "<script> alert('Data Berhasil Dimasukan') </script>";
            header("location: petugas.php");
        } else {
            echo "<script> alert('Terjadi Kesalah') </script>"; 
        }
    }

    $sql = "select * from petugas where id='$id'";

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
                    <h4 class="card-title">Edit Data Petugas</h4>
                    <form class="forms-sample" method="post">
                      <div class="form-group">
                        <label for="exampleInputName1">Username</label>
                        <input type="text" class="form-control" id="exampleInputName1" value="<?php echo $row["username"] ?>" name="username">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Nama</label>
                        <input type="text" class="form-control" id="exampleInputName1" value="<?php echo $row["nama"] ?>" name="nama">
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">Level</label>
                        <select class="form-control" id="exampleSelectGender" name="level">
                          <?php 
                            if ($levelform == 1) {
                                echo '<option selected value="1">Admin</option>';
                                echo '<option value="2">Petugas</option>';
                                echo '<option value="3">Siswa</option>';
                            } elseif ($levelform == 2){
                                echo '<option value="1">Admin</option>';
                                echo '<option selected value="2">Petugas</option>';
                                echo '<option value="3">Siswa</option>';
                            } else {
                                echo '<option value="1">Admin</option>';
                                echo '<option value="2">Petugas</option>';
                                echo '<option selected value="3">Siswa</option>';
                            }
                          ?>
                        </select>
                      </div>
                      <button type="submit" class="btn btn-primary mr-2" name="submit">Submit</button>
                      <a class="btn btn-light" href="petugas.php">Cancel</a>
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