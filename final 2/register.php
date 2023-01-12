<?php
    require "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="main">
      <div class="div-content">
        <h1>Register</h1>
        <div class="div-box">
           <form action="" method="post">
           <div>
             <label for="email">Email</label>
             <input type="email" name="email" id="email">
             </div>

             <div>
             <label for="password">Password</label>
             <input type="password" name="password" id="password">
             </div>

             <div>
               <input type="submit" name="submit" value="Register">
               </div>
               </form>

               <?php
                 if(isset($_POST['submit'])){
                    $email = htmlspecialchars($_POST['email']);
                 }
// <?php 
//     include "koneksi.php";
//     $cek_user=mysql_num_rows(mysql_query("SELECT * FROM tb_user WHERE userid='$_POST[userid]'"));
//     if ($cek_user > 0) {
//         echo '<script language="javascript">
//               alert ("Username Sudah Ada Yang Menggunakan");
//               window.location="registrasi.html";
//               </script>';
//               exit();
//     }
//     else {
//         $password    =md5('$_POST[password]');
//         mysql_query("INSERT INTO tb_user (userid, nama, alamat, email, hp, password)
//         VALUES ('$_POST[userid]', '$_POST[nama]', '$_POST[email]', '$_POST[hp]', '$password')");
        
//         echo '<script language="javascript">
//               alert ("Registrasi Berhasil Di Lakukan!");
//               window.location="index2.html";
//               </script>';
//               exit();
//     }
// 