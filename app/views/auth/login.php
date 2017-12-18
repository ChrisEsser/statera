<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?=BASE_PATH?>/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="<?=BASE_PATH?>/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Statera</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- CSS core Libraries     -->
    <link href="<?=BASE_PATH?>/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?=BASE_PATH?>/css/material-dashboard.css" rel="stylesheet" />

    <!--  CSS for Demo Purpose, don't include it in your project   -->
    <link href="<?=BASE_PATH?>/css/style.css" rel="stylesheet" />

    <!-- fonts and icons -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>

</head>
<body>

    <div class="wrapper">
        <div class="content">
            <div class="login-container">

                <!-- start login form -->
                <div class="card" id="login-card" <?=($page == 'signup') ? 'style="display: none;"' : ''?>>
                    <div class="card-header" data-background-color="green">
                        <h4 class="title">Login</h4>
                        <p class="category">Or <a href="#" data-current="login">Sign Up</a></p>
                    </div>
                    <div class="card-content">
                        <form method="POST" action="<?=BASE_PATH?>/loginprocess">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating <?=(in_array('username', $missing)) ? 'has-error' : ''?>">
                                        <label class="control-label">Username</label>
                                        <input type="text" name="username" class="form-control" value="<?=(!empty($flash['username'])) ? $flash['username'] : ''?>" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating <?=(in_array('password', $missing)) ? 'has-error' : ''?>">
                                        <label class="control-label">Password</label>
                                        <input type="password" name="password" class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary pull-right" data-background-color="green">Go</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div><!-- end login form -->

                <!-- start sign up form -->
                <div class="card" id="login-card" <?=($page == 'login') ? 'style="display: none;"' : ''?>>
                    <div class="card-header" data-background-color="purple">
                        <h4 class="title">Sign Up</h4>
                        <p class="category">Or <a href="#" data-current="signup">Log In</a></p>
                    </div>
                    <div class="card-content">
                        <form method="POST" action="<?=BASE_PATH?>/signupprocess">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating <?=(in_array('username', $missing)) ? 'has-error' : ''?>">
                                        <label class="control-label">Email</label>
                                        <input type="text" name="username" class="form-control" value="<?=(!empty($flash['username'])) ? $flash['username'] : ''?>" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating <?=(in_array('password', $missing)) ? 'has-error' : ''?>">
                                        <label class="control-label">Password</label>
                                        <input type="password" name="password" class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating <?=(in_array('password_confirm', $missing)) ? 'has-error' : ''?>">
                                        <label class="control-label">Confirm Password</label>
                                        <input type="password" name="password_confirm" class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary pull-right" data-background-color="green">Go</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div><!-- end sign up form -->

            </div>
        </div>
    </div>

    <?=Notifications::displayErrors()?>

    <script>
        $(document).ready(function() {
            $('.card-header .category a').click(function(e) {

                e.preventDefault();
                var currentForm = $(this).data('current');

                $('.login-container .card:first-child').slideToggle();
                $('.login-container .card:last-child').slideToggle();
            });
        });
    </script>

</body>
</html>