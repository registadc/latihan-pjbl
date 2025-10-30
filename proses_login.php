<?php
session_start();
include 'koneksi.php';

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM user WHERE email='$email' AND password=md5('$password')";
$query = mysqli_query($koneksi, $sql);

if(mysqli_num_rows($query) == 1){
    $user = mysqli_fetch_assoc($query);
    $_SESSION['user_id'] = $user['id'];
    header('Location: home.php?login=sukses');
    exit();
} else {
    header('Location: login.php?gagal login');
    exit();
}



?>