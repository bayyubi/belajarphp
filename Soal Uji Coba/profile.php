<?php
require 'auth.php';
?>

<!DOCTYPE html>
<html lang="id">

<head>
<meta charset="UTF-8">
<title>Profile</title>
</head>
    <body align="center">
        <br><br><br><br><br>
        <div class="container">
        <div class="card">
        <h2 align="center">
        Profile
        </h2>
        <br>
            <?php 
            $avatar = "upload/default.png";
            if(isset($_SESSION['avatar']) && file_exists($_SESSION['avatar'])){
                $avatar = $_SESSION['avatar'];
            }
            ?>
            <img src="<?= $avatar; ?>" style="max-width: 150px;">
        <br>
        <p>
        <b>Username :</b>
            <?= $_SESSION['username']; ?>
        </p>
        <p>
        <b>Email :</b>
            <?= $_SESSION['email']; ?>
        </p>
        <br>

        <form
        action="process_upload.php"
        method="POST"
        enctype="multipart/form-data">

        <input
        type="file"
        name="avatar"
        required>

        <button>
            Upload Avatar
        </button>

        </form>

        <br>

    <a href="dashboard.php">
        Kembali ke Dashboard
    </a>
    </div>
</div>
</body>
</html>