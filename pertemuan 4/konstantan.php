<?php 
##########################################
# Pertemuan : 4
# Nama File : Konstanta php
##########################################

echo "Menghitung Volume Bola \br";
echo "------------------------\br";

//Menggunakan Const 
const PI = 3.14 ;
echo "Masukkan Jari-Jari bola : ";
$r = 6;
$volume = PI * $r * $r * $r ;
echo "rumus Volume bola adalah V = 3.14 *r *r *r \br";
echo "Volume bola adalah ". $volume . "\br";

// Menggunakan fungsi define ()
// parameter 1 menyatakan nama  konstanta , 
// parameter 2 menyatakan nilai konstanta
echo "Menghitung Luas Permukaan Bola \br";
echo "----------------------\br";

define('phi' , 3.14);
echo "Masukkan Jari-Jari bola : ";
$rl = 9;
$luas_permukaan_bola = 4* PI * $rl * $rl;
echo "Luas Permukaan bola adalah " . $luas_permukaan_bola . "\br";

?>