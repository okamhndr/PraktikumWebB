<?php
        session_start();
        if($_SESSION['level_user']==""){
            header("location:login.php?pesan=gagal");
        }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/kategoricss.css">
    <title>Admin Page</title>
</head>
<body>
    <div class="main">
        <div class="left-content">
            <img src="#" alt="Profile Admin">
            <ul style="list-style-type: none;">
                <li><a href="adminpage.php">Homepage</a></li>
                <li><a href="listuser.php">Daftar User</a></li>
                <li><a href="adduser.php">Tambah User</a></li>
                <li><a href="kategori.php">Kategori Buku</a></li>
                <li><a href="peminjam.php">Daftar Peminjam</a></li>
            </ul>
            <div class="logout">
                <a href="../logout.php">Logout</a>
            </div>
        </div>
        <div class="mid-content">
            <h1>ADMIN PAGE</h1>
            
            <hr>
            
            <div class="addbook">
                <h2>Tambah Buku</h2>
                <form action="" method="POST">
                    <p style="margin-left: 20px;">Judul:</p>
                    <input type="text" name="judul" placeholder="Masukkan Judul">
                    <p style="margin-left: 20px;">Nama Penerbit:</p>
                    <input type="text" name="penerbit" placeholder="Masukkan Nama Penerbit">
                    <p style="margin-left: 20px;">ISBN Buku:</p>
                    <input type="text" name="isbn" placeholder="Masukkan isbn">
                    <p style="margin-left: 20px;">Tahun:</p>
                    <input type="text" name="tahun" placeholder="Masukkan Tahun">
                    <p style="margin-left: 20px;">Stock Buku:</p>
                    <input type="number" name="stock" id="stock" placeholder="Masukkan Jumlah Stock">
                    <p style="margin-left: 20px;">Kategori Buku:</p>
                    <input type="text" name="kategori" placeholder="Masukkan Kategori">
                    <!-- <p style="margin-left: 20px;">Masukkan Cover Buku:</p>
                    <input type="file" name="image" id="image"> -->

                    <input type="hidden" name="status" value="true">
                    <input type="submit" value="Submit" name ="submit">
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<?php
include 'db_connection.php';
if(isset($_POST['submit'])){
    $judul = $_POST['judul'];
    $penerbit = $_POST['penerbit'];
    $isbn = $_POST['isbn'];
    $tahun = $_POST['tahun'];
    $no = $_POST['stock'];
    $status = $_POST['status'];
    $kategori = $_POST['kategori'];
    $query = "INSERT INTO buku VALUES('','$judul','$penerbit','$isbn','$tahun','$kategori','$status','$no')";
    $cek = mysqli_query($conn,$query);

    if($cek){
        echo '<script language = "javascript">';
        echo 'alert("Data berhasil Disimpan")';
        echo '</script>';
       
    }else{
        echo "Error:". $query."<br>".mysqli_error($conn);
    }
    header("Location:kategori.php");
}
?>