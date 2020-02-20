<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
    <h2>edit data</h2>
    <a href="index.php">kembali</a>
    <br/>
    <br/>

    <?php include '../../koneksi.php';

    $kd_dosen = $_GET['kd_dosen'];
    $data = mysqli_query($koneksi, "SELECT * FROM tbl_dosen WHERE kd_dosen = '$kd_dosen'");
    while($d = mysqli_fetch_array($data)) {
        ?>
        <form method="POST" action="edit_aksi.php">
            <table>
                <tr>
                    <td>Nama</td>
         <td>
             <input type="hidden" name="kd_dosen" value="<?php echo $d['kd_dosen']; ?>">
                        <input type="text" name="nama_dosen" value="<?php echo $d['nama_dosen']; ?>">
                    </td>>
                </tr>

                <td></td>
                <td><input type="submit" value="SIMPAN"></td>
            
            </table>
        
        </form>
        <?php
    }
    ?>
</body>
</html>