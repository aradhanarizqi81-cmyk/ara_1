<?php
session_start();
if (isset($_SESSION['email'])) {
    header("Location: dashboard.php");
    exit;
}
?>
<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Login — Demo</title>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700&family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <div class="wrap">
        <section class="left">
            <div class="logo">gramedia_digital.</div>

            <h2 class="hero-title">IDEALISME ADALAH KEMEWAHAN TERAKHIR YANG HANYA DIMILIKI PEMUDA.</h2>
            <p class="hero-sub">-Ibrahim Datuk Tan Malaka.</p>

            <a class="view-perks" href="#">maksud dari</a>

            <div class="pills">
                <div class="pill p1">materialisme</div>
                <div class="pill p2">dialegtika</div>
                <div class="pill p3">logika</div>
            </div>
        </section>

        <aside class="right">
            <div class="card">
                <h1>Log in</h1>

                <button class="google-btn" type="button" onclick="alert('Demo Google Login - belum aktif')">
                    <img src="https://www.svgrepo.com/show/475656/google-color.svg" width="18" alt=""> Log In Using Google
                </button>

                <div class="divider">or</div>

                <form class="form" method="POST" action="process_login.php">
                    <input class="input" type="email" name="email" placeholder="Email address" required />
                    <input class="input" type="password" name="password" placeholder="Password" required />
                    <div class="subline"><a href="#">Forgot password?</a></div>
                    <button class="login-btn" type="submit">Log In</button>
                    <div class="signup">Need to create an account? <a href="register.php">Sign Up</a></div>
                </form>
            </div>
        </aside>
    </div>
</body>

</html>