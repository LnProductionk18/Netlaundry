<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		table {
			font-family: arial, sans-serif;
			border-collapse: collapse;
			width: 100%;
		}

		td, th {
			border: 1px solid #dddddd;
			text-align: left;
			padding: 8px;
		}

		tr:nth-child(even) {
			background-color: red;
		}
	</style>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<?php 
		echo heading('Daftar Mahasiswa',3);
		$this->table->set_heading('NIM','Nama','Email','Aksi');
		foreach ($data_mahasiswa->result() as $row) {
			$this->table->add_row($row->nim,$row->nama,$row->email,anchor('mahasiswa/hapus/'.$row->nim,'Hapus'));
		}
		echo $this->table->generate();
	?>
</body>
</html>
