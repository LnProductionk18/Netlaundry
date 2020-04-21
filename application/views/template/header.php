<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Latihan CodeIgniter</title>
    <link href="<?php echo base_url("bootstrap/css/bootstrap.min.css"); ?>" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="<?php echo base_url("bootstrap/js/jquery-3.2.1.min.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("bootstrap/js/bootstrap.min.js"); ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style media="screen">

    html,body {
      height:100%;
    }
    </style>
  </head>
  <body>
    <script>
      $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
      });

    </script>

    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #145374;">
      <a class="navbar-brand" href="#">
        <img src="<?php echo base_url("pic/magazine.svg"); ?>" width="30" height="30" class="d-inline-block align-top" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url("index.php/home/tampil"); ?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(''); ?>">Edit Data</a>
          </li>
        </ul>
      </div>
    </nav>

    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="<?php echo base_url("pic/bluebanner.jpg"); ?>" alt="First slide">
        </div>
      </div>
    </div>

    <div class="container" style="margin-top: 20px; margin-bottom: 20px; min-height:100%; position:relative;">
