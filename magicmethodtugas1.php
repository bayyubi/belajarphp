<?php

class Produk {
    public $buku;
    public $kode;
    public $status;
    
    public function __construct($buku, $kode, $status) {
        $this->buku = $buku;
        $this->kode = $kode;
        $this->status = $status;
    }

    public function __toString() {
        return "Buku: " . $this->buku . ", kode: " . $this->kode . ", status: " . $this->status;
    }
}

$perpustakaan = new Produk("Kitab Hacker", "6769", "Tersedia");

echo $perpustakaan;