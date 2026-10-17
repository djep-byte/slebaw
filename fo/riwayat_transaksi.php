<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Care - Riwayat Transaksi</title>

    <style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');


/* =====================================================
   RESET
===================================================== */

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}


/* =====================================================
   BODY
===================================================== */

body {

    background-color: #000;

    min-height: 100vh;

    display: flex;

    justify-content: center;
    align-items: center;

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

    width: 360px;
    height: 800px;

    padding: 25px 60px;

    background:
        linear-gradient(
            90deg,
            #efc2cf 0%,
            #c7a5ad 100%
        );

    display: flex;

    flex-direction: column;

}


/* =====================================================
   LOGO
===================================================== */

.logo-container {

    width: 100%;

    height: 115px;

    display: flex;

    justify-content: center;

    align-items: center;

}


.logo-img {

    width: 220px;

    height: auto;

    object-fit: contain;

}


/* =====================================================
   GARIS SIDEBAR
===================================================== */

.sidebar-line {

    width: 100%;

    height: 3px;

    background-color: #866d72;

    margin: 15px 0 15px 0;

}


.second-line {

    margin-top: 25px;

}


.third-line {

    margin-top: 20px;

    margin-bottom: 20px;

}


/* =====================================================
   NAVIGATION
===================================================== */

.nav-menu {

    display: flex;

    flex-direction: column;

    gap: 8px;

}


.nav-item {

    width: 100%;

    height: 48px;

    padding: 8px 18px;

    display: flex;

    align-items: center;

    gap: 10px;

    text-decoration: none;

    color: #171717;

    background-color: #dedede;

    border-radius: 25px;

    font-size: 16px;

    font-weight: 500;

    box-shadow:
        3px 4px 0 rgba(0,0,0,0.30);

}


.nav-item:hover {

    background-color: #e8e8e8;

}


.nav-item.active {

    background-color: #eeeeee;

}


/* =====================================================
   ICON SIDEBAR
===================================================== */

.nav-icon {

    width: 25px;

    height: 25px;

    object-fit: contain;

    flex-shrink: 0;

}


/* =====================================================
   BOTTOM MENU
===================================================== */

.bottom-menu {

    gap: 8px;

}


/* =====================================================
   LOGOUT
===================================================== */

.logout-container {

    margin-top: auto;

}


.logout-btn {

    background-color: #b0b0b0;

}


/* =====================================================
   MAIN
===================================================== */

.main-content {

    width: 840px;

    height: 800px;

    padding: 48px 55px;

    background-color: #dce5cd;

    position: relative;

}


/* =====================================================
   TITLE
===================================================== */

.page-title {

    display: inline-block;

    padding: 5px 10px;

    margin-bottom: 25px;

    background-color: #ffffff;

    color: #000;

    font-size: 28px;

    font-weight: 700;

    line-height: 1.2;

    box-shadow:
        3px 4px 6px rgba(0,0,0,0.15);

}


/* =====================================================
   SEARCH
===================================================== */

.search-group {

    display: flex;

    align-items: center;

    gap: 14px;

    margin-bottom: 35px;

}


.search-input {

    width: 215px;

    height: 38px;

    padding: 7px 15px;

    border: 1px solid #555;

    border-radius: 20px;

    outline: none;

    background-color: #f7f7f7;

    font-size: 14px;

    color: #333;

    box-shadow:
        0 2px 3px rgba(0,0,0,0.12);

}


.search-input::placeholder {

    color: #555;

}


.search-button {

    width: 45px;

    height: 38px;

    border: none;

    border-radius: 8px;

    background-color: #4d4d58;

    display: flex;

    justify-content: center;

    align-items: center;

    cursor: pointer;

}


.search-button img {

    width: 21px;

    height: 21px;

    object-fit: contain;

    filter: brightness(0) invert(1);

}


/* =====================================================
   TRANSACTION CONTAINER
===================================================== */

.transaction-container {

    width: 100%;

    height: 485px;

    padding: 12px;

    border: 1px solid #555;

    border-radius: 7px;

    background-color: #d5d5d5;

    display: flex;

    flex-direction: column;

    gap: 9px;

}


/* =====================================================
   TRANSACTION CARD
===================================================== */

.transaction-card {

    width: 100%;

    min-height: 153px;

    padding: 22px 20px;

    display: flex;

    align-items: center;

    gap: 8px;

    background-color: #e9e9e9;

    border: 1px solid #666;

    border-radius: 7px;

}


/* =====================================================
   PAYMENT BOX
===================================================== */

.payment-box {

    width: 145px;

    height: 90px;

    flex-shrink: 0;

    border: 1px solid #555;

    border-radius: 6px;

    display: flex;

    justify-content: center;

    align-items: center;

    text-align: center;

}


.cash-box {

    background-color: #a9d68b;

    color: white;

    font-size: 25px;

    font-weight: 500;

    line-height: 1.15;

}


.proof-box {

    background-color: #a9d68b;

    padding: 5px;

}


