<?php
    if (substr($konten, -7) == 'Pemasok' || substr($up_konten, -7) == 'Pemasok') {
        require_once 'pemasok.php';
    } else if (substr($konten, -9) == 'Pembelian' || substr($up_konten, -9) == 'Pembelian') {
        require_once 'pembelian.php';
    } else if (substr($konten, -9) == 'Penjualan' || substr($up_konten, -9) == 'Penjualan') {
        require_once 'penjualan.php';
    }
?>