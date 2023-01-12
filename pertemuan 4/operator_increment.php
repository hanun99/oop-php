<?php 
#######################################


###############################################


#Pre-increment
echo "<h3> Preincrement</h3>";
$a = 0;
$i = 1;
$a = ++$i; // i = 1 + i; a = i
echo "a = " . $a . "<br>";
echo "i = " . $i;

echo "<br>";
#Post-increment 
echo "<h3>Postincrement</h3>";
$a = 0;
$i = 1;
$a = $i++; // a i; i + i + 1;
echo "a = " . $a . "<br>";
echo "i = " . $i;

?>