<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/styleSplice.css">
    <title><?php echo $judul ?></title>
</head>

<body>
  <!--NAVBAR  -->
  <nav class="navbar navbar-expand-lg navbar-dark" style="height:56px">
    <a class="navbar-brand" href="<?= base_url(); ?>">
      <img src=<?php echo base_url('assets/img/logoSplice.png'); ?> style="width:120px" alt="logo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link" href="<?= base_url(); ?>">Studio</a>
        <a class="nav-item nav-link" href="<?= base_url(); ?>">Community</a>
        <a class="nav-item nav-link" href="#">Sounds</a>
        <a class="nav-item nav-link" href="#">Plugins</a>
        <a class="nav-item nav-link" href="#">Blog</a>
      </div>
    </div>
    <div class="nav justify-content-end" >
      <div class="navbar-nav">
        <a class="nav-item nav-link" style="margin-right:15px;" href="<?= base_url();?>login" >Log in</a>

        <button class="btnSignup" type="button" name="SignUp">
          <a href="#" style="color:black;">SignUp</a>
        </button>
      </div>
    </div>
  </nav>
