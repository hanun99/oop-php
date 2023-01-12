<?php
require 'function.php';
$si = query("SELECT * FROM siswi");
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF8-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewimport" content="width=device-width, initial-scale=1.0">
   <title>Data siswi</title>
</head>
<body>
   <h1>Data Siswi</h1>
 <a href ="tambahdata.php">tambah data</a> 
   <table border="1" cellpadding="10" cellspacing="0">
     <tr>
         <th>No.</th>
         <th>ID</th>
         <th>Nama</th>
         <th>NIS</th>
         <th>Email</th>
         <th>Jurusan</th>
         <th>Gambar</th>
         <th>Aksi</th>
     </tr>

     <?php $i=1?>

     <?php foreach($si as $row) : ?>
       <tr>
           <td><?= $i ?></td>
           <td><?= $row["id"]?></td>
           <td><?= $row["nama"]?></td>
           <td><?= $row["nis"]?></td>
           <td><?= $row["email"]?></td>
           <td><?= $row["jurusan"]?></td>
           <td><img src="image/<?= $row["gambar"]?>" width=50 alt=""></td>
           <td>
             <a href="">Ubah</a> |
             <a href="hapus.php?id=<?= $row["id"];?>" onclick="return confirm('Yakin Dihapus?')";>Hapus</a>
           </td>
         </tr>  
         <?php $i++ ?>
         <?php endforeach ?>
     </table>

         </body>
         </html>