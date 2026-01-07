<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <h2>Dashboard</h2>
    <p>Selamat datang, <?php
                        session_start();

                        if (!isset($_SESSION['login'])) {
                            header("Location: ../auth/login.php");
                            exit();
                        } else {
                            echo $_SESSION['email'];
                        }
                        ?></p><br>
    <a href="../mahasiswa/index.php">Data Mahasiswa</a> |
    <a href="../auth/logout.php">Logout</a>
</body>

</html>