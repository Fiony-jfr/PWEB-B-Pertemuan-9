<?php
include("koneksi.php");

if (isset($_POST['daftar'])) {

    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $gender = $_POST['gender'];
    $agama = $_POST['agama'];
    $sekolah = $_POST['sekolah'];

    $sql = "INSERT INTO calon_siswa (nama, alamat, gender, agama, sekolah)
            VALUES ('$nama', '$alamat', '$gender', '$agama', '$sekolah')";
    $query = mysqli_query($db, $sql);

    if ($query) {
        header('Location: list-siswa.php?status=sukses');
    } else {
        header('Location: list-siswa.php?status=gagal');
    }
} else {
    die("Akses dilarang...");
}
?>
