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
		defined('BASEPATH') OR exit('No direct script access allowed');
		$this->table->set_heading('NIM','Nama');
		$this->table->add_row('13.01.005','Asrul');
		$this->table->add_row('13.01.089','Agung');
		$this->table->add_row('12.01.113','Nurmawati');
		echo $this->table->generate();
	?>
</body>
</html>