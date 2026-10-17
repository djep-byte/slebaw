<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Care - Dashboard</title>

    <style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');

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

/* --- SIDEBAR STYLES (Sama dengan sebelumnya) --- */
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
    display: flex; align-items: center; padding: 15px 25px;
    background-color: #dcdcdc; color: #333; text-decoration: none;
    border-radius: 25px; font-weight: 500; font-size: 16px;
    box-shadow: 0 4px 6px rgba(0,0,0,0.15); transition: all 0.3s ease;
}
.nav-item:hover, .nav-item.active { background-color: #e8e8e8; transform: translateY(-2px); }
.nav-icon { width: 24px; height: 24px; margin-right: 15px; }
.logout-container { margin-top: auto; }
.logout-btn { background-color: #b0b0b0; }

/* --- MAIN CONTENT: DASHBOARD LAYOUT --- */
.main-content.dashboard-layout {
    flex-grow: 1;
    padding: 40px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center; /* Memusatkan semua konten ke tengah vertikal */
}

/* Hero Section */
.hero-section {
    margin-bottom: 20px;
    text-align: center;
}

.hero-image {
    max-width: 450px;
    height: auto;
    filter: drop-shadow(0 10px 15px rgba(0,0,0,0.15)); /* Memberi efek bayangan pada gambar png */
}

/* Welcome Banner */
.welcome-banner {
    background-color: #dcdcdc;
    color: #333;
    padding: 12px 60px;
    border-radius: 40px;
    font-size: 28px;
    font-family: 'Georgia', 'Times New Roman', serif; /* Menggunakan serif agar mirip desain */
    box-shadow: inset 0 2px 4px rgba(255,255,255,0.8), 0 6px 12px rgba(0,0,0,0.15); /* Efek timbul 3D ringan */
    margin-bottom: 40px;
}

/* Cards Container */
.cards-container {
    display: flex;
    gap: 25px;
    justify-content: center;
    width: 100%;
}

.dashboard-card {
    background-color: #e5e0d8;
    border: 1px solid #999;
    border-radius: 8px;
    width: 160px;
    display: flex;
    flex-direction: column;
    text-decoration: none;
    color: #333;
    box-shadow: 0 8px 15px rgba(0,0,0,0.15);
    transition: transform 0.2s ease, box-shadow 0.2s ease;
    overflow: hidden;
}

.dashboard-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 20px rgba(0,0,0,0.2);
}

.card-image-wrapper {
    padding: 15px;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 140px;
}

.card-image-wrapper img {
    max-width: 100%;
    max-height: 100%;
    object-fit: contain;
}

.card-label {
    background-color: #d4cfc6; /* Warna latar sedikit berbeda untuk bagian teks bawah */
    text-align: center;
    padding: 10px 5px;
    font-size: 14px;
    font-weight: 500;
    border-top: 1px solid #999;
    font-family: 'Georgia', 'Times New Roman', serif; /* Mengikuti gaya font banner */
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
                <a href="#" class="nav-item active">
                    <img src="img/icon-dashboard.svg" alt="Dashboard Icon" class="nav-icon"> Dashboard
                </a>
                <a href="halaman_stock1.php" class="nav-item">
                    <img src="img/icon-stock.svg" alt="Stock Icon" class="nav-icon"> Stock
                </a>
                <a href="daftar_fo.php" class="nav-item">
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
        <main class="main-content dashboard-layout">

            <!-- Hero Graphic -->
            <div class="hero-section">
                <img src="img/petcare-mart-hero.png" alt="Pet Care Mart" class="hero-image">
            </div>

            <!-- Welcome Banner -->
            <div class="welcome-banner">
                Welcome Friends!
            </div>

            <!-- Menu Cards -->
            <div class="cards-container">
                <a href="halaman_stock1.php" class="dashboard-card">
                    <div class="card-image-wrapper">
                        <img src="img/card-stock.png" alt="Stock">
                    </div>
                    <div class="card-label">Stock</div>
                </a>

                <a href="daftar_fo.php" class="dashboard-card">
                    <div class="card-image-wrapper">
                        <img src="img/card-frontoffice.png" alt="Daftar Front Office">
                    </div>
                    <div class="card-label">Daftar Front Office</div>
                </a>

                <a href="daftar_pengguna.php" class="dashboard-card">
                    <div class="card-image-wrapper">
                        <img src="img/card-pengguna.png" alt="Daftar Pengguna">
                    </div>
                    <div class="card-label">Daftar Pengguna</div>
                </a>

                <a href="riwayat_transaksi.php" class="dashboard-card">
                    <div class="card-image-wrapper">
                        <img src="img/card-transaksi.png" alt="Riwayat Transaksi">
                    </div>
                    <div class="card-label">Riwayat Transaksi</div>
                </a>
            </div>

        </main>
    </div>
</body>
</html>