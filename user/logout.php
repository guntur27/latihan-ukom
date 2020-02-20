<?php

//aktifkan session
session_start();

//hapus semua session
session_destroy();

//mengalihkan halaman dan tampilkan pesan logout
header("location:../login.php?=pesan=logout");

?>