```php
<?php
session_start();

require_once("../../config/connection.php");

// Pastikan koneksi database tersedia
if (!isset($connect) || !($connect instanceof mysqli)) {
    die("Koneksi database gagal.");
}

// Pastikan form dikirim menggunakan POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: ../../user/login-costumer.php");
    exit;
}

// Ambil data dari form
$email = trim($_POST['email'] ?? '');
$password = $_POST['password'] ?? '';

// Validasi input
if ($email === '' || $password === '') {
    echo "<script>
        alert('Email dan password wajib diisi!');
        window.history.back();
    </script>";
    exit;
}

// Validasi format email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "<script>
        alert('Format email tidak valid!');
        window.history.back();
    </script>";
    exit;
}

// Cari pengguna berdasarkan email
$stmt = mysqli_prepare(
    $connect,
    "SELECT id_user, nama, email, password
     FROM users
     WHERE email = ?
     LIMIT 1"
);

mysqli_stmt_bind_param($stmt, "s", $email);
mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);
$data = mysqli_fetch_assoc($result);

mysqli_stmt_close($stmt);

// Jika email tidak ditemukan
if (!$data) {
    echo "<script>
        alert('Email tidak ditemukan!');
        window.history.back();
    </script>";
    exit;
}

// Verifikasi password yang sudah di-hash
if (!password_verify($password, $data['password'])) {
    echo "<script>
        alert('Password salah!');
        window.history.back();
    </script>";
    exit;
}

// Login berhasil
session_regenerate_id(true);

$_SESSION['id_user'] = $data['id_user'];
$_SESSION['nama_user'] = $data['nama'];
$_SESSION['email_user'] = $data['email'];

// Arahkan ke halaman beranda pengguna
header("Location: ../../user/home_user.php");
exit;
?>
```