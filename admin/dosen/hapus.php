<?php

include '../../koneksi.php';

$kd_dosen = $_GET['kd_dosen'];

mysqli_query($koneksi, "DELETE FROM tbl_dosen WHERE kd_dosen = '$kd_dosen'");

header("location:index.php");