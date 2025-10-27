<?php
$servername = "localhost";
$username = "root"; // default XAMPP
$password = "";
$dbname = "login_demo";

$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
