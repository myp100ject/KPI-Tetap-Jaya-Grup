<div class="collapse navbar-collapse pull-left" id="navbar-collapse">
    <ul class="nav navbar-nav">
<?php
    foreach ($aplikasi as $data) {
        if ($data->NamaAplikasi == 'KPI Pemasok') {
            require_once 'pemasok/index.php';
        } else if ($data->NamaAplikasi == 'KPI Pelanggan') {
            require_once 'pelanggan/index.php';
        } else if ($data->NamaAplikasi == 'KPI Karyawan') {
            require_once 'karyawan/index.php';
        } else if ($data->NamaAplikasi == 'KPI Team') {
            require_once 'team/index.php';
        } else if ($data->NamaAplikasi == 'Pengaturan') {
            require_once 'pengaturan/index.php';
        }
    }
?>
    </ul>
</div>