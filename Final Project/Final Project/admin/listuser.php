<?php
session_start();
include 'db_connection.php';

        
        if($_SESSION['level_user']==""){
            header("location:login.php?pesan=gagal");
        }
$query = "SELECT * FROM login WHERE level_user='user'";
$data = mysqli_query($conn,$query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/adminpage.css">
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
                <h1 style ="margin-left:20px;">Daftar User</h1><br>
                <table >
                    <tr>
                        <td>Id</td>
                        <td>Nama</td>
                        <td>Username</td>
                        <td>Password</td>
                        <td>Level User</td>
                    </tr>
                    <?php
                        while($x = mysqli_fetch_array($data)){
                            ?>
                    <tr>
                        <td><?php echo $x['id_login']; ?></td>
                        <td><?php echo $x['name']; ?></td>
                        <td><?php echo $x['username']; ?></td>
                        <td><?php echo $x['password']; ?></td>
                        <td><?php echo $x['level_user']; ?></td>
                    </tr>
                    <?php
                        }
                    ?>
                </table>
            </div>
        </div>
    </div>
</body>
</html>