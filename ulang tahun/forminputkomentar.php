<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Form Komentar</title>
    <style>
        * {
            box-sizing: border-box;
            font-family: 'Segoe UI', sans-serif;
        }

        body {
            margin: 0;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            /* ==== GANTI FOTO BACKGROUND DI SINI ==== */
            background: url('pdi.jpg')center center fixed;
            background-size: cover;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.45);
        }

        .container {
            position: relative;
            z-index: 1;
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(4px);
            padding: 30px 40px;
            border-radius: 14px;
            box-shadow: 0 4px 25px rgba(0, 0, 0, 0.2);
            width: 400px;
        }

        h2 {
            text-align: center;
            margin-bottom: 10px;
            color: #333;
        }

        p {
            text-align: center;
            font-size: 13px;
            color: #555;
            margin-bottom: 25px;
        }

        label {
            display: block;
            font-weight: 500;
            margin-bottom: 5px;
            color: #333;
        }

        input,
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 14px;
            transition: 0.2s;
        }

        input:focus,
        textarea:focus {
            border-color: #4e9cff;
            outline: none;
            box-shadow: 0 0 0 2px rgba(78, 156, 255, 0.2);
        }

        .btn {
            width: 48%;
            padding: 10px;
            font-size: 14px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: 0.3s;
        }

        .btn-submit {
            background: #4e9cff;
            color: #fff;
        }

        .btn-submit:hover {
            background: #3a84e3;
        }

        .btn-reset {
            background: #ddd;
        }

        .btn-reset:hover {
            background: #ccc;
        }

        .btn-group {
            display: flex;
            justify-content: space-between;
        }
    </style>
</head>

<body>
    <div class="overlay"></div>
    <div class="container">
        <h2>📖 Buku Tamu</h2>
        <p>Silakan tinggalkan komentar dan saran Anda<br>untuk meningkatkan kualitas situs kami</p>

        <form action="tampilkomentar.php" method="post">
            <label for="nama">Nama Anda</label>
            <input type="text" id="nama" name="nama" placeholder="Masukkan nama Anda" required>

            <label for="email">Email Anda</label>
            <input type="email" id="email" name="email" placeholder="contoh@email.com" required>

            <label for="komentar">Komentar Anda</label>
            <textarea id="komentar" name="komentar" rows="5" placeholder="Tulis komentar Anda..." required></textarea>

            <div class="btn-group">
                <button type="submit" class="btn btn-submit">Kirim</button>
                <button type="reset" class="btn btn-reset">Batal</button>
            </div>
        </form>
    </div>
</body>

</html>