<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/signupcss.css">
</head>
<body>
    <div class="main">
    <div class="info">
        <h1>SIGN UP</h1>
        <br>
        <form action="#" method="POST">
        <input type="text" name="name" id="name" placeholder="name"><br>
        <input type="text" name="username" id="username"placeholder="username"><br>
        <input type="password" name="password" id="password" placeholder="password"><br>
        <input type="hidden" name="level" value="user">
        <br>
        <input type="submit" value="Submit" name="submit">
        </form>
    </div>
    </div>
</body>
</html>
<?php
include 'db_connection.php';
if(isset($_POST['submit'])){
$nama = $_POST['name'];
$uname = $_POST['username'];
$pw = $_POST['password'];
$lv = $_POST['level'];

$query = "INSERT INTO login VALUES('','$nama','$uname','$pw','$lv')";
$cek = mysqli_query($conn,$query);

if($cek){
        echo '<script language = "javascript    ">';
        echo 'alert("Data berhasil Disimpan")';
        echo '</script>';
        header('Location:Homepage.php');
    }else{
        echo "Error:". $query."<br>".mysqli_error($conn);
    }
}
?>