<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Care - Status Pesanan</title>

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

    background: linear-gradient(
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
   SIDEBAR LINE
===================================================== */

.sidebar-line {
    width: 100%;
    height: 3px;

    background-color: #866d72;

    margin: 15px 0;
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

    color: #171717;

    background-color: #dedede;

    text-decoration: none;

    border-radius: 25px;

    font-size: 16px;
    font-weight: 500;

    box-shadow:
        3px 4px 0 rgba(0, 0, 0, 0.30);

    transition: 0.2s;
}


.nav-item:hover {
    background-color: #e8e8e8;
}


.nav-item.active {
    background-color: #eeeeee;
}


/* =====================================================
   NAV ICON
===================================================== */

.nav-icon {
    width: 25px;
    height: 25px;

    object-fit: contain;

    flex-shrink: 0;
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
   MAIN CONTENT
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

    color: #000000;

    font-size: 28px;

    font-weight: 700;

    line-height: 1.2;

    box-shadow:
        3px 4px 6px rgba(0, 0, 0, 0.15);
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
        0 2px 3px rgba(0, 0, 0, 0.12);
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
   ORDER CONTAINER
===================================================== */

.order-container {
    width: 100%;

    height: 348px;

    padding: 12px;

    border: 1px solid #555;

    border-radius: 7px;

    background-color: #d5d5d5;

    display: flex;

    flex-direction: column;

    gap: 9px;
}


/* =====================================================
   ORDER CARD
===================================================== */

.order-card {
    width: 100%;

    height: 153px;

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

    background-color: #a9d68b;

    color: white;

    font-size: 25px;

    font-weight: 500;

    line-height: 1.15;
}


/* =====================================================
   PAYMENT PROOF
===================================================== */

.proof-box {
    padding: 5px;

    overflow: hidden;
}


.proof-box img {
    height: 80px;

    width: auto;

    max-width: 100%;

    object-fit: contain;
}


/* =====================================================
   ORDER INFORMATION
===================================================== */

.order-info {
    width: 200px;

    height: 100px;

    padding: 0 2px;

    display: flex;

    flex-direction: column;
}


/* =====================================================
   CUSTOMER ROW
===================================================== */

.customer-row {
    display: flex;

    align-items: center;

    gap: 7px;

    white-space: nowrap;
}


.order-number {
    padding: 2px 7px;

    border: 1px solid #777;

    border-radius: 7px;

    background-color: #eeeeee;

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
   PROCESS DATE
===================================================== */

.process-date {
    margin-top: 6px;

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

    margin-top: 25px;

    padding: 3px 8px;

    background-color: #eeeeee;

    border: 1px solid #777;

    border-radius: 7px;

    color: #222;

    font-size: 9px;

    font-weight: 600;
}


/* =====================================================
   PRODUCT AREA
===================================================== */

.product-area {
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


.product-box {
    width: 115px;
    height: 50px;

    padding: 6px 8px;

    background-color: #eeeeee;

    border: 1px solid #777;

    border-radius: 7px;

    font-size: 9px;

    line-height: 1.45;
}


.product-box span {
    float: right;
}


/* =====================================================
   PESANAN STATUS
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

    font-size: 9px;

    line-height: 1.4;
}


/* =====================================================
   SUKSES
===================================================== */

.status-success {
    width: 60px;
    height: 15px;

    display: flex;

    justify-content: center;
    align-items: center;

    background-color: #8d82ef;

    color: #ffffff;

    border: none;

    border-radius: 10px;

    cursor: pointer;

    transition: 0.2s ease;

    font-family: 'Poppins', sans-serif;

    font-size: 7px;

    font-weight: 500;
}


.status-success:hover {
    background-color: #756bd8;
    transform: scale(1.05);
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

        <div class="sidebar-line"></div>

        <nav class="nav-menu">

            <a href="dashboard_fo.php" class="nav-item">
                <img src="../asset/icon-dashboard.svg"
                     alt="Dashboard"
                     class="nav-icon">
                <span>Dashboard</span>
            </a>

            <a href="katalog_fo.php" class="nav-item">
                <img src="../asset/icon-stock.svg"
                     alt="Katalog"
                     class="nav-icon">
                <span>Katalog</span>
            </a>

            <a href="pesanan_masuk_fo.php" class="nav-item">
                <img src="../asset/icon-pesananmasuk.svg"
                     alt="Pesanan Masuk"
                     class="nav-icon">
                <span>Pesanan Masuk</span>
            </a>

            <a href="status_pesanan.php" class="nav-item active">
                <img src="../asset/icon-statuspesanan.svg"
                     alt="Status Pesanan"
                     class="nav-icon">
                <span>Status Pesanan</span>
            </a>

        </nav>

        <div class="sidebar-line second-line"></div>

        <nav class="nav-menu">

            <a href="riwayat_transaksi.php" class="nav-item">
                <img src="../asset/icon-riwayat.svg"
                     alt="Riwayat Transaksi"
                     class="nav-icon">
                <span>Riwayat Transaksi</span>
            </a>

            <a href="jadwal_fo.php" class="nav-item">
                <img src="../asset/icon-jadwalfo.svg"
                     alt="Jadwal FO"
                     class="nav-icon">
                <span>Jadwal FO</span>
            </a>

            <a href="biodata_fo.php" class="nav-item">
                <img src="../asset/icon-biodata.svg"
                     alt="Biodata Saya"
                     class="nav-icon">
                <span>Biodata Saya</span>
            </a>

        </nav>

        <div class="sidebar-line third-line"></div>

        <div class="logout-container">

            <a href="login_fo.php"
               class="nav-item logout-btn">

                <img src="../asset/icon-logout.svg"
                     alt="Logout"
                     class="nav-icon">

                <span>Logout</span>

            </a>

        </div>

    </aside>


    <!-- ================= MAIN CONTENT ================= -->
    <main class="main-content">

        <!-- TITLE -->
        <h1 class="page-title">
            Status Pesanan
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


        <!-- ================= ORDER CONTAINER ================= -->
        <div class="order-container">


            <!-- ================= ORDER 1 ================= -->
            <div class="order-card">

                <!-- PAYMENT -->
                <div class="payment-box">
                    Cash<br>
                    Lunas
                </div>


                <!-- CUSTOMER -->
                <div class="order-info">

                    <div class="customer-row">

                        <span class="order-number">
                            001
                        </span>

                        <strong>
                            Sarah Jessica
                        </strong>

                        <span class="user-id">
                            (ID: 20)
                        </span>

                    </div>


                    <div class="process-date">
                        Proses: 20-09-2026 (18:20)
                    </div>


                    <div class="total">
                        Total: Rp539.900,-
                    </div>

                </div>


                <!-- PRODUCT -->
                <div class="product-area">

                    <div class="category-row">

                        <span>Aksesoris</span>

                        <span>Kandang</span>

                    </div>


                    <div class="product-row">

                        <div class="product-box">
                            Kalung
                            <span>X 1</span>

                            <br>

                            Leash
                            <span>X 2</span>
                        </div>


                        <div class="product-box">
                            Kandang
                            <span>X 1</span>

                            <br>

                            Pintu
                        </div>

                    </div>

                </div>


                <!-- PESANAN -->
                <div class="order-status">

                    Pesanan
                    <br>
                    Sukses

                </div>


                <!-- STATUS -->
                <button type="button" class="status-success" onclick="selesaikanPesanan(this)">
                    Sukses
                </button>

            </div>



            <!-- ================= ORDER 2 ================= -->
            <div class="order-card">

                <!-- PAYMENT PROOF -->
                <div class="payment-box proof-box">

                    <img src="../asset/bukti pembayaran.jpeg"
                         alt="Bukti Pembayaran">

                </div>


                <!-- CUSTOMER -->
                <div class="order-info">

                    <div class="customer-row">

                        <span class="order-number">
                            001
                        </span>

                        <strong>
                            Sarah Jessica
                        </strong>

                        <span class="user-id">
                            (ID: 20)
                        </span>

                    </div>


                    <div class="process-date">
                        Proses: 20-09-2026 (18:20)
                    </div>


                    <div class="total">
                        Total: Rp539.900,-
                    </div>

                </div>


                <!-- PRODUCT -->
                <div class="product-area">

                    <div class="category-row">

                        <span>Aksesoris</span>

                        <span>Kandang</span>

                    </div>


                    <div class="product-row">

                        <div class="product-box">
                            Kalung
                            <span>X 1</span>

                            <br>

                            Leash
                            <span>X 2</span>
                        </div>


                        <div class="product-box">
                            Kandang
                            <span>X 1</span>

                            <br>

                            Pintu
                        </div>

                    </div>

                </div>


                <!-- PESANAN -->
                <div class="order-status">

                    Pesanan
                    <br>
                    Sukses

                </div>


                <!-- STATUS -->
                <button type="button" class="status-success" onclick="selesaikanPesanan(this)">
                    Sukses
                </button>

            </div>

        </div>

    </main>

</div>


<script>

function selesaikanPesanan(btn) {

    alert("Pesanan telah selesai dan dipindahkan ke Riwayat Transaksi.");

    window.location.href = "riwayat_transaksi.php";

}


const searchInput =
    document.getElementById("searchInput");

const orderCards =
    document.querySelectorAll(".order-card");


searchInput.addEventListener("input", function () {

    const keyword =
        this.value.toLowerCase().trim();

    orderCards.forEach(function (card) {

        const text =
            card.innerText.toLowerCase();

        if (text.includes(keyword)) {

            card.style.display = "flex";

        } else {

            card.style.display = "none";

        }

    });

});

</script>

</body>
</html>