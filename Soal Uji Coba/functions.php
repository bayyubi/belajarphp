<?php
session_start();


function clean($data)
{
    return htmlspecialchars(trim($data));
}


function redirect($page)
{
    header("Location: $page");
    exit;
}

function alert($pesan)
{
    echo "<script>alert('$pesan');</script>";
}

function alertAndRedirect($pesan, $page)
{
    echo "<script>alert('$pesan'); window.location.href='$page';</script>";
    exit;
}

if(
    !isset($_SESSION['login'])
    &&
    isset($_COOKIE['remember_email'])
){
    $users = file("users.txt", FILE_IGNORE_NEW_LINES);
    foreach($users as $user){
        $data = explode("|",$user);
        if(count($data) < 4){
            continue;
        }

        if($data[1] == $_COOKIE['remember_email']){
            $_SESSION['login']=true;
            $_SESSION['username']=$data[0];
            $_SESSION['email']=$data[1];
            $_SESSION['avatar']=$data[3];
            break;
        }
    }
}

?>

