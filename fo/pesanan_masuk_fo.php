<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Pesanan Masuk | Front Office</title>

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


/* =====================================================
   HTML & BODY
===================================================== */

html,
body {
    width: 100%;
    height: 100%;
}


body {
    font-family: 'Poppins', sans-serif;

    background: #000;

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

    background: #dce5cf;

    box-shadow:
        0 10px 35px rgba(0, 0, 0, 0.25);
}


/* =====================================================
   SIDEBAR
===================================================== */

.sidebar {
    width: 350px;
    height: 100%;

    flex-shrink: 0;

    background: linear-gradient(
        180deg,
        #e8c1cc 0%,
        #c49ea9 100%
    );

    padding: 25px 30px 25px 35px;

    display: flex;
    flex-direction: column;
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


.logo-img {
    width: 245px;
    height: auto;

    object-fit: contain;
}


/* =====================================================
   SIDEBAR LINE
===================================================== */

.sidebar-line {
    width: 100%;
    height: 3px;

    background: rgba(80, 65, 67, 0.65);

    margin: 10px 0 14px;
}


.menu-divider {
    margin-top: 14px;
    margin-bottom: 14px;
}


/* =====================================================
   NAVIGATION
===================================================== */

.nav-menu {
    display: flex;
    flex-direction: column;

    gap: 10px;
}


.nav-item {
    width: 100%;
    height: 48px;

    display: flex;
    align-items: center;

    padding: 0 18px;

    background: #dedede;

    border-radius: 25px;

    color: #171717;

    text-decoration: none;

    font-family: 'Poppins', sans-serif;
    font-size: 19px;
    font-weight: 500;

    box-shadow:
        4px 5px 0 rgba(76, 57, 62, 0.65);

    transition:
        transform 0.2s ease,
        background 0.2s ease;
}


.nav-item:hover {
    transform: translateX(2px);
}


.nav-item.active {
    background: #d6c4ca;

    font-weight: 600;
}


.nav-icon {
    width: 27px;
    height: 27px;

    object-fit: contain;

    margin-right: 12px;

    flex-shrink: 0;
}


.nav-item span {
    white-space: nowrap;
}


/* =====================================================
   LOGOUT
===================================================== */

.logout-container {
    margin-top: auto;
}


.logout-line {
    margin-top: 24px;
    margin-bottom: 25px;
}


.logout-btn {
    height: 56px;

    background: #adadad;

    font-size: 19px;
}


/* =====================================================
   MAIN CONTENT
===================================================== */

.main-content {
    flex: 1;

    min-width: 0;

    height: 100%;

    background: #dce5cf;

    padding:
        35px
        28px
        20px
        40px;

    display: flex;
    flex-direction: column;
}


/* =====================================================
   TITLE
===================================================== */

.title-box {
    align-self: flex-start;

    background: #f5f5f5;

    padding: 8px 14px;

    margin-bottom: 20px;

    border-radius: 10px;

    box-shadow:
        4px 4px 5px rgba(0, 0, 0, 0.18);
}


.title-box h1 {
    color: #000;

    font-family: 'Poppins', sans-serif;

    font-size: 29px;

    line-height: 1.25;

    font-weight: 700;

    white-space: nowrap;
}


/* =====================================================
   SEARCH
===================================================== */

.search-group {
    display: flex;

    align-items: center;

    gap: 12px;

    margin-bottom: 22px;
}


.search-input {
    width: 280px;
    height: 40px;

    padding: 0 18px;

    border-radius: 22px;

    border: 1px solid #b7b7b7;

    background: #f5f5f5;

    color: #333;

    font-family: 'Poppins', sans-serif;

    font-size: 14px;

    outline: none;
}


.search-input::placeholder {
    color: #666;
}


.search-input:focus {
    border-color: #777;
}


.search-button {
    width: 43px;
    height: 40px;

    border: none;

    border-radius: 8px;

    background: #4d4c53;

    display: flex;
    align-items: center;
    justify-content: center;

    cursor: pointer;

    box-shadow:
        2px 3px 4px rgba(0, 0, 0, 0.2);
}


.search-button img {
    width: 21px;
    height: 21px;

    object-fit: contain;

    filter: brightness(0) invert(1);
}


/* =====================================================
   ORDER LIST
===================================================== */

.order-list {
    width: 100%;

    flex: 1;

    min-height: 0;

    display: flex;
    flex-direction: column;

    gap: 16px;

    overflow-y: auto;

    padding-right: 3px;

    scrollbar-width: none;
}


.order-list::-webkit-scrollbar {
    width: 0;
    height: 0;
}


.empty-order {
    width: 100%;

    padding: 25px;

    background: #fff;

    border-radius: 14px;

    text-align: center;

    color: #666;

    font-size: 14px;
}


/* =====================================================
   ORDER CARD
===================================================== */

.order-card {
    width: 100%;

    min-height: 150px;

    flex-shrink: 0;

    display: flex;
    align-items: stretch;

    gap: 14px;

    padding: 12px;

    background: #ececec;

    border: 1px solid #d1d1d1;

    border-radius: 15px;

    box-shadow:
        2px 3px 5px rgba(0, 0, 0, 0.07);
}


/* =====================================================
   PAYMENT BOX
===================================================== */

.payment-box {
    width: 122px;
    height: 126px;

    flex-shrink: 0;

    border-radius: 12px;

    overflow: hidden;

    display: flex;
    justify-content: center;
    align-items: center;

    text-align: center;
}


/* CASH */

.payment-cash {
    flex-direction: column;

    background: #a9d18e;

    color: #fff;

    gap: 2px;
}


.payment-cash span {
    font-size: 18px;
    font-weight: 600;
}


.payment-cash strong {
    font-size: 18px;
    font-weight: 700;
}


/* TRANSFER */

.payment-proof {
    background: #fff;

    border: 1px solid #d2d2d2;
}


.payment-proof img {
    width: 100%;
    height: 100%;

    display: block;

    object-fit: cover;
}


/* =====================================================
   ORDER INFO
===================================================== */

.order-info {
    width: 180px;

    flex-shrink: 0;

    display: flex;
    flex-direction: column;
    justify-content: center;

    gap: 7px;
}


.customer-row {
    display: flex;

    align-items: center;

    gap: 8px;
}


.order-number {
    display: inline-flex;

    min-width: 40px;
    height: 21px;

    align-items: center;
    justify-content: center;

    padding: 0 8px;

    background: #f6e6a1;

    border: 1px solid #d8c05a;

    border-radius: 6px;

    color: #111;

    font-size: 12px;

    font-weight: 700;
}


.customer-name {
    font-size: 14px;

    color: #111;

    white-space: nowrap;
}


.user-id {
    display: inline-flex;

    width: fit-content;

    padding: 2px 9px;

    background: #fff;

    border: 1px solid #c9c9c9;

    border-radius: 999px;

    color: #666;

    font-size: 11px;
}


.process-date {
    color: #8a7a4e;

    font-size: 11px;

    white-space: nowrap;
}


.total {
    width: fit-content;

    padding: 4px 12px;

    background: #fff;

    border: 1px solid #c9c9c9;

    border-radius: 999px;

    color: #222;

    font-size: 12px;

    font-weight: 600;

    white-space: nowrap;
}


/* =====================================================
   PRODUCT AREA
===================================================== */

.product-area {
    flex: 1;

    min-width: 0;

    display: flex;
    flex-direction: column;

    justify-content: center;

    gap: 6px;
}


.category-header {
    display: grid;

    grid-template-columns: 1fr 1fr;

    gap: 9px;
}


.category-header div {
    height: 28px;

    display: flex;
    justify-content: center;
    align-items: center;

    background: #fff;

    border: 1px solid #c7c7c7;

    border-radius: 7px;

    color: #111;

    font-size: 11px;

    font-weight: 700;
}


.product-columns {
    display: grid;

    grid-template-columns: 1fr 1fr;

    gap: 9px;

    height: 76px;
}


.product-box {
    background: #fff;

    border: 1px solid #c7c7c7;

    border-radius: 7px;

    padding: 8px 10px;

    display: flex;
    flex-direction: column;

    justify-content: flex-start;

    gap: 3px;

    overflow: hidden;
}


.product-line {
    display: flex;

    justify-content: space-between;

    gap: 8px;

    color: #333;

    font-size: 11px;

    line-height: 1.3;
}


/* =====================================================
   PESANAN STATUS
===================================================== */

.order-success {
    width: 88px;
    height: 96px;

    flex-shrink: 0;

    align-self: center;

    display: flex;
    flex-direction: column;

    justify-content: center;
    align-items: center;

    text-align: center;

    background: #fff;

    border: 1px solid #c8c8c8;

    border-radius: 9px;

    color: #222;

    line-height: 1.35;
}


.order-success span {
    font-size: 11px;
}


.order-success strong {
    font-size: 11px;
}


/* =====================================================
   ACTION BUTTON
===================================================== */

.order-actions {
    width: 58px;

    flex-shrink: 0;

    display: flex;
    flex-direction: column;

    align-items: stretch;
    justify-content: center;

    gap: 8px;
}


.btn-process,
.btn-reject {
    width: 100%;
    height: 29px;

    border: none;

    border-radius: 999px;

    color: #fff;

    font-family: 'Poppins', sans-serif;

    font-size: 10px;

    font-weight: 600;

    cursor: pointer;

    transition:
        transform 0.15s ease,
        opacity 0.15s ease;
}


.btn-process {
    background: #a8b4e0;
}


.btn-reject {
    background: #e04a4a;
}


.btn-process:hover,
.btn-reject:hover {
    transform: translateY(-1px);

    opacity: 0.92;
}


.btn-process:active,
.btn-reject:active {
    transform: translateY(1px);
}


/* =====================================================
   RESPONSIVE
===================================================== */

@media (max-width: 1200px) {

    body {
        align-items: flex-start;

        overflow: auto;
    }


    .app-container {
        width: 100vw;
        min-width: 1000px;

        height: 100vh;
        min-height: 800px;
    }

}


@media (max-width: 1000px) {

    .app-container {
        min-width: 920px;
    }


    .sidebar {
        width: 320px;

        padding-left: 25px;
        padding-right: 25px;
    }


    .main-content {
        padding-left: 25px;
        padding-right: 20px;
    }


    .order-info {
        width: 170px;
    }


    .payment-box {
        width: 110px;
        height: 126px;
    }

}
    </style>
</head>

<body>

<div class="app-container">

    <!-- =====================================================
         SIDEBAR
    ====================================================== -->

    <aside class="sidebar">

        <!-- LOGO -->
        <div class="logo-container">
            <img
                src="../asset/logo-petcare.png"
                alt="Pet Care"
                class="logo-img"
            >
        </div>


        <!-- GARIS -->
        <div class="sidebar-line"></div>


        <!-- MENU ATAS -->
        <nav class="nav-menu">

            <a href="dashboard_fo.php" class="nav-item">

                <img
                    src="../asset/icon-dashboard.svg"
                    alt="Dashboard"
                    class="nav-icon"
                >

                <span>Dashboard</span>

            </a>


            <a href="katalog_fo.php" class="nav-item">

                <img
                    src="../asset/icon-katalog.svg"
                    alt="Katalog"
                    class="nav-icon"
                >

                <span>Katalog</span>

            </a>


            <a href="pesanan_masuk_fo.php"
               class="nav-item active">

                <img
                    src="../asset/icon-pesananmasuk.svg"
                    alt="Pesanan Masuk"
                    class="nav-icon"
                >

                <span>Pesanan Masuk</span>

            </a>


            <a href="status_pesanan.php" class="nav-item">

                <img
                    src="../asset/icon-statuspesanan.svg"
                    alt="Status Pesanan"
                    class="nav-icon"
                >

                <span>Status Pesanan</span>

            </a>

        </nav>


        <!-- GARIS PEMISAH -->
        <div class="sidebar-line menu-divider"></div>


        <!-- MENU BAWAH -->
        <nav class="nav-menu">

            <a href="riwayat_transaksi.php" class="nav-item">

                <img
                    src="../asset/icon-riwayat.svg"
                    alt="Riwayat Transaksi"
                    class="nav-icon"
                >

                <span>Riwayat Transaksi</span>

            </a>


            <a href="jadwal_fo.php" class="nav-item">

                <img
                    src="../asset/icon-jadwalfo.svg"
                    alt="Jadwal FO"
                    class="nav-icon"
                >

                <span>Jadwal FO</span>

            </a>


            <a href="biodata_fo.php" class="nav-item">

                <img
                    src="../asset/icon-biodata.svg"
                    alt="Biodata Saya"
                    class="nav-icon"
                >

                <span>Biodata Saya</span>

            </a>

        </nav>


        <!-- LOGOUT -->
        <div class="logout-container">

            <div class="sidebar-line logout-line"></div>

            <a href="login_fo.php"
               class="nav-item logout-btn">

                <img
                    src="../asset/icon-logout.svg"
                    alt="Logout"
                    class="nav-icon"
                >

                <span>Logout</span>

            </a>

        </div>

    </aside>


    <!-- =====================================================
         MAIN CONTENT
    ====================================================== -->

    <main class="main-content">


        <!-- JUDUL -->
        <div class="title-box">

            <h1>Pesanan Masuk</h1>

        </div>


        <!-- SEARCH -->
        <div class="search-group">

            <input
                type="text"
                id="searchInput"
                class="search-input"
                placeholder="Cari Produk...."
            >

            <button
                type="button"
                class="search-button"
                onclick="cariPesanan()"
            >

                <img
                    src="../asset/icon-search.png"
                    alt="Search"
                >

            </button>

        </div>


        <!-- DAFTAR PESANAN -->
        <div
            class="order-list"
            id="orderList"
        ></div>

    </main>

</div>


<script>

/* =====================================================
   DATA PESANAN DEFAULT
===================================================== */

const defaultOrders = [

    {
        nomor: "001",
        nama: "Sarah Jessica",
        id: "20",
        waktu: "20-09-2026 (18:20)",

        pembayaran: {
            tipe: "cash",
            teks: "Cash<br>Lunas"
        },

        total: "Rp539.900,-",

        aksesoris: [
            { nama: "Kalung", jumlah: "X 1" },
            { nama: "Leash", jumlah: "X 2" }
        ],

        kandang: [
            { nama: "Kandang Pintu", jumlah: "X 1" }
        ],

        status: "baru"
    },


    {
        nomor: "001",
        nama: "Sarah Jessica",
        id: "20",
        waktu: "20-09-2026 (18:20)",

        pembayaran: {
            tipe: "transfer",
            gambar: "../asset/bukti pembayaran.jpeg"
        },

        total: "Rp539.900,-",

        aksesoris: [
            { nama: "Kalung", jumlah: "X 1" },
            { nama: "Leash", jumlah: "X 2" }
        ],

        kandang: [
            { nama: "Kandang Pintu", jumlah: "X 1" }
        ],

        status: "baru"
    }

];


/* =====================================================
   LOAD PESANAN
===================================================== */

function getOrders() {

    const savedOrders =
        localStorage.getItem("savedOrders");

    if (!savedOrders) {

        localStorage.setItem(
            "savedOrders",
            JSON.stringify(defaultOrders)
        );

        return [...defaultOrders];
    }

    try {

        return JSON.parse(savedOrders) || [];

    } catch (error) {

        localStorage.setItem(
            "savedOrders",
            JSON.stringify(defaultOrders)
        );

        return [...defaultOrders];
    }

}


/* =====================================================
   RENDER PESANAN
===================================================== */

function renderOrders() {

    const orderList =
        document.getElementById("orderList");

    const keyword =
        document
            .getElementById("searchInput")
            .value
            .toLowerCase()
            .trim();

    const orders = getOrders();

    const hasil =
        orders.filter(order => {

            const teksAksesoris =
                order.aksesoris
                    .map(item => item.nama)
                    .join(" ")
                    .toLowerCase();

            const teksKandang =
                order.kandang
                    .map(item => item.nama)
                    .join(" ")
                    .toLowerCase();

            return (
                order.nomor.toLowerCase().includes(keyword) ||
                order.nama.toLowerCase().includes(keyword) ||
                teksAksesoris.includes(keyword) ||
                teksKandang.includes(keyword)
            );

        });


    orderList.innerHTML = "";


    if (hasil.length === 0) {

        orderList.innerHTML = `
            <div class="empty-order">
                Pesanan tidak ditemukan.
            </div>
        `;

        return;
    }


    hasil.forEach((order, index) => {

        const aksesorisHTML =
            order.aksesoris.map(item => `
                <div class="product-line">
                    <span>${item.nama}</span>
                    <span>${item.jumlah}</span>
                </div>
            `).join("");


        const kandangHTML =
            order.kandang.map(item => `
                <div class="product-line">
                    <span>${item.nama}</span>
                    <span>${item.jumlah}</span>
                </div>
            `).join("");


        let pembayaranHTML = "";


        if (
            order.pembayaran &&
            order.pembayaran.tipe === "transfer"
        ) {

            pembayaranHTML = `
                <div class="payment-box payment-proof">

                    <img
                        src="../asset/bukti pembayaran.jpeg"
                        alt="Bukti Pembayaran"
                    >

                </div>
            `;

        } else {

            pembayaranHTML = `
                <div class="payment-box payment-cash">

                    <span>Cash</span>
                    <strong>Lunas</strong>

                </div>
            `;

        }


        orderList.insertAdjacentHTML(
            "beforeend",
            `
            <div class="order-card">

                <!-- PEMBAYARAN -->
                ${pembayaranHTML}


                <!-- INFORMASI -->
                <div class="order-info">

                    <div class="customer-row">

                        <span class="order-number">
                            ${order.nomor}
                        </span>

                        <strong class="customer-name">
                            ${order.nama}
                        </strong>

                    </div>


                    <div class="user-id">
                        (ID: ${order.id})
                    </div>


                    <div class="process-date">
                        Proses: ${order.waktu}
                    </div>


                    <div class="total">
                        Total: ${order.total}
                    </div>

                </div>


                <!-- PRODUK -->
                <div class="product-area">

                    <div class="category-header">

                        <div>Aksesoris</div>

                        <div>Kandang</div>

                    </div>


                    <div class="product-columns">

                        <div class="product-box">

                            ${aksesorisHTML}

                        </div>


                        <div class="product-box">

                            ${kandangHTML}

                        </div>

                    </div>

                </div>


                <!-- PESANAN SUKSES -->
                <div class="order-success">

                    <span>Pesanan</span>
                    <strong>Sukses</strong>

                </div>


                <!-- ACTION -->
                <div class="order-actions">

                    <button
                        type="button"
                        class="btn-process"
                        onclick="prosesPesanan(${index})"
                    >
                        Proses
                    </button>


                    <button
                        type="button"
                        class="btn-reject"
                        onclick="tolakPesanan(${index})"
                    >
                        Tolak
                    </button>

                </div>

            </div>
            `
        );

    });

}


/* =====================================================
   SEARCH
===================================================== */

function cariPesanan() {

    renderOrders();

}


/* =====================================================
   PROSES PESANAN
   → STATUS PESANAN
===================================================== */

function prosesPesanan(index) {

    const orders = getOrders();

    if (!orders[index]) {
        return;
    }


    orders[index].status = "diproses";

    localStorage.setItem(
        "savedOrders",
        JSON.stringify(orders)
    );


    alert(
        "Pesanan berhasil diproses dan masuk ke Status Pesanan."
    );


    window.location.href =
        "status_pesanan.php";

}


/* =====================================================
   TOLAK PESANAN
   → RIWAYAT TRANSAKSI
===================================================== */

function tolakPesanan(index) {

    const orders = getOrders();

    if (!orders[index]) {
        return;
    }


    const konfirmasi =
        confirm(
            "Apakah kamu yakin ingin menolak pesanan ini?"
        );


    if (!konfirmasi) {
        return;
    }


    orders[index].status = "ditolak";

    localStorage.setItem(
        "savedOrders",
        JSON.stringify(orders)
    );


    alert(
        "Pesanan ditolak dan masuk ke Riwayat Transaksi."
    );


    window.location.href =
        "riwayat_transaksi.php";

}


/* =====================================================
   INIT
===================================================== */

document.addEventListener(
    "DOMContentLoaded",
    function () {

        renderOrders();

    }
);


/* =====================================================
   ENTER = SEARCH
===================================================== */

document
    .getElementById("searchInput")
    .addEventListener(
        "keydown",
        function (event) {

            if (event.key === "Enter") {

                cariPesanan();

            }

        }
    );

</script>

</body>
</html>