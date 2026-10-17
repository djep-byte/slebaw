<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Care - Riwayat Transaksi</title>
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
    padding: 30px 20px;
    display: flex;
    flex-direction: column;
    border-right: 2px solid rgba(255,255,255,0.2);
}

.logo-container { text-align: center; margin-bottom: 10px; }
.logo-img { max-width: 70%; height: auto; }

.sidebar-divider {
    border: none;
    height: 2px;
    background-color: #927a7f;
    margin: 15px 10px;
}

.nav-menu { display: flex; flex-direction: column; gap: 10px; }
.nav-item {
    display: flex; align-items: center; padding: 12px 20px;
    background-color: #dcdcdc; color: #333; text-decoration: none;
    border-radius: 25px; font-weight: 500; font-size: 15px;
    box-shadow: 0 4px 6px rgba(0,0,0,0.15); transition: all 0.3s ease;
}
.nav-item:hover, .nav-item.active { background-color: #e8e8e8; transform: translateY(-2px); }
.nav-icon { width: 22px; height: 22px; margin-right: 15px; }
.logout-container { margin-top: auto; }
.logout-btn { background-color: #b0b0b0; }

/* --- MAIN CONTENT & ACTION BAR --- */
.main-content.list-layout {
    flex-grow: 1;
    padding: 30px 40px;
    display: flex;
    flex-direction: column;
    align-items: stretch; 
}

.page-title-container {
    background-color: #ffffff;
    display: inline-block;
    padding: 10px 20px;
    box-shadow: 2px 4px 10px rgba(0,0,0,0.1);
    margin-bottom: 20px;
    align-self: flex-start; 
}

.page-title {
    font-family: 'Fredoka One', cursive;
    color: #000;
    font-size: 26px;
    letter-spacing: 0.5px;
}

.action-bar {
    display: flex;
    gap: 15px;
    margin-bottom: 20px;
    align-items: center;
}

.search-input {
    width: 250px;
    padding: 10px 20px;
    border: none;
    border-radius: 20px;
    background-color: #ffffff;
    color: #333;
    font-size: 14px;
    outline: none;
    box-shadow: 0 3px 6px rgba(0,0,0,0.1);
}

.btn-dark-icon {
    background-color: #555555;
    border: none;
    border-radius: 10px;
    width: 40px; height: 40px; padding: 8px;
    display: flex; justify-content: center; align-items: center;
    cursor: pointer;
    box-shadow: 0 3px 6px rgba(0,0,0,0.1);
}
.btn-dark-icon img { width: 18px; filter: invert(1); }

/* --- HISTORY CONTAINER & CARDS --- */
.history-container {
    background-color: #dfdfdf;
    border-radius: 10px;
    padding: 20px;
    display: flex;
    flex-direction: column;
    gap: 15px;
    flex-grow: 1;
    border: 1px solid #b8b8b8;
}

.history-card {
    background-color: #ebebeb;
    border: 1px solid #a3a3a3;
    border-radius: 8px;
    display: flex;
    padding: 15px;
    gap: 15px;
    align-items: stretch;
}

/* Bagian Kiri (Box Hijau/Struk) */
.card-left {
    width: 140px;
    border-radius: 8px;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    border: 1px solid #759a58;
}

.green-box {
    background-color: #98c679;
}

.card-left.p-0 { padding: 0; overflow: hidden; }

.text-large { font-size: 20px; font-weight: 600; line-height: 1.2; }
.text-white { color: white; text-shadow: 1px 1px 2px rgba(0,0,0,0.1); }

.receipt-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* Bagian Tengah (Info Pesanan) */
.card-mid {
    flex: 1;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.mid-header {
    display: flex;
    align-items: center;
    gap: 10px;
    font-size: 14px;
    font-weight: 600;
}

.badge-number {
    background-color: #ffffff;
    border: 1px solid #333;
    border-radius: 15px;
    padding: 2px 10px;
    font-size: 12px;
}

.badge-id {
    background-color: #ffffff;
    border: 1px solid #333;
    border-radius: 15px;
    padding: 2px 10px;
    font-size: 11px;
    font-weight: 500;
}

.mid-timestamps p {
    font-size: 11px;
    color: #8c7b64;
    line-height: 1.4;
}

.badge-total {
    background-color: #d1d1d1;
    border: 1px solid #999;
    border-radius: 15px;
    padding: 4px 12px;
    font-size: 12px;
    font-weight: 600;
    align-self: flex-start;
}

/* Bagian Tabel Produk (Kanan Tengah) */
.card-products {
    display: flex;
    gap: 10px;
}

.product-category {
    background-color: #dcdcdc;
    border: 1px solid #999;
    border-radius: 8px;
    width: 120px;
    display: flex;
    flex-direction: column;
    overflow: hidden;
}

.cat-header {
    background-color: #dcdcdc;
    border-bottom: 1px solid #999;
    text-align: center;
    font-size: 12px;
    font-weight: 600;
    padding: 4px;
}

.cat-body {
    padding: 6px;
    font-size: 11px;
    background-color: #e4e4e4;
    flex-grow: 1;
}

.prod-item {
    display: flex;
    justify-content: space-between;
    margin-bottom: 4px;
}

/* Bagian Kanan (Status Sukses) */
.card-right {
    display: flex;
    align-items: center;
}

.status-final {
    background-color: #dfdfdf;
    border: 1px solid #999;
    border-radius: 8px;
    padding: 10px 15px;
    font-size: 12px;
    font-weight: 600;
    text-align: center;
}

/* --- PAGINATION --- */
.pagination-controls {
    display: flex;
    justify-content: center;
    gap: 15px;
    margin-top: 15px;
}

.btn-page {
    background-color: #dcdcdc;
    border: 1px solid #999;
    border-radius: 15px;
    width: 40px;
    height: 30px;
    font-weight: bold;
    cursor: pointer;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

.btn-page:hover {
    background-color: #cfcfcf;
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

            <hr class="sidebar-divider">

            <nav class="nav-menu">
                <a href="dashboard_admin.php" class="nav-item">
                    <img src="../asset/icon-dashboard.svg" alt="Dashboard Icon" class="nav-icon"> Dashboard
                </a>
                <a href="halaman_stock1.php" class="nav-item">
                    <img src="../asset/icon-katalog.svg" alt="Katalog Icon" class="nav-icon"> Katalog
                </a>
                <a href="#" class="nav-item">
                    <img src="../asset/icon-pesananmasuk.svg" alt="Pesanan Masuk Icon" class="nav-icon"> Pesanan Masuk
                </a>
                <a href="#" class="nav-item">
                    <img src="../asset/icon-statuspesanan.svg" alt="Status Pesanan Icon" class="nav-icon"> Status Pesanan
                </a>
            </nav>

            <hr class="sidebar-divider">

            <nav class="nav-menu">
                <a href="#" class="nav-item active">
                    <img src="../asset/icon-riwayat.svg" alt="Riwayat Transaksi Icon" class="nav-icon"> Riwayat Transaksi
                </a>
                <a href="#" class="nav-item">
                    <img src="../asset/icon-jadwalfo.svg" alt="Jadwal FO Icon" class="nav-icon"> Jadwal FO
                </a>
                <a href="#" class="nav-item">
                    <img src="../asset/icon-biodata.svg" alt="Biodata Icon" class="nav-icon"> Biodata Saya
                </a>
            </nav>

            <hr class="sidebar-divider">

            <div class="logout-container">
                <a href="login_admin.php" class="nav-item logout-btn">
                    <img src="../asset/icon-logout.svg" alt="Logout Icon" class="nav-icon"> Logout
                </a>
            </div>
        </aside>

        <!-- Main Content Area -->
        <main class="main-content list-layout">

            <!-- Page Title -->
            <div class="page-title-container">
                <h1 class="page-title">Riwayat Transaksi</h1>
            </div>

            <!-- Action Bar (Search) -->
            <div class="action-bar">
                <div class="search-wrapper">
                    <input type="text" placeholder="Cari Produk...." class="search-input">
                </div>
                <button class="btn-dark-icon">
                    <img src="../asset/icon-search.png" alt="Search">
                </button>
            </div>

            <!-- Main History Container -->
            <div class="history-container">

                <!-- History Card 1 -->
                <div class="history-card">
                    <div class="card-left green-box">
                        <span class="text-large text-white">Cash<br>Lunas</span>
                    </div>

                    <div class="card-mid">
                        <div class="mid-header">
                            <span class="badge-number">001</span>
                            <span class="customer-name">Sarah Jessica</span>
                            <span class="badge-id">(ID: 20)</span>
                        </div>
                        <div class="mid-timestamps">
                            <p>Masuk: 20-09-2026 (18:20)</p>
                            <p>Diproses: 20-09-2026 (18:21)</p>
                            <p>Selesai: 20-09-2026 (18:37)</p>
                        </div>
                        <div class="badge-total">
                            Total: Rp539.900,-
                        </div>
                    </div>

                    <div class="card-products">
                        <div class="product-category">
                            <div class="cat-header">Aksesoris</div>
                            <div class="cat-body">
                                <div class="prod-item"><span>Kalung</span><span>X 1</span></div>
                                <div class="prod-item"><span>Leash</span><span>X 2</span></div>
                            </div>
                        </div>
                        <div class="product-category">
                            <div class="cat-header">Kandang</div>
                            <div class="cat-body">
                                <div class="prod-item"><span>Kandang<br>Pintu</span><span>X 1</span></div>
                            </div>
                        </div>
                    </div>

                    <div class="card-right">
                        <div class="status-final">Pesanan<br>Sukses</div>
                    </div>
                </div>

                <!-- History Card 2 -->
                <div class="history-card">
                    <div class="card-left green-box p-0">
                        <img src="../asset/struk-transfer.png" alt="Struk Transfer" class="receipt-img">
                    </div>

                    <div class="card-mid">
                        <div class="mid-header">
                            <span class="badge-number">001</span>
                            <span class="customer-name">Sarah Jessica</span>
                            <span class="badge-id">(ID: 20)</span>
                        </div>
                        <div class="mid-timestamps">
                            <p>Masuk: 20-09-2026 (18:20)</p>
                            <p>Diproses: 20-09-2026 (18:21)</p>
                            <p>Selesai: 20-09-2026 (18:37)</p>
                        </div>
                        <div class="badge-total">
                            Total: Rp539.900,-
                        </div>
                    </div>

                    <div class="card-products">
                        <div class="product-category">
                            <div class="cat-header">Aksesoris</div>
                            <div class="cat-body">
                                <div class="prod-item"><span>Kalung</span><span>X 1</span></div>
                                <div class="prod-item"><span>Leash</span><span>X 2</span></div>
                            </div>
                        </div>
                        <div class="product-category">
                            <div class="cat-header">Kandang</div>
                            <div class="cat-body">
                                <div class="prod-item"><span>Kandang<br>Pintu</span><span>X 1</span></div>
                            </div>
                        </div>
                    </div>

                    <div class="card-right">
                        <div class="status-final">Pesanan<br>Sukses</div>
                    </div>
                </div>

            </div>

            <!-- Pagination -->
            <div class="pagination-controls">
                <button class="btn-page">&lt;</button>
                <button class="btn-page">&gt;</button>
            </div>

        </main>
    </div>
</body>
</html>