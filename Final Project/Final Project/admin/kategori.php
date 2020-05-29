<?php
        session_start();
        if($_SESSION['level_user']==""){
            header("location:login.php?pesan=gagal");
        }
        include'db_connection.php';
        $query = "SELECT * FROM buku";
        $data = mysqli_query($conn,$query);
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
            <div class="info">
                <a href="addbook.php"><button>Tambah Buku</button></a>
               <table >
                   <tr>
                       <td>No</td>
                       <td>Judul</td>
                       <td>Penerbit</td>
                       <td>ISBN</td>
                       <td>Tahun</td>
                       <td>Kategori</td>
                       <td>Status Buku</td>
                       <td>Stock</td>
                   </tr>
                   <?php 
                    while($x = mysqli_fetch_array($data)){
                   ?>
                   <tr>
                       <td><?= $x['id_buku'];?></td>
                       <td><?= $x['judul_buku'];?></td>
                       <td><?= $x['nama_penerbit'];?></td>
                       <td><?= $x['ISBN'];?></td>
                       <td><?= $x['Tahun'];?></td>
                       <td><?= $x['kategori'];?></td>
                       <td><?= $x['status_buku'];?></td>
                       <td><?= $x['stock'];?></td>
                   </tr>
                    <?php }?>
               </table>
            </div>
        </div>
    </div>
</body>
</html>