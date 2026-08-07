<?php

require 'auth.php';

if(isset($_FILES['avatar'])){
    if($_FILES['avatar']['error'] != UPLOAD_ERR_OK){
        alertAndRedirect("Upload gagal!", "profile.php");
    }

    if($_FILES['avatar']['size'] > 2*1024*1024){
        alertAndRedirect("Ukuran maksimal 2 MB", "profile.php");
    }

    $finfo = finfo_open(FILEINFO_MIME_TYPE);
    $mime = finfo_file(
        $finfo,
        $_FILES['avatar']['tmp_name']
    );

    finfo_close($finfo);
    $allowed = [
        "image/jpeg",
        "image/png",
        "image/webp"
    ];

    if(!in_array($mime,$allowed)){
        alertAndRedirect("Format gambar tidak didukung!", "profile.php");
    }

    $extension = pathinfo(
        $_FILES['avatar']['name'],
        PATHINFO_EXTENSION
    );

    $namaBaru = uniqid() . "." . $extension;
    $tujuan = "upload/" . $namaBaru;
    
    move_uploaded_file(
        $_FILES['avatar']['tmp_name'],
        $tujuan
    );

    $_SESSION['avatar'] = $tujuan;
    $users = file("users.txt", FILE_IGNORE_NEW_LINES);
    $baru = [];
    foreach($users as $user){
        $data = explode("|",$user);
        if(isset($data[1]) && $data[1] == $_SESSION['email']){
            $data[3] = $tujuan;
        }
        $baru[] = implode("|",$data);
    }
    file_put_contents(
        "users.txt",
        implode(PHP_EOL,$baru)
    );

    alertAndRedirect("Avatar berhasil diupload!", "profile.php");
}