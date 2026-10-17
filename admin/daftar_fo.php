<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Care - Daftar Front Office</title>

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
    background-color: #d8e2d4; /* Warna hijau sage */
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


/* --- MAIN CONTENT LIST LAYOUT --- */
.main-content.list-layout {
    flex-grow: 1;
    padding: 40px 50px;
    display: flex;
    flex-direction: column;
    align-items: stretch;
    justify-content: flex-start;
}

/* Title Style */
.page-title-container {
    background-color: #ffffff;
    display: inline-block;
    padding: 10px 20px;
    box-shadow: 2px 4px 10px rgba(0,0,0,0.1);
    margin-bottom: 30px;
    align-self: flex-start;
}

.page-title {
    font-family: 'Fredoka One', cursive;
    color: #000;
    font-size: 26px;
    letter-spacing: 0.5px;
}

/* Action Bar (Search & Add) */
.action-bar {
    display: flex;
    gap: 15px;
    margin-bottom: 25px;
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
    box-shadow: 0 3px 6px rgba(0,0,0,0.05);
}

.search-input::placeholder {
    color: #999;
}

.btn-dark-icon, .btn-dark {
    background-color: #555555;
    border: none;
    border-radius: 10px;
    color: white;
    cursor: pointer;
    box-shadow: 0 3px 6px rgba(0,0,0,0.1);
    display: flex;
    justify-content: center;
    align-items: center;
}

.btn-dark-icon {
    width: 40px;
    height: 40px;
    padding: 8px;
}

.btn-dark-icon img {
    width: 18px;
    height: 18px;
    filter: invert(1);
}

.btn-dark {
    padding: 0 20px;
    height: 40px;
    font-weight: 500;
    font-size: 14px;
}


/* --- DATA TABLE STYLES --- */
.table-container {
    background-color: #ffffff;
    border-radius: 20px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    flex-grow: 1;
    overflow: hidden;
}

.data-table {
    width: 100%;
    border-collapse: collapse;
    text-align: left;
}

.data-table th {
    background-color: #dcdcdc;
    color: #000;
    font-weight: 600;
    padding: 18px 25px;
    font-size: 15px;
}

.data-table td {
    padding: 18px 25px;
    font-size: 14px;
    color: #333;
    background-color: #ffffff;
}

/* Action Buttons within Table */
.btn-action {
    padding: 6px 15px;
    border: none;
    border-radius: 15px;
    font-size: 12px;
    font-weight: 500;
    color: white;
    cursor: pointer;
    margin-right: 5px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.15);
}

.btn-delete { background-color: #d33c3c; } /* Merah */
.btn-edit { background-color: #0096FF; } /* Biru */
.btn-view { background-color: #000000; } /* Hitam */
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
                <a href="#" class="nav-item active">
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
        <main class="main-content list-layout">

            <!-- Page Title -->
            <div class="page-title-container">
                <h1 class="page-title">Daftar Front Office</h1>
            </div>

            <!-- Action Bar (Search & Add) -->
            <div class="action-bar">
                <div class="search-wrapper">
                    <input type="text" placeholder="Cari Front Office.." class="search-input">
                </div>
                <button class="btn-dark-icon">
                    <img src="img/icon-search.png" alt="Search">
                </button>
                <button class="btn-dark" onclick="window.location.href='add_fo.php'">Add</button>
            </div>

            <!-- Data Table -->
            <div class="table-container">
                <table class="data-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>No. Telepon</th>
                            <th>Hari Kerja</th>
                            <th>Action</th>
                            <th>Pengajuan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>194</td>
                            <td>Sarah Jessica</td>
                            <td>087864014955</td>
                            <td>Senin - Kamis</td>
                            <td>
                                <button class="btn-action btn-delete">Delete</button>
                                <button class="btn-action btn-edit">Edit</button>
                            </td>
                            <td>
                                <button class="btn-action btn-view" onclick="window.location.href='pengajuan_fo.php'">View</button>
                            </td>
                        </tr>
                        <tr>
                            <td>194</td>
                            <td>Sarah Jessica</td>
                            <td>087864014955</td>
                            <td>Senin - Kamis</td>
                            <td>
                                <button class="btn-action btn-delete">Delete</button>
                                <button class="btn-action btn-edit">Edit</button>
                            </td>
                            <td>Tidak Ada</td>
                        </tr>
                        <tr>
                            <td>194</td>
                            <td>Sarah Jessica</td>
                            <td>087864014955</td>
                            <td>Senin - Kamis</td>
                            <td>
                                <button class="btn-action btn-delete">Delete</button>
                                <button class="btn-action btn-edit">Edit</button>
                            </td>
                            <td>Tidak Ada</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </main>
    </div>
</body>
</html>