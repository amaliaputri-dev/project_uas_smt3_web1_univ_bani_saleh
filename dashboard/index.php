<?php
session_start();

// proteksi halaman
if (!isset($_SESSION['login'])) {
    header("Location: ../auth/login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
</head>

<body>

    <h2>Halo, <?= $_SESSION['email']; ?></h2>

    <p>Selamat datang di dashboard</p>

</body>

</html>