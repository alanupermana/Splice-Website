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
        <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/styleSpliceSignUp.css">
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
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-4 col-md-offset-4">

                    <!-- LOGO -->
                    <div class="login-avatar">
                        <a href="<?= base_url();?>">
                            <img src=<?php echo base_url('assets/img/logoSpliceLogin.png'); ?> alt="logo">
                        </a>
                    </div>
                    <!-- END LOGO -->

                    <h1>Join Splice</h1>

                    <!-- FORM -->
                    <div class="account-wall">
                        <form action="<?php echo site_url('UserController/Signup'); ?>" method="POST" class="form-signin" >

                            <!-- DATA -->
                            <label for="username" class="username">Username</label>
                            <input name="username" type="text" class="form-control" placeholder="3+ characters" id="txt" onkeyup="manage(this)" required autofocus>

                            <label class="fullname">Fullname or artist name</label>
                            <input name="name" type="text" class="form-control" id="txt2" onkeyup="manage(this)" placeholder="Alice Cooper"required autofocus>

                            <label for="email" class="email">Email</label>
                            <input name="email" type="email" class="form-control" id="txt3" onkeyup="manage(this)" placeholder="a.cooper@example.com"required>

                            <label for="password" class="password">Password</label>
                            <input name="password" type="password" class="form-control" id="txt4" onkeyup="manage(this)" placeholder="8+ characters" required>
                            <!-- END DATA -->

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
                            <!-- END CHECKBOX -->

                            <!-- BUTTON -->
                            <input class="btn btn-lg btn-primary btn-block" value="Sign Up" id="btSubmit" type="submit">
                            <!-- END BUTTON -->

                        </form>
                    </div>
                    <!-- END FORM -->

                    <!-- ALREADY MEMBER -->
                    <div class="text-center">
                        <span>Already a member?</span>
                        <a href="<?php echo site_url('Splice/Login'); ?>" class="new-account">Log in</a>
                    </div>
                    <!-- END ALREADY MEMBER -->

                </div>
            </div>
        </div>
    </body>
</html>
