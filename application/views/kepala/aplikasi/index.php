<?php
    foreach ($aplikasi as $data) {
        if ($data->NamaAplikasi == 'KPI Pemasok') {
            require_once 'pemasok/index.php';
        } else if ($data->NamaAplikasi == 'KPI Pelanggan') {
            require_once 'pelanggan/index.php';
        } else if ($data->NamaAplikasi == 'KPI Karyawan') {
            require_once 'karyawan/index.php';
        } else if ($data->NamaAplikasi == 'KPI Team') {
            require_once 'tim/index.php';
        } else if ($data->NamaAplikasi == 'Pengaturan') {
            require_once 'pengaturan/index.php';
        }
    }
?>