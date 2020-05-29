
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan</title>
    <link rel="stylesheet" href="css/hpawal.css">
    
</head>
<body>
    <div class="main">
       
        
        <!-- nav bar -->
        <div  class="mid">
            <a href="Homepage.php">HOMEPAGE</a>
            <a href="#one">PERPUSTAKAAN ONLINE</a>
            <a href="#two">PINJAM BUKU</a>
            <a href="#three">TENTANG</a>
            
            <button  onclick="window.location.href='login.php';">Sign In</button>
            
        </div>
        <!-- bg -->
        <div>
          <img class="mySlides" src="gambar/sampul.jpg" alt=""  width="100%;">
          <img class="mySlides" src="gambar/slide2.jpg" alt=""  width="100%;">
          <img class="mySlides" src="gambar/slide3.jpg" alt=""  width="100%;">
        </div>
        <br>
        <div class="daftar">
            <h1>PERPUSTKAAN ONLINE</h1><br>
            <p>Daftar Sekarang!</p><br>
            <button  onclick="window.location.href='daftar.php';">Sign Up</button>
        </div>
        <!-- deskripsi -->
        <section class="description">
            <article class="cont">
                <h3 id="one">APA ITU PERPUSTKAAN ONLINE?</h3><br>
                <p>Perpustakaan Online adalah </p>
                <p>tempat untuk meminjam Buku </p>
                <p>berbagai macam kategori</p><br><br>
            </article>
            <article class="cont">
                
                <h3 id="two">PEMINJAMAN BUKU</h3><br>
                <p>Cara mudah untuk</p>
                <p>Memilih dan Meminjam Buku</p>
                <p>Sesuai pilihan Anda</p>
            </article>
            <article class="cont">
                <h3 id="three">TENTANG KAMI</h3><br>
                <p>Contact Kami di</p>
                
                <p>Email:
                    <a href="mailto:perpusonlen@gmail.com">perpusonlen@gmail.com</a>
                </p>
            </article>
        </section>
        <!-- footer -->
        <footer>

        </footer>
    </div>
    
</body>
</html>
<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>