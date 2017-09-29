@guest

@else

<header class="main-header" style="">
  <!-- Logo -->
  <a href="/home" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>LTB</b></span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>Police Clearance</b></span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->

  

  <nav class="navbar1 navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </a>


  <a href="/" class="brand">
  	<img src="/img/baguio_logo.png" height="90px" width="90px" alt="logo">
  </a>
    

    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- Messages: style can be found in dropdown.less-->
       
        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="{{ Storage::url(auth()->user()->avatar) }}" class="user-image" alt="User Image">
            <span class="hidden-xs">{{ ucfirst(auth()->user()->firstname). ' '. ucfirst(auth()->user()->lastname) }}</span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
              <img src="{{ Storage::url(auth()->user()->avatar) }}" class="img-circle" alt="User Image">

              <p>
                {{ ucfirst(auth()->user()->firstname). ' '. ucfirst(auth()->user()->lastname) }}
                <small>{{ date('M j,Y', strtotime(Auth::getUser()->created_at)) }}</small>
              </p>
            </li>
            <!-- Menu Body -->
            
            <!-- Menu Footer-->
            <li class="user-body">
            	<div class="row">
            		
            	
		              <div class="pull-left">
		                <a href="#" class="btn btn-default btn-flat">Profile</a>
		              </div>
		              <div class="pull-right">
		                	
		                	                      
			                        <a class=" btn-block btn btn-flat bg-maroon" href="{{ route('logout') }}"
			                            onclick="event.preventDefault();
			                                     document.getElementById('logout-form').submit();">
			                            <i class="fa fa-sign-out"></i> &nbsp;Logout
			                        </a>

			                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
			                            {{ csrf_field() }}
			                        </form>
			                                
		              </div>
		        </div>	
            </li>
          </ul>
        </li>
        
      </ul>
    </div>
  </nav>
</header>

@endguest
