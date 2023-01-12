<?php
//koneksi Database
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "bioskop1";

$koneksi = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if($koneksi){
    echo "koneksi Sukses";
} else {
    echo "Koneksi Gagal";
}

$conn = mysqli_connect("localhost", "root", "", "bioskop1");

function query($query){
 global $conn;
 $result=mysqli_query($conn, "SELECT * FROM user register");
 $rows=[];
 while($row = mysqli_fetch_assoc($result)){
    $rows[] = $row;
 }
 return $rows;
}

function tambah($data){
    global $conn;
     $id = htmlspecialchars($data["id"]);
    $nama = htmlspecialchars($data["Full Name"]);
     $username = htmlspecialchars($data["Username"]);
      $hp = htmlspecialchars($data["No Hp"]);
       $email = htmlspecialchars($data["Email"]);
        $password = htmlspecialchars($data["Password"]);
    $query = "INSERT INTO user register VALUES('', '$id','$nama', '$username', '$hp', '$email', '$password')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}   

function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM user register WHERE id = $id");

    return mysqli_affected_rows($conn);
}
?>
