<?php
require 'index2.html';
// cek apakah data terisi atau tidak
if (isset($_POST["submit"])){
    if(tambah($_POST) > 0){
        echo "<script>
        alert('data berhasil ditambahkan');
        document.location.href = 'index2.html';
        </script>";
    }else{
        echo "<script>
        alert('data gagal ditambahkan');
        document.location.href = 'index2.html';
        </script>";
    }
}

//cek apakah tombol submit ditekan atau belum
if( isset($_POST["submit"])){
    //ambil data dari elemen form
    $id = $_post["id"];
    $name = $_post["Full Name"];
    $username = $_POST["Username"];
    $hp = $_POST["No Hp"];
    $email = $_POST["Email"];
    $password = $_POST["Password"];

    var_dump($_POST["submit"]);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF8-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewimport" content="width=device-width, initial-scale=1.0">
   <title>registrasi akun</title>
</head>
<body>
   <h1>Daftar Akun</h1>

   <form action="<?php $_SERVER ["PHP_SELF"]?>" method="post">
   id : <input type="text" name="id" required>
   <br><br>
   Full Name : <input type="text" name="Full Name" required>
   <br><br>
   No Hp : <input type="text" name="No hp" required>
   <br><br>
   Email : <input type="text" name="email" required>
   <br><br>
   Password : <input type="text" name="password" required>
   <br><br>
   <button type="submit" name="submit">Tambah Data!!</button>
   
   </form>
   </body>
   </html>
   