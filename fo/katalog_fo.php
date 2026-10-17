<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Pet Care - Katalog Produk</title>

    <!-- CSS TETAP -->

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

    display: flex;
    justify-content: center;
    align-items: center;

    height: 125px;
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
    font-size: 20px;
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
   DIVIDER
===================================================== */

.menu-divider {
    margin-top: 14px;
    margin-bottom: 14px;
}


/* =====================================================
   LOGOUT
===================================================== */

.logout-container {
    margin-top: auto;
}


.logout-line {
    margin-bottom: 25px;
}


.logout-btn {
    height: 56px;

    background: #adadad;

    font-size: 20px;
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
        30px
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
   TOP CONTROLS
===================================================== */

.top-controls {
    width: 100%;

    display: flex;
    align-items: center;

    gap: 40px;

    margin-bottom: 15px;
}


/* =====================================================
   SEARCH
===================================================== */

.search-area {
    display: flex;
    align-items: center;

    gap: 12px;
}


.search-input {
    width: 215px;
    height: 40px;

    padding: 0 15px;

    border: 1.5px solid #555;

    border-radius: 22px;

    background: #f5f5f5;

    color: #333;

    font-family: 'Poppins', sans-serif;

    font-size: 16px;

    outline: none;

    box-shadow:
        2px 3px 4px rgba(0, 0, 0, 0.15);
}


.search-input::placeholder {
    color: #555;
}


.search-button {
    width: 43px;
    height: 40px;

    border: none;

    border-radius: 7px;

    background: #4c4b53;

    display: flex;
    align-items: center;
    justify-content: center;

    cursor: pointer;

    box-shadow:
        2px 3px 4px rgba(0, 0, 0, 0.2);
}


.search-button img {
    width: 22px;
    height: 22px;

    object-fit: contain;

    filter: brightness(0) invert(1);
}


/* =====================================================
   CATEGORY TOGGLE
===================================================== */

.category-toggle {
    height: 43px;

    padding: 4px;

    display: flex;
    align-items: center;

    background: #4d4c53;

    border-radius: 8px;

    box-shadow:
        2px 3px 5px rgba(0, 0, 0, 0.18);
}


.category-btn {
    height: 35px;

    min-width: 105px;

    padding: 0 15px;

    border: none;

    border-radius: 7px;

    background: transparent;

    color: white;

    font-family: 'Poppins', sans-serif;

    font-size: 13px;

    font-weight: 500;

    cursor: pointer;
}


.category-btn.active {
    background: #e8e8e8;

    color: #222;
}


/* =====================================================
   PRODUCT LIST
===================================================== */

.product-list {
    width: 100%;

    flex: 1;

    min-height: 0;

    overflow-y: auto;

    padding: 3px 5px 5px 0;

    display: flex;
    flex-direction: column;

    gap: 10px;
}


/* Hide scrollbar */

.product-list::-webkit-scrollbar {
    width: 0;
}


.product-list {
    scrollbar-width: none;
}


/* =====================================================
   PRODUCT CARD
===================================================== */

.product-card {
    width: 100%;

    min-height: 108px;

    flex-shrink: 0;

    display: flex;
    align-items: center;

    padding: 8px;

    background: #b996a1;

    border-radius: 15px;

    box-shadow:
        2px 3px 5px rgba(0, 0, 0, 0.08);
}


/* =====================================================
   PRODUCT IMAGE
===================================================== */

.product-image {
    width: 118px;
    height: 92px;

    flex-shrink: 0;

    background: #f5f5f5;

    display: flex;
    justify-content: center;
    align-items: center;

    overflow: hidden;
}


.product-image img {
    width: 100%;
    height: 100%;

    object-fit: contain;
}


/* =====================================================
   PRODUCT DETAIL
===================================================== */

.product-detail {
    flex: 1;

    min-width: 0;

    padding:
        0 18px;
}


.product-detail h2 {
    color: #000;

    font-family: 'Poppins', sans-serif;

    font-size: 20px;

    font-weight: 700;

    line-height: 1.2;

    margin-bottom: 3px;
}


.product-detail p {
    color: #fff;

    font-family: 'Poppins', sans-serif;

    font-size: 9px;

    font-weight: 400;

    line-height: 1.35;

    max-width: 650px;

    margin-bottom: 6px;
}


/* =====================================================
   PRICE
===================================================== */

.price {
    display: inline-flex;
    align-items: center;

    min-height: 20px;

    padding: 2px 13px;

    background: #f4f4f4;

    border-radius: 15px;

    color: #111;

    font-family: 'Poppins', sans-serif;

    font-size: 9px;

    font-weight: 700;

    box-shadow:
        1px 2px 3px rgba(0, 0, 0, 0.15);
}


/* =====================================================
   ADD BUTTON
===================================================== */

.add-button {
    width: 42px;
    height: 38px;

    flex-shrink: 0;

    margin-right: 12px;

    border: 1px solid #777;

    border-radius: 7px;

    background: #dce2f5;

    color: #111;

    font-family: Arial, sans-serif;

    font-size: 31px;

    font-weight: 400;

    line-height: 30px;

    display: flex;
    justify-content: center;
    align-items: center;

    cursor: pointer;

    box-shadow:
        2px 3px 4px rgba(0, 0, 0, 0.18);

    transition:
        transform 0.15s ease,
        background 0.15s ease;
}


.add-button:hover {
    transform: scale(1.04);

    background: #eef1ff;
}


.add-button:active {
    transform: scale(0.96);
}


.add-button.added {
    background: #4a6fdc;
    color: #fff;
    border-color: #33509e;
    transform: scale(0.96);
}


/* =====================================================
   PAGINATION
===================================================== */

.pagination {
    width: 100%;

    height: 38px;

    display: flex;
    justify-content: center;
    align-items: flex-end;

    gap: 10px;

    padding-top: 8px;
}


.page-button {
    width: 48px;
    height: 32px;

    border: 1px solid #777;

    border-radius: 18px;

    background: #eeeeee;

    color: #111;

    font-family: Arial, sans-serif;

    font-size: 25px;

    line-height: 20px;

    cursor: pointer;

    display: flex;
    align-items: center;
    justify-content: center;

    box-shadow:
        1px 2px 3px rgba(0, 0, 0, 0.2);
}


.page-button:hover {
    background: #ffffff;
}


/* =====================================================
   RESPONSIVE
===================================================== */

@media (max-width: 1000px) {

    body {
        overflow: auto;
        align-items: flex-start;
    }


    .app-container {
        width: 100%;
        min-width: 900px;
        height: 800px;
    }


    .sidebar {
        width: 300px;
    }


    .main-content {
        padding-left: 25px;
        padding-right: 20px;
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


        <!-- MENU -->

        <nav class="nav-menu">


            <!-- DASHBOARD -->
            <a
                href="dashboard_fo.php"
                class="nav-item"
            >

                <img
                    src="../asset/icon-dashboard.svg"
                    class="nav-icon"
                    alt="Dashboard"
                >

                <span>
                    Dashboard
                </span>

            </a>



            <!-- KATALOG -->
            <a
                href="katalog_fo.php"
                class="nav-item active"
            >

                <img
                    src="../asset/icon-stock.svg"
                    class="nav-icon"
                    alt="Katalog"
                >

                <span>
                    Katalog
                </span>

            </a>



            <!-- PESANAN MASUK -->
            <a
                href="pesanan_masuk_fo.php"
                class="nav-item"
            >

                <img
                    src="../asset/icon-pesananmasuk.svg"
                    class="nav-icon"
                    alt="Pesanan Masuk"
                >

                <span>
                    Pesanan Masuk
                </span>

            </a>



            <!-- STATUS PESANAN -->
            <a
                href="status_pesanan.php"
                class="nav-item"
            >

                <img
                    src="../asset/icon-statuspesanan.svg"
                    class="nav-icon"
                    alt="Status Pesanan"
                >

                <span>
                    Status Pesanan
                </span>

            </a>



            <!-- PEMISAH -->
            <div class="sidebar-line menu-divider"></div>



            <!-- RIWAYAT -->
            <a
                href="riwayat_transaksi.php"
                class="nav-item"
            >

                <img
                    src="../asset/icon-riwayat.svg"
                    class="nav-icon"
                    alt="Riwayat Transaksi"
                >

                <span>
                    Riwayat Transaksi
                </span>

            </a>



            <!-- JADWAL -->
            <a
                href="jadwal_fo.php"
                class="nav-item"
            >

                <img
                    src="../asset/icon-jadwalfo.svg"
                    class="nav-icon"
                    alt="Jadwal FO"
                >

                <span>
                    Jadwal FO
                </span>

            </a>



            <!-- BIODATA -->
            <a
                href="biodata_fo.php"
                class="nav-item"
            >

                <img
                    src="../asset/icon-biodata.svg"
                    class="nav-icon"
                    alt="Biodata"
                >

                <span>
                    Biodata Saya
                </span>

            </a>

        </nav>


        <!-- PEMISAH LOGOUT -->
        <div class="sidebar-line logout-line"></div>


        <!-- LOGOUT -->

        <div class="logout-container">

            <a
                href="login_fo.php"
                class="nav-item logout-btn"
            >

                <img
                    src="../asset/icon-logout.svg"
                    class="nav-icon"
                    alt="Logout"
                >

                <span>
                    Logout
                </span>

            </a>

        </div>

    </aside>



    <!-- =====================================================
         MAIN CONTENT
    ====================================================== -->

    <main class="main-content">


        <!-- JUDUL -->

        <div class="title-box">

            <h1>
                Katalog Produk
            </h1>

        </div>



        <!-- =================================================
             SEARCH + CATEGORY
        ================================================== -->

        <div class="top-controls">


            <!-- SEARCH -->

            <div class="search-area">

                <input
                    type="text"
                    id="searchInput"
                    class="search-input"
                    placeholder="Cari Produk.."
                >


                <button
                    type="button"
                    class="search-button"
                    onclick="searchProduct()"
                >

                    <img
                        src="../asset/icon-search.png"
                        alt="Search"
                    >

                </button>

            </div>



            <!-- CATEGORY -->

            <div class="category-toggle">


                <!-- AKSESORIS -->

                <button
                    type="button"
                    class="category-btn active"
                >
                    Aksesoris
                </button>



                <!-- KANDANG -->

                <button
                    type="button"
                    class="category-btn"
                    onclick="window.location.href='katalog_kandang.php'"
                >
                    Kandang
                </button>

            </div>

        </div>



        <!-- =================================================
             PRODUCT LIST
        ================================================== -->

        <div
            class="product-list"
            id="productList"
        >



            <!-- =================================================
                 PRODUK 1 - KALUNG
            ================================================== -->

            <div
                class="product-card"
                data-name="Kalung"
                required
            >

                <div class="product-image">

                    <img
                        src="../asset/kalung.png"
                        alt="Kalung"
                    >

                </div>


                <div class="product-detail">

                    <h2>
                        Kalung
                    </h2>

                    <p>
                        Aksesori leher yang nyaman dan ringan,
                        dilengkapi dengan lonceng kecil untuk
                        mempermudah memantau keberadaan hewan
                        peliharaan.
                    </p>

                    <span class="price">
                        Rp. 50.000 / Item
                    </span>

                </div>


                <!-- TOMBOL PLUS -->

                <button
                    type="button"
                    class="add-button"
                    onclick="addProduct('Kalung', this)"
                    aria-label="Tambah Kalung"
                >
                    +
                </button>

            </div>



            <!-- =================================================
                 PRODUK 2 - HARNESS
            ================================================== -->

            <div
                class="product-card"
                data-name="Harness"
                required
            >

                <div class="product-image">

                    <img
                        src="../asset/harness.png"
                        alt="Harness"
                    >

                </div>


                <div class="product-detail">

                    <h2>
                        Harness
                    </h2>

                    <p>
                        Tali badan yang didesain ergonomis untuk
                        menyebarkan tekanan secara merata di dada,
                        menjaga hewan tetap aman tanpa merusak leher.
                    </p>

                    <span class="price">
                        Rp. 50.000 / Item
                    </span>

                </div>


                <!-- TOMBOL PLUS -->

                <button
                    type="button"
                    class="add-button"
                    onclick="addProduct('Harness', this)"
                    aria-label="Tambah Harness"
                >
                    +
                </button>

            </div>



            <!-- =================================================
                 PRODUK 3 - LEASH
            ================================================== -->

            <div
                class="product-card"
                data-name="Leash"
                required
            >

                <div class="product-image">

                    <img
                        src="../asset/leash.png"
                        alt="Leash"
                    >

                </div>


                <div class="product-detail">

                    <h2>
                        Leash
                    </h2>

                    <p>
                        Tali tuntun berbahan kuat dan tahan lama
                        dengan klip pengaman yang kokoh, memberikan
                        kontrol penuh dan kenyamanan saat berjalan.
                    </p>

                    <span class="price">
                        Rp. 50.000 / Item
                    </span>

                </div>


                <!-- TOMBOL PLUS -->

                <button
                    type="button"
                    class="add-button"
                    onclick="addProduct('Leash', this)"
                    aria-label="Tambah Leash"
                >
                    +
                </button>

            </div>



            <!-- =================================================
                 PRODUK 4 - ID TAG
            ================================================== -->

            <div
                class="product-card"
                data-name="ID Tag"
                required
            >

                <div class="product-image">

                    <img
                        src="../asset/id-tag.png"
                        alt="ID Tag"
                    >

                </div>


                <div class="product-detail">

                    <h2>
                        ID Tag
                    </h2>

                    <p>
                        Lencana identitas yang dapat diukir dengan
                        nama hewan dan nomor telepon pemilik sebagai
                        langkah pencegahan jika hewan terpisah.
                    </p>

                    <span class="price">
                        Rp. 50.000 / Item
                    </span>

                </div>


                <!-- TOMBOL PLUS -->

                <button
                    type="button"
                    class="add-button"
                    onclick="addProduct('ID Tag', this)"
                    aria-label="Tambah ID Tag"
                >
                    +
                </button>

            </div>



            <!-- =================================================
                 PRODUK 5 - BAJU HEWAN
            ================================================== -->

            <div
                class="product-card"
                data-name="Baju Hewan"
                required
            >

                <div class="product-image">

                    <img
                        src="../asset/bajuhewan.png"
                        alt="Baju Hewan"
                    >

                </div>


                <div class="product-detail">

                    <h2>
                        Baju Hewan
                    </h2>

                    <p>
                        Pakaian hewan berbahan lembut dan menyerap
                        keringat, menjaga anjing atau kucing tetap
                        hangat, nyaman, dan menggemaskan.
                    </p>

                    <span class="price">
                        Rp. 50.000 / Item
                    </span>

                </div>


                <!-- TOMBOL PLUS -->

                <button
                    type="button"
                    class="add-button"
                    onclick="addProduct('Baju Hewan', this)"
                    aria-label="Tambah Baju Hewan"
                >
                    +
                </button>

            </div>



        </div>



        <!-- =================================================
             PAGINATION
        ================================================== -->

        <div class="pagination">


            <button
                type="button"
                class="page-button"
                onclick="window.location.href='katalog_kandang.php'"
            >
                ‹
            </button>


            <button
                type="button"
                class="page-button"
            >
                ›
            </button>


        </div>


    </main>

</div>



<!-- =====================================================
     JAVASCRIPT
===================================================== -->

<script>


    /* =====================================================
       SEARCH
    ===================================================== */

    function searchProduct() {

        const keyword =
            document
                .getElementById("searchInput")
                .value
                .trim()
                .toLowerCase();


        const products =
            document.querySelectorAll(".product-card");


        products.forEach(function(product) {

            const productName =
                product
                    .getAttribute("data-name")
                    .toLowerCase();


            if (
                productName.includes(keyword)
            ) {

                product.style.display =
                    "flex";

            } else {

                product.style.display =
                    "none";

            }

        });

    }



    /* =====================================================
       SEARCH SAAT ENTER
    ===================================================== */

    document
        .getElementById("searchInput")
        .addEventListener(
            "keyup",
            function(event) {

                if (event.key === "Enter") {

                    searchProduct();

                }

            }
        );



    /* =====================================================
       TOMBOL TAMBAH (+)
       
       TIDAK MENGUBAH DESIGN
       
       HANYA:
       1. Menyimpan produk
       2. Masuk ke detail pesanan
    ===================================================== */

    function addProduct(
        productName,
        button
    ) {

        /* Simpan produk yang dipilih */

        localStorage.setItem(
            "selectedProduct",
            productName
        );


        /* Langsung pindah */

        window.location.href =
            "detail_pesanan_fo.php";

    }


</script>


</body>

</html>