<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data KRS MAHASISWA</title>
</head>
<body>
 
	<h2>Tambah Data KRS MAHASISWA</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<form method="post" action="tambah_aksi.php">
		<table>
			<tr>			
				<td>Kode Matkul</td>
				<td><input type="number" name="kd_matakuliah"></td>
			</tr>
			<tr>
				<td>Semester</td>
				<td><select name="kd_semester">
					<?php
						include '../../koneksi.php';
						$data = mysqli_query($koneksi,"select * from tbl_semester ");
								while($d = mysqli_fetch_array($data)){
						?>
				  		<option value="	<?php echo $d['kd_semester'];?>"><?php echo $d['tahun_semester'];?></option>
  						<?php 
						}
						?>
					</select>
				</td>
			</tr>
			
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
</html>