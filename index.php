<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Index | Utama</title>

    <style>
/* =========================================================
   RESET
========================================================= */

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}


html {
    scroll-behavior: smooth;
}


body {
    width: 100%;
    min-height: 100vh;

    overflow-x: hidden;

    font-family: Georgia, "Times New Roman", serif;

    color: #111;

    background: #f4dfe5;
}



/* =========================================================
   HEADER
========================================================= */

.header {

    width: 100%;
    height: 105px;

    position: relative;

    display: flex;
    align-items: center;

    padding: 0 40px;

    background:
        linear-gradient(
            90deg,
            #e7b6c5 0%,
            #d1a6b3 50%,
            #b58d9a 100%
        );

    border-bottom: 2px solid #806c73;

    z-index: 100;
}


/* LOGO */

.header-logo {

    width: 360px;
    height: 100%;

    display: flex;
    align-items: center;

    text-decoration: none;
}


.header-logo img {

    width: 330px;
    height: auto;

    display: block;

    object-fit: contain;
}



/* =========================================================
   HEADER MENU
========================================================= */

.header-menu {

    position: absolute;

    left: 50%;

    top: 50%;

    transform: translate(-50%, -50%);

    display: flex;
    align-items: center;

    gap: 12px;
}


.header-menu a {

    display: flex;
    align-items: center;

    text-decoration: none;
}


.login-button {

    width: 120px;
    height: 60px;

    object-fit: contain;

    display: block;
}


.register-button {

    width: 150px;
    height: 60px;

    object-fit: contain;

    display: block;
}



/* =========================================================
   WELCOME BADGE
========================================================= */

.welcome-badge {

    position: absolute;

    right: 25px;
    top: 7px;

    width: 180px;
    height: 90px;

    object-fit: contain;

    display: block;
}



/* =========================================================
   HERO
========================================================= */

.hero {

    width: 100%;

    min-height: 610px;

    padding: 32px 40px;

    display: flex;
    align-items: center;
    justify-content: center;

    background:
        linear-gradient(
            rgba(255,255,255,0.78),
            rgba(255,255,255,0.78)
        ),
        url("../asset/home.png");

    background-size: 520px;

    background-position: center;

    background-repeat: repeat;
}


.hero-content {

    width: min(1250px, 100%);

    min-height: 520px;

    padding: 45px 45px 45px 55px;

    display: flex;
    align-items: center;
    justify-content: space-between;

    background:
        rgba(244, 232, 235, 0.86);

    border: 1px solid #a9999e;

    border-radius: 32px;

    box-shadow:
        0 4px 10px rgba(0,0,0,0.13);
}



/* =========================================================
   HERO TEXT
========================================================= */

.hero-text {

    width: 48%;

    padding-left: 15px;
}


.hero-text h1 {

    font-family:
        Arial,
        Helvetica,
        sans-serif;

    font-size: 46px;

    line-height: 1.12;

    font-weight: 900;

    color: #506d56;

    letter-spacing: -1px;
}


.hero-text p {

    width: 500px;
    max-width: 100%;

    margin-top: 15px;

    font-family:
        Arial,
        Helvetica,
        sans-serif;

    font-size: 14px;

    line-height: 1.4;

    font-weight: 600;
}



/* =========================================================
   HERO BUTTONS
========================================================= */

.hero-buttons {

    margin-top: 25px;

    display: flex;

    align-items: center;

    gap: 28px;
}


.hero-btn {

    min-width: 160px;
    min-height: 65px;

    padding: 10px 22px;

    display: flex;
    align-items: center;
    justify-content: center;

    text-align: center;

    text-decoration: none;

    color: #674f55;

    background:
        linear-gradient(
            180deg,
            #efd7dc,
            #d7b5be
        );

    border: 1px solid #fff;

    border-radius: 50%;

    box-shadow:
        3px 4px 5px rgba(0,0,0,0.20);

    font-family:
        Arial,
        Helvetica,
        sans-serif;

    font-size: 20px;

    line-height: 1.05;

    font-weight: 800;

    transition:
        transform 0.2s ease,
        background 0.2s ease;
}


