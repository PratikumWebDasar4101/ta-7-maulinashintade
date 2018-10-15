<?php
$conn   = new mysqli("localhost","root","","webdas");
$nim=$_GET['nim'];
$sql ="DELETE from mahasiswa where nim =$nim ";

mysqli_query($conn, $sql);

if (mysqli_query($conn, $sql)) {
	echo "<h2>Terima Kasih</h2>";
	echo "<br>";
	echo "Record delected succesfull";
}else{
	echo "Error : " . $sql . "<br>" . mysqli_error($conn);
}
echo "<br>";
echo "<a href = input.php>Kembali Ke Halaman Awal</a>";
?>
