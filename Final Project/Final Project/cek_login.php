<?php
session_start();
include 'db_connection.php';
$uname = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($conn,"SELECT * FROM login where username='$uname' AND password='$password'");
$cek = mysqli_num_rows($login);

if($cek > 0){
    $data = mysqli_fetch_assoc($login);
    if($data['level_user']=='admin'){
        $id = $_SESSION['id_login'];
        $_SESSION['username'] = $uname;
        $_SESSION['level_user']="admin";
        header("location:admin/adminpage.php");
    }else if($data['level_user']=='user'){
        $id = $_SESSION['id_login'];
        $_SESSION['username'] = $uname;
        $_SESSION['level_user']="user";
        header("location:User-page/Homepage.php");
    
    }else if($data['level_user']=='superuser'){
        $id = $_SESSION['id_login'];
        $_SESSION['username'] = $uname;
        $_SESSION['level_user']="superuser";
        header("location:superadminpage.php");
    }else{
        header("location:login.php?pesan=gagal");
    }
}
?>