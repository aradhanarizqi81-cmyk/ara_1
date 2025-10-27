<?php
session_start();
require 'db.php';

$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

if (empty($email) || empty($password)) {
    echo "<script>alert('Isi semua field!');window.location='index.php';</script>";
    exit;
}

// gunakan MD5 (demo saja, untuk keamanan nyata pakai password_hash)
$sql = "SELECT * FROM users WHERE email=? AND password=MD5(?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $email, $password);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $_SESSION['email'] = $email;
    echo "<script>alert('Login berhasil!');window.location='dashboard.php';</script>";
} else {
    echo "<script>alert('Email atau password salah!');window.location='index.php';</script>";
}

$stmt->close();
$conn->close();
