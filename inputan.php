<?php
//Include file koneksi ke database
include "databaseconnect.php";
include "scripts.php";

$nama_pengunjung=$_POST["nama_pengunjung"];
$pesan=$_POST["pesan"];
$last_name=$_POST["last_name"];

//input kedalam tabel data_inputan
$sql = "insert into data_inputan (nama_pengunjung,pesan,last_name) values ('$nama_pengunjung','$pesan','$last_name')";

//
$hasil=mysqli_query($conn,$sql);
//kondisi berhasil atau tidak
//if($hasil){
//echo "Berhasil insert data";
//exit;
//} else {
//    echo "Gagal insert data";
//    exit;
//}
?>