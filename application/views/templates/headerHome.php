<!doctype html>
<html lang="en">

  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

      <!-- jQuery library -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

      <!-- Popper JS -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

      <!-- Latest compiled JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

      <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/styleSplice.css">
      <title><?php echo $judul ?></title>
  </head>

  <body>
    <!--NAVBAR  -->
    <div class="navHeaderDashboard">
      <nav class="navbar navbar-expand-lg navbar-dark" style="height:56px">
        <!-- LOGO -->
        <a class="navbar-brand" href="#">
          <img src=<?php echo base_url('assets/img/logoSplice.png'); ?> style="width:120px" alt="logo">
        </a>
        <!-- TOGGLER -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <!-- MENU -->
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link" href="<?= base_url(); ?>">Studio</a>
            <a class="nav-item nav-link" href="<?= base_url(); ?>">Community</a>
            <a class="nav-item nav-link" href="#">Sounds</a>
            <a class="nav-item nav-link" href="#">Plugins</a>
            <a class="nav-item nav-link" href="#">Blog</a>
          </div>
        </div>
        <!-- AUTH -->
        <div class="nav justify-content-end" >
          <div class="navbar-nav">
            <a class="nav-item nav-link" style="margin-right:15px;" href="<?php echo site_url('Splice/Login'); ?>" >Log in</a>
            <button class="btnSignup" type="button" name="SignUp">
              <a href="<?php echo site_url('Splice/SignUp'); ?>" style="color:black;">SignUp</a>
            </button>
          </div>
        </div>
      </nav>
    </div>
