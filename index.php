<?php
    include "koneksi.php";

    session_start();

    if(isset($_SESSION["username"])){
        header("location: dashboard.php");
    }

    if (isset($_POST["submit"])) {
        $username = $_POST["username"];
        $password = md5($_POST["password"]);

        $sql = "select * from petugas where username='$username' and password='$password'";
        $result = mysqli_query($conn,$sql);

        if ($result->num_rows > 0) {
            echo "<script> console.log('Berhasil Daftar'); </script>";
            $row = mysqli_fetch_assoc($result);
            $_SESSION['username'] = $row["username"];
            $_SESSION['level'] = $row["level"];
            $_SESSION['nama'] = $row["nama"];
            header("location: dashboard.php");
        } else {
            echo "<script> alert('Username/Password Salah')</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
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
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left p-5">
                <h4>Hallo, Selamat Datang!</h4>
                <h6 class="font-weight-light">Login untuk melanjutkan.</h6>
                <form class="pt-3" method="post">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg" id="exampleInputEmail1" name="username" placeholder="Username">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" name="password" placeholder="Password">
                  </div>
                  <div class="mt-3">
                    <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" name="submit">Login</button>
                  </div>
                  <div class="text-center mt-4 font-weight-light"> Belum Punya Akun? <a href="register.php" class="text-primary">Buat Sekarang!</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
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
  </body>
</html>