<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Pet Care - Register</title>

    <style>
/* =========================================================
   FONT
========================================================= */

@import url('https://fonts.googleapis.com/css2?family=Great+Vibes&family=Playfair+Display:wght@500;600;700&family=Poppins:wght@400;500;600;700&display=swap');


/* =========================================================
   RESET
========================================================= */

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}


html,
body {
    width: 100%;
    height: 100%;
}


body {
    font-family: 'Poppins', sans-serif;
    background: #000;
}


/* =========================================================
   PAGE
========================================================= */

.login-page {
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background: #000;
}


.page-wrapper {
    width: 100%;
    min-height: 100vh;

    display: flex;
    flex-direction: column;
}


/* =========================================================
   HEADER
========================================================= */

.top-header {

    width: 100%;
    height: 135px;

    flex-shrink: 0;

    display: flex;
    align-items: center;
    justify-content: space-between;

    padding: 10px 30px 10px 18px;

    background:
        linear-gradient(
            90deg,
            rgba(239, 192, 205, 0.96),
            rgba(190, 155, 166, 0.96)
        );

    box-shadow:
        0 3px 8px rgba(0, 0, 0, 0.18);

    position: relative;
    z-index: 5;
}


/* =========================================================
   HEADER LEFT
========================================================= */

.header-left {

    display: flex;
    align-items: center;

    height: 100%;
}


.header-logo {

    width: 82px;
    height: 82px;

    object-fit: contain;
}


.header-divider {

    width: 2px;
    height: 50px;

    background: rgba(70, 60, 60, 0.7);

    margin: 0 14px;
}


.header-title {

    font-family: 'Playfair Display', serif;

    font-size: 32px;
    font-weight: 600;

    letter-spacing: 2px;

    color: #52654e;

    white-space: nowrap;
}


/* =========================================================
   HEADER CENTER
========================================================= */

.header-center {

    display: flex;
    align-items: center;
    justify-content: center;

    gap: 12px;

    position: absolute;

    left: 50%;
    transform: translateX(-50%);
}


.header-login,
.header-register {

    display: block;

    height: 65px;

    transition: 0.2s ease;
}


.header-login img,
.header-register img {

    height: 100%;
    width: auto;

    display: block;
}


.header-login:hover,
.header-register:hover {

    transform: translateY(-2px);
}


/* =========================================================
   WELCOME BADGE
========================================================= */

.header-right {

    display: flex;
    align-items: center;
    justify-content: center;
}


.welcome-badge {

    height: 92px;
    width: auto;

    object-fit: contain;
}


/* =========================================================
   MAIN
========================================================= */

.main-login-area {

    flex: 1;

    position: relative;

    display: flex;
    justify-content: center;
    align-items: center;

    padding: 35px 30px;

    /*
       Background foto produk.
       Jika nama file background kamu berbeda,
       tinggal ganti nama file di bawah.
    */

    background-color: #f4dfe5;

    background-image:
        radial-gradient(
            rgba(150,105,120,0.16) 1.4px,
            transparent 1.4px
        );

    background-size: 24px 24px;
    background-position: center;
}


/* =========================================================
   LOGIN CARD
========================================================= */

.login-card {

    width: 810px;
    max-width: 90%;

    background:
        rgba(246, 232, 233, 0.93);

    border: 1px solid rgba(90, 70, 70, 0.55);

    border-radius: 30px;

    box-shadow:
        0 8px 18px rgba(0,0,0,0.22);

    overflow: hidden;
}


/* =========================================================
   CARD INNER
========================================================= */

.login-card-inner {

    padding:

        18px
        60px
        20px
        60px;
}


/* =========================================================
   CARD LOGO
========================================================= */

.card-logo-area {

    text-align: center;

    display: flex;
    flex-direction: column;
    align-items: center;

    margin-bottom: 12px;
}


.card-logo {

    width: 145px;
    height: 70px;

    object-fit: contain;
}


/* =========================================================
   WELCOME TEXT
========================================================= */

.welcome-text {

    margin-top: -3px;

    font-family: 'Great Vibes', cursive;

    font-size: 30px;

    line-height: 1;

    color: #687c6b;
}


/* =========================================================
   FO ACCESS
========================================================= */

