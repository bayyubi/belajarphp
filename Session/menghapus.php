<?php

session_start();

//! Menghapus item tertentu
unset($_SESSION['role']);

//! Menghpus !SELURUH! data session (Logout)
$_SESSION = array();

if (ini_get("session.use_cookie")) {
    $param = session_get_cookie_params();
    setcookie(session_name(), '', time() - 4200,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]    
    );
}

//! Menghpus session di server
session_destroy();
?>