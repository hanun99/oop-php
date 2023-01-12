<?php
//koneksi Database
$conn = mysqli_connect("localhost", "root", "", "bioskop");

function query($query){
 global $conn;
 $result=mysqli_query($conn, "SELECT * FROM siswi");
 $rows=[];
 while($row = mysqli_fetch_assoc($result)){
    $rows[] = $row;
 }
 return $rows;
}

function tambah($data){
    global $conn;
    $nama = htmlspecialchars($data["nama"]);
     $nis = htmlspecialchars($data["nis"]);
      $email = htmlspecialchars($data["email"]);
       $jurusan = htmlspecialchars($data["jurusan"]);
        $gambar = htmlspecialchars($data["gambar"]);
    $query = "INSERT INTO siswi VALUES('' ,'$nama', '$nis', '$email', '$jurusan', '$gambar')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}   

function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM siswi WHERE id = $id");

    return mysqli_affected_rows($conn);
}
?>