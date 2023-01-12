<?php
//membuat fungsi / function
function perkenalan(){
    echo "Assalamu'alaikum, <br>";
    echo "perkenalkan, Nama aku Hanun <br>";
    echo "Salam kenal yyaa.... :> <br>"; 
}
echo "<br>";



//memangil fungsi yang sudah di buat 
perkenalan();
echo "<br>";
//memanggil kembalo fungsi
perkenalan();

echo "<br>";
//menggunakan perameter untuk memasukkan sebuah nilai kedalam function
function pesan($salam, $nama)
{
   echo $salam. ", <br>";
   echo "perkenalkan,nama aku Hanun Hafizhoh <br>";
   echo "Selamat Berteman... :> <br>";
   echo "<hr>"; 
}

pesan("Hai", "Hanun");

$salam = "Selamat Pagi";
$nama = "Hanun Hafizhoh";
pesan($salam, $nama);

//mengembalikan nilai dengan return
function hitungUmur($thn_lahir)
{
     $umur = date('Y') - $thn_lahir;
     return $umur;
}

echo "Umur saya adalah <br>" .hitungumur(2007). " tahun";
echo "<hr>";
?>