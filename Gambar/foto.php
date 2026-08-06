<?php

if (isset($_POST['submit'])){
    print_r($_FILES);

    $nama = $_FILES['gambar']['name'];
    $error = $_FILES['gambar']['error'];
    $size = $_FILES['gambar']['size'];
    $asal = $_FILES['gambar']['tmp_name'];
    $format = $_FILES['gambar']['type'];

    if ( $error == 0){
        if($size < 100){

            if($format == 'image/jpeg' ){

            move_uploaded_file($asal, 'upload/' . $nama);
            echo 'berhasil upload!';
            
            }else{
                echo 'formatnya harus jpeg';
            }
        }else{
            echo 'gambar terlalu besar';
        }
    
    }else{
        echo 'gagal upload';
    }
        
}

?>

<form action="foto.php" method="post" enctype="multipart/form-data">
    <input type="file" name="gambar">
    <input type="submit" name="submit" value="upload">
</form>