```php
<?php
session_start();

require_once("../../config/connection.php");

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// Pastikan form dikirim menggunakan POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: ../../user/reset_password.php");
    exit;
}

// Ambil data dari form
$email = trim($_POST['email'] ?? '');
$password_baru = $_POST['password_baru'] ?? '';
$konfirmasi_password = $_POST['konfirmasi_password'] ?? '';

// Validasi input
if (
    $email === '' ||
    $password_baru === '' ||
    $konfirmasi_password === ''
) {
    echo "<script>
        alert('Semua kolom wajib diisi!');
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

// Validasi konfirmasi password
if ($password_baru !== $konfirmasi_password) {
    echo "<script>
        alert('Konfirmasi password tidak sama!');
        window.history.back();
    </script>";
    exit;
}

// Validasi panjang password
if (strlen($password_baru) < 8) {
    echo "<script>
        alert('Password baru minimal 8 karakter!');
        window.history.back();
    </script>";
    exit;
}

try {
    // Periksa email menggunakan prepared statement
    $stmt = mysqli_prepare(
        $connect,
        "SELECT id_user FROM users WHERE email = ? LIMIT 1"
    );

    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);

    if (mysqli_stmt_num_rows($stmt) === 0) {
        mysqli_stmt_close($stmt);

        echo "<script>
            alert('Email tidak ditemukan!');
            window.history.back();
        </script>";
        exit;
    }

    mysqli_stmt_close($stmt);

    // Hash password baru
    $password_hash = password_hash(
        $password_baru,
        PASSWORD_DEFAULT
    );

    // Perbarui password
    $stmt = mysqli_prepare(
        $connect,
        "UPDATE users SET password = ? WHERE email = ?"
    );

    mysqli_stmt_bind_param(
        $stmt,
        "ss",
        $password_hash,
        $email
    );

    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    echo "<script>
        alert('Password berhasil diubah! Silakan login kembali.');
        window.location.href = '../../user/login.php';
    </script>";
    exit;

} catch (mysqli_sql_exception $e) {
    error_log("reset_password.php: " . $e->getMessage());

    echo "<script>
        alert('Gagal mengubah password. Periksa koneksi dan struktur database.');
        window.history.back();
    </script>";
    exit;
}
?>
```