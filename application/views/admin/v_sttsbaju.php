 <!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="utf-8">
	<title>Page Status Cucian</title>
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
      <a class="navbar-brand" href="<?php echo site_url('admin/admin/indexstbaju');?>"><img class="img" src="<?php echo base_url();?>bootstrap/img/mesincuci.png">&nbsp;Netlaundry- Status Cucian</a>
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

<div class="container divjumbo1"style="color: white;">
	<!--<?php #$this->load->view('menu');?> Include menu-->
	<div class="container-fluid">
	<div class="container">
    <div class="show">
	<center><h3><b><h2><u>Page Status Cucian</u></h2></b></center>
		<div class="pull-right">
            <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal_add_new"> 
		      <span class="glyphicon glyphicon-plus"></span> Tambah Data Baru
            </a>
        </div>		
	</h3>

	<table class="table table-bordered table-striped" id="mydata">
		<thead bgcolor="#145374" style="color:white">
			<tr>
				<td align="center">No.</td>
				<td>Kode Status Cucian</td>
				<td>Status Cucian</td>
				<td align="center">Aksi</td>
			</tr>
		</thead>
		<tbody>
			<?php
				$no=0;
				foreach($stbaju->result_array() as $i):
					$no++;
					$id_status_baju=$i['id_status_baju'];
					$des_baju=$i['des_baju'];
            ?>
			<tr>
				<td align="center"><?php echo $no;?></td>
				<td><?php echo $id_status_baju;?></td>
				<td><?php echo $des_baju;?></td>
      .          <td align="center"><a class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal_edit<?php echo $id_status_baju;?>"> 
				<span class="glyphicon glyphicon-edit"></span> Edit </a>&nbsp | &nbsp
				<a class="btn btn-sm btn-sm btn-danger" data-toggle="modal" data-target="#modal_hapus<?php echo $id_status_baju;?>"> 
				<span class="glyphicon glyphicon-erase"></span> Hapus </a>
				</td>
			</tr>
			<?php endforeach;?>
		</tbody>
	</table>
    <a style="color: black; border-radius: 50px; border-color: black; border-width: 2px;" class="btn btn-success" href="<?php echo base_url('index.php/perpus/export_excelbuku') ?>">
        <img src="<?php echo base_url().'assets/img/excel.png'; ?>" width="20" height="20" alt="">
        Export File Excel
    </a>
    </div>
	<br>
	<?php #$this->load->view('footer');?> <!--Include footer-->
</div>
</div>
</div>


    <!-- ============ MODAL ADD status cucian =============== -->
        <div class="modal fade" id="modal_add_new" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header" align="center">
                <h3 class="modal-title" id="myModalLabel" >Tambah Data status cucian</h3>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/admin/admin/simpan_stbaju'?>">
                <div class="modal-body">

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Kode Status Cucian</label>
                        <div class="col-xs-8">
                            <input name="id_status_baju" class="form-control" type="text" placeholder="Kode..." required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Status</label>
                        <div class="col-xs-8">
                            <input name="des_baju" class="form-control" type="text" placeholder="Status..." required>
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
    <!--END MODAL ADD status cucian-->

    <!-- ============ MODAL EDIT status cucian =============== -->
    <?php 
        foreach($stbaju->result_array() as $i):
        $id_status_baju=$i['id_status_baju'];
        $des_baju=$i['des_baju'];
    ?>
        <div class="modal fade" id="modal_edit<?php echo $id_status_baju;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header" align="center">
                <h3 class="modal-title" id="myModalLabel">Edit Data Paket</h3>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/admin/admin/edit_stbaju'?>">
                <div class="modal-body">

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Kode Status Cucian</label>
                        <div class="col-xs-8">
                            <input name="id_status_baju" value="<?php echo $id_status_baju;?>" class="form-control" type="text" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Status Sebelumnya</label>
                        <div class="col-xs-8">
                            <input name="" value="<?php echo $des_baju;?>" class="form-control" type="text" placeholder="Nama Baru..." readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Status Baru</label>
                        <div class="col-xs-8">
                            <input name="des_baju" value="<?php echo $des_baju;?>" class="form-control" type="text" placeholder="Nama Baru..." required>
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
    <!--END MODAL ADD status cucian-->
	
	
	<!--MODAL HAPUS-->
	 <?php 
        foreach($stbaju->result_array() as $i):
        $id_status_baju=$i['id_status_baju'];
        $des_baju=$i['des_baju'];
    ?>
        <div class="modal fade" id="modal_hapus<?php echo $id_status_baju;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header" align="center">
                <h3 class="modal-title" id="myModalLabel">Hapus Data</h3>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/admin/admin/hapus_stbaju'?>">
                <div class="modal-body">

                    <div class="form-group">
						<div class="alert alert-warning" align="center"><h3>Apakah Anda yakin <br> ingin menghapus data???</h3></div>
						<br>
                        <label class="control-label col-xs-3" >Kode Status Cucian</label>
                        <div class="col-xs-8">
                            <input name="id_status_baju" value="<?php echo $id_status_baju;?>" class="form-control" type="text" readonly>
                        </div>
                    </div>
					
					<div class="form-group">
                        <label class="control-label col-xs-3" >Status</label>
                        <div class="col-xs-8">
                            <input name="des_baju" value="<?php echo $des_baju;?>" class="form-control" type="text"readonly>
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
		$('#mydata').DataTable();
	});
</script>
</body>
</html>