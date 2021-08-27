<h1>Ubah Data Dosen</h1>

<?php
// Koneksi ke Database memanggil file Koneksi.php
include 'koneksi.php';
$db = new Database();
$con=$db->Connect();
$id_dosen= $_GET['id_dosen'];

// Mengambil data dari Database
$query=mysqli_query($con,"SELECT * FROM dosen WHERE id_dosen='$id_dosen'")or die(mysql_error());
while($data=mysqli_fetch_array($query)){

// Perintah update ke Database
if(isset($_POST['pencet']))
{
$nama= $_POST['nama'];
$query=mysqli_query($con,"UPDATE dosen SET id_dosen='$id_dosen', nama='$nama' WHERE id_dosen='$id_dosen'");
header('location:latihan5.php');
}

?>

<form action="" method="POST">
Kode Dosen <br>
<input type="text" name="id_dosen" value="<?php echo $data['id_dosen'] ?>" disabled><br>
Nama <br>
<input type="text" name="nama" value="<?php echo $data['nama'] ?>"><br>
<br>
<input type="submit" name="pencet" value="Simpan">

<input type='button' onclick=location.href='latihan5.php' value='Batal' />
</form>

<?php } ?>
