<?php

    include '../../koneksi.php';

    $kd_dosen = $_POST['kd_dosen'];
    $nama_dosen = $_POST['nama_dosen'];


    mysqli_query($koneksi, "INSERT INTO tbl_dosen VALUES ('$kd_dosen','$nama_dosen')");

    header("location:index.php");


?>