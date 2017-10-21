<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    
    <div class="user-panel">
      <div class=" text-center">
        {{-- <p class="text-center" style="margin-top: 10px;"> --}}
          
          <img src="/img/baguio_logo.png" alt="" style="height: 100px;width: 100px;">
        {{-- </p> --}}
      </div>
      <div class="text-center">
        Police Clearance <br> Online Application <br>
        <small>Baguio City, Benguet, PH</small> <br>
        <small class="text-green  "><i class="fa fa-clock-o ">&nbsp;</i>open from 6AM-6PM</small>
      </div>
    </div>
   {{--  <div class="user-panel">
      <div class="pull-left image">
        <img src="{{ Storage::url(Auth::user()->avatar)}}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>{{ ucfirst(auth()->user()->firstname) .  ' ' . ucfirst(auth()->user()->lastname) }}</p>
        <div class="text-aqua">{{ auth()->user()->email }}</div>
      </div>
    </div> --}}
   
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">NAVIGATION</li>
      <li>
        <a href="{{ route('dashboard') }}"><i class="fa fa-arrow-right"></i> <span>Dashboard</span></a>
      </li>
      <li class="treeview">

        <a href="#"><i class="fa fa-book"></i> <span>Application</span></a>
        <ul class="treeview-menu">
          <li><a href="{{ route('application.create')}}"><i class="fa fa-file"></i> Apply for clearance</a></li>
          <li><a href="#"><i class="fa fa-server"></i> <span>Transactions</span></a></li>
          
        </ul>
      </li>
      
      {{-- <li class="treeview"> --}}
      
      
      
      <li class="header">SETTINGS</li>
      <li><a href="{{ route('applicant.edit', auth()->user()->id) }}"><i class="fa fa-pencil"></i> <span>Edit information</span></a></li>
      <li><a href="#"><i class="fa fa-cog"></i> <span>Change password</span></a></li>
     
      <li>
          <a href="{{ route('logout') }}"
              onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
              <i class="fa fa-power-off"></i> &nbsp;<span>Logout</span>
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
          </form>

      </li>

      
    </ul>
  </section>
</aside>