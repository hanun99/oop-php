<?php
require 'function.php';
// cek apakah data terisi atau tidak
if (isset($_POST["submit"])){
    if(tambah($_POST) > 0){
        echo "<script>
        alert('data berhasil ditambahkan');
        document.location.href = 'index.php';
        </script>";
    }else{
        echo "<script>
        alert('data gagal ditambahkan');
        document.location.href = 'index.php';
        </script>";
    }
}

//cek apakah tombol submit ditekan atau belum
if( isset($_POST["submit"])){
    //ambil data dari elemen form
    $nama = $_post["nama"];
    $nis = $_POST["nis"];
    $email = $_POST["email"];
    $jurusan = $_POST["jurusan"];
    $gambar = $_POST["gambar"];

    var_dump($_POST["submit"]);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF8-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewimport" content="width=device-width, initial-scale=1.0">
   <title>Tambah Data siswi</title>
</head>
<body>
   <h1>Tambah Data Siswi</h1>

   <form action="<?php $_SERVER ["PHP_SELF"]?>" method="post">
   Nama : <input type="text" name="nama" required>
   <br><br>
   NIS : <input type="text" name="nis" required>
   <br><br>
   Email : <input type="text" name="email" required>
   <br><br>
   Jurusan : <input type="text" name="jurusan" required>
   <br><br>
   Gambar : <input type="text" name="gambar" required>
   <br><br>
   <button type="submit" name="submit">Tambah Data!!</button>
   
   </form>
   </body>
   </html>
   