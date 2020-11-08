<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Online Library Management System | Student Signup</title>
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/font-awesome.css.css') }}" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'/>

</head>
<body>
@include('Users.header')
<div class="content-wrapper">
    <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">My Profile</h4>
            </div>
        </div>
        <div class="row">

            <div class="col-md-9 col-md-offset-1">
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        My Profile
                    </div>
                    <div class="panel-body">
                        <form name="signup" method="post">
                            <div class="form-group">
                                <label>Student ID : </label>
                            </div>
                            <div class="form-group">
                                <label>Reg Date : </label>
                            </div>
                            <div class="form-group">
                                <label>Last Updation Date : </label>
                            </div>
                            <div class="form-group">
                                <label>Profile Status : </label>
                                <span style="color: green">Active</span>
                                <span style="color: red">Blocked</span>
                            </div>
                            <div class="form-group">
                                <label>Enter Full Name</label>
                                <input class="form-control" type="text" name="fullanme"
                                       value="" autocomplete="off"
                                       required/>
                            </div>
                            <div class="form-group">
                                <label>Mobile Number :</label>
                                <input class="form-control" type="text" name="mobileno" maxlength="10"
                                       value="" autocomplete="off"
                                       required/>
                            </div>
                            <div class="form-group">
                                <label>Enter Email</label>
                                <input class="form-control" type="email" name="email" id="emailid"
                                       value="" autocomplete="off" required
                                       readonly/>
                            </div>
                            <button type="submit" name="update" class="btn btn-primary" id="submit">Update Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('Users.footer')
<script src="{{ asset('assets/js/custom.js') }}" defer></script>
<script src="{{ asset('assets/js/jquery-1.10.2.js') }}" defer></script>
<script src="{{ asset('assets/js/bootstrap.js') }}" defer></script>
</body>
</html>
