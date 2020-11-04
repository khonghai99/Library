<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Online Library Management System</title>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'/>

    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/font-awesome.css.css') }}" rel="stylesheet">

</head>
<body>
<div class="navbar navbar-inverse set-radius-zero">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand">

                <img src="assets/img/logo.png"/>
            </a>

        </div>
    </div>
</div>
<section class="menu-section">
    <div class="container">
        <div class="row ">
            <div class="col-md-12">
                <div class="navbar-collapse collapse ">
                    <ul id="menu-top" class="nav navbar-nav navbar-right">

                        <li><a href="adminlogin.php">Admin Login</a></li>
                        <li><a href="signup.php">User Signup</a></li>
                        <li><a href="index.php">User Login</a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>

<div class="content-wrapper">
    <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">USER LOGIN FORM</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        LOGIN FORM
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" action="dashboard">
                            @csrf
                            <div class="form-group">
                                <label>Enter Email id</label>
                                <input class="form-control" type="text" name="emailid" required autocomplete="off"/>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input class="form-control" type="password" name="password" required
                                       autocomplete="off"/>
{{--                                <p class="help-block"><a href="user-forgot-password.php">Forgot Password</a></p>--}}
                            </div>

                            <button type="submit" name="login" class="btn btn-info">LOGIN</button>
{{--                            | <a href="signup.php">Not Register Yet</a>--}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                &copy; 2020 Library Management System |<a href="" target="_blank"> Designed by : GroupH2</a>
            </div>

        </div>
    </div>
</section>
<script src="{{ asset('assets/js/custom.js') }}" defer></script>
<script src="{{ asset('assets/js/jquery-1.10.2.js') }}" defer></script>
<script src="{{ asset('assets/js/bootstrap.js') }}" defer></script>
</body>
</html>
