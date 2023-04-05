<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="styleco.css">
</head>
<body>

<?php
require 'koneksi.php';

$sql = "SELECT * FROM product";
$result = mysqli_query($conn, $sql);
?>

<h2> your ticket basket list: </h2>
 <table id="t01">
 <tr>
     <th>Id</th>
     <th>Name</th>
     <th>Price</th>
     <th>Quantity (in stock)</th>
     <th>Buy</th>
 </tr>

           <td>
             <a href="">Ubah</a> |
             <a href="">Hapus</a>
           </td>
         </tr>  
        
     <?php while($product = mysqli_fetch_object($result)) {  ?>
    <tr>
        <td> <?php echo $product->id; ?> </td>
        <td> <?php echo $product->name; ?> </td>
        <td> Rp.<?php echo $product->price; ?> </td>
        <td> <?php echo $product->quantity; ?> </td>
        <td> <a href="cart.php?id= <?php echo $product->id; ?> &action=add">Order Now</a> </td>
         <td><img src="image/<?= $row["gambar"]?>" width=50 alt=""></td>
           <td>
             <a href="">Ubah</a> |
             <a href="hapus.php?id=<?= $row["id"];?>" onclick="return confirm('Yakin Dihapus?')";>Hapus</a>
             </td>
    </tr>
    <?php
     }?>
</table>
</body>
</html>