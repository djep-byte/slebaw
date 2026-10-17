<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Jadwal Front Office</title>

<style>
/* =====================================================
   RESET
===================================================== */

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}


/* =====================================================
   BODY
===================================================== */

html,
body {
    width: 100%;
    height: 100%;
}

body {
    background: #000;

    font-family:
        Arial,
        Helvetica,
        sans-serif;

    display: flex;

    justify-content: center;
    align-items: center;
}


/* =====================================================
   APP CONTAINER
===================================================== */

.app-container {

    width: 1208px;

    height: 780px;

    display: flex;

    overflow: hidden;

    background: #dce4cd;

}


/* =====================================================
   SIDEBAR
===================================================== */

.sidebar {

    width: 360px;

    height: 100%;

    flex-shrink: 0;

    background: linear-gradient(
        180deg,
        #e6b9c6 0%,
        #c9a4af 100%
    );

    padding-top: 20px;

    position: relative;

}


/* =====================================================
   LOGO
===================================================== */

.logo-container {

    width: 100%;

    height: 125px;

    display: flex;

    justify-content: center;

    align-items: center;

}


.logo-container img {

    width: 245px;

    height: auto;

    object-fit: contain;

    display: block;

}


/* =====================================================
   SIDEBAR LINE
===================================================== */

.sidebar-line {

    width: 280px;

    height: 3px;

    background: #76676b;

    margin: 2px auto 15px;

}


.menu-divider {

    margin-top: 17px;

    margin-bottom: 22px;

}


.logout-divider {

    margin-top: 22px;

    margin-bottom: 42px;

}


/* =====================================================
   NAV MENU
===================================================== */

.nav-menu {

    width: 100%;

    display: flex;

    flex-direction: column;

    gap: 8px;

}


/* =====================================================
   NAV ITEM
===================================================== */

.nav-item {

    width: 270px;

    height: 48px;

    margin: 0 auto;

    padding: 0 17px;

    display: flex;

    align-items: center;

    gap: 12px;

    text-decoration: none;

    color: #111;

    background: #dedede;

    border-radius: 26px;

    box-shadow:
        5px 5px 0 #77696d;

    transition: 0.15s ease;

}


/* ICON */

.nav-item img {

    width: 27px;

    height: 27px;

    object-fit: contain;

    flex-shrink: 0;

}


/* TEXT */

.nav-item span {

    font-family:
        Georgia,
        "Times New Roman",
        serif;

    font-size: 22px;

    white-space: nowrap;

}


/* HOVER */

.nav-item:hover {

    transform: translateX(2px);

}


/* ACTIVE */

.nav-item.active {

    background: #d2b8c0;

}


/* =====================================================
   LOGOUT
===================================================== */

.logout-button {

    position: absolute;

    left: 20px;

    bottom: 45px;

    width: 280px;

    height: 64px;

    display: flex;

    align-items: center;

    gap: 18px;

    padding-left: 20px;

    text-decoration: none;

    color: #111;

    background: #b4b2b2;

    border-radius: 27px;

    box-shadow:
        5px 5px 0 #70676a;

}


/* LOGOUT ICON */

.logout-button img {

    width: 28px;

    height: 28px;

    object-fit: contain;

}


/* LOGOUT TEXT */

.logout-button span {

    font-family:
        Georgia,
        "Times New Roman",
        serif;

    font-size: 23px;

}


/* =====================================================
   MAIN CONTENT
===================================================== */

.main-content {

    flex: 1;

    height: 100%;

    background: #dce4cd;

    position: relative;

    padding-top: 48px;

}


/* =====================================================
   PAGE TITLE
===================================================== */

.page-title {

    width: 390px;

    height: 55px;

    margin-left: 50px;

    background: #f4f4f4;

    display: flex;

    align-items: center;

    justify-content: center;

    color: #090909;

    font-size: 30px;

    font-weight: 800;

    box-shadow:
        5px 5px 5px rgba(0,0,0,0.20);

}


/* =====================================================
   SEARCH
===================================================== */

.search-area {

    margin-left: 50px;

    margin-top: 28px;

    height: 40px;

    display: flex;

    align-items: center;

    gap: 15px;

}


/* SEARCH INPUT */

.search-area input {

    width: 215px;

    height: 38px;

    border: 1px solid #666;

    border-radius: 22px;

    outline: none;

    padding: 0 16px;

    background: #f5f5f5;

    font-size: 18px;

    color: #333;

    box-shadow:
        0 2px 3px rgba(0,0,0,0.12);

}


.search-area input::placeholder {

    color: #555;

}


/* SEARCH BUTTON */

.search-button {

    width: 45px;

    height: 34px;

    border: none;

    border-radius: 7px;

    background: #4b4b55;

    display: flex;

    align-items: center;

    justify-content: center;

    cursor: pointer;

}


