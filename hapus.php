<?php
require "koneksi.php";

$id = $_GET['id'];

$sql = "DELETE FROM calon_siswa WHERE id=$id";
mysqli_query($conn, $sql);

header("Location: list-siswa.php");
?>
