<table border=1>
    <thead>
        <th>Nama</th>
        <th>NIM</th>
        <th>Action</th>
    </thead>
<tbody>
<?php 
    $conn   = new mysqli("localhost","root","","webdas");
    $sql    = "SELECT * FROM mahasiswa";
    $result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result)>0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $nim = $row['nim'];
        echo "<tr>";
        echo "<td>" . $row['nama']."</td>";
        echo "<td>" . $row['nim']."</td>";
        echo "<td>"."<a href='delete.php?nim=$nim'>Hapus Data</a> <a href='detail.php?nim=$nim'>Detail</a>"."</td>";
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
