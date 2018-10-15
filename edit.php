<?php 
$nim        = $_GET['nim'];
$conn   = new mysqli("localhost","root","","webdas");
$mahasiswa  = mysqli_query($conn, "select * from mahasiswa where nim='$nim'");
$row        = mysqli_fetch_array($mahasiswa);
function ($value,$input){
    $result =  $value==$input?'checked':'';
   return $result;

}

 ?>
 <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="update.php" method="post">
	<table align="center">
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" value="<?php echo $row['nama']; ?>" name="nama"></td>
		</tr>
		<tr>
			<td>NIM</td>
			<td>:</td>
			<td><input type="text" value="<?php echo $row['nim']; ?>" name="nim"></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td><input type="radio" name="jk" value="Laki-Laki">Laki-laki
			<input type="radio" name="jk" value="Perempuan">Perempuan</td>
		</tr>
		<tr>
			<td>Program Studi</td>
			<td>:</td>
			<td>
				<select name="prodi">
					<option>Manajemen Informatika</option>
					<option>Ilmu Komunikasi</option>
					<option>Desain Interior</option>
					<option>Teknik Informatika</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Fakultas</td>
			<td>:</td>
			<td>
				<select name="fakultas">
					<option>Fakultas Ilmu Terapan</option>
					<option>Fakultas Komunikasi Bisnis</option>
					<option>Fakultas Ekonomi Bisnis</option>
					<option>Fakultas Industri Kreatif</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Asal</td>
			<td>:</td>
			<td><input type="text" value="<?php echo $row['asal']; ?>" name="asal"></td>
		</tr>
		<tr>
			<td>Moto Hidup</td>
			<td>:</td>
			<td><textarea name="moto"></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><input type="submit" name="submit" value="Simpan Perubahan"></td>
		</tr>
	</table>
</form>
</body>
</html>