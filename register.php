<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
         body {
      background: linear-gradient(135deg, #a18cd1, #fbc2eb);
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      font-family: 'Poppins', sans-serif;
    }
    .card {
      border: none;
      border-radius: 15px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.1);
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
    
    <div class="card p-4" style="width: 22rem; height: auto;">
        <h4 class="text-center mb-4">Register</h4>
        <form action="proses_register.php" method="POST">
            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" name="usernamae" class="form-control" placeholder="Masukkan username" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Masukkan email" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Masukkan password" required>
            </div>
            <button type="submit" class="btn btn-login w-100 mt-2">Masuk</button>

            <p class="text-center mt-3">Sudah punya akun? <a href="login.php">Login</a></p>
        </form>
    </div>
</body>
</html>