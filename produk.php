<?php
include "koneksi.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk - kasir</title>
    <link 
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Script JS Bootstrap -->
    <script 
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    </script>
</head>
<body>
    <?php include 'navbar.php'; ?>

 <div class="container mt-5">
        <h2 class="mb-4 text-center"></h2>

        <div class="card shadow-sm">
            <h3 class="text-center mb-4 fw-bold">Tabel Produk</h3>
            <div class="table-responsive">
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
            </table>
            </div>
        </div>
    </div>
</body>
</html>