.hero-btn:hover {

    transform: translateY(-3px);

    background:
        linear-gradient(
            180deg,
            #f3dfe3,
            #dfbec6
        );
}



/* =========================================================
   HERO IMAGE
========================================================= */

.hero-image {

    width: 52%;

    min-height: 450px;

    display: flex;
    align-items: center;
    justify-content: center;
}


.hero-image img {

    width: 100%;
    max-width: 680px;

    height: auto;

    display: block;

    object-fit: contain;
}



/* =========================================================
   BRAND SECTION
========================================================= */

.brand-section {

    width: 100%;

    height: 105px;

    position: relative;

    background:
        linear-gradient(
            90deg,
            #e5b5c3,
            #c39aa8,
            #a87e8d
        );

    border-top: 2px solid #a2858d;

    border-bottom: 2px solid #806d73;
}


/* LOGO KECIL */

.brand-small-logo {

    position: absolute;

    left: 20px;
    top: 8px;

    width: 70px;
    height: 70px;

    object-fit: contain;
}


/* LOGO UTAMA */

.brand-main-logo {

    position: absolute;

    left: 20px;
    bottom: 7px;

    width: 250px;
    height: auto;

    object-fit: contain;
}


/* BADGE */

.brand-badge {

    position: absolute;

    right: 28px;
    bottom: 8px;

    width: 150px;
    height: 80px;

    object-fit: contain;
}



/* =========================================================
   EXPLORE SECTION
========================================================= */

.explore {

    width: 100%;

    min-height: 700px;

    padding: 50px 40px 60px;

    background:
        linear-gradient(
            rgba(242,224,229,0.91),
            rgba(242,224,229,0.91)
        ),
        url("../asset/home.png");

    background-size: 520px;

    background-repeat: repeat;

    background-position: center;
}


.explore-container {

    width: min(1200px, 100%);

    min-height: 600px;

    margin: auto;

    padding: 38px 45px 48px;

    background:
        rgba(235, 218, 223, 0.86);

    border: 1px solid rgba(255,255,255,0.95);

    border-radius: 30px;

    box-shadow:
        0 5px 12px rgba(0,0,0,0.12);
}



/* =========================================================
   EXPLORE TITLE
========================================================= */

.explore-title {

    width: 100%;

    min-height: 75px;

    margin-bottom: 20px;

    display: flex;

    align-items: center;
    justify-content: center;

    gap: 12px;

    text-align: center;
}


.best-selling-title {

    font-family:
        Georgia,
        "Times New Roman",
        serif;

    font-size: 46px;

    font-weight: bold;

    font-style: italic;

    color: #c59635;

    text-shadow:
        2px 2px 3px rgba(0,0,0,0.30);
}


.essential-title {

    font-family:
        Georgia,
        "Times New Roman",
        serif;

    font-size: 27px;

    letter-spacing: 1px;

    color: #111;
}



/* =========================================================
   BENEFIT
========================================================= */

.benefit-container {

    width: 100%;

    display: grid;

    grid-template-columns:
        repeat(3, 1fr);

    gap: 55px;

    margin-bottom: 35px;
}


.benefit-card {

    min-height: 110px;

    padding: 16px 24px;

    display: flex;
    flex-direction: column;

    align-items: center;
    justify-content: center;

    text-align: center;

    background: #fffbea;

    border-radius: 22px;

    border: 1px solid #e2d7d9;

    box-shadow:
        6px 7px 5px rgba(0,0,0,0.20);
}


.benefit-card h3 {

    margin-bottom: 7px;

    font-size: 19px;

    font-weight: 500;
}


.benefit-card p {

    max-width: 290px;

    font-family:
        Arial,
        Helvetica,
        sans-serif;

    font-size: 12px;

    line-height: 1.35;
}



/* =========================================================
   PRODUCT TITLE
========================================================= */

