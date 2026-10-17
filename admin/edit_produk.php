<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Care - Edit/Tambah Data Produk</title>

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

/* --- MAIN CONTENT STYLES --- */
.main-content {
    flex-grow: 1;
    padding: 40px;
    display: flex;
    justify-content: center;
    align-items: center;
}

.form-card {
    background-color: #fdfae3; 
    width: 100%;
    max-width: 800px;
    border-radius: 20px;
    padding: 40px 50px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.05);
}

.form-header {
    background-color: #f6e6dc;
    border: 2px solid #a85858;
    border-radius: 25px;
    padding: 15px 30px;
    text-align: center;
    margin-bottom: 40px;
    display: inline-block;
    width: 100%;
}

.form-header h1 {
    font-family: 'Fredoka One', cursive; 
    color: #000;
    font-size: 28px;
    letter-spacing: 1px;
}

.data-form { display: flex; flex-direction: column; gap: 20px; }

/* --- SPLIT LAYOUT --- */
.form-layout-split { display: flex; gap: 40px; margin-bottom: 10px; }
.form-left { flex: 1; display: flex; flex-direction: column; gap: 20px; }
.form-right { width: 280px; display: flex; flex-direction: column; gap: 15px; }
.form-group { display: flex; flex-direction: column; }
.form-group.w-100 { width: 100%; }

.form-group label, .center-label {
    font-size: 14px;
    font-weight: 600;
    color: #333;
    margin-bottom: 8px;
    margin-left: 5px;
}
.center-label { text-align: center; }

input, textarea {
    width: 100%;
    padding: 12px 20px;
    border: none;
    border-radius: 20px;
    background-color: #f4dbd4; 
    color: #333;
    font-size: 14px;
    outline: none;
    box-shadow: inset 0 2px 4px rgba(0,0,0,0.05), 0 3px 5px rgba(0,0,0,0.1); 
}
textarea { resize: none; border-radius: 25px; line-height: 1.5; }

/* --- PHOTO PREVIEW & FILE UPLOAD --- */
/* --- PHOTO PREVIEW & FILE UPLOAD --- */
.photo-preview-box {
    background-color: #f4dbd4;
    border-radius: 25px;
    width: 100%;
    height: 180px;
    display: flex;
    justify-content: center;
    align-items: center;
    box-shadow: inset 0 2px 4px rgba(0,0,0,0.05), 0 3px 5px rgba(0,0,0,0.1);
    padding: 10px;
}

.photo-preview-box img {
    width: 150px;         /* Mengatur lebar gambar menjadi kecil */
    height: 150px;        /* Mengatur tinggi gambar agar proporsional */
    object-fit: cover;   /* Memastikan gambar tidak gepeng */
    border-radius: 15px; /* Membuat sudut gambar membulat */
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.25); /* Menambahkan efek bayangan (drop shadow) pada foto */
}

.file-upload-wrapper {
    display: flex;
    align-items: center;
    background-color: #f4dbd4;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 3px 5px rgba(0,0,0,0.1);
}

