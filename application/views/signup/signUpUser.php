<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title><?php echo $judul ?></title>
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/styleSpliceSignUp.css">
      <script src="<?php echo base_url('/assets/js/siginup.js'); ?>"></script>

  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
          <!-- LOGO -->
          <div class="login-avatar">
            <a href="<?= base_url();?>">
              <img src=<?php echo base_url('assets/img/logoSpliceLogin.png'); ?> alt="logo">
            </a>
          </div>
          <h1>Join Splice</h1>
          <!-- FORM SIGNUP -->
          <div class="account-wall">
            <form action="<?php echo site_url('UserController/Signup'); ?>" method="POST" class="form-signin" >
              <label for="username" class="username">Username</label>
              <input name="username" type="text" class="form-control" placeholder="3+ characters" id="txt" onkeyup="manage(this)" required autofocus>
              <label class="fullname">Fullname or artist name</label>
              <input name="name" type="text" class="form-control" id="txt2" onkeyup="manage(this)" placeholder="Alice Cooper"required autofocus>
              <label for="email" class="email">Email</label>
              <input name="email" type="email" class="form-control" id="txt3" onkeyup="manage(this)" placeholder="a.cooper@example.com"required>
              <label for="password" class="password">Password</label>
              <input name="password" type="password" class="form-control" id="txt4" onkeyup="manage(this)" placeholder="8+ characters" required>
              <!-- CHECKBOX -->
              <div class="text-center">
                <label class="checkbox pull-left">
                  <input name="remember-me" type="checkbox" id="txt5" onkeyup="manage(this)" value="remember-me">
                    <span> I agree to splice's
                      <a href="#" class="terms">Terms</a>
                      &
                      <a href="#" class="privacy">Privacy Policy</a>
                      .
                    </span>
                </label>
              </div>
              <input class="btn btn-lg btn-primary btn-block" value="Sign Up" id="btSubmit" type="submit">
            </form>
          </div>
          <!-- ALREADY MEMBER -->
          <div class="text-center">
            <span>Already a member?</span>
              <a href="<?php echo site_url('Splice/Login'); ?>" class="new-account">Log in</a>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
