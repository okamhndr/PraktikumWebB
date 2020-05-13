<?php  
include 'connect.php';
if (isset($_POST["submit"])) {
	$nim=$_POST['nim'];
	$nama=$_POST['nama'];
	$jk=$_POST['jk'];
	$agama=$_POST['agama'];
	$jurusan=$_POST['jurusan'];
	$alamat=$_POST['alamat'];
	$nohp=$_POST['nohp'];

	$query = "INSERT INTO mahasiswa VALUES('$nim','$nama','$jk','$agama','$jurusan','$alamat','$nohp')";
	$exe = mysqli_query($conn,$query);

	if (!$exe) {
		echo "Error! Data Tidak Ditambahkan!".mysqli_error($conn);
		
	}else{	
		echo "Data berhasil Ditambahkan!";
		header("location:form_output.php");
	}
}

?>