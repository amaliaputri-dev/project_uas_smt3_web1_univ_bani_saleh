<?php
include '../config/koneksi.php';
$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM mahasiswa WHERE id=$id"));


if (isset($_POST['update'])) {
    mysqli_query($conn, "UPDATE mahasiswa SET nim='$_POST[nim]', nama='$_POST[nama]' WHERE id=$id");
    header("Location: index.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Mahasiswa</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <form method="POST">
        <input type="text" name="nim" value="<?= $data['nim'] ?>"><br><br>
        <input type="text" name="nama" value="<?= $data['nama'] ?>"><br><br>
        <input type="text" name="jurusan" value="<?= $data['jurusan'] ?>"><br><br>
        <select name="gender" required>
            <option value="">Pilih Jenis Kelamin</option>
            <option value="Laki-laki" <?= $data['gender'] == 'Laki-laki' ? 'selected' : '' ?>>Laki-laki</option>
            <option value="Perempuan" <?= $data['gender'] == 'Perempuan' ? 'selected' : '' ?>>Perempuan</option>
        </select><br><br>
        <button name="update">Update</button>
    </form>
</body>

</html>