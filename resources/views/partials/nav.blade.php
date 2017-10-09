@guest

<nav class="navbar navbar-fixed-top" role="navigation" style="background-color:#4d8ba8;margin:0px;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="http://phpoll.com/register" class="dropdown-toggle navtxt" data-toggle="dropdown">Register {{-- <span class="caret"></span> --}}</a>
          <ul class="dropdown-menu dropdown-lr animated flipInX" role="menu">
            <div class="col-lg-12">
              <div class="text-center">
                <h3><b>Register</b></h3></div>
              {{-- <form id="ajax-register-form" action="http://phpoll.com/register/process" method="post" role="form" autocomplete="off">
                <div class="form-group">
                  <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                </div>
                <div class="form-group">
                  <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
                </div>
                <div class="form-group">
                  <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                </div>
                <div class="form-group">
                  <input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-xs-6 col-xs-offset-3">
                      <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-info" value="Register Now">
                    </div>
                  </div>
                </div>
                <input type="hidden" class="hide" name="token" id="token" value="7c6f19960d63f53fcd05c3e0cbc434c0">
              </form> --}}
              @include('auth.register_mod')
            </div>
          </ul>
        </li>
        <li class="dropdown">
          <a href="http://phpoll.com/login" class="dropdown-toggle navtxt" data-toggle="dropdown">Log In {{-- <span class="caret"></span> --}}</a>
          <ul class="dropdown-menu dropdown-lr animated slideInRight" role="menu">
            <div class="col-lg-12">
              <div class="text-center">
                <h3><b>Log In</b></h3></div>
            {{--   <form id="ajax-login-form" action="http://phpoll.com/login/process" method="post" role="form" autocomplete="off">
                <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="" autocomplete="off">
                </div>

                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password" autocomplete="off">
                </div>

                <div class="form-group">
                  <div class="row">
                    <div class="col-xs-7">
                      <input type="checkbox" tabindex="3" name="remember" id="remember">
                      <label for="remember"> Remember Me</label>
                    </div>
                    <div class="col-xs-5 pull-right">
                      <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-success" value="Log In">
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="text-center">
                        <a href="http://phpoll.com/recover" tabindex="5" class="forgot-password">Forgot Password?</a>
                      </div>
                    </div>
                  </div>
                </div>
                <input type="hidden" class="hide" name="token" id="token" value="a465a2791ae0bae853cf4bf485dbe1b6">
              </form> --}}
              @include('auth.login_mod')
            </div>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
  

@else

<header class="main-header">

  @guest
        <!-- Logo -->
        <a href="#" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          {{-- <span class="logo-mini"><b>A</b>LT</span> --}}
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Welcome</b></span>
        </a>
  @else

  @endguest
  

  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    @guest

    @else

      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
    @endguest

    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        
        @guest
            <li>  
                @include('auth.login_mod')
            </li>

        @else
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="" class="user-image" alt="User Image">
                <span class="hidden-xs">Alexander Pierce</span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                  <p>
                    Alexander Pierce - Web Developer
                    <small>Member since Nov. 2012</small>
                  </p>
                </li>
                <!-- Menu Body -->
                <li class="user-body">
                  <div class="row">
                    <div class="col-xs-4 text-center">
                      <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Friends</a>
                    </div>
                  </div>
                  <!-- /.row -->
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="#" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
        @endguest
       
      
      </ul>
    </div>
  </nav>
</header>

@endguest



