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
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
    <a class="navbar-brand" href="#">Admin Kasir</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link active" href="#">Dashboard</a></li>
        <li class="nav-item"><a class="nav-link" href="home.php">Produk</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Penjualan</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Laporan</a></li>
        <li class="nav-item"><a class="nav-link text-danger" href="logout.php">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container mt-4">
    <h1>Selamat Datang di Sistem Kasir</h1>
    <p>Gunakan navigasi di atas untuk mengelola produk, penjualan, dan laporan.</p>
</div>

<div class="container mt-5">
    <h2 class="mb-4 text-center"></h2>

    <table class="table table-bordered table-striped table-hover">
        <thead class="table-light text-center">
            <tr>
                <th>ID Produk</th>
                <th>Nama Produk</th>
                <th>Nama Kategori</th>
                <th>Harga Jual</th>
                <th>Harga Modal</th>
                <th>Stok</th>
                <th>Tanggal Ditambahkan</th>
            </tr>
        </thead>
        <tbody>
           
            <?php

            $sql = "SELECT produk.id_produk, produk.nama_produk, kategori.nama_kategori, produk.harga_jual, produk.harga_modal, produk.stok, produk.tanggal_ditambahkan 
                    FROM produk 
                    JOIN kategori ON produk.id_kategori = kategori.id_kategori";
            $query = mysqli_query($koneksi, $sql);

            while($produk = mysqli_fetch_assoc($query)){
                echo "<tr>";
                echo "<td class='text-center'>".$produk['id_produk']."</td>";
                echo "<td>".$produk['nama_produk']."</td>";
                echo "<td>".$produk['nama_kategori']."</td>";
                echo "<td class='text-end'>Rp ".number_format($produk['harga_jual'], 0, ',', '.')."</td>";
                echo "<td class='text-end'>Rp ".number_format($produk['harga_modal'], 0, ',', '.')."</td>";
                echo "<td class='text-center'>".$produk['stok']."</td>";
                echo "<td class='text-center'>".$produk['tanggal_ditambahkan']."</td>";
                echo "</tr>";
            }
            ?>
        </tbody>




</body>
</html>