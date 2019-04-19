<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/style.css">
    <title><?php echo $judul ?></title>
</head>

<body>
  <!--NAVBAR  -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="height:56px">
    <a class="navbar-brand" href="<?= base_url(); ?>">
      <img src=<?php echo base_url('assets/img/logoSplice.png'); ?> style="width:120px " alt="logo">
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
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
          Logo
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">
            <p> alanupermana </p>
                          <!-- ini php nantinya -->
            View Your Profile
          </a>
          <a class="dropdown-item" href="#">Billing</a>
          <a class="dropdown-item" href="#">Settings</a>
          <a class="dropdown-item" href="#">Install</a>
          <a class="dropdown-item" href="#">Terms of Service</a>
          <a class="dropdown-item" href="#">Privacy Policy</a>
          <a class="dropdown-item" href="#">Logout</a>
        </div>
      </li>
    </div>
 </nav>
