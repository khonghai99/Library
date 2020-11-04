<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Online Library Management System | Admin Dash Board</title>
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/font-awesome.css.css') }}" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'/>

</head>
<body>
<div class="navbar navbar-inverse set-radius-zero" >
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand">

                <img src="assets/img/logo.png" />
            </a>

        </div>

        <div class="right-div">
            <a href="/login" class="btn btn-danger pull-right">LOG OUT</a>
        </div>
    </div>
</div>
<section class="menu-section">
    <div class="container">
        <div class="row ">
            <div class="col-md-12">
                <div class="navbar-collapse collapse ">
                    <ul id="menu-top" class="nav navbar-nav navbar-right">
                        <li><a href="dashboard.php" class="menu-top-active">DASHBOARD</a></li>

                        <li>
                            <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown"> Categories <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="add-category.blade.php">Add Category</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="manage-categories.blade.php">Manage Categories</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown"> Authors <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="add-author.blade.php">Add Author</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="-authors.php">Manage Authors</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown"> Books <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="add-book.blade.php">Add Book</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="-books.php">Manage Books</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown"> Issue Books <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="issue-book.blade.php">Issue New Book</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="manage--books.php">Manage Issued Books</a></li>
                            </ul>
                        </li>
                        <li><a href="reg.php">Reg Students</a></li>

                        <li><a href="change-password.blade.php">Change Password</a></li>
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
                <h4 class="header-line">ADMIN DASHBOARD</h4>
            </div>
        </div>

        <div class="row">

            <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="alert alert-success back-widget-set text-center">
                    <i class="fa fa-book fa-5x"></i>
                    <h3>{{ session('listedbooks') }} </h3>
                    Books Listed
                </div>
            </div>


            <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="alert alert-info back-widget-set text-center">
                    <i class="fa fa-bars fa-5x"></i>
                    <h3>{{ session('issuedbooks') }}</h3>
                    Times Book Issued
                </div>
            </div>

            <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="alert alert-warning back-widget-set text-center">
                    <i class="fa fa-recycle fa-5x"></i>

                    <h3>{{ session('returnedbooks') }}</h3>
                    Times Books Returned
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="alert alert-danger back-widget-set text-center">
                    <i class="fa fa-users fa-5x"></i>

                    <h3>{{ session('regstds') }}</h3>
                    Registered Users
                </div>
            </div>

        </div>


        <div class="row">

            <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="alert alert-success back-widget-set text-center">
                    <i class="fa fa-user fa-5x"></i>
                    <h3>{{ session('listdathrs') }}</h3>
                    Authors Listed
                </div>
            </div>


            <div class="col-md-3 col-sm-3 rscol-xs-6">
                <div class="alert alert-info back-widget-set text-center">
                    <i class="fa fa-file-archive-o fa-5x"></i>
                    <h3>{{ session('listdcats') }}</h3>
                    Listed Categories
                </div>
            </div>


        </div>


        <div class="row">

            <div class="col-md-10 col-sm-8 col-xs-12 col-md-offset-1">
                <div id="carousel-example" class="carousel slide slide-bdr" data-ride="carousel">

                    <div class="carousel-inner">
                        <div class="item active">

                            <img src="assets/img/1.jpg" alt=""/>

                        </div>
                        <div class="item">
                            <img src="assets/img/2.jpg" alt=""/>

                        </div>
                        <div class="item">
                            <img src="assets/img/3.jpg" alt=""/>

                        </div>
                    </div>
                    <!--INDICATORS-->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example" data-slide-to="1"></li>
                        <li data-target="#carousel-example" data-slide-to="2"></li>
                    </ol>
                    <!--PREVIUS-NEXT BUTTONS-->
                    <a class="left carousel-control" href="#carousel-example" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
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
