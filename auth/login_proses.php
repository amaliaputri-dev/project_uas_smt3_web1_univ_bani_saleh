<?php
include '../config/koneksi.php';
session_start();

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

$query = "SELECT * FROM users WHERE email = '$username' AND password = '$password'";
$conn = mysqli_connect("localhost", "root", "", "uas_univ");
$stmt = $conn->prepare($query);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows > 0) {
    $_SESSION['login'] = true;
    header("Location: ../dashboard/index.php");
    exit();
} else {
    echo "<script>alert('Login gagal. Periksa username dan password Anda.'); window.location.href = 'login.php';</script>";
}

$stmt->close();
