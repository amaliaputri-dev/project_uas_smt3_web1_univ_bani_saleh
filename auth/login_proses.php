<?php
session_start();
include '../config/koneksi.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

// validasi POST
if (!isset($_POST['email'], $_POST['password'])) {
    header("Location: login.php");
    exit();
}

$email    = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT id FROM users WHERE email = ? AND password = MD5(?)";
$stmt = $conn->prepare($sql);

if (!$stmt) {
    die("Prepare error: " . $conn->error);
}

$stmt->bind_param("ss", $email, $password);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows === 1) {
    $_SESSION['login'] = true;
    $_SESSION['email'] = $email;

    header("Location: ../dashboard/index.php");
    exit();
} else {
    header("Location: login.php?error=1");
    exit();
}
