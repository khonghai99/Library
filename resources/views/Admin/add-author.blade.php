<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Online Library Management System | Add Author</title>
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/font-awesome.css.css') }}" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'/>

</head>
<body>
<div class="content-wrapper">
    <div class=" content-wrapper">
        <div class="container">
            <div class="row pad-botm">
                <div class="col-md-12">
                    <h4 class="header-line">Add Author</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            Author Info
                        </div>
                        <div class="panel-body">
                            <form role="form" method="post">
                                <div class="form-group">
                                    <label>Author Name</label>
                                    <input class="form-control" type="text" name="author" autocomplete="off" required/>
                                </div>

                                <button type="submit" name="create" class="btn btn-info">Add</button>

                            </form>
                        </div>
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
</div>
</body>
</html>
