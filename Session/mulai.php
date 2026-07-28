<?php


//! Selalu panggil ini di awal file
session_start();

//? Menyimpan data ke session
$_SESSION['user_id'] = 101;
$_SESSION['username'] = 'bayu';
$_SESSION['role'] = 'admin';

echo "Data session berhasil disimpan!";
?>