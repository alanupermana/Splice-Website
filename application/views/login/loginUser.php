<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title><?php echo $judul ?></title>
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/styleSpliceLogin.css">
  </head>
  <body>
    <div class="bglogin">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-4 col-md-offset-4">
            <!-- LOGO -->
            <div class="login-avatar">
              <a href="<?= base_url();?>">
                <img src=<?php echo base_url('assets/img/logoSpliceLogin.png'); ?> alt="logo">
              </a>
            </div>
            <!-- FORM LOGIN -->
            <div class="account-wall">
              <form action="<?php echo site_url('UserController/Login'); ?>" method="POST" class="form-signin" id="login-form"  >
                <input name="username" id="username" type="text" class="form-control" placeholder="Username or email address" required autofocus>
                <input name="password" id="password" type="password" class="form-control" placeholder="Password" required>
                <input type="submit" name="login" id="signin" class="form-submit" value="Log in"/>
                <div class="text-center">
                  <a href="#" class="need-help">Forgot your password? </a><span class="clearfix"></span>
                </div>
              </form>
            </div>
            <!-- DONT HAVE ACC -->
            <div class="text-center">
              <span>Don't have an account?</span>
              <a href="<?php echo site_url('Splice/SignUp'); ?>" class="new-account">Sign Up Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
