<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Pembayaran - Pet Care</title>

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
    margin: 0;

    background: #000;

    font-family: Arial, Helvetica, sans-serif;

    min-height: 100vh;

    display: flex;

    justify-content: center;

    align-items: center;

    overflow: hidden;
}


/* =====================================================
   PAGE WRAPPER
===================================================== */

.page-wrapper {
    width: 1200px;

    height: 800px;

    display: flex;
    flex-direction: column;

    background: #ffffff;

    overflow: hidden;
}


/* =====================================================
   HEADER
===================================================== */

.top-header {

    height: 115px;

    width: 100%;

    flex-shrink: 0;

    background: linear-gradient(
        90deg,
        #e8bcc8 0%,
        #a98d95 100%
    );

    display: flex;

    align-items: center;

    padding-left: 35px;

    border-bottom: 1px solid #c7b1b6;
}


/* LOGO HEADER */

.header-logo {

    width: 375px;

    height: auto;

    object-fit: contain;

    display: block;
}


/* =====================================================
   MAIN AREA
===================================================== */

.main-area {

    flex: 1;

    min-height: 0;

    width: 100%;

    background-image:
        linear-gradient(
            rgba(255,255,255,0.88),
            rgba(255,255,255,0.88)
        );

    display: flex;

    justify-content: center;

    align-items: center;

    padding: 28px 40px;

    overflow: hidden;
}


/* =====================================================
   PAYMENT CARD
===================================================== */

.payment-card {

    position: relative;

    width: 100%;

    max-width: 1100px;

    height: 560px;

    background: #f2dddd;

    border-radius: 28px;

    overflow: hidden;

    box-shadow:
        0 8px 20px rgba(0,0,0,0.10);

    border: 1px solid rgba(190,160,165,0.3);
}


/* =====================================================
   BACKGROUND PRODUCT
===================================================== */

.background-products {

    position: absolute;

    inset: 0;

    display: grid;

    grid-template-columns:
        repeat(3, 1fr);

    grid-template-rows:
        repeat(3, 1fr);

    gap: 4px;

    padding: 5px;

    z-index: 1;
}


.background-products img {

    width: 100%;

    height: 100%;

    object-fit: cover;

    opacity: 0.075;

    display: block;
}


/* =====================================================
   QRIS
===================================================== */

.qris-wrapper {

    position: absolute;

    z-index: 5;

    top: 22px;

    left: 0;

    width: 100%;

    display: flex;

    justify-content: center;
}


/* QRIS IMAGE */

.qris-image {

    width: 225px;

    height: 325px;

    object-fit: cover;

    object-position: center;

    border-radius: 12px;

    display: block;

    box-shadow:
        0 5px 12px rgba(0,0,0,0.08);
}


/* =====================================================
   PAYMENT BAR
===================================================== */

.payment-bar {

    position: absolute;

    z-index: 10;

    left: 7.5%;

    right: 7.5%;

    bottom: 135px;

    height: 55px;

    background: #edc6ca;

    border-radius: 30px;

    display: flex;

    align-items: center;

    gap: 14px;

    padding: 7px 20px;

    box-shadow:
        0 3px 5px rgba(0,0,0,0.18);
}


/* =====================================================
   TOTAL PRICE
===================================================== */

.total-price {

    font-size: 17px;

    color: #222;

    white-space: nowrap;

    font-weight: 500;

    margin-right: 5px;
}


/* =====================================================
   CASH BUTTON
===================================================== */

.cash-button {

    height: 34px;

    padding: 0 17px;

    border-radius: 18px;

    border: 1px solid #4d5945;

    background: #cfe0bd;

    color: #222;

    font-size: 14px;

    font-weight: 600;

    cursor: pointer;

    white-space: nowrap;
}


.cash-button:hover {

    background: #c2d5b0;

}


/* =====================================================
   UPLOAD WRAPPER
===================================================== */