.file-upload-input { display: none; }
.file-upload-btn {
    background-color: #5c4d4c;
    color: white;
    padding: 10px 15px;
    font-size: 12px;
    font-weight: 500;
    cursor: pointer;
    white-space: nowrap;
}
.file-upload-text { font-size: 12px; color: #555; padding: 10px 15px; white-space: nowrap; }

/* --- BUTTON STYLES --- */
.form-actions { display: flex; justify-content: flex-end; gap: 15px; margin-top: 10px; }
button {
    padding: 10px 30px;
    border: none;
    border-radius: 20px;
    font-weight: 600;
    color: white;
    cursor: pointer;
    box-shadow: 0 4px 6px rgba(0,0,0,0.2);
    transition: transform 0.2s;
}
button:hover { transform: translateY(-2px); }
.btn-batal { background-color: #d33c3c; }
.btn-simpan { background-color: #89937c; }
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
                <a href="halaman_stock1.php" class="nav-item active">
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

        <main class="main-content">
            <div class="form-card">
                <div class="form-header">
                    <h1 id="form-title">Data Produk</h1>
                </div>

                <form class="data-form">
                    <div class="form-layout-split">
                        <div class="form-left">
                            <div class="form-group">
                                <label>Pilih Kategori</label>
                                <select id="input-kategori">
                                    <option value="Aksesoris">Aksesoris</option>
                                    <option value="Kandang">Kandang</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Nama Produk</label>
                                <input type="text" id="input-nama" placeholder="Masukkan Nama Produk...">
                            </div>
                            <div class="form-group">
                                <label>Harga Produk</label>
                                <input type="text" id="input-harga" placeholder="Contoh: Rp. 50.000 / Item">
                            </div>
                        </div>

                        <div class="form-right">
                            <label class="center-label">Preview Photo</label>
                            <div class="photo-preview-box">
                                <img src="" alt="Preview" id="preview-image" style="background-color: white;">
                            </div>
                            <div class="file-upload-wrapper">
                                <input type="file" id="file-upload" class="file-upload-input" accept="image/*" onchange="previewFile()">
                                <label for="file-upload" class="file-upload-btn">Choose File</label>
                                <span class="file-upload-text" id="file-name-text">No File Chosen</span>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group w-100">
                            <label>Deskripsi Produk</label>
                            <textarea id="input-deskripsi" rows="4" placeholder="Masukkan deskripsi produk..."></textarea>
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="button" class="btn-batal" onclick="batalEdit()">Batal</button>
                        <button type="button" class="btn-simpan" onclick="simpanDataProduk()">Simpan</button>
                    </div>
                </form>
            </div>
        </main>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const editIndex = localStorage.getItem('editIndex');

            if (editIndex !== null) {
                document.getElementById('form-title').innerText = "Edit Data Produk";
                const daftarProduk = JSON.parse(localStorage.getItem('savedProducts')) || [];
                const produk = daftarProduk[editIndex];

                if (produk) {
                    document.getElementById('input-kategori').value = produk.kategori;
                    document.getElementById('input-nama').value = produk.nama;
                    document.getElementById('input-harga').value = produk.harga;
                    document.getElementById('input-deskripsi').value = produk.deskripsi;
                    document.getElementById('preview-image').src = produk.foto;
                }
            } else {
                document.getElementById('form-title').innerText = "Tambah Data Produk";
            }
        });

        function previewFile() {
            const file = document.getElementById('file-upload').files[0];
            const preview = document.getElementById('preview-image');
            const fileNameText = document.getElementById('file-name-text');

            if (file) {
                fileNameText.textContent = file.name;
                const reader = new FileReader();
                reader.addEventListener("load", function () {
                    preview.src = reader.result;
                }, false);
                reader.readAsDataURL(file);
            }
        }

        function simpanDataProduk() {
            const kategori = document.getElementById('input-kategori').value;
            const nama = document.getElementById('input-nama').value;
            const harga = document.getElementById('input-harga').value;
            const deskripsi = document.getElementById('input-deskripsi').value;
            const fotoSrc = document.getElementById('preview-image').src; 

            if(!nama || !harga || !deskripsi) {
                alert("Harap isi semua teks data produk!");
                return;
            }

            const produkBaru = {
                kategori: kategori,
                nama: nama,
                harga: harga,
                deskripsi: deskripsi,
                foto: fotoSrc,
                stock: '250 Stock Items' 
            };

            let daftarProduk = JSON.parse(localStorage.getItem('savedProducts')) || [];
            const editIndex = localStorage.getItem('editIndex');

            if (editIndex !== null) {
                daftarProduk[editIndex] = produkBaru;
                alert("Produk berhasil di-update!");
            } else {
                daftarProduk.unshift(produkBaru);
                alert("Produk baru berhasil ditambahkan!");
            }

            localStorage.setItem('savedProducts', JSON.stringify(daftarProduk));
            localStorage.removeItem('editIndex'); 

            if(kategori === 'Aksesoris') {
                window.location.href = 'halaman_stock1.php';
            } else {
                window.location.href = 'halaman_stock2.php';
            }
        }

        function batalEdit() {
            localStorage.removeItem('editIndex'); 
            window.location.href = 'halaman_stock1.php';
        }
    </script>
</body>
</html>