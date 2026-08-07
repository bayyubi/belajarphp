<?php
require 'functions.php';

if (!isset($_SESSION['login'])) {
    redirect("login.php");
}
?>