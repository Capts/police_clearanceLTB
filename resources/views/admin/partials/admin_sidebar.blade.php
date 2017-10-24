@include('admin.modals.enter_trans_code')
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->

    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">NAVIGATION</li>
     
      
      <li><a href="#" data-toggle="modal" data-target="#enter_trans_code"><i class="fa fa-server"></i> <span>Transactions</span></a></li>
      
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