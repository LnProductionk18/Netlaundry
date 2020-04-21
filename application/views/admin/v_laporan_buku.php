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
            <td>Kode pake</td>
            <td>Nama paket</td>
            <td>harga</td>
        </tr>
    </thead>
    <tbody>
        <?php $no=1; foreach ($user as $go) {?>
        <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $go->$id_paket;?></td>
            <td><?php echo $go->$des_paket;?></td>
            <td><?php echo $go->$harga;?></td>
        </tr>
        <?php $no++;} ?>
    </tbody>
</table>