.fo-access {

    margin-top: 4px;

    min-width: 190px;

    padding: 4px 22px;

    background:
        linear-gradient(
            90deg,
            #dfc0c4,
            #e4c5c9
        );

    border-radius: 20px;

    color: #111;

    font-family: 'Playfair Display', serif;

    font-size: 19px;
    font-weight: 700;

    letter-spacing: 2px;

    line-height: 1.1;
}


/* =========================================================
   FORM
========================================================= */

.login-form {

    width: 100%;

    display: flex;
    flex-direction: column;

    gap: 14px;
}


/* =========================================================
   FORM GROUP
========================================================= */

.form-group {

    display: flex;
    flex-direction: column;

    gap: 5px;
}


.form-group label {

    margin-left: 22px;

    font-family: 'Poppins', sans-serif;

    font-size: 18px;
    font-weight: 500;

    color: #202020;
}


/* =========================================================
   INPUT
========================================================= */

.login-page input {

    width: 100%;
    height: 50px;

    border: none;
    outline: none;

    padding: 0 23px;

    border-radius: 30px;

    background:
        linear-gradient(
            90deg,
            #f0caca,
            #f0cccc
        );

    color: #333;

    font-family: 'Poppins', sans-serif;

    font-size: 17px;

    box-shadow:
        4px 5px 5px rgba(0,0,0,0.18);

    transition: 0.2s ease;
}


.login-page input::placeholder {

    color: #e3d5d5;

    opacity: 1;
}


.login-page input:focus {

    box-shadow:
        4px 5px 7px rgba(0,0,0,0.22);
}


/* =========================================================
   PASSWORD
========================================================= */

.password-wrapper {

    width: 100%;

    position: relative;

    display: flex;
    align-items: center;
}


.password-wrapper input {

    padding-right: 65px;
}


/* =========================================================
   FORM BOTTOM
========================================================= */

.form-bottom {

    display: flex;

    justify-content: space-between;

    align-items: flex-end;

    margin-top: 1px;

    padding: 0 22px;
}


/* =========================================================
   LOGIN LINKS
========================================================= */

.login-links {

    display: flex;

    flex-direction: column;

    gap: 5px;
}


.login-links a {

    color: #6b8070;

    text-decoration: none;

    font-size: 18px;
    font-weight: 500;

    line-height: 1.35;
}


.login-links a:hover {

    text-decoration: underline;
}


/* =========================================================
   LOGIN BUTTON
========================================================= */

.btn-login {

    min-width: 150px;
    height: 43px;

    border: none;

    border-radius: 25px;

    background:
        linear-gradient(
            90deg,
            #d6d2aa,
            #c9c4a0
        );

    color: #111;

    font-family: 'Poppins', sans-serif;

    font-size: 19px;
    font-weight: 700;

    letter-spacing: 3px;

    cursor: pointer;

    box-shadow:
        4px 5px 5px rgba(0,0,0,0.22);

    transition: 0.2s ease;
}


.btn-login:hover {

    transform: translateY(-2px);

    box-shadow:
        4px 7px 8px rgba(0,0,0,0.25);
}


/* =========================================================
   BACK TO HOME
========================================================= */

.back-to-home {

    height: 49px;

    display: flex;

    justify-content: center;
    align-items: center;

    background:
        linear-gradient(
            90deg,
            #a6878c,
            #c1a5a8
        );

    color: #080808;

    text-decoration: none;

    font-family: 'Poppins', sans-serif;

    font-size: 21px;
    font-weight: 700;

    letter-spacing: 5px;

    border-top:
        1px solid rgba(70,50,50,0.25);

    transition: 0.2s ease;
}


.back-to-home:hover {

    background:
        linear-gradient(
            90deg,
            #94757a,
            #b5969a
        );
}


/* =========================================================
   FOOTER
========================================================= */

.bottom-footer {

    height: 75px;

    flex-shrink: 0;

    display: flex;
    align-items: center;

    padding-left: 20px;

    background:
        linear-gradient(
            90deg,
            rgba(232, 184, 197, 0.96),
            rgba(168, 135, 144, 0.96)
        );
}


.footer-logo {

    width: 115px;
    height: auto;

    object-fit: contain;

    opacity: 0.85;
}


