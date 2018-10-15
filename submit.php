<?php 
$nama		= $_POST['nama'];
$nim		= $_POST['nim'];
$jk			= $_POST['jk'];
$prodi		= $_POST['prodi'];
$fakultas	= $_POST['fakultas'];
$asal		= $_POST['asal'];
$moto		= $_POST['moto'];

$conn	= new mysqli("localhost","root","","webdas");

$sql	= "INSERT INTO mahasiswa(nama, nim, jk, prodi, fakultas, asal, moto) 
		VALUES ('$nama','$nim','$jk','$prodi','$fakultas','$asal','$moto')";
if (mysqli_query($conn, $sql)) {
	echo "Berhasil terhubung ke database";
}else{
	echo "Gagal terhubung ke database : " . $sql . "<br>" . mysqli_error($conn);
	
}
echo "<br>";
 ?>
 <a href="list.php">Silahkan Lihat Data Anda</a>