.upload-wrapper {

    height: 38px;

    display: flex;

    align-items: center;

    border: 1px solid #80666c;

    background: #f2dddd;

    overflow: hidden;

    flex: 1;

    min-width: 250px;
}


/* =====================================================
   CHOOSE FILE
===================================================== */

.choose-file {

    height: 100%;

    display: flex;

    align-items: center;

    padding: 0 12px;

    background: #e5c8cc;

    border-right: 1px solid #80666c;

    font-size: 14px;

    color: #333;

    cursor: pointer;

    white-space: nowrap;
}


.choose-file:hover {

    background: #dcbcc2;

}


/* =====================================================
   FILE NAME
===================================================== */

.file-name {

    padding: 0 10px;

    font-size: 14px;

    color: #777;

    overflow: hidden;

    text-overflow: ellipsis;

    white-space: nowrap;
}


/* HIDDEN FILE INPUT */

.file-input {

    display: none;
}


/* =====================================================
   UPLOAD TRANSAKSI
===================================================== */

.upload-button {

    height: 38px;

    padding: 0 17px;

    background: #eddddd;

    border: 1px solid #9d747d;

    border-radius: 18px;

    color: #333;

    font-size: 14px;

    font-weight: 600;

    cursor: pointer;

    white-space: nowrap;
}


.upload-button:hover {

    background: #dfc8cb;

}


/* =====================================================
   FOOTER
===================================================== */

.bottom-footer {

    width: 100%;

    height: 58px;

    flex-shrink: 0;

    background: linear-gradient(
        90deg,
        #e6b7c4 0%,
        #a78991 100%
    );

    display: flex;

    align-items: center;

    padding-left: 20px;
}


/* FOOTER LOGO */

.footer-logo {

    width: 105px;

    height: auto;

    object-fit: contain;

    opacity: 0.9;
}


/* =====================================================
   RESPONSIVE
===================================================== */

@media (max-width: 1200px) {

    body {
        align-items: flex-start;
    }

    .page-wrapper {
        width: 100vw;

        height: 100vh;
    }

}


@media (max-width: 1100px) {

    .payment-bar {

        left: 4%;

        right: 4%;

        gap: 8px;

        padding-left: 12px;

        padding-right: 12px;

    }


    .total-price {

        font-size: 14px;

    }


    .cash-button {

        padding: 0 10px;

        font-size: 12px;

    }


    .upload-button {

        padding: 0 10px;

        font-size: 12px;

    }

}


@media (max-width: 800px) {

    .top-header {

        height: 90px;

        padding-left: 20px;

    }


    .header-logo {

        width: 280px;

    }


    .main-area {

        padding: 20px;

    }


    .payment-card {

        height: 600px;

    }


    .qris-image {

        width: 210px;

        height: 300px;

    }


    .payment-bar {

        height: auto;

        bottom: 30px;

        flex-wrap: wrap;

        border-radius: 20px;

        padding: 12px;

    }


    .total-price {

        width: 100%;

        text-align: center;

    }


    .upload-wrapper {

        flex: 1;

    }

}


@media (max-width: 550px) {

    .header-logo {

        width: 230px;

    }


    .background-products {

        grid-template-columns:
            repeat(2, 1fr);

        grid-template-rows:
            repeat(5, 1fr);

    }


    .qris-image {

        width: 190px;

        height: 275px;

    }


    .payment-bar {

        left: 15px;

        right: 15px;

    }

}
/* =====================================================
   BATAL PEMBAYARAN
===================================================== */

.cancel-button {

    height: 38px;

    padding: 0 17px;

    background: #d3b7bd;

    border: 1px solid #80666c;

    border-radius: 18px;

    color: #333;

    font-size: 14px;

    font-weight: 600;

    cursor: pointer;

    white-space: nowrap;
}


.cancel-button:hover {

    background: #c7aab1;

}
    </style>
</head>

<body>

