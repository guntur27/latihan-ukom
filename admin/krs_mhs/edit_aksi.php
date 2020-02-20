<?php 
// koneksi database
include '../../koneksi.php';
 
// menangkap data yang di kirim dari form
$id_krs = $_POST['id_krs'];
$kd_matakuliah = $_POST['kd_matakuliah'];
$kd_semester = $_POST['kd_semester'];
 
// update data ke database
mysqli_query($koneksi,"update trs_krs_mhs set kd_matakuliah='$kd_matakuliah',kd_semester='$kd_semester' where id_krs='$id_krs'");
 
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>