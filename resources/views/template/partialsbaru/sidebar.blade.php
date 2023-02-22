<aside class="main-sidebar sidebar-blue-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ asset('adminlte/index3.html')}}" class="brand-link">
      <img src="{{ asset('adminlte/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Laundry CC</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('Adminlte/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
      <!-- /.sidebar-menu -->
      <li class="nav-item">
      <a href="/dasboard/admin" class="nav-link">
        <i class="nav-icon fas fa-user-alt"></i>
        <p>
          Admin
        </p>
      </a>
      </li>
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          @if (auth()->user()->role == 'admin')
          <li class="nav-header">ini outlet</li>
          <li class="nav-item">
            <a href="/outlet" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Outlet
              </p>
            </a>
          </li>
          <li class="nav-header">ini paket</li>
          <li class="nav-item">
            <a href="/paket" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Paket
              </p>
            </a>
          </li>
          <li class="nav-header">ini member</li>
          <li class="nav-item">
            <a href="/member" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Member
              </p>
            </a>
          </li>
          @endif
          <li class="nav-item">
            <a href="{{ route('logout')}}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
    </div>
    <!-- /.sidebar -->
  </aside>