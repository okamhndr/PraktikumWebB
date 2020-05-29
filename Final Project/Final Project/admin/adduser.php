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
    <link rel="stylesheet" href="css/adduser.css">
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
            <h1>Tambah User</h1>
                <form action="#" method="POST">
                <input type="text" name="name" id="name" placeholder="name"><br>
                <input type="text" name="username" id="username"placeholder="username"><br>
                <input type="password" name="password" id="password" placeholder="password"><br>
                <input type="text" name="level" id="level" placeholder="level user">
                <br>
                <input type="submit" value="Submit" name="submit">
                </form>
            </div>
        </div>
    </div>
</body>
</html>

<?php
include 'db_connection.php';
if(isset($_POST['submit'])){
$nama=$_POST['name'];
$uname = $_POST['username'];
$pw = $_POST['password'];
$level=$_POST['level'];

$query = "INSERT INTO login VALUES('','$uname','$pw','$level','$nama')";
if(mysqli_query($conn,$query)){
    echo '<script language = "javascript">';
    echo 'alert("Data berhasil Disimpan")';
    echo '</script>';
}else{
    echo "Error:". $query."<br>".mysqli_error($conn);
}
}
?>