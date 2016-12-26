@if (Auth::check())
    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="http://placehold.it/160x160/00a65a/ffffff/&text={{ Auth::user()->name[0] }}" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>{{ Auth::user()->name }}</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          <li class="header">{{ trans('backpack::base.administration') }}</li>
          <!-- ================================================ -->
          <!-- ==== Recommended place for admin menu items ==== -->
          <!-- ================================================ -->
          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/dashboard') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.dashboard') }}</span></a></li>
		  <!-- 20161221 table tasks-->
		  <li><a href="{{ url('admin/task') }}"><i class="fa fa-tag"></i> <span>Manage Task [remove]</span></a></li>
		  <li><a href="{{ url('admin/service') }}"><i class="fa fa-tag"></i> <span>Manage Service</span></a></li>
		  <li><a href="{{ url('admin/tcd_article') }}"><i class="fa fa-tag"></i> <span>Manage TECDOC tcd_article</span></a></li>
		  <li><a href="{{ url('admin/tcd_car') }}"><i class="fa fa-tag"></i> <span>Manage TECDOC tcd_car</span></a></li>
		  <li><a href="{{ url('admin/tcd_art_categorie') }}"><i class="fa fa-tag"></i> <span>Manage TECDOC tcd_art_categories</span></a></li>
		  <li><a href="{{ url('admin/service_book') }}"><i class="fa fa-tag"></i> <span>Manage Service Books</span></a></li>
		  <li><a href="{{ url('admin/brand') }}"><i class="fa fa-tag"></i> <span>Manage Brands</span></a></li>
		  <li><a href="{{ url('admin/organization') }}"><i class="fa fa-tag"></i> <span>Manage Organizations</span></a></li>
		  <li><a href="{{ url('admin/occupation') }}"><i class="fa fa-tag"></i> <span>Manage Occupations</span></a></li>
		  <li><a href="{{ url('admin/organizationoccupation') }}"><i class="fa fa-tag"></i> <span>Manage OrganizationOccupation connects</span></a></li>
		  <!-- 20161219lim ���������� ������� -->
<li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/elfinder') }}"><i class="fa fa-files-o"></i> <span>File manager</span></a></li>

          <!-- ======================================= -->
          <li class="header">{{ trans('backpack::base.user') }}</li>
          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/logout') }}"><i class="fa fa-sign-out"></i> <span>{{ trans('backpack::base.logout') }}</span></a></li>
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>
@endif
