<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="utf-8">
	<title>Data Akun Terdaftar</title>
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
      <a class="navbar-brand" href="<?php echo site_url('admin/admin/indexakunptgs');?>"><img class="img" src="<?php echo base_url();?>bootstrap/img/mesincuci.png">&nbsp;Netlaundry- Akun</a>
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
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" style="color: white;">Data Akun</a>
          <div class="dropdown-menu" style="border-radius: 5px;">
            <a class="dropdown-item" href="" data-toggle="modal" data-target="#akunadmin"><h5 style="color: black;"><center>Akun Admin</center></h5></a>
            <a class="dropdown-item" href="" data-toggle="modal" data-target="#akunusers"><h5 style="color: black;"><center>Akun Users</center></h5></a>
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
	
	<div class="container-fluid">
	<div class="container">
       
    <div class="show">
   <center> <h3><b><h2><u>Data Akun</u></h2></b></center>
		<div class="pull-right">
            <a class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal_add_new"> 
		      <span class="glyphicon glyphicon-plus"></span>Daftar Akun 
          </a>
      </div>		
	</h3>

	<table class="table table-bordered table-striped" id="mydata">
		<thead bgcolor="#145374" style="color:white">
			<tr>
				<td align="center">No</td>
				<td>User ID</td>
                <td>Name</td>
				<td>Username</td>
				<td>Password (telah dienkripsi)</td>
				<td>Sebagai</td>
			    <td align="center">Aksi</td>
			</tr>
		</thead>
		<tbody>
			<?php 
				$no=0;
				foreach($ptgs->result_array() as $i):
					$no++;
					$uid=$i['uid'];
                    $name=$i['name'];
					$username=$i['username'];
					$password=$i['password'];
					$level=$i['level'];
			?>
			<tr>
				<td align="center"><?php echo $no;?></td>
				<td><?php echo $uid;?></td>
                <td><?php echo $name;?></td>
				<td><?php echo $username;?></td>
				<td><?php echo $password;?></td>
				<td><?php echo $level;?></td>
                <td align="center"><a class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal_edit<?php echo $uid;?>">
				<span class="glyphicon glyphicon-edit"></span> Edit </a>
				<a class="btn btn-sm btn-sm btn-danger" data-toggle="modal" data-target="#modal_hapus<?php echo $uid;?>"> 
				<span class="glyphicon glyphicon-erase"></span> Hapus </a></td>
			</tr>
			<?php endforeach;?>
		</tbody>
	</table>
	<br>
	
	</div>
