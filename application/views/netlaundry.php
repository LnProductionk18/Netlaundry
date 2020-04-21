<!DOCTYPE html>
<html>
<head>
	 <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
	 <meta charset="utf-8">
    <title>Netlaundry</title>
    <link href="<?php echo base_url("bootstrap/css/bootstrap.min.css"); ?>" rel="stylesheet" type="text/css">
     <link href="<?php echo base_url("bootstrap/css/mine.css"); ?>" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="<?php echo base_url("bootstrap/js/jquery-3.2.1.min.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("bootstrap/js/bootstrap.min.js"); ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href="<?php echo base_url();?>bootstrap/img/mesincuci.png" type="image/png" rel="icon">
    <style media="screen">

    html,body {
      height:100%;
    }
    </style>
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
		  <a class="navbar-brand" href="<?php echo site_url();?>"><img class="img" src="<?php echo base_url();?>bootstrap/img/mesincuci.png">&nbsp;Netlaundry</a>
		  <ul class="nav nav-pills">
		    <li class="nav-item dropdown">
		      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" style="color: white;">Paket</a>
		      <div class="dropdown-menu" style="border-radius: 25px;">
		        <a class="dropdown-item" href="" data-toggle="modal" data-target="#paket1"><h5 style="color: black;"><center>Paket 1</center></h5></a>
		        <a class="dropdown-item" href="" data-toggle="modal" data-target="#paket2"><h5 style="color: black;"><center>Paket 2</center></h5></a>
		        <a class="dropdown-item" href="" data-toggle="modal" data-target="#paket3"><h5 style="color: black;"><center>Paket 3</center></h5></a>
		        <div role="separator" class="dropdown-divider"></div>
		        <p><center style="background-color: cyan;">KLIK PAKET</center></p>
		      </div>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link" href="" data-toggle="modal" data-target="#aboutus" style="color: white;">About Us</a>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link" href="" data-toggle="modal" data-target="#login" style="color: white;">Login</a>
		    </li>
		  </ul>
		</nav>
	</div>


	<div class="row"><!-- Area A1-->
	    <div class="col-md-12"><!-- Area A1-->
	        <div class="jumbotron divjumbo1">
	          	<center><p><i><h1><b style="color: white;">Selamat Datang di Site Netlaundry</b></h1></i></p></center>
	          	<marquee align="center" direction="left" scrollamount="8" 
                behavior="alternate" style="color: white;">"Login Untuk Melihat Status Pakaian Anda"</marquee>
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




	<!-- Modal Paket 1 -->
	<div class="modal fade" style="background-repeat: no-repeat; background-size: cover; background-image: url('<?php echo base_url();?>bootstrap/img/mesin1.jpg'); " id="paket1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" style="" role="document">
	    <div class="modal-content" style=" background-color: rgba(0,0,51,0.8); color: red;">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel"><center>Paket 1</center></h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true" style="color: red;">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body" style="background-repeat:no-repeat;background-size: 100px; background-position: center; background-image: url('<?php echo base_url();?>bootstrap/img/bajubiru.png');">
	        <table class="table table-bordered table-striped">
					<thead style="color:white; background-color:rgba(17,17,17,0.8);">
						<tr>
							<!--<td align="center">No.</td>-->
							<td>Kode Paket</td>
							<td>Nama Paket</td>
							<td>Harga</td>

						</tr>
					</thead>
					<tbody style="color:white; background-color:rgba(17,17,17,0.8);">
						<?php
							#$no=0;
							foreach($paket1->result_array() as $i):
								#$no++;
								$id_paket=$i['id_paket'];
								$des_paket=$i['des_paket'];
			                    $harga=$i['harga'];
						?>
						<tr>
							<!--<td align="center"><?php #echo $no;?></td>-->
							<td><?php echo $id_paket;?></td>
							<td><?php echo $des_paket;?></td>
							<td><?php echo $harga;?></td>

						</tr>
						<?php endforeach;?>
					</tbody>
				</table>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- Modal Paket 1 -->

	<!-- Modal Paket 2 -->
	<div class="modal fade"  style="background-repeat: no-repeat; background-size: cover; background-image: url('<?php echo base_url();?>bootstrap/img/mesin1.jpg'); " id="paket2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content"  style="background-color: rgba(0,0,51,0.8); color: red;">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Paket 2</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true" style="color: red;">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body"  style="background-repeat:no-repeat;background-size: 100px; background-position: center; background-image: url('<?php echo base_url();?>bootstrap/img/strikapng1.png');">
	        	<table class="table table-bordered table-striped">
					<thead style="color:white; background-color:rgba(17,17,17,0.5);">
						<tr>
							<!--<td align="center">No.</td>-->
							<td>Kode Paket</td>
							<td>Nama Paket</td>
							<td>Harga</td>
						</tr>
					</thead>
					<tbody style="color:white; background-color:rgba(17,17,17,0.5);">
						<?php
							#$no=0;
							foreach($paket2->result_array() as $i):
								#$no++;
								$id_paket=$i['id_paket'];
								$des_paket=$i['des_paket'];
			                    $harga=$i['harga'];
						?>
						<tr>
							<!--<td align="center"><?php #echo $no;?></td>-->
							<td><?php echo $id_paket;?></td>
							<td><?php echo $des_paket;?></td>
							<td><?php echo $harga;?></td>
						</tr>
						<?php endforeach;?>
					</tbody>
				</table>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- Modal Paket 2 -->

	<!-- Modal Paket 3 -->
	<div class="modal fade"  style="background-repeat: no-repeat; background-size: cover; background-image: url('<?php echo base_url();?>bootstrap/img/mesin1.jpg'); " id="paket3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content"  style="background-color: rgba(0,0,51,0.8); color: red;">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Paket 3</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true" style="color: red;">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
    	        <table class="table table-bordered table-striped">
					<thead style="color:white; background-color:rgba(17,17,17,0.5);">
						<tr>
							<!--<td align="center">No.</td>-->
							<td>Kode Paket</td>
							<td>Nama Paket</td>
							<td>Harga</td>
						</tr>
					</thead>
					<tbody style="color:white; background-color:rgba(17,17,17,0.5);">
						<?php
							#$no=0;
							foreach($paket3->result_array() as $i):
								#$no++;
								$id_paket=$i['id_paket'];
								$des_paket=$i['des_paket'];
			                    $harga=$i['harga'];
						?>
						<tr>
							<!--<td align="center"><?php #echo $no;?></td>-->
							<td><?php echo $id_paket;?></td>
							<td><?php echo $des_paket;?></td>
							<td><?php echo $harga;?></td>
						</tr>
						<?php endforeach;?>
					</tbody>
				</table>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- Modal Paket 3 -->

	<!-- Modal Login -->
	<div class="modal fade"  style="background-repeat: no-repeat; background-size: cover; background-image: url('<?php echo base_url();?>bootstrap/img/mesin1.jpg'); " id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  	<div class="modal-dialog" role="document">
	    	<div class="modal-content"  style="background-color: rgba(0,0,51,0.8); color: red;">
	      		<div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel"><img class="img" src="<?php echo base_url();?>bootstrap/img/mesincuci.png"></h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true" style="color: red;">&times;</span>
			        </button>
		      	</div>
		      	<div class="modal-body">
			        <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/login/cek_login'?>">
						<div class="alert" align="center"><h3>Login</h3></div>
		      				<div class="modal-body">
								<div class="form-group row">
									<label class="col-3">Username</label>
									<div class="col-9">
										<input name="username" class="form-control" type="text" required><br>
									</div>
									<label class="col-3">Password</label>
									<div class="col-9">
										<input name="password" class="form-control" type="password" required><br>
									</div>
								</div>
								<a style="color: red"><?php #echo $this->session->flashdata('msg');?></a><br>
								Don't have an account?<a href="<?php echo base_url().'index.php/login/daftar'?>" > Sign Up</a>
		      				</div>
		      				<div class="modal-footer">
								<button type="submit" class="btn btn-info">Login</button>
		        				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        			</div>
		      			</div>
					</form>
		      	</div>
		    </div>
  		</div>
	</div>
	<!-- Modal Login -->

	<!-- Modal About Us -->
	<div class="modal fade"  style="background-repeat: no-repeat; background-size: cover; background-image: url('<?php echo base_url();?>bootstrap/img/mesin1.jpg'); " id="aboutus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" style="background-size: 1000px;" role="document">
	    <div class="modal-content"  style="background-size: 300px; background-color: rgba(0,0,51,0.8); color: red;">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Info seputar Netlaundry</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true" style="color: red;">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	      	<div class="card"  style="color:white; background-color:rgba(17,17,17,0.5);">
	      		<p>
	      			<u>Netlaudry</u> adalah salah satu aplikasi berbasis Website <br> yang dirancang oleh salah satu mahasiswa Universitas Mulia Balikpapan.
	      		</p>
	      		<p>
	      			<u>Netlaundry</u> sendiri dibuat untuk mempermudah data transaksi keluar masuknya pakaian yang dipercayakan <br> oleh pelanggan untuk dicuci sampai bersih dan siap untuk dipakai. 
	      		</p>
	      		<p>
	      			sebelumnya alasan utama pendiri membuat aplikasi <u>Netlaundry</u> ini karena pendiri sering kali mendapati kasus pencucian <br>
	      			di mana seharusnya pada tanggal yang telah ditentukan pakaian dapat diambil, malah harus menunda lagi karena alasan, mati lampu, <br>
	      			belum diseterika, masih basah, dll.
	      		</p>
	      		<p>
	      			Oleh karena itu pendiri membuat aplikasi ini dengan fitur pelanggan dapat mengecheck status pakaian mereka <br>
	      			di antaranya :
	      			<p>1. cucian baru masuk : berarti cucian tersebut baru masuk atau belum dilakukan proses pencucian</p>
	      			<p>2. cucian dalam proses : berarti cucian tersebut sendang dalam pengerjaan, baik sedang dicuci, dijemur, dan diseterika</p>
	      			<p>3. cucian siap diambil : berarti cucian tersebut sudah dapat diambil oleh pelanggan</p>
	      			<br>
	      			Dari fitur-fitur di atas, pelanggan tentu dapat melihat status pakaian mereka.
	      		</p>
	      		<p>
	      			Berikut beberapa fitur yang akan ditambahkan oleh pendiri :
	      			<p>
	      				1. fitur chat : untuk mempermudah pelanggan bertanya kepada pihak Laundry jika dirasa waktu pengambilan <br> yang
	      				telah ditetapkan telah lewat atau tidak sesuai dengan nota
	      			</p>
	      			<p>
	      				2. fitur pembayaran berupa virtual account, yang serupa dengan "gopay", yang berupa "I-Coin". 1 "I-Coin" = Rp.1000,00
	      			</p>
	      		</p>
	      		<p>
	      			Berikut Info Pendiri NetLaundry :
	      		</p>
	      		<table>
	      			<tr>
	      				<td>
	      					<img style="border-radius: 100px; width: 200px;height: 200px;" src="<?php echo base_url();?>bootstrap/img/birulaut.jpg">
	      				</td>
	      				<td>
	      					Nama: Leoy Naitsirhc Nugad <br>
	      					Email :<a href="#"> LNproductionk18@gmail.com</a> <br>
	      					NO /Wa : 0822-5522-162
	      				</td>
	      			</tr>
	      		</table>
	      	</div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- Modal About Us -->

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