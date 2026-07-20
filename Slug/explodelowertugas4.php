<?php


$title = "Belajar Coding PHP Sangat Menyenangkan";
echo "Judul Asli: " . $title . "\n";
$arrayKata = explode(" ", $title);

echo "<br></br>";

$arrayKecil = array_map('strtolower', $arrayKata);
$slug = implode("-", $arrayKecil);
echo "URL Slug: " . $slug;

