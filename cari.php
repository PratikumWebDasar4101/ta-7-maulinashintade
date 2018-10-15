<form action="" method="post">
	<input type="text" name="cari" placeholder="Cari berdasarkan NIM">
	<input type="submit" name="submit" value="Cari">
</form>
<table border="1">
	<tr>
		<td>NIM</td>
		<td>Nama</td>
	</tr>

<?php 
if (isset($_POST['submit'])) {
	$cari = $_POST['cari'];
	$conn = new mysqli("localhost","root","","webdas");
	$sql = "SELECT * FROM mahasiswa WHERE nim = '$cari'";

	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			//$nim = $row['nim'];
			echo "<tr>";
			echo "<td>" . $row['nama']. "</td>";
			echo "<td>" . $row['nim']. "</td>";
			echo "</tr>";
		}
	}else{
		echo "0 result";
	}
}

 ?>
 </table>
 <br>
 <a href="input.php">Kembali ke Halaman Awal</a>