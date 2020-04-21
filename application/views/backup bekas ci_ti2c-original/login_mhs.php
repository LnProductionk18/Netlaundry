<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		defined('BASEPATH') OR exit('No direct script access allowed');
		echo form_open('mahasiswa/simpan');
	?>
	<fieldset>
		<legend>Login:</legend>
		<?php 
			echo form_input('username','');
			echo form_password('user_pass');
			echo form_submit('mysubmit','Kirim');
			echo form_reset('myreset','Reset');
		?>
	</fieldset>
	<?php 
		echo form_close();
	?>
</body>
</html>