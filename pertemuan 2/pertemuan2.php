<?php
// pertemuan 2 - Latihan PHP 
//Sintaks PHP

// Standar Output 
// echo, print
//print_r
//var_dump

//echo
echo "Hanun Hafizhoh <br> ";
echo "Hanun", "Hafizhoh<br>";

//print
print "Hanun Hafizhoh<br>";

//print_r
//$nama_siswa = array("hanun", "asiah", "amel");
//print_r($nama_siswa);

//var_dump
var_dump("hanun hafizhoh");

//penulisan sintaks PHP
//1. PHP didalam HTML 
//2. HTML didalam PHP
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan PHP</title>
</head>
<body>
<!-- PHP didalam HTML -->
    <h1>Halo, Welcome <?php echo "hanun"; ?> </h1> 
    <p><?php echo "ini adalah paragraf";?></p>

<!-- 2. tag HTML didalam PHP -->
<?php 
echo "<h1>Welcome Hanun Hafizhoh</h1>";
?>
</body>
</html>