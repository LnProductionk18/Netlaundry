<!DOCTYPE html>
<html>
<head>
	 <title><?php echo $name; ?> | User Netlaundry</title>
	<link href="<?php echo base_url("bootstrap/css/bootstrap.min.css"); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url("bootstrap/css/mine.css"); ?>" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="<?php echo base_url("bootstrap/js/jquery-3.2.1.min.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("bootstrap/js/bootstrap.min.js"); ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href="<?php echo base_url();?>bootstrap/img/mesincuci.png" type="image/png" rel="icon">
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
		  <a class="navbar-brand" href="<?php echo site_url('users/users');?>"><img class="img" src="<?php echo base_url();?>bootstrap/img/mesincuci.png">&nbsp;Netlaundry - User</a>
		  <ul class="nav nav-pills">
		    <li class="nav-item dropdown">
		      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" style="color: white;">Sortir Pelanggan</a>
		      <div class="dropdown-menu" style="border-radius: 25px;">
		        <a class="dropdown-item" href="" data-toggle="modal" data-target="#cucibarumasuk"><h5 style="color: black;"><center>Cucian Baru Masuk</center></h5></a>
		        <a class="dropdown-item" href="" data-toggle="modal" data-target="#cuciproses"><h5 style="color: black;"><center>Cucian Dalam Proses</center></h5></a>
		        <a class="dropdown-item" href="" data-toggle="modal" data-target="#cuciselesai"><h5 style="color: black;"><center>Cucian Siap Diambil</center></h5></a>
		        <div role="separator" class="dropdown-divider"></div>
		        <p><center style="background-color: cyan;">Klik Menu</center></p>
		      </div>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link" href="<?php echo site_url('users/users/logout'); ?>" style="color: white;">Logout</a>
		    </li>
		    <li>
		    	<a class="navbar-brand " style="color: white;" href="">Hallo <b><u><?php echo $name; ?>&nbsp;!</u></b></a>
		    </li>
		  </ul>
		</nav>
	</div>




	<div class="row"><!-- Area A1-->
	    <div class="col-md-12"><!-- Area A1-->
	        <div class="jumbotron divjumbo1">
	          	<center><p><i><h1><b style="color: white;">Selamat Datang di Page User Netlaundry</b></h1></i></p></center>
	          	<hr style="background-color: black;">
	          	<center><p><i><h5><b style="color: white;">View Seputar Netlaundry</b></h5></i></p></center>
	          	<br>

	          	<div class="container">
		          	<div class="row"><!-- Area Card 3 teratas-->

		              <div class="col-md-3"><!-- Area Card teratas kiri-->
		                <div class="card kard">
		                  <div class="card-body">
		                    <h5 class="card-title"><b>Mesin Cuci</b></h5>
		                    <hr style="background-color: black;">
		                    <p>Mesin yang kami pakai adalah mesin cuci LD</p>
		                    <p>1 Pelanggan, 1 Mesin Cuci</p>
		                    <img style="border-radius: 100px;" src="<?php echo base_url();?>bootstrap/img/mesincuci1.png">
		                  </div>
		                </div>
		              </div><!--akhir  Batas  Area Card teratas-->

		             <div style="color: white;">&nbsp;;&nbsp;;&nbsp;;&nbsp;;&nbsp;;&nbsp;;&nbsp;;&nbsp;;&nbsp;;&nbsp;</div>

		              <div class="col-md-3"><!-- Area Card tengah-->
		                <div class="card kard">
		                  <div class="card-body">
		                    <h5 class="card-title"><b>Mesin Lipat & Strika</b></h5>
		                    <hr style="background-color: black;">
		                    <p>Mesin lipat baju & strika otomatis</p>
		                    <p>1 Pelanggan, 1 Mesin Lipat</p>
		                    <img style="border-radius: 100px; width: 300px;height: 350px; margin-top: -10px;" src="<?php echo base_url();?>bootstrap/img/mesinlipat.png">
		                  </div>
		                </div>
		              </div><!--akhir  Batas  Area Card tengah-->

		              <div style="color: white;">&nbsp;;&nbsp;;&nbsp;;&nbsp;;&nbsp;;&nbsp;;&nbsp;;&nbsp;;&nbsp;;&nbsp;</div>

		              <div class="col-md-3"><!-- Area Card kanan -->
		                <div class="card kard">
		                  <div class="card-body">
		                    <h5 class="card-title"><b>Jemuran Baju</b></h5>
		                    <hr style="background-color: black;">
		                    <p>1 Pelanggan, 1 Jemuran(tergantung banyaknya cucian)</p>
		                    <img style="border-radius: 100px; width: 350px;height: 350px; margin-top: 15px;" src="<?php echo base_url();?>bootstrap/img/jenuran.png">
		                  </div>
		                </div>
		              </div><!--akhir  Batas  Area Card kanan-->
		            </div><!--akhir  Area Card 3 teratas-->
		        </div>
	        </div>
    	</div>
    </div>


     <!-- Modal cuci baru masuk -->
    <div class="modal fade"   style="background-repeat: no-repeat; background-color: rgba(0,0,0,0.9); color: white; " 
    	id="cucibarumasuk" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    	<!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" style="color: red;">&times;</span>
        </button>-->
        <a type="button" pull-right class="btn btn-secondary" href="<?php echo site_url('users/users');?>">&times;</a>
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
                     <a type="button" class="btn btn-secondary" href="<?php echo site_url('users/users');?>">Close</a>
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
        <a type="button" pull-right class="btn btn-secondary" href="<?php echo site_url('users/users');?>">&times;</a>
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
                    <a type="button" class="btn btn-secondary" href="<?php echo site_url('users/users');?>">Close</a>
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
        <a type="button" pull-right class="btn btn-secondary" href="<?php echo site_url('users/users');?>">&times;</a>
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
                    <a type="button" class="btn btn-secondary" href="<?php echo site_url('users/users');?>">Close</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal cuci sudah selesai -->
	

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

    <script src="<?php echo base_url().'bootstrap/js/jquery-2.2.4.min.js'?>"></script>
	<script src="<?php echo base_url().'bootstrap/js/bootstrap.js'?>"></script>
	<script src="<?php echo base_url().'bootstrap/js/jquery.dataTables.min.js'?>"></script>
	<script src="<?php echo base_url().'bootstrap/js/moment.js'?>"></script>
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
</body>
</html>