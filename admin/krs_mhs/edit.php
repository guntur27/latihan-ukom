<html>
<head>
	<title>Edit Data KRS Mahasiswa</title>
</head>
<body>
 
	<h2>Edit Data KRS Mahasiswa</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA KRS Mahasiswa</h3>
 
	<?php
	include '../../koneksi.php';
	$id_krs = $_GET['id_krs'];
	$data = mysqli_query($koneksi,"select * from v_krs_mhs where id_krs='$id_krs'");
	$data2 = mysqli_query($koneksi,"select * from tbl_semester");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="edit_aksi.php">
			<table>
				<tr>			
					<td>Kode Matkul</td>
					<input type="hidden" name="id_krs" value="<?php echo $d['id_krs'];?>">
					<td><input type="number" name="kd_matakuliah" value="<?php echo $d['kd_matakuliah'];?>"></td>
					
				</tr>
				<tr>
				<td>Semester</td>
				<td><select name="kd_semester">
					<option value="	<?php echo $d['kd_semester'];?>"><?php echo $d['tahun_semester'];?></option>
					<?php
						$data2 = mysqli_query($koneksi,"select * from tbl_semester ");
								while($d2 = mysqli_fetch_array($data2)){
						?>
				  		<option value="	<?php echo $d2['kd_semester'];?>"><?php echo $d2['tahun_semester'];?></option>
  						<?php 
						}
						?>
					</select>
				</td>
			</tr>
				
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>