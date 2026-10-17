<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Biodata Saya | Pet Care</title>

    <link rel="stylesheet" href="style-biodata_fo.css">

<style>
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
    background: #000;
    font-family: Arial, Helvetica, sans-serif;

    display: flex;
    justify-content: center;
    align-items: center;

    overflow: hidden;
}


/* =====================================================
   APP
===================================================== */

.app-container {
    width: 1200px;
    height: 800px;

    display: grid;
    grid-template-columns: 360px 1fr;

    overflow: hidden;

    background: #dce4cd;
}


/* =====================================================
   SIDEBAR
===================================================== */

.sidebar {
    width: 360px;
    height: 800px;

    background: linear-gradient(
        180deg,
        #e5b8c5 0%,
        #c5a1ad 100%
    );

    padding-top: 20px;

    position: relative;
}


/* =====================================================
   LOGO
===================================================== */

.logo-container {
    width: 100%;
    height: 125px;

    display: flex;
    align-items: center;
    justify-content: center;
}

.logo-img {
    width: 245px;
    height: auto;

    object-fit: contain;
}


/* =====================================================
   SIDEBAR GARIS
===================================================== */

.sidebar-divider {
    width: 280px;
    height: 3px;

    margin: 3px auto 15px;

    background: #75676b;
}

.logout-divider {
    margin-top: 25px;
    margin-bottom: 0;
}


/* =====================================================
   MENU
===================================================== */

.nav-menu {
    width: 100%;

    display: flex;
    flex-direction: column;

    gap: 8px;
}

.nav-item {
    width: 270px;
    height: 48px;

    margin: 0 auto;

    padding: 0 17px;

    display: flex;
    align-items: center;

    gap: 12px;

    text-decoration: none;

    color: #111;

    background: #dedede;

    border-radius: 25px;

    box-shadow: 5px 5px 0 #76686c;

    transition: 0.15s ease;
}

.nav-item:hover {
    transform: translateX(2px);
}

.nav-item.active {
    background: #d3bdc4;
}

.nav-icon {
    width: 27px;
    height: 27px;

    flex-shrink: 0;

    object-fit: contain;
}

.nav-item span {
    font-family:
        Georgia,
        "Times New Roman",
        serif;

    font-size: 22px;

    white-space: nowrap;
}


/* =====================================================
   LOGOUT
===================================================== */

.logout-btn {
    position: absolute;

    left: 20px;
    bottom: 42px;

    width: 280px;
    height: 64px;

    display: flex;
    align-items: center;

    gap: 18px;

    padding-left: 20px;

    color: #111;

    text-decoration: none;

    background: #b3b1b1;

    border-radius: 27px;

    box-shadow: 5px 5px 0 #70676a;
}

.logout-btn span {
    font-family:
        Georgia,
        "Times New Roman",
        serif;

    font-size: 23px;
}


/* =====================================================
   MAIN CONTENT
===================================================== */

.main-content {
    width: 100%;
    height: 780px;

    background: #dce4cd;

    display: flex;
    align-items: center;
    justify-content: center;

    overflow: hidden;
}


/* =====================================================
   BIODATA LAYOUT
===================================================== */

.biodata-layout {
    width: 790px;
    max-width: calc(100% - 30px);

    display: grid;

    grid-template-columns: minmax(0, 565px) 185px;

    gap: 20px;

    align-items: start;
}


/* =====================================================
   BIODATA CARD
===================================================== */

.biodata-card {
    width: 565px;
    height: 548px;

    background: #fffde6;

    border: 1px solid #777;

    border-radius: 15px;

    box-shadow:
        2px 3px 5px rgba(0, 0, 0, 0.25);

    padding: 12px 14px;

    overflow: hidden;
}


/* =====================================================
   TITLE
===================================================== */

.title-box {
    width: 368px;
    height: 74px;

    margin: 0 auto 28px;

    display: flex;
    align-items: center;
    justify-content: center;

    background: #eadcca;

    border: 2px solid #b97c70;

    border-radius: 20px;

    box-shadow:
        inset 0 0 0 2px #f6e9d9;
}

