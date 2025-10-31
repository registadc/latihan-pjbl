<?php
include "koneksi.php";
session_start();

if (!isset($_SESSION['id_user'])) {
    echo "<script>alert('Silakan login terlebih dahulu!'); window.location='login.php';</script>";
    exit;
}

$id_user = $_SESSION['id_user'];
$nama_produk = $_POST['nama_produk'];
$harga_modal = $_POST['harga_modal'];
$harga_jual = $_POST['harga_jual'];
$jumlah_dibeli = $_POST['jumlah_dibeli'];
$tanggal_penjualan = $_POST['tanggal_penjualan'];
$metode_pembayaran = $_POST['metode_pembayaran'];

$subtotal = $harga_jual * $jumlah_dibeli;
$keuntungan = ($harga_jual - $harga_modal) * $jumlah_dibeli;

$query_penjualan = "
    INSERT INTO penjualan (id_user, tanggal_penjualan, total_belanja, metode_pembayaran)
    VALUES ('$id_user', '$tanggal_penjualan', '$subtotal', '$metode_pembayaran')
";
mysqli_query($koneksi, $query_penjualan);
$id_penjualan = mysqli_insert_id($koneksi);

$query_detail = "
    INSERT INTO detail_penjualan (id_penjualan, nama_produk, jumlah_dibeli, harga_modal, harga_jual, subtotal, keuntungan)
    VALUES ('$id_penjualan', '$nama_produk', '$jumlah_dibeli', '$harga_modal', '$harga_jual', '$subtotal', '$keuntungan')
";

if (mysqli_query($koneksi, $query_detail)) {
    echo "<script>alert('Data penjualan berhasil disimpan!'); window.location='home.php';</script>";
} else {
    echo "<script>alert('Gagal menyimpan data penjualan: " . mysqli_error($koneksi) . "'); window.location='tambah_penjualan.php';</script>";
}
?>
