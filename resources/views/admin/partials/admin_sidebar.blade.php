
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->

    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">NAVIGATION</li>
     
      
      <li><a href="{{ route('transaction.index') }}" ><i class="fa fa-briefcase"></i> <span>Appointments
      @if ($applications->count() > 0)
        <span class="label label-danger pull-right" style="margin-top: 7px;"> pending</span>

      @endif
      </span></a></li>
      
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