.title-box h1 {
    font-size: 30px;

    font-weight: 800;

    color: #050505;
}


/* =====================================================
   FORM
===================================================== */

.biodata-form {
    width: 100%;

    display: grid;

    grid-template-columns: 1fr 1fr;

    column-gap: 36px;

    row-gap: 25px;
}

.form-group {
    width: 100%;
    min-width: 0;
}

.form-group label {
    display: block;

    margin-left: 5px;
    margin-bottom: 7px;

    color: #171717;

    font-size: 14px;
}


/* =====================================================
   INPUT
===================================================== */

.input-box {
    width: 100%;
    height: 43px;

    padding: 0 16px;

    display: flex;
    align-items: center;

    background: #f3d3c8;

    border-radius: 22px;

    color: #333;

    font-size: 14px;

    box-shadow:
        5px 5px 5px rgba(0, 0, 0, 0.17);
}


/* =====================================================
   TANGGAL
===================================================== */

.date-box {
    width: 100%;
    height: 43px;

    padding-left: 5px;

    display: flex;
    align-items: center;
    justify-content: space-between;

    color: #333;

    font-size: 14px;
}

.calendar-icon {
    margin-right: 18px;

    font-size: 19px;
}


/* =====================================================
   HARI KERJA
===================================================== */

.work-days {
    width: 100%;

    display: grid;

    grid-template-columns: 1fr 1fr;

    gap: 12px;
}

.select-box,
.small-input {
    height: 43px;

    background: #f3d3c8;

    border-radius: 22px;

    box-shadow:
        5px 5px 5px rgba(0, 0, 0, 0.17);

    font-size: 14px;
}

.select-box {
    padding: 0 14px;

    display: flex;
    align-items: center;
    justify-content: space-between;
}

.small-input {
    display: flex;
    align-items: center;
    justify-content: center;
}

.arrow {
    font-size: 20px;
}


/* =====================================================
   JAM KERJA
===================================================== */

.work-hours {
    width: 100%;

    display: grid;

    grid-template-columns: 1fr 1fr;

    gap: 12px;
}


/* =====================================================
   EMAIL
===================================================== */

.email-text {
    width: 100%;
    height: 43px;

    padding-left: 5px;

    display: flex;
    align-items: center;

    color: #333;

    font-size: 14px;
}


/* =====================================================
   ALAMAT
===================================================== */

.address-box {
    width: 100%;
    height: 70px;

    padding: 9px 16px;

    background: #f3d3c8;

    border-radius: 20px;

    color: #333;

    font-size: 13px;

    line-height: 16px;

    box-shadow:
        5px 5px 5px rgba(0, 0, 0, 0.17);
}


/* =====================================================
   BUTTON PERUBAHAN DATA
===================================================== */

.btn-pengajuan {
    display: block;

    width: 220px;
    height: 30px;

    margin: 30px 0 0 auto;

    border: none;

    border-radius: 18px;

    background: #92907a;

    color: white;

    font-size: 13px;

    cursor: pointer;

    box-shadow:
        2px 3px 4px rgba(0, 0, 0, 0.20);
}


/* =====================================================
   FOTO SECTION
===================================================== */

.photo-section {
    width: 185px;

    padding-top: 97px;

    display: flex;
    flex-direction: column;
    align-items: center;

    flex-shrink: 0;
}


/* =====================================================
   FOTO PROFIL
===================================================== */

.photo-frame {
    width: 185px;
    height: 250px;

    overflow: hidden;

    border-radius: 15px;

    background: #1768d8;

    border: 1px solid rgba(0, 0, 0, 0.15);

    box-shadow:
        3px 4px 7px rgba(0, 0, 0, 0.18);
}

.photo-frame img {
    width: 100%;
    height: 100%;

    display: block;

    object-fit: cover;
}


/* =====================================================
   UPLOAD BOX
===================================================== */

.upload-box {
    width: 185px;
    min-height: 145px;

    margin-top: 16px;

    padding: 12px;

    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;

    text-align: center;

    background: rgba(255, 255, 255, 0.42);

    border: 2px dashed #a18b91;

    border-radius: 16px;

    box-shadow:
        2px 3px 5px rgba(0, 0, 0, 0.12);
}


