<?php 
session_start();
require 'indexco.php';
require 'item.php';
//Simpan pesanan baru
$sql1 = 'INSERT INTO orders (name, datecreation, status, username) VALUES ("New Order","'.date('Y-m-d').'",0,"acc2")';
mysqli_query($conn, $sql1);
$ordersid = mysqli_insert_id($conn); 
$cart = unserialize(serialize($_SESSION['cart'])); //Set $cart sebagai array, serialize () mengubah string menjadi array
for($i=0; $i<count($cart);$i++) {
$sql2 = 'INSERT INTO oderdetail (productid, orderid, price, quantity) VALUES ('.$cart[$i]->id.', '.$ordersid.', '.$cart[$i]->price.', '.$cart[$i]->quantity.')';
mysqli_query($conn, $sql2);
}
//Menghapus semua produk dalam keranjang
unset($_SESSION['cart']);
 ?>
 Thanks for buying products. Click <a href="indexco.php">here</a> to continue purchasing products.