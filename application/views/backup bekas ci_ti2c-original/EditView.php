<h3>
	<a href="index.php/home/tambah">+ Tambah Toko/Jasa</a>
</h3>
<head>
	<style media="screen">
		th {
			background-color: #00334e;
			color: white;
		}
	</style>
</head>
<div class="table-responsive-xl">
	<table class="table table-bordered table-hover">
			<thead>
				<th>Nama</th>
				<th>Alamat</th>
				<th>Deskripsi</th>
				<th>No. Telepon</th>
				<th>Aksi</th>
			</thead>
		<?php
		foreach ($toko as $row) {
		?>
		<tr>
			<td><?php echo substr($row->nama, 0, 25); ?></td>
			<td><?php echo substr($row->alamat, 0, 25); ?>...</td>
			<td><?php echo substr($row->deskripsi, 0, 50); ?>...</td>
			<td><?php echo substr($row->no_telp, 0, 20); ?></td>
			<td>
				<a class="btn btn-info" href="<?php echo "index.php/home/detail/" . $row->id; ?>">Detail</a>
				<a class="btn btn-warning" href="<?php echo "index.php/home/ubah/" . $row->id; ?>">Ubah</a>
				<!-- Button trigger modal -->
				<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
				  Hapus
				</button>
			</td>
		</tr>
		<?php
		}
		?>
	</table>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Hapus toko/jasa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Yakin ingin hapus?
      </div>
      <div class="modal-footer">
				<a class="btn btn-danger" href="<?php echo "index.php/home/hapus/" . $row->id; ?>">Hapus</a>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
