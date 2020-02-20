<?php
    //mengaktifkan session php

    session_start();

    //menghubungkan dengan koneksi
    include 'koneksi.php';

    $username = $_POST['username'];
    $pass = $_POST['password'];

    $data = mysqli_query($koneksi, "SELECT * FROM tbl_user WHERE username = '$username' AND password = '$pass'");

    $dicek = mysqli_num_rows($data);

    if($dicek > 0 ) {

        $login = mysqli_fetch_assoc($data);

        if($login['level'] == "admin") {
            
            $_SESSION['username'] = $username;
            $_SESSION['status'] = "login";
            header("location:admin/index.php");
        } else if ($login['level'] == "user") {

            $_SESSION['username'] = $username;
            $_SESSION['status'] = "login";
            header("location:user/index.php");
        } else {
        header("location:login.php?pesan=gagal");
    }
}
?>