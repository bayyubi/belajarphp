<?php

require 'functions.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = clean($_POST['username']);
    $email = clean($_POST['email']);
    $password = clean($_POST['password']);
    $confirm = clean($_POST['confirm_password']);

    if(strlen($password) < 8){ // !Password Minimal 8 Char

        alert("Password minimal 8 karakter!");
        redirect("register.php");
    }

    if($password != $confirm){
        alert("Konfirmasi password tidak sama!");
        redirect("register.php");
    }

    $file = "users.txt";

    if(!file_exists($file)){
        fopen($file,"w");
    }

    $users = file($file, FILE_IGNORE_NEW_LINES);

    foreach($users as $user){
        $data = explode("|",$user);
        if(count($data) >= 2){
            if($data[1] == $email){
                alert("Email sudah digunakan!");
                redirect("register.php");
            }
        }
    }

    $passwordHash = password_hash(
        $password,
        PASSWORD_DEFAULT
    );
    $avatar = "uploads/default.png";
    $save =
    $username."|".
    $email."|".
    $passwordHash."|".
    $avatar.PHP_EOL;

    file_put_contents(
        $file,
        $save,
        FILE_APPEND
    );

    alert("Registrasi berhasil!");
    redirect("login.php");
}