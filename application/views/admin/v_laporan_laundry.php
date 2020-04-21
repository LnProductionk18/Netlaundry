<?php 


header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=$title.xls");

header("Pragma: no-cache");

header("Expires: 0");


?>


<table border="1" width="100%">
    <thead>
        <tr>
            <th>No.</th>
            <td>Kode Pelanggan</td>
            <td>Nama Pelanggan</td>
            <td>No Telp.Pelanggan</td>
            <td>Tanggal Masuk</td>
            <td>Tanggal Keluar</td>
            <td>Status Cucian</td>
            <td>Paket</td>
            <td>harga</td>
            <td>Berat(Kg)</td>
            <td>Total Bayar</td>
            <td>Status Pembayaran</td>
            <td>Pengambilan</td>
        </tr>
    </thead>
    <tbody>
        <?php $no=1; foreach ($print as $go) {?>
        <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $go->$id;?></td>
            <td><?php echo $go->$nama_pel;?></td>
            <td><?php echo $go->$notel_pel;?></td>
            <td><?php echo $go->$tgl_masuk;?></td>
            <td><?php echo $go->$tgl_keluar;?></td>
            <td><?php echo $go->$des_baju;?></td>
            <td><?php echo $go->$des_paket;?></td>
            <td><?php echo $go->$harga;?></td>
            <td><?php echo $go->$berat;?></td>
            <td><?php echo $go->$tot_bayar;?></td>
            <td><?php echo $go->$des_bayar;?></td>
            <td><?php echo $go->$pengambilan;?></td>
        </tr>
        <?php $no++;} ?>
    </tbody>
</table>