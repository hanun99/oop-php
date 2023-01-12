<?php
$student = ["Hanun Hafizhoh", "2277056675" ,
"IT RPL" , "hanunhfzhhn@gmail.com"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <title>Daftar Student</title>
   </head>
 <body>
     <?php foreach($student as $value)
     {
        echo "$value <br>";
     }
     ?>
</body>
 </html>