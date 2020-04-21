<div class="container" style="margin: 20px 0 20px 0;">
	<?php
		if (isset($toko)) {
			$link = "../../../";
			?>
			<h1>Ubah Toko/Jasa</h1>
		<?php
		}
		else {
			?>
			<h1>Tambah Toko/Jasa</h1>
			<?php
			$link = "../../";
		}
	?>
	<form method="post" enctype="multipart/form-data">
		<div class="form-group">
			<label for="nama">Nama :</label>
			<input class="form-control" type="text" id="nama" value="<?php if(isset($toko)) { echo $toko[0]->nama; } ?>" name="nama">
		</div>
		<div>
			<label for="alamat">Alamat :</label>
			<input class="form-control" type="text" id="alamat" value="<?php if(isset($toko)) { echo $toko[0]->alamat; } ?>" name="alamat">
		</div>
		<div>
			<label for="deskripsi">Deskripsi :</label>
			<input class="form-control" type="text" id="deskripsi" value="<?php if(isset($toko)) { echo $toko[0]->deskripsi; } ?>" name="deskripsi">
		</div>
		<div>
			<label for="no_telp">No. Telepon :</label>
			<input class="form-control" type="text" id="no_telp" value="<?php if(isset($toko)) { echo $toko[0]->no_telp; } ?>" name="no_telp">
		</div>
		<div>
			<label for="image_location">Upload Gambar :</label>
			<input class="form-control-file border btn btn-success btn-lg active form-control" type="file" name="image_location" value="">
		</div>
		<br>
		<button class="btn btn-primary" type="submit">Submit</button>
		<button class="btn btn-danger" type="reset">Reset</button>
	</form><br>
	<a href="<?php echo $link; ?>"><img src="<?php echo base_url("pic/back.png"); ?>" alt=""> Kembali</a>
</div>
