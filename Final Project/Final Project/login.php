<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/logincss.css">
    <title>Login</title>
</head>
<body>
<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
    ?>
    <div class="login">
        <form action="cek_login.php" method="POST">
            <h1>LOGIN PERPUSTAKAAN</h1>
           <div class="imgcont"> <img src="gambar/user.png" alt="user" class="imguser"></div>
            <input type="text" name="username" id="username" placeholder="Username">
            <input type="password" name="password" id="password" placeholder="Password">
            <input type="submit" value="Login">
        </form>
    </div>
</body>
</html>