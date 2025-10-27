<html>

<head>
    <title>Form Komentar</title>
</head>

<body>
    <h1>BUKU TAMU</h1>
    <p>Komentar dan Saran Anda Sangat Kami Butuhkan Untuk Meningkatkan Kualitas Situs Kami!</p>

    <form action="tampilkomentar.php" method="post">
        <label for="nama">Nama Anda</label>
        <input type="text" id="nama" name="nama" size="50" required><br><br>

        <label for="email">Email Anda</label>
        <input type="text" id="email" name="email" size="50" required><br><br>

        <label for="komentar">Komentar Anda</label><br>
        <textarea id="komentar" name="komentar" rows="5" cols="48" required></textarea><br><br>

        <input type="submit" value="Kirim">
        <input type="reset" value="Batal">
    </form>
</body>

</html>