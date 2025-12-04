<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "pendaftaran_siswa";

$db = mysqli_connect($server, $user, $password, $database);

if (!$db) {
    die("Gagal terhubung: " . mysqli_connect_error());
}
?>
