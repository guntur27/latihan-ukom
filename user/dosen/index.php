<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Dosen</title>
</head>
<body>
    
    <h2>Data dosen</h2>
    <br/>
    <!-- <a href="tambah.php">+Tambah</a> -->
    <br/>
 <br/>

    <table border="1">
        <tr>
            <th>NO</th>
            <th>Kode</th>
            <th>Nama</th>
            <!-- <th>Action</th> -->
        </tr>
    
        <?php include '../../koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi, "SELECT * FROM tbl_dosen");
        while($d = mysqli_fetch_array($data)) {
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $d['kd_dosen']; ?></td>
            <td><?php echo $d['nama_dosen']; ?></td>
            <!-- <td>
                <a href="edit.php?kd_dosen=<?php echo $d['kd_dosen']; ?>">EDIT</a>
                <a href="hapus.php?kd_dosen=<?php echo $d['kd_dosen']; ?>">Hapus</a>
            </td> -->
        </tr>
        <?php
    } ?>
    
    </table>

    <br/>
    <a href="../index.php">Kembali</a><br>
    <!-- <a href="logout.php">Logout</a> -->
</body>
</html>