<?php
include 'connect.php';
if(isset($_POST['update'])){
    $nim=$_POST['nim'];
	$nama=$_POST['nama'];
	$jk=$_POST['jk'];
	$agama=$_POST['agama'];
	$jurusan=$_POST['jurusan'];
	$alamat=$_POST['alamat'];
    $nohp=$_POST['nohp'];
    $res = mysqli_query($conn,"UPDATE mahasiswa SET nim='$nim', nama='$nama', jenis_kelamin='$jk',agama='$agama',jurusan='$jurusan',alamat='$alamat',nohp='$nohp' WHERE nim=$nim");
    header("Location: form_output.php");
}

?>
<?php
include 'connect.php';
$data = mysqli_query($conn,"SELECT * FROM mahasiswa");
				while($x=mysqli_fetch_array($data)){
                    $nim=$x['nim'];
                    $nama=$x['nama'];
                    $agama=$x['agama'];
                    $jurusan=$x['jurusan'];
                    $alamat=$x['alamat'];
                    $nohp=$x['nohp'];
                    
                }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
<form method="POST" action="update.php">
	<table>
        <tr><td>Nama<td>:<input type="text" name="nama" value="<?php echo $nama ?>"> </td></td></tr>
		<tr><td>Nim<td>:<input type="text" name="nim" value="<?php echo $nim ?>"></td></td></tr>
		<tr><td>Jenis Kelamin<td>:<input type="radio" name="jk" value="L">Laki-Laki
		<input type="radio" name="jk" value="P">Perempuan</td></td></tr>
		<tr><td>Agama<td>:<input type="text" name="agama" value="<?php echo $agama ?>"></td></td></tr>
		<tr><td>Jurusan<td>:<input type="text" name="jurusan" value="<?php echo $jurusan ?>"></td></td></tr>
		<tr><td>Alamat<td>:<textarea style="padding: 20px;" name="alamat"><?php echo $alamat ?></textarea></td></td></tr>
		<tr><td>No.HP<td>:<input type="text" name="nohp" value="<?php echo $nohp ?>"></td></td></tr>
		<tr><td><input type="submit" name="update" value="update"></td></tr>
		<tr><td><a href="form_output.php"> Kembali Ke Halaman Utama</a></td></tr>
	</table>
</form>
</body>
</html>