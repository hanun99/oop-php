// <!-- Exampel 2 -->
// <?php
// $month = 8;

// switch($month){
//     case 1:
//     case 2:
//     case 3:
//     case 4:
//     case 5:
//     case 6:
    
// }
<?php 
$favcolor = "blue";

switch 

//Exampel //
<?php
$month = 8;
    switch($month) {
        case 1:
        case 2:
        case 3:
        case 4:
        case 5:
        case 6:
            echo "Bulan $month termasuk Semester 1";
            break;
        case 7:
        case 8:
        case 9:
        case 10:
        case 11:
        case 12:
            echo "Bulan $month termasuk Semester 2";
            break;
            default: 
            echo "Tidak ada bulan ". $month;
    }