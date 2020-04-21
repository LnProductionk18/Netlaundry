<!DOCTYPE html>
<html>
<head>
  <title>Page Daftar</title>
  <link href="<?php echo base_url("bootstrap/css/bootstrap.min.css"); ?>" rel="stylesheet" type="text/css">
     <link href="<?php echo base_url("bootstrap/css/mine.css"); ?>" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="<?php echo base_url("bootstrap/js/jquery-3.2.1.min.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("bootstrap/js/bootstrap.min.js"); ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href="<?php echo base_url();?>bootstrap/img/mesincuci.png" type="image/png" rel="icon">
</head>
<body>  

  <div class="card" style="max-width: 30rem; margin: 0 auto;">
    <div class="alert alert-primary" align="center">
      <h3>Sign Up</h3>
    </div>
    <form class="form-signin" action="<?php echo base_url().'index.php/login/simpan_daftar'?>" method="post">
      <div class="card-body">
        <div class="form-group row">
          <label class="col-4">Nama</label>
          <div class="col-8">
            <input name="name" class="form-control" type="text" required><br>
          </div>

          <label class="col-4">Username</label>
          <div class="col-8">
            <input name="username" class="form-control" type="text" required><br>
          </div>

          <label class="col-4">Password</label>
          <div class="col-8">
            <input name="password" class="form-control" type="password" required><br>
          </div>

          <label class="col-4">Konfimasi</label>
          <div  class="col-8">
            <input type="radio" name="level" value="member" required/><br>Check jika yakin data yang anda isi sudah benar<br />
          </div>
        </div>
        <button style="float: right;" type="submit" class="btn btn-info">Sign Up</button><br><br>
      </div>
    </form>
  </div>

</body>
</html>

