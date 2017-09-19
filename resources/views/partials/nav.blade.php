<div class="navbar navbar-custom navbar-static-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
      <a class="navbar-brand" href="/" >Police clearance</a>
    </div>
    
        {{-- expr --}}
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
       {{--  <li class="active"><a href="#">Home</a></li>
        <li class="active"><a href="#">About Us</a></li>
        <li class="active"><a href="#">Services</a></li>
        
        <li><a href="#contact">Contact</a></li> --}}
      </ul>
        @if (Auth::check())
            <ul class="nav navbar-nav navbar-right">
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="{{ Storage::url(auth()->user()->avatar) }}" class="user-image" alt="User Image">
                    <span class="hidden-xs">{{ ucfirst(auth()->user()->firstname). ' '  .ucfirst(auth()->user()->lastname)  }}</span>
                  </a>
                  <ul class="dropdown-menu" style="background-color: #4d8ba8;">
                    <!-- User image -->
                    <li class="user-header">
                      <img src="{{ Storage::url(auth()->user()->avatar) }}" class="img-circle" alt="User Image">

                      <p>
                        {{ auth()->user()->name }}
                        <small>Member since {{ date('M j,Y', strtotime(Auth::getUser()->created_at)) }}</small>
                      </p>
                    </li>
                    <!-- Menu Footer-->
                    <li class="user-footer">
                      <div class="text-center">
                        <a class="btn btn-danger btn-block btn-flat " href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                           Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                      </div>
                    </li>
                  </ul>
                </li>
            </ul>
        @else
            <ul class="nav navbar-nav navbar-right">
                {{-- <li><a href="/register">Register</a></li>
                <li><a href="/login">Login</a></li> --}}
            </ul>
            
            
        @endif
    </div><!--/.nav-collapse -->
    
  </div>
</div>