/* =========================================================
   RESPONSIVE
========================================================= */

@media (max-width: 1100px) {

    .header-title {
        font-size: 27px;
    }

    .header-center {
        gap: 5px;
    }

    .header-login,
    .header-register {
        height: 55px;
    }

    .welcome-badge {
        height: 75px;
    }

    .login-card {
        width: 720px;
    }

}


@media (max-width: 800px) {

    .top-header {
        height: 100px;
        padding: 8px 15px;
    }

    .header-logo {
        width: 60px;
        height: 60px;
    }

    .header-divider,
    .header-title {
        display: none;
    }

    .header-center {
        position: static;
        transform: none;
    }

    .header-login,
    .header-register {
        height: 48px;
    }

    .welcome-badge {
        height: 60px;
    }

    .login-card {
        width: 95%;
    }

    .login-card-inner {
        padding: 20px 30px;
    }

    .form-bottom {
        padding: 0 10px;
    }

}


@media (max-width: 550px) {

    .top-header {
        justify-content: center;
    }

    .header-left,
    .header-right {
        display: none;
    }

    .main-login-area {
        padding: 15px;
    }

    .login-card {
        max-width: 100%;
    }

    .login-card-inner {
        padding: 20px;
    }

    .form-bottom {
        flex-direction: column;
        gap: 15px;
        align-items: stretch;
    }

    .btn-login {
        width: 100%;
    }

}
/* Coded password eye - no image asset */
.eye-button {
    position: absolute;
    right: 14px;
    top: 50%;
    transform: translateY(-50%);
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 0;
    border: 0;
    background: transparent;
    cursor: pointer;
}

.eye-svg {
    width: 25px;
    height: 25px;
    display: block;
    fill: none;
    stroke: #333;
    stroke-width: 1.8;
    stroke-linecap: round;
    stroke-linejoin: round;
}

.eye-closed {
    display: none;
}

    </style>

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Playfair+Display:wght@500;600;700&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body class="login-page">

