<?php

$nama = "bayu";
$jurusan = "RPL";

function namapanggil() {
    $GLOBALS['nama'];
    $GLOBALS['jurusan'];
}

namapanggil();
echo "Nama : " . $nama . "<br>";
echo "Jurusan : " . $jurusan . "<br>";