.proof-box img {

    height: 80px;

    width: auto;

    max-width: 100%;

    object-fit: contain;

}


/* =====================================================
   TRANSACTION DETAIL
===================================================== */

.transaction-detail {

    width: 200px;

    height: 100px;

    padding: 0 2px;

    display: flex;

    flex-direction: column;

}


/* =====================================================
   CUSTOMER
===================================================== */

.customer-row {

    display: flex;

    align-items: center;

    gap: 7px;

    white-space: nowrap;

}


.transaction-number {

    padding: 2px 7px;

    border: 1px solid #777;

    border-radius: 7px;

    background-color: #eaeaea;

    font-size: 11px;

}


.customer-row strong {

    font-size: 11px;

    font-weight: 600;

}


.user-id {

    font-size: 9px;

    white-space: nowrap;

}


/* =====================================================
   DATE
===================================================== */

.date-detail {

    margin-top: 5px;

    display: flex;

    flex-direction: column;

    gap: 1px;

}


.date-detail span {

    color: #806f35;

    font-size: 8px;

    line-height: 1.35;

}


/* =====================================================
   TOTAL
===================================================== */

.total {

    display: inline-block;

    align-self: flex-start;

    margin-top: 6px;

    padding: 3px 8px;

    background-color: #eeeeee;

    border: 1px solid #777;

    border-radius: 7px;

    color: #222;

    font-size: 9px;

    font-weight: 600;

}


/* =====================================================
   PRODUCT DETAIL
===================================================== */

.product-detail {

    width: 235px;

    height: 78px;

    display: flex;

    flex-direction: column;

    gap: 3px;

}


/* =====================================================
   CATEGORY
===================================================== */

.category-row {

    display: flex;

    gap: 6px;

}


.category-row span {

    width: 115px;

    height: 22px;

    display: flex;

    justify-content: center;

    align-items: center;

    background-color: #eeeeee;

    border: 1px solid #777;

    border-radius: 7px;

    font-size: 9px;

    font-weight: 500;

}


/* =====================================================
   PRODUCT
===================================================== */

.product-row {

    display: flex;

    gap: 6px;

}


.product-row div {

    width: 115px;

    height: 50px;

    padding: 6px 8px;

    background-color: #eeeeee;

    border: 1px solid #777;

    border-radius: 7px;

    font-size: 10px;

    line-height: 1.45;

}


/* =====================================================
   STATUS
===================================================== */

.order-status {

    width: 68px;

    height: 54px;

    display: flex;

    justify-content: center;

    align-items: center;

    text-align: center;

    background-color: #eeeeee;

    border: 1px solid #777;

    border-radius: 7px;

    font-size: 10px;

    line-height: 1.4;

}


/* =====================================================
   PAGINATION
===================================================== */

.pagination {

    position: absolute;

    left: 0;

    right: 0;

    bottom: 25px;

    display: flex;

    justify-content: center;

    gap: 8px;

}


.page-button {

    width: 52px;

    height: 30px;

    border: 1px solid #777;

    border-radius: 20px;

    background-color: #eeeeee;

    font-size: 25px;

    line-height: 20px;

    display: flex;

    justify-content: center;

    align-items: center;

    cursor: pointer;

    box-shadow:
        0 2px 3px rgba(0,0,0,0.15);

}


.page-button:hover {

    background-color: #d7d7d7;

}


/* =====================================================
   RESPONSIVE
===================================================== */

@media screen and (max-width: 1200px) {

    .app-container {

        width: 100vw;

        height: 100vh;

    }

}


@media screen and (max-width: 900px) {

    .sidebar {

        width: 300px;

        padding:
            25px 35px;

    }


    .main-content {

        width: calc(100% - 300px);

        padding:
            40px 30px;

    }


    .transaction-card {

        gap: 5px;

    }


    .payment-box {

        width: 120px;

    }


    .transaction-detail {

        width: 180px;

    }


    .product-detail {

        width: 205px;

    }

}
    </style>
</head>

<body>

