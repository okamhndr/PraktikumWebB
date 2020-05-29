<?php
include 'db_connection.php';
session_start();
if($_SESSION['level_user']==""){
    header("location:login.php?pesan=gagal");
}
$usr = $_SESSION['username'];
$query = "SELECT * FROM login WHERE username = '$usr'";
$data = mysqli_query($conn,$query);
if(!$data){
  echo "Error: %s".mysqli_error($conn);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan</title>
    <link rel="stylesheet" href="css\newhpcss.css">
</head>
<body>
    <div class="main">
    <div class="header" style="background-image: url(../gambar/perpus.jpg);">
            <div class="usrprofile">
            <img src="../gambar/user.png" alt="image-user"><br>
                
                <button onclick="myFunction();" class="btn"><?php echo $_SESSION['username'];?></button>
                <div id="menu" class="content">
                
                <a href="profile.php">Profile</a>
                <a href="../logout.php">Logout</a>
            </div>
            </div>
            
           <a href="#"> <h1>PERPUSTAKAAN ONLINE</h1>
            <h3>SELAMAT DATANG</h3>
            </a>   
        </div>
        
        <!-- nav bar -->
        <div  class="nav">
            <a href="Homepage.php">HOMEPAGE</a>
            <a href="listbuku.php">DAFTAR BUKU</a>
            <a href="pinjam.php">PINJAM BUKU</a>
            <a href="#">TENTANG</a>
            
        </div>
        <!-- konten -->
        <div class="utility">
            <select name="sort" id="sort">
                <option selected disabled>Sort by</option>
                <option value="nama">Judul</option>
                <option value="others">others</option>
            </select>
            <input type="search" name="search" id="search" placeholder="search">
           
        </div>
        <div class="profile-user"> 
          <form action="" method="POST">
            <h1>Profile</h1>
            <p>Update your profile</p>
          <?php
            while($x = mysqli_fetch_array($data)){
          ?>
            <input type="hidden" name="id" value="<?php echo $x['id_login'];?>">
            <input type="text" name="name" value="<?php echo $x['name'];?>">
            <input type="text" name="username" value="<?php echo $x['username']; ?>">
            <input type="password" name="password" value="<?php echo $x['password'];?>">
            <input type="submit" value="Update" name="submit">
            <?php }?>
            </form>
        </div>

        <!-- footer -->
        <footer>
            
        </footer>
    </div>
    
</body>
</html>
<script>
   
function myFunction() {
  document.getElementById("menu").classList.toggle("show");
}


window.onclick = function(event) {
  if (!event.target.matches('.btn')) {
    var dropdowns = document.getElementsByClassName("content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
<?php

if(isset($_POST['submit'])){
$id = $_POST['id'];
$name = $_POST['name'];
$usrname =$_POST['username'];
$pw = $_POST['password'];
$query = "UPDATE login SET name = '$name', username = '$usrname', password='$pw' WHERE id_login = '$id'";
$cek = mysqli_query($conn,$query);
$_SESSION['username'] = $usrname;
if(!$cek){
  echo "Error:%s".mysqli_error($conn);
}else{
header("Location: Homepage.php");
}
}
?>