<?php
include 'db_connection.php';
session_start();
if ($_SESSION['level_user'] == "") {
    header("location:login.php?pesan=gagal");
}
// get id user
$usr = $_SESSION['username'];
$query = "SELECT * FROM login where username ='$usr'";
$data = mysqli_query($conn, $query);
while($z = mysqli_fetch_array($data)){
    $idd = $z['id_login'];
}
// show list
$query2="SELECT * FROM request WHERE username_id = $idd";
$data2 = mysqli_query($conn,$query2);
if (!$data2){
    echo "Error:%s". mysqli_error($conn);
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

                <button onclick="myFunction();" class="btn"><?php echo $_SESSION['username']; ?></button>
                <div id="menu" class="content">

                    <a href="profile.php">Profile</a>
                    <a href="../logout.php">Logout</a>
                </div>
            </div>

            <a href="Homepage.php">
                <h1>PERPUSTAKAAN ONLINE</h1>
                <h3>SELAMAT DATANG</h3>
            </a>
        </div>

        <!-- nav bar -->
        <div class="nav">
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
        <div class="data-pinjaman">
            <p>Daftar Pinjam Buku</p>
            <table>
                <tr>
                    <td>Judul</td>
                    <td>Penerbit</td>
                    <td>kategori</td>
                    <td>Tahun</td>
                    
                </tr>
                <?php
                    while($x = mysqli_fetch_array($data2)){
                ?>
                    <tr>
                        <td><?php echo $x['judul']; ?></td>
                        <td><?php echo $x['penerbit']; ?></td>
                        <td><?php echo $x['kategori']; ?></td>
                        <td><?php echo $x['tahun']; ?></td>
                    </tr>
                    <?php }?>
            </table>

        </div>

        <!-- footer -->
        <footer>

        </footer>
    </div>

</body>

</html>
<script>
    /* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
    function myFunction() {
        document.getElementById("menu").classList.toggle("show");
    }

    // Close the dropdown menu if the user clicks outside of it
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