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

      <!-- bootstrap 3 -->

      <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/styleDashboard.css">
      <title><?php echo $judul ?></title>
  </head>
  <body>
    <!--NAVBAR  -->
    <div class="navDashboard-1 fixed-top">
      <nav class="navbar navbar-expand-lg navbar-dark" style="height:56px">
        <!-- LOGO -->
        <a class="navbar-brand" href="<?= base_url(); ?>">
          <img src=<?php echo base_url('assets/img/logoSplice.png'); ?> style="width:120px " alt="logo">
        </a>
        <!-- MENU -->
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link" href="<?php echo site_url('Splice/Studio'); ?>">Studio</a>
            <a class="nav-item nav-link" href="<?php echo site_url('Splice/Community'); ?>">Community</a>
            <a class="nav-item nav-link" href="#">Sounds</a>
            <a class="nav-item nav-link" href="#">Plugins</a>
            <a class="nav-item nav-link" href="#">Blog</a>
          </div>
        </div>
        <!-- MENU PROFILE -->
        <div class="nav justify-content-end" >
          <li class="nav-item dropdown justify-content-end">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
              <img src=<?php echo base_url('assets/img/noavatar.png'); ?> alt="" style="width:30px;">
            </a>
            <div class="dropdown-menu dropdown-menu-right" >
              <a class="dropdown-item" href="#">
                <?php
                    $cookie = $this->input->cookie('logged');
                    if(isset($cookie)){
                        echo $cookie;
                    } else if(isset($_SESSION['successLogin'])) {
                        echo $_SESSION['successLogin'];
                    }
                ?>
              </a>
              <a class="dropdown-item" href="<?php echo site_url('Splice/Profile'); ?>">
                  View Your Profile
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Settings</a>
              <a class="dropdown-item" href="#">Install</a>
              <a class="dropdown-item" href="#">Terms of Service</a>
              <a class="dropdown-item" href="#">Privacy Policy</a>
              <a class="dropdown-item" href="<?php echo site_url('UserController/Logout'); ?>">Logout</a>
            </div>
          </li>
        </div>
      </nav>
    </div>
