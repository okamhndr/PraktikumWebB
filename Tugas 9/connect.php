<?php
$host="localhost";
$user="root";
$pw="";
$db="simak";
$conn=mysqli_connect($host,$user,$pw,$db) or die("Tidak berhasil terhubung!");
mysqli_select_db($conn,$db) or die("no database selected!");
?>