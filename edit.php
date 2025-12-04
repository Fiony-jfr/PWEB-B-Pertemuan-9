<?php
require "koneksi.php";

$id = $_GET['id'];

$sql = "SELECT * FROM calon_siswa WHERE id=$id";
$query = mysqli_query($conn, $sql);
$siswa = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Edit Data Siswa</h2>

<form action="edit.php" method="POST">
    <input type="hidden" name="id" value="<?= $siswa['id']; ?>">

    <label>Nama:</label>
    <input type="text" name="nama" value="<?= $siswa['nama']; ?>" required><br>

    <label>Alamat:</label>
    <textarea name="alamat" required><?= $siswa['alamat']; ?></textarea><br>

    <label>Jenis Kelamin:</label>
    <select name="jenis_kelamin">
        <option <?= $siswa['jenis_kelamin']=="Laki-laki"?"selected":"" ?>>Laki-laki</option>
        <option <?= $siswa['jenis_kelamin']=="Perempuan"?"selected":"" ?>>Perempuan</option>
    </select><br>

    <label>Agama:</label>
    <select name="agama">
        <option><?= $siswa['agama']; ?></option>
        <option>Islam</option>
        <option>Kristen</option>
        <option>Katolik</option>
        <option>Hindu</option>
        <option>Buddha</option>
        <option>Konghucu</option>
    </select><br>

    <label>Sekolah Asal:</label>
    <input type="text" name="sekolah_asal" value="<?= $siswa['sekolah_asal']; ?>" required><br>

    <button name="update">Update</button>
</form>

<?php
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah = $_POST['sekolah_asal'];

    $sql = "UPDATE calon_siswa SET 
        nama='$nama', alamat='$alamat', jenis_kelamin='$jk',
