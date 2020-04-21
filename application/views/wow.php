<!DOCTYPE html>
<html>
<head>
	<title>gbr</title>
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
<body>
	<div class="">
		<nav class="navbar navbar-light nb">
		  <a class="navbar-brand" href="<?php echo site_url();?>"><img class="img" src="<?php echo base_url();?>bootstrap/img/mesincuci.png">&nbsp;Netlaundry</a>
		  <ul class="nav nav-pills">
		    <li class="nav-item">
		      <a class="nav-link" href="" data-toggle="modal" data-target="#paket1" style="color: white;">tambah data gambar</a>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link" href="" data-toggle="modal" data-target="#login" style="color: white;">Login</a>
		    </li>
		  </ul>
		</nav>
	</div>


	<div class="modal fade" style="background-repeat: no-repeat; background-size: cover; background-image: url('<?php echo base_url();?>bootstrap/img/mesin1.jpg'); " id="paket1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" style="" role="document">
	    <div class="modal-content" style=" background-color: rgba(0,0,51,0.8); color: red;">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel"><center>tambah data</center></h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true" style="color: red;">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body" style="background-repeat:no-repeat;background-size: 100px; background-position: center; background-image: url('<?php echo base_url();?>bootstrap/img/bajubiru.png');">
	        	<h1>Tambah Gambar</h1><hr>
				<!-- Menampilkan Error jika validasi tidak valid -->
				<div style="color: red;"><?php echo (isset($message))? $message : ""; ?></div>
				<?php echo form_open("gambar/tambah", array('enctype'=>'multipart/form-data')); ?>
				  <table cellpadding="8">
				    <tr>
				      <td>Deskripsi</td>
				      <td><input type="text" name="input_deskripsi" value="<?php echo set_value('input_deskripsi'); ?>" required></td>
				    </tr>
				    <tr>
				      <td>Gambar</td>
				      <td><input type="file" name="input_gambar" required></td>
				    </tr>
				  </table>
				    
				  <hr>
				  
				
	      </div>
	      <div class="modal-footer">
	      	<input type="submit" name="submit" value="Simpan" class="btn btn-primary">
		  	<a href="<?php echo base_url(); ?>"><input type="button" class="btn btn-danger" value="Batal"></a>
		  	<?php echo form_close(); ?> 
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	      </div>
	    </div>
	  </div>
	</div>
	<h1>Tambah Gambar</h1><hr>
	<!-- Menampilkan Error jika validasi tidak valid -->
	<div style="color: red;"><?php echo (isset($message))? $message : ""; ?></div>
	<!-- <?php echo form_open("gambar/tambah", array('enctype'=>'multipart/form-data')); ?>
	  <table cellpadding="8">
	    <tr>
	      <td>Deskripsi</td>
	      <td><input type="text" name="input_deskripsi" value="<?php echo set_value('input_deskripsi'); ?>"></td>
	    </tr>
	    <tr>
	      <td>Gambar</td>
	      <td><input type="file" name="input_gambar"></td>
	    </tr>
	  </table>
	    
	  <hr>
	  <input type="submit" name="submit" value="Simpan">
	  <a href="<?php echo base_url(); ?>"><input type="button" value="Batal"></a>
	<?php echo form_close(); ?> 
 -->
	<table border>
		<tr>
			<th>Foto</th>
			<th>Deskripsi</th>
			<th>Lokasi File</th>
			<th>Ukuran File</th>
			<th>Tipe File</th>
		</tr>
		<?php 
			if( ! empty($gambar))
			{ 
				// Jika data pada database tidak sama dengan empty (alias ada datanya)
			  foreach($gambar as $data)
			  { // Lakukan looping pada variabel gambar dari controller
			    echo "<tr>";
			    echo "<td><img src='".base_url("seno/".$data->nama_file)."' width='100' height='100'></td>";
			    echo "<td>".$data->deskripsi."</td>";
			    echo "<td>".$data->nama_file."</td>";
			    echo "<td>".$data->ukuran_file." kB</td>";
			    echo "<td>".$data->tipe_file."</td>";
			    echo "</tr>";
			  }
			}
			else
			{ 
				// Jika data tidak ada
			  echo "<tr><td colspan='5'>Data tidak ada</td></tr>";
			}

		?>
	</table>

</body>
</html>