```php
<?php
session_start();

// Ambil parameter dari URL
$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
$aksi = $_GET['aksi'] ?? '';

// Validasi ID produk
if (!$id || $id <= 0) {
    die("ID produk tidak valid.");
}

// Validasi aksi
if (!in_array($aksi, ['tambah', 'kurang'], true)) {
    die("Aksi tidak valid.");
}

// Pastikan keranjang tersedia
if (
    !isset($_SESSION['cart_user']) ||
    !is_array($_SESSION['cart_user'])
) {
    header("Location: ../../user/katalog_hardware.php");
    exit;
}

// Pastikan produk ada di keranjang
if (!isset($_SESSION['cart_user'][$id])) {
    header("Location: ../../user/detail_user.php");
    exit;
}

// Ambil jumlah produk saat ini
$qty = (int) ($_SESSION['cart_user'][$id]['qty'] ?? 0);

// Validasi jumlah
if ($qty < 1) {
    unset($_SESSION['cart_user'][$id]);

    header("Location: ../../user/detail_user.php");
    exit;
}

// Proses perubahan jumlah
if ($aksi === 'tambah') {
    require_once __DIR__ . '/../../config/connection.php';

    // Mendukung nama koneksi $connect atau $conn
    if (!isset($connect) || !($connect instanceof mysqli)) {
        if (isset($conn) && $conn instanceof mysqli) {
            $connect = $conn;
        } else {
            die("Koneksi database tidak tersedia.");
        }
    }

    // Periksa stok terbaru dari database
    $stmt = mysqli_prepare(
        $connect,
        "SELECT stok FROM produk WHERE id_produk = ? LIMIT 1"
    );

    if (!$stmt) {
        die("Gagal memeriksa stok produk.");
    }

    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);
    $produk = mysqli_fetch_assoc($result);

    mysqli_stmt_close($stmt);

    if (!$produk) {
        die("Produk tidak ditemukan.");
    }

    $stok = (int) $produk['stok'];

    if ($qty + 1 > $stok) {
        echo "<script>
            alert('Jumlah melebihi stok produk yang tersedia!');
            window.location.href = '../../user/detail_user.php';
        </script>";
        exit;
    }

    $_SESSION['cart_user'][$id]['qty'] = $qty + 1;

} elseif ($aksi === 'kurang') {
    $qty--;

    if ($qty <= 0) {
        unset($_SESSION['cart_user'][$id]);
    } else {
        $_SESSION['cart_user'][$id]['qty'] = $qty;
    }
}

// Kembali ke halaman detail pesanan
header("Location: ../../user/detail_user.php");
exit;
?>
```