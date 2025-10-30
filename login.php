<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
     <link 
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Script JS Bootstrap -->
    <script 
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    </script>
    <style>
        body {
      background: linear-gradient(135deg, #ffffffff, #ffffffff);
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .card {
      border: none;
      border-radius: 15px;
      box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
    }

     .card-header {
      background-color: #007bff;
      color: white;
      border-radius: 15px 15px 0 0;
    }
    </style>
</head>
<body>
   <div class="container">
  <div class="row justify-content-center">
    <div class="col-md-5">
      <div class="card">
        <div class="card-header text-center">
          <h4>Login Sistem Kasir</h4>
        </div>
        <div class="card-body p-4">

          <!-- Pesan error -->
          <?php if (!empty($error)): ?>
            <div class="alert alert-danger text-center">
              <?= $error ?>
            </div>
          <?php endif; ?>

          <!-- Form Login -->
          <form action="" method="POST">
            <div class="mb-3">
              <label for="username" class="form-label">Username</label>
              <input type="text" name="username" id="username" class="form-control" placeholder="Masukkan username" required>
            </div>

            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan password" required>
            </div>

            <div class="d-grid">
              <button type="submit" class="btn btn-primary">Login</button>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
</div>
   
</body>
</html>