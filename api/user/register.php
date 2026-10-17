```php
<?php
session_start();

require_once __DIR__ . '/../../config/connection.php';

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// Pastikan koneksi database tersedia
if (!isset($connect) || !($connect instanceof mysqli)) {
    error_log('register.php: Koneksi database $connect tidak tersedia.');
    die('Koneksi database gagal. Periksa config/connection.php.');
}

// Hanya menerima data dari form POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../../user/register.php');
    exit;
}

// Ambil data form
$nama = trim($_POST['nama'] ?? '');
$no_telp = trim($_POST['no_telp'] ?? '');
$email = trim($_POST['email'] ?? '');
$alamat = trim($_POST['alamat'] ?? '');
$tanggal_lahir = trim($_POST['tanggal_lahir'] ?? '');
$gender = trim($_POST['gender'] ?? '');
$password = $_POST['password'] ?? '';
$konfirmasi_password = $_POST['konfirmasi_password'] ?? '';

// Validasi kolom wajib
if (
    $nama === '' ||
    $no_telp === '' ||
    $email === '' ||
    $alamat === '' ||
    $tanggal_lahir === '' ||
    $gender === '' ||
    $password === '' ||
    $konfirmasi_password === ''
) {
    echo "<script>
        alert('Semua kolom wajib diisi!');
        history.back();
    </script>";
    exit;
}

// Validasi email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "<script>
        alert('Format email tidak valid!');
        history.back();
    </script>";
    exit;
}

// Validasi konfirmasi password
if ($password !== $konfirmasi_password) {
    echo "<script>
        alert('Konfirmasi password tidak sama!');
        history.back();
    </script>";
    exit;
}

// Minimal password 8 karakter
if (strlen($password) < 8) {
    echo "<script>
        alert('Password minimal 8 karakter!');
        history.back();
    </script>";
    exit;
}

// Validasi gender sesuai pilihan form
if (!in_array($gender, ['Laki-laki', 'Perempuan'], true)) {
    echo "<script>
        alert('Pilihan gender tidak valid!');
        history.back();
    </script>";
    exit;
}

try {
    // Cek email yang sudah terdaftar
    $stmt = mysqli_prepare(
        $connect,
        "SELECT email FROM users WHERE email = ? LIMIT 1"
    );

    mysqli_stmt_bind_param($stmt, 's', $email);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);

    $emailAda = mysqli_stmt_num_rows($stmt) > 0;
    mysqli_stmt_close($stmt);

    if ($emailAda) {
        echo "<script>
            alert('Email sudah digunakan!');
            history.back();
        </script>";
        exit;
    }

    // Hash password
    $password_hash = password_hash(
        $password,
        PASSWORD_DEFAULT
    );

    // Simpan data ke database
    $stmt = mysqli_prepare(
        $connect,
        "INSERT INTO users
        (nama, no_telp, email, alamat, tanggal_lahir, gender, password)
        VALUES (?, ?, ?, ?, ?, ?, ?)"
    );

    mysqli_stmt_bind_param(
        $stmt,
        'sssssss',
        $nama,
        $no_telp,
        $email,
        $alamat,
        $tanggal_lahir,
        $gender,
        $password_hash
    );

    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    echo "<script>
        alert('Registrasi berhasil! Silakan login.');
        window.location.href = '../../user/login.php';
    </script>";
    exit;

} catch (mysqli_sql_exception $e) {
    error_log('register.php: ' . $e->getMessage());

    echo "<script>
        alert('Registrasi gagal. Periksa data dan struktur database.');
        history.back();
    </script>";
    exit;
}
?>
```