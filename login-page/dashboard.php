<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: index.php");
    exit;
}
?>
<!doctype html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>

<body style="font-family:Arial;text-align:center;margin-top:80px;">
    <h2>Selamat datang, <?php echo htmlspecialchars($_SESSION['email']); ?> 🎉</h2>
    <a href="logout.php">Logout</a>
</body>

</html>