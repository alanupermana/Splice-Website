<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign in</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/styleSpliceSignUp.css">
</head>
<body>
        <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-4 col-md-offset-4">
                        <!-- <h1 class="text-center login-title">Sign in</h1> -->
                        <div class="login-avatar">
                          <a href="<?= base_url();?>">
                            <img src=<?php echo base_url('assets/img/logoSpliceLogin.png'); ?> alt="logo">
                          </a>
                        </div>
                        <h1>Join Splice</h1>
                        <div class="account-wall">
                            <!-- <img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
                                alt=""> -->
                            <form class="form-signin">
                            <label for="username" class="username">Username</label>
                                <input type="text" class="form-control" placeholder="3+ characters" required>
                            <label class="fullname">Fullname or artist name</label>
                                <input type="text" class="form-control" placeholder="Alice Cooper"required autofocus>
                            <label for="email" class="email">Email</label>
                                <input type="email" class="form-control" placeholder="a.cooper@example.com"required>
                            <label for="password" class="password">Password</label>
                            <input type="password" class="form-control" placeholder="8+ characters" required>
                            <!-- <button class="login100-form-btn" type="submit">
                                Log in
                            </button> -->
                            <div class="text-center">
                                <label class="checkbox pull-left">
                                        <input type="checkbox" value="remember-me">
                                        <span> I agree to splice's <a href="#" class="terms">Terms</a> & <a href="#" class="privacy">Privacy Policy</a>.</span>
                                </label>
                            </div>

                            <button class="btn btn-lg btn-primary btn-block" type="submit">
                                    Sign Up
                                </button>

                            <!-- <div class="text-center">
                                    <a href="#" class="need-help">Forgot your password? </a><span class="clearfix"></span>
                            </div> -->

                            </form>
                        </div>
                        <div class="text-center">
                                <span>Already a member?</span>
                                <a href="<?= base_url();?>Login" class="new-account">Log in</a>

                        </div>

                    </div>
                </div>
            </div>

</body>
</html>
