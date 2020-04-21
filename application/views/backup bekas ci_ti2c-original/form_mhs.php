<!DOCTYPE html>
<html>
<head>
	<title></title>
<style>
		input[type=text], select {
		  width: 100%;
		  padding: 12px 20px;
		  margin: 8px 0;
		  display: inline-block;
		  border: 1px solid #ccc;
		  border-radius: 4px;
		  box-sizing: border-box;
		}

		input[type=password], select {
		  width: 100%;
		  padding: 12px 20px;
		  margin: 8px 0;
		  display: inline-block;
		  border: 1px solid #ccc;
		  border-radius: 4px;
		  box-sizing: border-box;
		}

		input[type=submit] {
		  width: 100%;
		  background-color: #4CAF50;
		  color: white;
		  padding: 14px 20px;
		  margin: 8px 0;
		  border: none;
		  border-radius: 4px;
		  cursor: pointer;
		}

		input[type=submit]:hover {
		  background-color: #45a049;
		}

		input[type=reset] {
		  width: 100%;
		  background-color: red;
		  color: white;
		  padding: 14px 20px;
		  margin: 8px 0;
		  border: none;
		  border-radius: 4px;
		  cursor: pointer;
		}

		input[type=reset]:hover {
		  background-color: darkred;
		}

		div {
		  border-radius: 5px;
		  background-color: #f2f2f2;
		  padding: 20px;
		}
</style>
</head>
<body>
	<div>
	<?php 
		echo heading('Input Data Mahasiswa',3);
		echo form_open('mahasiswa/terima');
		echo "NIM",form_input('nim')."<br>";
		echo "Nama",form_input('nama')."<br>";
		echo "Email",form_input('email')."<br>";
		echo form_submit('mysubmit','Kirim');
		echo form_reset('myreset','Reset');
		echo form_close();
	?>	
	</div>
	
</body>
</html>

