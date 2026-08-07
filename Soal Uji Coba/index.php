<?php
require 'functions.php';

if (isset($_SESSION['login'])) {
    redirect("dashboard.php");
} else {
    redirect("login.php");
}
?>