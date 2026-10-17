<?php
session_start();

// Pastikan user sudah login
if (!isset($_SESSION['id_user'])) {
    header("Location: ../../user/login_user.php");
    exit;
}

// Kosongkan keranjang belanja user
unset($_SESSION['cart_user']);

// Kembali ke katalog aksesoris Pet Care
header("Location: ../../user/data_produk_aksesoris.php");
exit;
?>