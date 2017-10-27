<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar lato">
    <!-- Sidebar user panel -->
    
    <div class="user-panel no-padding">
      <br>
      <div class=" text-center">
        {{-- <p class="text-center" style="margin-top: 10px;"> --}}
          
          <img src="/img/benguet_logo.png" alt="" style="height: 100px;width: 100px;">
        {{-- </p> --}}
      </div>
      <br>
      <div class="text-center text-white">
        <span class="no-padding">Police Clearance Online Application</span> <br>
        <span class="no-padding">Philippine National Police</span> <br>
        <small>Benguet, Philippines</small> <br>
        <p class="text-green "><i class="fa fa-clock-o">&nbsp;</i>open from 6AM-6PM</p>
      </div>
    </div>
   
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
      
      
      
      
      <li class="header">SETTINGS</li>
      <li><a href="{{ route('applicant.edit', auth()->user()->id) }}"><i class="fa fa-pencil"></i> <span>Edit information</span></a></li>
      <li><a href="{{ route('updatepass.get') }}"><i class="fa fa-cog"></i> <span>Change password</span></a></li>
     
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