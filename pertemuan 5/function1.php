<?php
function salam($waktu, $nama){
    return "Selamat " . $waktu . " " . $nama;
}

?>
<!DOCTYPE html>
<html>
<head>
   <title>Latihan function</title>
</head>
<body>
   <h1><?php echo salam("pagi", "Hanun"); ?></h1>
</body>
</html>
     