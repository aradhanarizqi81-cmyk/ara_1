<?php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    if (!empty($email) && !empty($password)) {
        $sql = "INSERT INTO users (email, password) VALUES (?, MD5(?))";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $email, $password);

        if ($stmt->execute()) {
            echo "<script>alert('Registrasi berhasil! Silakan login.');window.location='index.php';</script>";
        } else {
            echo "<script>alert('Email sudah terdaftar atau error.');</script>";
        }

        $stmt->close();
    } else {
        echo "<script>alert('Isi semua field!');</script>";
    }
}
?>

<!doctype html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="wrap">
        <div class="card" style="max-width:400px;margin:auto;">
            <h1>Sign Up</h1>
            <form class="form" method="POST" action="">
                <input class="input" type="email" name="email" placeholder="Email address" required />
                <input class="input" type="password" name="password" placeholder="Password" required />
                <button class="login-btn" type="submit">Register</button>
                <div class="signup">Already have an account? <a href="index.php">Login</a></div>
            </form>
        </div>
    </div>
</body>

</html>