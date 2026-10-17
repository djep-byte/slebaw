<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Care - Data Stock Product</title>
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

/* --- SIDEBAR STYLES --- */
.sidebar {
    width: 320px;
    background: linear-gradient(180deg, #c7a4a9 0%, #a48288 100%);
    padding: 40px 20px;
    display: flex;
    flex-direction: column;
    border-right: 2px solid rgba(255,255,255,0.2);
}

.logo-container { text-align: center; margin-bottom: 40px; }
.logo-img { max-width: 80%; height: auto; }
.nav-menu { display: flex; flex-direction: column; gap: 15px; flex-grow: 1; }
.nav-item {
    display: flex; align-items: center; padding: 15px 25px;
    background-color: #dcdcdc; color: #333; text-decoration: none;
    border-radius: 25px; font-weight: 500; font-size: 16px;
    box-shadow: 0 4px 6px rgba(0,0,0,0.15); transition: all 0.3s ease;
}
.nav-item:hover, .nav-item.active { background-color: #e8e8e8; transform: translateY(-2px); }
.nav-icon { width: 24px; height: 24px; margin-right: 15px; }
.logout-container { margin-top: auto; }
.logout-btn { background-color: #b0b0b0; }


/* --- MAIN CONTENT --- */
.main-content.list-layout {
    flex-grow: 1;
    padding: 30px 40px;
    display: flex;
    flex-direction: column;
    align-items: stretch;
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

/* Action Bar (Search & Filters) */
.action-bar-stock {
    display: flex;
    gap: 20px;
    margin-bottom: 20px;
    align-items: center;
}

.search-group, .filter-add-group {
    display: flex;
    gap: 15px;
    align-items: center;
}

.search-input {
    width: 200px;
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
    width: 40px; height: 40px; padding: 8px;
    display: flex; justify-content: center; align-items: center;
    cursor: pointer;
}
.btn-dark-icon img { filter: invert(1); width: 18px; }

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

/* Filter / Toggle Category Box */
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


/* --- PRODUCT LIST CARDS --- */
.product-list-container {
    display: flex;
    flex-direction: column;
    gap: 12px;
    overflow-y: auto; /* Agar bisa di-scroll jika item terlalu banyak */
    padding-right: 5px;
    /* Menyembunyikan scrollbar bawaan browser untuk UI yang lebih bersih */
    scrollbar-width: none; 
}
.product-list-container::-webkit-scrollbar { display: none; }

.product-card {
    background-color: #b7959b; /* Warna pink kecoklatan gelap */
    border-radius: 15px;
    padding: 12px;
    display: flex;
    gap: 20px;
    align-items: center;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
}

/* Kiri: Foto dan Stock */
.product-img-section {
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 100px;
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

/* Tengah: Info Produk */
.product-info-section {
    flex-grow: 1;
    display: flex;
    flex-direction: column;
    justify-content: center;
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

/* Kanan: Action Buttons */
.product-action-section {
    display: flex;
    flex-direction: column;
    gap: 10px;
    justify-content: center;
    padding-right: 10px;
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

.btn-del { background-color: #ff4d4d; } /* Merah */
.btn-edt { background-color: #00ccff; } /* Biru cyan */
    </style>
</head>
<body>
    <div class="app-container">
        <aside class="sidebar">
            <div class="logo-container">
                <img src="img/logo-petcare.png" alt="Pet Care Logo" class="logo-img">
            </div>
            <nav class="nav-menu">
                <a href="dashboard_admin.php" class="nav-item">
                    <img src="img/icon-dashboard.svg" alt="Dashboard Icon" class="nav-icon"> Dashboard
                </a>
                <a href="#" class="nav-item active">
                    <img src="img/icon-stock.svg" alt="Stock Icon" class="nav-icon"> Stock
                </a>
                <a href="daftar_fo.php" class="nav-item">
                    <img src="img/icon-frontoffice.svg" alt="Front Office Icon" class="nav-icon"> Daftar Front Office
                </a>
                <a href="daftar_pengguna.php" class="nav-item">
                    <img src="img/icon-pengguna.svg" alt="Pengguna Icon" class="nav-icon"> Daftar Pengguna
                </a>
                <a href="riwayat_transaksi.php" class="nav-item">
                    <img src="img/icon-transaksi.svg" alt="Transaksi Icon" class="nav-icon"> Riwayat Transaksi
                </a>
            </nav>
            <div class="logout-container">
                <a href="login_admin.php" class="nav-item logout-btn">
                    <img src="img/icon-logout.svg" alt="Logout Icon" class="nav-icon"> Logout
                </a>
            </div>
        </aside>

        <main class="main-content list-layout">
            <div class="page-title-container">
                <h1 class="page-title">Data Stock Product</h1>
            </div>

            <div class="action-bar-stock">
                <div class="search-group">
                    <div class="search-wrapper">
                        <input type="text" placeholder="Cari Produk.." class="search-input">
                    </div>
                    <button class="btn-dark-icon">
                        <img src="img/icon-search.png" alt="Search">
                    </button>
                </div>

                <div class="filter-add-group">
                    <div class="category-toggle">
                        <button class="toggle-btn active">Aksesoris</button>
                        <button class="toggle-btn" onclick="window.location.href='halaman_stock2.php'">Kandang</button>
                    </div>
                    <button class="btn-dark" onclick="tambahBaru()">Add</button>
                </div>
            </div>

            <div class="product-list-container" id="product-container">
            </div>
        </main>
    </div>

    <script>
        const defaultProducts = [
            {kategori: 'Aksesoris', nama: 'Kalung', deskripsi: 'Aksesori leher yang nyaman dan ringan, dilengkapi dengan lonceng kecil untuk mempermudah menandai keberadaan hewan peliharaan Anda.', harga: 'Rp. 24.900 / Item', foto: 'img/kalung.png', stock: '250 Stock Items'},
            {kategori: 'Aksesoris', nama: 'Harness', deskripsi: 'Tali badan yang didesain ergonomis untuk menyebarkan tekanan secara merata di dada, menjaga hewan tetap aman tanpa merusak leher saat berjalan-jalan.', harga: 'Rp. 34.000 / Item', foto: 'img/harness.png', stock: '250 Stock Items'},
            {kategori: 'Aksesoris', nama: 'Leash', deskripsi: 'Tali tuntun berbahan kuat dan tahan lama dengan klip pengaman yang kokoh, memberikan kontrol penuh dan kenyamanan saat mengajak anjing atau kucing berjalan di luar rumah.', harga: 'Rp. 29.500 / Item', foto: 'img/leash.png', stock: '250 Stock Items'},
            {kategori: 'Aksesoris', nama: 'ID Tag', deskripsi: 'Liontin identitas yang dapat diukir dengan nama hewan dan nomor telepon pemilik, berfungsi sebagai langkah pencegahan penting jika anjing atau kucing terpisah.', harga: 'Rp. 14.900 / Item', foto: 'img/id-tag.png', stock: '250 Stock Items'},
            {kategori: 'Aksesoris', nama: 'Baju Hewan', deskripsi: 'Pakaian hewan bergaya yang dibuat dari bahan lembut dan menyerap keringat, menjaga anjing atau kucing tetap hangat, nyaman, dan menggemaskan sepanjang hari.', harga: 'Rp. 75.000 / Item', foto: 'img/bajuhewan.png', stock: '250 Stock Items'},

            {kategori: 'Kandang', nama: 'Kandang Rangka', deskripsi: 'Kandang berbahan aluminium kokoh bertingkat yang kuat, anti-karat, dan tahan lama. Desainnya luas sehingga memberikan ruang gerak ekstra yang nyaman bagi hewan peliharaan.', harga: 'Rp. 349.000 / Item', foto: 'img/kandang-rangka.png', stock: '250 Stock Items'},
            {kategori: 'Kandang', nama: 'Kandang Jeruji', deskripsi: 'Kandang besi lipat yang praktis dan memiliki sirkulasi udara maksimal. Dilengkapi tray bagian bawah yang mudah dilepas-pasang untuk mempermudah pembersihan kotoran.', harga: 'Rp. 655.000 / Item', foto: 'img/kandang-jeruji.png', stock: '250 Stock Items'},
            {kategori: 'Kandang', nama: 'Kandang Pintu', deskripsi: 'Kandang bernuansa modern dengan pintu berdesain lengkung estetik. Menawarkan privasi lebih bagi hewan kesayangan sekaligus mempercantik interior ruangan rumah Anda.', harga: 'Rp. 450.000 / Item', foto: 'img/kandang-pintu.png', stock: '250 Stock Items'},
            {kategori: 'Kandang', nama: 'Kandang Alas', deskripsi: 'Tatakan/matras alas kandang berbahan khusus yang elastis dan nyaman di cakar. Berfungsi melindungi kaki hewan dari sela-sela besi serta menjaga kebersihan area dalam kandang.', harga: 'Rp. 250.000 / Item', foto: 'img/kandang-alas.png', stock: '250 Stock Items'},
            {kategori: 'Kandang', nama: 'Kandang Roda', deskripsi: 'Kandang besi tugas berat (heavy duty) yang dilengkapi roda untuk memudahkan pemindahan lokasi. Desainnya dapat dilipat saat tidak digunakan sehingga sangat menghemat ruang penyimpanan.', harga: 'Rp. 750.000 / Item', foto: 'img/kandang-roda.png', stock: '250 Stock Items'}
        ];

        document.addEventListener("DOMContentLoaded", function() {
            if (!localStorage.getItem('isInitialized')) {
                localStorage.setItem('savedProducts', JSON.stringify(defaultProducts));
                localStorage.setItem('isInitialized', 'true');
            }
            renderProducts();
        });

        function renderProducts() {
            const container = document.getElementById('product-container');
            container.innerHTML = ""; 

            const daftarProduk = JSON.parse(localStorage.getItem('savedProducts')) || [];

            daftarProduk.forEach((produk, index) => {
                if(produk.kategori === 'Aksesoris') {
                    const html = `
                    <div class="product-card">
                        <div class="product-img-section">
                            <div class="img-box">
                                <img src="${produk.foto || 'img/bajuhewan.png'}" alt="${produk.nama}" onerror="this.onerror=null;this.src='img/bajuhewan.png';">
                            </div>
                            <div class="stock-badge">${produk.stock}</div>
                        </div>
                        <div class="product-info-section">
                            <h3>${produk.nama}</h3>
                            <p>${produk.deskripsi}</p>
                            <div class="price-badge">${produk.harga}</div>
                        </div>
                        <div class="product-action-section">
                            <button class="btn-sm btn-del" onclick="hapusProduk(${index})">Delete</button>
                            <button class="btn-sm btn-edt" onclick="editProduk(${index})">Edit</button>
                        </div>
                    </div>
                    `;
                    container.insertAdjacentHTML('beforeend', html);
                }
            });
        }

        function hapusProduk(index) {
            let confirmDelete = confirm("Apakah Anda yakin ingin menghapus produk ini?");
            if(confirmDelete) {
                let daftarProduk = JSON.parse(localStorage.getItem('savedProducts'));
                daftarProduk.splice(index, 1); 
                localStorage.setItem('savedProducts', JSON.stringify(daftarProduk));
                renderProducts(); 
            }
        }

        function editProduk(index) {
            localStorage.setItem('editIndex', index); 
            window.location.href = 'edit_produk.php';
        }

        function tambahBaru() {
            localStorage.removeItem('editIndex'); 
            window.location.href = 'edit_produk.php';
        }
    </script>
</body>
</html>