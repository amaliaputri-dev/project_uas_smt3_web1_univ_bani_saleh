<?php
session_start();
include '../config/koneksi.php';


$data = mysqli_query($conn, "SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>

    <h2>Data Mahasiswa</h2>
    <a href="tambah.php">Tambah</a>
    <a href="../auth/logout.php">Logout</a>

    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Jurusan</th>
                <th>Jenis Kelamin</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody id="tbody">
            <script>
                function loadData() {
                    fetch('json.php')
                        .then(res => res.json())
                        .then(data => {
                            let html = '';
                            data.forEach((m, i) => {
                                html += `
                <tr>
                    <td>${i + 1}</td>
                    <td>${m.nim}</td>
                    <td>${m.nama}</td>
                    <td>${m.jurusan}</td>
                    <td>${m.gender}</td>
                    <td>
                        <a href="edit.php?id=${m.id}">Edit</a> |
                        <a href="#" onclick="hapus(${m.id})">Hapus</a>
                    </td>
                </tr>
                `;
                            });
                            document.getElementById('tbody').innerHTML = html;
                        });
                }

                function hapus(id) {
                    if (confirm('Yakin hapus data?')) {
                        fetch('hapus.php?id=' + id)
                            .then(() => loadData());
                    }
                }

                loadData();
            </script>

        </tbody>
    </table>
</body>

</html>