.product-title {

    width: 100%;

    margin: 15px 0 30px;

    text-align: center;

    font-family:
        Georgia,
        "Times New Roman",
        serif;

    font-size: 40px;

    font-weight: normal;
}


.product-title span {

    color: #c59635;

    font-size: 43px;

    font-weight: bold;

    font-style: italic;

    text-shadow:
        2px 2px 3px rgba(0,0,0,0.30);
}



/* =========================================================
   PRODUCT CONTAINER
========================================================= */

.product-container {

    width: 100%;

    display: grid;

    grid-template-columns:
        repeat(3, 1fr);

    gap: 55px;
}



/* =========================================================
   PRODUCT CARD
========================================================= */

.product-card {

    min-width: 0;
}



/* =========================================================
   PRODUCT IMAGE
========================================================= */

.product-image {

    width: 100%;

    height: 175px;

    display: flex;
    align-items: center;
    justify-content: center;

    background: #fff;

    border-radius: 7px;

    overflow: hidden;

    box-shadow:
        0 4px 5px rgba(0,0,0,0.20);
}


.product-image img {

    width: 220px;
    height: 165px;

    object-fit: contain;

    display: block;
}



/* =========================================================
   CATEGORY
========================================================= */

.category {

    width: max-content;

    margin: 9px auto 6px;

    padding: 5px 20px;

    display: block;

    background: #eee4e7;

    border-radius: 20px;

    text-align: center;

    font-size: 13px;

    box-shadow:
        2px 3px 4px rgba(0,0,0,0.18);
}



/* =========================================================
   PRODUCT NAME
========================================================= */

.product-card h3 {

    margin-top: 6px;

    font-family:
        Arial,
        Helvetica,
        sans-serif;

    font-size: 22px;

    font-weight: 900;
}



/* =========================================================
   PRODUCT DESCRIPTION
========================================================= */

.product-card p {

    min-height: 55px;

    margin-top: 5px;

    font-family:
        Arial,
        Helvetica,
        sans-serif;

    font-size: 10px;

    line-height: 1.4;

    color: #444;
}



/* =========================================================
   PRODUCT BOTTOM
========================================================= */

.product-bottom {

    width: 100%;

    margin-top: 9px;

    display: flex;

    align-items: center;

    justify-content: space-between;

    gap: 8px;
}


.product-bottom strong {

    font-family:
        Arial,
        Helvetica,
        sans-serif;

    font-size: 10px;

    font-weight: 800;
}


.product-bottom a {

    padding: 6px 15px;

    color: #222;

    background: #fff;

    border-radius: 15px;

    text-decoration: none;

    font-family:
        Arial,
        Helvetica,
        sans-serif;

    font-size: 9px;

    box-shadow:
        2px 3px 4px rgba(0,0,0,0.22);

    transition: 0.2s ease;
}


.product-bottom a:hover {

    transform: translateY(-2px);

    background: #ead9de;
}



/* =========================================================
   CONTACT
========================================================= */

.contact {

    width: 100%;

    min-height: 550px;

    padding: 65px 55px;

    display: grid;

    grid-template-columns:
        1fr 1.15fr;

    gap: 65px;

    background:
        linear-gradient(
            90deg,
            #e5b4c2,
            #c19aa8
        );
}



/* =========================================================
   CONTACT LEFT
========================================================= */

.contact-left {

    padding-left: 5px;
}



/* CONTACT TITLE */

.contact-title {

    display: flex;

    align-items: center;

    gap: 20px;

    margin-bottom: 14px;
}


.contact-title span {

    padding: 8px 30px;

    background:
        linear-gradient(
            #f0dce1,
            #dcb9c2
        );

    border-radius: 30px;

    font-size: 34px;

    box-shadow:
        0 2px 5px rgba(0,0,0,0.12);
}


.contact-title strong {

    font-family:
        Georgia,
        "Times New Roman",
        serif;

    font-size: 35px;

    font-weight: normal;
}


.contact-description {

    margin-bottom: 22px;

    font-family:
        Arial,
        Helvetica,
        sans-serif;

    font-size: 12px;
}



