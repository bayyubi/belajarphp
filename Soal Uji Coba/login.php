<?php
require 'functions.php';

if (isset($_SESSION['login'])) {
    redirect('dashboard.php');
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>

<body>
    <br><br><br><br><br><br>
    <div class="card" align="center">
    <h1>LOGIN</h1>
    <form action="process_login.php" method="POST">
    <br>    
    <input
        type="email"
        name="email"
        placeholder="Email"required>
        <input
        type="password"
        name="password"
        placeholder="Password"required>
        <label>
            <br><br>
            <input
            type="checkbox" 
            name="remember">
            Remember Me
        </label>
        <br><br>
            <button type="submit">
            Login
            </button>
    </form>

<br>

        <p align="center">
            Belum punya akun?
            <a href="register.php">
            Daftar
        </a>
        </p>
    </div>

</body>
</html>