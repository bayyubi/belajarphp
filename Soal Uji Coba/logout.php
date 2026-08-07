<?php

require 'functions.php';
$_SESSION = [];
session_destroy();
setcookie(
    "remember_email",
    "",
    time()-3600,
    "/"
);

redirect("login.php");