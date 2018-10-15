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
    $nim    = $_GET['nim'];
    $conn   = new mysqli("localhost","root","","webdas");
    $sql    = "SELECT * FROM mahasiswa WHERE nim = '$nim'";
    $result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result)>0) {
    while ($row = mysqli_fetch_assoc($result)) {
        //$nim = $row['nim'];
        echo "<tr>";
        echo "<td>" . $row['nama']."</td>";
        echo "<td>" . $row['nim']."</td>";
        echo "<td>" . $row['jk']."</td>";
        echo "<td>" . $row['prodi']."</td>";
        echo "<td>" . $row['fakultas']."</td>";
        echo "<td>" . $row['asal']."</td>";
        echo "<td>" . $row['moto']."</td>";
        echo "<td>"."<a href='edit.php?nim=$nim'>Edit</a>"."</td>";
        echo "</tr>";

    }
}else {

    echo "0 results";
}

?>
    </tbody>
</table>
<br>
<a href="input.php">Input Kembali Data</a>||<a href="cari.php">Cari Data Anda</a>
