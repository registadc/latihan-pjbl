<?php
session_start();
include 'koneksi.php';

$email = $_POST['email'];
$password = $_POST['password'];

// Jika register pakai MD5
$sql = "SELECT * FROM user WHERE email='$email' AND password=MD5('$password')";
$query = mysqli_query($koneksi, $sql);

if (mysqli_num_rows($query) == 1) {
    $user = mysqli_fetch_assoc($query);
    $_SESSION['id_user'] = $user['id_user'];
    $_SESSION['nama'] = $user['nama'];
    $_SESSION['user_type'] = $user['user_type'];

    // Redirect sesuai tipe user
    if ($user['user_type'] == 'admin') {
        header('Location: admin_dashboard.php');
    } else {
        header('Location: home.php');
    }
    exit();
} else {
    header('Location: login.php?pesan=gagal');
    exit();
}
?>
