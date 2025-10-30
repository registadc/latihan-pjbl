<?php
session_start();
if ($_SESSION['user_type'] != 'admin') {
    header('Location: login.php?pesan=akses_ditolak');
    exit();
}

?>
