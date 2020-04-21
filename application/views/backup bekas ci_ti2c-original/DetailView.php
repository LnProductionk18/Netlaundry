<div class="col-sm-8" style="margin: 10px auto 20px auto;">
  <div class="card">
    <img class="card-img-top" src="<?php echo base_url($toko[0]->image_location); ?>" alt="Card image cap">
    <div class="card-body">
      <h3 class="card-title display-6"><?php echo ($toko[0]->nama); ?></h3>
      <p class="card-text"><?php echo ($toko[0]->alamat); ?></p><hr>
      <p class="card-text"><?php echo ($toko[0]->deskripsi); ?></p><hr>
      <p class="card-text"><?php echo ($toko[0]->no_telp); ?></p>
      <!--<a href="#" class="btn btn-primary">Go somewhere</a>-->
    </div>
  </div><br>
  <a href="../../../"><img src="<?php echo base_url("pic/back.png"); ?>" alt="">Kembali</a>
</div>
