<?php
require 'functions.php';

if (isset($_SESSION['login'])) {
    redirect("dashboard.php");
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Register</title>
</head>
<body>
    <br><br><br><br><br><br>
    <div class="card" align="center">
        <h1 align="center">REGISTER</h1>

        <br>

        <form action="process_register.php" method="POST">
            <input
            type="text"
            name="username"
            placeholder="Username"
            required>

            <br>

            <input
            type="email"
            name="email"
            placeholder="Email"
            required>

            <br>

            <input
            type="password"
            name="password"
            placeholder="Password"
            required>

            <br>

            <input
            type="password"
            name="confirm_password"
            placeholder="Konfirmasi Password"
            required>

            <br><br>

            <button type="submit">
            Daftar
            </button>
        </form>
        <br>

        <p align="center">
        Sudah punya akun?
        <a href="login.php">
        Login

        </a>
        </p>
    </div>
</body>
</html>