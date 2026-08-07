<?php
require 'auth.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Dashboard</title>
</head>

<body>
<header align="center">
    <h1>Dashboard</h1>
</header>

<div class="container" align="center">
    <div class="card">
        <h2>Selamat Datang</h2>
        <br>
        <p>
            <b>Username :</b>
            <?php echo $_SESSION['username']; ?>
        </p>
        <p>
            <b>Email :</b>
            <?php echo $_SESSION['email']; ?>
        </p>

        <br>

<?php

$avatar = "upload/default.png";
if(isset($_SESSION['avatar'])){
    if(file_exists($_SESSION['avatar'])){
        $avatar = $_SESSION['avatar'];
    }
}
?>

        <br>
        <img src="<?= $avatar ?>" style="max-width: 150px; display: block; margin: 10px auto;">
        <br>
        <div class="menu">
            <a href="profile.php">Profile</a>
        </div>
        <br>
        <div>
            <a href="logout.php">Logout</a>
        </div>
    </div>
</div>

</body>
</html>