<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        <nav class="navbar navbar-expand-lg" style=" background: linear-gradient(135deg, #a18cd1, #fbc2eb);">
    <div class="container-fluid">
    <a class="navbar-brand" href="#" style="color: white; padding-left: 50px; font-weight: bold;">Admin Kasir</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto" style="padding-right: 50px;">
        <li class="nav-item"><a class="nav-link active" href="home.php">Dashboard</a></li>
        <li class="nav-item"><a class="nav-link" href="produk.php">Produk</a></li>
        <li class="nav-item"><a class="nav-link" href="penjualan.php">Penjualan</a></li>
        <li class="nav-item"><a class="nav-link" href="laba.php">Laba</a></li>
        <li class="nav-item"><a class="nav-link text-danger" href="logout.php">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
</body>
</html>