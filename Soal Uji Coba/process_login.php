<?php

require 'functions.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = clean($_POST['email']);
    $password = clean($_POST['password']);
    $file = "users.txt";

    if (!file_exists($file)) {
        alert("Belum ada akun yang terdaftar!");
        redirect("login.php");
    }

    $users = file($file, FILE_IGNORE_NEW_LINES);
    foreach ($users as $user) {
        $data = explode("|", $user);
        if (count($data) < 4) {
            continue;
        }

        $username = $data[0];
        $userEmail = $data[1];
        $passwordHash = $data[2];
        $avatar = $data[3];

        if ($email == $userEmail && password_verify($password, $passwordHash)) {
            session_regenerate_id(true);
            $_SESSION['login'] = true;
            $_SESSION['username'] = $username;
            $_SESSION['email'] = $userEmail;
            $_SESSION['avatar'] = $avatar;

            if (isset($_POST['remember'])) {

                setcookie(
                    "remember",
                    $userEmail,
                    time() + (30 * 24 * 60 * 60),
                    "/"
                );
            }
            redirect("dashboard.php");
        }
    }

    alert("Email atau Password Salah!");
    redirect("login.php");
}