</div>
</div>
</div>

    <!-- ============ MODAL ADD akun =============== -->
        <div class="modal fade" id="modal_add_new"  tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" align="center">Tambah Akun Baru</h3>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
            </div>
            <form class="form-horizontal"  method="post" action="<?php echo base_url().'index.php/admin/admin/simpan_akun'?>">
                <div class="modal-body">
                    <!--
                    <div class="form-group">
                        <label class="control-label col-xs-3" >ID Petugas</label>
                        <div class="col-xs-8">
                            <input name="uid" class="form-control" type="text" placeholder="ID Pendaftaran..." required>
                        </div>
                    </div>-->

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Name</label>
                        <div class="col-xs-8">
                            <input name="name" class="form-control" type="text" placeholder="Name User..." required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Username</label>
                        <div class="col-xs-8">
                            <input name="username" class="form-control" type="text" placeholder="Username User..." required>
                        </div>
                    </div>
					
					<div class="form-group">
                        <label class="control-label col-xs-3" >Password</label>
                        <div class="col-xs-8">
                            <input name="password" class="form-control" type="password" placeholder="Password..." required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Alamat</label>
                        <div class="col-xs-8">
                            <select class="form-control" name="level" required>
                                <option>admin</option>
                                <option>member</option>
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
    <!--END MODAL ADD akun -->

    <!-- ============ MODAL EDIT akun =============== -->
    <?php 
        foreach($ptgs->result_array() as $i):
            $uid=$i['uid'];
            $name=$i['name'];
            $username=$i['username'];
            $password=$i['password'];
            $level=$i['level'];
    ?>
        <div class="modal fade" id="modal_edit<?php echo $uid;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel" align="center">Edit akun</h3>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/admin/admin/edit_akun'?>">
                <div class="modal-body">

                    <div class="form-group">
                        <label class="control-label col-xs-3" >ID Pendaftaran</label>
                        <div class="col-xs-8">
                            <input name="uid" value="<?php echo $uid;?>" class="form-control" type="text" placeholder="ID pendaftaran..." readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Name</label>
                        <div class="col-xs-8">
                            <input name="name" value="<?php echo $name;?>" class="form-control" type="text" placeholder="name..." required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Username </label>
                        <div class="col-xs-8">
                            <input name="username" value="<?php echo $username;?>" class="form-control" type="text" placeholder="Username..." required>
                        </div>
                    </div>
					
					<div class="form-group">
                        <label class="control-label col-xs-3" >Password </label>
                        <div class="col-xs-8">
                            <input name="password" value="<?php echo $password;?>" class="form-control" type="text" placeholder="Password..." required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Level</label>
                        <div class="col-xs-8">
                            <select class="form-control" name="level" required>
                                <option>admin</option>
                                <option>member</option>
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
	
    <!--END MODAL ADD MAHASISWA-->
	
	<!--MODAL HAPUS-->
	 <?php 
        foreach($ptgs->result_array() as $i):
            $uid=$i['uid'];
            $name=$i['name'];
            $username=$i['username'];
    ?>
        <div class="modal fade" id="modal_hapus<?php echo $uid;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header" align="center">
                <h3 class="modal-title" id="myModalLabel">Hapus Akun</h3>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/admin/admin/hapus_akun'?>">
                <div class="modal-body">

				<div class="form-group">
				<div class="alert alert-warning" align="center"><h3>Apakah Anda yakin <br> ingin menghapus data mahasiswa ini ???</h3></div>
					<br>
                    <label class="control-label col-xs-3" >ID pendaftaran</label>
                    <div class="col-xs-8">
                        <input name="uid" value="<?php echo $uid;?>" class="form-control" type="text" placeholder="..." readonly>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-xs-3" >Name</label>
                    <div class="col-xs-8">
                        <input name="name" value="<?php echo $name;?>" class="form-control" type="text" placeholder="..." readonly>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-xs-3" >Usernamea </label>
                    <div class="col-xs-8">
                        <input name="username" value="<?php echo $username;?>" class="form-control" type="text" placeholder="..." readonly>
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

    <!-- Modal akun sebagai admin -->
    <div class="modal fade"  style="background-color: rgba(0,0,51,0.8);" id="akunadmin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="background-size: 1000px;" role="document">
            <div class="modal-content"  style="background-size: 300px; /*background-color: rgba(0,0,51,0.8);*/ background-color: transparent;border:none; color: white;">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Data Akun Sebagai admin</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true" style="color: red;">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table table-bordered table-striped"  id="akunadm">
                        <thead bgcolor="#145374" style="color:white">
                            <tr>
                                <td align="center">No</td>
                                <td>Name</td>
                                <td>Username</td>
                                <td>Password</td>
                                <td>Sebagai</td>
                            </tr>
                        </thead>
                        <tbody>
                                <?php 
                                $no=0;
                                foreach($akunadmin->result_array() as $i):
                                    $no++;
                                    #$uid=$i['uid'];
                                    $name=$i['name'];
                                    $username=$i['username'];
                                    $password=$i['password'];
                                    $level=$i['level'];
                                ?>
                            <tr>
                                <td align="center"><?php echo $no;?></td>
                                <!--<td><?php echo $uid;?></td>-->
                                <td><?php echo $name;?></td>
                                <td><?php echo $username;?></td>
                                <td><?php echo substr($password, 0, 8);?>. . .</td>
                                <td><?php echo $level;?></td>
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
    <!-- Modal akun sebagai admin -->


     <!-- Modal akun sebagai users -->
    <div class="modal fade"  style="background-color: rgba(0,0,51,0.8);" id="akunusers" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="background-size: 1000px;" role="document">
            <div class="modal-content"  style="background-size: 300px;/* background-color: rgba(0,0,51,0.8);*/ background-color: transparent; border: none; color: white;">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Data Akun Sebagai users</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true" style="color: red;">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table table-bordered table-striped"  id="akunusr">
                        <thead bgcolor="#145374" style="color:white">
                            <tr>
                                <td align="center">No</td>
                                <td>Name</td>
                                <td>Username</td>
                                <td>Password</td>
                                <td>Sebagai</td>
                            </tr>
                        </thead>
                        <tbody>
                                <?php 
                                $no=0;
                                foreach($akunusers->result_array() as $i):
                                    $no++;
                                    #$uid=$i['uid'];
                                    $name=$i['name'];
                                    $username=$i['username'];
                                    $password=$i['password'];
                                    $level=$i['level'];
                                ?>
                            <tr>
                                <td align="center"><?php echo $no;?></td>
                                <!--<td><?php echo $uid;?></td>-->
                                <td><?php echo $name;?></td>
                                <td><?php echo $username;?></td>
                                <td><?php echo substr($password, 0, 8);?>. . .</td>
                                <td><?php echo $level;?></td>
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
    <!-- Modal akun sebagai users -->



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

<script>
    $(document).ready(function(){
        $('#akunadm').DataTable();
    });
</script>

<script>
    $(document).ready(function(){
        $('#akunusr').DataTable();
    });
</script>
</body>
</html>