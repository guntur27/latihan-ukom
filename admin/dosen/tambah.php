<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>tambah data</h2>

    <a href="index.php">kembali</a>
    <br/>
    <form method="POST" action="tambah_aksi.php">
        <table>
            <tr>
                <td>Kode</td>
                <td><input type="number" name="kd_dosen"></td>
            </tr>
            <tr>
                <td>Nama Dosen</td>
                <td><input type="text" name="nama_dosen"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SIMPAN"></td>
            </tr>
        
        </table>


    </form>
</body>
</html>