<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Care - Dashboard FO</title>

    <style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');


/* =====================================================
   RESET
===================================================== */

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
    background-color: #000;

    font-family: 'Poppins', sans-serif;

    display: flex;
    justify-content: center;
    align-items: center;

    overflow: hidden;
}


/* =====================================================
   APP CONTAINER
===================================================== */

.app-container {
    width: 1200px;
    height: 800px;

    display: flex;

    overflow: hidden;

    background-color: #dce5cd;
}


/* =====================================================
   SIDEBAR
===================================================== */

.sidebar {
    width: 320px;
    height: 800px;

    flex-shrink: 0;

    padding: 25px 25px 22px;

    display: flex;
    flex-direction: column;

    background: linear-gradient(
        180deg,
        #e8bcc7 0%,
        #c19da7 100%
    );
}


/* =====================================================
   LOGO
===================================================== */

.logo-container {
    width: 100%;
    height: 140px;

    display: flex;
    align-items: center;
    justify-content: center;

    border-bottom: 3px solid #806c70;
}

.logo-img {
    width: 235px;
    height: 120px;

    object-fit: contain;

    display: block;
}


/* =====================================================
   MENU
===================================================== */

.nav-menu {
    width: 100%;

    display: flex;
    flex-direction: column;

    gap: 9px;

    margin-top: 14px;
}


/* =====================================================
   MENU ITEM
===================================================== */

.nav-item {
    width: 100%;
    height: 48px;

    display: flex;
    align-items: center;

    padding: 0 16px;

    background-color: #dedede;

    border-radius: 25px;

    color: #171717;

    text-decoration: none;

    font-family: 'Poppins', sans-serif;

    font-size: 17px;
    font-weight: 500;

    line-height: 1;

    box-shadow:
        4px 4px 0 rgba(76, 61, 65, 0.65);

    transition: 0.2s ease;
}


/* =====================================================
   MENU AKTIF
===================================================== */

.nav-item.active {
    background-color: #d5c3c7;
}


/* =====================================================
   HOVER
===================================================== */

.nav-item:hover {
    background-color: #eeeeee;

    transform: translateX(2px);
}


/* =====================================================
   ICON MENU
===================================================== */

.nav-icon {
    width: 27px;
    height: 27px;

    flex-shrink: 0;

    object-fit: contain;

    display: block;

    margin-right: 12px;
}


/* =====================================================
   PEMISAH SIDEBAR
===================================================== */

.sidebar-divider {
    width: 100%;
    height: 3px;

    background-color: #806c70;

    margin-top: 25px;
}


/* =====================================================
   MENU KEDUA
===================================================== */

.second-menu {
    margin-top: 14px;
}


/* =====================================================
   DIVIDER BAWAH
===================================================== */

.bottom-divider {
    margin-top: 25px;
}


/* =====================================================
   LOGOUT
===================================================== */

.logout-container {
    width: 100%;

    margin-top: auto;
}

.logout-btn {
    width: 100%;
    height: 64px;

    display: flex;
    align-items: center;

    padding: 0 20px;

    background-color: #b1b1b1;

    border-radius: 22px;

    color: #171717;

    text-decoration: none;

    font-family: 'Poppins', sans-serif;

    font-size: 19px;
    font-weight: 500;

    box-shadow:
        4px 5px 0 rgba(76, 61, 65, 0.65);

    transition: 0.2s ease;
}

.logout-btn:hover {
    background-color: #c2c2c2;

    transform: translateY(-1px);
}

.logout-icon {
    width: 28px;
    height: 28px;

    object-fit: contain;

    margin-right: 18px;
}


/* =====================================================
   MAIN CONTENT
===================================================== */

.main-content {
    flex: 1;

    min-width: 0;

    height: 800px;

    padding: 12px 35px 30px;

    background-color: #dce5cd;

    overflow: hidden;
}


/* =====================================================
   WELCOME AREA
===================================================== */

.welcome-area {
    width: 100%;

    height: 245px;

    display: flex;

    flex-direction: column;

    align-items: center;

    justify-content: flex-start;
}


/* =====================================================
   PET CARE MART
===================================================== */

.mart-banner {
    width: 440px;
    height: 190px;

    object-fit: contain;

    display: block;
}


/* =====================================================
   WELCOME TEXT
===================================================== */

.welcome-text {
    min-width: 290px;

    margin-top: -12px;

    padding: 5px 28px;

    background-color: #eeeeee;

    border-radius: 25px;

    border: 1px solid #999;

    color: #171717;

    text-align: center;

    font-family: 'Poppins', sans-serif;

    font-size: 18px;
    font-weight: 500;

    box-shadow:
        2px 3px 5px rgba(0, 0, 0, 0.18);
}


/* =====================================================
   DASHBOARD GRID
===================================================== */

.dashboard-menu {
    width: 100%;

    display: grid;

    grid-template-columns: repeat(3, 1fr);

    justify-items: center;

    column-gap: 35px;

    row-gap: 35px;

    padding: 5px 35px;
}


/* =====================================================
   DASHBOARD CARD
===================================================== */

.dashboard-card {
    width: 205px;
    height: 205px;

    display: block;

    text-decoration: none;

    transition: transform 0.2s ease;
}


/* =====================================================
   CARD IMAGE
===================================================== */

.dashboard-card img {
    width: 100%;
    height: 100%;

    display: block;

    object-fit: contain;
}


/* =====================================================
   CARD HOVER
===================================================== */

.dashboard-card:hover {
    transform: translateY(-4px) scale(1.02);
}


