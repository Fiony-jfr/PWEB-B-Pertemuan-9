<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pendaftaran Siswa Baru</title>
</head>
<body>

<h3>Formulir Pendaftaran Siswa Baru</h3>

<form action="proses-pendaftaran.php" method="POST">

    <p>
        <label>Nama: </label>
        <input type="text" name="nama" required>
    </p>

    <p>
        <label>Alamat: </label>
        <textarea name="alamat" required></textarea>
    </p>

    <p>
        <label>Jenis Kelamin: </label>
        <label><input type="radio" name="gender" value="laki-laki" required> Laki-laki</label>
        <label><input type="radio" name="gender" value="perempuan" required> Perempuan</label>
    </p>

    <p>
        <label>Agama: </label>
        <select name="agama">
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Hindu">Hindu</option>
            <option value="Budha">Budha</option>
        </select>
    </p>

    <p>
        <label>Sekolah Asal: </label>
        <input type="text" name="sekolah" required>
    </p>

    <p>
        <input type="submit" value="Daftar" name="daftar">
    </p>

</form>

</body>
</html>
