
<?php
// koneksi database
include '../../koneksi.php';
 
// menangkap data id yang di kirim dari url
$id_krs = $_GET['id_krs'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from trs_krs_mhs where id_krs='$id_krs'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>