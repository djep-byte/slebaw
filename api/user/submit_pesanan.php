
<?php
session_start();

require_once __DIR__ . '/../../config/connection.php';

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// Pastikan request berasal dari form POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../../user/hardware_user.php');
    exit;
}

// Pastikan pengguna sudah login
if (empty($_SESSION['id_user'])) {
    header('Location: ../../user/login_awal.php');
    exit;
}

$cart = $_SESSION['cart_user'] ?? [];

if (!is_array($cart) || empty($cart)) {
    echo "<script>
        alert('Keranjang masih kosong!');
        window.location.href='../../user/hardware_user.php';
    </script>";
    exit;
}

$id_user = (int) $_SESSION['id_user'];
$nama_customer = trim($_SESSION['nama_user'] ?? '');

if ($id_user <= 0) {
    die('Data pengguna tidak valid.');
}

try {
    mysqli_begin_transaction($connect);

    // Ambil data pengguna dari database
    $stmtUser = mysqli_prepare(
        $connect,
        "SELECT nama FROM users WHERE id_user = ? LIMIT 1"
    );

    mysqli_stmt_bind_param($stmtUser, 'i', $id_user);
    mysqli_stmt_execute($stmtUser);

    $resultUser = mysqli_stmt_get_result($stmtUser);
    $user = mysqli_fetch_assoc($resultUser);

    mysqli_stmt_close($stmtUser);

    if (!$user) {
        throw new Exception('Data pengguna tidak ditemukan.');
    }

    $nama_customer = $user['nama'];

    // Validasi seluruh produk dan stok sebelum membuat transaksi
    $items = [];
    $total = 0;

    $stmtProduk = mysqli_prepare(
        $connect,
        "SELECT nama_produk, harga, stok
         FROM produk
         WHERE id_produk = ?
         FOR UPDATE"
    );

    foreach ($cart as $id_produk => $item) {
        $id_produk = filter_var(
            $id_produk,
            FILTER_VALIDATE_INT
        );

        $qty = filter_var(
            $item['qty'] ?? 0,
            FILTER_VALIDATE_INT
        );

        if (!$id_produk || !$qty || $qty < 1) {
            throw new Exception('Data produk atau jumlah tidak valid.');
        }

        mysqli_stmt_bind_param(
            $stmtProduk,
            'i',
            $id_produk
        );

        mysqli_stmt_execute($stmtProduk);

        $resultProduk = mysqli_stmt_get_result($stmtProduk);
        $produk = mysqli_fetch_assoc($resultProduk);

        if (!$produk) {
            throw new Exception('Produk tidak ditemukan.');
        }

        $stok = (int) $produk['stok'];
        $harga = (float) $produk['harga'];

        if ($qty > $stok) {
            throw new Exception(
                'Stok produk ' . $produk['nama_produk'] .
                ' tidak mencukupi. Stok tersedia: ' . $stok
            );
        }

        $subtotal = $harga * $qty;
        $total += $subtotal;

        $items[] = [
            'id_produk' => $id_produk,
            'qty' => $qty,
            'harga' => $harga,
            'subtotal' => $subtotal
        ];
    }

    mysqli_stmt_close($stmtProduk);

    if (empty($items)) {
        throw new Exception('Tidak ada produk yang dapat diproses.');
    }

    // Buat transaksi dengan status menunggu pembayaran
    $stmtTransaksi = mysqli_prepare(
        $connect,
        "INSERT INTO transaksi
            (id_user, nama_customer, id_fo, tanggal_masuk,
             expired_at, status, total_pembayaran)
         VALUES (?, ?, NULL, NOW(),
                 DATE_ADD(NOW(), INTERVAL 10 MINUTE),
                 'menunggu_pembayaran', ?)"
    );

    mysqli_stmt_bind_param(
        $stmtTransaksi,
        'isd',
        $id_user,
        $nama_customer,
        $total
    );

    mysqli_stmt_execute($stmtTransaksi);

    $id_transaksi = mysqli_insert_id($connect);

    mysqli_stmt_close($stmtTransaksi);

    if ($id_transaksi <= 0) {
        throw new Exception('Transaksi gagal dibuat.');
    }

    // Simpan detail transaksi dan kurangi stok
    $stmtDetail = mysqli_prepare(
        $connect,
        "INSERT INTO detail_transaksi
            (id_transaksi, id_produk, jumlah, harga_satuan, subtotal)
         VALUES (?, ?, ?, ?, ?)"
    );

    $stmtStok = mysqli_prepare(
        $connect,
        "UPDATE produk
         SET stok = stok - ?
         WHERE id_produk = ? AND stok >= ?"
    );

    foreach ($items as $item) {
        $id_produk = $item['id_produk'];
        $qty = $item['qty'];
        $harga = $item['harga'];
        $subtotal = $item['subtotal'];

        mysqli_stmt_bind_param(
            $stmtDetail,
            'iiidd',
            $id_transaksi,
            $id_produk,
            $qty,
            $harga,
            $subtotal
        );

        mysqli_stmt_execute($stmtDetail);

        mysqli_stmt_bind_param(
            $stmtStok,
            'iii',
            $qty,
            $id_produk,
            $qty
        );

        mysqli_stmt_execute($stmtStok);

        if (mysqli_stmt_affected_rows($stmtStok) !== 1) {
            throw new Exception(
                'Stok produk berubah. Silakan ulangi pemesanan.'
            );
        }
    }

    mysqli_stmt_close($stmtDetail);
    mysqli_stmt_close($stmtStok);

    // Simpan transaksi jika semua proses berhasil
    mysqli_commit($connect);

    // Kosongkan keranjang setelah transaksi berhasil
    unset($_SESSION['cart_user']);

    header(
        'Location: ../../user/pembayaran_user.php?id=' .
        urlencode((string) $id_transaksi)
    );
    exit;

} catch (Throwable $e) {
    mysqli_rollback($connect);

    error_log('submit_pesanan_user.php: ' . $e->getMessage());

    http_response_code(400);

    echo '<!DOCTYPE html>
    <html lang="id">
    <head>
        <meta charset="UTF-8">
        <title>Pemesanan Gagal</title>
    </head>
    <body>
        <script>
            alert(' .
            json_encode(
                'Pemesanan gagal: ' . $e->getMessage(),
                JSON_HEX_TAG |
                JSON_HEX_APOS |
                JSON_HEX_QUOT |
                JSON_HEX_AMP
            ) .
            ');
            window.history.back();
        </script>
    </body>
    </html>';
}
?>
