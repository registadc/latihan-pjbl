<?php
include "koneksi.php";
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - kasir</title>
    <link 
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Script JS Bootstrap -->
    <script 
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    </script>
    <style>
        .body{
            font-family: 'Poppins', sans-serif;
        }
        .btn-login {
      background: linear-gradient(90deg, #a18cd1, #fbc2eb);
      border: none;
      color: #fff;
      font-weight: 600;
    }
    .btn-login:hover {
      opacity: 0.9;
    }

    </style>
</head>
<body>

<?php include 'navbar.php'; ?>

<div class="container mt-4">
    <h1>Selamat Datang di Sistem Kasir</h1>
    <p>Gunakan navigasi di atas untuk mengelola produk, penjualan, dan laporan.</p>
</div>

 
<div class="container py-5">
  <div class="row justify-content-center">
    <div class="col-lg-6 col-md-8 col-sm-10">
      <div class="card shadow-sm">
        <div class="card-body">
          <h3 class="text-center mb-4 fw-bold">Form Input Data Penjualan</h3>

          <form action="proses_tambah.php" method="POST">

            <!-- Nama Produk -->
            <div class="mb-3">
              <label class="form-label">Nama Produk</label>
              <input type="text" name="nama_produk" class="form-control" placeholder="Masukkan nama produk" required>
            </div>

            <!-- Harga Modal -->
            <div class="mb-3">
              <label class="form-label">Harga Modal (Rp)</label>
              <input type="number" name="harga_modal" class="form-control" placeholder="Masukkan harga modal" required>
            </div>

            <!-- Harga Jual -->
            <div class="mb-3">
              <label class="form-label">Harga Jual (Rp)</label>
              <input type="number" name="harga_jual" class="form-control" placeholder="Masukkan harga jual" required>
            </div>

            <!-- Jumlah Dibeli -->
            <div class="mb-3">
              <label class="form-label">Jumlah Dibeli</label>
              <input type="number" name="jumlah_dibeli" class="form-control" placeholder="Masukkan jumlah yang dibeli" required>
            </div>

            <!-- Tanggal Penjualan -->
            <div class="mb-3">
              <label class="form-label">Tanggal Penjualan</label>
              <input type="date" name="tanggal_penjualan" class="form-control" required>
            </div>

            <!-- Metode Pembayaran -->
            <div class="mb-3">
              <label class="form-label">Metode Pembayaran</label>
              <select name="metode_pembayaran" class="form-select" required>
                <option value="">-- Pilih Metode Pembayaran --</option>
                <option value="tunai">Tunai</option>
                <option value="qris">QRIS</option>
                <option value="debit">Debit</option>
                <option value="e-wallet">E-Wallet</option>
              </select>
            </div>

            <!-- Tombol Simpan -->
            <button type="submit" class="btn w-100 text-white fw-bold" 
                    style="background: linear-gradient(to right, #c9a0dc, #f4a6e6);">
              Simpan Data Penjualan
            </button>

          </form>

        </div>
      </div>
    </div>
  </div>
</div>




</body>
</html>