/* =========================================================
   CONTACT ITEM
========================================================= */

.contact-item {

    display: flex;

    align-items: flex-start;

    gap: 15px;

    margin-bottom: 23px;
}


.contact-icon {

    width: 43px;
    height: 43px;

    flex-shrink: 0;

    display: flex;
    align-items: center;
    justify-content: center;

    background: #eadce0;

    border: 1px solid #bdaeb3;

    border-radius: 50%;

    font-family:
        Arial,
        Helvetica,
        sans-serif;

    font-size: 20px;
}


.contact-item h3 {

    font-family:
        Georgia,
        "Times New Roman",
        serif;

    font-size: 30px;

    font-weight: normal;

    line-height: 1;
}


.contact-item p {

    margin-top: 5px;

    margin-bottom: 5px;

    font-family:
        Arial,
        Helvetica,
        sans-serif;

    font-size: 11px;
}


.contact-item div span {

    display: inline-block;

    padding: 5px 15px;

    background:
        rgba(255,255,255,0.38);

    border: 1px solid rgba(255,255,255,0.6);

    border-radius: 20px;

    font-family:
        Arial,
        Helvetica,
        sans-serif;

    font-size: 11px;
}



/* =========================================================
   MAP
========================================================= */

.contact-map {

    width: 100%;
    height: 390px;

    align-self: center;

    overflow: hidden;

    border: 2px solid rgba(255,255,255,0.8);

    box-shadow:
        0 4px 9px rgba(0,0,0,0.20);

    background: #eee;
}


.contact-map iframe {

    width: 100%;
    height: 100%;

    border: 0;

    display: block;
}



/* =========================================================
   FOOTER
========================================================= */

.footer {

    width: 100%;

    height: 85px;

    padding: 8px 25px;

    display: flex;
    align-items: center;

    background:
        linear-gradient(
            90deg,
            #e2adbc,
            #a9808e
        );

    border-top: 1px solid rgba(0,0,0,0.15);
}


.footer img {

    width: 125px;
    height: 70px;

    object-fit: contain;
}



/* =========================================================
   LAPTOP
========================================================= */

@media (max-width: 1200px) {

    .header {

        padding: 0 25px;
    }


    .header-logo {

        width: 280px;
    }


    .header-logo img {

        width: 270px;
    }


    .login-button {

        width: 105px;
    }


    .register-button {

        width: 130px;
    }


    .welcome-badge {

        width: 145px;
    }


    .hero {

        min-height: 560px;

        padding: 25px;
    }


    .hero-content {

        min-height: 490px;

        padding: 35px;
    }


    .hero-text h1 {

        font-size: 39px;
    }


    .hero-image img {

        max-width: 570px;
    }


    .explore {

        padding: 40px 25px 50px;
    }


    .explore-container {

        padding: 35px;
    }


    .benefit-container,
    .product-container {

        gap: 30px;
    }


    .contact {

        padding: 55px 35px;
    }

}



/* =========================================================
   TABLET
========================================================= */

@media (max-width: 900px) {

    .header {

        height: 85px;

        padding: 0 18px;
    }


    .header-logo {

        width: 220px;
    }


    .header-logo img {

        width: 210px;
    }


    .header-menu {

        left: auto;
        right: 125px;

        transform: translateY(-50%);
    }


    .login-button {

        width: 85px;
        height: 50px;
    }


    .register-button {

        width: 110px;
        height: 50px;
    }


    .welcome-badge {

        display: none;
    }


    .hero-content {

        flex-direction: column;

        gap: 20px;

        padding: 35px 25px;
    }


    .hero-text {

        width: 100%;

        padding-left: 0;

        text-align: center;
    }


    .hero-text h1 {

        font-size: 35px;
    }


    .hero-text p {

        margin-left: auto;
        margin-right: auto;
    }


    .hero-buttons {

        justify-content: center;
    }


    .hero-image {

        width: 100%;

        min-height: 300px;
    }


    .hero-image img {

        max-width: 500px;
    }


    .benefit-container {

        grid-template-columns:
            repeat(3, 1fr);

        gap: 15px;
    }


    .product-container {

        grid-template-columns:
            repeat(3, 1fr);

        gap: 15px;
    }


    .benefit-card {

        padding: 12px;
    }


    .benefit-card h3 {

        font-size: 16px;
    }


    .benefit-card p {

        font-size: 10px;
    }


    .product-image {

        height: 135px;
    }


    .product-image img {

        width: 160px;
        height: 125px;
    }


    .product-card h3 {

        font-size: 18px;
    }


    .contact {

        grid-template-columns: 1fr;

        gap: 40px;
    }


    .contact-map {

        height: 350px;
    }

}



