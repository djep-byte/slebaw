<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Care - Login</title>

    <style>
/* Import Font Tambahan untuk Halaman Login */
@import url('https://fonts.googleapis.com/css2?family=Great+Vibes&family=Playfair+Display:wght@500;600&family=Poppins:wght@400;500;600;700&display=swap');

.login-page {
    background-color: #f7f7f7;
    margin: 0;
    padding: 0;
}

.page-wrapper {
    display: flex;
    flex-direction: column;
    min-height: 100vh;
    background-color: #fafafa; 
}

/* --- HEADER STYLES --- */
.top-header {
    background: linear-gradient(90deg, #e8c6ce 0%, #c4a1ae 100%);
    padding: 10px 40px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    height: 90px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
}

.header-left {
    display: flex;
    align-items: center;
    gap: 15px;
}

.header-logo {
    height: 70px;
}

.header-divider {
    width: 2px;
    height: 45px;
    background-color: #8c757c;
    margin: 0 10px;
}

.header-title {
    font-family: 'Playfair Display', serif;
    font-size: 32px;
    color: #444;
    letter-spacing: 3px;
}

.header-right {
    display: flex;
    align-items: center;
    gap: 15px;
}

.header-badge-login { height: 50px; cursor: pointer; }
.header-badge-welcome { height: 75px; }


/* --- MAIN LOGIN AREA --- */
.main-login-area {
    flex-grow: 1;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 40px;
    /* Efek background grid samar */
    background-image: radial-gradient(#d3d3d3 1px, transparent 1px);
    background-size: 30px 30px;
}

.login-card {
    background-color: #f4ecea;
    border-radius: 25px;
    width: 100%;
    max-width: 650px;
    box-shadow: 0 15px 35px rgba(0,0,0,0.15);
    display: flex;
    flex-direction: column;
}

.login-card-inner {
    padding: 40px 70px;
}

.card-logo-area {
    text-align: center;
    margin-bottom: 30px;
}

.card-logo {
    height: 65px;
}

.welcome-cursive {
    font-family: 'Great Vibes', cursive;
    font-size: 32px;
    color: #6b8670;
    margin-top: 10px;
    font-weight: 400;
}

/* Form Styles */
.login-form {
    display: flex;
    flex-direction: column;
    gap: 25px;
}

.login-page .form-group {
    display: flex;
    flex-direction: column;
    gap: 8px;
}

.login-page .form-group label {
    font-size: 15px;
    font-weight: 600;
    color: #222;
    margin-left: 10px;
}

.login-page input[type="email"], 
.login-page input[type="password"] {
    width: 100%;
    padding: 16px 20px;
    border: none;
    border-radius: 25px;
    background-color: #ebd3d7;
    color: #333;
    font-size: 14px;
    outline: none;
    box-shadow: 0 5px 10px rgba(0,0,0,0.1);
}

.login-page input::placeholder {
    color: #c4a9af;
}

.form-bottom-actions {
    display: flex;
    justify-content: space-between;
    align-items: flex-end;
    margin-top: 10px;
}

.login-links {
    display: flex;
    flex-direction: column;
    gap: 12px;
    margin-left: 10px;
}

.login-links a {
    color: #6b8670;
    text-decoration: none;
    font-size: 15px;
    font-weight: 500;
}

.login-links a:hover {
    text-decoration: underline;
}

.btn-login {
    background-color: #ced3b6;
    color: #000;
    border: none;
    padding: 12px 45px;
    border-radius: 25px;
    font-weight: 700;
    font-size: 18px;
    letter-spacing: 2px;
    cursor: pointer;
    box-shadow: 0 5px 10px rgba(0,0,0,0.15);
    transition: transform 0.2s;
}

.btn-login:hover {
    transform: translateY(-2px);
}

/* Bottom Banner / Back to Home */
.back-to-home {
    background-color: #a48288;
    color: #000;
    text-align: center;
    padding: 18px;
    text-decoration: none;
    font-weight: 700;
    letter-spacing: 2px;
    font-size: 16px;
    border-bottom-left-radius: 25px;
    border-bottom-right-radius: 25px;
    transition: background-color 0.2s;
}

.back-to-home:hover {
    background-color: #8c6a70;
    color: #fff;
}

/* --- FOOTER STYLES --- */
.bottom-footer {
    background: linear-gradient(90deg, #e8c6ce 0%, #a48288 100%);
    padding: 10px 40px;
    height: 70px;
    display: flex;
    align-items: center;
}

.footer-logo {
    height: 45px;
    opacity: 0.8;
}

/* Coded password eye - no image asset */
.password-input-wrapper {
    position: relative;
    width: 100%;
    display: flex;
    align-items: center;
}

.password-input-wrapper input {
    width: 100%;
    padding-right: 60px;
}

.eye-button {
    position: absolute;
    right: 14px;
    top: 50%;
    transform: translateY(-50%);
    width: 38px;
    height: 38px;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 0;
    border: 0;
    background: transparent;
    cursor: pointer;
}

.eye-svg {
    width: 24px;
    height: 24px;
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
</head>
<body class="login-page">
    <div class="page-wrapper">

        <!-- Top Header -->
        <header class="top-header">
            <div class="header-left">
                <img src="img/logo-petcare.png" alt="Pet Care Logo" class="header-logo">
                <div class="header-divider"></div>
                <span class="header-title">PET CARE</span>
            </div>
            <div class="header-right">
                <img src="img/badge-login.png" alt="Log In" class="header-badge-login">
                <img src="img/badge-welcome.png" alt="Welcome to Pet Care" class="header-badge-welcome">
            </div>
        </header>

        <!-- Main Content Area -->
        <main class="main-login-area">
            <div class="login-card">

                <div class="login-card-inner">
                    <div class="card-logo-area">
                        <img src="img/logo-petcare3.png" alt="Pet Care" class="card-logo">
                        <h2 class="welcome-cursive">-Welcome Furriends-</h2>
                    </div>

                    <form class="login-form" id="loginAdminForm">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" id="admin-email" placeholder="Masukan Email" required>
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <div class="password-input-wrapper">
                                <input type="password" id="admin-password" placeholder="*******" required>
                                <button
                                    type="button"
                                    class="eye-button"
                                    onclick="toggleAdminPassword(this)"
                                    aria-label="Tampilkan password"
                                >
                                    <svg class="eye-svg" viewBox="0 0 24 24" aria-hidden="true">
                                        <path
                                            class="eye-open"
                                            d="M2.2 12s3.5-6 9.8-6 9.8 6 9.8 6-3.5 6-9.8 6-9.8-6-9.8-6Z"
                                        ></path>
                                        <circle
                                            class="eye-open"
                                            cx="12"
                                            cy="12"
                                            r="2.8"
                                        ></circle>
                                        <path
                                            class="eye-closed"
                                            d="M3 3l18 18M5.4 7.2C3.3 8.6 2.2 10.2 1.8 12c.8 3.1 4.3 6 10.2 6 1.6 0 3-.3 4.2-.8M18.6 7.2c1.8 1.3 3 2.9 3.6 4.8-.2.8-.6 1.6-1.2 2.4"
                                        ></path>
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <div class="form-bottom-actions">
                            <div class="login-links">
                                <a href="../fo/login_fo.php">Login Front Office</a>
                                <a href="../../User/login-costumer.php">Login Customer Access</a>
                            </div>
                            <button type="submit" class="btn-login">Login</button>
                        </div>
                    </form>
                </div>

                <!-- Bottom Banner Button -->
                <a href="../fo/index.php" class="back-to-home">
                    Back To Home
                </a>
            </div>
        </main>

        <!-- Bottom Footer -->
        <footer class="bottom-footer">
            <img src="img/logo-petcare.png" alt="Pet Care Logo" class="footer-logo">
        </footer>

    </div>

    <script>
    function toggleAdminPassword(button) {
        const field = document.getElementById("admin-password");
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

    /* Sambungkan form login admin ke dashboard admin */
    document
        .getElementById("loginAdminForm")
        .addEventListener("submit", function (e) {
            e.preventDefault();
            window.location.href = "dashboard_admin.php";
        });
    </script>

</body>
</html>