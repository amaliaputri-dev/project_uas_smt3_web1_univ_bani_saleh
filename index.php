<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: auth/login.php");
    exit();
}

// ini auto redirect ke login.php kalo belum login