/* =====================================================
   ICON UPLOAD
===================================================== */

.upload-icon {
    width: 34px;
    height: 34px;

    margin-bottom: 5px;

    display: flex;
    align-items: center;
    justify-content: center;

    border-radius: 50%;

    background: #c9adb7;

    color: white;

    font-size: 21px;

    font-weight: bold;
}


/* =====================================================
   JUDUL UPLOAD
===================================================== */

.upload-title {
    color: #4e4548;

    font-size: 15px;

    font-weight: 700;

    margin-bottom: 3px;
}


/* =====================================================
   DESKRIPSI UPLOAD
===================================================== */

.upload-desc {
    color: #756b6e;

    font-size: 11px;

    margin-bottom: 9px;
}


/* =====================================================
   CHOOSE FILE
===================================================== */

.choose-file-btn {
    width: 130px;
    height: 30px;

    display: flex;
    align-items: center;
    justify-content: center;

    border-radius: 15px;

    background: #d9c5cb;

    border: 1px solid #9b858c;

    color: #40383b;

    font-size: 12px;

    font-weight: 600;

    cursor: pointer;

    box-shadow:
        2px 2px 3px rgba(0, 0, 0, 0.15);

    transition: 0.2s;
}

.choose-file-btn:hover {
    background: #cdb3bc;

    transform: translateY(-1px);
}


/* =====================================================
   NAMA FILE
===================================================== */

.file-name {
    width: 155px;

    margin-top: 6px;

    color: #6b6164;

    font-size: 10px;

    overflow: hidden;

    text-overflow: ellipsis;

    white-space: nowrap;
}


/* =====================================================
   INPUT FILE
===================================================== */

#photoInput {
    display: none;
}


/* =====================================================
   UPLOAD PHOTO
===================================================== */

.upload-photo {
    width: 130px;
    height: 30px;

    margin-top: 10px;

    border: none;

    border-radius: 16px;

    background: #92907a;

    color: white;

    font-size: 12px;

    cursor: pointer;

    box-shadow:
        2px 3px 4px rgba(0, 0, 0, 0.20);

    transition: 0.2s;
}

.upload-photo:hover {
    background: #7e7c68;

    transform: translateY(-1px);
}


/* =====================================================
   RESPONSIVE
===================================================== */

@media (max-width: 1208px) {

    body {
        align-items: flex-start;
    }

    .app-container {
        width: 100vw;
        height: 100vh;

        grid-template-columns: 360px minmax(0, 1fr);
    }

    .sidebar {
        height: 100vh;
    }

    .main-content {
        height: 100vh;
    }

}


@media (max-width: 1000px) {

    .biodata-layout {
        transform: scale(0.92);
        transform-origin: center;
    }

}


@media (max-width: 850px) {

    .biodata-layout {
        transform: scale(0.82);
    }

}

/* =====================================================
   REVISI BIODATA: INPUT DATE / EMAIL / DAY / TIME
===================================================== */

.biodata-input {
    width: 100%;
    height: 43px;
    border: 0;
    outline: none;
    padding: 0 14px;
    background: #f3d3c8;
    border-radius: 22px;
    color: #333;
    font-family: 'Poppins', sans-serif;
    font-size: 14px;
    box-shadow: 5px 5px 5px rgba(0,0,0,0.17);
}

.biodata-input:focus {
    box-shadow: 5px 5px 7px rgba(0,0,0,0.22);
}

.date-input,
.time-input,
.day-select,
.email-input {
    cursor: pointer;
}

.date-input::-webkit-calendar-picker-indicator,
.time-input::-webkit-calendar-picker-indicator {
    cursor: pointer;
    width: 20px;
    height: 20px;
    opacity: 0.75;
}

.day-select {
    appearance: auto;
    padding-right: 12px;
}

.email-input {
    cursor: text;
}

.work-days,
.work-hours {
    width: 100%;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 12px;
}

</style>


<body>

