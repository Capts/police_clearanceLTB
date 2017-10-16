@guest

<nav class="navbar navbar-fixed-top" role="navigation" style="background-color:#4d8ba8;margin:0px;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar" style="background-color: white;"></span>
        <span class="icon-bar" style="background-color: white;"></span>
        <span class="icon-bar" style="background-color: white;"></span>
      </button>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right" style="background-color: transparent;">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle navtxt" data-toggle="dropdown">Register {{-- <span class="caret"></span> --}}</a>
          <ul class="dropdown-menu dropdown-lr animated flipInX" role="menu" style="background-color: white;">
            <div class="col-lg-12">
              <div class="text-center">
                <h3><b>Register</b></h3></div>
             
              @include('auth.register_mod')
            </div>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle navtxt" data-toggle="dropdown">Log In {{-- <span class="caret"></span> --}}</a>
          <ul class="dropdown-menu dropdown-lr animated slideInRight" role="menu" style="background-color: white;">
            <div class="col-lg-12">
              <div class="text-center">
                <h3><b>Log In</b></h3></div>
            
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
  <!-- Logo -->
  <a href="{{ route('dashboard') }}" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    {{-- <span class="logo-mini"><b>A</b>LT</span> --}}
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>Police clearance</b></span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-fixed-top kk">
    <!-- Sidebar toggle button-->
    <a href="#" class="visible-xs sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </a>

    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
       
        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            @if (auth()->user()->avatar == 'public/default/avatars/default.jpg')
              <img src="/default/avatars/default.jpg" class="user-image">
            @else
              <img src="/upload/avatars/{{ auth()->user()->avatar }}" class="user-image">
            @endif
            <span class="hidden-xs">{{ ucfirst(auth()->user()->firstname) . ' ' .ucfirst(auth()->user()->lastname) }}</span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
             @if (auth()->user()->avatar == 'public/default/avatars/default.jpg')
               <img src="/default/avatars/default.jpg" class="img-circle">
             @else
               <img src="/upload/avatars/{{ auth()->user()->avatar }}" class="img-circle">
             @endif

              <p>
                {{ ucfirst(auth()->user()->firstname) . ' ' .ucfirst(auth()->user()->lastname) }}
                
              </p>
            </li>
            <!-- Menu Body -->
            <li class="user-body">
                <a href="{{ route('logout') }}" class="btn btn-flat btn-block" 
                    onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                    <i class="fa fa-power-off" style="color: red;"></i>Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>

            </li>
          </ul>
        </li>
        <!-- Control Sidebar Toggle Button -->
     
      </ul>
    </div>
  </nav>
</header>
@endguest



