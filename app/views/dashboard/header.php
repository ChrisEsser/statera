<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?=BASE_PATH?>/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="<?=BASE_PATH?>/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Satera</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- CSS core Libraries     -->
    <link href="<?=BASE_PATH?>/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?=BASE_PATH?>/css/material-dashboard.css?v=1.2.0" rel="stylesheet" />

    <!--  CSS for Demo Purpose, don't include it in your project   -->
    <link href="<?=BASE_PATH?>/css/style.css" rel="stylesheet" />

    <!-- fonts and icons -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
</head>

<body>



    <div class="wrapper">

        <!-- sidebar -->
        <div class="sidebar" data-color="green" data-image="<?=BASE_PATH?>/img/sidebar-1.jpg">
            <div class="logo">
                <a href="<?=BASE_PATH?>" class="simple-text">
                    Statera
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="<?=$this->_action == 'dashboard' ? 'active' : ''?>">
                        <a href="<?=BASE_PATH?>/dashboard">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="<?=$this->_action == 'settings' ? 'active' : ''?>">
                        <a href="<?=BASE_PATH?>/settings">
                            <i class="material-icons">bubble_chart</i>
                            <p>Settings</p>
                        </a>
                    </li>
                    <li class="<?=$this->_action == 'notifications' ? 'active' : ''?>">
                        <a href="<?=BASE_PATH?>/notifications">
                            <i class="material-icons text-gray">notifications</i>
                            <p>Notifications</p>
                        </a>
                    </li>
                    <li class="<?=$this->_action == 'profile' ? 'active' : ''?>">
                        <a href="<?=BASE_PATH?>/profile">
                            <i class="material-icons">person</i>
                            <p>Profile</p>
                        </a>
                    </li>
<!--                    <li>-->
<!--                        <a href="./table.html">-->
<!--                            <i class="material-icons">content_paste</i>-->
<!--                            <p>Table List</p>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="./typography.html">-->
<!--                            <i class="material-icons">library_books</i>-->
<!--                            <p>Typography</p>-->
<!--                        </a>-->
<!--                    </li>-->

<!--                    <li>-->
<!--                        <a href="./maps.html">-->
<!--                            <i class="material-icons">location_on</i>-->
<!--                            <p>Maps</p>-->
<!--                        </a>-->
<!--                    </li>-->

                    <li class="active-pro">
                        <a href="<?=BASE_PATH?>/upgrade">
                            <i class="material-icons">unarchive</i>
                            <p>Upgrade to PRO</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div><!-- end sidebar -->

        <!-- start main wrapper (ends in footer) -->
        <div class="main-panel">

            <!-- start site notifications -->
            <div id="dashboard-notifications" style="display: none">
                <div class="alert alert-danger">
                    <div class="container-fluid">
                        <div class="alert-icon">
                            <i class="material-icons">error_outline</i>
                        </div>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true"><i class="material-icons">clear</i></span>
                        </button>
                        <b>Alert:</b> Damn man! You screwed up the server this time. You should find a good excuse for your Boss...
                    </div>
                </div>
            </div><!-- end site notifications -->

            <!-- mobile nav -->
            <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-header">

                        <!-- hamburger -->
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button><!-- end hamburger -->

                        <!-- current page -->
                        <a class="navbar-brand" href="#">
                            <?=ucwords($this->_action)?>
                        </a>

                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">

                            <!-- start notifications dropdown -->
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">notifications</i>
                                    <span class="notification">5</span>
                                    <p class="hidden-lg hidden-md">Notifications</p>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#">Notification one.</a>
                                    </li>
                                    <li>
                                        <a href="#">Another notification about something.</a>
                                    </li>
                                    <li>
                                        <a href="#">This is the third notification</a>
                                    </li>
                                    <li>
                                        <a href="#">Another Notification</a>
                                    </li>
                                    <li>
                                        <a href="#">Another One</a>
                                    </li>
                                </ul>
                            </li><!-- end notifications dropdown -->

<!--                            <li>-->
<!--                                <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">-->
<!--                                    <i class="material-icons">person</i>-->
<!--                                    <p class="hidden-lg hidden-md">Profile</p>-->
<!--                                </a>-->
<!--                            </li>-->

                        </ul>

                        <!-- start search form -->
                        <form class="navbar-form navbar-right" role="search">
                            <div class="form-group  is-empty">
                                <input type="text" class="form-control" placeholder="Search">
                                <span class="material-input"></span>
                            </div>
                            <button type="submit" class="btn btn-white btn-round btn-just-icon">
                                <i class="material-icons">search</i>
                                <div class="ripple-container"></div>
                            </button>
                        </form><!-- end search form -->

                    </div>
                </div>
            </nav><!-- end mobile nav -->

            <div class="content"><!-- ends in footer -->
                <div class="container-fluid"><!-- ends in footer -->