/* =====================================================
   CARD JADWAL FO (fallback card, no illustrated PNG)
===================================================== */

.card-jadwal {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;

    gap: 14px;

    background: #f3e9dc;

    border: 4px solid #c9a227;

    border-radius: 24px;

    box-shadow:
        3px 4px 0 rgba(76, 61, 65, 0.35);
}

.card-jadwal-icon {
    width: 62px;
    height: 62px;

    padding: 14px;

    object-fit: contain;

    background: #52654e;

    border-radius: 50%;
}

.card-jadwal-label {
    padding: 6px 22px;

    background-color: #52654e;

    border-radius: 20px;

    color: #f3e9dc;

    font-family: 'Poppins', sans-serif;

    font-size: 16px;
    font-weight: 700;
}


/* =====================================================
   RESPONSIVE
===================================================== */

@media screen and (max-width: 1250px) {

    .app-container {
        width: 100vw;
        height: 100vh;
    }

    .sidebar {
        height: 100vh;
    }

    .main-content {
        height: 100vh;
    }
}


@media screen and (max-width: 950px) {

    .sidebar {
        width: 270px;

        padding-left: 18px;
        padding-right: 18px;
    }

    .logo-img {
        width: 205px;
    }

    .nav-item {
        font-size: 15px;
    }

    .nav-icon {
        width: 24px;
        height: 24px;
    }

    .dashboard-menu {
        column-gap: 15px;
    }

    .dashboard-card {
        width: 175px;
        height: 175px;
    }

    .mart-banner {
        width: 380px;
    }
}
    </style>
</head>

<body>

<div class="app-container">

    <!-- ================= SIDEBAR ================= -->
    <aside class="sidebar">

        <div class="logo-container">
            <img src="../asset/logo-petcare.png"
                 alt="Pet Care"
                 class="logo-img">
        </div>

        <nav class="nav-menu">

            <a href="dashboard_fo.php" class="nav-item active">
                <img src="../asset/icon-dashboard.svg"
                     class="nav-icon"
                     alt="">
                <span>Dashboard</span>
            </a>

            <a href="katalog_fo.php" class="nav-item">
                <img src="../asset/icon-stock.svg"
                     class="nav-icon"
                     alt="">
                <span>Katalog</span>
            </a>

            <a href="pesanan_masuk_fo.php" class="nav-item">
                <img src="../asset/icon-pesanan-masuk1.png"
                     class="nav-icon"
                     alt="">
                <span>Pesanan Masuk</span>
            </a>

            <a href="status_pesanan.php" class="nav-item">
                <img src="../asset/icon-pengguna.svg"
                     class="nav-icon"
                     alt="">
                <span>Status Pesanan</span>
            </a>

        </nav>

        <div class="sidebar-divider"></div>

        <nav class="nav-menu second-menu">

            <a href="riwayat_transaksi.php" class="nav-item">
                <img src="../asset/icon-transaksi.svg"
                     class="nav-icon"
                     alt="">
                <span>Riwayat Transaksi</span>
            </a>

            <a href="jadwal_fo.php" class="nav-item">
                <img src="../asset/icon-jadwalfo.svg"
                     class="nav-icon"
                     alt="">
                <span>Jadwal FO</span>
            </a>

            <a href="biodata_fo.php" class="nav-item">
                <img src="../asset/icon-biodata.svg"
                     class="nav-icon"
                     alt="">
                <span>Biodata Saya</span>
            </a>

        </nav>

        <div class="sidebar-divider bottom-divider"></div>

        <!-- LOGOUT -->
        <div class="logout-container">

            <a href="login_fo.php" class="logout-btn">

                <img src="../asset/icon-logout.svg"
                     class="logout-icon"
                     alt="Logout">

                <span>Logout</span>

            </a>

        </div>

    </aside>


    <!-- ================= MAIN CONTENT ================= -->
    <main class="main-content">

        <!-- BANNER -->
        <div class="welcome-area">

            <img src="../asset/pet-care-mart.png"
                 alt="Pet Care Mart"
                 class="mart-banner">

            <div class="welcome-text">
                Welcome FO Jessica!
            </div>

        </div>


        <!-- ================= DASHBOARD MENU ================= -->

        <div class="dashboard-menu">

            <!-- KATALOG -->
            <a href="katalog_fo.php" class="dashboard-card">

                <img src="../asset/card-katalog.png"
                     alt="Katalog">

            </a>


            <!-- PESANAN MASUK -->
            <a href="pesanan_masuk_fo.php" class="dashboard-card">

                <img src="../asset/card-pesanan-masuk.png"
                     alt="Pesanan Masuk">

            </a>


            <!-- STATUS PESANAN -->
            <a href="status_pesanan.php" class="dashboard-card">

                <img src="../asset/card-status-pesanan.png"
                     alt="Status Pesanan">

            </a>


            <!-- RIWAYAT TRANSAKSI -->
            <a href="riwayat_transaksi.php" class="dashboard-card">

                <img src="../asset/card-riwayat-transaksi.png"
                     alt="Riwayat Transaksi">

            </a>


            <!-- JADWAL FO -->
            <a href="jadwal_fo.php" class="dashboard-card card-jadwal">

                <img src="../asset/card-daftar-fo.png" 
                alt="Card Daftar FO">

            </a>


            <!-- BIODATA -->
            <a href="biodata_fo.php" class="dashboard-card">

                <img src="../asset/card-biodata.png"
                     alt="Biodata Saya">

            </a>

        </div>

    </main>

</div>

</body>
</html>