<?php
//pembuatan fungsi
function perkalian($angka1, $angka2)
{
   $a= $angka1;
   $b= $angka2;
   $hasil= $a*$b;
   return $hasil;
}
 
//pemanggilan fungsi
$hasil=perkalian(4,5);
echo "Perkalian 4 x 5 adalah $hasil";
echo "<br />";
echo "Perkalian 7 x 2 adalah ".perkalian(7,2);
echo "<br>";
echo "<br>";
?>



<?php
//pemanggilan fungsi
echo "Luas Lingkaran dengan jari-jari 7cm = ".luas_lingkaran(7)."cm";
 
//pembuatan fungsi
function luas_lingkaran($jari2)
{
   return M_PI*$jari2*$jari2;
} 
?>


<?php
$self = $_SERVER['REQUEST_URI'];
function display_login_form(){ 
?>
 
    <form action="<?php echo $self; ?>" method='post'>
    <label for="username">username</label>
    <input type="text" name="username" id="username">
    <label for="password">password</label>
    <input type="password" name="password" id="password">
    <input type="submit" name="submit" value="submit">
    </form>    
 
<?php } ?>
<?php
display_login_form();
?>

<?php
    // Nama function adalah "LuasSegitiga"
    // $a adalah parameter 1
    // $t adalah parameter 2
    // Tiap parameter dipisahkan dengan tanda "," (koma)
    function LuasSegitiga($a, $t){
        // Definisi variabel hasil
        $hasil = 0;
        // Perhitungan Luas Segitiga
        $hasil = 0.5*$a*$t;
        // Mengembalikan hasil nilai perhitungan
        return $hasil;
    }
    // MEMANGGIL FUNCTION
    $alas1 = 6;
    $tinggi1 = 10;
    // Pada Saat Pemanggilan function LuasSegitiga
    // $alas1 menjadi parameter 1
    // $tinggi1 menjadi parameter 2
    $luas1 = LuasSegitiga($alas1, $tinggi1);
    echo $luas1.'<br />'; // Hasil = 30
    $alas2 = 10;
    $tinggi2 = 8;
    $luas2 = LuasSegitiga($alas2, $tinggi2);
    echo $luas2.'<br />'; // Hasil = 40
?>
<?php
 function hitung_luas_segitiga($alas, $tinggi) {
 $luas_segitiga = ($alas * $tinggi)/2;
 return $luas_segitiga;
 }
 
 function hitung_luas_persegi($panjang, $lebar){
 $luas_persegi = $panjang * $lebar;
 return $luas_persegi;
 }
 
 $segitiga = hitung_luas_segitiga(4,3);
 $persegi  = hitung_luas_persegi (5,3);
 
 echo "Luas Segitiga : $segitiga<br />";
 echo "Luas Persegi Panjang : $persegi<br />";
 
?>
