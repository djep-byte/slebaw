
<?php
session_start();

require_once __DIR__ . '/../../config/connection.php';

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// Pastikan hanya request POST yang diproses
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../../user/order.php');
    exit;
}

// Pastikan pengguna sudah login
if (empty($_SESSION['id_user'])) {
    header('Location: ../../user/login_awal.php');
    exit;
}

// Ambil ID transaksi dari form
$id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);

if (!$id) {
    $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
}

if (!$id || $id <= 0) {
    die('ID transaksi tidak valid.');
}

$folder = __DIR__ . '/../../assets/upload/bukti_transfer/';
$namaFile = null;
$tujuanFile = null;

try {
    mysqli_begin_transaction($connect);

    // Ambil transaksi dan kunci baris selama proses berlangsung
    $stmt = mysqli_prepare(
        $connect,
        "SELECT id_transaksi, id_user, status
         FROM transaksi
         WHERE id_transaksi = ?
         FOR UPDATE"
    );

    mysqli_stmt_bind_param($stmt, 'i', $id);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);
    $transaksi = mysqli_fetch_assoc($result);

    mysqli_stmt_close($stmt);

    if (!$transaksi) {
        throw new Exception('Transaksi tidak ditemukan.');
    }

    // Pastikan transaksi milik pengguna yang sedang login
    if ((int) $transaksi['id_user'] !== (int) $_SESSION['id_user']) {
        throw new Exception('Kamu tidak memiliki akses ke transaksi ini.');
    }

    $status = strtolower(trim($transaksi['status'] ?? ''));

    // Tolak transaksi yang sudah final
    if (in_array(
        $status,
        ['diproses', 'selesai', 'expired', 'ditolak'],
        true
    )) {
        throw new Exception('Transaksi sudah diproses dan tidak dapat diubah.');
    }

    // Validasi bukti transfer
    if (
        !isset($_FILES['bukti_transfer']) ||
        $_FILES['bukti_transfer']['error'] !== UPLOAD_ERR_OK
    ) {
        throw new Exception('Bukti transfer wajib diunggah.');
    }

    $file = $_FILES['bukti_transfer'];

    // Maksimal 2 MB
    if ($file['size'] <= 0 || $file['size'] > 2 * 1024 * 1024) {
        throw new Exception('Ukuran bukti transfer maksimal 2 MB.');
    }

    // Validasi MIME file
    $finfo = new finfo(FILEINFO_MIME_TYPE);
    $mime = $finfo->file($file['tmp_name']);

    $allowed = [
        'image/jpeg' => 'jpg',
        'image/png'  => 'png',
        'image/webp' => 'webp'
    ];

    if (!isset($allowed[$mime])) {
        throw new Exception('Bukti transfer harus berupa JPG, PNG, atau WEBP.');
    }

    // Pastikan folder upload tersedia
    if (!is_dir($folder)) {
        if (!mkdir($folder, 0775, true) && !is_dir($folder)) {
            throw new Exception('Folder upload bukti transfer gagal dibuat.');
        }
    }

    // Buat nama file unik
    $namaFile = 'transfer_' . $id . '_' .
        bin2hex(random_bytes(8)) . '.' . $allowed[$mime];

    $tujuanFile = $folder . $namaFile;

    if (!move_uploaded_file($file['tmp_name'], $tujuanFile)) {
        throw new Exception('Bukti transfer gagal diunggah.');
    }

    // Periksa kolom yang diperlukan
    $kolom = [];
    $resultKolom = mysqli_query($connect, 'SHOW COLUMNS FROM transaksi');

    while ($row = mysqli_fetch_assoc($resultKolom)) {
        $kolom[] = $row['Field'];
    }

    if (!in_array('metode_pembayaran', $kolom, true)) {
        throw new Exception(
            'Kolom metode_pembayaran belum tersedia pada tabel transaksi.'
        );
    }

    if (!in_array('bukti_transfer', $kolom, true)) {
        throw new Exception(
            'Kolom bukti_transfer belum tersedia pada tabel transaksi.'
        );
    }

    // Update transaksi setelah bukti berhasil diunggah
    $stmtUpdate = mysqli_prepare(
        $connect,
        "UPDATE transaksi
         SET metode_pembayaran = ?,
             bukti_transfer = ?,
             status = 'menunggu_diproses'
         WHERE id_transaksi = ? AND id_user = ?"
    );

    $metode = 'Transfer';
    $id_user = (int) $_SESSION['id_user'];

    mysqli_stmt_bind_param(
        $stmtUpdate,
        'ssii',
        $metode,
        $namaFile,
        $id,
        $id_user
    );

    mysqli_stmt_execute($stmtUpdate);

    if (mysqli_stmt_affected_rows($stmtUpdate) < 0) {
        throw new Exception('Data transaksi gagal diperbarui.');
    }

    mysqli_stmt_close($stmtUpdate);

    mysqli_commit($connect);

    header('Location: ../../user/order.php');
    exit;

} catch (Throwable $e) {
    mysqli_rollback($connect);

    // Hapus file jika database gagal menyimpan transaksi
    if ($tujuanFile !== null && is_file($tujuanFile)) {
        @unlink($tujuanFile);
    }

    error_log('submit_transaksi_user.php: ' . $e->getMessage());

    http_response_code(400);

    echo '<!DOCTYPE html>
    <html lang="id">
    <head>
        <meta charset="UTF-8">
        <title>Transaksi Gagal</title>
    </head>
    <body>
        <script>
            alert(' .
            json_encode(
                'Transaksi gagal: ' . $e->getMessage(),
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
