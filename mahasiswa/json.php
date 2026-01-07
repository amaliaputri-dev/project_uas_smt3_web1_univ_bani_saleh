<?php
session_start();
header("Content-Type: application/json");
include '../config/koneksi.php';

if (!isset($_SESSION['login'])) {
    echo json_encode([]);
    exit;
}

$data = mysqli_query($conn, "SELECT * FROM mahasiswa");
$result = [];

while ($row = mysqli_fetch_assoc($data)) {
    $result[] = $row;
}

echo json_encode($result);
