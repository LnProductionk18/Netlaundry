<!DOCTYPE html>
<html>
<head>
	<title><?php echo $name; ?> | Admin Netlaundry</title>
	<link href="<?php echo base_url("bootstrap/css/bootstrap.min.css"); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url("bootstrap/css/mine.css"); ?>" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="<?php echo base_url("bootstrap/js/jquery-3.2.1.min.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("bootstrap/js/bootstrap.min.js"); ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href="<?php echo base_url();?>bootstrap/img/mesincuci.png" type="image/png" rel="icon">


<script src="<?php echo base_url().'bootstrap/js/jquery-2.2.4.min.js'?>"></script>
<script src="<?php echo base_url().'bootstrap/js/bootstrap.js'?>"></script>
<script src="<?php echo base_url().'bootstrap/js/jquery.dataTables.min.js'?>"></script>
<script src="<?php echo base_url().'bootstrap/js/moment.js'?>"></script>
<script>
    $(document).ready(function(){
        $('#mydata').DataTable();
    });
</script>

<script>
    $(document).ready(function(){
        $('#cucibrumasuk').DataTable();
    });
</script>

<script>
    $(document).ready(function(){
        $('#cuciprs').DataTable();
    });
</script>

<script>
    $(document).ready(function(){
        $('#cucidone').DataTable();
    });
</script>

<script>
    $(document).ready(function(){
        $('#sdhbyr').DataTable();
    });
</script>

<script>
    $(document).ready(function(){
        $('#blmbyr').DataTable();
    });
</script>
    
    <style type="text/css">
    	.bgg
		{
			background-image: url('<?php echo base_url();?>bootstrap/img/mesin1.jpg');
			background-size: cover;
			background-attachment: fixed;
			background-repeat: repeat;
			background-position: fixed;
		}
    </style>
