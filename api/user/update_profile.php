```php
<?php
session_start();

require_once __DIR__ . '/../../config/connection.php';

// Pastikan koneksi database tersedia
if (!isset($connect) || !($connect instanceof mysqli)) {
    if (isset($conn) && $conn instanceof mysqli) {
        $connect = $conn;
    } else {
        die("Koneksi database tidak tersedia. Periksa config/connection.php.");
    }
}

// Pastikan pengguna sudah login
if (!isset($_SESSION['id_user'])) {
    header("Location: ../../user/login_awal.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: ../../user/profile.php");
    exit;
}

$id_user = (int) $_SESSION['id_user'];

$nama          = trim($_POST['nama'] ?? '');
$no_telp       = trim($_POST['no_telp'] ?? '');
$email         = trim($_POST['email'] ?? '');
$alamat        = trim($_POST['alamat'] ?? '');
$tanggal_lahir = trim($_POST['tanggal_lahir'] ?? '');

$redirectError = "../../user/profile.php";

// Validasi data wajib
if (
    $nama === '' ||
    $no_telp === '' ||
    $email === '' ||
    $alamat === '' ||
    $tanggal_lahir === ''
) {
    echo "<script>
        alert('Semua data profil wajib diisi!');
        window.history.back();
    </script>";
    exit;
}

// Validasi email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "<script>
        alert('Format email tidak valid!');
        window.history.back();
    </script>";
    exit;
}

// Pastikan email tidak digunakan pengguna lain
$stmt = mysqli_prepare(
    $connect,
    "SELECT id_user FROM users
     WHERE email = ? AND id_user != ?
     LIMIT 1"
);

if (!$stmt) {
    die("Gagal memeriksa email: " . mysqli_error($connect));
}

mysqli_stmt_bind_param($stmt, "si", $email, $id_user);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$emailDipakai = mysqli_num_rows($result) > 0;
mysqli_stmt_close($stmt);

if ($emailDipakai) {
    echo "<script>
        alert('Email sudah digunakan oleh akun lain!');
        window.history.back();
    </script>";
    exit;
}

// Ambil foto profil saat ini
$stmt = mysqli_prepare(
    $connect,
    "SELECT foto_profile FROM users WHERE id_user = ? LIMIT 1"
);

if (!$stmt) {
    die("Gagal mengambil profil: " . mysqli_error($connect));
}

mysqli_stmt_bind_param($stmt, "i", $id_user);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$user = mysqli_fetch_assoc($result);
mysqli_stmt_close($stmt);

if (!$user) {
    echo "<script>
        alert('Data pengguna tidak ditemukan!');
        window.history.back();
    </script>";
    exit;
}

$foto = $user['foto_profile'] ?? '';

// Proses unggah foto jika pengguna memilih foto baru
if (
    isset($_FILES['foto_profile']) &&
    $_FILES['foto_profile']['error'] !== UPLOAD_ERR_NO_FILE
) {
    if ($_FILES['foto_profile']['error'] !== UPLOAD_ERR_OK) {
        echo "<script>
            alert('Foto gagal diunggah!');
            window.history.back();
        </script>";
        exit;
    }

    // Maksimal ukuran foto 2 MB
    if ($_FILES['foto_profile']['size'] > 2 * 1024 * 1024) {
        echo "<script>
            alert('Ukuran foto maksimal 2 MB!');
            window.history.back();
        </script>";
        exit;
    }

    // Validasi jenis file berdasarkan MIME
    $finfo = new finfo(FILEINFO_MIME_TYPE);
    $mime = $finfo->file($_FILES['foto_profile']['tmp_name']);

    $formatFoto = [
        'image/jpeg' => 'jpg',
        'image/png'  => 'png',
        'image/webp' => 'webp'
    ];

    if (!isset($formatFoto[$mime])) {
        echo "<script>
            alert('Foto harus berformat JPG, PNG, atau WEBP!');
            window.history.back();
        </script>";
        exit;
    }

    // Folder tujuan: assets/upload/profile/
    $folder = __DIR__ . '/../../assets/upload/profile/';

    if (
        !is_dir($folder) &&
        !mkdir($folder, 0755, true) &&
        !is_dir($folder)
    ) {
        die("Folder penyimpanan foto gagal dibuat.");
    }

    $namaFile = 'profile_' . $id_user . '_' .
                bin2hex(random_bytes(8)) . '.' .
                $formatFoto[$mime];

    if (!move_uploaded_file(
        $_FILES['foto_profile']['tmp_name'],
        $folder . $namaFile
    )) {
        echo "<script>
            alert('Foto gagal disimpan!');
            window.history.back();
        </script>";
        exit;
    }

    // Simpan path relatif terhadap folder utama proyek
    $foto = 'assets/upload/profile/' . $namaFile;
}

// Update data profil
$stmt = mysqli_prepare(
    $connect,
    "UPDATE users
     SET nama = ?,
         no_telp = ?,
         email = ?,
         alamat = ?,
         tanggal_lahir = ?,
         foto_profile = ?
     WHERE id_user = ?"
);

if (!$stmt) {
    die("Gagal menyiapkan pembaruan profil: " .
        mysqli_error($connect));
}

mysqli_stmt_bind_param(
    $stmt,
    "ssssssi",
    $nama,
    $no_telp,
    $email,
    $alamat,
    $tanggal_lahir,
    $foto,
    $id_user
);

if (mysqli_stmt_execute($stmt)) {
    // Perbarui data sesi
    $_SESSION['nama_user'] = $nama;
    $_SESSION['email_user'] = $email;

    mysqli_stmt_close($stmt);

    echo "<script>
        alert('Profil berhasil diperbarui!');
        window.location.href = '../../user/profile.php';
    </script>";
    exit;
}

$error = mysqli_stmt_error($stmt);
mysqli_stmt_close($stmt);

error_log("Update profil gagal: " . $error);

echo "<script>
    alert('Profil gagal diperbarui. Silakan coba kembali.');
    window.history.back();
</script>";
exit;
?>
```