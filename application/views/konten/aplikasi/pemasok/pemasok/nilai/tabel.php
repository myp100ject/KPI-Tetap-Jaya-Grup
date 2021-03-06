<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="animated fadeInUp box box-success">                
                <div class="box-body">
                    <table id="tabel" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="header_nama">Pemasok</th>
<?php 
                                foreach ($data_bobot as $data) {
?>
                                    <th class="header_nilai text-center">
<?php
                                        echo $data->AliasBobot.' ('.$data->Bobot.'%)';
?>
                                    </th>
<?php
                                }
?>
                                <th class="header_nilai text-center">Nilai</th>
                                
                                <th class="header_nilai text-center">Predikat</th>
                            </tr>
                        </thead>
                        
                        <tbody>
<?php 
                            foreach ($data_tabel as $data) {
                                switch ($data->Predikat) {
                                    case 'A' :
                                        $warna = 'blue';
                                        break;
                                    case 'B' :
                                        $warna = 'green';
                                        break;
                                    case 'C' :
                                        $warna = 'yellow';
                                        break;
                                    case 'D' :
                                        $warna = 'orange-active';
                                        break;
                                    case 'E' :
                                        $warna = 'red';
                                        break;
                                    default :
                                        $warna = 'red';
                                        break;
                                }
?>
                                <tr>
                                    <td>
                                        <a class="link_tabel" href="<?php echo site_url().'Pemasok/Buka_GrafikNilaiPemasok?no_pemasok='.$data->NoPemasok.'&nama_pemasok='.$data->NamaPemasok; ?>">
<?php
                                            echo $data->NoPemasok.' - '.$data->NamaPemasok;
?>
                                        </a>
                                    </td>
                                       
                                    <td class="text-center">
<?php
                                        echo number_format($data->Profit, 1, ',', '.').'%';
?>
                                    </td>
                                       
                                    <td class="text-center">
<?php
                                        echo number_format($data->SHVSPA, 1, ',', '.').'%';
?>
                                    </td>
                                       
                                    <td class="text-center">
<?php
                                        echo number_format($data->Terpenuhi, 1, ',', '.').'%';
?>
                                    </td>
                                       
                                    <td class="text-center">
                                        <span class="label bg-<?php echo $warna; ?>">
<?php
                                            echo number_format($data->Nilai, 0);
?>
                                        </span>
                                    </td>
                                       
                                    <td class="text-center">
                                        <span class="label bg-<?php echo $warna; ?>">
<?php
                                            echo $data->Predikat;
?>
                                        </span>
                                    </td>
                                </tr>
<?php
                            }
?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>