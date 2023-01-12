<?php 
#######################################


###############################################


#Pre-increment
echo "<h3> predecrement</h3>";
$a = 0;
$i = 1;
$a = --$i; // i = 1 + i; a = i
echo "a = " . $a . "<br>";
echo "i = " . $i;

echo "<br>";
#Post-increment 
echo "<h3>Postdecrement</h3>";
$a = 0;
$i = 1;
$a = $i--; // a i; i + i + 1;
echo "a = " . $a . "<br>";
echo "i = " . $i;

?>