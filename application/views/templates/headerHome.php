<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- BS4 -->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <!-- BS4 -->

        <!-- CSS -->
        <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/styleSplice.css">

        <!-- ICON -->
        <link rel="icon" href="<?= base_url(); ?>/assets/img/iconWeb.png" type="image/gif" sizes="16x10">

        <!-- TITTLE -->
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
                <!-- END LOGO -->

                <!-- TOGGLER -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- END TOGGLER -->

                <!-- MENU -->
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-item nav-link" href="<?= base_url(); ?>">Studio</a>
                        <a class="nav-item nav-link" href="<?= base_url(); ?>">Community</a>
                        <a class="nav-item nav-link" href="<?= base_url(); ?>">Sounds</a>
                        <a class="nav-item nav-link" href="<?= base_url(); ?>">Plugins</a>
                        <a class="nav-item nav-link" href="<?= base_url(); ?>">Blog</a>
                    </div>
                </div>
                <!-- END MENU -->

                <!-- LOGIN & SIGNUP -->
                <div class="nav justify-content-end" >
                    <div class="navbar-nav">
                        <a class="nav-item nav-link" style="margin-right:15px;" href="<?php echo site_url('Splice/Login'); ?>" >Log in</a>
                        <button class="btnSignup" type="button" name="SignUp">
                            <a href="<?php echo site_url('Splice/SignUp'); ?>" style="color:black;">SignUp</a>
                        </button>
                    </div>
                </div>
                <!-- END LOGIN & SIGNUP -->
            </nav>
        </div>
