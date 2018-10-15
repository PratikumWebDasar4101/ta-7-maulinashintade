<h2>Berikut Data yang Berhasil di Edit</h2>
<table border=1>
    <thead>

        <th>Nama</th>
        <th>NIM</th>
        <th>Jenis Kelamin</th>
        <th>Program Studi</th>
        <th>Fakultas</th>
        <th>Asal</th>
        <th>Moto Hidup</th>
        <th>Action</th>
    </thead>
<tbody>
<?php 
    //$nama   = $_GET['nama '];
    $conn   = new mysqli("localhost","root","","webdas");
    $sql    = "SELECT * FROM mahasiswa";
    $result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result)>0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $nim = $row['nim'];
        echo "<tr>";
        echo "<td>" . $row['nama']."</td>";
        echo "<td>" . $row['nim']."</td>";
        echo "<td>" . $row['jk']."</td>";
        echo "<td>" . $row['prodi']."</td>";
        echo "<td>" . $row['fakultas']."</td>";
        echo "<td>" . $row['asal']."</td>";
        echo "<td>" . $row['moto']."</td>";
        echo "<td>"."<a href='edit.php?nim=$nim'>Edit</a> <a href='delete.php?nim=$nim'>Hapus Data</a>"."</td>";
        echo "</tr>";

    }
}else {

    echo "0 results";
}

?>
    </tbody>
</table>
<br>
<a href="input.php">Kembali ke Halaman Awal</a>