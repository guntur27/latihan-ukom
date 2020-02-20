<!DOCTYPE html>
<html>
<head>
	<title>Data KRS MAHASISWA</title>
</head>
<body>
 
	<h2>Data KRS MAHASISWA</h2>
	<br/>
	<a href="tambah.php">+ TAMBAH KRS MAHASISWA</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>NO</th>
			<th>ID KRS</th>
			<th>KODE MATAKULIAH</th>
			<th>KODE SEMESTER</th>
			<th>TAHUN SEMESTER</th>
			<th>OPSI</th>
		</tr>
		<?php 
		include '../../koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from v_krs_mhs");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['id_krs']; ?></td>
				<td><?php echo $d['kd_matakuliah']; ?></td>
				<td><?php echo $d['kd_semester']; ?></td>
				<td><?php echo $d['tahun_semester']; ?></td>
				<td>
					<a href="edit.php?id_krs=<?php echo $d['id_krs']; ?>">EDIT</a>
					<a href="hapus.php?id_krs=<?php echo $d['id_krs']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>

	<br/>
 	<a href="../index.php">Back To Main Menu</a><br>
	<a href="logout.php">LOGOUT</a>
</body>
</html>