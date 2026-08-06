<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <center><h1>Upload Gambar</h1>
            <form action="index.php" method="post" enctype="multipart/form-data">
                <input type="file" name="gambar">
                <input type="submit" name="submit" value="upload">
            </form>
        </center>
    <br>
    <br>
</body>
</html>

<?php

echo "<center>";

if (isset($_POST['submit'])){
    print_r($_FILES);

    $nama = $_FILES['gambar']['name'];
    $error = $_FILES['gambar']['error'];
    $size = $_FILES['gambar']['size'];
    $asal = $_FILES['gambar']['tmp_name'];
    $format = $_FILES['gambar']['type'];

    if ( $error == 0){
        if($size < 1048576){
        
            if($format == 'image/jpeg' || $format == 'image/png'){
            echo "<br>";
            echo "<br>";
            move_uploaded_file($asal, 'upload/' . $nama);
            echo 'berhasil upload! <input type="button" name="folder" value="Buka Folder" onclick="window.open(\'upload\')">';
            echo "<br>";

            }else{
                echo 'formatnya harus jpeg atau png';
            }
        }else{
            echo 'gambar terlalu besar (Maksimal 1 Megabyte)';
        }
    
    }else{
        echo 'gagal meng-upload';
    }
        
}

echo "</center>";
?>
