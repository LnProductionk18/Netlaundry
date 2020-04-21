<div class="container">
	<div class="row">
	<?php
	foreach ($toko as $row) {
	?>
	<div class="col-sm-4" style="margin: 10px 0 20px 0;">
		<div class="card">
	  	<img class="card-img-top" src="<?php echo base_url($row->image_location); ?>" alt="Card image cap" width="300" height="300">
	  	<div class="card-body" style="padding: 20px; background-color: #f5f5f5">
				<h3 class="card-title display-6"><?php echo ($row->nama); ?></h3><hr>
				<p class="card-text"><?php echo ($row->deskripsi); ?></p><hr>
				<table style="font-size: 15px;">
					<tr>
						<td valign="top" style="width: 40px;"><a><img src="<?php echo base_url("pic/location.png"); ?>" alt="" width="25"></a></td>
						<td><p class="card-text"><?php echo ($row->alamat); ?></p></td>
					</tr>
					<tr>
						<td valign="top" style="width: 40px;"><a><img src="<?php echo base_url("pic/phone.png"); ?>" alt="" width="25"></a></td>
						<td><p class="card-text"> <?php echo ($row->no_telp); ?></p></td>
					</tr>
				</table>

	    	<!--<a href="#" class="btn btn-primary">Go somewhere</a>-->
	  	</div>
		</div>
	</div>
	<?php
	}
	?>
	</div>
</div>
