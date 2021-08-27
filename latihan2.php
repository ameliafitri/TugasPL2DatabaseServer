<h1>Input Mahasiswa</h1>

<?php

// Koneksi ke Database memanggil file koneksi.php
include 'koneksi.php';
$db = new Database();
$con=$db->Connect();

// Perintah insert data ke Database jika tombol pencet ditekan
if(isset($_POST['pencet']))
{
$query=mysqli_query($con,"insert into mahasiswa values(
'".$_POST['npm']."',
'".$_POST['nama']."'
)");

header('location:latihan1.php');
}
?>
<form action="" method="POST">
NPM <br>
<input type="text" name="npm"><br>
Nama <br>
<input type="text" name="nama"><br>
<br>
<input type="submit" name="pencet" value="Simpan">
<input type='button' onclick=location.href='latihan1.php' value='Batal' />
</form>