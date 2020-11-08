<div class="navbar navbar-inverse set-radius-zero" >
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" >

                <img src="assets/img/logo.png" />
            </a>

        </div>
        @if(session()->has('login'))
        <div class="right-div">
            <a href="/login" class="btn btn-danger pull-right">LOG OUT</a>
        </div>
        @endif
    </div>
</div>
@if(session()->has('login'))
<section class="menu-section">
    <div class="container">
        <div class="row ">
            <div class="col-md-12">
                <div class="navbar-collapse collapse ">
                    <ul id="menu-top" class="nav navbar-nav navbar-right">
                        <li><a href="{{ route('dashboard') }}" class="menu-top-active">DASHBOARD</a></li>
                        <li>
                            <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown"> Account <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ route('profile') }}">My Profile</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ route('change-password') }}">Change Password</a></li>
                            </ul>
                        </li>
                        <li><a href="issued-books.php">Issued Books</a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>
@else
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
@endif