.search-button img {

    width: 23px;

    height: 23px;

    object-fit: contain;

}


/* =====================================================
   SCHEDULE CARD
===================================================== */

.schedule-card {

    width: 735px;

    height: 485px;

    margin-left: 50px;

    margin-top: 33px;

    background: #d7d7d7;

    border: 1px solid #777;

    border-radius: 7px;

    overflow: hidden;

}


/* =====================================================
   TABLE HEADER
===================================================== */

.table-header {

    height: 78px;

    display: grid;

    grid-template-columns:
        80px
        110px
        145px
        145px
        140px
        115px;

    align-items: center;

    background: #e5e3e3;

    border-bottom: 1px solid #777;

    border-radius: 7px;

}


/* HEADER TEXT */

.table-header > div {

    text-align: center;

    font-size: 21px;

    color: #555;

    font-weight: 500;

}


/* =====================================================
   TABLE ROW
===================================================== */

.table-row {

    height: 130px;

    display: grid;

    grid-template-columns:
        80px
        110px
        145px
        145px
        140px
        115px;

    align-items: center;

    cursor: pointer;

    transition: background-color 0.2s ease;

}


.table-row:hover {

    background-color: rgba(0, 0, 0, 0.05);

}


/* =====================================================
   COLUMN TEXT
===================================================== */

.table-row > div {

    display: flex;

    justify-content: center;

    align-items: center;

    text-align: center;

    color: #4f4f4f;

    font-size: 16px;

}


/* =====================================================
   ID
===================================================== */

.col-id {

    width: 100%;
}


/* =====================================================
   PHOTO
===================================================== */

.col-photo img {

    width: 80px;

    height: 110px;

    object-fit: cover;

    object-position: center;

    border-radius: 16px;

    display: block;

}


/* =====================================================
   NAME
===================================================== */

.col-name {

    padding: 0 5px;

}


/* =====================================================
   GENDER
===================================================== */

.col-gender {

    padding: 0 5px;

}


/* =====================================================
   DAY
===================================================== */

.col-day {

    padding: 0 5px;

}


/* =====================================================
   TIME
===================================================== */

.col-time {

    padding: 0 5px;

    white-space: nowrap;

}


/* =====================================================
   PAGINATION
===================================================== */

.pagination {

    width: 735px;

    margin-left: 50px;

    margin-top: 36px;

    display: flex;

    justify-content: center;

    gap: 8px;

}


/* PAGE BUTTON */

.page-button {

    width: 53px;

    height: 31px;

    border-radius: 18px;

    border: 1px solid #777;

    background: #ededed;

    color: #222;

    font-size: 29px;

    line-height: 20px;

    display: flex;

    justify-content: center;

    align-items: center;

    cursor: pointer;

    box-shadow:
        0 2px 3px rgba(0,0,0,0.18);

}


.page-button:hover {

    background: #d8d8d8;

}


/* =====================================================
   RESPONSIVE
===================================================== */

@media (max-width: 1208px) {

    .app-container {

        width: 100vw;

        height: 100vh;

    }

}


@media (max-width: 900px) {

    .sidebar {

        width: 300px;

    }

    .nav-item {

        width: 250px;

    }

    .sidebar-line {

        width: 250px;

    }

    .main-content {

        overflow-x: auto;

    }

}


@media (max-width: 700px) {

    body {

        background: #dce4cd;

    }

    .app-container {

        width: 100%;

        height: 100vh;

    }

    .sidebar {

        width: 220px;

    }

    .logo-container img {

        width: 180px;

    }

    .nav-item {

        width: 195px;

    }

    .nav-item span {

        font-size: 16px;

    }

    .sidebar-line {

        width: 190px;

    }

    .logout-button {

        width: 195px;

    }

    .logout-button span {

        font-size: 18px;

    }

    .main-content {

        min-width: 780px;

    }

}
</style>
</head>

<body>

