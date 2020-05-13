<?php
//koneksi
$conn = mysqli_connect('localhost','root','','43031_northwind');
if(!$conn){
    echo "Tidak Terhubung";
}

//pagination
$JumlahDataPerHalaman = 3; //ada 5 data yang ditampilkan tiap halaman
$JumlahData = mysqli_num_rows(mysqli_query($conn,"SELECT EmployeeID FROM employees"));
$JumlahHalaman = ceil($JumlahData/$JumlahDataPerHalaman);
$getpage = (isset($_GET["page"]))? $_GET["page"] : 1;//operator ternary
$awaldata = ($JumlahDataPerHalaman * $getpage) - $JumlahDataPerHalaman;
$data = mysqli_query($conn,"SELECT*FROM employees LIMIT $awaldata,$JumlahDataPerHalaman");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagination</title>
    <link rel="stylesheet" href="paginationcss.css">
</head>
<body>
    <div class = "header">
    <h1>Data Employees</h1>
    </div>
    <div class = "tables">
        
        <br>
        <table border = 1 >
            <tr>
                <td>EmployeeID</td>
                <td>LastName</td>
                <td>FirstName</td>
                <td>Title</td>
                <td>TitleOfCourtesy</td>
                <td>BirthDate</td>
                <td>HireDate</td>
                <td>Address</td>
                <td>City</td>
                <td>Region</td>
                <td>PostalCode</td>
                <td>Country</td>
                <td>HomePhone</td>
                <td>Extension</td>
                <td>ReportsTo</td>
                
            </tr>
           
                <?php 
                    while($x=mysqli_fetch_array($data)){
                ?>
                 <tr>
                <td><?php echo $x['EmployeeID'];?></td>
                <td><?php echo $x['LastName'];?></td>
                <td><?php echo $x['FirstName'];?></td>
                <td><?php echo $x['Title'];?></td>
                <td><?php echo $x['TitleOfCourtesy'];?></td>
                <td><?php echo $x['BirthDate'];?></td>
                <td><?php echo $x['HireDate'];?></td>
                <td><?php echo $x['Address'];?></td>
                <td><?php echo $x['City'];?></td>
                <td><?php echo $x['Region'];?></td>
                <td><?php echo $x['PostalCode'];?></td>
                <td><?php echo $x['Country'];?></td>
                <td><?php echo $x['HomePhone'];?></td>
                <td><?php echo $x['Extension'];?></td>
                <td><?php echo $x['ReportsTo'];?></td>
                </tr>
                <?php
                    }
                ?>
            
        </table>
    </div>
    <br>
    <div class = "navigasi">
    <!-- tombol prev -->
        <?php if($getpage > 1){ ?>
            <a href="?page=<?=$getpage-1?>">&laquo</a>
        <?php }?>
    <!-- angka -->
        <?php for($i = 1; $i <= $JumlahHalaman; $i++){ ?>
            <?php if($i == $getpage ){ ?>
                <a class = "active" href="?page=<?= $i; ?>"><?= $i; ?></a>
            <?php }else{ ?>
                <a href="?page=<?= $i; ?>"><?= $i; ?></a>
            <?php }?>
        <?php } ?>
        <!-- tombol next -->
            <?php if($getpage < $JumlahHalaman){ ?>
                <a href="?page=<?=$getpage+1?>">&raquo</a>
            <?php }?>
    </div>
</body>
</html>