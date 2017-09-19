<div class="navbar navbar-custom navbar-static-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
      <a class="navbar-brand" href="/" style="font-size: 26px;">Police clearance</a>
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
                <li>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                        Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
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