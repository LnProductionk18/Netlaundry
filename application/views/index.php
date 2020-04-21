<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <title><?php echo $title ?></title>
 <style type="text/css">
 body {
 background-color: green;
 font-family: Arial;
 }
 main {
 width: 80%;
 padding: 20px;
 background-color: white;
 min-height: 300px;
 border-radius: 5px;
 margin: 30px auto;
 }
 table {
 border-top: solid thin #000;
 border-collapse: collapse;
 }
 th, td {
 border-top: border-top: solid thin #000;
 padding: 6px 12px;
 }
 </style>
</head>

<body>
 <main>
 <h1>Laporan Excel</h1>
 <p><a href="<?php echo base_url('index.php/cetak/export_excel') ?>">Export ke Excel</a></p>
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
 <?php $i=1; foreach($user as $sa) { ?>
 <tr>
 <td><?php echo $i; ?></td>
 <td><?php echo $sa->id; ?></td>
 <td><?php echo $sa->nama_pel; ?></td>
 <td><?php echo $sa->notel_pel; ?></td>
 <td><?php echo $sa->tgl_masuk; ?></td>
 <td><?php echo $sa->tgl_keluar; ?></td>
 <td><?php echo $sa->des_baju; ?></td>
 <td><?php echo $sa->des_paket; ?></td>
 <td><?php echo $sa->harga ;?></td>
 <td><?php echo $sa->berat; ?></td>
 <td><?php echo $sa->tot_bayar; ?></td>
 <td><?php echo $sa->des_bayar; ?></td>
 <td><?php echo $sa->pengambilan ;?></td>
 </tr>
 <?php $i++; } ?>
 </tbody>
 </table>
 </main>
</body>
</html>