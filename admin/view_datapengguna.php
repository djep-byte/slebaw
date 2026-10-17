<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Data Pengguna | Admin</title>
    <style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Fredoka+One&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    background-color: #f4f4f4;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}

.app-container {
    display: flex;
    width: 1200px;
    height: 800px;
    background-color: #d8e2d4;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    overflow: hidden;
}

.sidebar {
    width: 320px;
    background: linear-gradient(180deg, #c7a4a9 0%, #a48288 100%);
    padding: 40px 20px;
    display: flex;
    flex-direction: column;
    border-right: 2px solid rgba(255,255,255,0.2);
}

.logo-container { text-align: center; margin-bottom: 40px; }
.logo-img { max-width: 80%; height: auto; }
.nav-menu { display: flex; flex-direction: column; gap: 15px; flex-grow: 1; }
.nav-item {
    display: flex;
    align-items: center;
    padding: 15px 25px;
    background-color: #dcdcdc;
    color: #333;
    text-decoration: none;
    border-radius: 25px;
    font-weight: 500;
    font-size: 16px;
    box-shadow: 0 4px 6px rgba(0,0,0,0.15);
    transition: all 0.3s ease;
}
.nav-item:hover, .nav-item.active {
    background-color: #e8e8e8;
    transform: translateY(-2px);
}
.nav-icon { width: 24px; height: 24px; margin-right: 15px; }
.logout-container { margin-top: auto; }
.logout-btn { background-color: #b0b0b0; }

.main-content {
    flex-grow: 1;
    padding: 40px;
    display: flex;
    justify-content: center;
    align-items: center;
}

.content-wrapper-split {
    display: flex;
    gap: 30px;
    width: 100%;
    max-width: 900px;
    align-items: flex-start;
}

.form-card {
    background-color: #fdfae3;
    border-radius: 20px;
    padding: 30px 40px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.05);
}

.flex-grow-1 { flex: 1; }

.form-header {
    background-color: #f6e6dc;
    border: 2px solid #a85858;
    border-radius: 25px;
    padding: 10px 20px;
    text-align: center;
    margin-bottom: 30px;
    display: inline-block;
    width: 100%;
}

.form-header h1 {
    font-family: 'Fredoka One', cursive;
    color: #000;
    font-size: 28px;
    letter-spacing: 1px;
}

.data-form {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.form-row {
    display: flex;
    gap: 20px;
}

.form-group {
    flex: 1;
    display: flex;
    flex-direction: column;
}

.form-group label {
    font-size: 13px;
    font-weight: 600;
    color: #333;
    margin-bottom: 5px;
    margin-left: 10px;
}

input {
    width: 100%;
    padding: 10px 15px;
    border: none;
    border-radius: 20px;
    background-color: #eedcd8;
    color: #333;
    font-size: 13px;
    outline: none;
    box-shadow: inset 0 2px 4px rgba(0,0,0,0.05);
    cursor: default;
}

.form-actions {
    display: flex;
    justify-content: flex-end;
    margin-top: 15px;
}

button {
    padding: 8px 30px;
    border: none;
    border-radius: 20px;
    font-weight: 600;
    font-size: 13px;
    color: white;
    cursor: pointer;
    box-shadow: 0 4px 6px rgba(0,0,0,0.15);
    transition: transform 0.2s;
}

button:hover { transform: translateY(-2px); }

.btn-kembali {
    background-color: #d33c3c;
}

.profile-section {
    width: 220px;
    display: flex;
    flex-direction: column;
    align-items: center;
    padding-top: 15px;
}

.profile-img-container {
    width: 100%;
    height: 280px;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(0,0,0,0.15);
    background-color: #fff;
}

.profile-img-container img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}
    </style>
</head>
<body>
    <div class="app-container">
        <!-- Sidebar Navigation -->
        <aside class="sidebar">
            <div class="logo-container">
                <img src="../asset/logo-petcare.png" alt="Pet Care Logo" class="logo-img">
            </div>

            <nav class="nav-menu">
                <a href="#" class="nav-item">
                    <img src="../asset/icon-dashboard.svg" alt="Dashboard Icon" class="nav-icon"> Dashboard
                </a>
                <a href="#" class="nav-item">
                    <img src="../asset/icon-stock.svg" alt="Stock Icon" class="nav-icon"> Stock
                </a>
                <a href="#" class="nav-item">
                    <img src="../asset/icon-frontoffice.svg" alt="Front Office Icon" class="nav-icon"> Daftar Front Office
                </a>
                <a href="#" class="nav-item active">
                    <img src="../asset/icon-pengguna.svg" alt="Pengguna Icon" class="nav-icon"> Daftar Pengguna
                </a>
                <a href="#" class="nav-item">
                    <img src="../asset/icon-transaksi.svg" alt="Transaksi Icon" class="nav-icon"> Riwayat Transaksi
                </a>
            </nav>

            <div class="logout-container">
                <a href="#" class="nav-item logout-btn">
                    <img src="../asset/icon-logout.svg" alt="Logout Icon" class="nav-icon"> Logout
                </a>
            </div>
        </aside>

        <!-- Main Content Area -->
        <main class="main-content">
            <div class="content-wrapper-split">

                <div class="form-card flex-grow-1">
                    <div class="form-header">
                        <h1>View Data Pengguna</h1>
                    </div>

                    <form class="data-form">
                        <div class="form-row">
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" value="Sarah Jessica" readonly>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input type="date" value="2005-09-14" readonly>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label>No. Telepon</label>
                                <input type="tel" value="087864014955" readonly>
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" value="Jl. Mulyosari Timur No.28, Surabaya" readonly>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label>Email Address</label>
                                <input type="email" value="srhjsca@gmail.com" readonly>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" value="password" readonly>
                            </div>
                        </div>

                        <div class="form-actions">
                            <button type="button" class="btn-kembali" onclick="window.location.href='daftar_pengguna.php'">Kembali</button>
                        </div>
                    </form>
                </div>

                <div class="profile-section">
                    <div class="profile-img-container">
                        <img src="../asset/photo-profile.png" alt="Foto Pengguna">
                    </div>
                </div>

            </div>
        </main>
    </div>
</body>
</html>