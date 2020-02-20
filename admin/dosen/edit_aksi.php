<?php
//koneksi database

include '../../koneksi.php';

$kd_dosen = $_POST['kd_dosen'];
$nama_dosen = $_POST['nama_dosen'];

mysqli_query($koneksi, "UPDATE tbl_dosen SET nama_dosen = '$nama_dosen' WHERE kd_dosen = '$kd_dosen'");

header("location:index.php");

?>