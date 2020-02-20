<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h2>Halaman user</h2>
    <br/>

    <!-- cek apakah sudah login -->
    <?php
        session_start();
        if($_SESSION['status'] != "login") {
            header("location:../login.php?pesan=belum_login");
        }
    ?>

    <h4>Selamat datang, <?php echo $_SESSION['username']; ?>! Anda sudah login</h4>

   
    <a href="dosen"><button>Data Dosen</button></a>
    ||
    <a href="krs_mhs"><button>KRS MAHASISWA</button></a>
    
    <br/>
    <br/>

        <a href="logout.php">LOGOUT</a>
</body>
</html>