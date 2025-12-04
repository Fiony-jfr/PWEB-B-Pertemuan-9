<?php include("koneksi.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <title>List Pendaftaran</title>
</head>
<body>

<h3>Siswa yang sudah mendaftar</h3>

<a href="form-daftar.php">+ Tambah Baru</a>
<br><br>

<table border="1" cellpadding="8">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Sekolah</th>
        </tr>
    </thead>

    <tbody>
        <?php
        $sql = "SELECT * FROM calon_siswa";
        $query = mysqli_query($db, $sql);
        $no = 1;

        while ($siswa = mysqli_fetch_array($query)) {
            echo "<tr>";
            echo "<td>".$no++."</td>";
            echo "<td>".$siswa['nama']."</td>";
            echo "<td>".$siswa['alamat']."</td>";
            echo "<td>".$siswa['gender']."</td>";
            echo "<td>".$siswa['agama']."</td>";
            echo "<td>".$siswa['sekolah']."</td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>

</body>
</html>
