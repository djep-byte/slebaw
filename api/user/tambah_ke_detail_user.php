
<?php
session_start();

require_once __DIR__ . '/../../config/connection.php';

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// Pastikan pengguna sudah login
if (empty($_SESSION['id_user'])) {
    header('Location: ../../user/login_awal.php');
    exit;
}

// Ambil ID produk dari URL
$id_produk = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

if (!$id_produk || $id_produk <= 0) {
    echo "<script>
        alert('ID produk tidak valid.');
        window.location.href='../../user/hardware_user.php';
    </script>";
    exit;
}

try {
    // Ambil data produk dari database
    $stmt = mysqli_prepare(
        $connect,
        "SELECT id_produk, nama_produk, harga, kategori, foto_produk, stok
         FROM produk
         WHERE id_produk = ?
         LIMIT 1"
    );

    mysqli_stmt_bind_param($stmt, 'i', $id_produk);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);
    $produk = mysqli_fetch_assoc($result);

    mysqli_stmt_close($stmt);

    if (!$produk) {
        throw new Exception('Produk tidak ditemukan.');
    }

    // Pastikan keranjang tersedia
    if (
        !isset($_SESSION['cart_user']) ||
        !is_array($_SESSION['cart_user'])
    ) {
        $_SESSION['cart_user'] = [];
    }

    // Ambil jumlah produk di keranjang
    $qty_sekarang = (int) (
        $_SESSION['cart_user'][$id_produk]['qty'] ?? 0
    );

    // Cek stok tersedia
    $stok = (int) $produk['stok'];

    if ($stok <= 0) {
        throw new Exception('Stok produk sedang habis.');
    }

    if ($qty_sekarang + 1 > $stok) {
        throw new Exception(
            'Jumlah produk melebihi stok yang tersedia.'
        );
    }

    // Jika produk sudah ada, tambahkan jumlahnya
    if (isset($_SESSION['cart_user'][$id_produk])) {
        $_SESSION['cart_user'][$id_produk]['qty'] = $qty_sekarang + 1;
    } else {
        // Jika belum ada, masukkan produk ke keranjang
        $_SESSION['cart_user'][$id_produk] = [
            'nama' => $produk['nama_produk'],
            'harga' => (float) $produk['harga'],
            'qty' => 1,
            'kategori' => $produk['kategori'],
            'foto_produk' => $produk['foto_produk']
        ];
    }

    // Kembali ke halaman detail pesanan
    header('Location: ../../user/detail_user.php');
    exit;

} catch (Throwable $e) {
    error_log('tambah_ke_detail_user.php: ' . $e->getMessage());

    echo '<script>
        alert(' .
        json_encode(
            $e->getMessage(),
            JSON_HEX_TAG |
            JSON_HEX_APOS |
            JSON_HEX_QUOT |
            JSON_HEX_AMP
        ) .
        ');
        window.history.back();
    </script>';
    exit;
}
?>
