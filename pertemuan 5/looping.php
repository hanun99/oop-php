<?php
################################



//for
for ($i=0; $i<5; $i++){
    echo "Baris ke-$i\<br>";
}


//while
$x = 1;
while($x <= 5){
    echo "The number is; $x <br>";
    $x++;
}
echo "<br>";
//Example 2 -while
$x = 0;

while($x <= 100) {
    echo "The number is: $x <br>";
    $x+=10;
}
echo "<br>";
//do ... while
/*jalankan dulu baru cek kondisi */
//example 1
$x = 10;
do {
    echo "The number is : $x <br>";
    $x++;
} while ($x <= 5);


//foreach 
//example 1 
$colors = array("red" , "green" , "blue" , "yellow");

foreach ($colors as $value);{
echo "$value <br>";
}

echo "<br>";

//example 2
/*
perbedaan dengan format sebelumnya ada di variable
perantara kedua, yakni variable $key,
Variable $key akan menampung nilai key array.
berikut contoh penggunaannya:
*/
$age = array(
    "peter"=> "35",
    "Ben"=> "37",
    "Joe"=> "43");

    foreach($age as $x =>$val){
        echo "$x = $val<br>";
    }

?>