/* =========================================================
   MOBILE
========================================================= */

@media (max-width: 600px) {

    .header {

        height: auto;

        min-height: 80px;

        flex-direction: column;

        padding: 5px 10px 8px;

        gap: 4px;
    }


    .header-logo {

        width: 100%;

        height: 55px;

        justify-content: center;
    }


    .header-logo img {

        width: 210px;
    }


    .header-menu {

        position: static;

        transform: none;

        gap: 5px;
    }


    .login-button {

        width: 85px;
        height: 42px;
    }


    .register-button {

        width: 105px;
        height: 42px;
    }


    .hero {

        padding: 15px 10px;
    }


    .hero-content {

        padding: 30px 15px;
    }


    .hero-text h1 {

        font-size: 28px;
    }


    .hero-text p {

        font-size: 11px;
    }


    .hero-buttons {

        gap: 10px;
    }


    .hero-btn {

        min-width: 120px;

        min-height: 52px;

        font-size: 14px;
    }


    .hero-image {

        min-height: 220px;
    }


    .hero-image img {

        max-width: 380px;
    }


    .brand-section {

        height: 90px;
    }


    .brand-small-logo {

        width: 55px;
        height: 55px;
    }


    .brand-main-logo {

        width: 170px;
    }


    .brand-badge {

        width: 100px;
        height: 65px;
    }


    .explore {

        padding: 25px 10px 35px;
    }


    .explore-container {

        padding: 25px 15px;
    }


    .explore-title {

        flex-direction: column;

        gap: 3px;
    }


    .best-selling-title {

        font-size: 35px;
    }


    .essential-title {

        font-size: 20px;
    }


    .benefit-container {

        grid-template-columns: 1fr;

        gap: 15px;
    }


    .product-container {

        grid-template-columns: 1fr;

        gap: 35px;
    }


    .product-title {

        font-size: 30px;
    }


    .product-title span {

        font-size: 34px;
    }


    .product-image {

        height: 180px;
    }


    .product-image img {

        width: 220px;
        height: 165px;
    }


    .contact {

        padding: 40px 20px;
    }


    .contact-title {

        flex-direction: column;

        align-items: flex-start;

        gap: 10px;
    }


    .contact-title span {

        font-size: 27px;
    }


    .contact-title strong {

        font-size: 30px;
    }


    .contact-map {

        height: 280px;
    }


    .footer {

        height: 70px;
    }


    .footer img {

        width: 100px;
    }

}
</style>
</head>

