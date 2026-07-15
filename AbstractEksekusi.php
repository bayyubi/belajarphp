<?php

require_once 'AbstractPembayaran.php';
require_once 'AbstractTransferBank.php';
require_once 'AbstractEWallet.php';

echo "<h3>Transaksi 1:</h3>";
$transaksiBank = new TransferBank(800000, "676-767-6767");
$transaksiBank->tampilkanNota();
$transaksiBank->prosesTransaksi();

echo "<hr><h3>Transaksi 2:</h3>";
$transaksiOvo = new EWallet(500000, "0812-3456-7890");
$transaksiOvo->tampilkanNota();
$transaksiOvo->prosesTransaksi();