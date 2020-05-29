<?php
include 'db_connection.php';
session_start();
if ($_SESSION['level_user'] == "") {
    header("location:login.php?pesan=gagal");
}
if (isset($_GET['no'])) {
    $id = $_GET['no'];
    $query = "SELECT * FROM buku WHERE id_buku=$id";
    $data = mysqli_query($conn, $query);
} else {
    echo mysqli_error($conn);
}
//call id
$id_now = $_SESSION['username'];
$id_query = "SELECT*FROM login WHERE username = '$id_now' ";
$myid = mysqli_query($conn,$id_query);
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
        <div class="data">
        <form action="request.php" method="GET">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <?php while($y = mysqli_fetch_array($myid)){
            ?>
        <input type="hidden" name="usrname" value="<?php echo $y['id_login']; ?>">
        <?php }?>
            <table>
                <?php
                while ($x = mysqli_fetch_array($data)) {
                ?>
                    <tr>
                        <td>
                           
                            <ul style="list-style-type: none;">
                               
                                <li><?php echo "Judul:" . $x['judul_buku']; ?></li>
                                <li><?php echo "Penerbit:" . $x['nama_penerbit']; ?></li>
                                <li><?php echo "Kategori:" . $x['kategori']; ?></li>
                                <li><?php echo "Tahun:" . $x['Tahun']; ?></li>
                                <li><input type="submit" value="Request" name="submit"></li>
                            </ul>
                           
                        </td>
                        
                    </tr>
                <?php
                }
               
                ?>
            </table>
            </form>
            <div class="nav-pagination">

            </div>
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