<body>

    <!-- =====================================================
         HEADER
    ====================================================== -->

    <header class="header">

        <!-- LOGO PET CARE -->
        <a href="../fo dan img/index.php" class="header-logo">
            <img
                src="../fo dan img/asset/logo_header.png"
                alt="Pet Care"
            >
        </a>


        <!-- TOMBOL LOGIN & REGISTER -->
        <div class="header-menu">

            <a href="login_fo.php">
                <img
                    src="../fo dan img/asset/tombol_login_header.png"
                    alt="Login"
                    class="login-button"
                >
            </a>

            <a href="../fo dan img/user/register.php">
                <img
                    src="../fo dan img/asset/badge-register.png"
                    alt="Register"
                    class="register-button"
                >
            </a>

        </div>


        <!-- BADGE WELCOME -->
        <img
            src="../fo dan img/asset/badge_welkom.png"
            alt="Welcome Pet Care"
            class="welcome-badge"
        >

    </header>



    <!-- =====================================================
         HERO SECTION
    ====================================================== -->

    <section class="hero">

        <div class="hero-content">


            <!-- TEXT HERO -->

            <div class="hero-text">

                <h1>
                    KOLEKSI PRODUK<br>
                    PERAWATAN &<br>
                    PERLENGKAPAN<br>
                    TERBAIK
                </h1>

                <p>
                    Temukan berbagai kebutuhan premium untuk hewan
                    kesayangan anda dengan harga terjangkau di Pet Care.
                </p>


                <div class="hero-buttons">

                    <a
                        href="../fo dan img/fo/login_fo.php"
                        class="hero-btn"
                    >
                        SHOP NOW
                    </a>

                    <a
                        href="#products"
                        class="hero-btn"
                    >
                        OUR<br>
                        PRODUCT
                    </a>

                </div>

            </div>


            <!-- GAMBAR HERO -->

            <div class="hero-image">

                <img
                    src="../fo dan img/asset/icon-home-elemen.png"
                    alt="Pet Care Mart"
                >

            </div>

        </div>

    </section>



    <!-- =====================================================
         BRAND SECTION
    ====================================================== -->

    <section class="brand-section">

        <img
            src="../fo dan img/asset/logo-footer-small.png"
            alt="Pet Care"
            class="brand-small-logo"
        >


        <img
            src="../fo dan img/asset/Logo Pet Care.png"
            alt="Pet Care"
            class="brand-main-logo"
        >


        <img
            src="../fo dan img/asset/badge_welkom.png"
            alt="Welcome"
            class="brand-badge"
        >

    </section>



    <!-- =====================================================
         EXPLORE / BEST SELLING
    ====================================================== -->

    <section
        class="explore"
        id="products"
    >

        <div class="explore-container">


            <!-- TITLE -->

            <div class="explore-title">

                <span class="best-selling-title">
                    Best Selling
                </span>

                <span class="essential-title">
                    PET ESSENTIALS.
                </span>

            </div>



            <!-- =================================================
                 BENEFIT
            ================================================== -->

            <div class="benefit-container">


                <!-- BENEFIT 1 -->

                <div class="benefit-card">

                    <h3>
                        Nutrisi Premium
                    </h3>

                    <p>
                        Produk pakan hewan berkualitas dari
                        brand terpercaya untuk kesehatan optimal.
                    </p>

                </div>


                <!-- BENEFIT 2 -->

                <div class="benefit-card">

                    <h3>
                        Harga Terjangkau
                    </h3>

                    <p>
                        Nikmati harga kompetitif untuk seluruh
                        perlengkapan dan kebutuhan hewan.
                    </p>

                </div>


                <!-- BENEFIT 3 -->

                <div class="benefit-card">

                    <h3>
                        Layanan Terbaik
                    </h3>

                    <p>
                        Pengalaman belanja yang ramah, cepat,
                        dan nyaman untuk pemilik hewan.
                    </p>

                </div>

            </div>



            <!-- =================================================
                 PRODUCT TITLE
            ================================================== -->

            <h2 class="product-title">

                <span>
                    Best Selling
                </span>

                PRODUCTS

            </h2>



            <!-- =================================================
                 PRODUCT LIST
            ================================================== -->

            <div class="product-container">


                <!-- ================= PRODUK 1 ================= -->

                <div class="product-card">

                    <div class="product-image">

                        <img
                            src="../fo dan img/asset/kalung.png"
                            alt="Kalung"
                        >

                    </div>


                    <span class="category">
                        Aksesoris
                    </span>


                    <h3>
                        Kalung
                    </h3>


                    <p>
                        Aksesori leher yang nyaman dan ringan,
                        dilengkapi dengan lonceng kecil untuk
                        mempermudah menandai keberadaan hewan
                        peliharaan Anda.
                    </p>


                    <div class="product-bottom">

                        <strong>
                            Rp. 50.000 / Item
                        </strong>

                        <a href="../fo dan img/fo/katalog_fo.php">
                            Buy Product
                        </a>

                    </div>

                </div>



                <!-- ================= PRODUK 2 ================= -->

                <div class="product-card">

                    <div class="product-image">

                        <img
                            src="../fo dan img/asset/bajuhewan.png"
                            alt="Baju Hewan"
                        >

                    </div>


                    <span class="category">
                        Aksesoris
                    </span>


                    <h3>
                        Baju Hewan
                    </h3>


                    <p>
                        Pakaian hewan berbahan lembut dan nyaman
                        untuk menjaga hewan tetap hangat,
                        nyaman, dan tampil menarik.
                    </p>


                    <div class="product-bottom">

                        <strong>
                            Rp. 50.000 / Item
                        </strong>

                        <a href="../fo dan img/fo/katalog_fo.php">
                            Buy Product
                        </a>

                    </div>

                </div>



                <!-- ================= PRODUK 3 ================= -->

                <div class="product-card">

                    <div class="product-image">

                        <img
                            src="../fo dan img/asset/leash.png"
                            alt="Leash"
                        >

                    </div>


                    <span class="category">
                        Aksesoris
                    </span>


                    <h3>
                        Leash
                    </h3>


                    <p>
                        Tali tuntun berbahan kuat dan tahan lama
                        dengan klip pengaman yang kokoh untuk
                        memberikan kenyamanan saat berjalan.
                    </p>


                    <div class="product-bottom">

                        <strong>
                            Rp. 50.000 / Item
                        </strong>

                        <a href="../fo dan img/fo/katalog_fo.php">
                            Buy Product
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section>



    <!-- =====================================================
         CONTACT SECTION
    ====================================================== -->

    <section class="contact">


        <!-- BAGIAN KIRI -->

        <div class="contact-left">


            <!-- CONTACT TITLE -->

            <div class="contact-title">

                <span>
                    CONTACT US
                </span>

                <strong>
                    Let’s talk tech
                </strong>

            </div>


            <p class="contact-description">
                Need help choosing the right hardware?
                Our team is ready to assist you.
            </p>



            <!-- EMAIL -->

            <div class="contact-item">

                <div class="contact-icon">
                    ✉
                </div>

                <div>

                    <h3>
                        Email
                    </h3>

                    <p>
                        Our friendly team is here to help
                    </p>

                    <span>
                        Petcare2025@gmail.com
                    </span>

                </div>

            </div>



            <!-- OFFICE -->

            <div class="contact-item">

                <div class="contact-icon">
                    ▣
                </div>

                <div>

                    <h3>
                        Office
                    </h3>

                    <p>
                        Come say hello at our HQ
                    </p>

                    <span>
                        Surabaya, Jawa Timur
                    </span>

                </div>

            </div>



            <!-- WHATSAPP -->

            <div class="contact-item">

                <div class="contact-icon">
                    ☎
                </div>

                <div>

                    <h3>
                        Whatsapp
                    </h3>

                    <p>
                        Mon - Fri from 9am - 5pm
                    </p>

                    <span>
                        +62 820 - 1428 - 0909
                    </span>

                </div>

            </div>



            <!-- INSTAGRAM -->

            <div class="contact-item">

                <div class="contact-icon">
                    ◎
                </div>

                <div>

                    <h3>
                        Instagram
                    </h3>

                    <p>
                        Follow us on Instagram
                    </p>

                    <span>
                        @petcaresby20
                    </span>

                </div>

            </div>

        </div>



        <!-- =================================================
             MAP
        ================================================== -->

        <div class="contact-map">

            <iframe
                src="https://www.google.com/maps?q=Surabaya,Jawa%20Timur&output=embed"
                loading="lazy"
                allowfullscreen
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>

        </div>

    </section>



    <!-- =====================================================
         FOOTER
    ====================================================== -->

    <footer class="footer">

        <img
            src="../asset/logo-footer-small.png"
            alt="Pet Care"
        >

    </footer>


</body>

</html>