<div class="app-container">

    <!-- ================= SIDEBAR ================= -->
    <aside class="sidebar">

        <!-- LOGO -->
        <div class="logo-container">
            <img src="../asset/logo_header.png" alt="Pet Care">
        </div>


        <!-- GARIS -->
        <div class="sidebar-line"></div>


        <!-- MENU ATAS -->
        <nav class="nav-menu">

            <a href="dashboard_fo.php" class="nav-item">
                <img src="../asset/icon-dashboard.svg" alt="">
                <span>Dashboard</span>
            </a>

            <a href="katalog_fo.php" class="nav-item">
                <img src="../asset/icon-katalog.svg" alt="">
                <span>Katalog</span>
            </a>

            <a href="pesanan_masuk_fo.php" class="nav-item">
                <img src="../asset/icon-pesananmasuk.svg" alt="">
                <span>Pesanan Masuk</span>
            </a>

            <a href="status_pesanan.php" class="nav-item">
                <img src="../asset/icon-statuspesanan.svg" alt="">
                <span>Status Pesanan</span>
            </a>

        </nav>


        <!-- GARIS -->
        <div class="sidebar-line menu-divider"></div>


        <!-- MENU BAWAH -->
        <nav class="nav-menu">

            <a href="riwayat_transaksi.php" class="nav-item">
                <img src="../asset/icon-riwayat.svg" alt="">
                <span>Riwayat Transaksi</span>
            </a>

            <a href="jadwal_fo.php" class="nav-item active">
                <img src="../asset/icon-jadwalfo.svg" alt="">
                <span>Jadwal FO</span>
            </a>

            <a href="biodata_fo.php" class="nav-item">
                <img src="../asset/icon-biodata.svg" alt="">
                <span>Biodata Saya</span>
            </a>

        </nav>


        <!-- GARIS -->
        <div class="sidebar-line logout-divider"></div>


        <!-- LOGOUT -->
        <a href="login_fo.php" class="logout-button">

            <img src="../asset/icon-logout.svg" alt="Logout">

            <span>Logout</span>

        </a>

    </aside>


    <!-- ================= MAIN ================= -->
    <main class="main-content">

        <!-- JUDUL -->
        <div class="page-title">
            Jadwal Front Office
        </div>


        <!-- SEARCH -->
        <div class="search-area">

            <input
                type="text"
                id="searchInput"
                placeholder="Cari Produk...."
                onkeyup="searchTable()"
            >

            <button type="button" class="search-button">
                <img src="../asset/icon-search.png" alt="Search">
            </button>

        </div>


        <!-- ================= TABLE ================= -->
        <section class="schedule-card">

            <!-- HEADER TABLE -->
            <div class="table-header">

                <div class="col-id">
                    ID
                </div>

                <div class="col-photo">
                    Foto
                </div>

                <div class="col-name">
                    Nama
                </div>

                <div class="col-gender">
                    Gender
                </div>

                <div class="col-day">
                    Hari Kerja
                </div>

                <div class="col-time">
                    Jam Kerja
                </div>

            </div>


            <!-- DATA 1 -->
            <div class="table-row" onclick="window.location.href='biodata_fo.php'">

                <div class="col-id">
                    1
                </div>

                <div class="col-photo">
                    <img
                        src="../asset/Foto Jess 6.jpeg"
                        alt="Sarah Jessica"
                    >
                </div>

                <div class="col-name">
                    Sarah Jessica
                </div>

                <div class="col-gender">
                    Perempuan
                </div>

                <div class="col-day">
                    Senin - Rabu
                </div>

                <div class="col-time">
                    08:00 - 17:00
                </div>

            </div>


            <!-- DATA 2 -->
            <div class="table-row" onclick="window.location.href='biodata_fo.php'">

                <div class="col-id">
                    2
                </div>

                <div class="col-photo">
                    <img
                        src="../asset/Foto Jess 6.jpeg"
                        alt="Sarah Jessica"
                    >
                </div>

                <div class="col-name">
                    Sarah Jessica
                </div>

                <div class="col-gender">
                    Perempuan
                </div>

                <div class="col-day">
                    Senin - Rabu
                </div>

                <div class="col-time">
                    08:00 - 17:00
                </div>

            </div>


            <!-- DATA 3 -->
            <div class="table-row" onclick="window.location.href='biodata_fo.php'">

                <div class="col-id">
                    3
                </div>

                <div class="col-photo">
                    <img
                        src="../asset/Foto Jess 6.jpeg"
                        alt="Sarah Jessica"
                    >
                </div>

                <div class="col-name">
                    Sarah Jessica
                </div>

                <div class="col-gender">
                    Perempuan
                </div>

                <div class="col-day">
                    Senin - Rabu
                </div>

                <div class="col-time">
                    08:00 - 17:00
                </div>

            </div>

        </section>


        <!-- ================= PAGINATION ================= -->
        <div class="pagination">

            <button type="button" class="page-button">
                ‹
            </button>

            <button type="button" class="page-button">
                ›
            </button>

        </div>

    </main>

</div>


<script>

function searchTable() {

    const input =
        document.getElementById("searchInput");

    const filter =
        input.value.toLowerCase();

    const rows =
        document.querySelectorAll(".table-row");

    rows.forEach(function(row) {

        const text =
            row.textContent.toLowerCase();

        if (text.includes(filter)) {

            row.style.display = "grid";

        } else {

            row.style.display = "none";

        }

    });

}

</script>

</body>
</html>