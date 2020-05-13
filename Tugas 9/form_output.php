<?php
include 'ins.php';
include 'connect.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Biodata</title>
</head>
<body>
	<div>
		<table border ="1" cellpadding=10>
			<tr>
				<td>NIM</td>
				<td>Nama</td>
				<td>Jenis Kelamin</td>
				<td>Agama</td>
				<td>Jurusan</td>
				<td>Alamat</td>
				<td>No.hp</td>
				<td>Pilihan</td>
			</tr>
			<?php
			include 'connect.php';
				$data = mysqli_query($conn,"SELECT * FROM mahasiswa");
				while($x=mysqli_fetch_array($data)){
					?>
					<tr>
						<td><?php echo $x['nim'];?></td>
						<td><?php echo $x['nama'];?></td>
						<td><?php echo $x['jenis_kelamin'];?></td>
						<td><?php echo $x['agama'];?></td>
						<td><?php echo $x['jurusan'];?></td>
						<td><?php echo $x['alamat'];?></td>
						<td><?php echo $x['nohp'];?></td>
						<td><a href="update.php">Edit</a> |
						<a href="Delete.php">Hapus</a>
					</td>
					</tr>
				<?php }?>
		</table>
		<div>
			<a href="form.php">Tambah Data</a>
		</div>
	</div>
</body>
</html>