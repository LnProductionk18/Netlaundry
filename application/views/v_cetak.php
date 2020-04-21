<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=$title.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>

<table border="1" width="100%">

<thead>

<tr>

<th>No</th>
 <th>Kode Pelanggan</th>
 <th>Nama Pelangan</th>
 <th>Notel</th>
 <th>tgl masuk</th>
  <th>tgl keluar</th>
    <th>status cucian</th>
    <th>paket</th>
    <th>harga</th>
    <th>berat</th>
    <th>total bayar</th>
        <th>des bayar</th>
    <th>pengambilan</th>

 </tr>

</thead>

<tbody>

<?php $i=1; foreach ($user as $saa) { ?>

<tr>

 <td><?php echo $i; ?></td>
 <td><?php echo $saa->id; ?></td>
 <td><?php echo $saa->nama_pel; ?></td>
 <td><?php echo $saa->notel_pel; ?></td>
 <td><?php echo $saa->tgl_masuk; ?></td>
 <td><?php echo $saa->tgl_keluar; ?></td>
 <td><?php echo $saa->des_baju; ?></td>
 <td><?php echo $saa->des_paket; ?></td>
 <td><?php echo $saa->harga; ?></td>
 <td><?php echo $saa->berat ;?></td>
 <td><?php echo $saa->tot_bayar; ?></td>
 <td><?php echo $saa->des_bayar; ?></td>
 <td><?php echo $saa->pengambilan; ?></td>

 </tr>

<?php $i++; } ?>

</tbody>

</table>