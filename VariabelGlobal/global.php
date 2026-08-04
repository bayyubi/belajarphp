<?php

$nama = "bayu";
$jurusan = "RPL";

function namapanggil() {
    $GLOBALS['nama'] = "bayu";
    $GLOBALS['jurusan'] = "RPL";
}

namapanggil();
echo "Nama : " . $nama . "<br>";
echo "Jurusan : " . $jurusan . "<br>";