<div class="page-wrapper">

    <!-- ================= HEADER ================= -->
    <header class="top-header">

        <!-- LOGO -->
        <div class="header-left">

            <img
                src="../asset/logo-petcare.png"
                alt="Pet Care"
                class="header-logo"
            >

            <div class="header-divider"></div>

            <span class="header-title">
                PET CARE
            </span>

        </div>


        <!-- BUTTON HEADER -->
        <div class="header-center">

            <a href="login_fo.php" class="header-login">
                <img
                    src="../asset/badge-login.png"
                    alt="Log In"
                >
            </a>

            <a href="register.php" class="header-register">
                <img
                    src="../asset/badge-register.png"
                    alt="Register"
                >
            </a>

        </div>


        <!-- WELCOME -->
        <div class="header-right">

            <img
                src="../asset/badge_welkom.png"
                alt="Welcome to Pet Care"
                class="welcome-badge"
            >

        </div>

    </header>


    <!-- ================= MAIN ================= -->
    <main class="main-login-area">

        <div class="login-card">

            <div class="login-card-inner">

                <!-- LOGO CARD -->
                <div class="card-logo-area">

                    <img
                        src="../asset/logo-petcare3.png"
                        alt="Pet Care"
                        class="card-logo"
                    >

                    <div class="welcome-text">
                        -Welcome-
                    </div>

                    <div class="fo-access">
                        DAFTAR AKUN
                    </div>

                </div>


                <!-- ================= FORM ================= -->
                <form class="login-form" id="registerFoForm">

                    <!-- NAMA LENGKAP -->
                    <div class="form-group">

                        <label for="nama">
                            Nama Lengkap
                        </label>

                        <input
                            type="text"
                            id="nama"
                            placeholder="Masukan Nama Lengkap"
                            required
                        >

                    </div>


                    <!-- EMAIL -->
                    <div class="form-group">

                        <label for="email">
                            Email
                        </label>

                        <input
                            type="email"
                            id="email"
                            placeholder="Masukan Email"
                            required
                        >

                    </div>


                    <!-- NO TELEPON -->
                    <div class="form-group">

                        <label for="telepon">
                            No. Telepon
                        </label>

                        <input
                            type="tel"
                            id="telepon"
                            placeholder="Masukan No. Telepon"
                            required
                        >

                    </div>


                    <!-- PASSWORD -->
                    <div class="form-group">

                        <label for="password">
                            Password
                        </label>

                        <div class="password-wrapper">

                            <input
                                type="password"
                                id="password"
                                placeholder="Masukan Password"
                                required
                            >

                            <button
                                type="button"
                                class="eye-button"
                                onclick="togglePassword('password', this)"
                                aria-label="Tampilkan password"
                            >
                                <svg class="eye-svg" viewBox="0 0 24 24" aria-hidden="true">
                                    <path class="eye-open" d="M2.2 12s3.5-6 9.8-6 9.8 6 9.8 6-3.5 6-9.8 6-9.8-6-9.8-6Z"></path>
                                    <circle class="eye-open" cx="12" cy="12" r="2.8"></circle>
                                    <path class="eye-closed" d="M3 3l18 18M5.4 7.2C3.3 8.6 2.2 10.2 1.8 12c.8 3.1 4.3 6 10.2 6 1.6 0 3-.3 4.2-.8M18.6 7.2c1.8 1.3 3 2.9 3.6 4.8-.2.8-.6 1.6-1.2 2.4"></path>
                                </svg>
                            </button>

                        </div>

                    </div>


                    <!-- KONFIRMASI PASSWORD -->
                    <div class="form-group">

                        <label for="confirm-password">
                            Konfirmasi Password
                        </label>

                        <div class="password-wrapper">

                            <input
                                type="password"
                                id="confirm-password"
                                placeholder="Ulangi Password"
                                required
                            >

                            <button
                                type="button"
                                class="eye-button"
                                onclick="togglePassword('confirm-password', this)"
                                aria-label="Tampilkan konfirmasi password"
                            >
                                <svg class="eye-svg" viewBox="0 0 24 24" aria-hidden="true">
                                    <path class="eye-open" d="M2.2 12s3.5-6 9.8-6 9.8 6 9.8 6-3.5 6-9.8 6-9.8-6-9.8-6Z"></path>
                                    <circle class="eye-open" cx="12" cy="12" r="2.8"></circle>
                                    <path class="eye-closed" d="M3 3l18 18M5.4 7.2C3.3 8.6 2.2 10.2 1.8 12c.8 3.1 4.3 6 10.2 6 1.6 0 3-.3 4.2-.8M18.6 7.2c1.8 1.3 3 2.9 3.6 4.8-.2.8-.6 1.6-1.2 2.4"></path>
                                </svg>
                            </button>

                        </div>

                    </div>


                    <!-- BOTTOM FORM -->
                    <div class="form-bottom">

                        <div class="login-links">

                            <a href="login_fo.php">
                                Sudah Punya Akun? Login
                            </a>

                        </div>


                        <button
                            type="submit"
                            class="btn-login"
                        >
                            Daftar
                        </button>

                    </div>

                </form>

            </div>


            <!-- BACK TO HOME -->
            <a
                href="../index.php"
                class="back-to-home"
            >
                Back To Home
            </a>

        </div>

    </main>


    <!-- ================= FOOTER ================= -->
    <footer class="bottom-footer">

        <img
            src="../asset/logo-petcare.png"
            alt="Pet Care"
            class="footer-logo"
        >

    </footer>

</div>


<script>

function togglePassword(inputId, button) {

    const field = document.getElementById(inputId);
    const openEyes = button.querySelectorAll(".eye-open");
    const closedEyes = button.querySelectorAll(".eye-closed");

    if (field.type === "password") {
        field.type = "text";
        openEyes.forEach(item => item.style.display = "none");
        closedEyes.forEach(item => item.style.display = "block");
        button.setAttribute("aria-label", "Sembunyikan password");
    } else {
        field.type = "password";
        openEyes.forEach(item => item.style.display = "block");
        closedEyes.forEach(item => item.style.display = "none");
        button.setAttribute("aria-label", "Tampilkan password");
    }
}


/* Sambungkan form register ke halaman login */

document
    .getElementById("registerFoForm")
    .addEventListener("submit", function (e) {

        e.preventDefault();

        alert("Pendaftaran berhasil! Silakan login.");

        window.location.href = "login_fo.php";

    });

</script>

</body>
</html>