<div class="app-container">

    <!-- ================= SIDEBAR ================= -->
    <aside class="sidebar">

        <div class="logo-container">
            <img src="../asset/logo-petcare.png"
                 alt="Pet Care"
                 class="logo-img">
        </div>

        <div class="sidebar-divider"></div>

        <nav class="nav-menu">

            <a href="dashboard_fo.php" class="nav-item">
                <img src="../asset/icon-dashboard.svg" class="nav-icon">
                <span>Dashboard</span>
            </a>

            <a href="katalog_fo.php" class="nav-item">
                <img src="../asset/icon-katalog.svg" class="nav-icon">
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

        <div class="sidebar-divider"></div>

        <nav class="nav-menu">

            <a href="riwayat_transaksi.php" class="nav-item">
                <img src="../asset/icon-riwayat.svg" class="nav-icon">
                <span>Riwayat Transaksi</span>
            </a>

            <a href="jadwal_fo.php" class="nav-item">
                <img src="../asset/icon-jadwalfo.svg" class="nav-icon">
                <span>Jadwal FO</span>
            </a>

            <a href="biodata_fo.php" class="nav-item active">
                <img src="../asset/icon-biodata.svg" class="nav-icon">
                <span>Biodata Saya</span>
            </a>

        </nav>

        <div class="sidebar-divider logout-divider"></div>

        <a href="login_fo.php" class="logout-btn">
            <img src="../asset/icon-logout.svg" class="nav-icon">
            <span>Logout</span>
        </a>

    </aside>


    <!-- ================= MAIN ================= -->
    <main class="main-content">

        <div class="biodata-layout">

            <!-- ================= BIODATA ================= -->
            <section class="biodata-card">

                <div class="title-box">
                    <h1>Biodata Saya</h1>
                </div>


                <div class="biodata-form">

                    <!-- NAMA -->
                    <div class="form-group">

                        <label>Nama Lengkap</label>

                        <div class="input-box">
                            Sarah Jessica
                        </div>

                    </div>


                    <!-- TANGGAL LAHIR -->
                    <div class="form-group">

                        <label>Tanggal Lahir</label>

                        <div class="date-box">
                            <input
                                type="date"
                                id="tanggalLahir"
                                value="2005-09-14"
                                class="biodata-input date-input"
                                aria-label="Tanggal Lahir"
                            >
                        </div>

                    </div>


                    <!-- TELEPON -->
                    <div class="form-group">

                        <label>No. Telepon</label>

                        <div class="input-box">
                            087864014955
                        </div>

                    </div>


                    <!-- GENDER -->
                    <div class="form-group">

                        <label>Gender</label>

                        <div class="input-box">
                            Perempuan
                        </div>

                    </div>


                    <!-- HARI KERJA -->
                    <div class="form-group">

                        <label>Hari Kerja</label>

                        <div class="work-days">

                            <select id="hariMulai" class="biodata-input day-select" aria-label="Hari kerja mulai">
                                <option>Senin</option>
                                <option>Selasa</option>
                                <option>Rabu</option>
                                <option>Kamis</option>
                                <option>Jumat</option>
                                <option>Sabtu</option>
                                <option>Minggu</option>
                            </select>

                            <select id="hariSelesai" class="biodata-input day-select" aria-label="Hari kerja selesai">
                                <option>Senin</option>
                                <option>Selasa</option>
                                <option selected>Rabu</option>
                                <option>Kamis</option>
                                <option>Jumat</option>
                                <option>Sabtu</option>
                                <option>Minggu</option>
                            </select>

                        </div>

                    </div>


                    <!-- JAM KERJA -->
                    <div class="form-group">

                        <label>Jam Kerja</label>

                        <div class="work-hours">

                            <input
                                type="time"
                                id="jamMulai"
                                value="08:00"
                                min="00:00"
                                max="23:59"
                                step="900"
                                class="biodata-input time-input"
                                aria-label="Jam kerja mulai"
                            >

                            <input
                                type="time"
                                id="jamSelesai"
                                value="17:00"
                                min="00:00"
                                max="23:59"
                                step="900"
                                class="biodata-input time-input"
                                aria-label="Jam kerja selesai"
                            >

                        </div>

                    </div>


                    <!-- EMAIL -->
                    <div class="form-group">

                        <label>Email Address</label>

                        <input
                            type="email"
                            id="emailAddress"
                            value="srhjsc@gmail.com"
                            class="biodata-input email-input"
                            aria-label="Email Address"
                        >

                    </div>


                    <!-- ALAMAT -->
                    <div class="form-group">

                        <label>Alamat</label>

                        <div class="address-box">
                            Jl. Mulyosari Timur No.28,
                            <br>
                            Surabaya
                        </div>

                        <button class="btn-pengajuan" onclick="ajukanPerubahanData()">
                            Pengajuan Perubahan Data
                        </button>

                    </div>

                </div>

            </section>


            <!-- ================= FOTO ================= -->
            <section class="photo-section">

                <!-- FOTO -->
                <div class="photo-frame">

                    <img
                        id="profilePreview"
                        src="../asset/photo-profile.png"
                        alt="Foto Profil">

                </div>


                <!-- UPLOAD BOX -->
                <div class="upload-box">

                    <div class="upload-icon">
                        ↑
                    </div>

                    <div class="upload-title">
                        Upload Foto
                    </div>

                    <div class="upload-desc">
                        Pilih foto profil
                    </div>

                    <label for="photoInput"
                           class="choose-file-btn">

                        Choose File

                    </label>

                    <div id="fileName"
                         class="file-name">

                        No File Chosen

                    </div>

                    <input
                        type="file"
                        id="photoInput"
                        accept="image/*">

                </div>


                <!-- UPLOAD BUTTON -->
                <button
                    type="button"
                    class="upload-photo"
                    onclick="uploadPhoto()">

                    Upload Photo

                </button>

            </section>

        </div>

    </main>

