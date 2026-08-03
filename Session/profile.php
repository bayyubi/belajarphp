<?php

session_start();
if(isset($_SESSION['nama_user'])){
    echo "Ini halmaan profile " . $_SESSION['nama_user'];
}else{
    echo "login dulu";
}
