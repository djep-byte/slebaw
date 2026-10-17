<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Care - Tambah Data Front Office</title>

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
    background-color: #d8e2d4; /* Warna hijau sage latar belakang kanan */
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    overflow: hidden;
}

/* --- SIDEBAR STYLES --- */
.sidebar {
    width: 320px;
    background: linear-gradient(180deg, #c7a4a9 0%, #a48288 100%); /* Gradasi pink/coklat */
    padding: 40px 20px;
    display: flex;
    flex-direction: column;
    border-right: 2px solid rgba(255,255,255,0.2);
}

.logo-container {
    text-align: center;
    margin-bottom: 40px;
}

.logo-img {
    max-width: 80%;
    height: auto;
}

.nav-menu {
    display: flex;
    flex-direction: column;
    gap: 15px;
    flex-grow: 1;
}

.nav-item {
    display: flex;
    align-items: center;
    padding: 15px 25px;
    background-color: #dcdcdc; /* Abu-abu terang */
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

.nav-icon {
    width: 24px;
    height: 24px;
    margin-right: 15px;
}

.logout-container {
    margin-top: auto;
}

.logout-btn {
    background-color: #b0b0b0; /* Abu-abu sedikit lebih gelap untuk pembeda */
}

/* --- MAIN CONTENT STYLES --- */
.main-content {
    flex-grow: 1;
    padding: 40px;
    display: flex;
    justify-content: center;
    align-items: center;
}

.form-card {
    background-color: #fdfae3; /* Kuning pucat */
    width: 100%;
    max-width: 800px;
    border-radius: 20px;
    padding: 40px 50px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.05);
}

.form-header {
    background-color: #f6e6dc;
    border: 2px solid #a85858;
    border-radius: 25px;
    padding: 15px 30px;
    text-align: center;
    margin-bottom: 40px;
    display: inline-block;
    width: 100%;
}

.form-header h1 {
    font-family: 'Fredoka One', cursive; /* Font tebal mirip desain asli */
    color: #000;
    font-size: 28px;
    letter-spacing: 1px;
}

.data-form {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.form-row {
    display: flex;
    gap: 30px;
}

.form-group {
    flex: 1;
    display: flex;
    flex-direction: column;
}

.form-group label {
    font-size: 14px;
    font-weight: 600;
    color: #333;
    margin-bottom: 8px;
    margin-left: 5px;
}

input, select {
    width: 100%;
    padding: 12px 20px;
    border: none;
    border-radius: 20px; /* Bentuk pill/kapsul */
    background-color: #f4dbd4; /* Warna pink pastel */
    color: #777;
    font-size: 14px;
    outline: none;
    box-shadow: inset 0 2px 4px rgba(0,0,0,0.05), 0 3px 5px rgba(0,0,0,0.1); /* Bayangan luar dan dalam */
}

input::placeholder {
    color: #bfaea9;
}

/* Khusus untuk input yang dibagi dua (seperti Hari Kerja & Jam Kerja) */
.split-inputs {
    display: flex;
    gap: 15px;
}

/* --- BUTTON STYLES --- */
.form-actions {
    display: flex;
    justify-content: flex-end;
    gap: 15px;
    margin-top: 20px;
}

button {
    padding: 10px 30px;
    border: none;
    border-radius: 20px;
    font-weight: 600;
    color: white;
    cursor: pointer;
    box-shadow: 0 4px 6px rgba(0,0,0,0.2);
    transition: transform 0.2s;
}

button:hover {
    transform: translateY(-2px);
}

.btn-batal {
    background-color: #d33c3c; /* Merah */
}

.btn-simpan {
    background-color: #89937c; /* Abu-abu kehijauan/Olive */
}
    </style>
</head>
<body>
    <div class="app-container">
        <!-- Sidebar Navigation -->
        <aside class="sidebar">
            <div class="logo-container">
                <img src="img/logo-petcare.png" alt="Pet Care Logo" class="logo-img">
            </div>

            <nav class="nav-menu">
                <a href="dashboard_admin.php" class="nav-item">
                    <img src="img/icon-dashboard.svg" alt="Dashboard Icon" class="nav-icon"> Dashboard
                </a>
                <a href="halaman_stock1.php" class="nav-item">
                    <img src="img/icon-stock.svg" alt="Stock Icon" class="nav-icon"> Stock
                </a>
                <a href="daftar_fo.php" class="nav-item active">
                    <img src="img/icon-frontoffice.svg" alt="Front Office Icon" class="nav-icon"> Daftar Front Office
                </a>
                <a href="daftar_pengguna.php" class="nav-item">
                    <img src="img/icon-pengguna.svg" alt="Pengguna Icon" class="nav-icon"> Daftar Pengguna
                </a>
                <a href="riwayat_transaksi.php" class="nav-item">
                    <img src="img/icon-transaksi.svg" alt="Transaksi Icon" class="nav-icon"> Riwayat Transaksi
                </a>
            </nav>

            <div class="logout-container">
                <a href="login_admin.php" class="nav-item logout-btn">
                    <img src="img/icon-logout.svg" alt="Logout Icon" class="nav-icon"> Logout
                </a>
            </div>
        </aside>

        <!-- Main Content Area -->
        <main class="main-content">
            <div class="form-card">
                <div class="form-header">
                    <h1>Tambah Data Front Office</h1>
                </div>

                <form class="data-form">
                    <div class="form-row">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" placeholder="Nama Lengkap">
                        </div>
                        <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input type="date" placeholder="Tanggal Lahir">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label>No Telepon</label>
                            <input type="tel" placeholder="08xxxxxxxxxx">
                        </div>
                        <div class="form-group">
                            <label>Gender</label>
                            <select>
                                <option value="" disabled selected>Pilih Gender</option>
                                <option value="pria">Pria</option>
                                <option value="wanita">Wanita</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label>Hari Kerja</label>
                            <div class="split-inputs">
                                <select><option>Pilih Hari</option></select>
                                <select><option>Pilih Hari</option></select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Jam Kerja</label>
                            <div class="split-inputs">
                                <input type="time" placeholder="-- : --">
                                <input type="time" placeholder="-- : --">
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="email" placeholder="Email@example.com">
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" placeholder="Alamat Lengkap">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label>Pilih Kategori</label>
                            <input type="text" placeholder="xxxxxx">
                        </div>
                        <div class="form-group">
                            <label>Konfirmasi Password</label>
                            <input type="password" placeholder="*******">
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="button" class="btn-batal" onclick="window.location.href='daftar_fo.php'">Batal</button>
                        <button type="button" class="btn-simpan" onclick="window.location.href='pengajuan_fo.php'">Simpan</button>
                    </div>
                </form>
            </div>
        </main>
    </div>
</body>
</html>