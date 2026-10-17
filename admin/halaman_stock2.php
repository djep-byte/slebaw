<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Care - Data Stock Product (Kandang Admin)</title>

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
            background-color: #d8e2d4;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            overflow: hidden;
        }

        /* ================= SIDEBAR ================= */
        .sidebar {
            width: 320px;
            background: linear-gradient(180deg, #c7a4a9 0%, #a48288 100%);
            padding: 40px 20px;
            display: flex;
            flex-direction: column;
            border-right: 2px solid rgba(255,255,255,0.2);
        }

        .logo-container {
            text-align: center;
            margin-bottom: 40px;
        }

        .logo-img {
            max-width: 80%;
            height: auto;
        }

        .nav-menu {
            display: flex;
            flex-direction: column;
            gap: 15px;
            flex-grow: 1;
        }

        .nav-item {
            display: flex;
            align-items: center;
            padding: 15px 25px;
            background-color: #dcdcdc;
            color: #333;
            text-decoration: none;
            border-radius: 25px;
            font-weight: 500;
            font-size: 16px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.15);
            transition: all 0.3s ease;
        }

        .nav-item:hover,
        .nav-item.active {
            background-color: #e8e8e8;
            transform: translateY(-2px);
        }

        .nav-icon {
            width: 24px;
            height: 24px;
            margin-right: 15px;
            object-fit: contain;
        }

        .logout-container {
            margin-top: auto;
        }

        .logout-btn {
            background-color: #b0b0b0;
        }

        /* ================= MAIN ================= */
        .main-content.list-layout {
            flex-grow: 1;
            padding: 30px 40px;
            display: flex;
            flex-direction: column;
            align-items: stretch;
            min-width: 0;
        }

        .page-title-container {
            background-color: #ffffff;
            display: inline-block;
            padding: 10px 20px;
            box-shadow: 2px 4px 10px rgba(0,0,0,0.1);
            margin-bottom: 20px;
            align-self: flex-start;
        }

        .page-title {
            font-family: 'Fredoka One', cursive;
            color: #000;
            font-size: 26px;
            letter-spacing: 0.5px;
        }

        /* ================= ACTION BAR ================= */
        .action-bar-stock {
            display: flex;
            gap: 20px;
            margin-bottom: 20px;
            align-items: center;
            flex-wrap: wrap;
        }

        .search-group,
        .filter-add-group {
            display: flex;
            gap: 15px;
            align-items: center;
        }

        .search-input {
            width: 200px;
            height: 40px;
            padding: 10px 20px;
            border: none;
            border-radius: 20px;
            background-color: #ffffff;
            color: #333;
            font-size: 14px;
            outline: none;
            box-shadow: 0 3px 6px rgba(0,0,0,0.1);
        }

        .btn-dark-icon {
            background-color: #555;
            border: none;
            border-radius: 10px;
            width: 40px;
            height: 40px;
            padding: 8px;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
        }

        .btn-dark-icon img {
            filter: invert(1);
            width: 18px;
            height: 18px;
            object-fit: contain;
        }

        .btn-dark {
            background-color: #555;
            color: white;
            padding: 0 20px;
            height: 40px;
            border: none;
            border-radius: 10px;
            font-weight: 500;
            cursor: pointer;
        }

        /* ================= CATEGORY ================= */
        .category-toggle {
            background-color: #555;
            padding: 4px;
            border-radius: 10px;
            display: flex;
            gap: 4px;
            box-shadow: 0 3px 6px rgba(0,0,0,0.1);
        }

        .toggle-btn {
            background-color: transparent;
            color: white;
            border: none;
            padding: 8px 20px;
            border-radius: 8px;
            font-size: 13px;
            font-weight: 500;
            cursor: pointer;
            transition: background-color 0.2s, color 0.2s;
        }

        .toggle-btn.active {
            background-color: #dedede;
            color: #000;
        }

        /* ================= PRODUCT LIST ================= */
        .product-list-container {
            display: flex;
            flex-direction: column;
            gap: 12px;
            overflow-y: auto;
            padding-right: 5px;
            flex: 1;
            scrollbar-width: none;
        }

        .product-list-container::-webkit-scrollbar {
            display: none;
        }

        .product-card {
            background-color: #b7959b;
            border-radius: 15px;
            padding: 12px;
            display: flex;
            gap: 20px;
            align-items: center;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            flex-shrink: 0;
        }

        .product-img-section {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100px;
            flex-shrink: 0;
        }

        .img-box {
            background-color: #fff;
            border-radius: 10px;
            width: 80px;
            height: 80px;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 5px;
            margin-bottom: 5px;
        }

        .img-box img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
        }

        .stock-badge {
            background-color: #dedede;
            color: #000;
            font-size: 9px;
            font-weight: 600;
            padding: 3px 8px;
            border-radius: 10px;
            white-space: nowrap;
        }

        .product-info-section {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            min-width: 0;
        }

        .product-info-section h3 {
            color: #000;
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 4px;
        }

        .product-info-section p {
            color: #fff;
            font-size: 10px;
            line-height: 1.4;
            margin-bottom: 10px;
            max-width: 90%;
        }

        .price-badge {
            background-color: #fff;
            color: #000;
            font-size: 11px;
            font-weight: 700;
            padding: 4px 15px;
            border-radius: 15px;
            display: inline-block;
            align-self: flex-start;
        }

        .product-action-section {
            display: flex;
            flex-direction: column;
            gap: 10px;
            justify-content: center;
            padding-right: 10px;
            flex-shrink: 0;
        }

        .btn-sm {
            border: none;
            padding: 6px 20px;
            border-radius: 15px;
            font-size: 11px;
            font-weight: 600;
            color: #000;
            cursor: pointer;
            box-shadow: 0 2px 4px rgba(0,0,0,0.15);
        }

        .btn-del {
            background-color: #ff4d4d;
        }

        .btn-edt {
            background-color: #00ccff;
        }

        .empty-state {
            background-color: #ebebeb;
            border: 1px solid #a3a3a3;
            border-radius: 12px;
            padding: 30px;
            text-align: center;
            color: #555;
            font-size: 14px;
        }

        /* ================= RESPONSIVE ================= */
        @media (max-width: 1000px) {
            .app-container {
                width: 100vw;
                height: 100vh;
            }

            .sidebar {
                width: 280px;
            }

            .product-card {
                gap: 12px;
            }

            .product-info-section p {
                max-width: 100%;
            }
        }

        @media (max-width: 800px) {
            .sidebar {
                width: 240px;
            }

            .nav-item {
                padding: 12px 15px;
                font-size: 14px;
            }

            .main-content.list-layout {
                padding: 25px 20px;
            }

            .product-card {
                align-items: flex-start;
            }

            .product-info-section h3 {
                font-size: 16px;
            }
        }
    </style>
