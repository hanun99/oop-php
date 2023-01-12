<?php
//pertemuan 3 - Latihan PHP
// Operator

// Operator Aritmatika
//+, -, *, /,% 

// $a = 10;
// $b = 20;

// $total = $a + $b;
// echo $total;

// Operator Assigment
// $speed = 83 + 10; // Operasi aritmatika
// $speed += 10; // Operasi penugasan / assigment
// echo $speed;

//Operator Relation
$a = 6;
$b = 6;

// menggunakan operator lebi besar
$c = $a > $b;
echo "$a > $b : $c";
echo "<br>";

// menggunakan operator lebi kecil
$c = $a < $b;
echo "$a < $b : $c";
echo "<br>";

// menggunakan operator relasi sama dengan 
$c= $a == $b;
echo "$a == $b: $c";
echo "<br>";

// menggunakan operator relasi tidak sama dengan 
$c= $a != $b;
echo "$a != $b: $c";
echo "<br>";

// menggunakan operator relasi lebih kecil atau sama dengan 
$c= $a <= $b;
echo "$a <= $b: $c";
echo "<br>";

// menggunakan operator relasi lebih besar atau sama dengan 
$c= $a >= $b;
echo "$a >= $b: $c";
echo "<br>";

//Operator Logika
// &&, || , !

$x = 10;
var_dump($x > 20 || $x %2 ==0);
var_dump(!$x > 20);
var_dump($x <=! 20);

?>