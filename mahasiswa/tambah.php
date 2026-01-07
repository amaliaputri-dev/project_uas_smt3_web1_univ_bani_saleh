<?php
include '../config/koneksi.php';


if (isset($_POST['simpan'])) {
    mysqli_query($conn, "INSERT INTO mahasiswa VALUES (NULL,'$_POST[nim]','$_POST[nama]','$_POST[jurusan]','$_POST[gender]')");
    header("Location: index.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <form method="POST">
        <input type="text" name="nim" placeholder="NIM" required><br><br>
        <input type="text" name="nama" placeholder="Nama" required><br><br>
        <input type="text" name="jurusan" placeholder="Jurusan" required><br><br>
        <select name="gender" required>
            <option value="">Pilih Jenis Kelamin</option>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select><br><br>
        <button name="simpan">Simpan</button>
    </form>
</body>

</html>