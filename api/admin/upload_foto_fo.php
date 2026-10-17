```php
<?php
session_start();

require_once __DIR__ . '/../../config/connection.php';

// Periksa koneksi database
if (!isset($connect) || !($connect instanceof mysqli)) {
    if (isset($conn) && $conn instanceof mysqli) {
        $connect = $conn;
    } elseif (isset($koneksi) && $koneksi instanceof mysqli) {
        $connect = $koneksi;
    } else {
        die("Koneksi database gagal. Periksa config/connection.php.");
    }
}

// Pastikan formulir dikirim menggunakan POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: ../../admin/daftar_fo.php");
    exit;
}

// Ambil ID akun
$id_akun = isset($_POST['id_akun'])
    ? (int) $_POST['id_akun']
    : 0;

if ($id_akun <= 0) {
    die("ID Front Office tidak valid.");
}

// Pastikan akun adalah Front Office
$sql = "SELECT id_akun, foto_profile
        FROM akun
        WHERE id_akun = ?
        AND role = 'fo'";

$stmt = mysqli_prepare($connect, $sql);

if (!$stmt) {
    die("Gagal menyiapkan pemeriksaan akun.");
}

mysqli_stmt_bind_param($stmt, "i", $id_akun);
mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);
$data = mysqli_fetch_assoc($result);

mysqli_stmt_close($stmt);

if (!$data) {
    die("Data Front Office tidak ditemukan.");
}

// Pastikan foto dikirim
if (
    !isset($_FILES['foto']) ||
    $_FILES['foto']['error'] !== UPLOAD_ERR_OK
) {
    die("Silakan pilih foto terlebih dahulu.");
}

// Validasi jenis dan ukuran file
$tmpFile = $_FILES['foto']['tmp_name'];
$namaAsli = $_FILES['foto']['name'];
$ukuran = $_FILES['foto']['size'];

$info = getimagesize($tmpFile);

if ($info === false) {
    die("File yang diunggah harus berupa gambar.");
}

$tipe = $info['mime'];

$ekstensiValid = [
    'image/jpeg' => 'jpg',
    'image/png'  => 'png',
    'image/webp' => 'webp'
];

if (!isset($ekstensiValid[$tipe])) {
    die("Format foto harus JPG, PNG, atau WEBP.");
}

if ($ukuran > 5 * 1024 * 1024) {
    die("Ukuran foto maksimal 5 MB.");
}

// Folder penyimpanan foto
$folder = __DIR__ . '/../../assets/';

if (!is_dir($folder)) {
    if (!mkdir($folder, 0775, true)) {
        die("Folder assets gagal dibuat.");
    }
}

// Buat nama file unik
$namaFoto = 'fo_' . $id_akun . '_' .
    bin2hex(random_bytes(8)) . '.' .
    $ekstensiValid[$tipe];

$tujuan = $folder . $namaFoto;

// Pindahkan foto ke folder assets
if (!move_uploaded_file($tmpFile, $tujuan)) {
    die("Foto gagal diunggah.");
}

// Perbarui foto pada database
$sqlUpdate = "UPDATE akun
              SET foto_profile = ?
              WHERE id_akun = ?
              AND role = 'fo'";

$stmtUpdate = mysqli_prepare($connect, $sqlUpdate);

if (!$stmtUpdate) {
    if (file_exists($tujuan)) {
        unlink($tujuan);
    }

    die("Gagal menyiapkan pembaruan foto.");
}

mysqli_stmt_bind_param(
    $stmtUpdate,
    "si",
    $namaFoto,
    $id_akun
);

if (mysqli_stmt_execute($stmtUpdate)) {
    mysqli_stmt_close($stmtUpdate);

    // Hapus foto lama jika memang tersimpan di assets
    $fotoLama = basename((string) $data['foto_profile']);

    if (
        $fotoLama !== '' &&
        $fotoLama !== $namaFoto &&
        is_file($folder . $fotoLama)
    ) {
        unlink($folder . $fotoLama);
    }

    header(
        "Location: ../../admin/edit_fo.php?id_akun=" .
        $id_akun . "&status=foto_berhasil"
    );
    exit;
}

$error = mysqli_stmt_error($stmtUpdate);
mysqli_stmt_close($stmtUpdate);

// Hapus foto baru jika pembaruan database gagal
if (file_exists($tujuan)) {
    unlink($tujuan);
}

die("Foto gagal disimpan: " . htmlspecialchars($error));
?>
```