

<?php
// koneksi database
include '../../koneksi.php';
 
// menangkap data yang di kirim dari form
$kd_matakuliah = $_POST['kd_matakuliah'];
$kd_semester = $_POST['kd_semester'];

 
// menginput data ke database
mysqli_query($koneksi,"insert into trs_krs_mhs(kd_matakuliah,kd_semester) values('$kd_matakuliah','$kd_semester')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>