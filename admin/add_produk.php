<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Care - Edit Data Produk</title>

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

/* --- SIDEBAR STYLES --- */
.sidebar {
    width: 320px;
    background: linear-gradient(180deg, #c7a4a9 0%, #a48288 100%); 
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

.nav-icon {
    width: 24px;
    height: 24px;
    margin-right: 15px;
}

.logout-container {
    margin-top: auto;
}

.logout-btn {
    background-color: #b0b0b0; 
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
    background-color: #fdfae3; 
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
    font-family: 'Fredoka One', cursive; 
    color: #000;
    font-size: 28px;
    letter-spacing: 1px;
}

.data-form {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

/* --- SPLIT LAYOUT UNTUK EDIT PRODUK --- */
.form-layout-split {
    display: flex;
    gap: 40px;
    margin-bottom: 10px;
}

.form-left {
    flex: 1;
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.form-right {
    width: 280px;
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.form-group {
    display: flex;
    flex-direction: column;
}

.form-group.w-100 {
    width: 100%;
}

.form-group label, .center-label {
    font-size: 14px;
    font-weight: 600;
    color: #333;
    margin-bottom: 8px;
    margin-left: 5px;
}

.center-label {
    text-align: center;
}

input, textarea {
    width: 100%;
    padding: 12px 20px;
    border: none;
    border-radius: 20px;
    background-color: #f4dbd4; 
    color: #333;
    font-size: 14px;
    outline: none;
    box-shadow: inset 0 2px 4px rgba(0,0,0,0.05), 0 3px 5px rgba(0,0,0,0.1); 
}

textarea {
    resize: none;
    border-radius: 25px;
    line-height: 1.5;
}

/* --- PHOTO PREVIEW & FILE UPLOAD --- */
.photo-preview-box {
    background-color: #f4dbd4;
    border-radius: 25px;
    width: 100%;
    height: 180px;
    display:flex;
    justify-content: center;
    align-items: center;
    box-shadow: inset 0 2px 4px rgba(0,0,0,0.05), 0 3px 5px rgba(0,0,0,0.1);
    padding: 10px;
}

.photo-preview-box img {
    max-width: 100%;
    max-height: 100%;
    object-fit: contain;
    background-color: white; /* Memberi efek kotak putih di belakang anjing seperti di desain */
    padding: 5px;
}

.file-upload-wrapper {
    display: flex;
    align-items: center;
    background-color: #f4dbd4;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 3px 5px rgba(0,0,0,0.1);
}

.file-upload-input {
    display: none; /* Sembunyikan input asli */
}

.file-upload-btn {
    background-color: #5c4d4c; /* Coklat gelap */
    color: white;
    padding: 10px 15px;
    font-size: 12px;
    font-weight: 500;
    cursor: pointer;
    white-space: nowrap;
}

.file-upload-text {
    font-size: 12px;
    color: #555;
    padding: 10px 15px;
    white-space: nowrap;
}

/* --- BUTTON STYLES --- */
.form-actions {
    display: flex;
    justify-content: flex-end;
    gap: 15px;
    margin-top: 10px;
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
    background-color: #d33c3c;
}

.btn-simpan {
    background-color: #89937c;
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
                <a href="#" class="nav-item">
                    <img src="img/icon-dashboard.svg" alt="Dashboard Icon" class="nav-icon"> Dashboard
                </a>
                <a href="#" class="nav-item active">
                    <img src="img/icon-stock.svg" alt="Stock Icon" class="nav-icon"> Stock
                </a>
                <a href="#" class="nav-item">
                    <img src="img/icon-frontoffice.svg" alt="Front Office Icon" class="nav-icon"> Daftar Front Office
                </a>
                <a href="#" class="nav-item">
                    <img src="img/icon-pengguna.svg" alt="Pengguna Icon" class="nav-icon"> Daftar Pengguna
                </a>
                <a href="#" class="nav-item">
                    <img src="img/icon-transaksi.svg" alt="Transaksi Icon" class="nav-icon"> Riwayat Transaksi
                </a>
            </nav>

            <div class="logout-container">
                <a href="#" class="nav-item logout-btn">
                    <img src="img/icon-logout.svg" alt="Logout Icon" class="nav-icon"> Logout
                </a>
            </div>
        </aside>

        <!-- Main Content Area -->
        <main class="main-content">
            <div class="form-card">
                <div class="form-header">
                    <h1>Edit Data Produk</h1>
                </div>

                <form class="data-form">
                    <div class="form-layout-split">
                        <!-- Kolom Kiri: Input Teks -->
                        <div class="form-left">
                            <div class="form-group">
                                <label>Pilih Kategori</label>
                                <input type="text" value="Aksesoris" readonly>
                            </div>
                            <div class="form-group">
                                <label>Nama Produk</label>
                                <input type="text" value="Baju Hewan">
                            </div>
                            <div class="form-group">
                                <label>Harga Produk</label>
                                <input type="text" value="Rp. 75.000.-">
                            </div>
                        </div>

                        <!-- Kolom Kanan: Upload Foto -->
                        <div class="form-right">
                            <label class="center-label">Preview Photo</label>
                            <div class="photo-preview-box">
                                <!-- Nama file foto yang digunakan pada HTML ini -->
                                <img src="img/bajuhewan.png" alt="Preview Baju Hewan" onerror="this.onerror=null;this.src='img/bajuhewan.png';">
                            </div>

                            <!-- Custom File Input -->
                            <div class="file-upload-wrapper">
                                <input type="file" id="file-upload" class="file-upload-input">
                                <label for="file-upload" class="file-upload-btn">Choose File</label>
                                <span class="file-upload-text">No File Chosen</span>
                            </div>
                        </div>
                    </div>

                    <!-- Baris Bawah: Deskripsi -->
                    <div class="form-row">
                        <div class="form-group w-100">
                            <label>Deskripsi Produk</label>
                            <textarea rows="4">Pakaian hewan bergaya yang dibuat dari bahan lembut dan menyerap keringat, menjaga anjing atau kucing tetap hangat, nyaman, dan menggemaskan sepanjang hari.</textarea>
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="button" class="btn-batal">Batal</button>
                        <button type="submit" class="btn-simpan">Simpan</button>
                    </div>
                </form>
            </div>
        </main>
    </div>
</body>
</html>