<div class="page-wrapper">

    <!-- ================= HEADER ================= -->
    <header class="top-header">

        <img
            src="../asset/logo_header.png"
            alt="Pet Care"
            class="header-logo"
        >

    </header>


    <!-- ================= MAIN ================= -->
    <main class="main-area">

        <div class="payment-card">

            <!-- BACKGROUND PRODUK -->
            <div class="background-products">

                <img src="../asset/kalung.png" alt="">
                <img src="../asset/leash.png" alt="">
                <img src="../asset/harness.png" alt="">

                <img src="../asset/bajuhewan.png" alt="">
                <img src="../asset/produk_kalung.png" alt="">
                <img src="../asset/kalung.png" alt="">

                <img src="../asset/kandang-rangka.png" alt="">
                <img src="../asset/kandang-jeruji.png" alt="">
                <img src="../asset/kandang-roda.png" alt="">

            </div>


            <!-- ================= QRIS ================= -->
            <div class="qris-wrapper">

                <img
                    src="../asset/qris pet care.jpeg"
                    alt="QRIS Pet Care"
                    class="qris-image"
                >

            </div>


            <!-- ================= PAYMENT BAR ================= -->
            <div class="payment-bar">

                <!-- TOTAL -->
                <div class="total-price">
                    Total Harga : Rp100.000 / Item
                </div>


                <!-- BAYAR CASH -->
                <button
                    type="button"
                    class="cash-button"
                    onclick="bayarCash()">
                    Bayar Cash
                </button>


                <!-- FILE UPLOAD -->
                <div class="upload-wrapper">

                    <label
                        for="buktiTransaksi"
                        class="choose-file">
                        Choose File
                    </label>

                    <span
                        id="fileName"
                        class="file-name">
                        No File Choosen
                    </span>

                </div>


                <input
                    type="file"
                    id="buktiTransaksi"
                    class="file-input"
                    accept="image/*"
                >


                <!-- UPLOAD TRANSAKSI -->
                <button
                    type="button"
                    class="upload-button"
                    onclick="uploadTransaksi()">
                    Upload Transaksi
                </button>


                <!-- BATAL -->
                <button
                    type="button"
                    class="cancel-button"
                    onclick="batalPembayaran()">
                    Batal
                </button>

            </div>

        </div>

    </main>


    <!-- ================= FOOTER ================= -->
    <footer class="bottom-footer">

        <img
            src="../asset/logo-petcare.png"
            alt="Pet Care"
            class="footer-logo"
        >

    </footer>

</div>


<script>

    /* ===============================
       NAMA FILE
    =============================== */

    const fileInput =
        document.getElementById("buktiTransaksi");

    const fileName =
        document.getElementById("fileName");


    fileInput.addEventListener("change", function () {

        if (this.files.length > 0) {

            fileName.textContent =
                this.files[0].name;

        } else {

            fileName.textContent =
                "No File Choosen";

        }

    });


    /* ===============================
       BAYAR CASH
    =============================== */

    function bayarCash() {

        alert(
            "Pembayaran Cash berhasil. Pesanan dikirim ke Pesanan Masuk."
        );

        window.location.href = "pesanan_masuk_fo.php";

    }


    /* ===============================
       UPLOAD TRANSAKSI
    =============================== */

    function uploadTransaksi() {

        if (fileInput.files.length === 0) {

            alert(
                "Silakan pilih bukti transaksi terlebih dahulu."
            );

            return;

        }

        alert(
            "Bukti transaksi berhasil diupload. Pesanan dikirim ke Pesanan Masuk."
        );

        window.location.href = "pesanan_masuk_fo.php";

    }


    /* ===============================
       BATAL PEMBAYARAN
    =============================== */

    function batalPembayaran() {

        const konfirmasi = confirm(
            "Apakah kamu yakin tidak jadi melakukan pembayaran?"
        );

        if (konfirmasi) {

            window.location.href = "detail_pesanan_fo.php";

        }

    }

</script>

</body>
</html>