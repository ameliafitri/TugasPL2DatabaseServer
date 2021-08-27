<?php

// Koneksi ke Database
include 'koneksi.php';
$db = new Database();
$con=$db->Connect();
 
// Ambil data berdasarkan Kode Dosen
$id_dosen= $_GET['id_dosen'];
 
// Perintah delete data berdasarkan Kode Dosen
$query=mysqli_query($con,"DELETE FROM dosen WHERE id_dosen=$id_dosen")or die(mysql_error());
 
//kembali ke latihan5
header('location:latihan5.php');
?>