</head>

<body>
    <div class="app-container">

        <!-- ================= SIDEBAR ADMIN ================= -->
        <aside class="sidebar">

            <div class="logo-container">
                <img src="img/logo-petcare.png"
                     alt="Pet Care Logo"
                     class="logo-img">
            </div>

            <nav class="nav-menu">

                <a href="dashboard_admin.php" class="nav-item">
                    <img src="img/icon-dashboard.svg"
                         alt="Dashboard Icon"
                         class="nav-icon">
                    Dashboard
                </a>

                <a href="#" class="nav-item active">
                    <img src="img/icon-stock.svg"
                         alt="Stock Icon"
                         class="nav-icon">
                    Stock
                </a>

                <a href="daftar_fo.php" class="nav-item">
                    <img src="img/icon-frontoffice.svg"
                         alt="Front Office Icon"
                         class="nav-icon">
                    Daftar Front Office
                </a>

                <a href="daftar_pengguna.php" class="nav-item">
                    <img src="img/icon-pengguna.svg"
                         alt="Pengguna Icon"
                         class="nav-icon">
                    Daftar Pengguna
                </a>

                <a href="riwayat_transaksi.php" class="nav-item">
                    <img src="img/icon-transaksi.svg"
                         alt="Transaksi Icon"
                         class="nav-icon">
                    Riwayat Transaksi
                </a>

            </nav>

            <div class="logout-container">
                <a href="login_admin.php" class="nav-item logout-btn">
                    <img src="img/icon-logout.svg"
                         alt="Logout Icon"
                         class="nav-icon">
                    Logout
                </a>
            </div>

        </aside>


        <!-- ================= MAIN CONTENT ================= -->
        <main class="main-content list-layout">

            <div class="page-title-container">
                <h1 class="page-title">
                    Data Stock Product - Kandang
                </h1>
            </div>


            <div class="action-bar-stock">

                <div class="search-group">

                    <input
                        type="text"
                        id="searchInput"
                        placeholder="Cari Produk.."
                        class="search-input"
                    >

                    <button
                        type="button"
                        class="btn-dark-icon"
                        onclick="searchProducts()"
                    >
                        <img src="img/icon-search.png"
                             alt="Search">
                    </button>

                </div>


                <div class="filter-add-group">

                    <div class="category-toggle">

                        <button
                            type="button"
                            class="toggle-btn"
                            onclick="window.location.href='halaman_stock1.php'"
                        >
                            Aksesoris
                        </button>

                        <button
                            type="button"
                            class="toggle-btn active"
                        >
                            Kandang
                        </button>

                    </div>


                    <button
                        type="button"
                        class="btn-dark"
                        onclick="tambahBaru()"
                    >
                        Add
                    </button>

                </div>

            </div>


            <div
                class="product-list-container"
                id="product-container"
            ></div>

        </main>

    </div>


    <script>
        const defaultProducts = [
            {
                kategori: 'Kandang',
                nama: 'Kandang Rangka',
                deskripsi: 'Kandang berbahan aluminium kokoh bertingkat yang kuat, anti-karat, dan tahan lama. Desainnya luas sehingga memberikan ruang gerak ekstra yang nyaman bagi hewan peliharaan.',
                harga: 'Rp. 349.000 / Item',
                foto: 'img/kandang-rangka.png',
                stock: '250 Stock Items'
            },
            {
                kategori: 'Kandang',
                nama: 'Kandang Jeruji',
                deskripsi: 'Kandang besi lipat yang praktis dan memiliki sirkulasi udara maksimal. Dilengkapi tray bagian bawah yang mudah dilepas-pasang untuk mempermudah pembersihan kotoran.',
                harga: 'Rp. 655.000 / Item',
                foto: 'img/kandang-jeruji.png',
                stock: '250 Stock Items'
            },
            {
                kategori: 'Kandang',
                nama: 'Kandang Pintu',
                deskripsi: 'Kandang bernuansa modern dengan pintu berdesain lengkung estetik. Menawarkan privasi lebih bagi hewan kesayangan sekaligus mempercantik interior ruangan rumah Anda.',
                harga: 'Rp. 450.000 / Item',
                foto: 'img/kandang-pintu.png',
                stock: '250 Stock Items'
            },
            {
                kategori: 'Kandang',
                nama: 'Kandang Alas',
                deskripsi: 'Tatakan atau matras alas kandang berbahan khusus yang elastis dan nyaman di cakar. Berfungsi melindungi kaki hewan dari sela-sela besi serta menjaga kebersihan area dalam kandang.',
                harga: 'Rp. 250.000 / Item',
                foto: 'img/kandang-alas.png',
                stock: '250 Stock Items'
            },
            {
                kategori: 'Kandang',
                nama: 'Kandang Roda',
                deskripsi: 'Kandang besi tugas berat yang dilengkapi roda untuk memudahkan pemindahan lokasi. Desainnya dapat dilipat saat tidak digunakan sehingga menghemat ruang penyimpanan.',
                harga: 'Rp. 750.000 / Item',
                foto: 'img/kandang-roda.png',
                stock: '250 Stock Items'
            }
        ];

        document.addEventListener("DOMContentLoaded", function () {
            initializeProducts();
            renderProducts();
        });

        function initializeProducts() {
            const savedProducts = localStorage.getItem("savedProducts");

            if (!savedProducts) {
                localStorage.setItem(
                    "savedProducts",
                    JSON.stringify(defaultProducts)
                );
            }
        }

        function getProducts() {
            try {
                return JSON.parse(
                    localStorage.getItem("savedProducts")
                ) || [];
            } catch (error) {
                return [];
            }
        }

        function renderProducts(filter = "") {
            const container =
                document.getElementById("product-container");

            container.innerHTML = "";

            const daftarProduk = getProducts();

            const products = daftarProduk.filter(function (produk) {
                const cocokKategori =
                    produk.kategori === "Kandang";

                const cocokPencarian =
                    !filter ||
                    String(produk.nama || "")
                        .toLowerCase()
                        .includes(filter.toLowerCase()) ||
                    String(produk.deskripsi || "")
                        .toLowerCase()
                        .includes(filter.toLowerCase());

                return cocokKategori && cocokPencarian;
            });

            if (products.length === 0) {
                container.innerHTML = `
                    <div class="empty-state">
                        Produk kandang tidak ditemukan.
                    </div>
                `;
                return;
            }

            products.forEach(function (produk) {
                const originalIndex = daftarProduk.indexOf(produk);

                const card = `
                    <div class="product-card">

                        <div class="product-img-section">

                            <div class="img-box">
                                <img
                                    src="${produk.foto || 'img/kandang-rangka.png'}"
                                    alt="${produk.nama || 'Produk Kandang'}"
                                    onerror="this.onerror=null;this.src='img/kandang-rangka.png';"
                                >
                            </div>

                            <div class="stock-badge">
                                ${produk.stock || '0 Stock Items'}
                            </div>

                        </div>


                        <div class="product-info-section">

                            <h3>
                                ${produk.nama || 'Produk Kandang'}
                            </h3>

                            <p>
                                ${produk.deskripsi || ''}
                            </p>

                            <div class="price-badge">
                                ${produk.harga || 'Rp. 0 / Item'}
                            </div>

                        </div>


                        <div class="product-action-section">

                            <button
                                type="button"
                                class="btn-sm btn-del"
                                onclick="hapusProduk(${originalIndex})"
                            >
                                Delete
                            </button>

                            <button
                                type="button"
                                class="btn-sm btn-edt"
                                onclick="editProduk(${originalIndex})"
                            >
                                Edit
                            </button>

                        </div>

                    </div>
                `;

                container.insertAdjacentHTML(
                    "beforeend",
                    card
                );
            });
        }

        function searchProducts() {
            const keyword =
                document
                    .getElementById("searchInput")
                    .value
                    .trim();

            renderProducts(keyword);
        }

        document
            .getElementById("searchInput")
            .addEventListener(
                "input",
                function () {
                    renderProducts(this.value.trim());
                }
            );

        function hapusProduk(index) {
            const confirmDelete =
                confirm(
                    "Apakah Anda yakin ingin menghapus produk ini?"
                );

            if (!confirmDelete) {
                return;
            }

            const daftarProduk = getProducts();

            if (index < 0 || index >= daftarProduk.length) {
                return;
            }

            daftarProduk.splice(index, 1);

            localStorage.setItem(
                "savedProducts",
                JSON.stringify(daftarProduk)
            );

            renderProducts(
                document
                    .getElementById("searchInput")
                    .value
                    .trim()
            );
        }

        function editProduk(index) {
            localStorage.setItem(
                "editIndex",
                index
            );

            window.location.href =
                "edit_produk.php";
        }

        function tambahBaru() {
            localStorage.removeItem("editIndex");

            localStorage.setItem(
                "newProductCategory",
                "Kandang"
            );

            window.location.href =
                "edit_produk.php";
        }
    </script>

</body>
</html>