<?php
    $host = "localhost";
    $user = "root";
    $password = "";

    $db = "lsp";

    $conn = mysqli_connect($host,$user,$password,$db);

    if (!$conn) {
        die('Maaf koneksi gagal: '. $connect->connect_error);
    }
?>