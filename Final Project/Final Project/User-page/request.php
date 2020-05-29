<?php

include 'db_connection.php';
if(isset($_GET['submit'])){
    $id = $_GET['id'];
    $uname = $_GET['usrname'];
    $show = "SELECT * FROM buku WHERE id_buku=$id";
    $p = mysqli_query($conn,$show);
    
    while($data = mysqli_fetch_array($p)){
        $judul= $data['judul_buku'];
        $penerbit = $data['nama_penerbit'];
        $kategori = $data['kategori'];
        $tahun = $data['Tahun'];
    $ins = "INSERT INTO request VALUES('','$id','$uname','$judul','$penerbit','$kategori','$tahun')";
    $cek = mysqli_query($conn,$ins);
    if($cek){
        echo '<script language ="javascript">';
        echo 'alert("Data Telah Disimpan")';
        echo '</script>';
        header("Location:Homepage.php");
    }else{
        echo mysqli_error($conn);
    }
}
}

?>