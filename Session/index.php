<?php

session_start();

$user = 'bayu';
$password = '123';

if (isset($_POST['submit'])){
    if($_POST ['nama'] == $user && $_POST ['password'] == $password){

    $_SESSION ['nama_user'] = $_POST ['nama'];

        header('Location: profile.php?nama=' . $user);
    }
    else{
        echo 'you shall not pass!';
    }
}
?>
<form action ="index.php" method="post">
    <input type ="text" name="nama"> 
    <input type ="password" name="password">
    <input type ="submit" name="submit">
</form>