</head>
<body class="bgg">
	<div class="">
		<nav class="navbar navbar-light nb">
		  <a class="navbar-brand" href="<?php echo site_url('admin/admin');?>"><img class="img" src="<?php echo base_url();?>bootstrap/img/mesincuci.png">&nbsp;Netlaundry - Kasir</a>
		  <a href=""></a>
		  <ul class="nav nav-pills">

		    <li class="nav-item dropdown">
		      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" style="color: white;">Kelola Data</a>
		      <div class="dropdown-menu" style="border-radius: 5px;">
		      	<a class="dropdown-item" href="<?php echo site_url('admin/admin');?>"><h5 style="color: black;"><center>Kasir</center></h5></a>
		        <a class="dropdown-item" href="<?php echo site_url('admin/admin/indexpaket');?>"><h5 style="color: black;"><center>Paket</center></h5></a>
		        <a class="dropdown-item" href="<?php echo site_url('admin/admin/indexstbaju');?>"><h5 style="color: black;"><center>Status Cucian</center></h5></a>
		        <a class="dropdown-item" href="<?php echo site_url('admin/admin/indexstbyr');?>"><h5 style="color: black;"><center>Status Pembayaran</center></h5></a>
		        <div role="separator" class="dropdown-divider"></div>
		        <p><center style="background-color: cyan;"></center></p>
		      </div>
		    </li>

		    <li class="nav-item dropdown">
		      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" style="color: white;">Cari Data Berdasarkan Status Cucian</a>
		      <div class="dropdown-menu" style="border-radius: 5px;">
		      	<a class="dropdown-item" href="" data-toggle="modal" data-target="#cucibarumasuk"><h5 style="color: black;"><center>Baru Masuk</center></h5></a>
		        <a class="dropdown-item" href="" data-toggle="modal" data-target="#cuciproses"><h5 style="color: black;"><center>Dalam Proses Pencucian</center></h5></a>
		        <a class="dropdown-item" href="" data-toggle="modal" data-target="#cuciselesai"><h5 style="color: black;"><center>Dapat Diambil</center></h5></a>
		        <div role="separator" class="dropdown-divider"></div>
		        <p><center style="background-color: cyan;"></center></p>
		      </div>
		    </li>

		    <li class="nav-item dropdown">
		      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" style="color: white;">Cari Data Berdasarkan Status Pembayaran</a>
		      <div class="dropdown-menu" style="border-radius: 5px;">
                <a class="dropdown-item" href="" data-toggle="modal" data-target="#ngutang"><h5 style="color: black;"><center>Belum Membayar</center></h5></a>
		        <a class="dropdown-item" href="" data-toggle="modal" data-target="#bayar"><h5 style="color: black;"><center>Sudah Membayar</center></h5></a>
		        <div role="separator" class="dropdown-divider"></div>
		        <p><center style="background-color: cyan;"></center></p>
		      </div>
		    </li>

		    <li class="nav-item">
		      <a class="nav-link" href="<?php echo site_url('admin/admin/indexakunptgs'); ?>" style="color: white;">Daftar Akun</a>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link" href="<?php echo site_url('admin/admin/logout'); ?>" style="color: white;">Logout</a>
		    </li>
		    <li>
		    	<a class="navbar-brand " style="color: white;" href="">Hallo <b><u><?php echo $name; ?>&nbsp;!</u></b></a>
		    </li>
		  </ul>
		</nav>
	</div>

	<div class="divjumbo1">
	<!--<?php #$this->load->view('menu');?> Include menu-->
		<div class="container-fluid">
			<div class="con">
    			<div class="show">
					<h3>
						<center><b><h2><u style="color: white;">Data Pelanggan Laundry</u></h2></b></center>
						<div class="pull-right">
				            <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal_add_new"> 
						      <span class="glyphicon glyphicon-plus"></span> Tambah Data Baru
				            </a>
				        </div>		
					</h3>
					<div class=""style=" color: white;" >

						<table border="2" class="table table-striped" id="mydata" style="color: white;">
							<thead bgcolor="#145374" ><!--jangan lupa ganti warna nya-->
								<tr>
									<td align="center">No.</td>
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
								    <td align="center">Aksi</td>
								</tr>
							</thead>
							<tbody>
								<?php
									$no=0;
									foreach($kasir->result_array() as $i):
										$no++;
										$id=$i['id'];
										$nama_pel=$i['nama_pel'];
					                    $notel_pel=$i['notel_pel'];
					                    $tgl_masuk=$i['tgl_masuk'];
					                    $tgl_keluar=$i['tgl_keluar'];
					                    $des_baju=$i['des_baju'];
					                    $des_paket=$i['des_paket'];
					                    $harga=$i['harga'];
					                    $berat=$i['berat'];
					                    $tot_bayar=$i['tot_bayar'];
					                    $des_bayar=$i['des_bayar'];
					                    $pengambilan=$i['pengambilan'];
								?>
								<tr>
									<td align="center"><?php echo $no;?></td>
									<td><?php echo $id;?></td>
									<td><?php echo $nama_pel;?></td>
									<td><?php echo $notel_pel;?></td>
					                <td><?php echo $tgl_masuk;?></td>
					                <td><?php echo $tgl_keluar;?></td>
					                <td><?php echo $des_baju;?></td>
					                <td><?php echo $des_paket;?></td>
					                <td><?php echo $harga;?></td>
					                <td><?php echo $berat;?></td>
					                <td><?php echo $tot_bayar;?></td>
					                <td><?php echo $des_bayar;?></td>
					                <td><?php echo $pengambilan;?></td>
					                <td align="center">
                                        <a class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal_edit<?php echo $id;?>"> 
									       <span class="glyphicon glyphicon-edit"></span> Edit </a><br><br>
								        <a class="btn btn-sm btn-sm btn-danger" data-toggle="modal" data-target="#modal_hapus<?php echo $id;?>"> 
									       <span class="glyphicon glyphicon-erase"></span> Hapus</a><br><br>
									</td>
								</tr>
								<?php endforeach;?>
							</tbody>
						</table>
					</div>
				   <a style="color: black; border-radius: 50px; border-color: black; border-width: 2px;" class="btn btn-success" href="<?php echo base_url('index.php/cetak/export') ?>">
				        <img src="<?php echo base_url().'bootstrap/img/excel.png'; ?>" width="20" height="20" alt="">
				        Export File Excel
				    </a>
    			</div>
				<br>
				<?php #$this->load->view('footer');?> <!--Include footer-->
			</div>
		</div>
	</div>

	 <!-- ============ MODAL ADD Data pelanggan =============== -->
        <div class="modal fade" id="modal_add_new" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header" align="center">
                <h3 class="modal-title" id="myModalLabel" >Tambah Data Pelanggan</h3>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/admin/admin/simpan_transaksi'?>">
                <div class="modal-body">

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Kode Pelanggan</label>
                        <div class="col-xs-8">
                            <input name="id" class="form-control" type="text" placeholder="Kode Pelanggan..." required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama Pelanggan</label>
                        <div class="col-xs-8">
                            <input name="nama_pel" class="form-control" type="text" placeholder="Nama Pelanggan..." required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >No Telp.Pelanggan</label>
                        <div class="col-xs-8">
                            <input name="notel_pel" class="form-control" type="text" placeholder="No Tlp..." required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Tanggal Masuk</label>
                        <div class="col-xs-8">
                            <input name="tgl_masuk" class="form-control" type="date" placeholder="Tgl Masuk..." required>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-xs-3" >Tangal Keluar</label>
                        <div class="col-xs-8">
                            <input name="tgl_keluar" class="form-control" type="date" placeholder="Tgl Keluar..." required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3" bgcolor="blue">Status Cucian</label>
                        <div class="col-md-8">
                            <select name="des_baju" id="des_baju" class="form-control" required>
                                <option value="">Pilih Status</option>
                                <?php foreach($sttsbju->result() as $row):?>
                                    <option value="<?php echo $row->des_baju;?>"><?php echo $row->id_status_baju;?>  |  <?php echo $row->des_baju;?></option>
                                <?php endforeach;?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3" bgcolor="blue">Paket Cucian</label>
                        <div class="col-md-8">
                            <select name="des_paket" id="des_paket" class="form-control" required>
                                <option value="">Pilih Paket</option>
                                <?php foreach($paket->result() as $row):?>
                                    <option value="<?php echo $row->des_paket;?>"><?php echo $row->des_paket;?>  |  <?php echo $row->harga;?></option>
                                <?php endforeach;?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Berat(Kg)</label>
                        <div class="col-xs-8">
                            <input name="berat" class="form-control" type="text" placeholder="Berat Cucian..." required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Total Bayar</label>
                        <div class="col-xs-8">
                            <input name="tot_bayar" class="form-control" type="text" placeholder="Total Bayar..." required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3" bgcolor="blue">Status Pembayaran</label>
                        <div class="col-md-8">
                            <select name="des_bayar" id="des_bayar" class="form-control" required>
                                <option value="">Pilih Status</option>
                                <?php foreach($sttsbyr->result() as $row):?>
                                    <option value="<?php echo $row->des_bayar;?>"><?php echo $row->des_bayar;?></option>
                                <?php endforeach;?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Pengambilan</label>
                        <div class="col-xs-8">
                            <select class="form-control" name="pengambilan" required>
                                <option>Belum_diambil</option>
                                <option>Sudah_diambil</option>
                            </select><br>
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-info">Simpan</button>
                </div>
            </form>
            </div>
            </div>
        </div>

       <!-- ============ MODAL EDIT pelanggan =============== -->
    <?php 
        foreach($kasir->result_array() as $i):
        $id=$i['id'];
        $nama_pel=$i['nama_pel'];
        $notel_pel=$i['notel_pel'];
        $tgl_masuk=$i['tgl_masuk'];
        $tgl_keluar=$i['tgl_keluar'];
        $des_baju=$i['des_baju'];
        $des_paket=$i['des_paket'];
        $harga=$i['harga'];
        $berat=$i['berat'];
        $tot_bayar=$i['tot_bayar'];
        $des_bayar=$i['des_bayar'];
        $pengambilan=$i['pengambilan'];
    ?>
        <div class="modal fade" id="modal_edit<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header" align="center">
                <h3 class="modal-title" id="myModalLabel">Edit Data Buku</h3>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/admin/admin/edit_transaksi'?>">
                <div class="modal-body">

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Kode Pelangan</label>
                        <div class="col-xs-8">
                            <input name="id" value="<?php echo $id;?>" class="form-control" type="text" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama Pelanggan</label>
                        <div class="col-xs-8">
                            <input name="nama_pel" value="<?php echo $nama_pel;?>" class="form-control" type="text" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >No Tpl.Pelanggan</label>
                        <div class="col-xs-8">
                            <input name="notel_pel" value="<?php echo $notel_pel;?>" class="form-control" type="text" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Tanggal Masuk</label>
                        <div class="col-xs-8">
                            <input name="tgl_masuk" value="<?php echo $tgl_masuk;?>" class="form-control" type="date" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Tanggal Keluar</label>
                        <div class="col-xs-8">
                            <input name="tgl_keluar" value="<?php echo $tgl_keluar;?>" class="form-control" type="date" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Status Cucian Seblumnya</label>
                        <div class="col-xs-8">
                            <input name="" value="<?php echo $des_baju;?>" class="form-control" type="txt" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3" bgcolor="blue">Status Cucian</label>
                        <div class="col-md-8">
                            <select name="des_baju" id="des_baju" class="form-control" required>
                                <option value="">Pilih Status</option>
                                <?php foreach($sttsbju->result() as $row):?>
                                    <option value="<?php echo $row->des_baju;?>"><?php echo $row->id_status_baju;?>  |  <?php echo $row->des_baju;?></option>
                                <?php endforeach;?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Harga Paket Sebelumnya</label>
                        <div class="col-xs-8">
                            <input name="harga" value="<?php echo $harga;?>" class="form-control" type="text" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3" bgcolor="blue">Paket Cucian</label>
                        <div class="col-md-8">
                            <select name="des_paket" id="des_paket" class="form-control">
                                <option value="">Pilih Paket</option>
                                <?php foreach($paket->result() as $row):?>
                                    <option value="<?php echo $row->des_paket;?>"><?php echo $row->des_paket;?>  |  <?php echo $row->harga;?></option>
                                <?php endforeach;?>  
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Berat</label>
                        <div class="col-xs-8">
                            <input name="berat" value="<?php echo $berat;?>" class="form-control" type="text" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Total Bayar</label>
                        <div class="col-xs-8">
                            <input name="tot_bayar" value="<?php echo $tot_bayar;?>" class="form-control" type="text" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Status Pembaran Sebelumnya</label>
                        <div class="col-xs-8">
                            <input name="des_bayar" value="<?php echo $des_bayar;?>" class="form-control" type="text" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3" bgcolor="blue">Status Pembayaran</label>
                        <div class="col-md-8">
                            <select name="des_bayar" id="des_bayar" class="form-control">
                                <option value="">Pilih Status</option>
                                <?php foreach($sttsbyr->result() as $row):?>
                                    <option value="<?php echo $row->des_bayar;?>"><?php echo $row->des_bayar;?></option>
                                <?php endforeach;?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Pengambilan</label>
                        <div class="col-xs-8">
                            <select class="form-control" name="pengambilan" required>
                                <option>Belum_diambil</option>
                                <option>Sudah_diambil</option>
                            </select><br>
                        </div>
                    </div>


                </div>

                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-info">Update</button>
                </div>
            </form>
            </div>
            </div>
        </div>

    <?php endforeach;?>
    <!--END MODAL edit pelanggan-->

    <!--MODAL HAPUS-->
	 <?php 
        foreach($kasir->result_array() as $i):
            $id=$i['id'];
			$nama_pel=$i['nama_pel'];
            $des_baju=$i['des_baju'];
            $des_paket=$i['des_paket'];
            $tot_bayar=$i['tot_bayar'];
            $des_bayar=$i['des_bayar'];
            $pengambilan=$i['pengambilan'];
    ?>
        <div class="modal fade" id="modal_hapus<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header" align="center">
                <h3 class="modal-title" id="myModalLabel">Hapus Data</h3>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/admin/admin/hapus_transaksi'?>">
                <div class="modal-body">

                    <div class="form-group">
						<div class="alert alert-warning" align="center"><h3>Apakah Anda yakin <br> ingin menghapus data ini ???</h3></div>
						<br>
                        <label class="control-label col-xs-3" >Kode Pelangan</label>
                        <div class="col-xs-8">
                            <input name="id" value="<?php echo $id;?>" class="form-control" type="text" readonly>
                        </div>
                    </div>
					
					<div class="form-group">
                        <label class="control-label col-xs-3" >Nama Pelanggan</label>
                        <div class="col-xs-8">
                            <input name="nama_pel" value="<?php echo $nama_pel;?>" class="form-control" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Status Cucian</label>
                        <div class="col-xs-8">
                            <input name="des_baju" value="<?php echo $des_baju;?>" class="form-control" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Paket Tepilih</label>
                        <div class="col-xs-8">
                            <input name="des_paket" value="<?php echo $des_paket;?>" class="form-control" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Total Pembayaran</label>
                        <div class="col-xs-8">
                            <input name="tot_bayar" value="<?php echo $tot_bayar;?>" class="form-control" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Status Pembayaran</label>
                        <div class="col-xs-8">
                            <input name="des_bayar" value="<?php echo $des_bayar;?>" class="form-control" readonly>
                        </div>
                    </div>

                     <div class="form-group">
                        <label class="control-label col-xs-3" >Pengambilan</label>
                        <div class="col-xs-8">
                            <select class="form-control" name="pengambilan" required>
                                <option>Belum_diambil</option>
                                <option>Sudah_diambil</option>
                            </select><br>
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-warning">Hapus</button>
                </div>
            </form>
            </div>
            </div>
        </div>
	<?php endforeach;?>
    <!--END MODAL HAPUS-->


    <div id="printo">
        
    </div>