<div class="app-container">

    <!-- SIDEBAR -->
    <aside class="sidebar">

        <div class="logo-container">
            <img src="../asset/logo-petcare.png"
                 alt="Pet Care"
                 class="logo-img">
        </div>

        <div class="sidebar-line"></div>

        <nav class="nav-menu">

            <a href="dashboard_fo.php" class="nav-item">
                <img src="../asset/icon-dashboard.svg" class="nav-icon">
                <span>Dashboard</span>
            </a>

            <a href="katalog_fo.php" class="nav-item">
                <img src="../asset/icon-stock.svg" class="nav-icon">
                <span>Katalog</span>
            </a>

            <a href="pesanan_masuk_fo.php" class="nav-item">
                <img src="../asset/icon-pesananmasuk.svg" class="nav-icon">
                <span>Pesanan Masuk</span>
            </a>

            <a href="status_pesanan.php" class="nav-item">
                <img src="../asset/icon-statuspesanan.svg" class="nav-icon">
                <span>Status Pesanan</span>
            </a>

        </nav>

        <div class="sidebar-line second-line"></div>

        <nav class="nav-menu bottom-menu">

            <a href="riwayat_transaksi.php"
               class="nav-item active">

                <img src="../asset/icon-riwayat.svg" class="nav-icon">

                <span>Riwayat Transaksi</span>

            </a>

            <a href="jadwal_fo.php" class="nav-item">

                <img src="../asset/icon-jadwalfo.svg" class="nav-icon">

                <span>Jadwal FO</span>

            </a>

            <a href="biodata_fo.php" class="nav-item">

                <img src="../asset/icon-biodata.svg" class="nav-icon">

                <span>Biodata Saya</span>

            </a>

        </nav>

        <div class="sidebar-line third-line"></div>

        <div class="logout-container">

            <a href="login_fo.php"
               class="nav-item logout-btn">

                <img src="../asset/icon-logout.svg"
                     class="nav-icon">

                <span>Logout</span>

            </a>

        </div>

    </aside>


    <!-- MAIN CONTENT -->
    <main class="main-content">

        <h1 class="page-title">
            Riwayat Transaksi
        </h1>


        <!-- SEARCH -->
        <div class="search-group">

            <input
                type="text"
                id="searchInput"
                class="search-input"
                placeholder="Cari Produk...."
            >

            <button class="search-button">
                <img src="../asset/icon-search.png"
                     alt="Search">
            </button>

        </div>


        <!-- TRANSACTIONS -->
        <div class="transaction-container">


            <!-- TRANSAKSI 1 -->
            <div class="transaction-card">

                <div class="payment-box cash-box">
                    Cash<br>
                    Lunas
                </div>


                <div class="transaction-detail">

                    <div class="customer-row">

                        <span class="transaction-number">
                            001
                        </span>

                        <strong>
                            Sarah Jessica
                        </strong>

                        <span class="user-id">
                            (ID: 20)
                        </span>

                    </div>


                    <div class="date-detail">

                        <span>
                            Masuk: 20-09-2026 (18:20)
                        </span>

                        <span>
                            Diproses: 20-09-2026 (18:21)
                        </span>

                        <span>
                            Selesai: 20-09-2026 (18:37)
                        </span>

                    </div>


                    <div class="total">
                        Total: Rp539.900,-
                    </div>

                </div>


                <div class="product-detail">

                    <div class="category-row">

                        <span>Aksesoris</span>

                        <span>Kandang</span>

                    </div>

                    <div class="product-row">

                        <div>
                            Kalung&nbsp;&nbsp;&nbsp; X 1<br>
                            Leash&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; X 2
                        </div>

                        <div>
                            Kandang<br>
                            Pintu&nbsp;&nbsp;&nbsp;&nbsp; X 1
                        </div>

                    </div>

                </div>


                <div class="order-status">
                    Pesanan<br>
                    Sukses
                </div>

            </div>



            <!-- TRANSAKSI 2 -->
            <div class="transaction-card">

                <div class="payment-box proof-box">

                    <img src="../asset/bukti pembayaran.jpeg"
                         alt="Bukti Pembayaran">

                </div>


                <div class="transaction-detail">

                    <div class="customer-row">

                        <span class="transaction-number">
                            001
                        </span>

                        <strong>
                            Sarah Jessica
                        </strong>

                        <span class="user-id">
                            (ID: 20)
                        </span>

                    </div>


                    <div class="date-detail">

                        <span>
                            Masuk: 20-09-2026 (18:20)
                        </span>

                        <span>
                            Diproses: 20-09-2026 (18:21)
                        </span>

                        <span>
                            Selesai: 20-09-2026 (18:37)
                        </span>

                    </div>


                    <div class="total">
                        Total: Rp539.900,-
                    </div>

                </div>


                <div class="product-detail">

                    <div class="category-row">

                        <span>Aksesoris</span>

                        <span>Kandang</span>

                    </div>

                    <div class="product-row">

                        <div>
                            Kalung&nbsp;&nbsp;&nbsp; X 1<br>
                            Leash&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; X 2
                        </div>

                        <div>
                            Kandang<br>
                            Pintu&nbsp;&nbsp;&nbsp;&nbsp; X 1
                        </div>

                    </div>

                </div>


                <div class="order-status">
                    Pesanan<br>
                    Sukses
                </div>

            </div>

        </div>


        <!-- PAGINATION -->
        <div class="pagination">

            <button class="page-button">
                ‹
            </button>

            <button class="page-button">
                ›
            </button>

        </div>

    </main>

</div>


<script>

const searchInput =
    document.getElementById("searchInput");

const cards =
    document.querySelectorAll(".transaction-card");

searchInput.addEventListener("input", function () {

    const keyword =
        this.value.toLowerCase();

    cards.forEach(function(card) {

        if (
            card.innerText
                .toLowerCase()
                .includes(keyword)
        ) {

            card.style.display = "flex";

        } else {

            card.style.display = "none";

        }

    });

});

</script>

</body>
</html>