<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Detail Pesanan - Pet Care</title>

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

body {
    font-family: Arial, Helvetica, sans-serif;

    background: #000;

    min-height: 100vh;

    display: flex;
    justify-content: center;
    align-items: center;

    overflow: hidden;
}


/* =====================================================
   APP CONTAINER
===================================================== */

.app-container {
    width: 1208px;
    height: 780px;

    background: #f7f5f1;

    position: relative;

    overflow: hidden;
}


/* =====================================================
   HEADER
===================================================== */

.header {
    width: 100%;
    height: 115px;

    background: linear-gradient(
        90deg,
        #e8b9c7,
        #c9aab4
    );

    border-bottom: 1px solid #9d8a8e;

    display: flex;
    align-items: center;

    padding-left: 35px;

    overflow: hidden;
}


/* LOGO */

.header-logo {
    width: 370px;
    height: 90px;

    display: flex;
    align-items: center;
    justify-content: flex-start;

    overflow: hidden;
    flex-shrink: 0;
}


.header-logo img {
    width: 365px;
    height: 82px;

    max-width: 100%;
    max-height: 82px;

    display: block;

    object-fit: contain;
    object-position: left center;
}


/* =====================================================
   MAIN CONTENT
===================================================== */

.main-content {
    width: 100%;
    height: calc(100% - 180px);

    background-image:
        linear-gradient(
            rgba(255,255,255,0.88),
            rgba(255,255,255,0.88)
        );

    padding-top: 27px;
}


/* =====================================================
   DETAIL CARD
===================================================== */

.detail-card {
    width: 88%;

    min-height: 555px;

    margin: 0 auto;

    background: rgba(244, 230, 232, 0.92);

    border-radius: 28px;

    padding: 20px 70px 30px;

    box-shadow:
        0 5px 10px rgba(0, 0, 0, 0.08);

    border: 1px solid rgba(190, 160, 165, 0.25);
}


/* =====================================================
   TITLE
===================================================== */

.title-box {
    width: 58%;

    height: 43px;

    margin: 0 auto 42px;

    background: #d2adbb;

    border: 1px solid #80636b;

    border-radius: 25px;

    display: flex;
    align-items: center;
    justify-content: center;

    font-size: 27px;

    font-weight: 700;

    color: #111;

    box-shadow:
        0 2px 3px rgba(0, 0, 0, 0.08);
}


/* =====================================================
   FORM GRID
===================================================== */

.form-grid {
    display: grid;

    grid-template-columns: 1fr 1fr;

    gap: 35px;

    margin-bottom: 34px;
}


.form-group {
    width: 100%;
}


.form-group label,
.product-section > label,
.total-section label {
    display: block;

    font-size: 17px;

    font-weight: 500;

    color: #171717;

    margin-bottom: 5px;
}


/* =====================================================
   INPUT BOX
===================================================== */

.input-box {
    width: 100%;

    height: 39px;

    background: #efc9c8;

    border-radius: 22px;

    padding: 10px 20px;

    font-size: 16px;

    color: #292929;

    box-shadow:
        6px 5px 5px rgba(0, 0, 0, 0.18);
}


/* =====================================================
   PRODUCT GRID
===================================================== */

.product-grid {
    display: grid;

    grid-template-columns: 1fr 1fr;

    gap: 35px;

    margin-bottom: 35px;
}


.product-section {
    width: 100%;
}


/* =====================================================
   PRODUCT CARD
===================================================== */

.product-card {
    width: 100%;

    height: 78px;

    background: #efc9c8;

    border-radius: 22px;

    display: flex;

    align-items: center;

    padding: 7px;

    box-shadow:
        6px 5px 5px rgba(0, 0, 0, 0.18);
}


/* =====================================================
   PRODUCT IMAGE
===================================================== */

.product-image {
    width: 75px;
    height: 62px;

    background: #fff;

    border-radius: 15px;

    display: flex;

    align-items: center;
    justify-content: center;

    overflow: hidden;

    flex-shrink: 0;
}


.product-image img {
    width: 100%;
    height: 100%;

    object-fit: contain;

    display: block;
}


/* =====================================================
   PRODUCT INFO
===================================================== */

.product-info {
    flex: 1;

    padding-left: 15px;

    min-width: 0;
}


.product-name {
    font-size: 18px;

    font-weight: 500;

    margin-bottom: 4px;

    white-space: nowrap;
}


.product-price {
    font-size: 16px;

    color: #8b8585;

    white-space: nowrap;
}


/* =====================================================
   QUANTITY
===================================================== */

.quantity {
    display: flex;

    align-items: center;

    gap: 8px;

    padding-right: 7px;
}


.quantity button {
    width: 24px;
    height: 24px;

    border-radius: 50%;

    border: 1px solid #79606a;

    background: #d9b5c2;

    font-size: 17px;

    line-height: 20px;

    cursor: pointer;

    display: flex;

    justify-content: center;
    align-items: center;
}


.quantity span {
    width: 28px;
    height: 28px;

    border-radius: 50%;

    border: 1px solid #79606a;

    background: #d9b5c2;

    display: flex;

    justify-content: center;
    align-items: center;

    font-size: 16px;
}


/* =====================================================
   TOTAL
===================================================== */

.total-section {
    width: 350px;

    margin: 0 auto 67px;
}


.total-section label {
    text-align: left;

    margin-left: 7px;
}


.total-box {
    width: 100%;

    height: 42px;

    background: #efc9c8;

    border-radius: 22px;

    padding: 10px 20px;

    font-size: 17px;

    color: #333;

    box-shadow:
        6px 5px 5px rgba(0, 0, 0, 0.18);
}


