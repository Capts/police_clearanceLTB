<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{ Storage::url(Auth::user()->avatar)}}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>{{ ucfirst(auth()->user()->firstname) .  ' ' . ucfirst(auth()->user()->lastname) }}</p>
        <div class="text-aqua">{{ auth()->user()->email }}</div>
      </div>
    </div>
   
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">NAVIGATION</li>

      <li><a href="#"><i class="fa fa-book"></i> <span>Application</span></a></li>
      <li><a href="#"><i class="fa fa-server"></i> <span>Transactions</span></a></li>
      {{-- <li class="treeview"> --}}
      
      
      
      <li class="header">SETTINGS</li>
      <li><a href="#"><i class="fa fa-pencil"></i> <span>Edit information</span></a></li>
      <li><a href="#"><i class="fa fa-cog"></i> <span>Change password</span></a></li>
      
      <li class="header">SYSTEM</li>
      <li>
          <a href="{{ route('logout') }}"
              onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
              <i class="fa fa-power-off"></i> &nbsp;Logout
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
          </form>

      </li>

       <li>
         <a href="#" class="text-green"><i class="fa fa-clock-o"></i><span>Open from 6:00AM to 6:00PM</span></a>
        
      </li>
      
    </ul>
  </section>
</aside>