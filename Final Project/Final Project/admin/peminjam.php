<?php
session_start();
if ($_SESSION['level_user'] == "") {
    header("location:login.php?pesan=gagal");
}
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
                <table>
                    <tr>
                        <td>Username</td>
                        <td>No Buku</td>
                        <td>Judul</td>
                        <td>Penerbit</td>
                        <td>Kategori</td>
                        <td>Tahun</td>
                        <td>Response</td>   
                    </td>
                    </tr>
                    <?php ?>
                    <tr>
                        <td><button style="background-color: green;">Accept</button>
                        <button style="background-color: red;">Decline</button></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>

</html>