/* =====================================================
   BUTTON ROW
===================================================== */

.button-row {
    width: 100%;

    display: grid;

    grid-template-columns: 1fr 1fr 1fr;

    gap: 80px;

    align-items: center;
}


/* =====================================================
   BUTTON
===================================================== */

.btn {
    height: 38px;

    border: none;

    border-radius: 22px;

    font-size: 18px;

    font-weight: 700;

    color: white;

    cursor: pointer;

    box-shadow:
        7px 4px 5px rgba(0, 0, 0, 0.18);

    transition: 0.2s ease;
}


.btn:hover {
    transform: translateY(-2px);

    box-shadow:
        7px 6px 7px rgba(0, 0, 0, 0.22);
}


.btn:active {
    transform: translateY(1px);
}


/* ADD */

.btn-add {
    background: #149eea;
}


/* BATAL */

.btn-batal {
    background: #f02020;
}


/* SIMPAN */

.btn-simpan {
    background: #050505;
}


/* =====================================================
   FOOTER
===================================================== */

.footer {
    position: absolute;

    left: 0;
    bottom: 0;

    width: 100%;
    height: 58px;

    background: rgba(217, 151, 173, 0.72);

    display: flex;

    align-items: center;

    padding-left: 20px;
}


.footer img {
    width: 105px;

    height: auto;

    object-fit: contain;
}


/* =====================================================
   RESPONSIVE
===================================================== */

@media (max-width: 1250px) {

    .app-container {
        width: 100vw;
        height: 100vh;
    }

}


@media (max-width: 900px) {

    .detail-card {
        width: 94%;

        padding-left: 35px;
        padding-right: 35px;
    }

    .button-row {
        gap: 25px;
    }

}


@media (max-width: 700px) {

    .header-logo img {
        width: 280px;
        height: 75px;
        max-height: 75px;
    }

    .form-grid,
    .product-grid {
        grid-template-columns: 1fr;
    }

    .detail-card {
        overflow-y: auto;

        height: calc(100vh - 150px);
    }

    .title-box {
        width: 80%;
    }

    .total-section {
        width: 100%;
    }

    .button-row {
        grid-template-columns: 1fr;

        gap: 15px;
    }

}
    </style>
</head>

<body>

    <div class="app-container">

        <!-- ================= HEADER ================= -->
        <header class="header">

            <div class="header-logo">
                <img src="../asset/logo-petcare.png" alt="Pet Care">
            </div>

        </header>


        <!-- ================= CONTENT ================= -->
        <main class="main-content">

            <section class="detail-card">

                <!-- JUDUL -->
                <div class="title-box">
                    Detail Pesanan
                </div>


                <!-- ================= DATA PESANAN ================= -->

                <div class="form-grid">

                    <!-- ID -->
                    <div class="form-group">
                        <label>ID</label>

                        <div class="input-box">
                            194
                        </div>
                    </div>


                    <!-- NAMA PENGGUNA -->
                    <div class="form-group">
                        <label>Nama Pengguna</label>

                        <div class="input-box">
                            Sarah Jessica
                        </div>
                    </div>

                </div>


                <!-- ================= PRODUK ================= -->

                <div class="product-grid">

                    <!-- AKSESORIS -->
                    <div class="product-section">

                        <label>Aksesoris</label>

                        <div class="product-card">

                            <div class="product-image">
                                <img
                                    src="../asset/kalung.png"
                                    alt="Kalung">
                            </div>

                            <div class="product-info">

                                <div class="product-name">
                                    Kalung
                                </div>

                                <div class="product-price">
                                    Rp 50.000 / item
                                </div>

                            </div>

                            <div class="quantity">

                                <button type="button">−</button>

                                <span>1</span>

                                <button type="button">+</button>

                            </div>

                        </div>

                    </div>


                    <!-- KANDANG -->
                    <div class="product-section">

                        <label>Kandang</label>

                        <div class="product-card">

                            <div class="product-image">
                                <img
                                    src="../asset/kandang-roda.png"
                                    alt="Kandang Roda">
                            </div>

                            <div class="product-info">

                                <div class="product-name">
                                    Kandang Roda
                                </div>

                                <div class="product-price">
                                    Rp 50.000 / item
                                </div>

                            </div>

                            <div class="quantity">

                                <button type="button">−</button>

                                <span>1</span>

                                <button type="button">+</button>

                            </div>

                        </div>

                    </div>

                </div>


                <!-- ================= TOTAL ================= -->

                <div class="total-section">

                    <label>Total Harga</label>

                    <div class="total-box">
                        Rp 100.000 / Item
                    </div>

                </div>


                <!-- ================= BUTTON ================= -->

                <div class="button-row">

                    <!-- ADD -->
                    <button
                        type="button"
                        class="btn btn-add"
                        onclick="window.location.href='katalog_fo.php'">
                        Add
                    </button>


                    <!-- BATAL -->
                    <button
                        type="button"
                        class="btn btn-batal"
                        onclick="window.location.href='katalog_fo.php'">
                        Batal
                    </button>


                    <!-- SIMPAN -->
                    <button
                        type="button"
                        class="btn btn-simpan"
                        onclick="window.location.href='pembayaran_fo.php'">
                        Simpan
                    </button>

                </div>

            </section>

        </main>


        <!-- ================= FOOTER ================= -->

        <footer class="footer">

            <img src="../asset/logo-petcare.png" alt="Pet Care">

        </footer>

    </div>

</body>
</html>