</div>


<script>

const photoInput =
    document.getElementById("photoInput");

const profilePreview =
    document.getElementById("profilePreview");

const fileName =
    document.getElementById("fileName");


photoInput.addEventListener("change", function () {

    const file = this.files[0];

    if (file) {

        fileName.textContent = file.name;

        const reader = new FileReader();

        reader.onload = function (event) {

            profilePreview.src =
                event.target.result;

        };

        reader.readAsDataURL(file);
    }

});


function ajukanPerubahanData() {

    const data = {
        tanggalLahir: document.getElementById("tanggalLahir").value,
        hariMulai: document.getElementById("hariMulai").value,
        hariSelesai: document.getElementById("hariSelesai").value,
        jamMulai: document.getElementById("jamMulai").value,
        jamSelesai: document.getElementById("jamSelesai").value,
        emailAddress: document.getElementById("emailAddress").value.trim()
    };

    if (!data.tanggalLahir || !data.hariMulai || !data.hariSelesai || !data.jamMulai || !data.jamSelesai || !data.emailAddress) {
        alert("Silakan lengkapi data yang dapat diubah terlebih dahulu.");
        return;
    }

    localStorage.setItem("foBiodataDraft", JSON.stringify(data));

    alert("Pengajuan perubahan data telah dikirim.");
    window.location.href = "jadwal_fo.php";

}


function uploadPhoto() {

    if (!photoInput.files.length) {

        alert("Silakan pilih foto terlebih dahulu.");

        return;
    }

    alert("Foto berhasil dipilih.");

}



const savedFoBiodata = localStorage.getItem("foBiodataDraft");

if (savedFoBiodata) {
    try {
        const data = JSON.parse(savedFoBiodata);
        if (data.tanggalLahir) document.getElementById("tanggalLahir").value = data.tanggalLahir;
        if (data.hariMulai) document.getElementById("hariMulai").value = data.hariMulai;
        if (data.hariSelesai) document.getElementById("hariSelesai").value = data.hariSelesai;
        if (data.jamMulai) document.getElementById("jamMulai").value = data.jamMulai;
        if (data.jamSelesai) document.getElementById("jamSelesai").value = data.jamSelesai;
        if (data.emailAddress) document.getElementById("emailAddress").value = data.emailAddress;
    } catch (error) {
        console.warn("Data biodata FO tidak dapat dibaca.");
    }
}
</script>

</body>
</html>