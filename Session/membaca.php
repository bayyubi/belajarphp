<?php

session_start()

//? Memeriksa apakah user sudah login
if (isset($_SESSION['username'])) {
    echo "Selamat datang kembali, " . htmlspecialchars($_SESSION['username']);
} else {
    echo "Silahkan login terlebih dahulu. ";
}
?>