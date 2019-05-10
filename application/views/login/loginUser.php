<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">

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
      <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/styleSpliceLogin.css">
      <!-- END CSS -->

      <!-- JS -->
      <script src="<?php echo base_url('/assets/js/siginup.js'); ?>"></script>
      <!-- END JS -->

      <!-- ICON -->
      <link rel="icon" href="<?= base_url(); ?>/assets/img/iconWeb.png" type="image/gif" sizes="16x10">
      <!-- END ICON -->

      <!-- TITTLE -->
      <title><?php echo $judul ?></title>
      <!-- END TITTLE -->

    </head>
    <body>
        <div class="bglogin">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-12 col-md-offset-12">

                        <!-- LOGO -->
                        <div class="login-avatar" >
                            <a href="<?= base_url();?>">
                                <img src=<?php echo base_url('assets/img/logoSpliceLogin.png'); ?> alt="logo">
                            </a>
                        </div>
                        <!-- END LOGO -->
                        <?php
                            if(isset($_SESSION['SuccessReg'])) {
                                $this->load->view('Alerts/SuccessRegis');
                            } else if(isset($_SESSION['falselogin'])) {
                                $this->load->view('Alerts/FailLogin');
                            }
                        ?>



                        <!-- FORM -->
                        <div class="account-wall" style="margin-left:370px;" width:1000px;>
                            <form action="<?php echo site_url('UserController/Login'); ?>" method="POST" class="form-signin" id="login-form"  >

                                <input name="username" id="username" type="text" class="form-control" placeholder="Username or email address" required autofocus>
                                <input name="password" id="password" type="password" class="form-control" placeholder="Password" required>
                                <input type="submit" name="login" id="signin" class="form-submit btn btn-default" value="Log in"/>
                                <div class="text-center">
                                    <a href="#" class="need-help">Forgot your password? </a><span class="clearfix"></span>
                                </div>
                            </form>
                        </div>
                        <!-- END FORM -->

                        <!-- DONT HAVE ACC -->
                        <div class="text-center">
                            <span>Don't have an account?</span>
                            <a href="<?php echo site_url('Splice/SignUp'); ?>" class="new-account">Sign Up Now</a>
                        </div>
                        <!--END  DONT HAVE ACC -->

                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