<!-- MOdal Kosong -->
<div class="modal fade" id="printdata" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" align="center">
                <h3 class="modal-title" id="myModalLabel" >Print Data Pelanggan</h3>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
            </div>
            <form class="" method="" action="<?php #echo base_url().'index.php/admin/admin/simpan_transaksi'?>">
                <div class="modal-body">

                  

                </div>

                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-info">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- MOdal Kososng -->


    <!-- Modal cuci baru masuk -->
    <div class="modal fade"   style="background-repeat: no-repeat; background-color: rgba(0,0,0,0.9); color: white; " 
    	id="cucibarumasuk" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    	<!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" style="color: red;">&times;</span>
        </button>-->
        <a type="button" pull-right class="btn btn-secondary" href="<?php echo site_url('admin/admin');?>">&times;</a>
    	<center><label><h5 class="modal-title" id="exampleModalLabel">Data Cucian Pelanggan Baru masuk</h5></label></center>
    	<hr style="background-color: white;">
    	<table class="table table-bordered table-striped"  id="cucibrumasuk">
    		<thead bgcolor="#145374" ><!--jangan lupa ganti warna nya-->
				<tr>
					<td align="center">No.</td>
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
				<?php
					$no=0;
					foreach($show_cucibarumasuk->result_array() as $i):
						$no++;
						$id=$i['id'];
						$nama_pel=$i['nama_pel'];
	                    $notel_pel=$i['notel_pel'];
	                    $tgl_masuk=$i['tgl_masuk'];
	                    $tgl_keluar=$i['tgl_keluar'];
	                    $des_baju=$i['des_baju'];
	                    $des_paket=$i['des_paket'];
	                    $harga=$i['harga'];
	                    $berat=$i['berat'];
	                    $tot_bayar=$i['tot_bayar'];
	                    $des_bayar=$i['des_bayar'];
	                    $pengambilan=$i['pengambilan'];
				?>
				<tr>
					<td align="center"><?php echo $no;?></td>
					<td><?php echo $id;?></td>
					<td><?php echo $nama_pel;?></td>
					<td><?php echo $notel_pel;?></td>
	                <td><?php echo $tgl_masuk;?></td>
	                <td><?php echo $tgl_keluar;?></td>
	                <td bgcolor="red"><?php echo $des_baju;?></td>
	                <td><?php echo $des_paket;?></td>
	                <td><?php echo $harga;?></td>
	                <td><?php echo $berat;?></td>
	                <td><?php echo $tot_bayar;?></td>
	                <td><?php echo $des_bayar;?></td>
	                <td><?php echo $pengambilan;?></td>
				</tr>
				<?php endforeach;?>
			</tbody>
    	</table>
                
        <div class="modal-dialog" style="background-size: 1000px;" role="document">
            <div class="modal-content"  style="background-size: 300px; /*background-color: rgba(0,0,51,0.8);*/ background-color: transparent;border:none; color: white;">
          
                	
                <div class="modal-footer">
                    <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
                     <a type="button" class="btn btn-secondary" href="<?php echo site_url('admin/admin');?>">Close</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal cuci baru masuk -->


    <!-- Modal cuci dalam proses cuci -->
    <div class="modal fade"   style="background-repeat: no-repeat; background-color: rgba(0,0,0,0.9); color: white; " 
    	id="cuciproses" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    	<!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" style="color: red;">&times;</span>
        </button>-->
        <a type="button" pull-right class="btn btn-secondary" href="<?php echo site_url('admin/admin');?>">&times;</a>
    	<center><label><h5 class="modal-title" id="exampleModalLabel">Data Cucian Pelanggan Dalam Proses</h5></label></center>
    	<hr style="background-color: white;">
    	<table class="table table-bordered table-striped"  id="cuciprs">
    		<thead bgcolor="#145374" ><!--jangan lupa ganti warna nya-->
				<tr>
					<td align="center">No.</td>
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
				<?php
					$no=0;
					foreach($show_cucidalamproses->result_array() as $i):
						$no++;
						$id=$i['id'];
						$nama_pel=$i['nama_pel'];
	                    $notel_pel=$i['notel_pel'];
	                    $tgl_masuk=$i['tgl_masuk'];
	                    $tgl_keluar=$i['tgl_keluar'];
	                    $des_baju=$i['des_baju'];
	                    $des_paket=$i['des_paket'];
	                    $harga=$i['harga'];
	                    $berat=$i['berat'];
	                    $tot_bayar=$i['tot_bayar'];
	                    $des_bayar=$i['des_bayar'];
	                    $pengambilan=$i['pengambilan'];
				?>
				<tr>
					<td align="center"><?php echo $no;?></td>
					<td><?php echo $id;?></td>
					<td><?php echo $nama_pel;?></td>
					<td><?php echo $notel_pel;?></td>
	                <td><?php echo $tgl_masuk;?></td>
	                <td><?php echo $tgl_keluar;?></td>
	                <td bgcolor="orange"><?php echo $des_baju;?></td>
	                <td><?php echo $des_paket;?></td>
	                <td><?php echo $harga;?></td>
	                <td><?php echo $berat;?></td>
	                <td><?php echo $tot_bayar;?></td>
	                <td><?php echo $des_bayar;?></td>
	                <td><?php echo $pengambilan;?></td>
				</tr>
				<?php endforeach;?>
			</tbody>
    	</table>
                
        <div class="modal-dialog" style="background-size: 1000px;" role="document">
            <div class="modal-content"  style="background-size: 300px; /*background-color: rgba(0,0,51,0.8);*/ background-color: transparent;border:none; color: white;">
          
                	
                <div class="modal-footer">
                    <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
                    <a type="button" class="btn btn-secondary" href="<?php echo site_url('admin/admin');?>">Close</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal cuci dalam proses cuci -->



      <!-- Modal cuci sudah selesai -->
    <div class="modal fade"   style="background-repeat: no-repeat; background-color: rgba(0,0,0,0.9); color: white; " 
    	id="cuciselesai" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    	<!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" style="color: red;">&times;</span>
        </button>-->
        <a type="button" pull-right class="btn btn-secondary" href="<?php echo site_url('admin/admin');?>">&times;</a>
    	<center><label><h5 class="modal-title" id="exampleModalLabel">Data Cucian Pelanggan Selesai</h5></label></center>
    	<hr style="background-color: white;">
    	<table class="table table-bordered table-striped"  id="cucidone">
    		<thead bgcolor="#145374" ><!--jangan lupa ganti warna nya-->
				<tr>
					<td align="center">No.</td>
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
				<?php
					$no=0;
					foreach($show_cuciselesai->result_array() as $i):
						$no++;
						$id=$i['id'];
						$nama_pel=$i['nama_pel'];
	                    $notel_pel=$i['notel_pel'];
	                    $tgl_masuk=$i['tgl_masuk'];
	                    $tgl_keluar=$i['tgl_keluar'];
	                    $des_baju=$i['des_baju'];
	                    $des_paket=$i['des_paket'];
	                    $harga=$i['harga'];
	                    $berat=$i['berat'];
	                    $tot_bayar=$i['tot_bayar'];
	                    $des_bayar=$i['des_bayar'];
	                    $pengambilan=$i['pengambilan'];
				?>
				<tr>
					<td align="center"><?php echo $no;?></td>
					<td><?php echo $id;?></td>
					<td><?php echo $nama_pel;?></td>
					<td><?php echo $notel_pel;?></td>
	                <td><?php echo $tgl_masuk;?></td>
	                <td><?php echo $tgl_keluar;?></td>
	                <td bgcolor="green"><?php echo $des_baju;?></td>
	                <td><?php echo $des_paket;?></td>
	                <td><?php echo $harga;?></td>
	                <td><?php echo $berat;?></td>
	                <td><?php echo $tot_bayar;?></td>
	                <td><?php echo $des_bayar;?></td>
	                <td><?php echo $pengambilan;?></td>
				</tr>
				<?php endforeach;?>
			</tbody>
    	</table>
                
        <div class="modal-dialog" style="background-size: 1000px;" role="document">
            <div class="modal-content"  style="background-size: 300px; /*background-color: rgba(0,0,51,0.8);*/ background-color: transparent;border:none; color: white;">
          
                	
                <div class="modal-footer">
                    <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
                    <a type="button" class="btn btn-secondary" href="<?php echo site_url('admin/admin');?>">Close</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal cuci sudah selesai -->



     <!-- Modal sudah membayar -->
    <div class="modal fade"   style="background-repeat: no-repeat; background-color: rgba(0,0,0,0.9); color: white; " 
    	id="bayar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    	<!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" style="color: red;">&times;</span>
        </button>-->
        <a type="button" pull-right class="btn btn-secondary" href="<?php echo site_url('admin/admin');?>">&times;</a>
    	<center><label><h5 class="modal-title" id="exampleModalLabel">Data Pelanggan Lunas</h5></label></center>
    	<hr style="background-color: white;">
    	<table class="table table-bordered table-striped"  id="sdhbyr">
    		<thead bgcolor="#145374" ><!--jangan lupa ganti warna nya-->
				<tr>
					<td align="center">No.</td>
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
				<?php
					$no=0;
					foreach($show_sudahbayar->result_array() as $i):
						$no++;
						$id=$i['id'];
						$nama_pel=$i['nama_pel'];
	                    $notel_pel=$i['notel_pel'];
	                    $tgl_masuk=$i['tgl_masuk'];
	                    $tgl_keluar=$i['tgl_keluar'];
	                    $des_baju=$i['des_baju'];
	                    $des_paket=$i['des_paket'];
	                    $harga=$i['harga'];
	                    $berat=$i['berat'];
	                    $tot_bayar=$i['tot_bayar'];
	                    $des_bayar=$i['des_bayar'];
	                    $pengambilan=$i['pengambilan'];
				?>
				<tr>
					<td align="center"><?php echo $no;?></td>
					<td><?php echo $id;?></td>
					<td><?php echo $nama_pel;?></td>
					<td><?php echo $notel_pel;?></td>
	                <td><?php echo $tgl_masuk;?></td>
	                <td><?php echo $tgl_keluar;?></td>
	                <td><?php echo $des_baju;?></td>
	                <td><?php echo $des_paket;?></td>
	                <td><?php echo $harga;?></td>
	                <td><?php echo $berat;?></td>
	                <td><?php echo $tot_bayar;?></td>
	                <td bgcolor="green"><?php echo $des_bayar;?></td>
	                <td><?php echo $pengambilan;?></td>
				</tr>
				<?php endforeach;?>
			</tbody>
    	</table>
                
        <div class="modal-dialog" style="background-size: 1000px;" role="document">
            <div class="modal-content"  style="background-size: 300px; /*background-color: rgba(0,0,51,0.8);*/ background-color: transparent;border:none; color: white;">
          
                	
                <div class="modal-footer">
                    <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
                    <a type="button" class="btn btn-secondary" href="<?php echo site_url('admin/admin');?>">Close</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal sudah membayar -->

    <!-- Modal belum membayar -->
    <div class="modal fade"   style="background-repeat: no-repeat; background-color: rgba(0,0,0,0.9); color: white; " 
    	id="ngutang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    	<!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" style="color: red;">&times;</span>
        </button>-->
        <a type="button" pull-right class="btn btn-secondary" href="<?php echo site_url('admin/admin');?>">&times;</a>
    	<center><label><h5 class="modal-title" id="exampleModalLabel">Data Pelanggan Belum Membayar</h5></label></center>
    	<hr style="background-color: white;">
    	<table class="table table-bordered table-striped"  id="blmbyr">
    		<thead bgcolor="#145374" ><!--jangan lupa ganti warna nya-->
				<tr>
					<td align="center">No.</td>
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
				<?php
					$no=0;
					foreach($show_belumbayar->result_array() as $i):
						$no++;
						$id=$i['id'];
						$nama_pel=$i['nama_pel'];
	                    $notel_pel=$i['notel_pel'];
	                    $tgl_masuk=$i['tgl_masuk'];
	                    $tgl_keluar=$i['tgl_keluar'];
	                    $des_baju=$i['des_baju'];
	                    $des_paket=$i['des_paket'];
	                    $harga=$i['harga'];
	                    $berat=$i['berat'];
	                    $tot_bayar=$i['tot_bayar'];
	                    $des_bayar=$i['des_bayar'];
	                    $pengambilan=$i['pengambilan'];
				?>
				<tr>
					<td align="center"><?php echo $no;?></td>
					<td><?php echo $id;?></td>
					<td><?php echo $nama_pel;?></td>
					<td><?php echo $notel_pel;?></td>
	                <td><?php echo $tgl_masuk;?></td>
	                <td><?php echo $tgl_keluar;?></td>
	                <td><?php echo $des_baju;?></td>
	                <td><?php echo $des_paket;?></td>
	                <td><?php echo $harga;?></td>
	                <td><?php echo $berat;?></td>
	                <td><?php echo $tot_bayar;?></td>
	                <td bgcolor="red"><?php echo $des_bayar;?></td>
	                <td><?php echo $pengambilan;?></td>
				</tr>
				<?php endforeach;?>
			</tbody>
    	</table>
                
        <div class="modal-dialog" style="background-size: 1000px;" role="document">
            <div class="modal-content"  style="background-size: 300px; /*background-color: rgba(0,0,51,0.8);*/ background-color: transparent;border:none; color: white;">
          
                	
                <div class="modal-footer">
                    <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
                    <a type="button" class="btn btn-secondary" href="<?php echo site_url('admin/admin');?>">Close</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal belum membayar -->



	<div class="" style="background-color: #145374;">
      	<div class="wrapper">
	        <div class="row">
	          	<div class="col-md-12">
		            <center style="margin-bottom: 10px;">
		              <p><h4 style="color: white;">Follow US</h4></p>
		              <a href="#"><img src="<?php echo base_url();?>bootstrap/img/icon/IG.png" style="width: 30px;height: 30px;"></a>
		              <a href="#"><img src="<?php echo base_url();?>bootstrap/img/icon/fb.png" style="width: 30px;height: 30px;"></a>
		              <a href="#"><img src="<?php echo base_url();?>bootstrap/img/icon/twiter.png" style="width: 30px;height: 30px;"></a>
		              <a href="#"><img src="<?php echo base_url();?>bootstrap/img/icon/gmail.png" style="width: 30px;height: 30px;"></a>
		              <a href="#"><img src="<?php echo base_url();?>bootstrap/img/icon/wa.png" style="width: 30px;height: 30px;"></a>
		            </center>
	          	</div>
	        </div>
      	</div>
		<footer>
		  <div class="container">
		      <hr style="border-color: black;">
		       <marquee align="center" direction="left" scrollamount="8" 
		        behavior="alternate" style="color: white;"><u><i>Copyright  &copy; 2019 netlaundry</i></u></marquee>
		  </div>
		</footer>
    </div>

</body>
</html>
